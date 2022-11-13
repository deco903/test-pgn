@extends('front.navbar')
@section('title','Contact Page')
@section('isi')
<div class="jumbotron">
  <div class="container text-center">
    <h1>My Portfolio</h1>      
    <p>Welcome to Contact Page</p>
   <img src="{{asset('gbr/mm.jpg')}}">
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Some of my Work</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%;" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>
@endsection


