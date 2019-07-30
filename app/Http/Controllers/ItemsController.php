<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Items;
use App\Transaction;
use App\Review;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Items::all();
        return view('pencarian.index')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function verify(Request $request, $slug)
    {
        if(Auth::guest()){
            return redirect('/login')->with('error', 'Mohon Masuk terlebih dahulu sebelum melakukan pemesanan');
        }
        $item = Items::where('slug','=',$slug)->first();
        $jumlah = $request->jumlah;
        if(ctype_digit($jumlah) == false) return redirect()->back()->with('error', 'Angka harus dimasukkan pada Jumlah');
        $this->validate($request, [
            'jumlah' => 'required',
        ]);
        $catatan = $request->catatan;
        $biaya = $jumlah * $item->harga;
        if($jumlah <= 0 || $jumlah > $item->qty) {
            return redirect()->back()->with('error', 'Jumlah tidak sesuai kapasitas');
        }
        return view('pencarian.verify')->with('item',$item)->with('catatan',$catatan)->with('jumlah',$jumlah)->with('biaya',$biaya);
    }

    public function borrow(Request $request, $slug)
    {
        $item = Items::where('slug','=',$slug)->first();
        $catatan = $request->catatan;
        $jumlah = $request->jumlah;
        $biaya = $jumlah * $item->harga;

        $transaction = new Transaction;
        $transaction->user_id = Auth::user()->id;
        $transaction->item_id = $item->id;
        $transaction->qty = $jumlah;
        $transaction->catatan = $catatan;
        $transaction->level = 1;
        $transaction->save();
        $item->qty -= $jumlah;
        $item->save();
        return redirect('/transaksi/transaksiku/'.$transaction->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $item = Items::where('slug','=',$slug)->first();
        $reviews = Review::where('item_id', '=',$item->id)->get();
        return view('pencarian.show')->with('item', $item)->with('reviews',$reviews);
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
