<?php

namespace App\Http\Controllers;

use App\Models\tipsKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TipsKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tips_kerjas = tipsKerja::all();

        return view('admin.tipsKerja.index', [
            'tipsKerja' => $tips_kerjas,
            'title' => 'Admin Tips Kerja'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tipsKerja.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judulTipsKerja' => 'required',
            'gambarTipsKerja' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contentTipsKerja' => 'required',
          ]);

          $imageName = time() . '.' . $request->gambarTipsKerja->extension();
          // $request->image->move(public_path('images'), $imageName);
          $request->gambarTipsKerja->storeAs('public/images', $imageName);

          $tipsKerjaData = ['judulTipsKerja' => $request->judulTipsKerja, 'contentTipsKerja' => $request->contentTipsKerja, 'gambarTipsKerja' => $imageName];

          tipsKerja::create($tipsKerjaData);
          return redirect('/admin.tipsKerja.create')->with(['message' => 'Tips added successfully!', 'status' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(tipsKerja $tips_kerjas)
    {
        return view('landing-page.detailPostTipsKerja', compact('tipsKerja'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tipsKerja $tips_kerjas)
    {
        return view('admin.tipsKerja.edit', ['tipsKerja' => $tips_kerjas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tipsKerja $tips_kerjas)
    {
        $imageName = '';
    if ($request->hasFile('file')) {
      $imageName = time() . '.' . $request->file->extension();
      $request->file->storeAs('public/images', $imageName);
      if ($tips_kerjas->image) {
        Storage::delete('public/images/' . $tips_kerjas->image);
      }
    } else {
      $imageName = $tips_kerjas->image;
    }

    $tipsKerjaData = ['judulTipsKerja' => $request->judulTipsKerja, 'contentTipsKerja' => $request->contentTipsKerja, 'gambarTipsKerja' => $imageName];

    $tips_kerjas->update($tipsKerjaData);
    return redirect('/admin.tipsKerja.create')->with(['message' => 'Tips updated successfully!', 'status' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tipsKerja $tips_kerjas)
    {
        Storage::delete('public/images/' . $tips_kerjas->image);
        $tips_kerjas->delete();
        return redirect('/admin.tipsKerja.create')->with(['message' => 'Tips deleted successfully!', 'status' => 'info']);
    }
}
