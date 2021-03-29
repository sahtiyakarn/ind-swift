@extends('homeWeb/base')
@section('title')
    {{ $data['title'] }}
@endsection
@section('description')
    {{ $data->description }}
@endsection
@section('keyword')
    {{ $data->keyword }}
@endsection
@section('customcss')
    <link rel="stylesheet" href="{{ $data->canonical }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/about.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/about_responsive.css') }}">

    <style>
        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #ffff;
            background-color: #007BFF;
        }

    </style>
    <!-- *******map css **********-->
    <style type="text/css">
        #map {
            margin-left: 0;
            padding: 0;
            width: 490px;
            height: 496px;
            background: url({{ asset('assets/images/mapping.png') }}) top left no-repeat #fff;
            font-family: arial, helvetica, sans-serif;
            font-size: 8pt;

        }

        #map li {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        #map li a {
            position: absolute;
            display: block;

            background: url(blank.gif);
            text-decoration: none;
            color: #000;
        }

        #map li a span {
            display: none;
        }

        #map li a:hover span {
            position: relative;
            display: block;
            width: 200px;
            left: 20px;
            top: 20px;
            border: 1px solid #000;
            background: #0186d5;
            color: #FFFFFF;
            padding: 5px;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 12px;
            font-weight: bold;
            text-align: center;
        }

        #map a.jammu {
            top: 60px;
            left: 165px;
            width: 30px;
            height: 30px;
        }

        #map a.bihar {
            top: 210px;
            left: 300px;
            width: 30px;
            height: 35px;
        }

        #map a.Jharkhand {
            top: 260px;
            left: 300px;
            width: 30px;
            height: 30px;
        }

        #map a.bengal {
            top: 275px;
            left: 340px;
            width: 35px;
            height: 30px;
        }

        #map a.Orrisa {
            top: 315px;
            left: 305px;
            width: 40px;
            height: 40px;
        }

        #map a.Chattisgarh {
            top: 270px;
            left: 250px;
            width: 30px;
            height: 30px;
        }

        #map a.MP {
            top: 250px;
            left: 200px;
            width: 40px;
            height: 40px;
        }

        #map a.Gujrat {
            top: 260px;
            left: 95px;
            width: 45px;
            height: 50px;
        }

        #map a.Mahrastra {
            top: 320px;
            left: 135px;
            width: 40px;
            height: 40px;
        }

        #map a.Telangana {
            top: 360px;
            left: 200px;
            width: 40px;
            height: 40px;
        }

        #map a.himachal {
            top: 120px;
            left: 185px;
            width: 20px;
            height: 25px;
        }

        #map a.punjab {
            top: 135px;
            left: 160px;
            width: 20px;
            height: 25px;
        }

        #map a.chandigarh {
            top: 140px;
            left: 165px;
            width: 20px;
            height: 25px;
        }

        #map a.Uttarakhand {
            top: 145px;
            left: 210px;
            width: 30px;
            height: 30px;
        }

        #map a.UttarPradesh {
            top: 210px;
            left: 230px;
            width: 30px;
            height: 30px;
        }

        #map a.Haryana {
            top: 175px;
            left: 165px;
            width: 25px;
            height: 20px;
        }

        #map a.Delhi {
            top: 190px;
            left: 180px;
            width: 25px;
            height: 20px;
        }

        #map a.Rajasthan {
            top: 195px;
            left: 140px;
            width: 35px;
            height: 30px;
        }

    </style>

@endsection

