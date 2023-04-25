<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\FilesystemAdapter;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;

class AttachmentService
{
    protected $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage::disk('s3');
    }

    public function store(Request $request, string $folder, ?string $olderPath = ""): ?string
    {
        if ($olderPath) {
            $this->destroy($olderPath);
        }

        if ($request->file('attachment')) {
            return $this->storeFile($request->file('attachment'), $folder);
        }

        if ($request->get('attachmentBase64')) {
            return $this->storeBase64($request->get('attachmentBase64'), $folder);
        }

        return null;
    }

    public function storeFile(UploadedFile $file, string $folder, string $securityType = 'private', $olderPath = ""): ?string
    {
        $extension = $file->getClientOriginalExtension();
        $uuid = Uuid::uuid4()->toString();
        $path = "{$folder}/{$uuid}.{$extension}";
        $content = file_get_contents($file->getRealPath());

        $result = $this->storage->put($path, $content, $securityType);

        if ($olderPath) {
            $this->destroy($olderPath);
        }

        return ($result) ? $path : null;
    }

    public function storeBase64(array $data, string $folder, string $securityType = 'private', $olderPath = ""): ?string
    {
        $extension = $this->getExtension($data['name']);
        $content = $this->getContent($data['content']);
        $uuid = Uuid::uuid4()->toString();
        $path = "{$folder}/{$uuid}.{$extension}";

        $result = $this->storage->put($path, $content, $securityType);

        return ($result) ? $path : null;
    }

    public function destroy(string $olderPath): bool
    {
        return $this->storage->delete($olderPath);
    }

    protected function getExtension(string $filename): string
    {
        $nameParts = explode('.', $filename);

        return end($nameParts);
    }

    protected function getContent(string $file): string
    {
        $contentParts = explode(',', $file);
        $content = end($contentParts);

        return base64_decode($content);
    }
}
