@extends('layouts.app')

@section('content')
    <div class="container">
		
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                	
                	<div class="card-body">
                			{!! $memberships->appends(['search' => Request::get('search')])->render() !!}

							<table class="table table-hover table-condensed">
								<thead class="thead-light">	
									   <tr>
										   <th style="width: 5%;">#</th>
										   <th>Name</th>
										   <th>Department</th>
										   <th>Session</th>
										   <th>Batch</th>
										   <th>Membership Type</th>
										   <th>Temporary Identification No</th>
										   
									   </tr> 
								</thead>	
									@foreach ($memberships as $membership)
										<tr>
											<td>{{ $membership->id }}</td>
											<td>{{ ucfirst($membership->fullname) }}</td>
											<td>{{ $departments[$membership->sust_department] }}</td>
											
											<td>{{ $membership->sust_session }}-<?php $s2 = $membership->sust_session +1 ?> {{$s2}}</td>
											<td>{{ $batch[$membership->sust_session] }}</td>
											<td>{{ ucfirst($membership->membership_type) }}</td>
											<td>{{ ucfirst($membership->membership_no) }}</td>
										
										</tr>
									@endforeach

								</table>
						{!! $memberships->appends(['search' => Request::get('search')])->render() !!}
						
                        
                    </div>
                </div>
            </div>
			<!--
			<div class="col-md-4">
		
			<div class="">
				<h6>Search with Temorary Identification Number or SUST Registration No or Mobile No or Registered Email ID</h6>

                    <form method="GET" action="{{ url('/membership') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            
                        <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
						<button class="btn btn-primary form-group" type="submit">
                            Show
                        </button>
     
                    </form>
			</div>
		
			<div class="">
					<h6>Search with Membership Type</h6>
					<form method="GET" action="{{ url('/membership') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0" role="">
							<select name="membership_type" class="form-control">
								<option value="">Membership Type</option>
								<option value="general">General</option>
								<option value="life">Life</option>
							</select>
						   
						   <button type="submit" class="btn btn-primary form-group">Show</button>
				
					</form>
			</div>
			<div class="">
			<h6>Search by Batch & Session</h6>
                    <form method="GET" action="{{ url('/membership') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="">
							<select name="sust_session" class="form-control" id="sust_session" required>
							@foreach ($sessions as $optionKey => $optionValue)
								<option value="{{ $optionKey }}" {{ (isset($membership->sust_session) && $membership->sust_session == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
							@endforeach
							</select>
						   
						   <button type="submit" class="btn btn-primary form-group">Show</button>
						   
						
					</form>
			</div>

			<div>
			<h6>Search by Department</h6>
                    <form method="GET" action="{{ url('/membership') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0" role="">
							<select name="sust_department" class="form-control" id="sust_department" required>
								@foreach ($departments as $optionKey => $optionValue)
									<option value="{{ $optionKey }}" {{ (isset($membership->sust_department) && $membership->sust_department == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
								@endforeach
							</select>
						   
						   <button type="submit" class="btn btn-primary form-group">Show</button>
						   
						
					</form>
			</div>
			
			
			
			
		</div>-->
			
			
			
			
        </div>
    </div>
@endsection
