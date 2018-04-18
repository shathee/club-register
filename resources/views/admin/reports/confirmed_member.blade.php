@extends('layouts.admin')

@section('content')
{!! Charts::assets() !!}
<div class="row">
    <div class="col-md-6">
        <div class="card">
             <div class="card-body">
			<h5 class="card-title">No of Registrants per Department </h5>
			<table class="table table-sm">
			<tr>
				<th>Department</th>
				<th>No of Registrants</th>
			</tr>
			<?php $i=0; ?>
			@foreach($members_confirmed_by_department as $k=>$m)
				<tr>
					<td>{{ $departments[$k] }}</td><td>{{ $m}}</td>
				<tr>
			<?php $i = $i+$m; ?>
			@endforeach
			<tr>
				<th>Total</th>
				<th>{{ $i }}</th>
			</tr>
			</table>
            </div>
        </div>
		
    </div>
	<div class="col-md-6">
        <div class="card">
            <div class="card-body">
			<h5 class="card-title">No of Registrants per Batch </h5>
			<table class="table table-sm">
			<tr>
				<th>Batch</th>
				<th>No of Registrants</th>
			</tr>
			<?php $i=0; ?>
			@foreach($members_confirmed_by_batch as $k=>$m)
				<tr>
					<td>{{ $batch[$k] }}</td><td>{{ $m}}</td>
				<tr>
			<?php $i = $i+$m; ?>
			@endforeach
			<tr>
				<th>Total</th>
				<th>{{ $i }}</th>
			</tr>
			</table>
            </div>
        </div>
		
    </div>
</div>
<div class="row">&nbsp;</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
			
			<table class="table table-sm">
	
			</table>
            </div>
        </div>
		
    </div>
	<div class="col-md-6">
        <div class="card">
            <div class="card-body">
			<h5 class="card-title">No of Registrants By Gender </h5>
			<table class="table table-sm">
			<tr>
				<th>Gender</th>
				<th>No of Registrants</th>
			</tr>
			<?php $i=0; ?>
			@foreach($members_confirmed_by_gender as $k=>$m)
				<tr>
					<td>{{ ucfirst($k) }}</td><td>{{ ucfirst($m) }}</td>
				<tr>
			<?php $i = $i+$m; ?>
			@endforeach
			<tr>
				<th>Total</th>
				<th>{{ $i }}</th>
			</tr>
			</table>
            </div>
        </div>
		
    </div>
</div>

<div class="row">&nbsp;</div>
<div class="row">
	<div class="col-md-12">
	    <div class="card">
	        <div class="card-body">
			{!! $department_chart->render() !!}
			
	        </div>
	    </div>
	</div>
	<div class="col-md-12">
	    <div class="card">
	        <div class="card-body">
			{!! $batch_chart->render() !!}
			
	        </div>
	    </div>
	</div>
	<div class="col-md-12">
	    <div class="card">
	        <div class="card-body">
			{!! $session_chart->render() !!}
			
	        </div>
	    </div>
	</div>
	<div class="col-md-12">
	    <div class="card">
	        <div class="card-body">
			{!! $gender_chart->render() !!}
			
	        </div>
	    </div>
	</div>
</div>



@endsection