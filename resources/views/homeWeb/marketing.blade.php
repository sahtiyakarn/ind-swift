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


    <div style="padding-top: 130px;"></div>

    <div class="container-fluid"
        style="background-image: url({{ asset('assets/images/marketing.png') }}); padding-top:115px;padding-bottom:85px;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <h2 class="text-white" style="">Marketing</h2>
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
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                                aria-controls="nav-about" aria-selected="true" style="font-size: 13px;">Domestic
                                Marketing</a>
                            <a class="nav-link " id="nav-message-tab" data-toggle="tab" href="#nav-message" role="tab"
                                aria-controls="nav-message" aria-selected="false" style="font-size: 13px;">International
                                Marketing</a>
                            <a class="nav-link " id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                                aria-controls="nav-profile" aria-selected="false" style="font-size: 13px;">Distribution &
                                Logistics</a>
                        </div>
                    </nav>

                    <div class="tab-content" style="border-top:2px solid red;" id="nav-tabContent">
                        <div class="tab-pane fade in show active" id="nav-about" role="tabpanel"
                            aria-labelledby="nav-about-tab">
                            <div class="section_title mt-5">
                                <h2>Marketing</h2>
                            </div>
                            <br>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            Ind-Swift's forte lies in a competent field force of around 600 marketing
                                            personnel working throughout India. An intricate and extensive retailer base of
                                            over 5 lakh retailers along with 3200 stockists and 32+ C&F (Carrying &
                                            Forwarding) catering to over 10 lakh customers.</th>
                                        <th scope="col">Ind-Swift has a nexus of 3 lakh prescribing doctors from
                                            gynaecology, paediatrics, cardiology, diabetics, dermatology, ENT, dentistry,
                                            neuropsychiatry, gastroenterology, urology specialty and personal health care.
                                            Ind-Swift is the top generic drug supplier in India.Ind-Swift’s portfolio
                                            comprises of over 750 pharmaceutical products with a presence in high growth
                                            therapeutic segments like cardiology, diabetology, anti-depressant,
                                            anti-allergic, anti- infective, neurology, oncology, dermatology etc.</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="nav-message" role="tabpanel" aria-labelledby="nav-message-tab">
                            <div class="section_title mt-5">
                                <h2>International Marketing</h2>
                            </div>
                            <p>The Global Business Unit (GBU) of Ind-Swift Ltd was started in 2007. Through this Global
                                Business Unit it exports its products to over 50 countries.
                                <br>
                                The GBU Facility is compliant to the GMP specifications of MHRA (UK), TGA (Australia). It
                                has got approval of various drug authorities, such as:
                            </p>
                            <p></p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;MHRA (UK).</p>
                                            <p>&raquo;&nbsp;TGA (Australia).</p>
                                            <p>&raquo;&nbsp;WHO (Geneva).</p>
                                            <p>&raquo;&nbsp;MOH (UAE).</p>
                                            <p>&raquo;&nbsp;TFDA (Tanzania).</p>
                                        </th>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;NDA (Uganda).</p>
                                            <p>&raquo;&nbsp;DACA(Ethiopia).</p>
                                            <p>&raquo;&nbsp;Dar-Al- Dawa DAD (Jordan).</p>
                                            <p>&raquo;&nbsp;ITOCHU (Japan).</p>
                                            <p>&raquo;&nbsp;MOH (UAE).</p>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                            <p>Ind-Swift develops and out licenses its products to UK, Europe, Canada and Australia with
                                leading generic partners such as TEVA, Mylan, Actavis, Stada and Ratiopharm.
                                Ind-Swift has filed more than 1000 dossiers in several countries.
                                Presently business negotiations are under process in Russia, Philippines, Taiwan,
                                Afghanistan, Malaysia, Costa Rica, Panama, Honduras, Venezuela, Peru, Guyana, Jamaica and
                                Serbia.
                                Ind-Swift is also involved in CRAMS (Contract Research & Manufacturing Services)</p>
                        </div>

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="section_title mt-5">
                                <h2>Distribution & Logistics</h2>
                            </div>
                            <p>Ind-Swift inventory and logistic system ensures quick and high quality delivery of services
                                through a dynamically linked widest network of 32 CFAs covering all states of country for
                                most suitable statutory compliance and simplified taxation levying as well as its own
                                warehouses all over India for regional inventory buildup. This system is connected by an
                                online system, which brings competitiveness to all areas or operations including sales,
                                inventory management and investment. Ind Swift uses its own fleet for inter depot stock
                                transfers in addition to regular cargo services for efficient availability of goods.
                                The Ind-Swift inventory and logistic system significantly reduces the overall inventory and
                                warehousing costs and optimizes the supply chain efficiently.</p>
                            <p></p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">&raquo;&nbsp;Ind-Swift has a well-knit distribution network covering
                                            the Indian and global market.</th>
                                        <th scope="col">&raquo;&nbsp;Ind-Swift has a strong retailer base of over 5 lakh
                                            retailers, 3200 Stockists, 32+ C&Fs catering to over 10 lakh Customers.</th>
                                        <th scope="col">&raquo;&nbsp;Ind-Swift has a chain of cold storage facilities at
                                            different locations and it delivers cold chain products within 48 hours in any
                                            part of the country.</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <!--**********************nav pills ends here***********************-->

                </div>

                <!-- Boxes -->
                <div class="col-lg-2 boxes_col">
                    <!-- Box -->
                    <div class="box working_hours" style="height: 200px;">
                        <div class="box_title" style=" margin-left: -30px; margin-right: -45px; margin-top:-10px;">
                            <img src="{{ asset('assets/images/alarm-clock.svg') }}" alt="" style="width:29px; height:29px;">
                            Our Profile
                        </div>
                        <div class="box_text" style=" margin-left: -30px; margin-right: -45px;">IND-SWIFT Chandigarh based
                            drug company, established in 1986...</div>
                    </div>

                    <!-- Box -->
                    <div class="box box_appointments" style="height: 250px;">
                        <div class="box_title" style=" margin-left: -30px; margin-right: -45px; margin-top:-10px;">
                            <img src="{{ asset('assets/images/phone-call.svg') }}" alt="" style="width: 29px; height:29px;">
                            Leadership
                        </div>
                        <div class="box_text" style=" margin-left: -30px; margin-right: -25px;">The facilities are built
                            according to the current guidelines of MHRA, EU, WHO
                            and accreditations with ISO 14000 series...</div>
                    </div>

                    <!-- Box -->
                    <div class="box box_emergency" style="height: 220px;">
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

    <!-- end of body -->
@endsection
