<?php

namespace App\Http\Controllers;

use App\Helper\getFilename;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Berita::paginate(10);
        $compact = compact('data');
        return view('admin.berita.index', $compact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $kategori = Kategori::all();
        $compact = compact('kategori');
        return view('admin.berita.form_input', $compact);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = getFilename::getFilename($request);
        Storage::disk('upload')->putFileAs('thumbnail', $request->fileupload, $filename['filename']);
//        dd($filename);
        $berita = Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'thumbnail' => $filename['filename'],
            'user_id' => auth()->user()->id,
        ]);
        foreach ($request->kategori as $item) {
            KategoriBerita::create([
               'berita' => $berita->id,
                'kategori' => $item
            ]);
        }
        return redirect(route('dashboard.berita.index'));
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
        $berita = Berita::find($id);
        $compact = compact('berita');
//        dd($user);
        return view('admin.berita.form', $compact);
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
        if ($request->fileupload) {
            $filename = getFilename::getFilename($request);
            Storage::disk('upload')->putFileAs('thumbnail', $request->fileupload, $filename['filename']);
            $berita = Berita::find($id)->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'thumbnail' => $filename['filename'],
                'user_id' => auth()->user()->id,
            ]);
        } else {
            $berita = Berita::find($id)->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'user_id' => auth()->user()->id,
            ]);
        }

        return redirect(route('dashboard.berita.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::find($id)->delete();
        return redirect(route('dashboard.berita.index'));
    }
}
