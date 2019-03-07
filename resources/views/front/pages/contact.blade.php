@extends('layouts.home')

@section('content')

<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3><strong>Contact Us</strong></h3>
    </div>
	
	<div class="row">
	  <div class="col-md-7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.3195479794067!2d90.4032865042479!3d23.771632738020084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7cfa5c183f3%3A0x5021bee639bf4348!2sSUST+Club+Ltd.!5e0!3m2!1sen!2sbd!4v1550682512182" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
          <h4><strong>Get in Touch</strong></h4>
        <form method="POST" action="{{ url('/contact') }}" accept-charset="UTF-8" class="form-horizontal">
        	{{ csrf_field() }}
          <div class="form-group">
            <input type="text" class="form-control" name="" value="" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="" value="" placeholder="Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="" rows="3" placeholder="Message"></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('bottom-content')
<div class="container">
    <div class="row">
        
        <div class="col-md-8 offset-md-1 text-justify">
            
        </div>

        <div class="col-md-8 offset-md-1 text-justify ">
            
        
        </div>
        
      </div>

</div>

@endsection
