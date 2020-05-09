
@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Provider</h1>
            </div>
    </div>
    <div class="row">
     <div class="col">
     <a class="btn btn-secondary" href="/providers">Back</a>
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
            <form action="/providers" method="POST">
                <div class="from-group">
                    @csrf
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Type a Provider Name" value="{{old('name')}}">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Type a Provider Address" value="{{old('address')}}">
                    <label for="cellphone">Cellphone</label>
                    <input type="text" class="form-control" id="cellphone" name="cellphone" placeholder="Type a Provider Cellphone" value="{{old('cellphone')}}">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Type a Provider Email" value="{{old('email')}}">
                    <label for="provider_name">Prover Name</label>
                    <input type="text" class="form-control" id="provider_name" name="provider_name" placeholder="" value="{{old('provider_name')}}">
                    <label for="provider_email">Provider Email</label>
                    <input type="text" class="form-control" id="provider_email" name="provider_email" placeholder="" value="{{old('provider_email')}}">
                </div>
                <button class="btn btn-primary" type="submit" >Submit</button>
            </form>
        </div>
    </div>
            <table class="table">
                
            </table>
        
@endsection