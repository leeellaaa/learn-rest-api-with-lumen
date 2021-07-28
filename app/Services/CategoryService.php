<?php

namespace App\Services;
use Illuminate\Support\Str;

class CategoryService
{
    public function store($request)
    {
        $request['slug'] = Str::slug($request->name, '-');

        return $request->all();
    }
}
