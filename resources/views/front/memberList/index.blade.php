@extends('layouts.home')

@section('content')
    <div class="container">
		
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                	
                	<div class="card-body">
                		<div class="alert alert-info">
                			<h3 class="text-center">Draft List of Founder members</h3>
                			<p>
                				
                				Dear All
                			</p>
                			<p>
                				Draft list of founder members has been published. Only the submissions those payments have been confirmed are published here. There are some submissions whose payments were not confirmed due to non availabilty of document or unclear document. 
                			</p>
                			<p>
                				If you have submitted all your documents properly but your name is not in the list, please contact to 01xxx-xxxxxx or mail to membership@sustclubltd.com
                			</p>
                		</div>	
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
                			<p>
                				Also we request everyone  that if anyone has any knowledge regarding any members who might be ineligible according to the article 11(c) & (d) of Articles of Association, Please let us know(membership@sustclubltd.com).
                			</p>
                		</div>
                		<div class="row">
                			<div class="col-md-5">
				                    <form method="GET" action="{{ url('/member-list') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0" role="">
											<span>Show by batch/session &nbsp;</span>
											<select name="sust_session" class="form-control" id="sust_session" required>
											@foreach ($sessions as $optionKey => $optionValue)
												<option value="{{ $optionKey }}" {{ (isset($membership->sust_session) && $membership->sust_session == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
											@endforeach
											</select>
									</form>
							</div>
							<div class="col-md-7">
							
				                    <form method="GET" action="{{ url('/member-list') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0" role="">
											<span>Show by Department &nbsp;</span>
											<select name="sust_department" class="form-control" id="sust_department" required>
												@foreach ($departments as $optionKey => $optionValue)
													<option value="{{ $optionKey }}" {{ (isset($membership->sust_department) && $membership->sust_department == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
												@endforeach
											</select>
									</form>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
							<p>
                			<strong>	Showing {{$memberships->firstItem()}}
                				To {{$memberships->lastItem()}} of 
                				Total Confirmed {{$memberships->total()}}
                			</strong>
                			</p>
                			</div>
						</div>
                			
                			{!! $memberships->appends(['sust_session' => Request::get('sust_session'),'sust_department' => Request::get('sust_department')])->render() !!}

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
    <script type="text/javascript">
    	var select = document.getElementById('sust_session');
		select.addEventListener('change', function(){
		    this.form.submit();
		}, false);

		var select = document.getElementById('sust_department');
		select.addEventListener('change', function(){
		    this.form.submit();
		}, false);

		document.getElementById("sust_department").focus();
    </script>
@endsection
