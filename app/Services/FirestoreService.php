<?php

namespace App\Services;

use MrShan0\PHPFirestore\FirestoreClient;
use MrShan0\PHPFirestore\Fields\FirestoreTimestamp;

class FirestoreService
{
    /**
     * Firestore API Client
     */
    private $firestoreClient;

    /**
     * Firestore Service Constructor
     */
    public function __construct()
    {
        $this->firestoreClient = new FirestoreClient(
            env('FIREBASE_PROJECT_ID'),
            env('FIREBASE_API_KEY'),
            [
                'database' => env('FIRESTORE_DATABASE'),
            ]
        );
    }

    public function store($id, array $data, $collectionName): void
    {
        $data['timestamp'] = new FirestoreTimestamp();

        $this->firestoreClient->setDocument("{$collectionName}/{$id}", $data);
    }

    public function destroy($id, $collectionName): void
    {
        $this->firestoreClient->deleteDocument("{$collectionName}/{$id}");
    }
}
