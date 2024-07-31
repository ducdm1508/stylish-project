<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function getGallery()
    {
        $gallery = new Gallery();
        $listGallery = $gallery->getList();
        return response()->json(['gallery' => $listGallery]);
    }

    public function insert(Request $request)
    {
        $newGallery = $request->all();
        $gallery = new Gallery();
        $gallery->insert($newGallery);
        return response()->json($newGallery);
    }

    public function update($id, Request $request)
    {
        $updateGallery = $request->all();
        $gallery = new Gallery();
        $gallery->updateGallery($id, $updateGallery);
        return response()->json($updateGallery);
    }

    public function delete($id)
    {
        $gallery = new Gallery();
        $gallery->deleteGallery($id);
        return response()->json(['message' => 'Deleted Successfully']);
    }
}
