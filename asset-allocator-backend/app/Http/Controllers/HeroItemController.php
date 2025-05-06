<?php

namespace App\Http\Controllers;

use App\Models\HeroItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroItemController extends Controller
{
    // Get all hero items
    public function index()
    {
        return response()->json(HeroItem::all());
    }

    // Store a new hero item with image upload
    public function store(Request $request)
    {
        $request->validate([
            'hero_id' => 'required|exists:heroes,id',
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Store the uploaded image
        $path = $request->file('image')->store('images', 'public');

        $item = HeroItem::create([
            'hero_id' => $request->hero_id,
            'title' => $request->title,
            'image_path' => $path,
        ]);

        return response()->json($item, 201);
    }

    // Serve image directly
    public function showImage($id)
    {
        $item = HeroItem::findOrFail($id);
        $filePath = storage_path('app/public/' . $item->image_path);

        if (!file_exists($filePath)) {
            return response()->json(['error' => 'Image not found'], 404);
        }

        return response()->file($filePath);
    }

    // Delete hero item
    public function destroy($id)
    {
        $item = HeroItem::findOrFail($id);

        // Delete image from storage
        if ($item->image_path && Storage::disk('public')->exists($item->image_path)) {
            Storage::disk('public')->delete($item->image_path);
        }

        $item->delete();

        return response()->json(['message' => 'Hero item deleted']);
    }
}
