<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Gallery\CreateGallery;
use App\Actions\Gallery\UpdateGallery;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function store(GalleryRequest $galleryRequest, CreateGallery $createGallery)
    {
        $validatedData = $galleryRequest->validated();
        
        $gallery = $createGallery->handle($validatedData);

        return response()->json([
            'message' => 'Gallery created successfully',
            'data' => $gallery
        ], 201);
    }

    public function update(GalleryRequest $galleryRequest, UpdateGallery $updateGallery, $id)
    {
        $validatedData = $galleryRequest->validated();

        $gallery = Gallery::findOrFail($id);
        $updatedGallery = $updateGallery->handle($gallery, $validatedData);

        return response()->json([
            'message' => 'Gallery updated successfully',
            'data' => $updatedGallery
        ], 200);
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return response()->json([
            'message' => 'Gallery deleted successfully',
        ], 200);
    }

}
