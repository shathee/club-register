
@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
             <div class="card-body">
			<h5 class="card-title">No of Registrants per Department </h5>
			<table class="table table-sm">
			<tr>
				<th>Sl</th>
				<th>Name</th>
				<th>Batch(Session)</th>
				<th>Department</th>
				<th>Address</th>
			</tr>
			<?php $i=1; ?>
			@foreach($members_address as $m)
				<tr>
					<td>{{$i}}</td>
					<td>{{ $m->fullname}}</td>
					<td>{{ $batch[$m->sust_session]}}&nbsp;({{ $m->sust_session }}-<?php $s2 = $m->sust_session +1 ?> {{$s2}})</td>
					<td>{{ $departments[$m->sust_department]}}</td>
					<td>{{ $m->present_address}}</td>
				<tr>
				<?php $i=$i+1; ?>
			@endforeach
			</table>
            </div>
        </div>
		
    </div>
	
</div>
@endsection