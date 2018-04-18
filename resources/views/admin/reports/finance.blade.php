@extends('layouts.admin')

@section('content')
 
    <div class="container">
        
        <div class="row">
            <div class="col-md-6">
                <div class="card text-light bg-success">
                    <div class="card-header">Finance Status According to Confirmation by Finance Team</div>
                    <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <td></td>
                            <td>Number of Submissions</td>
                            <td>Money Deposited</td>
                         </tr> 
                        </thead>
                        <tr>
                            <td>Life</td>
                            <td>{{ $life_member_confirmed_count }}</td>
                            <td>{{ $life_member_confirmed_total_fee }}</td>
                        </tr>
                        <tr>
                            <td>General</td>
                            <td>{{ $general_member_confirmed_count }}</td>
                            <td>{{ $general_member_confirmed_total_fee }}</td>
                        </tr>
                        <tfoot>
                            <tr>
                            <td>
                                Total
                            </td>
                            <td>
                                {{ $total_member_confirmed_count}}
                            </td>
                            <td>
                                {{ $general_member_confirmed_total_fee + $life_member_confirmed_total_fee }}
                            </td>
                        </tr>
                        </tfoot>
                    </table>    
                    
                        
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-warning">
                    <div class="card-header">Finance Status On Hold by Finance Team</div>
                    <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <td></td>
                            <td>Number of Submissions</td>
                            <td>Money Deposited</td>
                         </tr> 
                        </thead>
                        <tr>
                            <td>Life</td>
                            <td>{{ $life_member_onhold_count }}</td>
                            <td>{{ $life_member_onhold_total_fee }}</td>
                        </tr>
                        <tr>
                            <td>General</td>
                            <td>{{ $general_member_onhold_count }}</td>
                            <td>{{ $general_member_onhold_total_fee }}</td>
                        </tr>
                        <tfoot>
                            <tr>
                            <td>
                                Total
                            </td>
                            <td>
                                {{ $total_member_onhold_count}}
                            </td>
                            <td>
                                {{ $general_member_onhold_total_fee + $life_member_onhold_total_fee }}
                            </td>
                        </tr>
                        </tfoot>
                    </table>    
                    
                        
                    </div>
                </div>
            </div>

        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
            <div class="col-md-6">
                <div class="card text-light bg-info">
                    <div class="card-header">Finance Status According to Submission</div>
                    <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <td></td>
                            <td>Number of Submissions</td>
                            <td>Money Deposited</td>
                         </tr> 
                        </thead>
                        <tr>
                            <td>Life </td>
                            <td>{{ $life_member_count }}</td>
                            <td>{{ $life_member_total_fee }}</td>
                        </tr>
                        <tr>
                            <td>General </td>
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
            <div class="col-md-6">
                <div class="card text-light bg-secondary">
                    <div class="card-header"> Pending for Finance Decission</div>
                    <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <td></td>
                            <td>Number of Submissions</td>
                            <td>Money Deposited</td>
                         </tr> 
                        </thead>
                        <tr>
                            <td>Life</td>
                            <td>{{ $life_member_nostatus_count }}</td>
                            <td>{{ $life_member_nostatus_total_fee }}</td>
                        </tr>
                        <tr>
                            <td>General</td>
                            <td>{{ $general_member_nostatus_count }}</td>
                            <td>{{ $general_member_nostatus_total_fee }}</td>
                        </tr>
                        <tfoot>
                            <tr>
                            <td>
                                Total
                            </td>
                            <td>
                                {{ $total_member_nostatus_count}}
                            </td>
                            <td>
                                {{ $general_member_nostatus_total_fee + $life_member_nostatus_total_fee }}
                            </td>
                        </tr>
                        </tfoot>
                    </table>    
                    
                    </div>
                </div>
            </div>

        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
                <div class="col-md-6">
                <div class="card text-light bg-danger">
                    <div class="card-header">Rejected by Finance </div>
                    <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <td></td>
                            <td>Number of Submissions</td>
                            <td>Money Deposited</td>
                         </tr> 
                        </thead>
                        <tr>
                            <td>Life</td>
                            <td>{{ $life_member_rejected_count }}</td>
                            <td>{{ $life_member_rejected_total_fee }}</td>
                        </tr>
                        <tr>
                            <td>General</td>
                            <td>{{ $general_member_rejected_count }}</td>
                            <td>{{ $general_member_rejected_total_fee }}</td>
                        </tr>
                        <tfoot>
                            <tr>
                            <td>
                                Total
                            </td>
                            <td>
                                {{ $total_member_rejected_count}}
                            </td>
                            <td>
                                {{ $general_member_rejected_total_fee + $life_member_rejected_total_fee }}
                            </td>
                        </tr>
                        </tfoot>
                    </table>    
                    
                    </div>
                </div>
            </div>
        </div>

        <div class="row">&nbsp;</div>
        
        
    </div>


   
@endsection
