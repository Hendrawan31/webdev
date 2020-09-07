<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Buku;
use App\Kategori;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = DB::table('table_buku')
        ->join('table_kategori', 'table_buku.kategori', '=', 'table_kategori.kategori')
        ->select('table_buku.id_buku','table_buku.judul_buku', 'table_buku.deskripsi', 
                 'table_kategori.deskripsi as kategori', 'table_buku.cover_img')
        ->get();

        // return $buku;
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('buku.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_buku' => 'required',
            'deskripsi'  => 'required',
        ]);
        
        $file = $request->file('cover_img');

        $buku = new Buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->deskripsi  = $request->deskripsi;
        $buku->kategori   = $request->kategori;
        $buku->cover_img  = $file->getClientOriginalName();
        
        $tujuan_upload = 'image';
	    $file->move($tujuan_upload,$file->getClientOriginalName());

        $buku->save();
        return redirect('buku')->with('msg','Data Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::where('id_buku', $id)->first();
        return $buku;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_buku)
    {
          $buku = Buku::where('id_buku',$id_buku)->get();

          return view('buku/edit',compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $buku = Buku::where('id_buku',$request->id_buku)->first();

        // $buku->judul_buku = $request->judul_buku;
        // $buku->deskripsi = $request->deskripsi;
        // $buku->update();

        // return redirect('/buku')->with('status','Buku Berhasil diupdate!');

        Buku::where('id_buku',$request->id_buku)->update([
            'judul_buku' => $request->judul_buku,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('/buku')->with('status','Buku Berhasil diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id_buku)
    
    {
          $buku = Buku::where('id_buku',$id_buku)->delete();
        
          return redirect()->back()->with('status','Kategori Berhasil dihapus!');

        //
    }
}
