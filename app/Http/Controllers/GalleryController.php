<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    // Admin - List Gallery
    public function index()
    {
        $galleries = Gallery::latest()->get();

        return view('admin.gallery.index', compact('galleries'));
    }

    // Public Gallery
    public function publicGallery(Request $request)
    {
        $query = Gallery::query();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $galleries = $query->latest()->get();

        return view('pages.gallery', compact('galleries'));
    }

        public function home()
    {
        $featured = [
            'Wedding' => Gallery::where('category', 'Wedding')
                ->where('is_cover', true)
                ->first(),

            'Portrait' => Gallery::where('category', 'Portrait')
                ->where('is_cover', true)
                ->first(),

            'Event' => Gallery::where('category', 'Event')
                ->where('is_cover', true)
                ->first(),

            'Travel' => Gallery::where('category', 'Travel')
                ->where('is_cover', true)
                ->first(),
        ];

        return view('pages.home', compact('featured'));
    }

    // Simpan Data
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category' => 'required',
            'location' => 'nullable|max:255',
            'description' => 'nullable',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $imagePath = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'title' => $request->title,
            'category' => $request->category,
            'location' => $request->location,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()
            ->route('gallery.index')
            ->with('success', 'Photo uploaded successfully!');
    }

    public function show(Gallery $gallery)
    {
        //
    }

    public function setCover(Gallery $gallery)
    {
        Gallery::where('category', $gallery->category)
            ->update([
                'is_cover' => false
            ]);

        $gallery->update([
            'is_cover' => true
        ]);

        return back()->with(
            'success',
            'Cover photo updated successfully!'
        );
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function dashboard()
{
    $totalPhotos = Gallery::count();

    $categories = Gallery::distinct('category')->count('category');

    $covers = Gallery::where('is_cover', true)->count();

    return view('admin.dashboard', compact(
        'totalPhotos',
        'categories',
        'covers'
    ));
}

    public function update(Request $request, Gallery $gallery)
    {
         $request->validate([
        'title' => 'required|max:255',
        'category' => 'required',
        'location' => 'nullable|max:255',
        'description' => 'nullable',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
    ]);

    $data = [
        'title' => $request->title,
        'category' => $request->category,
        'location' => $request->location,
        'description' => $request->description,
    ];

    if ($request->hasFile('image')) {

        // Hapus foto lama
        if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }

        // Upload foto baru
            $data['image'] = $request->file('image')->store('gallery', 'public');
        }

        if ($request->has('is_cover')) {

        Gallery::where('category', $gallery->category)
            ->update([
                'is_cover' => false
            ]);

        $data['is_cover'] = true;

    } else {

        $data['is_cover'] = false;

    }

    $gallery->update($data);

    return redirect()
        ->route('gallery.index')
        ->with('success', 'Photo updated successfully!');
    }

    public function destroy(Gallery $gallery)
    {
     // Hapus file gambar
    if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
        Storage::disk('public')->delete($gallery->image);
    }

    // Hapus data
    $gallery->delete();

    return redirect()
        ->route('gallery.index')
        ->with('success', 'Photo deleted successfully!');
    }
}
