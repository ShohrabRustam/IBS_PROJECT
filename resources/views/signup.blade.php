@extends("layouts.master")
@section('title')
Registration
@endsection
@section('section')

{{-- @if($a==0)
    alert("Email or Password is wrong");
@endif --}}

{{--
@php
    echo $data;
@endphp --}}
{{-- {{ $data }} --}}

@include('style');
<div class="login-box">
    <h2>Registration</h2>
    <form action="/signUp" method="POST">
        @csrf
      <div class="user-box">
        <input name="name" type="text"  value="{{ old('name') }}" required >
        <label>name</label>

    </div>
      <div class="user-box">
        <input name="email" type="email"  value="{{ old('email') }}" required>
        <label>email</label>
      </div>

      <div class="user-box">
        <input name="password" type="password"   required >
        <label>password</label>
      </div>

      <div class="user-box">
        <input name="confirm_password" type="password"  required>
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
