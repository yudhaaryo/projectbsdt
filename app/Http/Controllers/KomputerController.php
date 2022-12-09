<?php

namespace App\Http\Controllers;

use App\Models\billing;
use App\Models\Komputer;
use Illuminate\Http\Request;

class KomputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $billing = billing::all();
        if($request->has('search')){
            $komputer = Komputer::where('nomor', 'LIKE', '%' . $request->search . '%')
                ->orWhere('id', 'LIKE', '%' . $request->search . '%')
                ->orWhereHas('billing', function ($query) use ($request) {
                    $query->where('paket', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('harga', 'LIKE', '%' . $request->search . '%');

            })
            ->paginate(5);
        } else {
            // $transaksi=transaksi::paginate(5);
            $komputer = Komputer::paginate(5);
        }
        return view('page.komputer',compact('komputer','billing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $billing = billing::all();
        $komputer = Komputer::all();
        return view('page/komputerPage/createkomputer',
    [
        'billing' => $billing
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $komputer = new komputer;
        Komputer::create($request->all());

        // $komputer->nomor = $request->nomor;
        // $komputer-> = $request->harga;
        // $komputer->save();
        return redirect('komputer');
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
        $billing = billing::all();
        $komputer = Komputer::find ($id);
        return view('page/komputerPage/editkomputer',
    [
        'billing' => $billing,
        'komputer' => $komputer
    ]);
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

        // $billing = billing::all();
        $komputer = Komputer::find($id);
        $komputer->billing_id = $request->billing_id;
        // $komputer->billing->paket = $request->paket;
        $komputer->nomor = $request->nomor;
        $komputer->save();

        return redirect('komputer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $komputer = komputer::find($id);
        $komputer->delete();
        return redirect('komputer');
    }
}
