<?php

namespace App\Http\Controllers;
use App\ModelKategori;
use App\ModelTodo;
use Illuminate\Http\Request;

class buku extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
    $data = ModelKategori::all();
    return response($data);
  }

  public function show($id){
    $data = ModelKategori::where('id',$id)->get();
    return response ($data);
  }

  public function store(Request $request){
    $data = new ModelKategori();
    $data->nama = $request->input('nama');
    //$data->alamat = $request->input('alamat');
    //$data->email = $request->input('email');
    //$data->jenjang = $request->input('jenjang');
    //$data->notelp = $request->input('notelp');
    $data->save();

    return response('Berhasil Tambah Data');
  }
  
  public function update(Request $request, $id){
    $data = ModelKategori::where('id',$id)->first();
    $data->nama = $request->input('nama');
    $data->save();

    return response('Berhasil Merubah Data');
  }

  public function destroy($id){
    $data = ModelKategori::where('id',$id)->first();
    $data->delete();

    return response('Berhasil Menghapus Data');
  }
  
  public function buku(){
    $data = ModelTodo::all();
    return response($data);
  }

  public function showbuku($id){
    $data = ModelTodo::where('id_buku',$id)->get();
    return response ($data);
  }

  public function storebuku(Request $request){
    $data = new ModelTodo();
    $data->judul = $request->input('judul');
    $data->penerbit = $request->input('penerbit');
    $data->pengarang = $request->input('pengarang');
    //$data->alamat = $request->input('alamat');
    //$data->email = $request->input('email');
    //$data->jenjang = $request->input('jenjang');
    //$data->notelp = $request->input('notelp');
    $data->save();

    return response('Berhasil Tambah Data');
  }
  
  public function updatebuku(Request $request, $id){
    $data = ModelTodo::where('id_buku',$id)->first();
    $data->judul = $request->input('judul');
    $data->save();

    return response('Berhasil Merubah Data');
  }

  public function destroybuku($id){
    $data = ModelTodo::where('id_buku',$id)->first();
    $data->delete();

    return response('Berhasil Menghapus Data');
  }
}