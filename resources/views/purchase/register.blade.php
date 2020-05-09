
@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Order</h1>
            </div>
    </div>
    <div class="row">
     <div class="col">
     <a class="btn btn-secondary" href="/purchases">Back</a>
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
            <form action="/purchases" method="POST">
                <div class="from-group">
                    @csrf
                    <label for="location_asset">Location Asset</label>
                    <input type="text" class="form-control" id="location_asset" name="location_asset" placeholder="" value="{{old('location_asset')}}">
                    <label for="order_number">Order Number</label>
                    <input type="text" class="form-control" id="order_number" name="order_number" placeholder="" value="{{old('order_number')}}">
                    <label for="warranty_expires">Warranty Expires</label>
                    <input type="text" class="form-control" id="warranty_expires" name="warranty_expires" placeholder="" value="{{old('warranty_expires')}}">
                    <label for="contracto_maintenance">Contracto Maintenace</label>
                    <input type="text" class="form-control" id="contracto_maintenance" name="contracto_maintenance" placeholder="" value="{{old('contracto_maintenance')}}">
                    <label for="contracto_support">Contracto Support</label>
                    <input type="text" class="form-control" id="contracto_support" name="contracto_support" placeholder="" value="{{old('contracto_support')}}"> 
                    <label for="company_purchased">Company Purchased</label>
                    <input type="text" class="form-control" id="company_purchased" name="company_purchased" placeholder="" value="{{old('company_purchased')}}"> 
                    <label for="date_purchased">Date Purchased</label>
                    <input type="text" class="form-control" id="date_purchased" name="date_purchased" placeholder="" value="{{old('date_purchased')}}">  
                                      
                </div>
                <button class="btn btn-primary" type="submit" >Submit</button>
            </form>
        </div>
    </div>
            <table class="table">
                
            </table>
        
@endsection