@extends('base')
@section('main')
<!-- @include('routers.search') -->
<div class="row">
<div class="col-sm-12">
    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}  
        </div>
    @endif
    <h1 class="display-3">All Routers Information</h1>    
    <table class="table table-striped">
    <div>
    <a style="margin: 19px;" href="{{ route('routers.create')}}" class="btn btn-primary">Add New Router</a>
    </div>
    <thead>
        <tr>
          <td>SAP ID</td>
          <td>Hostname</td>
          <td>Loopback(IPv4)</td>
          <td>MAC Address</td>
          <td>Type</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($routers as $router)
        <tr>
            <td>{{$router->sap_id}}</td>
            <td>{{$router->hostname}}</td>
            <td>{{$router->loopback}}</td>
            <td>{{$router->mac_address}}</td>
            <td>{{$router->type}}</td>
            <td>
                <a href="{{ route('routers.edit',$router->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('routers.destroy', $router->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection