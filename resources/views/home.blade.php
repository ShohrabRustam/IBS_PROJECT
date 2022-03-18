@extends('layouts.master')
@section('title')
    Home
@endsection
@section('section')
    <header class="hero-section">
        <table class="table">

            <tbody>
                <tr>
                    <td scope="row">
                        <div class="hero-text-container">
                            <h1>Humanizing<br />Your Insurance.</h1>
                            <p>Get your life insurance coverage easier and faster. We blend our
                                expertize<br />
                                and technology to help you find the plan that's right for you.Ensure
                                you<br />
                                and your loved ones are protected.</p>
                        </div>
                    </td>
                    <td>
                        <div class="hero-img-container" style="opacity: 0.8">
                            <img
                                src="https://media.istockphoto.com/photos/paper-cut-of-insurance-concept-on-green-grass-background-car-life-picture-id1178261521?k=20&m=1178261521&s=612x612&w=0&h=rSWONUxXu-ggAP_rlx_AEjH8OdwRGLw1NR2yzr9Ewz8=">
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>


    </header>


    <div class="row row-cols-1 row-cols-md-4 g-4 align-self-center">
        <div class="col" style="width: auto; margin:3rem; ">
            <div class="card" style="width: 20rem; background-color:rgb(225, 224, 233); border-radius:20px">
                <a href="LifeInsurance">
                    <img src="https://img.etimg.com/thumb/msid-81508498,width-640,resizemode-4,imgsize-106253/why-the-increase.jpg"
                        class="card-img-top" alt="..."
                        style="    max-width:20rem;    max-height:10rem; min-width:20rem; min-height:10rem; border-radius:20px; background-color:rgb(9, 15, 1);">
                    <div class="card-body">
                        <h5 class="card-title">Life Insurance</h5>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    </div>
                </a>
            </div>
        </div>

        <div class="col" style="width: auto; margin:3rem;">
            <div class="card" style="width: 20rem; background-color:rgb(225, 224, 233); border-radius:20px">
                <a href="HealthInsurance">
                    <img src="https://www.icicilombard.com/docs/default-source/assets/freshlook/images/ui-health-insurance-policy.png"
                        class="card-img-top" alt="..."
                        style="    max-width:20rem;    max-height:10rem; min-width:20rem; min-height:10rem; border-radius:20px; background-color:rgb(9, 15, 1); ">
                    <div class="card-body">
                        <h5 class="card-title">Health Insurance</h5>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}

                </a>
            </div>
        </div>
    </div>

    <div class="col" style="width: auto; margin:3rem; ">
        <div class="card" style="width: 20rem; background-color:rgb(225, 224, 233); border-radius:20px">
            <a href="CarInsurance">
                <img src="https://images.ctfassets.net/uwf0n1j71a7j/3hsbWvbJauXM1g4VTLDn6A/c0bdbe4ea5cf6b57e0547db4e268d95b/motor-insurance-policy-online.png"
                    class="card-img-top" alt="..."
                    style="    max-width:20rem;    max-height:10rem; min-width:20rem; min-height:10rem; border-radius:20px; background-color:rgb(9, 15, 1); ">
                <div class="card-body">
                    <h5 class="card-title">Car Insurance</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}

            </a>
        </div>
    </div>
    </div>
    <div class="col" style="width: auto; margin:3rem; ">
        <div class="card" style="width: 20rem;background-color:rgb(225, 224, 233); border-radius:20px ">
            <a href="BikeInsurance">
                <img src="https://www.bharti-axagi.co.in/drupal_backend/sites/default/files/2019-07/vector-smart-object%402x.png"
                    class="card-img-top" alt="..."
                    style="max-width:20rem; max-height:10rem; min-width:20rem; min-height:10rem;  border-radius:20px; background-color:rgb(9, 15, 1);">
                <div class="card-body">
                    <h5 class="card-title">Bike Insurance</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}

            </a>
        </div>
    </div>
    </div>

    </div>

    <div class="container clearfix">
        <br><br>
        <table class="table">

            <tbody>
                <tr>
                    <td>
                        <div class="mvv_item">
                            <h3 class="mvv_head">Our Mission</h3>
                            <div class="mvv_img">
                                <img src="https://static.pbcdn.in/cdn/images/career/mission.png" alt=""
                                    style="max-height: 200px; max-width:150px; min-width:120px min-height:150px">
                            </div>
                            <p>Building a safety net for households in India.</p>
                        </div>
                    </td>
                    <td>
                        <div class="mvv_item">
                            <h3 class="mvv_head">Our Values</h3>
                            <div class="mvv_img">
                                <img src="https://static.pbcdn.in/cdn/images/career/values.png" alt=""
                                    style="max-height: 200px; max-width:150px; min-width:120px min-height:150px">
                            </div>
                            <p>Fairness to all our stakeholders</p>
                        </div>
                    </td>
                    <td>
                        <div class="mvv_item">
                            <h3 class="mvv_head">Our Vision</h3>
                            <div class="mvv_img">
                                <img src="https://static.pbcdn.in/cdn/images/career/vision.png" alt=""
                                    style="max-height: 200px; max-width:150px; min-width:120px min-height:150px">
                            </div>
                            <p>A healthy and well-protected India</p>
                        </div>
                    </td>
                </tr>
            </tbody>

        </table>


    </div>
@endsection
