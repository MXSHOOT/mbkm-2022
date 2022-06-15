<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;
use App\Models\KategoriRuangan;
use App\Models\Gedung;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruangan = Ruangan::latest()->paginate(5);
    
        return view('ruangan.index',compact('ruangan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ambil all data kategori ruangan dan gedung
        $kategori_ruangan = KategoriRuangan::all(); //select * from kategori_ruangan
        $gedung = Gedung::all(); //select * from gedung
        //arahkan ke form input data
        return view('ruangan.create',compact('kategori_ruangan','gedung'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //proses input data gedung
        $request->validate([
            'nama' => 'required',
            'kategori_ruangan_id' => 'required',
            'gedung_id' => 'required',
            'kapasitas' => 'required|numeric',
            'lantai' => 'required|numeric',
            'foto1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('foto1')) {
            $destinationPath = 'img/ruangan/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto1'] = "$profileImage";
        }
    
        Ruangan::create($input);
     
        return redirect()->route('ruangan.index')
                        ->with('success','Ruangan created successfully.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}