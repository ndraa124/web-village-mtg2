<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Http\Requests\Gallery\StoreGalleryRequest;
use App\Http\Requests\Gallery\UpdateGalleryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = Gallery::query();

    $query->when($search, function ($q, $search) {
      return $q->where('caption', 'like', "%{$search}%");
    });

    $galleries = $query->latest()->paginate(10)->appends($request->query());

    $data = [
      'title' => 'Daftar Galeri',
      'main' => 'admin.galleries.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Daftar Galeri'
        ],
      ],
      'galleries' => $galleries
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Galeri',
      'main' => 'admin.galleries.create',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'galleries.index',
          'title' => 'Daftar Galeri'
        ],
        [
          'title' => 'Tambah Data'
        ],
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreGalleryRequest $request)
  {
    $validatedData = $request->validated();

    try {
      $imagePath = $request->file('image')->store('gallery_images', 'public');
      $validatedData['image'] = $imagePath;

      Gallery::create($validatedData);

      return redirect()->route('galleries.index')
        ->with('success', 'Gambar galeri berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(Gallery $gallery)
  {
    $data = [
      'title' => 'Edit Galeri',
      'main' => 'admin.galleries.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'galleries.index',
          'title' => 'Daftar Galeri'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'gallery' => $gallery
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateGalleryRequest $request, Gallery $gallery)
  {
    $validatedData = $request->validated();

    try {
      if ($request->hasFile('image')) {
        if ($gallery->image) {
          Storage::disk('public')->delete($gallery->image);
        }

        $imagePath = $request->file('image')->store('gallery_images', 'public');
        $validatedData['image'] = $imagePath;
      }

      $gallery->update($validatedData);

      return redirect()->route('galleries.index')
        ->with('success', 'Gambar galeri berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(Gallery $gallery)
  {
    try {
      if ($gallery->image) {
        Storage::disk('public')->delete($gallery->image);
      }

      $gallery->delete();

      return redirect()->route('galleries.index')
        ->with('success', 'Gambar galeri berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
