@extends("layouts.master")
@section('title')
Login
@endsection
@section('section')
{{-- @if($a==0)
    alert("Email or Password is wrong");
@endif --}}

{{--
@php
    echo $data;
@endphp --}}
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

@include('style');
<div class="login-box">
    <h2>Login</h2>
    <form action="login" method="POST">
        @csrf
      <div class="user-box">
        <input name="email" type="email"  value="{{ old('email') }}" required>
        <label>user email</label>

    </div>
      <div class="user-box">
        <input name="password" type="password" required >
        <label>Password</label>
      </div>

      <a href="#" type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input type="submit" value="login" class="btn btn-success" style="width:100px; height:50px">
      </a>
      <div class="signup-link">Not a member? <a href="registration">Signup now</a></div>

    </form>
  </div>

@endsection
