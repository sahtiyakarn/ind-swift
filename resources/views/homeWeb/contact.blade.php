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
        .map-responsive {
            overflow: hidden;
            padding-bottom: 50%;
            position: relative;
            height: 0;
        }

        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 90%;
            position: absolute;
        }

    </style>

@endsection

@section('body-content')

    <!-- start Body -->

    <div style="padding-top: 130px;"></div>

    <div class="container-fluid"
        style="background-image: url({{ asset('assets/images/contact.png') }}); padding-top:115px;padding-bottom:85px;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <h2 class="text-white" style="">Contact us</h2>
            </div>
        </div>
    </div>

    <!-- About -->

    <div class="about">
        <div class="container-fluid">
            <div class="row">

                <!-- About Content -->
                <div class="col-lg-1"></div>

                <!-- *******contact details ***********-->
                <div class="col-lg-3">
                    <h2>Address&nbsp;:</h2>
                    <div class="section_title mt-5">
                        <h3>Corporate Office&nbsp;:</h3>
                    </div>
                    <ul>
                        <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Adress&nbsp;:-&nbsp;781, Industrial Area - Phase II,
                            Chandigarh-160 002 (India) </li>
                        <p></p>
                        <li><i class="fa fa-phone"></i>&nbsp;&nbsp;Phone no&nbsp;:-&nbsp;0172-4680800</li>
                        <p></p>
                        <li><i class="fa fa-fax"></i>&nbsp;&nbsp;Fax&nbsp;:-&nbsp;0172-2652242</li>
                        <p></p>
                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;Email&nbsp;:-&nbsp;info@indswift.com</li>
                        <p></p>
                    </ul>


                    <div class="section_title mt-5">
                        <h3>Marketing Office&nbsp;:</h3>
                    </div>
                    <ul>
                        <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Adress&nbsp;:-&nbsp;102-103,107-109, Basement L1,
                            The Summit - Business Bay
                            Off Western Express Highway
                            Vileparle (E), MUMBAI - 400 057. </li>
                        <p></p>
                        <li><i class="fa fa-phone"></i>&nbsp;&nbsp;Phone no&nbsp;:-&nbsp;(022) 42288300 / 42288310</li>
                        <p></p>
                        <li><i class="fa fa-fax"></i>&nbsp;&nbsp;Fax&nbsp;:-&nbsp;(022) 26184120</li>
                        <p></p>
                    </ul>

                    <div class="section_title mt-5">
                        <h3>R&D Office&nbsp;:</h3>
                    </div>
                    <ul>
                        <li>&raquo;&nbsp;&nbsp;M/s. Ind-Swift Ltd</li>
                        <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Adress&nbsp;:-&nbsp;Plot No. R-489, TTC Industrial
                            Area,<br>
                            MIDC, Rabale,<br>
                            Navi Mumbai – 400 701.<br>Dist. Thane, Maharashtra.</li>
                        <p></p>
                        <p></p>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <div class="map-responsive" style="margin-top: 140px;">
                        <p>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.816395098709!2d76.78050531520476!3d30.69544159447976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fec91aaaaaab5%3A0xa7f9f2ccf3b297ef!2sInd-Swift%20Ltd!5e0!3m2!1sen!2sin!4v1609243608742!5m2!1sen!2sin"
                                width="600" height="450" frameborder="0" style="border:1px solid red;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </p>
                    </div>

                    <div class="map-responsive" style="margin-top: 70px;">
                        <p><iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.1292068018056!2d72.851911215031!3d19.10198685611857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9b6b627c8f7%3A0x9f20de8834339a56!2sInd%20Swift%20Ltd%20(Mumbai)!5e0!3m2!1sen!2sin!4v1609243906384!5m2!1sen!2sin"
                                width="600" height="450" frameborder="0" style="border:1px solid red;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe></p>
                    </div>



                </div>

                <div class="col-lg-4">
                    <div class="section_title mt-5">
                        <h3>Email Us : marketing@indswift.com&nbsp;:</h3>
                    </div>
                    <ul>
                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;Mail to : <a href="#">For Online Product Order</a>
                        </li>
                        <p></p>
                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;Mail to : <a href="#"> For Contract
                                Manufacturing/Third Party Manufacturing</a></li>
                        <p></p>
                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;Mail to : <a href="#">For Corporate Communication
                                Department</a></li>
                        <p></p>
                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;Mail to : <a href="#"> For Investors
                                RelationsManufacturing</a></li>
                        <p></p>
                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;Mail to : <a href="#"> For Human Resource
                                Department</a></li>
                        <p></p>
                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;Mail to : <a href="#"> For Logistics Department
                                Manufacturing</a></li>
                        <p></p>
                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;Mail to : <a href="#"> For International Marketing
                                Department</a></li>
                        <p></p>
                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;Mail to : <a href="#"> For R & D Department</a></li>
                        <p></p>
                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;Mail to : <a href="#"> For Commercial Department</a>
                        </li>
                        <p></p>
                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;Mail to : <a href="#"> For Enquiries Department</a>
                        </li>
                        <p></p>
                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;Mail to : <a href="#"> For Feedback</a></li>
                        <p></p>
                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;Mail to : <a href="#"> For Product Complaint</a></li>
                        <p></p>
                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;Mail to : <a href="#"> For Domestic Marketing
                                Department</a>
                            <ul>
                                <li class="ml-5">&raquo;&nbsp;<a href="#">Nova Division</a></li>
                                <li class="ml-5">&raquo;&nbsp;<a href="#">Ethical Division</a></li>
                                <li class="ml-5">&raquo;&nbsp;<a href="#">Institution Division</a></li>
                                <li class="ml-5">&raquo;&nbsp;<a href="#">Generic Division</a></li>
                            </ul>
                        </li>
                        <p></p>
                    </ul>

                </div>


                <div class="col-lg-1"></div>

            </div>
        </div>
    </div>

@endsection
