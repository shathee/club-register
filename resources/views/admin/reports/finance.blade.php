@extends('layouts.admin')

@section('content')
 
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Statistics</div>
                    <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <td></td>
                            <td>Number of Members</td>
                            <td>Money Deposited</td>
                         </tr> 
                        </thead>
                        <tr>
                            <td>Life Members</td>
                            <td>{{ $life_member_count }}</td>
                            <td>{{ $life_member_total_fee }}</td>
                        </tr>
                        <tr>
                            <td>General Members</td>
                            <td>{{ $general_member_count }}</td>
                            <td>{{ $general_member_total_fee }}</td>
                        </tr>
                        <tfoot>
                            <tr>
                            <td>
                                Total
                            </td>
                            <td>
                                {{ $total_member_count}}
                            </td>
                            <td>
                                {{ $general_member_total_fee + $life_member_total_fee }}
                            </td>
                        </tr>
                        </tfoot>
                    </table>    
                    
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection
