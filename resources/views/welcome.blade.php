@extends('layouts.home')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-8">
            <!-- carouse start -->
            {{-- <div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('/img/front-page-image/26230285_10156134324502386_10121929578561999_n.jpg')}}" class="carousel-item-img"  alt="...">
                    </div>
                @foreach($img_files as $key => $value)
                    <div class="carousel-item">
                      <img src="{{ url($value) }}" class="carousel-item-img"  alt="...">
                    </div>
                @endforeach
                
                
              </div>
              <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div> --}}
            <!-- carouse ends -->
            
        </div>
        {{-- <div class="col-md-4">
           
            <div class="latest-news">
            <h3>Club News</h3>
            
            <ul>
              @foreach($notices as $n)
              <li class="recent-post">
                <div class="post-img">
                 <img src="{{ asset($n['img'])}}">
                 </div>
                 <a href="#"><h5>{{ $n['Title'] }}</h5></a>
                 <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> {{ $n['Date'] }}</small></p>
              </li>
              <hr>
                          
            @endforeach


                     
            </ul>
           
           
            
          
        </div>
    </div> 
</div>
--}}
@endsection



@section('bottom-content')
<div class="container">
    <div class="row">&nbsp;</div>
    <div class="row">
       
        <div class="col-md-4 offset-md-2">
           
            <a href="{{ url('/apply')}}">
            <button type="button" class="btn btn-block btn-info btn-sq">New Membership Application</button>
          </a>

           
        </div>
        <div class="col-md-4">
            
            <a href="{{ url('membership-renewal')}}">
            <button type="button" class="btn btn-block btn-dark btn-sq">Membership Renewal</button></a>

           
        </div>

      </div>

</div>

@endsection
