<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function viewproduk()
    {
        $produk = produk::all();
        return view('produk',['produk' => $produk]);
    }

    public function Createproduk(Request $request)
    {
        produk::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jumlah_produk' => $request->jumlah_produk
        ]);
        return redirect('/produk');
    }

    public function viewAddProduk()
    {
        return view('addproduk');
    }
    public function DeleteProduk($kode_produk)
    {
        produk::where('kode_produk', $kode_produk)->delete();
        return  redirect('/produk');
    }

    public function ViewEditProduk($kode_produk)
    {
        $ubahprodukk = produk::where('kode_produk', $kode_produk)->first();

        return view('editproduk',compact('ubahproduk'));
    }

    public function UpdateProduk(Request $request,$kode_produk)
    {
        produk::where('kode_produk', $kode_produk)->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jumlah_produk' => $request->jumlah_produk
        ]);
        return redirect('/produk');
    }
}
