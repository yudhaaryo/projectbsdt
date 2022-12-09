<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\pelanggan;
use App\Http\Requests\StoretransaksiRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatetransaksiRequest;



class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pelanggan = pelanggan::all();
        if($request->has('search')){
            $transaksi = transaksi::where('jumlah', 'LIKE', '%' . $request->search . '%')
                ->orWhere('id', 'LIKE', '%' . $request->search . '%')
                ->orWhereHas('pelanggan', function ($query) use ($request) {
                    $query->where('username', 'LIKE', '%' . $request->search . '%');
            })
            ->paginate(5);
        }else{
            $transaksi=transaksi::paginate(5);
        }
        // if ($request->has('search')) {
        //     $transaksi = transaksi::where('jumlah', 'LIKE', '%' . $request->search . '$')
        //         ->whereHas('pelanggan', function ($query) use ($request) {
        //             $query->where('username', 'LIKE', '%' . $request->search . '%');
        //         })
        //         ->paginate(5);
        // } else {
        //     $transaksi = transaksi::orderBy('jumlah', 'ASC')
        //         ->paginate(5);
        // }
        // $transaksi = transaksi::paginate(5);
        return view('transaksi',compact('transaksi','pelanggan'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = pelanggan::all();

        return view('page/transaksiPage/createtransaksi',[
            'pelanggan' => $pelanggan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = new transaksi;

        $transaksi::create($request->all());

        return redirect('transaksi');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $transaksi = transaksi::find($id);
        $pelanggan = pelanggan::all();
        return view('page/transaksiPage/edittransaksi',
    [
        'transaksi' => $transaksi,
        'pelanggan' => $pelanggan
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetransaksiRequest  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaksi = transaksi::find($id);
        $transaksi->pelanggan_id = $request->pelanggan_id;
        // $komputer->billing->paket = $request->paket;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->save();
        return redirect('transaksi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $transaksi = transaksi::find($id);
        $transaksi->delete();
        return redirect('transaksi');


    }
}
