@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
          
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Membership Renewal Information Management</div>
                    <div class="card-body">
                        <a href="{{ url('admin/membership-renewal-management/create') }}" class="btn btn-success btn-sm" title="Add New MembershipRenewalManagement">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Renewal Information
                        </a>

                        <form method="GET" action="{{ url('admin/membership-renewal-management') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Id</th>
                                        <th>Name</th><th>Department</th>
                                        <th>Session</th>
                                        <th>Renewal Type</th><th>Member Payment Info</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($membershiprenewalmanagement as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->membership_no }}</td>
                                        <td>{{ $item->memberProfile->fullname }}</td>
                                        <td>{{ $departments[$item->memberProfile->sust_department] }}</td>
                                        <td>{{ $sessions[$item->memberProfile->sust_session] }}</td>
                                       

                                        <td>{{ $item->renewal_type }}</td><td>{{ $item->member_payment_info }}</td>
                                        <td>
                                            <a href="{{ url('admin/membership-renewal-management/' . $item->id) }}" title="View MembershipRenewalManagement"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('admin/membership-renewal-management/' . $item->id . '/edit') }}" title="Edit MembershipRenewalManagement"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('admin/membership-renewal-management' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete MembershipRenewalManagement" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $membershiprenewalmanagement->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
