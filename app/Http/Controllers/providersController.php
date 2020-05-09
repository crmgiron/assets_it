<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;

class providersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('provider.index', [
            'providers' => Provider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provider.register');
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
            'name' => 'required | min:1',
            'address' => 'required | min: 5',
            'cellphone' => 'required | min: 5',
            'email' => 'required | min: 5' 
        ]);
        $provider = new provider();
        $provider->name = $request->get('name');
        $provider->address = $request->get('address');
        $provider->cellphone = $request->get('cellphone');
        $provider->email = $request->get('email');
        $provider->provider_name = $request->get('provider_name');
        $provider->provider_email = $request->get('provider_email');
        $provider->save();

        return redirect('/providers');
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
        $provider = Provider::findOrFail($id);
        return view('Provider.edit', [
            'provider' => $provider
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
            'name' => 'required | min:1',
            'address' => 'required | min: 5',
            'cellphone' => 'required | min: 5',
            'email' => 'required | min: 5' 
        ]);
        $provider = new provider();
        $provider->name = $request->get('name');
        $provider->address = $request->get('address');
        $provider->cellphone = $request->get('cellphone');
        $provider->email = $request->get('email');
        $provider->provider_name = $request->get('provider_name');
        $provider->provider_email = $request->get('provider_email');
        $provider->save();

        return redirect('/providers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provider = Provider::findOrFail($id);
        $provider->delete();

        return redirect('/providers');
    }

    public function confirmDelete($id){

        $provider = Provider::findOrFail($id);
        return view('Provider.confirmDelete', [
            'provider' => $provider 
        ]);
    }
}
