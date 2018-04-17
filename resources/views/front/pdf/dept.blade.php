@extends('layouts.pdf')

@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
            
                <div class="card">
                    <div class="card-header"><h3>Department : {{ $departments[$dept] }}</h3></div>
                    <div class="card-body">
                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-left">SL</th><th>Membership Type</th><th>Full Name</th>
                                        <th>Session</th>
                                        <th>Male/Female</th>
                                    </tr>
                                </thead>
                                <tbody>
                                

                                    <tr>
                                        <td></td>
                                    </tr>
                                    @foreach($memberships as $m)
                                    <tr>
                                        <td>{{ $m->id }}</td>
                                        <td>{{ $m->membership_type }}</td>
                                        <td>{{ $m->fullname }}</td>
                                        <td>{{ $m->sust_session }}&nbsp;-&nbsp;<?php $s2 = $m->sust_session +1; ?>{{$s2}}</td>
                                        <td>
                                            @if($m->gender=='female')
                                            {{ 'F' }}
                                            @else
                                            {{ '&nbsp;'}}
                                            @endif

                                        </td>
                                    </tr>
                                    @endforeach
                               
                                </tbody>
                            </table>
                            
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
