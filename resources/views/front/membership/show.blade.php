@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-offset-1 col-md-10">
                <div class="card">
                    <div class="card-header">Membership {{ $membership->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/membership') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                   
                                    <tr>
										<th> Membership Type </th>
										<td> {{ $membership->membership_type }} </td>
										<td rowspan="6" colspan="2">
										<a href="#" class="thumbnail"><img src="{{ url('public/uploads/'.$membership->member_photo)}}" alt="..."></a>
										</td>
									</tr>
									
									<tr>
										<th> Full Name </th><td> {{ $membership->fullname }} </td>
										<td></td><td></td>
									</tr>
									<tr>
										<th> Registration No </th><td> {{ $membership->sust_reg_no }} </td>
										<td></td><td></td>
									</tr>
									<tr>
										<th> Department </th><td> {{ $membership->sust_department }} </td>
										<td></td><td></td>
									</tr>
									<tr>
										<th> Mobile No </th><td> {{ $membership->mobile_no }} </td>
										<td></td><td></td>
									</tr>
									<tr>
										<th> Reg Email </th><td> {{ $membership->reg_email }} </td>
										<td></td><td></td>
									<tr>
										<td></td><td></td>
										<th> Fathers Name </th><td> {{ $membership->fathers_name }} </td>
									</tr>
									<tr>
										<td></td><td></td>
										<th> Mothers Name </th><td> {{ $membership->mothers_name }} </td>
									</tr>
									<tr>
										<td></td><td></td>
										<th> Spouse Name </th><td> {{ $membership->spouse_name }} </td>
									</tr>
									<tr>
										<td></td><td></td>
										<th> Present Addrress </th><td> {{ $membership->present_address }}, {{ $membership->present_district }}  </td>
									</tr>
									<tr>
										<td></td><td></td>
										<th> Parmanent Addrress </th><td> {{ $membership->parmanent_address }}, {{ $membership->parmanent_district }}  </td>
									</tr>
									<tr>
										<td></td><td></td>
										<th> Spouse Name </th><td> {{ $membership->spouse_name }} </td>
									</tr>
									<tr>
										<td></td><td></td>
										<th> Spouse Name </th><td> {{ $membership->spouse_name }} </td>
									</tr>
									
									</tr>
                                </tbody>
								<tfoot>
									<tr>
										<td>
											<form method="POST" action="{{ url('membership' . '/' . $membership->id) }}" accept-charset="UTF-8" style="display:inline">
											{{ method_field('PUT') }}
											{{ csrf_field() }}
											<button type="submit" class="btn btn-warning btn-sm" title="Confirm Submission" onclick="return confirm(&quot;Confirm Submission?&quot;)"> Confirm Submission</button>
											</form>
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
@endsection
