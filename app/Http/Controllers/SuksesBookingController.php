<?php

namespace App\Http\Controllers;
use App\Kategori;
use App\Harga;
use App\SuksesBooking;
use Illuminate\Http\Request;

class SuksesBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sukses = SuksesBooking::with('Harga','Kategori')->get();
        return view('sukses.index',compact('sukses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        $hargas = Harga::all();
        return view('sukses.create',compact('kategoris','hargas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'dp' => 'required|',
            'sisa' => 'required|',
            'lunas' => 'required|',
            'kategori_id' => 'required|',
            'harga_id' => 'required|'
        ]);
        $sukses = new SuksesBooking;
        $sukses->nama = $request->nama;
        $sukses->dp = $request->dp;
        $sukses->sisa = $request->sisa;
        $sukses->lunas = $request->lunas;
        $sukses->kategori_id = $request->kategori_id;
        $sukses->harga_id = $request->harga_id;
        $sukses->save();
        return redirect()->route('sukses.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SuksesBooking  $suksesBooking
     * @return \Illuminate\Http\Response
     */
    public function show(SuksesBooking $suksesBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuksesBooking  $suksesBooking
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $sukses = SuksesBooking::findOrFail($id);
        $kategori = Kategori::all();
        $hargas = Harga::all();
       
        $selectedkategori = SuksesBooking::findOrFail($id);
        $selectedharga = SuksesBooking::findOrFail($id);
        return view('sukses.edit',compact('sukses','kategori','selectedkategori','selectedharga '));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuksesBooking  $suksesBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuksesBooking $suksesBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuksesBooking  $suksesBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuksesBooking $suksesBooking)
    {
        //
    }
}
