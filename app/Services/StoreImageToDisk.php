<?php

namespace App\Services;

class StoreImageToDisk {


    public function store($file) {
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs(
            '/uploads/items', $filename
        );

        return $filename;
    }
}