<?php 

namespace App\Http\Controllers;
use App\Models\Produk;

class HomeController extends Controller{


	function showBeranda (){
		return view ('beranda');
	}

	function showProduk (){
		return view ('produk');
	}

	function showKategori (){
		return view ('kategori');
	}

	function showBarang (){
		return view ('barang');
	}

	function test($produk, $hargaMin = 0, $hargaMax = 0){
		if($produk == 'payung'){
			echo "Tampilkan Produk Payung";
		}elseif($produk == 'sepeda'){
			echo "Produk Sepeda";
		}

		echo "<br>";
		echo "Harga Min adalah $hargaMin <br>";
		echo "Harga Max adalah $hargaMax <br>";
	}

	public function testCollection()
	{
		$list_fashion = ['Gucci', 'Supreme', 'Nike', 'Adidas', 'Dior', 'Hermes', 'Zara', 'Rolex', 'Chanel'];
		$list_fashion = collect($list_fashion);
		$list_produk = Produk::all();



	//Sorting

		//dd($list_fashion->sort());
		//Sort By Harga Terendah
		//dd($list_produk->sortBy('harga'));

	    //Sort By Harga Tertinggi
		//dd($list_produk->sortByDesc('harga')[1]);
		//$data['list'] = $list_produk;
		//return view('test-collection', $data);

	//Take
	//Skip

	//Map

		//$map = $list_produk->map(function($item){
			//dd($item);
			//return $item->nama;
			//$item->stok = $item->stok+10;
			//return $item;

			//$result['nama'] = $item->nama;
			//$result['harga'] = $item->harga;
			//return $result;

		//$map = $list_produk->each(function($item){
			//dd($item);
		//});

		//foreach ($list_produk as $item){
			//echo "$item->nama<br>";
		//}

		//$list_produk->each(function($item){
			//echo "$item->nama<br>";

		//});

    //Filter
		//$filtered = $list_produk->filter(function($item){
			//return $item->harga > 100000;
		//});


		//dd($map[9]);
		//dd($map);
		//dd($filtered);

		//$sum = $list_produk->sum('harga');
		//$sum = $list_produk->min('harga');
		//$sum = $list_produk->max('harga');
		//$sum = $list_produk->average('harga');
		//dd($sum);
		//dd($collection->count());

		$data['list'] = Produk::paginate(15);
		return view('test-collection', $data);
		dd($list_fashion, $list_produk);
		//dd($list_fashion, $collection, $list_produk);
	}


}