<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $judul = $request->judul;
        $file = $request->file('file');
        $nama_file    =   time() . '.' . $file->getClientOriginalExtension();
        $url = env('ASSET_BLOG') . '/kategori/';
        $file->move($url, $nama_file);
        Kategori::create([
            'title' => $judul,
            'file' => 'kategori/' . $nama_file
        ])->save();
        return redirect()->route('kategori.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $judul = $request->judul;
        $file = $request->file('file');
        $kategori = Kategori::find($id);
        $nama_file = '';
        if ($file) {
            $nama_file    =   time() . '.' . $file->getClientOriginalExtension();
            $url = env('ASSET_BLOG') . '/kategori/';
            $file->move($url, $nama_file);
            if (file_exists(env('ASSET_BLOG') . '/' . $kategori->file)) {
                unlink(env('ASSET_BLOG') . '/' . $kategori->file);
            }
        }
        $kategori->update([
            'title' => $judul,
            'file' => $file ? 'kategori/' . $nama_file : $kategori->file
        ]);
        return redirect()->route('kategori.index')->with('success', 'Data berhasil diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $file = env('asset_blog') . '/' . $kategori->file;
        if (file_exists($file)) {
            unlink($file);
        }
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Data berhasil dihapus');
    }
}
