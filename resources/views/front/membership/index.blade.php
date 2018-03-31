@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-md-offset-1 col-md-10">
                <div class="card">
                    <div class="card-header">Search with Temorary Identification Number or SUST Registration No or Mobile No or Registered Email ID</div>

                    <form method="GET" action="{{ url('/membership') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    <br/>
                    <br/>
                    <div class="card-body">
					<!--
                        <a href="{{ url('/membership/create') }}" class="btn btn-success btn-sm" title="Add New Membership">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
					-->

                        
                  
                        @if(!empty($membership))
                            <table class="table">
                                <thead>
                                   <tr>
                                       <td>Name</td>
                                       <td>Department</td>
                                       <td>Session</td>
                                       <td>Regitared Email</td>
                                       <td>Status Confirmed By Finance Team?</td>
                                   </tr> 
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>{{ $membership->fullname }}</td>
                                    <td>{{ $departments[$membership->sust_department] }}</td>
                                    <td>{{ $membership->sust_session }}-<?php $s2 = $membership->sust_session +1 ?> {{$s2}}</td>
                                    <td>{{ $membership->reg_email }}</td>
                                    @if($membership->is_finance_approved == 'yes'||'YES')
                                    <td class="btn-success">{{ ucfirst($membership->is_finance_approved) }}</td>
                                    @else
                                    <td class="btn-danger">{{ ucfirst($membership->is_finance_approved) }}</td>
                                    @endif
                                    
                                </tr>    
                                </tbody>
                                
                            </table>
                            
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
