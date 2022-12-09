<?php

namespace App\Http\Controllers;

use App\Models\billing;
use App\Http\Requests\StorebillingRequest;
use App\Http\Requests\UpdatebillingRequest;
// use App\Http\Controllers\Request;
use Illuminate\Http\Request;


class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->has('search')) {
            $billing = billing::where('paket', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $billing = billing::paginate(5);
        }
        return view(
            'billing',
            compact(
                'billing'
                )
            );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $billing = new billing;
        return view('page/createbilling');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebillingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $billing = new billing;

        $billing->paket = $request->paket;
        $billing->harga = $request->harga;
        $billing->save();
        return redirect('billing');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function show(billing $billing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $billing = billing::find($id);

        return view('page/billingPage/editbilling', compact('billing')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebillingRequest  $request
     * @param  \App\Models\billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, $id)
    {
        $billing = billing::find($id);

        $billing->paket = $request->paket;
        $billing->harga = $request->harga;
        $billing->save();
        return redirect('billing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $billing = billing::find($id);
        $billing->delete();
        return redirect('billing');
    }
}