@section('body-content')

    <!-- start Body -->

    <div style="padding-top: 130px;"></div>

    <div class="container-fluid"
        style="background-image: url({{ asset('assets/images/csr.png') }}); padding-top:115px;padding-bottom:85px;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <h2 class="text-white" style="">Network</h2>
            </div>
        </div>
    </div>


    <!-- About -->

    <div class="about">
        <div class="container-fluid">
            <div class="row" style="margin-top: -60px;">

                <!-- About Content -->
                <div class="col-lg-1"></div>
                <div class="col-lg-8">


                    <!--**********************nav pills***********************-->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-presence-tab" data-toggle="tab" href="#nav-presence"
                                role="tab" aria-controls="nav-presence" aria-selected="true"
                                style="font-size: 13px;">National</a>
                            <a class="nav-link" id="nav-strengths-tab" data-toggle="tab" href="#nav-strengths" role="tab"
                                aria-controls="nav-strengths" aria-selected="false"
                                style="font-size: 13px;">International</a>
                        </div>
                    </nav>
                    <div class="tab-content" style="border-top:2px solid red;" id="nav-tabContent">
                        <div class="tab-pane fade in show active" id="nav-presence" role="tabpanel"
                            aria-labelledby="nav-presence-tab">
                            <div class="section_title mt-5">
                                <h2>National</h2>
                            </div>
                            <!-- map -->
                            <br>
                            <br>
                            <ul id="map">
                                <li><a class="jammu" href="#" title="jammu"><span><b><u>Jammu & Kashmir</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />
                                            Mr. Vijay Dhiman<br>Cont: +91 9317812731</span></a></li>
                                <li><a class="bihar" href="#" title="bihar"><span><b><u>Bihar</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />Mr. Nishant
                                            Aggarwal<br>Cont: +91
                                            9835087619</span></a></li>
                                <li><a class="Jharkhand" href="#" title="Jharkhand"><span><b><u>Jharkhand</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />Mr. Anil
                                            Khosla
                                            <br>Cont: +91
                                            9431115537</span></a></li>
                                <li><a class="Orrisa" href="#" title="Orrisa"><span><b><u>Orrisa</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />Mr. Bimal/Mr.
                                            Samruti<br>Cont: +91
                                            9337228023 / +91 9776082021</span></a></li>
                                <li><a class="Chattisgarh" href="#" title="Chattisgarh"><span><b><u>Chattisgarh</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />Mr. Bunty
                                            Jumnani<br>Cont: +91
                                            9300638000</span></a></li>
                                <li><a class="MP" href="#" title="MP"><span><b><u>Madhya Pradesh</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />Mr. Gulati
                                            <br>Cont: +91 9827028428
                                        </span></a></li>
                                <li><a class="Gujrat" href="#" title="Gujrat"><span><b><u>Gujrat</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />Mr. Chirag
                                            <br>Cont: +91 9824096764
                                        </span></a></li>
                                <li><a class="Mahrastra" href="#" title="Mahrastra"><span><b><u>Mahrastra</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />Mr.
                                            Bahekar<br>Cont: +91
                                            9823624505</span></a></li>
                                <li><a class="Telangana" href="#"
                                        title="Andhra/Telangana"><span><b><u>Andhra/Telangana</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />Mr. Srinivasa
                                            <br>Cont: +91
                                            9391387586</span></a></li>
                                <li><a class="himachal" href="#" title="himachal"><span><b><u>Himachal Pradesh</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />Mr. Vijay
                                            Dhiman<br>Cont: +91
                                            9317812731</span></a></li>
                                <li><a class="punjab" href="#" title="punjab"><span><b><u>Punjab</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br /> Mr. Vijay
                                            Dhiman<br>Cont: +91
                                            9317812731</span></a></li>
                                <li><a class="chandigarh" href="#" title="chandigarh"><span><b><u>Chandigarh</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />Mr. Vijay
                                            Dhiman<br>Cont: +91
                                            9317812731</span></a></li>
                                <li><a class="Uttarakhand" href="#" title="Uttarakhand"><span><b><u>Uttarakhand</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />Mr. Vijay
                                            Dhiman<br />Cont: +91
                                            9317812731</span></a></li>
                                <li><a class="Haryana" href="#" title="Haryana"><span><b><u>Haryana</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />Mr. Jaideep
                                            Sethi<br />Cont: +91
                                            9416555400</span></a></li>
                                <li><a class="Delhi" href="#" title="Delhi"><span><b><u>Delhi</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />
                                            Mr. Ramesh Mehta
                                            <br>Cont: +91 9810508265</span></a></li>
                                <li><a class="Rajasthan" href="#" title="Rajasthan"><span><b><u>Rajasthan</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />Mr. Sushil
                                            Ahuja<br>Cont: +91
                                            9414515800 </span></a></li>
                                <li><a class="UttarPradesh" href="#" title="Uttar Pradesh"><span><b><u>Uttar
                                                    Pradesh</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />
                                            Mr. Rananjay Singh
                                            <br>Cont: +91 9936427603</span></a></li>
                                <li><a class="bengal" href="#" title="bengal"><span><b><u>West Bengal</u></b><br>
                                            <img src="{{ asset('assets/images/logobottom.png') }}" /><br />Mr.
                                            Majumdar<br>Cont: +91
                                            9830815146</span></a></li>
                            </ul>


                            <!-- map ends here -->


                        </div>

                        <div class="tab-pane fade" id="nav-strengths" role="tabpanel" aria-labelledby="nav-strengths-tab">
                            <div class="section_title mt-5">
                                <h2>International</h2>
                            </div>
                            <br>
                            <img src="{{ asset('assets/images/International.png') }}" class="img-fluid">

                        </div>


                    </div>

                    <!--**********************nav pills ends here***********************-->

                </div>

                <!-- Boxes -->
                <div class="col-lg-2 boxes_col">
                    <!-- Box -->
                    <div class="box working_hours" style="height: 200px;">
                        <div class="box_title" style=" margin-left: -30px; margin-right: -45px; margin-top:-10px;">
                            <img src="{{ asset('assets/images/alarm-clock.svg') }}" alt=""
                                style="width:29px; height:29px;">
                            Our Profile
                        </div>
                        <div class="box_text" style=" margin-left: -30px; margin-right: -45px;">IND-SWIFT Chandigarh
                            based
                            drug company, established in 1986...</div>
                    </div>

                    <!-- Box -->
                    <div class="box box_appointments" style="height: 250px;">
                        <div class="box_title" style=" margin-left: -30px; margin-right: -45px; margin-top:-10px;">
                            <img src="{{ asset('assets/images/phone-call.svg') }}" alt=""
                                style="width: 29px; height:29px;">
                            Leadership
                        </div>
                        <div class="box_text" style=" margin-left: -30px; margin-right: -25px;">The facilities are
                            built
                            according to the current guidelines of MHRA, EU, WHO
                            and accreditations with ISO 14000 series...</div>
                    </div>

                    <!-- Box -->
                    <div class="box box_emergency" style="height: 220px;">
                        <div class="box_title" style=" margin-left: -30px; margin-right: -45px; margin-top:-10px;">
                            <img src="{{ asset('assets/images/bell.svg') }}" alt="" style="width: 37px; height:37px;">
                            <span style="">Mission</span>
                        </div>
                        <div class="box_emergency_text" style=" margin-left: -30px; margin-right: -20px;">IND-SWIFT
                            has
                            spread its network across 45 countries. It is an ISO
                            9001-2008, WHO GMP certified company...</div>
                    </div>

                </div>

                <div class="col-lg-1"></div>

            </div>
        </div>
    </div>

@endsection
