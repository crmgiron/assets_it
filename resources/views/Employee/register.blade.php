
@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Employee</h1>
            </div>
    </div>
    <div class="row">
     <div class="col">
     <a class="btn btn-secondary" href="/employees">Back</a>
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
            <form action="/employees" method="POST">
                <div class="from-group">
                    @csrf
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{old('name')}}">
                    <label for="dpi">DPI</label>
                    <input type="text" class="form-control" id="dpi" name="dpi" placeholder="" value="{{old('dpi')}}">
                    <label for="department">Department</label>
                    <input type="text" class="form-control" id="department" name="department" placeholder="" value="{{old('department')}}">
                    <label for="job_title">Job Title</label>
                    <input type="text" class="form-control" id="job_title" name="job_title" placeholder="" value="{{old('job_title')}}">
                    <label for="inmediate_boss">Inmediate Boss</label>
                    <input type="text" class="form-control" id="inmediate_boss" name="inmediate_boss" placeholder="" value="{{old('inmediate_boss')}}">
                    
                </div>
                <button class="btn btn-primary" type="submit" >Submit</button>
            </form>
        </div>
    </div>
            <table class="table">
                
            </table>
        
@endsection