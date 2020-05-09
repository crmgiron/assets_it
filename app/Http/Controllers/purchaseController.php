<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;

class purchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('purchase.index', [
            'purchases' => Purchase::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purchase.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validaData = $request->validate([
            'location_asset' => 'required | min:1',
            'order_number' => 'required | min: 3',
            'warranty_expires' => 'required | min: 5',
            'contracto_maintenance' => 'required | min: 2',
            'contracto_support' => 'required | min: 2' 
        ]);
        $purchase = new purchase();
        $purchase->location_asset = $request->get('location_asset');
        $purchase->order_number = $request->get('order_number');
        $purchase->warranty_expires = $request->get('warranty_expires');
        $purchase->contracto_maintenance = $request->get('contracto_maintenance');
        $purchase->contracto_support = $request->get('contracto_support');
        $purchase->company_purchased = $request->get('company_purchased');
        $purchase->date_purchased = $request->get('date_purchased');
        $purchase->save();

        return redirect('/purchases');
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
        $purchase = Purchase::findOrFail($id);
        return view('Purchase.edit', [
            'purchase' => $purchase
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
        $validaData = $request->validate([
            'location_asset' => 'required | min:1',
            'order_number' => 'required | min: 3',
            'warranty_expires' => 'required | min: 5',
            'contracto_maintenance' => 'required | min: 2',
            'contracto_support' => 'required | min: 2' 
        ]);
        $purchase = new purchase();
        $purchase->location_asset = $request->get('location_asset');
        $purchase->order_number = $request->get('order_number');
        $purchase->warranty_expires = $request->get('warranty_expires');
        $purchase->contracto_maintenance = $request->get('contracto_maintenance');
        $purchase->contracto_support = $request->get('contracto_support');
        $purchase->company_purchased = $request->get('company_purchased');
        $purchase->date_purchased = $request->get('date_purchased');
        $purchase->save();

        return redirect('/purchases');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->delete();

        return redirect('/purchases');
    }

    public function confirmDelete($id){

        $purchase = Purchase::findOrFail($id);
        return view('Purchase.confirmDelete', [
            'purchase' => $purchase
        ]);
    }
}
