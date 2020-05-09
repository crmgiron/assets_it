
@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Purchases Order</h1>
            </div>
    </div>
    <div class="row">
     <div class="col">
     <a class="btn btn-primary" href="/purchases/create">Register Order</a>
     </div>
    </div>
            <table class="table">
                @foreach($purchases as $purchase)
                    <tr>   
                    <td><a href="/purchases/{{$purchase->id}}/edit">Edit</a></td>
                     <td><a href="/purchases/{{$purchase->id}}/confirmDelete">Delete</a></td>                   
                     <td>{{$purchase->location_asset}}</td>
                     <td>{{$purchase->order_number}}</td>
                     <td>{{$purchase->warranty_expires}}</td>
                     <td>{{$purchase->contracto_maintenance}}</td>
                     <td>{{$purchase->contracto_support}}</td>
                     <td>{{$purchase->company_purchased}}</td>
                     <td>{{$purchase->date_purchased}}</td>
                    </tr>
                @endforeach
            </table>
        
@endsection