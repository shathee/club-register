@extends('layouts.pdf')

@section('content')


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
                    						<a class="thumbnil logo" href="{{ url('#') }}">
					                            <img src="{{ url('public/img/sust.png')}}" />
					                        </a>
					                        <!--
					                        <img class="thumbnil logo" src="{!! public_path().'\public\img\sust.png' !!}"/>-->
                    					</td>
                    					
                    				</tr>
                    				<tr>
                    					<td colspan="4"><h1 class="h1">Sust Club Limited</h1>
                    					</td>
                    				</tr>
                    			</table>
                    	</div>
                    	<div class="row">
                    			<table class="table membership-form-view">
	                    				<tr>
	                    					<td width="20%"></td>
	                    					<td width="30%"></td>
	                    					<td width="20%"></td>
	                    					<td width="30%"></td>
	                    				</tr>
	                                     <tr>
											<th class="th">Applied Membership Type </th>
											<td class="td"> {{ ucfirst($membership->membership_type) }} </td>
											<td>&nbsp;</td>
											<td rowspan="6">
												<img class="img-thumbnail member-photo" src="{{ url('public/uploads/'.$membership->member_photo)}}" alt="...">	</td>
											
										</tr>
										
										<tr>
											<th class="th"> Full Name: </th><td> {{ $membership->fullname }} </td>
											<td class="td">&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<th class="th"> Full Name (Bangla):</th><td class="td"> {{ '__________________________________' }} </td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<th class="th"> University Registration No: </th><td class="td"> {{ $membership->sust_reg_no }} </td><td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<th class="th"> Department: </th><td class="td"> {{ $departments[$membership->sust_department] }} </td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<th class="th"> Session No: </th><td class="td"> {{ $membership->sust_session }}&nbsp;-&nbsp;<?php $s2 = $membership->sust_session +1; ?>{{$s2}} </td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<th class="th"> Registered Email: </th><td class="td"> {{ $membership->reg_email }} </td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
	                               		
	                               		<tr>
											<th class="th"> Mobile No: </th><td class="td"> {{ $membership->mobile_no }} </td>
											<td></td><td></td>
										</tr>
										<tr>
											<th class="th"> Fathers Name: </th>
											<td class="td"> {{ $membership->fathers_name }} </td>
											<th class="th"> Mothers Name: </th>
											<td class="td"> {{ $membership->mothers_name }} </td>
										</tr>
										<tr>
										<th class="th"> Spouse Name: </th><td class="td"> {{ $membership->spouse_name }} </td>
										<th class="th"> Blood Group </th><td class="td"> {{ strtoupper($membership->blood_group) }} </td>
										</tr>
										<tr>
											<th class="th"> Present Address: </th><td class="td"> {{ $membership->present_address }}, {{ $membership->present_district }}  </td>
											<th class="th"> Permanent Address: </th><td class="td"> {{ $membership->permanent_address }}, {{ $membership->permanent_district }}  </td>
										</tr>
										
										<tr>
											<th class="th"> Payment Information Given </th>
											<td colspan="3" class="td"> {{ $membership->member_payment_info }} </td>
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
											<td rowspan="2" class="td text-right">
												
												<hr>
												Signature of the Member
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
										<tr>
											<td colspan="4">&nbsp;
											</td>
										</tr>
										<tr>
											<td colspan="2" style="text-align:left;font-family: 'Righteous', cursive; font-size: .5em">Website:www.sustclubltd.com
											</td>
											<td colspan="2" style="text-align:right;font-family: 'Righteous', cursive; font-size: .5em">email:membership@sustclubltd.com
											</td>
										</tr>
										<tr>
											<td colspan="4">&nbsp;
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
