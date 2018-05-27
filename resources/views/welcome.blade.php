@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
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
                                If you have submitted all your documents properly but your name is not in the list, please contact to 01xxx-xxxxxx or mail to membership@sustclubltd.com
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
            </div>
        </div>
    </div>
</div>
@endsection

@section('bottom-content')
<div class="row">
        
        <div class="col-md-10 offset-md-1 text-justify">
            
        </div>

        <div class="col-md-10 offset-md-1 text-justify ">
            
        
        </div>
        
    
        
        <div class="offset-md-4 col-md-4">
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

            
            {{-- <p class="text-center">
                <a href="{{ url('membership')}}">
                <button type="button" class="btn btn-secondary btn-block">List of Submissions for Founder Member</button></a>
            </p> --}}
        </div>

      </div>
@endsection
