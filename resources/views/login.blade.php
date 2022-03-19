@extends("layouts.master")
@section('title')
    Login
@endsection
@section('section')
    {{-- @if ($a == 0)
    alert("Email or Password is wrong");
@endif --}}

    {{-- @php
    echo $data;
@endphp --}}
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    @include('style');
    <div class="login-box">
        @if ($message = Session::get('email'))
            <div class="alter alter-danger alter-block">
                <button type="button" class="close" data-dismiss="alter">x</button>
                <strong style="color: red">{{ $message }}</strong>
            </div>
        @endif
        @if ($message = Session::get('password'))
            <div class="alter alter-danger alter-block">
                <button type="button" class="close" data-dismiss="alter">x</button>
                <strong style="color: red">{{ $message }}</strong>
            </div>
        @endif
        <form action="{{ URL::to('/login') }}" method="POST">
            @csrf
            <div class="conatainer" style="height: 30px; opacity:0.7; font-weight:bold;">
                <span class="alert-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="user-box">
                <input name="email" type="email" value="{{ old('email') }}" required>
                <label>user email</label>

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
                <label>Password</label>
            </div>
            <span class="forgot-password">
                <a href="#" title="Forgot Password" id="link-reset" style=" height: 35px;    margin-top: 10px;    ">Forgot
                    Password?</a>
            </span>

            <a href="#" type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input type="submit" value="Login" class="btn btn-success" style="width:100px; height:50px">
            </a>
            <div class="signup-link">Not a member? <a href="{{ URL::to('signUp') }}">Signup now</a></div>

        </form>
    </div>
@endsection
