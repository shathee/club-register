@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">ALL {{ ucfirst($membership_type) }} Members</div>
                    <div class="card-body">
                        @if(Session::has('flash_message'))
                            <p class="alert alert-info">{{ Session::get('flash_message') }}</p>
                        @endif
                        @if(Auth::user()->role=='Admin')
                        <a href="{{ url('/admin/membership-manage/create') }}" class="btn btn-success btn-sm" title="Add New Membership">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @endif
                        <div class="row">
                            
                        
                        <div class="col-md-5">
                         <form method="GET" action="{{ url('/admin/membership-manage') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="">
                            
                            <div class="input-group">
                                <select name="membership_type" class="form-group">
                                    <option value="">Select Membership Type</option>
                                    <option value="general">General</option>
                                    <option value="life">Life</option>
                                </select>
                               
                               <button type="submit" class="btn btn-primary form-group">Show</button>
                               
                            </div>
                         </form>
                         </div>
                        <div class="col-md-5">
                         <form method="GET" action="{{ url('/admin/membership-manage') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="">
                            
                            <div class="input-group">
                                <select name="is_finance_approved" class="form-group">
                                    <option value="">Select Payment Status</option>
                                    <option value="yes">Confirmed</option>
                                    <option value="no">Not Confirmed</option>
                                </select>
                               
                               <button type="submit" class="btn btn-primary form-group">Show</button>
                               
                            </div>
                         </form>
                         </div>

                         </div>
                     <!--
                        <form method="GET" action="{{ url('/admin/membership-manage') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    -->

                        <br/>
                        <br/>
                        <div class="table-responsive">
							<div class="pagination"> 
							
							@include('pagination.default', ['paginator' => $Membership])
							</div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Membership Type</th><th>Full Name</th><th>Department</th><th>Sessoin</th><th>Confirmed By Finance?</th><th colspan="3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($Membership as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ ucfirst($item->membership_type) }}</td>
										<td>{{ $item->fullname }}</td>
										<td>{{ $departments[$item->sust_department] }}</td>
										<td>{{ $item->sust_session }}-<?php $s2 = $item->sust_session +1 ?> {{$s2}}</td>
                                        @if($item->is_finance_approved == 'yes' or $item->is_finance_approved == 'YES')
                                        <td >
                                            <button class="btn-success">{{ ucfirst($item->is_finance_approved) }}</button>
                                        </td>
										<td >
										
											@if(Auth::user()->role=='Admin')
												
											<a href="{{ url('confirmmail/'.$item->id ) }}"><button class="btn btn-dark">Send Email</button></a>
											@endif
										</td>
                                        @else
                                        <td><button class="btn-danger">{{ ucfirst($item->is_finance_approved) }}</button></td></td>
                                        <td >
                                           
                                            <form method="POST" action="{{ url('/admin/membership-manage/payment-confirm') }}" accept-charset="UTF-8" style="display:inline">
                                                
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{$item->id}}">
                                                <button type="submit" class="btn btn-primary btn-sm" title="Confirm Payment?" onclick="return confirm(&quot;Confirm Payment? Once it is confirmed it can not be undone&quot;)"><i class="" aria-hidden="true"></i> Confirm Payment</button>
                                            </form>
                                        </td>
                                        @endif
                                        
                                        <td>
                                            <a href="{{ url('/admin/membership-manage/' . $item->id) }}" title="View Membership"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            @if(Auth::user()->role=='Admin')
												
												<a href="{{ url('/admin/membership-manage/' . $item->id . '/edit') }}" title="Edit Membership"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

												<form method="POST" action="{{ url('/admin/membership-manage' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Membership" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
												</form>
                                            @endif
                                        </td>
                                        
                                    </tr>
                                @empty
                                    <p>No Member found.</p>
                                @endforelse
                                </tbody>
                            </table>
                            <div class="pagination"> 
							{!! $Membership->appends(['search' => Request::get('search')])->render() !!}
						
							</div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
