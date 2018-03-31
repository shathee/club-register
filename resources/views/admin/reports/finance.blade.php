@extends('layouts.admin')

@section('content')
 
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Statistics</div>
                    <div class="card-body">
                    {{ $general_member_total_fee }}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection
