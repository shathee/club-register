@extends('layouts.pdf')

@section('content')
<style>
    td{
        
        line-height: 1.8;
    }

</style>
    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
            
                <div class="card">
                    <div class="card-header"><h3>Department : {{ $departments[$dept] }}</h3></div>
                    <div class="card-body">
                        
                        <div class="table-responsive">
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th class="text-left">SL</th><th>Membership Type</th><th>Full Name</th>
                                        <th>Batch(Session)</th>
                                        <th>Signature</th>
                                    </tr>
                                </thead>
                                <tbody>
                                

                                    <tr>
                                        <td></td>
                                    </tr>
                                    @foreach($memberships as $m)
                                    <tr>
                                        <td>{{ $m->id }}</td>
                                        <td>{{ ucfirst($m->membership_type) }}</td>
                                        <td>{{ $m->fullname }}</td>
                                        <td>{{ $batch[$m->sust_session] }}({{ $m->sust_session }}&nbsp;-&nbsp;<?php $s2 = $m->sust_session +1; ?>{{$s2}})</td>
                                        <td>
                                            {{ '______________________' }}

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
