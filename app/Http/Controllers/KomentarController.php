<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KomentarBerita;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KomentarBerita::paginate(10);
        $compact = compact('data');
        return view('admin.komentarBerita.index', $compact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $beritas = Berita::all();
        $compact = compact('beritas');
        return view('admin.komentarBerita.form_input', $compact);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KomentarBerita::create([
            'isi' => $request->isi_komen,
            'user' => auth()->user()->id,
            'berita' => $request->berita
        ]);
        return redirect()->back();
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
        $komentarberita = KomentarBerita::find($id);
        $beritas = Berita::all();
        $compact = compact('komentarberita', 'beritas');
        return view('admin.komentarBerita.form', $compact);
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
        KomentarBerita::find($id)->update([
            'isi' => $request->isi_komen,
            'user' => auth()->user()->id,
            'berita' => $request->berita
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KomentarBerita::find($id)->delete();
        return redirect()->back();
    }
}
