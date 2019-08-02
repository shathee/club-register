@extends('layouts.app')

@section('content')
    <div class="container member-application-form">
        <div class="row">
           <div class="col-md-12">
            <h3 class="text-center alert">For Renewal/Subscription Fee Click here </h3>
                <div>
                    <div class="alert hidden-print" role="alert">
                            
                            <p class="lead">You Must Deposit the Membership Fee Before Submiting this form.</p>
                            <p>
                            Fees for <strong>Life Membership</strong> is <strong>BDT 75000.00(Seventy Five Thousand Only)</strong> 
                            </p>
                            <p>
                            Fees for <strong>General Membership</strong> is <strong>BDT 15000.00(Fifteen Thousand Only)[10000 Membership Appplication fee + 5000 Annual Subscription fee]</strong>  
                            </p>
                            <p class="lead">
                                So please deposit the required amount in favor of the following account - 
                                <ul class="list-unstyled b-acc info">
                                  <li>Account Title: SUST Club Ltd.
                                  </li>
                                  <li>Account Number: 0940320000108</li>
                                  <li>Branch: Malibagh Chowdhurypara </li>
                                  <li>Bank: Mutual Trust Bank Ltd</li>
                                </ul>
                            </p>
                            <p> For Query <a href="mailto:membership@sustclubltd.com">membership@sustclubltd.com</a></p>
                             

                        </div>
                </div>
                <div class="card ">
                    <div class="card-header member-form-header text-center">
                        <h1 class="">Membership Form</h1>
                        <h4 class="">Fields with * are mandatory</h4>
                        
                    </div>
                    <div class="card-body member-form-body">
                        
                        @if(Session::has('flash_message'))
                        <p class="alert alert-info">{{ Session::get('flash_message') }}</p>
                        @endif

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/membership') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('front.membership.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
