@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            
            <div class="alert hidden-print" role="alert">
                            
                <p class="lead">You Must Deposit the Membership Fee Before Submiting this form.</p>
                <p>
                Annual/Renewal Fees for <strong> Membership</strong> is <strong>BDT 5000.00( Five Thousand Only)</strong> 
                </p>
                <p>
                Annual/Renewal Fees for <strong> Member who will be outside Bangladesh for 360 Days or More</strong> is <strong>BDT 1250.00( One Thousand Two Hundred Fifty Only)</strong> 
                </p>
                <p>
                Fees for <strong>Upgradation to Life Membership</strong> is <strong>BDT 65000.00(Sixty Five Thousand Only)</strong>  
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
            <div class="col-md-8 col-md-offset-2" style="padding-bottom: 100px;">
                @if(isset($msg))
                    <h3 class="alert alert-danger text-center">
                        {{ $msg }}
                    </h3>
                @endif
                @if (session('flash_message'))
                    <div class="alert alert-success">
                        Dear,
                        <p><strong>{{ session('name') }}</strong>
                        {{ session('flash_message') }}
                        </p>
                        <p>{{ date("F j, Y, g:i a") }}</p>
                        
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h2 style="margin-bottom: 5px;" class="text-center">Please Give your Membership ID</h2>
                    </div>
                    <div class="card-body text-center">
                        <form method="GET" action="{{ url('/membership-renewal/create') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            

                            <div class="form-group col-md-8 col-md-offset-2" style="padding:15px">
                                <input type="text" style="padding:15px 45px;" class="col-md-12" name="search" id="search" placeholder="Search..." value="{{ request('search') }}">

                              

                            </div>
                            <div class="clearfix">&nbsp;<br></div>
                            <div class="form-group col-md-4 col-md-offset-4"  style="padding:15px>
                                <span class="input-group-append">
                                    <button class="btn btn-info col-md-12" type="submit">
                                        Find
                                    </button>
                                </span>
                            </div>
                        </form>
                        
                        &nbsp;
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
