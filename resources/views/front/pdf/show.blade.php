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
                    					
                    					<td colspan="1" class="td_logo"> 
                    						<a class="thumbnil logo" href="{{ url('#') }}">
					                            <img src="{{ url('public/img/sust.png')}}" />
					                        </a>
					                        <!--
					                        <img class="thumbnil logo" src="{!! public_path().'\public\img\sust.png' !!}"/>-->
                    					</td>
                    					
                    				
                    					<td colspan="2">
                    						<h1 class="h1">Sust Club Limited</h1>
                    						<h4 class="h4">Founder Membership Form</h4>
                    					</td>
										<td class="td_logo">
											<img class="img-thumbnail member-photo" src="{{ url('public/uploads/'.$membership->member_photo)}}" alt="...">	
										</td>
                    				</tr>
                    			</table>
                    	</div>
                    	<div class="row">
                    			<table class="table" style="padding-top: 10px;">
	                    				<tr>
											<th class="th">Applied Membership Type </th>
											<td class="td"> 
												<input type="checkbox" value="general" @if($membership->membership_type=='general') checked @endif />
												General 
												{{ ucfirst($membership->membership_type) }} 
												<input type="checkbox" @if($membership->membership_type=='life') checked @endif value="life"  />Life
												<input type="checkbox" @if($membership->membership_type=='corporate') checked @endif value="corporate"  />Corporate
												<input type="checkbox"@if($membership->membership_type=='associate') checked @endif value="associate"  />Associate
											</td>
											<td>Membership No</td>
											<td>{{ $membership->membership_no}}</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											
											
										</tr>
										<tr>
											<th class="th"> Full Name: </th>
											<td> {{ ucwords(strtolower($membership->fullname)) }} </td>
											<th class="th"> Full Name (Bangla):</th>
											<td class="td"> {{ '__________________________________' }} 
												<th>Birth Date</th>
												<td>{{'___/___/______'}}</td>
										</tr>
										<tr>
											<th class="th"> Father's Name: </th>
											<td class="td"> {{ ucwords(strtolower($membership->fathers_name)) }} </td>
											<th class="th"> Mothers Name: </th>
											<td class="td"> {{ ucwords(strtolower($membership->mothers_name)) }} </td>
											<th class="th"> Spouse Name: </th><td class="td"> {{ ucwords(strtolower($membership->spouse_name)) }} </td>
										</tr>
										<tr>
											<th class="th"> University Registration No: </th><td class="td"> {{ $membership->sust_reg_no }} </td><td>&nbsp;</td><td>&nbsp;</td>
											<td>&nbsp;</td><td>&nbsp;</td>
											
										</tr>
										<tr>
											<th class="th"> Department: </th><td class="td"> {{ $departments[$membership->sust_department] }} </td>
											<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
											
										</tr>
										<tr>
											<th class="th"> Session No: </th><td class="td"> {{ $membership->sust_session }}&nbsp;-&nbsp;<?php $s2 = $membership->sust_session +1; ?>{{$s2}} </td>
											<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<th class="th"> Registered Email: </th><td class="td"> {{ $membership->reg_email }} </td>
											<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
	                               		
	                               		<tr>
											<th class="th"> Mobile No: </th><td class="td"> {{ $membership->mobile_no }} </td>
											<td></td><td></td><td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<th class="th"> Father's Name: </th>
											<td class="td"> {{ ucwords(strtolower($membership->fathers_name)) }} </td>
											<th class="th"> Mothers Name: </th>
											<td class="td"> {{ ucwords(strtolower($membership->mothers_name)) }} </td>
											<td>&nbsp;</td><td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
										<th class="th"> Spouse Name: </th><td class="td"> {{ ucwords(strtolower($membership->spouse_name)) }} </td>
										<th class="th"> Blood Group </th><td class="td"> {{ strtoupper($membership->blood_group) }} </td>
										<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<th class="th"> Present Address: </th><td class="td"> {{ ucwords(strtolower($membership->present_address)) }}, {{ $membership->present_district }}  </td>
											<th class="th"> Permanent Address: </th><td class="td"> {{ ucwords(strtolower($membership->permanent_address)) }}, {{ $membership->permanent_district }}  </td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										
										<tr>
											<th class="th"> Amount Deposited </th>
											<td colspan="3" class="td"> @if($membership->membership_type=='life')
											{{ 'BDT 75,000/-' }}
											@else
											{{ 'BDT 10,000/-' }}
											@endif </td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										
										
										<tr>
											<th class="th"> Payment Status </th>
											<td class="td">Confirmed
											</td>
											<td colspan="2">&nbsp;
											</td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<td colspan="4">&nbsp;
											</td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
	                               
										<tr>
											<td colspan="4">&nbsp;
											</td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<td colspan="4">&nbsp;
											</td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										
										<tr style="border: none;">
											<td colspan="5" ></td>
											<td rowspan="2" class="td" style="text-align: center;">
												
												<hr>
												Signature of the Member
											</td>
										</tr>
										<tr>
											<td colspan="4">&nbsp;
											</td><td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<td colspan="4">&nbsp;
											</td><td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<td colspan="4">&nbsp;
											</td><td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<td colspan="4">&nbsp;
											</td><td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
											<td colspan="4">&nbsp;
											</td><td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										
										
										<tr>
											<td style="text-align:left;font-family: 'Righteous', cursive; font-size: .5em;">www.sustclubltd.com
											</td>
											<td colspan="2" style="text-align:center;font-family: 'Righteous', cursive; font-size: .5em;">P.S.: SUST Club Ltd. Authorty May Seek More information if needed in future. </td>
											<td style="text-align:right;font-family: 'Righteous', cursive; font-size: .5em">membership@sustclubltd.com
											</td>
											<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										
								
	                            </table>

                    		
                    			
                    		
                    	</div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
