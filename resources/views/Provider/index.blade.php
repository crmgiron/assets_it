
@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Providers </h1>
            </div>
    </div>
    <div class="row">
     <div class="col">
     <a class="btn btn-primary" href="/providers/create">Register Providers </a>
     </div>
    </div>
            <table class="table">
                @foreach($providers as $provider)
                    <tr>
                    <td><a href="/providers/{{$provider->id}}/edit">Edit</a></td>
                     <td><a href="/providers/{{$provider->id}}/confirmDelete">Delete</a></td>                    
                     <td>{{ $provider->name}}</td>
                     <td>{{$provider->address}}</td>
                     <td>{{$provider->cellphone}}</td>
                     <td>{{$provider->email}}</td>
                     <td>{{$provider->provider_name}}</td>
                     <td>{{$provider->provider_email}}</td>
                     
                    </tr>
                @endforeach
            </table>
        
@endsection