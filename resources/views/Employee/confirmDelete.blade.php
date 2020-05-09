
@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Delete Employee {{$employee->name}}</h1>
            </div>
    </div>
    <div class="row">
     <div class="col">
     <a class="btn btn-secondary" href="/employees">Back</a>
     </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/employees/{{ $employee->id }}" method="POST">
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