@extends('SuperAdmin.master')

@section('title')
Admin Registration
@endsection

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

@include('style');
@section('section')
<div class="login-box">
    <h2>Admin Registration</h2>
    <form action="adminregistration" method="POST">
        @csrf
      <div class="user-box">
        <input name="name" type="text" value="{{ old('name') }}" required >
        <label>Name</label>

    </div>
      <div class="user-box">
        <input name="email" type="email" value="{{ old('email') }}" required>
        <label>Email</label>
      </div>
      <div class="user-box">
        <input name="mobile" type="number" value="{{ old('mobile') }}" required min="6000000000" max="9999999999">
        <label>Mobile Number</label>
      </div>
      <div class="user-box">
        <input name="password" type="password"  required >
        <label>password</label>
      </div>

      <div class="user-box">
        <input name="confirm_password" type="password"  required="required">
        <label>confirm_password</label>
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
