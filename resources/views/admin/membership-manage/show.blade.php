@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Membership Temporary Identifaction: <strong>{{ $Membership->membership_no }}</strong></div>
                    <div class="card-body">

                        <a href="{{ url('/admin/membership-manage') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        @if(Auth::user()->role=='Admin')
                        <a href="{{ url('/admin/membership-manage/' . $Membership->id . '/edit') }}" title="Edit Membership"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        
                        <form method="POST" action="{{ url('admin/Membership' . '/' . $Membership->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Membership" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        @endif
                        

                        <button class="btn btn-primary hidden-print pull-right" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            
                            <table class="table membership-form-view">
                                <tbody>
                                   
                                    <tr>
                                        <th>Applied Membership Type </th>
                                        <td> {{ ucfirst($Membership->membership_type) }} </td>
                                        <td>&nbsp;</td>
                                        <td rowspan="6" class="text-right">
                                            
                                                <img class="img-thumbnail member-photo" src="{{ url('public/uploads/'.$Membership->member_photo)}}" alt="...">      
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Full Name </th><td> {{ $Membership->fullname }}<br/>{{ $Membership->fullname_bn }} </td>
                                        <td></td><td></td>
                                    </tr>
                                    <tr>
                                        <th> Registration No </th><td> {{ $Membership->sust_reg_no }} </td>
                                        <td></td><td></td>
                                    </tr>
                                    <tr>
                                        <th> Department </th><td> {{ $departments[$Membership->sust_department] }} </td>
                                        <td></td><td></td>
                                    </tr>
                                    <tr>
                                        <th> Session No </th><td> {{ $Membership->sust_session }}-<?php $s2 = $Membership->sust_session +1 ?> {{$s2}} </td>
                                        <td></td><td></td>
                                    </tr>
                                    <tr>
                                        <th> Registered Email </th><td> {{ $Membership->reg_email }} </td>
                                        <td></td><td></td>
                                    </tr>
                                    <tr>
                                        <th> Mobile No </th><td> {{ $Membership->mobile_no }} </td>
                                        <td></td><td></td>
                                    </tr>
                                    <tr>
                                        <th> Fathers Name </th>
                                        <td> {{ $Membership->fathers_name }} </td>
                                        <th> Mothers Name </th>
                                        <td> {{ $Membership->mothers_name }} </td>
                                    </tr>
                                    <tr>
                                    <th> Spouse Name </th><td> {{ $Membership->spouse_name }} </td>
                                    <th> Bloor Group </th><td> {{ strtoupper($Membership->blood_group) }} </td>
                                    </tr>
                                    <tr>
                                        <th> Present Addrress </th><td> {{ $Membership->present_address }}, {{ $Membership->present_district }}  </td>
                                        <th> Parmanent Addrress </th><td> {{ $Membership->permanent_address }}, {{ $Membership->permanent_district }}  </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Payment Information Given </th>
                                        <td colspan="3"> {{ $Membership->member_payment_info }} </td>
                                    </tr>
                                    <tr>
                                        <th>Payment Document Uploaded</th>
                                        <td colspan="3">{{ link_to_asset('public/uploads/'.$Membership->member_payment_doc,'Click Here To Download', array('class'=>'hidden-print')) }} </td>
                                    </tr>
                                    
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>
                                            <!--
                                            <form method="POST" action="{{ url('submission-confirm' . '/' . $Membership->id) }}" accept-charset="UTF-8" style="display:inline">
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
@endsection
