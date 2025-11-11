<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Http\Requests\Slider\StoreSliderRequest;
use App\Http\Requests\Slider\UpdateSliderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = Slider::query();

    $query->when($search, function ($q, $search) {
      return $q->where('title', 'like', "%{$search}%")
        ->orWhere('subtitle', 'like', "%{$search}%");
    });

    $sliders = $query->orderByDesc('is_active')
      ->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Slider',
      'main' => 'admin.slider.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Slider',
        ]
      ],
      'sliders' => $sliders
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Slider',
      'main' => 'admin.slider.create',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'slider.index',
          'title' => 'Slider',
        ],
        [
          'title' => 'Tambah Slider',
        ]
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreSliderRequest $request)
  {
    $validatedData = $request->validated();

    try {
      if ($request->hasFile('image')) {
        $path = $request->file('image')->store('sliders', 'public');
        $validatedData['image'] = $path;
      }

      Slider::create($validatedData);

      return redirect()->route('slider.index')
        ->with('success', 'Slider baru berhasil ditambahkan.');
    } catch (\Exception $e) {
      DB::rollBack();
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(Slider $slider)
  {
    $data = [
      'title' => 'Detail Slider',
      'main' => 'admin.slider.show',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'slider.index',
          'title' => 'Slider',
        ],
        [
          'title' => 'Detail Slider',
        ]
      ],
      'slider' => $slider
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(Slider $slider)
  {
    $data = [
      'title' => 'Edit Slider',
      'main' => 'admin.slider.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'slider.index',
          'title' => 'Slider',
        ],
        [
          'title' => 'Edit Slider',
        ]
      ],
      'slider' => $slider
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateSliderRequest $request, Slider $slider)
  {
    $validatedData = $request->validated();
    $newIsActiveState = $request->has('is_active');

    try {
      $slider->title = $validatedData['title'];
      $slider->subtitle = $validatedData['subtitle'];
      $slider->is_active = $newIsActiveState;

      if ($request->hasFile('image')) {
        if ($slider->image) {
          Storage::disk('public')->delete($slider->image);
        }

        $path = $request->file('image')->store('sliders', 'public');
        $slider->image = $path;
      }

      $slider->save();

      return redirect()->route('slider.index')
        ->with('success', 'Slider berhasil diperbarui.');
    } catch (\Exception $e) {
      DB::rollBack();
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(Slider $slider)
  {
    DB::beginTransaction();

    try {
      if ($slider->image) {
        Storage::disk('public')->delete($slider->image);
      }

      $slider->delete();

      DB::commit();

      return redirect()->route('slider.index')
        ->with('success', 'Slider berhasil dihapus.');
    } catch (\Exception $e) {
      DB::rollBack();
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
