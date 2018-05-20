@extends('layouts.home')

@section('content')
    <div class="container">
		
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                	
                	<div class="card-body">
                		<div class="text-left alert alert-danger">
                			<p>
                				This is for information of all primary members, if it is found later that any of the primary members --- 
                			</p>
                			<p>
                				<ol>
                					<dt>a) Have been withdrawn from SUST due to serious offences</dt>
                					<dt>or</dt>
                					<dt> b) Have been convicted by any court for criminal offences. </dt>
                				</ol>
                			</p>
                			<p>
                				Then according to article 11(c) & (d) of Articles of Association, His/Her Membership will be discontinued.
                			</p>
                		</div>	
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
									<?php $i=1;?>	
									@foreach ($memberships as $membership)
										<tr>
											<td>{{ $i }}</td>
											<td>{{ ucfirst($membership->fullname) }}</td>
											<td>{{ $departments[$membership->sust_department] }}</td>
											
											<td>{{ $membership->sust_session }}-<?php $s2 = $membership->sust_session +1 ?> {{$s2}}</td>
											<td>{{ $batch[$membership->sust_session] }}</td>
											<td>{{ ucfirst($membership->membership_type) }}</td>
											<td>{{ ucfirst($membership->membership_no) }}</td>
										
										</tr>
									<?php $i++; ?>
									@endforeach

								</table>
						{!! $memberships->appends(['search' => Request::get('search')])->render() !!}
						
                        
                    </div>
                </div>
            </div>
			
			
			
			
        </div>
    </div>
@endsection
