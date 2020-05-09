<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;
use App\Provider;
use App\Purchase;
use App\Employee;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Asset.index', [
            'assets' => asset::all(),
            'providers' => provider::all(),
            'purchases' => purchase::all(),
            'employees' => employee::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Asset.register');
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
            'serial' => 'required | min:5',
            'computer_name' => 'required | min: 10' 

        ]);
        $asset = new asset();
        $provider = new provider();
        $purchase = new purchase();

        $asset->code_ivanty = $request->get('code_ivanty');
        $asset->code_local = $request->get('code_local');
        $asset->computer_name = $request->get('computer_name');
        $asset->ip = $request->get('ip');
        $asset->country = $request->get('country');
        $asset->company_code = $request->get('company_code');
        $asset->asset_type = $request->get('asset_type');
        $asset->asset_subcategory = $request->get('asset_subcategory');
        $asset->description = $request->get('description');
        $asset->type_server = $request->get('type_server');
        $asset->physical_server_name = $request->get('physical_server_name');
        $asset->make = $request->get('make');
        $asset->model = $request->get('model');
        $asset->serial = $request->get('serial');
        $asset->operation_system = $request->get('operation_system');
        $asset->op_version = $request->get('op_version');
        $asset->os_build = $request->get('os_build');
        $asset->number_processor = $request->get('number_processor');
        $asset->ram = $request->get('ram');
        $asset->diskpace = $request->get('diskpace');
        $provider->provider_name = $request->get('provider_name');
        $purchase->company_purchased = $request->get('company_purchased');
        $purchase->location_asset = $request->get('location_asset');
        $purchase->order_number = $request->get('order_number');
        $purchase->date_purchased = $request->get('date_purchased');
        $purchase->warranty_expires = $request->get('warranty_expires');
        $purchase->contracto_maintenance = $request->get('contracto_maintenance');
        $provider->provider_email = $request->get('provider_email');
        $asset->save();

        return redirect('/assets');
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
        
        $asset = Asset::findOrFail($id);
        return view('Asset.edit', [
            'asset' => $asset
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
            'serial' => 'required | min:5',
            'computer_name' => 'required | min: 10' 
        ]);
        $asset = new asset();
        $provider = new provider();
        $purchase = new purchase();

        $asset->code_ivanty = $request->get('code_ivanty');
        $asset->code_local = $request->get('code_local');
        $asset->computer_name = $request->get('computer_name');
        $asset->ip = $request->get('ip');
        $asset->country = $request->get('country');
        $asset->company_code = $request->get('company_code');
        $asset->asset_type = $request->get('asset_type');
        $asset->asset_subcategory = $request->get('asset_subcategory');
        $asset->description = $request->get('description');
        $asset->type_server = $request->get('type_server');
        $asset->physical_server_name = $request->get('physical_server_name');
        $asset->make = $request->get('make');
        $asset->model = $request->get('model');
        $asset->serial = $request->get('serial');
        $asset->operation_system = $request->get('operation_system');
        $asset->op_version = $request->get('op_version');
        $asset->os_build = $request->get('os_build');
        $asset->number_processor = $request->get('number_processor');
        $asset->ram = $request->get('ram');
        $asset->diskpace = $request->get('diskpace');
        $provider->provider_name = $request->get('provider_name');
        $purchase->company_purchased = $request->get('company_purchased');
        $purchase->location_asset = $request->get('location_asset');
        $purchase->order_number = $request->get('order_number');
        $purchase->date_purchased = $request->get('date_purchased');
        $purchase->warranty_expires = $request->get('warranty_expires');
        $purchase->contracto_maintenance = $request->get('contracto_maintenance');
        $provider->provider_email = $request->get('provider_email');
        $asset->save();

        return redirect('/assets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset = Asset::findOrFail($id);
        $asset->delete();

        return redirect('/assets');
    }

    public function confirmDelete($id){

        $asset = Asset::findOrFail($id);
        return view('Asset.confirmDelete', [
            'asset' => $asset
        ]);
    }
}
