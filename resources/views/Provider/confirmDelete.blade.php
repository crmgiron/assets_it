
@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Delete Provider {{$provider->name}}</h1>
            </div>
    </div>
    <div class="row">
     <div class="col">
     <a class="btn btn-secondary" href="/providers">Back</a>
     </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/providers/{{ $providers->id }}" method="POST">
                <div class="from-group">
                    @csrf
                    @method('delete')
                <button class="btn btn-primary" type="submit" >Submit</button>
            </form>
        </div>
    </div>
            <table class="table">
                
            </table>
        
@endsection