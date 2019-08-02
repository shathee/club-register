@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
           
        	
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> 
					@if(Session::has('flash_message'))
						<p class="alert alert-info">{{ Session::get('flash_message') }}</p>
					@endif
					<p class="info">
						For any query please contact membership@sustclubltd.com  <button class="btn btn-primary hidden-print pull-right" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
					</p>
                    </div>
                    <div class="card-body">
                        {{-- <a href="{{ url('/membership') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a> --}}
                        
                       

                        <div class="table-responsive">
                            <table class="table membership-form-view">
                                <tbody>
                                   
                                    <tr>
										<th width="20%">Applied Membership Type </th>
										<td> {{ ucfirst($membership->membership_type) }} </td>
										<td>&nbsp;</td>
										<td rowspan="6" class="text-right">
											
												<img class="img-thumbnail member-photo" src="{{ url('new_uploads/'.$membership->member_photo) }}" alt="{{$membership->fullname}}">
										</td>
									</tr>
									
									<tr>
										<th> Full Name </th><td> {{ $membership->fullname }}<br/>{{ $membership->fullname_bn }} </td>
										<td></td><td></td>
									</tr>
									<tr>
										<th> Registration No </th><td> {{ $membership->sust_reg_no }} </td>
										<td></td><td></td>
									</tr>
									<tr>
										<th> Department </th><td> {{ $departments[$membership->sust_department] }} </td>
										<td></td><td></td>
									</tr>
									<tr>
										<th> Session No </th><td> {{ $membership->sust_session }}-<?php $s2 = $membership->sust_session +1 ?> {{$s2}} </td>
										<td></td><td></td>
									</tr>
									<tr>
										<th> Registered Email </th><td> {{ $membership->reg_email }} </td>
										<td></td><td></td>
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
										<th> Present Address </th>
										<td> {{ $membership->present_address }}, {{ $membership->present_district }}  </td>
										<th> Permanent Address </th>
										<td> {{ $membership->permanent_address }}, {{ $membership->permanent_district }}  </td>
									</tr>
									
									<tr>
										<th colspan="2"> Payment Information Given </th>
										<td colspan="2"> {{ $membership->member_payment_info }} </td>
									</tr>
									<tr>
										<th colspan="4"> <h4>Introducers</h4></th>
									</tr>
									<tr>
										<td>
										Proposer
										</td>
										<td>
										{{ $membership->name_of_proposer }} ({{ sprintf('%03d',$membership->membership_no_of_proposer) }})
										</td>
										<td>
										Seconder
										</td>
										<td>
										{{ $membership->name_of_seconder }} ({{ sprintf('%03d',$membership->membership_no_of_seconder) }})
										</td>
									</tr>
									<tr>
										<th colspan="4"> <h4>Declaration</h4></th>
									</tr>
									<tr>
										<td colspan="4">
											<p>
												I hereby declare that I have read and understood the Memorendum of Assocation, Articles of Association and By Laws of SUST Club Limited and will adhere to those documents. I confirm the detail information given above are true and correct to the best of my knowledge and belief.
											</p>
										</td>
									</tr>
                                </tbody>
								<tfoot>
									
								</tfoot>
                            </table>
                        </div>
						

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
