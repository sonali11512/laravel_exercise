<!DOCTYPE html>

<html>

<head>

<meta name="_token" content="{{ csrf_token() }}">

<title>Live Search</title>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

</head>

<body>

<div class="container">

<div class="row">

<div class="panel panel-default">

<div class="panel-heading">

<h3>Router Information </h3>

</div>

<div class="panel-body">

<div class="form-group">

<label>Enter the loopback to search</label>
<input type="text" class="form-controller" id="search" name="search"></input>

</div>

<table class="table table-bordered table-hover">

<thead>

<tr>

<th>SAP ID</th>

<th>Hostname</th>

<th>Loopback</th>

<th>Mac Address</th>

<th>Type</th>

</tr>

</thead>

<tbody>

</tbody>

</table>

</div>

</div>

</div>

</div>

<script type="text/javascript">

jQuery('#search').on('keyup',function(){

    $value=jQuery(this).val();
    // console.log($value);
    jQuery.ajax({
        type : 'get',
        url : '{{URL::to('search')}}',
        data:{'search':$value},
        success:function(data){
            jQuery('tbody').html(data);
        }

    });

});

</script>

<script type="text/javascript">

$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

</script>

</body>

</html>
