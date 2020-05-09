
@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Edit Asset {{$asset->computer_name}}</h1>
            </div>
    </div>
    <div class="row">
     <div class="col">
     <a class="btn btn-secondary" href="/assets">Back</a>
     </div>
    </div>
    <div class="row">
        <div class="col">
        @if($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
            <form action="/assets/{{ $asset->id }}" method="POST">
                <div class="from-group">
                    @csrf
                    @method('put')
                    <label for="code_ivanty">IT Asset code From Ivanty</label>
                    <input type="text" class="form-control" id="code_ivanty" name="code_ivanty" placeholder="Type a Ivanty Code" value="{{old('code_ivanty')}}">
                    <label for="code_local">Local IT Asset Code</label>
                    <input type="text" class="form-control" id="code_local" name="code_local" placeholder="Type a code local" value="{{old('code_local')}}">
                    <label for="computer_name">Computer Name:</label>
                    <input type="text" class="form-control" id="computer_name" name="computer_name" placeholder="Type a Computer Name" value="{{old('computer_name')}}">
                    <label for="ip">IP:</label>
                    <input type="text" class="form-control" id="ip" name="ip" placeholder="Type a IP" value="{{old('ip')}}">
                    <label for="country">Country:</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="Type a country" value="{{old('country')}}">
                    <label for="company_code">Company Code</label>
                    <input type="text" class="form-control" id="company_code" name="company_code" placeholder="Type a company code" value="{{old('company_code')}}">
                    <label for="asset_type">Asset type</label>
                    <input type="text" class="form-control" id="asset_type" name="asset_type" placeholder="Type a Asset Type" value="{{old('asset_type')}}">
                    <label for="asset_subcategory">Asset Sub Category</label>
                    <input type="text" class="form-control" id="asset_subcategory" name="asset_subcategory" placeholder="Type a Asset Sub Category" value="{{old('asset_subcategory')}}">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Type a Description" value="{{old('description')}}">
                    <label for="type_server">Type of Server</label>
                    <input type="text" class="form-control" id="type_server" name="type_server" placeholder="Type a Type Server" value="{{old('type_server')}}">
                    <label for="physical_server_name">physical server name / computer name hostname</label>
                    <input type="text" class="form-control" id="physical_server_name" name="physical_server_name" placeholder="" value="{{old('physical_server_name')}}">
                    <label for="make">Make / Brand</label>
                    <input type="text" class="form-control" id="make" name="make" placeholder="Type a Make" value="{{old('make')}}">
                    <label for="model">Model</label>
                    <input type="text" class="form-control" id="model" name="model" placeholder="Type a Model" value="{{old('model')}}">
                    <label for="serial">Serial Number</label>
                    <input type="text" class="form-control" id="serial" name="serial" placeholder="Type a serial" value="{{old('serial')}}">
                    <label for="operation_system">Operating System</label>
                    <input type="text" class="form-control" id="operation_system" name="operation_system" placeholder="Type a Operating System" value="{{old('operation_system')}}">
                    <label for="op_version">Operating System Version</label>
                    <input type="text" class="form-control" id="op_version" name="op_version" placeholder="Type Operating System Version" value="{{old('op_version')}}">
                    <label for="os_build">OS Build</label>
                    <input type="text" class="form-control" id="os_build" name="os_build" placeholder="Type Os Build" value="{{old('os_build')}}">
                    <label for="number_processor">Number of Processor</label>
                    <input type="text" class="form-control" id="number_processor" name="number_processor" placeholder="Type Number Processor" value="{{old('number_processor')}}">
                    <label for="ram">RAM in GB</label>
                    <input type="text" class="form-control" id="ram" name="ram" placeholder="Type a Ram" value="{{old('ram')}}">
                    <label for="diskpace">DiskSpace in GB</label>
                    <input type="text" class="form-control" id="diskpace" name="diskpace" placeholder="Type a diskpace" value="{{old('diskpace')}}">
                    <label for="provider_name">Supplier Name</label>
                    <input type="text" class="form-control" id="provider_name" name="provider_name" placeholder="Type a Supplier Name" value="{{old('provider_name')}}">
                    <label for="company_purchased">Company who purchased</label>
                    <input type="text" class="form-control" id="company_purchased" name="company_purchased" placeholder="Type a Company" value="{{old('company_purchased')}}">
                    <label for="location_asset">Location Asset</label>
                    <input type="text" class="form-control" id="location_asset" name="location_asset" placeholder="Type a Location" value="{{old('location_asset')}}">
                    <label for="order_number">Purchase Order Number</label>
                    <input type="text" class="form-control" id="order_number" name="order_number" placeholder="Type a Order Purchase" value="{{old('order_number')}}">
                    <label for="date_purchased">Purchase Date</label>
                    <input type="text" class="form-control" id="date_purchased" name="date_purchased" placeholder="Type a Pruchase Date" value="{{old('date_purchased')}}">
                    <label for="warranty_expires">Warranty Expires</label>
                    <input type="text" class="form-control" id="warranty_expires" name="warranty_expires" placeholder="Type a warranty Expires" value="{{old('warranty_expires')}}">
                    <label for="contracto_maintenance">Maintenance Contract</label>
                    <input type="text" class="form-control" id="contracto_maintenance" name="contracto_maintenance" placeholder="Type a Maintenance Contract" value="{{old('contracto_maintenance')}}">
                    <label for="provider_email">technical Support / provider_contact</label>
                    <input type="text" class="form-control" id="provider_email" name="provider_email" placeholder="Type a Email" value="{{old('provider_email')}}">
                </div>
                <button class="btn btn-primary" type="submit" >Submit</button>
            </form>
        </div>
    </div>
            <table class="table">
                
            </table>
        
@endsection