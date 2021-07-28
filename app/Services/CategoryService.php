<?php

namespace App\Services;

use Illuminate\Support\Str;

class CategoryService
{
    public function store($request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name, '-');

        if ($request->hasFile('image')) {
            $uploadService = new UploadFileService;
            $data['image'] = $uploadService->uploadToPublic($request, 'image', 'categories');
        }

        return $data;
    }
}
