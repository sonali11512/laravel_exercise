@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a router</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('routers.update', $router->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="sap_id">SAP ID</label>
                <input type="text" class="form-control" name="sap_id" value={{ $router->sap_id }} />
            </div>
            <div class="form-group">
                <label for="hostname">Hostname</label>
                <input type="text" class="form-control" name="hostname" value={{ $router->hostname }} />
            </div>
            <div class="form-group">
                <label for="loopback">Loopback(IPV4)</label>
                <input type="text" class="form-control" name="loopback" value={{ $router->loopback }} />
            </div>
            <div class="form-group">
                <label for="mac_address">Mac Address</label>
                <input type="text" class="form-control" name="mac_address" value={{ $router->mac_address }} />
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type" value={{ $router->type }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection