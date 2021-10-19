<?php 
 
namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller {
	function index(){ 
		$data['list_produk'] = Produk::all();
        return view('admin.produk.index', $data);
	}
	function create(){
       return view('admin.produk.create');
	}

	function store(){
		$produk = new produk;
		$produk->Nama = request('Nama');
		$produk->Harga = request('Harga');
		$produk->Deskripsi = request('Deskripsi');
		$produk->save();

		return redirect('admin/produk')->with('success', 'Data Berhasil ditambah');
    }
	function show(produk $produk){
		$data['produk'] = $produk;
		return view('admin.produk.show', $data);
	}
	function edit(produk $produk){
		$data['produk'] = $produk;
		return view('admin.produk.edit', $data);
	}
	function update(produk $produk){
		$produk->Nama = request('Nama');
		$produk->Harga = request('Harga');
		$produk->Deskripsi = request('Deskripsi');
		$produk->save()->with('success', 'Data Berhasil ditambah');

		return redirect('admin/produk');

	}
	function destroy(produk $produk){
		$produk->delete();
		return redirect('admin/produk')->with('danger', 'Data Berhasil ditambah');


	}
}