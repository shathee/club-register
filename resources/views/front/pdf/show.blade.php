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
                   
                    			<table class="table" style="border-bottom: 1px groove #cecece;">
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
                    			<table class="table" style="padding-top: 10px;">
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
											<th class="th"> Full Name: </th><td> {{ ucwords(strtolower($membership->fullname)) }} </td>
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
											<th class="th"> Father's Name: </th>
											<td class="td"> {{ ucwords(strtolower($membership->fathers_name)) }} </td>
											<th class="th"> Mothers Name: </th>
											<td class="td"> {{ ucwords(strtolower($membership->mothers_name)) }} </td>
										</tr>
										<tr>
										<th class="th"> Spouse Name: </th><td class="td"> {{ ucwords(strtolower($membership->spouse_name)) }} </td>
										<th class="th"> Blood Group </th><td class="td"> {{ strtoupper($membership->blood_group) }} </td>
										</tr>
										<tr>
											<th class="th"> Present Address: </th><td class="td"> {{ ucwords(strtolower($membership->present_address)) }}, {{ $membership->present_district }}  </td>
											<th class="th"> Permanent Address: </th><td class="td"> {{ ucwords(strtolower($membership->permanent_address)) }}, {{ $membership->permanent_district }}  </td>
										</tr>
										
										<tr>
											<th class="th"> Amount Deposited </th>
											<td colspan="3" class="td"> @if($membership->membership_type=='life')
											{{ 'BDT 75,000/-' }}
											@else
											{{ 'BDT 10,000/-' }}
											@endif </td>
										</tr>
										
										
										<tr>
											<th class="th"> Payment Status </th>
											<td class="td">Confirmed
											</td>
											<td colspan="2">&nbsp;
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
										
										<tr style="border: none;">
											<td colspan="3" ></td>
											<td rowspan="2" class="td" style="text-align: center;">
												
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
											<td colspan="4">&nbsp;
											</td>
										</tr>
										<tr>
											<td colspan="4">&nbsp;
											</td>
										</tr>
										
										
										<tr>
											<td style="text-align:left;font-family: 'Righteous', cursive; font-size: .5em;">www.sustclubltd.com
											</td>
											<td colspan="2" style="text-align:center;font-family: 'Righteous', cursive; font-size: .5em;">P.S.: SUST Club Ltd. Authorty May Seek More information if needed in future. </td>
											<td style="text-align:right;font-family: 'Righteous', cursive; font-size: .5em">membership@sustclubltd.com
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
