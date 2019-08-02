@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Membership Renewal {{ $membershiprenewal->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/membership-renewal') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/membership-renewal/' . $membershiprenewal->id . '/edit') }}" title="Edit MembershipRenewal"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('membershiprenewal' . '/' . $membershiprenewal->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete MembershipRenewal" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $membershiprenewal->id }}</td>
                                    </tr>
                                    <tr><th> Id </th><td> {{ $membershiprenewal->id }} </td></tr><tr><th> Renewal Type </th><td> {{ $membershiprenewal->renewal_type }} </td></tr><tr><th> Member Payment Info </th><td> {{ $membershiprenewal->member_payment_info }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
