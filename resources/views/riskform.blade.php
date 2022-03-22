@extends("layouts.master")
@section('title')
    Risk Analysis
@endsection
@section('section')
    {{-- @if ($a == 0)
    alert("Email or Password is wrong");
@endif --}}

    {{-- @php
    echo $data;
@endphp --}}
    {{-- {{ $data }} --}}
    {{-- <div class="alert alert-success">
    <ul>
        <li>{!! \Session::get('success') !!}</li>
    </ul>
</div> --}}


    @include('style');
    <div class="login-box" style="margin-top:200px">
        <h2>Please Enter Correct Information </h2>
        <form action="{{ URL::to('/riskanalysis') }}" method="POST">
            @csrf
            <div class="conatainer" style="height: 30px; opacity:0.7; font-weight:bold;">
                <span class="alert-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="user-box">
                <input name="date" type="text" value="{{ old('name') }}" required>
                <label>name</label>
            </div>
            <div class="conatainer" style="height: 30px; opacity:0.7; font-weight:bold;">
                <span class="alert-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="user-box">
                <input name="email" type="email" value="{{ old('email') }}" required>
                <label>email</label>
            </div>
            <div class="user-box">
                <input name="email" type="email" value="{{ old('email') }}" required>
                <label>email</label>
            </div>
            <div class="user-box">
                <input name="email" type="email" value="{{ old('email') }}" required>
                <label>email</label>
            </div>
            <div class="user-box">
                <input name="email" type="email" value="{{ old('email') }}" required>
                <label>email</label>
            </div>
            <div class="user-box">
                <input name="email" type="email" value="{{ old('email') }}" required>
                <label>email</label>
            </div>
            <div class="user-box">
                <input name="email" type="email" value="{{ old('email') }}" required>
                <label>email</label>
            </div>
            <div class="user-box">
                <input name="email" type="email" value="{{ old('email') }}" required>
                <label>email</label>
            </div>

            <div class="conatainer" style="height: 30px; opacity:0.7; font-weight:bold;">
                <span class="alert-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="user-box">
                <input name="password" type="password" required>
                <label>password</label>

            </div>

            <div class="conatainer" style="height: 30px; opacity:0.4; font-weight:bold;">
                <span class="alert-danger">
                    @error('confirm_password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="user-box">
                <input name="confirm_password" type="password" required>
                <label>confirm_password</label>

            </div>
            <a href="#"><label class="checkbox-inline"><input type="checkbox" required="required"> I accept the Terms &amp;
                    Conditions</label></a>

            <a href="#" type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input type="submit" value="Signup" class="btn btn-success" style="width:120px; height:60px">
            </a>

        </form>
    </div>
@endsection
