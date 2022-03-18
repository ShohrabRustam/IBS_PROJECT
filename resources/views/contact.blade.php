@extends('layouts.master')

@section('title')
    Contact
@endsection

<style>

</style>

@section('section')
    <div class="container card center" style="text-align: center; element.style text-align: center;
        margin-top: 30px;
        padding-top: 15px;
        padding-bottom: 15px;
        background: rgba(0,0,0,0.10);  /* 50% transparent */
">


        <!--Google map-->
        <div id="map-container-google-1" class="z-depth-1-half map-container">
            <iframe src="https://maps.google.com/maps?q=Bangalure&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                style="border:0" allowfullscreen></iframe>
        </div>

        <!--Google Maps-->
        <h1 class="center ">CONTACT US</h1>
        <h1>Name:</h1>
        <p>Shohrab Rustam<br>Subham Kamle<br>Pranitha</p>

        <h1>Mail Us:</h1>
        <p>mohdrustam001@mBrockage.com <br>SubhamKamle@mBrockage.com<br>Pranitha@mBrockage.com</p>
        <h1 class="center">Give Us a Call:</h1>
        <p class="center">+91-9028305960<br>+91-7417200362 <br>+91 97044181978</p>
    </div>
@endsection
