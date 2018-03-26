
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> 
					Thank You for Becoming a Part of SUST Club Ltd. Your Temporary Identification No is <strong>{{ $membership->membership_no }}</strong>
					
                    </div>
                    <div class="card-body">
                    	<!--
                        <a href="{{ url('/membership') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                        -->
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table membership-form-view">
                                <tbody>
                                   
                                    <tr>
										<th>Applied Membership Type </th>
										<td> {{ $membership->membership_type }} </td>
										<td>&nbsp;</td>
										
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
									<th> Bloor Group </th><td> {{ $membership->blood_group }} </td>
									</tr>
									<tr>
										<th> Present Addrress </th><td> {{ $membership->present_address }}, {{ $membership->present_district }}  </td>
										<th> Parmanent Addrress </th><td> {{ $membership->permanent_address }}, {{ $membership->permanent_district }}  </td>
									</tr>
									
									<tr>
										<th> Payment Information Given </th>
										<td colspan="3"> {{ $membership->member_payment_info }} </td>
									</tr>
									<tr>
										<th>Payment Document Uploaded</th>
										<td colspan="3">{{ link_to_asset('public/uploads/'.$membership->member_payment_doc,'Click Here To Download') }} </td>
									</tr>
									
									</tr>
                                </tbody>
								<tfoot>
									<tr>
										<td>
											<!--
											<form method="POST" action="{{ url('submission-confirm' . '/' . $membership->id) }}" accept-charset="UTF-8" style="display:inline">
											{{ method_field('PUT') }}
											{{ csrf_field() }}
											<button type="submit" class="btn btn-warning btn-sm" title="Confirm Submission" onclick="return confirm(&quot;Confirm Submission?&quot;)"> Confirm Submission</button>
											</form>
										-->
										</td>
									</tr>
								</tfoot>
                            </table>
                        </div>
						

                    </div>
                </div>
            </div>
        </div>
    </div>

