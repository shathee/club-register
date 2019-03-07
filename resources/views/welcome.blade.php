@extends('layouts.home')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-8">
            <!-- carouse start -->
            <div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
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
            </div>
            <!-- carouse ends -->
            
        </div>
        <div class="col-md-4">
            
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
           
           
            
            {{-- <a href="#">View All</a> </div> --}}
        </div>
    </div>
</div>
@endsection



@section('bottom-content')
<div class="container">
    <div class="row">&nbsp;</div>
    <div class="row">
        
        <div class="col-md-8 text-justify">
           {{-- <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                   <div class="alert alert-info">
                            <h3 class="text-center">Draft List of Founder members</h3>
                            <p>
                                
                                Dear All
                            </p>
                            <p>
                                Draft list of founder members has been published. Only the submissions those payments have been confirmed are published here. There are some submissions whose payments were not confirmed due to non availabilty of document or unclear document. 
                            </p>
                            <p>
                                If you have submitted all your documents properly but your name is not in the list, please mail to  <a href="mailto:membership@sustclubltd.com">membership@sustclubltd.com</a>
                            </p>
                           
                        </div> 
                        
                        <div class="text-left alert alert-danger">
                            <p>
                                This is for information of all primary members, if it is found later that any of the primary members --- 
                            </p>
                            <p>
                                <ol>
                                    <dt>a) Have been withdrawn from SUST due to serious offences</dt>
                                    <dt>or</dt>
                                    <dt> b) Have been convicted by any court for criminal offences. </dt>
                                </ol>
                            </p>
                            <p>
                                Then according to article 11(c) & (d) of Articles of Association, His/Her Membership will be discontinued.
                            </p>
                            <p>
                                Also we request everyone  that if anyone has any knowledge regarding any members who might be ineligible according to the article 11(c) & (d) of Articles of Association, Please let us know(membership@sustclubltd.com).
                            </p>
                        </div>
                       
                </div>
            </div> --}}
        </div>

        
        <div class="col-md-4">
           {{-- 
            <p class="text-center">
                <a href="{{ action('MemberListController@index') }}">
                <button type="button" class="btn btn-block btn-primary">View Draft Members List</button></a>
            </p>
           

            <p class="text-center">
                <a href="docs/SUST-Club-Limited-Memorandum-of-Association.pdf" download="Memorandum-of-Association.pdf">
                <button type="button" class="btn btn-block btn-info">Memorandum of Association</button>
                </a>
            </p>
            <p class="text-center">
                
                <a href="docs/SUST-Club-Limited-Articles-of-Association.pdf" download="Articles-of-Association.pdf">
                <button type="button" class="btn btn-block btn-info">Articles of Association</button></a>
                
            </p>
            <p class="text-center">
                <a href="docs/SUST-Club-Limited-The-Club-By-Laws.pdf" download="By-Laws.pdf">
                <button type="button" class="btn btn-block btn-info">By Laws</button></a>
            </p>
 --}}
            
            {{-- <p class="text-center">
                <a href="{{ url('membership')}}">
                <button type="button" class="btn btn-secondary btn-block">List of Submissions for Founder Member</button></a>
            </p> --}}
        </div>

      </div>

</div>

@endsection
