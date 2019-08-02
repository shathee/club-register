@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
          
                <div class="alert hidden-print" role="alert">
                            
                <p class="lead">You Must Deposit the Subscription/Renewal Fee Before Submiting this form.</p>
                <p>
                Annual Subscription/Renewal Fees for <strong> Membership</strong> is <strong>BDT 5000.00( Five Thousand Only)</strong> 
                </p>
                <p>
                Annual Subscription/Renewal Fees for <strong> Member who will be outside Bangladesh for 360 Days or More</strong> is <strong>BDT 1250.00( One Thousand Two Hundred Fifty Only)</strong> 
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


                <div class="card">
                    <div class="card-header"><h3>Renew Membership</h3></div>
                    <div class="card-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="col-md-6">
                            <form method="POST" action="{{ url('/membership-renewal') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('front.membership-renewal.form')

                            </form>    
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="span4">
                                  <img class="img-left" src="{{ url('uploads/'.$member->member_photo)}}"/>
                                  <div class="content-heading"><h3>{{ $member->fullname}} </h3>
                                  </div>
                                  <p><strong>Membership No: {{ sprintf('%03d', $member->membership_no) }}</strong></p>
                                  
                                  <p id="msg-text">
                                      {{ $batch[$member->sust_session] }} Bacth
                                  </p>
                                  <p>Department of {{ $departments[$member->sust_department] }}</p>
                                </div>
                             </div>
                        </div>
                        

                    </div>
                </div>
            
        </div>


        

    </div>
@endsection
