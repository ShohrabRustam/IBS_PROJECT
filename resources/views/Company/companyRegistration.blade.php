@extends('Admin.master')
@section('title')
Company Registration
@endsection

@section('section')


<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

@include('style');
<div class="login-box">
    <h2>Company Registration</h2>
    <form action="{{ URL::to('/companyregistration') }}" method="POST">
        @csrf
      <div class="user-box">
        <input name="register_number" type="number" required min=0>
        <label>Register Number</label>

    </div>

    <div class="user-box">
        <input name="name" type="text"  value="{{ old('name') }}" required >
        <label>Company Name</label>

    </div>
    <div class="user-box">
        <input name="logo" type="text" >
        <label>Link for logo</label>

    </div>
    <div class="user-box">
        <input name="about"  type="text" required >
        <label>About Company</label>

    </div>
     <a href="#"><label class="checkbox-inline"><input type="checkbox" required="required"> I accept the   Terms &amp; Conditions</label></a>

      <a href="#" type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input type="submit" value="Signup" class="btn btn-success" style="width:100px; height:50px">
      </a>

    </form>
  </div>
@endsection
