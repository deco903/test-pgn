@extends('front.navbar')
@section('title','Login Page')
@section('isi')
@include('back.success')
<div class="container" style="margin-top:30px;width:50%;">
 <div class="row">
<form action="/loginproses" method="post">
    @csrf
<div class="row mb-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputPassword3" placeholder="enter email">
    </div>
  </div>
  
  <div class="row mb-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="enter password">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary" style="width:100%;">Sign in</button>
</form>
<center><a href="{{url('register')}}">Please Register<a></center>
</div>
</div>
@endsection


