@extends('Admin.master')
@section('title')
    Policy Registration
@endsection

@section('section')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

@include('style');
<div class="login-box">
    <h2>Policy Registration From</h2>
    <table class="table table-light">
        <tbody>
            <tr>
                <td scope="row"><img src="{{ $companyid['logo'] }}" class="img-fluid|thumbnail rounded-top|rounded-end|rounded-bottom|rounded-start|rounded-circle|" alt="image" style="height: 30px; width:70px"></td>
                <td>{{ $companyid['name'] }}</td>

            </tr>
        </tbody>
    </table>

    <form action="{{ URL::to('policyregistration') }}" method="POST">
        @csrf
        <input type="hidden"  name="companyid" value="{{ $companyid['id'] }}">
      <div class="user-box">
        <input name="policyname" type="text" required>
        <label>Policy Name</label>
      </div>
      <div class="user-box">
        <select name="policytype"  placeholder="Select Policy" required >
            <option value="" >Select Insurance</option>
            <option value="Health">Health</option>
            <option value="Life">Life</option>
            <option value="Bike">Bike</option>
            <option value="Car">Car</option>
        </select>
      </div>

      <div class="user-box">
        <input name="policydesc" type="text"  required>
        <label>Policy Desc</label>
      </div>

      <div class="user-box">
        <input name="policyprice" type="number"  required min=0>
        <label>Policy Price</label>
      </div>

      <div class="user-box">
        <input name="claimprice" type="number"  required min=0>
        <label>Claim Price</label>
      </div>

      <div class="user-box">
        <input name="timeperiod" type="number" required min="1">
        <label>Month Duration</label>
      </div>
      <a href="#"><label class="checkbox-inline"><input type="checkbox" required="required"> I accept the   Terms &amp; Conditions</label></a>

      <a href="registration" type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input type="submit" value="Signup" class="btn btn-success" style="width:100px; height:50px">
      </a>

    </form>
  </div>
@endsection
