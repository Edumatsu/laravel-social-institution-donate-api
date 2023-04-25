<?php

namespace App\Services\Backoffice;

use App\Models\Institution;
use App\Models\InstitutionImage;
use App\Models\InstitutionCategory;
use App\Models\Address;
use App\Models\InstitutionAddress;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Services\AttachmentService;
use Illuminate\Support\Arr;

class InstitutionService
{
    public function __construct(AttachmentService $attachmentService)
    {
        $this->attachmentService = $attachmentService;
    }

    public function slugify(string $text, string $divider = '-'): string
    {
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, $divider);
        $text = preg_replace('~-+~', $divider, $text);

        return strtolower($text);
    }

    public function create(array $attributes): Institution
    {
        try {
            DB::beginTransaction();

            $attributes['slug'] = $this->slugify($attributes['name']);
            $attributes['approved'] = true;

            if (!trim($attributes['description']) && $attributes['about']) {
                $attributes['description'] = substr($attributes['about'], 0, 137) . "...";
            }

            $institution = Institution::query()->create($attributes);

            if (isset($attributes['attachment']) && $attributes['attachment']) {
                $institution->logo_url = $this->attachmentService->storeFile($attributes['attachment'], "institution/{$institution->id}");
            }

            $institution->save();

            $this->storeCategories($attributes, $institution);
            //$this->storeAddress($attributes, $institution);

            if (isset($attributes['images']) && $attributes['images']) {
                $this->storeImages($attributes['images'], $institution);
            }

            DB::commit();

            return $institution;
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    protected function storeCategories(array $attributes, Institution $institution)
    {
        InstitutionCategory::query()->create([
            'institution_id' => $institution->id,
            'category_id' => $attributes['main_category'],
            'main' => true,
        ]);

        if (isset($attributes['categories'])) {
            foreach ($attributes['categories'] as $category) {
                InstitutionCategory::query()->create([
                    'institution_id' => $institution->id,
                    'category_id' => $category,
                    'main' => false,
                ]);
            }
        }
    }

    protected function storeAddress(array $attributes, Institution $institution)
    {
        $address = Address::query()->create($attributes['address']);

        InstitutionAddress::query()->create([
            'institution_id' => $institution->id,
            'address_id' => $address->id,
            'main' => true,
        ]);
    }

    protected function storeImages(array $images, Institution $institution)
    {
        $existantImages = InstitutionImage::query()->where('institution_id', $institution->id)->get();

        foreach ($images as $i => $image) {
            $olderPath = "";
            if (Arr::get($existantImages, $i)) {
                $olderPath = $existantImages[$i]->image_url;

                $photoUrl = $this->attachmentService->storeFile($image, "institution/{$institution->id}/images", 'private', $olderPath);

                $existantImages[$i]->update([
                    'image_url' => $photoUrl
                ]);
            } else {
                $photoUrl = $this->attachmentService->storeFile($image, "institution/{$institution->id}/images");

                InstitutionImage::query()->create([
                    'institution_id' => $institution->id,
                    'image_url' => $photoUrl
                ]);
            }

        }
    }

    public function update(array $attributes, Institution $institution): bool
    {
        try {
            DB::beginTransaction();

            if (!trim($attributes['description']) && $attributes['about']) {
                $attributes['description'] = substr($attributes['about'], 0, 137) . "...";
            }

            if (Arr::get($attributes, 'attachment')) {
                $attributes['logo_url'] = $this->attachmentService->storeFile($attributes['attachment'], "institution/{$institution->id}", 'private', $institution->logo_url);
            }

            $updated = $institution->update($attributes);

            InstitutionCategory::query()->where('institution_id', $institution->id)->delete();
            $this->storeCategories($attributes, $institution);

            if (isset($attributes['images']) && $attributes['images']) {
                $this->storeImages($attributes['images'], $institution);
            }

            DB::commit();

            return $updated;
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
