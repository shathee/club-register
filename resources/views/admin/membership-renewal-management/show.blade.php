@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
           
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">MembershipRenewalManagement {{ $membershiprenewalmanagement->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('admin/membership-renewal-management') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('admin/membership-renewal-management/' . $membershiprenewalmanagement->id . '/edit') }}" title="Edit MembershipRenewalManagement"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/membershiprenewalmanagement' . '/' . $membershiprenewalmanagement->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete MembershipRenewalManagement" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $membershiprenewalmanagement->id }}</td>
                                    </tr>
                                    <tr><th> Id </th><td> {{ $membershiprenewalmanagement->id }} </td></tr><tr><th> Renewal Type </th><td> {{ $membershiprenewalmanagement->renewal_type }} </td></tr><tr><th> Member Payment Info </th><td> {{ $membershiprenewalmanagement->member_payment_info }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
