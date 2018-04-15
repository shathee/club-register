@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-title"">Dashboard</div>

                <div class="card-body">
                    
                    @if (Auth::user()->status!='Active')
                    <div class="alert alert-warning" role="alert">
                      Youre Account has not been activated yet . Please contact the Webmaster
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
	
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
				@foreach($members_by_department as $k=>$m)
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
				@foreach($members_by_batch as $k=>$m)
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
</div>
@endsection
