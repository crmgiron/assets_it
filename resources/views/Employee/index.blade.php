
@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Sika Employees </h1>
            </div>
    </div>
    <div class="row">
     <div class="col">
     <a class="btn btn-primary" href="/employees/create">Register Employee </a>
     </div>
    </div>
            <table class="table">
                @foreach($employees as $employee)
                    <tr>
                    <td><a href="/employees/{{$employee->id}}/edit">Edit</a></td>
                     <td><a href="/employees/{{$employee->id}}/confirmDelete">Delete</a></td>                    
                     <td>{{ $employee->name}}</td>
                     <td>{{ $employee->dpi}}</td>
                     <td>{{$employee->department}}</td>
                     <td>{{$employee->job_title}}</td>
                     <td>{{ $employee->inmediate_boss}}</td>
                     
                    </tr>
                @endforeach
            </table>
        
@endsection