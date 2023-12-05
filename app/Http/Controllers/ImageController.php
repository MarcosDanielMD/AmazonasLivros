<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function show($filename)
    {
        $path = storage_path("app/public/images/{$filename}");

        if (!Storage::exists("public/images/{$filename}")) {
            abort(404);
        }

        return response()->file($path);
    }
}
