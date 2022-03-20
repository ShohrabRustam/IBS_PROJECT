<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        /* overflow: hidden; */
        background-color: #333333;
        text-align: center;
    }

    li {
        float: left;
        text-align: center;
    }

    li a {
        display: block;
        color: rgb(255, 255, 255);
        text-align: center;
        padding: 16px;
        text-decoration: none;
        text-align: center;
    }

    li a:hover {
        text-transform: uppercase;
        text-align: center;
        font-size: 13px;
        text-decoration: none;
        background: rgb(26, 22, 22);
        color: white;
        font-family: "open-sans";
        transition: 0.3s ease;
        margin: 0 15px;
        border-radius: 75%;
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
            0 0 25px #03e9f4,
            0 0 50px #03e9f4,
            0 0 100px #03e9f4;
    }


    ul li:hover {
        text-transform: uppercase;
        text-align: center;
        font-size: 13px;
        text-decoration: none;
        background: rgb(238, 148, 148);
        font-family: "open-sans";
        transition: 0.3s ease;
        margin: 0 20px;
        border-radius: 75%;
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
            0 0 25px #03e9f4,
            0 0 50px #03e9f4,
            0 0 100px #03e9f4;
    }

</style>


<script>
    /*// Prevent dropdown menu from closing when click inside the form
	// $(document).on("click", ".navbar-right .dropdown-menu", function(e){
		// e.stopPropagation();
	// });*/
</script>
</head>

<body>

        <div class="container center">
            <ul>
                <li>
                    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"
                            class="mr-2" viewBox="0 0 24 24">
                            <path
                                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                            <circle cx="12" cy="13" r="4" />
                        </svg>
                        <span style="color: #dd0b39">m </span><strong class="text-primary">Brockerage</strong>
                    </a>
                </li>
                {{-- @if (Session::has('user'))
                    <li><a href="#"><strong class="text-info">Welcome </strong> <strong
                                class="text-primary">{{ Session::get('user')['name'] }}</strong> </a></li>
                @endif --}}
                <li> <a href="{{ url('/') }}">Home </a></li>
                <li> <a href="{{ URL::to('/about') }}">About</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" style="color: blue;">
                        Insurance Type
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="/LifeInsurance"> Life Insurance </a></li>
                        <li> <a class="dropdown-item" href="/HealthInsurance">Health Insurance</a></li>
                        <li> <a class="dropdown-item" href="/CarInsurance"> Car Insurance </a> </li>
                        <li> <a class="dropdown-item" href="/BikeInsurance"> Bike Insurance </a></li>
                        <li> <a class="dropdown-item" href="#">More Insurance Blog</a> </li>
                    </ul>
                </li>
                <li><a href="contact">Contact</a></li>
                @if (Session::has('user'))
                    <li><a href="#">Your Policies</a></li>
                @endif

                @if (!Session::has('user'))
                    <li class="dropdown">
                        <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true" style="color: Blue">
                            Login/SignUp </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                            <li><a class="dropdown-item" href="{{ URL::to('/login') }}">Login</a></li>

                            {{-- <div class="dropdown-divider"></div> --}}
                            <li> <a class="dropdown-item" href="{{ URL::to('signUp') }}">Signup </a></li>

                            {{-- <div class="dropdown-divider"></div> --}}
                        </ul>
                    </li>
                @else
                    <li class="dropdown">
                        <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true" style="color: Blue">
                            {{ Session::get('user')['name'] }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                <li><a class="dropdown-item" href="logout">Log Out</a></li>
                            <div class="dropdown-divider"></div>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</body>

</html>
