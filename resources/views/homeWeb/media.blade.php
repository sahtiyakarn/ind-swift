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

@endsection

@section('body-content')

    <!-- start Body -->

    <div style="padding-top: 130px;"></div>
    <div class="container-fluid"
        style="background-image: url({{ asset('assets/images/media.png') }}); padding-top:115px;padding-bottom:85px;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <h2 class="text-white" style="">Media</h2>
            </div>
        </div>
    </div>

    <!-- About -->

    <div class="about">
        <div class="container-fluid">
            <div class="row">

                <!-- About Content -->
                <div class="col-lg-1"></div>
                <div class="col-lg-8">


                    <!--**********************nav pills***********************-->
                    <nav>
                        <div class="nav nav-tabs my" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                                aria-controls="nav-about" aria-selected="true" style="font-size: 13px;">Corporate Films</a>


                            <a class="nav-link " id="nav-awards-tab" data-toggle="tab" href="#nav-awards" role="tab"
                                aria-controls="nav-awards" aria-selected="false" style="font-size: 13px;">Image Gallery</a>

                            <a class="nav-link my" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                                aria-controls="nav-profile" aria-selected="false" style="font-size: 13px;">Presentation</a>

                        </div>
                    </nav>

                    <div class="tab-content" style="border-top:2px solid red;" id="nav-tabContent">
                        <div class="tab-pane fade in show active" id="nav-about" role="tabpanel"
                            aria-labelledby="nav-about-tab">
                            <div class="section_title mt-5">
                                <h2>Corporate Films</h2>
                            </div>
                            <br>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            <div align="center">&nbsp;
                                                <font color="#000000" style="font-weight:bold;">
                                                    <h3><img src="{{ asset('assets/images/main.png') }}" align="absmiddle"
                                                            border="0" class="png_imgs" style="width: 40px;" /> Ind-Swift
                                                        Part-1</h3>
                                                </font>
                                            </div>
                                            <div align="center" style="margin-top:5px"><iframe width="650" height="300"
                                                    src="https://www.youtube.com/embed/AXzk9W2jKH8?hl=en&fs=1"
                                                    frameborder="0" allowfullscreen></iframe>
                                            </div>


                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div align="center">&nbsp;
                                                <font color="#000000" style="font-weight:bold;">
                                                    <h3><img src="{{ asset('assets/images/main.png') }}" align="absmiddle"
                                                            border="0" class="png_imgs" style="width: 40px;" /> Ind-Swift
                                                        Part-1</h3>
                                                </font>
                                            </div>
                                            <div align="center" style="margin-top:5px">
                                                <iframe width="650" height="300"
                                                    src="https://www.youtube.com/embed/RCyuULFELts?hl=en&fs=1"
                                                    frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>


                        <div class="tab-pane fade" id="nav-awards" role="tabpanel" aria-labelledby="nav-awards-tab">
                            <div class="section_title mt-5">
                                <h2>Image Gallery</h2>
                            </div>
                            <p>image grallery </p>
                        </div>

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="section_title mt-5">
                                <h2>Presentation</h2>
                            </div>
                            <p>Comming Soon..</p>
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
                        <div class="box_text" style=" margin-left: -30px; margin-right: -45px;">IND-SWIFT Chandigarh based
                            drug company, established in 1986...</div>
                    </div>

                    <!-- Box -->
                    <div class="box box_appointments" style="height: 250px;">
                        <div class="box_title" style=" margin-left: -30px; margin-right: -45px; margin-top:-10px;">
                            <img src="{{ asset('assets/images/phone-call.svg') }}" alt=""
                                style="width: 29px; height:29px;">
                            Leadership
                        </div>
                        <div class="box_text" style=" margin-left: -30px; margin-right: -25px;">The facilities are built
                            according to the current guidelines of MHRA, EU, WHO
                            and accreditations with ISO 14000 series...</div>
                    </div>

                    <!-- Box -->
                    <div class="box box_emergency" style="height: 240px;">
                        <div class="box_title" style=" margin-left: -30px; margin-right: -45px; margin-top:-10px;">
                            <img src="{{ asset('assets/images/bell.svg') }}" alt="" style="width: 37px; height:37px;">
                            Mission
                        </div>
                        <div class="box_emergency_text" style=" margin-left: -30px; margin-right: -20px;">IND-SWIFT has
                            spread its network across 45 countries. It is an ISO
                            9001-2008, WHO GMP certified company...</div>
                    </div>

                </div>

                <div class="col-lg-1"></div>

            </div>
        </div>
    </div>

@endsection
