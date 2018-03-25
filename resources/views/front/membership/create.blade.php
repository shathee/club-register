@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
           <div class="col-md-offset-1 col-md-10">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="">Membership Form</h1>
                        <h4>Fields with * are mandatory</h4>
                    </div>
                    <div class="card-body">
                        

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
