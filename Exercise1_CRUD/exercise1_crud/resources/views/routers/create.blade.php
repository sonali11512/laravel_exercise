@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a contact</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('routers.store') }}">
          @csrf
          <div class="form-group">    
              <label for="sap_id">SAP ID</label>
              <input type="text" class="form-control" name="sap_id" required/>
          </div>
          <div class="form-group">
              <label for="hostname">Hostname</label>
              <input type="text" class="form-control" name="hostname"/>
          </div>
          <div class="form-group">
              <label for="loopback">Loopback(ipv4)</label>
              <input type="text" class="form-control" name="loopback" required/>
          </div>
          <div class="form-group">
              <label for="mac_address">MAC Address</label>
              <input type="text" class="form-control" name="mac_address"/>
          </div>
          <div class="form-group">
              <label for="type">Type</label>
              <input type="text" class="form-control" name="type" required/>
          </div>
                                
          <button type="submit" class="btn btn-primary">Add Router</button>
      </form>
  </div>
</div>
</div>
@endsection