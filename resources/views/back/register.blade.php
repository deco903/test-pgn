@extends('front.navbar')
@section('title','Register Page')
@section('isi')
<div class="container" style="margin-top:30px;width:50%;">
 <div class="row">
<form action="{{url('/registerproses')}}" method="POST">
    @csrf
<div class="row mb-5">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="enter name">
    </div>
  </div>  
  <div class="row mb-5">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="enter email">
    </div>
  </div>
  <div class="row mb-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="enter password">
    </div>
  </div>
  <!-- <div class="row mb-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="enter confirm password">
    </div>
  </div> -->
  <button type="submit" class="btn btn-primary" style="width:100%;">Sign in</button>
</form>
</div>
</div>
@endsection


