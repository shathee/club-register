@extends('layouts.pdf')

@section('content')
<!--
    <div class="container">
        <div class="row">
           
        	
            <div class="col-md-12">
                <div class="card" style="background-color: #fefefe;">
                    <div class="card-header"> 
				
                    </div>
                    <div class="card-body">
                    	<div class="row">
                    		<div class="col-md-9">
                    			<table class="table membership-form-view">
	                                
	                                   
	                                    <tr>
											<th>Applied Membership Type </th>
											<td> {{ ucfirst($membership->membership_type) }} </td>
											<td>&nbsp;</td><td>&nbsp;</td>
											
										</tr>
										
										<tr>
											<th> Full Name </th><td> {{ $membership->fullname }}{{ $membership->fullname_bn }} </td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<th> Registration No </th><td> {{ $membership->sust_reg_no }} </td><td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<th> Department </th><td> {{ $departments[$membership->sust_department] }} </td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<th> Session No </th><td> {{ $membership->sust_session }}-<?php $s2 = $membership->sust_session +1 ?> {{$s2}} </td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<th> Registered Email </th><td> {{ $membership->reg_email }} </td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
	                               
								
	                            </table>

                    		</div>
                    		<div class="col-md-3" >
                    			<img class="img-thumbnail member-photo" style="position: absolute; left:490px; top:-280px;;" src="{{ url('public/uploads/'.$membership->member_photo)}}" alt="...">	
                    		</div>
                    	</div>


                        <div class="table-responsive">
                            
                            <table class="table membership-form-view">
                               
                                   
                                    
									<tr>
										<th> Mobile No </th><td> {{ $membership->mobile_no }} </td>
										<td></td><td></td>
									</tr>
									<tr>
										<th> Fathers Name </th>
										<td> {{ $membership->fathers_name }} </td>
										<th> Mothers Name </th>
										<td> {{ $membership->mothers_name }} </td>
									</tr>
									<tr>
									<th> Spouse Name </th><td> {{ $membership->spouse_name }} </td>
									<th> Blood Group </th><td> {{ strtoupper($membership->blood_group) }} </td>
									</tr>
									<tr>
										<th> Present Address </th><td> {{ $membership->present_address }}, {{ $membership->present_district }}  </td>
										<th> Permanent Address </th><td> {{ $membership->permanent_address }}, {{ $membership->permanent_district }}  </td>
									</tr>
									
									<tr>
										<th> Payment Information Given </th>
										<td colspan="3"> {{ $membership->member_payment_info }} </td>
									</tr>
									
									</tr>
                               
								
									<tr>
										<td colspan="4">&nbsp;
										</td>
									</tr>
									
									<tr style="border: none;">
										
										<td rowspan="2" colspan="4" class="text-right">

											<div class="pull-right">Signature of the Member</div>
										</td>
									</tr>
									
								
                            </table>
                        </div>
						

                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <div class="container">
        <div class="row">
           
        	
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> 
				
                    </div>
                    <div class="card-body">
                    	<div class="row">
                   
                    			<table class="table membership-form-view">
                    				<tr>
                    					<td width="20%"></td>
                    					<td width="30%"></td>
                    					<td width="20%"></td>
                    					<td width="30%"></td>
                    				</tr>
                    				<tr>
                    					
                    					<td colspan="4" class="td_logo"> 
                    						<!--<a class="thumbnil logo" href="{{ url('/') }}">
					                            <img src="{{ url('public/img/sust.png')}}" />
					                        </a>-->
					                        <img class="thumbnil logo" src="{!! public_path().'\public\img\sust.png' !!}"/>
                    					</td>
                    					
                    				</tr>
                    				<tr>
                    					<td colspan="4"><h1>Sust Club Limited</h1>
                    					</td>
                    				</tr>
	                                     <tr>
											<th>Applied Membership Type </th>
											<td> {{ ucfirst($membership->membership_type) }} </td>
											<td>&nbsp;</td>
											<td rowspan="6">
												<img class="img-thumbnail member-photo" src="{{ url('public/uploads/'.$membership->member_photo)}}" alt="...">	</td>
											
										</tr>
										
										<tr>
											<th> Full Name </th><td> {{ $membership->fullname }}{{ $membership->fullname_bn }} </td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<th> Registration No </th><td> {{ $membership->sust_reg_no }} </td><td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<th> Department </th><td> {{ $departments[$membership->sust_department] }} </td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<th> Session No </th><td> {{ $membership->sust_session }}-<?php $s2 = $membership->sust_session +1 ?> {{$s2}} </td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<th> Registered Email </th><td> {{ $membership->reg_email }} </td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
	                               		
	                               		<tr>
											<th> Mobile No </th><td> {{ $membership->mobile_no }} </td>
											<td></td><td></td>
										</tr>
										<tr>
											<th> Fathers Name </th>
											<td> {{ $membership->fathers_name }} </td>
											<th> Mothers Name </th>
											<td> {{ $membership->mothers_name }} </td>
										</tr>
										<tr>
										<th> Spouse Name </th><td> {{ $membership->spouse_name }} </td>
										<th> Blood Group </th><td> {{ strtoupper($membership->blood_group) }} </td>
										</tr>
										<tr>
											<th> Present Address </th><td> {{ $membership->present_address }}, {{ $membership->present_district }}  </td>
											<th> Permanent Address </th><td> {{ $membership->permanent_address }}, {{ $membership->permanent_district }}  </td>
										</tr>
										
										<tr>
											<th> Payment Information Given </th>
											<td colspan="3"> {{ $membership->member_payment_info }} </td>
										</tr>
										
										</tr>
										<tr>
											<td colspan="4">&nbsp;
											</td>
										</tr>
										<tr>
											<td colspan="4">&nbsp;
											</td>
										</tr>
	                               
									
										<tr>
											<td colspan="4">&nbsp;
											</td>
										</tr>
										
										<tr style="border: none;">
											<td colspan="3" ></td>
											<td rowspan="2" class="text-right">
												<hr>
												Signature of the Member
											</td>
										</tr>
								
	                            </table>

                    		
                    			
                    		
                    	</div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
