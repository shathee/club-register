@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="card">
                <div class="card-title"">Dashboard</div>

                <div class="card-body">
                    
                    @if (Auth::user()->status!='Active')
                    <div class="alert alert-warning" role="alert">
                      Youre Account has not been activated yet . Please contact the Webmaster
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
