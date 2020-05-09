
@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Assets IT </h1>
            </div>
    </div>
    <div class="row">
     <div class="col">
     <a class="btn btn-primary" href="/assets/create">Register Asset </a>
     </div>
    </div>
            <table class="table">
                @foreach($assets as $asset)
                    @foreach($providers as $provider)
                    @foreach($purchases as $purchase)
                    <tr>                    
                     <td>{{ $asset->serial}}</td>
                     <td>{{$asset->computer_name}}</td>
                     <td><a href="/assets/{{$asset->id}}/edit">Edit</a></td>
                     <td><a href="/assets/{{$asset->id}}/confirmDelete">Delete</a></td>
                     <td>{{ $asset->code_ivanty}}</td>
                     <td>{{ $asset->code_local}}</td>
                     <td>{{ $asset->computer_name}}</td>
                     <td>{{ $asset->asset_type}}</td>
                     <td>{{ $asset->asset_subcategory}}</td>
                     <td>{{ $asset->description}}</td>
                     <td>{{ $asset->type_server}}</td>
                     <td>{{ $asset->physical_server_name}}</td>
                     <td>{{ $asset->make}}</td>
                     <td>{{ $asset->model}}</td>
                     <td>{{ $asset->serial}}</td>
                     <td>{{ $asset->operation_system}}</td>
                     <td>{{ $asset->op_version}}</td>
                     <td>{{ $asset->os_build}}</td>
                     <td>{{ $asset->number_processor}}</td>
                     <td>{{ $asset->ram}}</td>
                     <td>{{ $asset->diskpace}}</td>
                     <td>{{ $asset->serial}}</td>
                     <td>{{ $provider->provider_name}}</td>
                     <td>{{ $purchase->company_purchased}}</td>
                     <td>{{ $purchase->location_asset}}</td>
                     <td>{{ $purchase->order_number}}</td>
                     <td>{{ $purchase->date_purchased}}</td>
                     <td>{{ $purchase->warranty_expires}}</td>
                     <td>{{ $purchase->contracto_maintenance}}</td>
                     <td>{{ $provider->provider_mail}}</td>
                    </tr>
                        @endforeach
                    @endforeach
                @endforeach
            </table>
        
@endsection