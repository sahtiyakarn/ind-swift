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
        style="background-image: url({{ asset('assets/images/whyus.png') }}); padding-top:115px;padding-bottom:85px;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <h2 class="text-white" style="">Why us</h2>
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
                            <a class="nav-link active" id="nav-presence-tab" data-toggle="tab" href="#nav-presence"
                                role="tab" aria-controls="nav-presence" aria-selected="true" style="font-size: 13px;">Our
                                Presence</a>
                            <a class="nav-link" id="nav-strengths-tab" data-toggle="tab" href="#nav-strengths" role="tab"
                                aria-controls="nav-strengths" aria-selected="false" style="font-size: 13px;">Strengths</a>
                            <a class="nav-link " id="nav-rankings-tab" data-toggle="tab" href="#nav-rankings" role="tab"
                                aria-controls="nav-rankings" aria-selected="false" style="font-size: 13px;">Ranking</a>
                            <a class="nav-link " id="nav-awards-tab" data-toggle="tab" href="#nav-awards" role="tab"
                                aria-controls="nav-awards" aria-selected="false" style="font-size: 13px;">Awards</a>
                            <a class="nav-link " id="nav-production-tab" data-toggle="tab" href="#nav-production" role="tab"
                                aria-controls="nav-production" aria-selected="false" style="font-size: 13px;">Production</a>
                            <a class="nav-link " id="nav-break-tab" data-toggle="tab" href="#nav-break" role="tab"
                                aria-controls="nav-break" aria-selected="false" style="font-size: 13px;">Major Break
                                Through</a>
                            <a class="nav-link " id="nav-product-tab" data-toggle="tab" href="#nav-product" role="tab"
                                aria-controls="nav-product" aria-selected="false" style="font-size: 13px;">Product In
                                Pipeline</a>
                        </div>
                    </nav>

                    <div class="tab-content" style="border-top:2px solid red;" id="nav-tabContent">
                        <div class="tab-pane fade in show active" id="nav-presence" role="tabpanel"
                            aria-labelledby="nav-presence-tab">
                            <div class="section_title mt-5">
                                <h2>Our Presence</h2>
                            </div>
                            <br>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;Ind-Swift has made a marked presence in the national and
                                                international market, for more than two decades.</p>
                                        </th>

                                        <th scope="col">
                                            <p>&raquo;&nbsp;It has a strong global network in more than 50 countries.</p>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="nav-strengths" role="tabpanel" aria-labelledby="nav-strengths-tab">
                            <div class="section_title mt-5">
                                <h2>Strengths</h2>
                            </div>
                            <p></p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>&raquo;&nbsp; It has a marked presence in high growth therapeutic segments of
                                                Cardiology, Diabetology, Anti-depressant, Anti-allergic, Anti-Infective,
                                                Neurology and Oncology.</p>
                                            <p>&raquo;&nbsp; Ind-Swift has a workforce of over 3000 multifunctional and
                                                multicultural employees, motivated towards higher standards of customer
                                                satisfaction.</p>
                                            <p>&raquo;&nbsp;Long term supply alliances with reputed global companies in the
                                                markets of the US, Europe, Middle East, South East Asia and Africa.</p>
                                        </th>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;Ind-Swift possesses a portfolio of over 750 products.</p>
                                            <p>&raquo;&nbsp;3200+ Stockists accross India serving 60 Lakh customers.</p>
                                            <p>&raquo;&nbsp;A strong presence in Europe, Middle East, US and CIS Countries.
                                            </p>
                                        </th>

                                        <th scope="col">
                                            <p>&raquo;&nbsp;IND-SWIFT Joint ventures and subsidiaries in Iran, Singapore and
                                                Dubai, for establishing a good network for international marketing.</p>
                                            <p>&raquo;&nbsp; Ind-Swift is the world's largest manufacturer of
                                                Clarithromycin, Azithromycin and Fexofenadine medicine.</p>
                                            <p>&raquo;&nbsp;A strong prescribing doctor’s base of over 2.50Lacs.</p>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="nav-rankings" role="tabpanel" aria-labelledby="nav-rankings-tab">
                            <div class="section_title mt-5">
                                <h2>Rankings</h2>
                            </div>
                            <p></p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;Ind-Swift is ranked 90th among the top Indian Pharmaceutical
                                                companies in India.</p>
                                        </th>
                                        <th scope="col">
                                            <p>&raquo;&nbsp; It is among the fortune 500 companies of India.</p>
                                        </th>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;It is ranked the 101st largest pharma company in the global
                                                market by Plimsoll Global Analysis.</p>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>


                        <div class="tab-pane fade" id="nav-awards" role="tabpanel" aria-labelledby="nav-awards-tab">
                            <div class="section_title mt-5">
                                <h2>Awards</h2>
                            </div>
                            <p>Ind-Swift has been bestowed with many prestigious awards. A few of them are&nbsp;::</p>
                            <p></p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;IDMA (Indian Drug Manufacturers Association) Quality Excellence
                                                Award.</p>
                                            <p>&raquo;&nbsp; Most promising entrant into the big league, award at the 5th
                                                Annual Pharmaceutical Leadership Summit & Business Leadership Award 2012
                                                held in Mumbai on 21 September, 2012.</p>
                                            <p>&raquo;&nbsp; Certificate of Excellence in recognition of Exemplary Growth
                                                and Sustainable Success by India Brand Equity Federation in the Second
                                                Annual Inc. India 500 Award.</p>
                                            <p>&raquo;&nbsp; Udyog Rattan Award for valuable contributions to the economic
                                                development of Himachal Pradesh.</p>
                                        </th>
                                        <th scope="col">
                                            <p>&raquo;&nbsp; Bharat Udhyog Rattan Award to Our Company.</p>
                                            <p>&raquo;&nbsp;Deloitte Technology fast 500 Asia pacific Award in 2006 by
                                                Deloitte.</p>
                                            <p>&raquo;&nbsp;Pharma Pulse Award for three consecutive years 2002 to 2005
                                                Continously.</p>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="nav-production" role="tabpanel" aria-labelledby="nav-production-tab">
                            <div class="section_title mt-5">
                                <h2>Production</h2>
                            </div>
                            <p>Ind-Swift possesses state-of-the-art manufacturing facilities for finished Dosage Forms &
                                API's conforming to the most stringent international norms of WHO-GMP, TGA (Australia), MHRA
                                (UK).</p>
                            <p></p>
                            <p>Ind-Swift has a manufacturing capacity of (Finished Dosage) :</p>
                            <p></p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;2300 million Tablets.</p>
                                            <p>&raquo;&nbsp; 64 million Ampoules.</p>
                                            <p>&raquo;&nbsp;27 million Vials</p>
                                        </th>
                                        <th scope="col">
                                            <p>&raquo;&nbsp; 84 million Capsules.</p>
                                            <p>&raquo;&nbsp;18 million Dermatological products.</p>
                                            <p>&raquo;&nbsp;62 million Oral liquid bottles.</p>
                                        </th>
                                    </tr>
                                </thead>
                            </table>

                            <p>Manufacturing capacity (API) :</p>
                            <p></p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;Approvals from TGA (Australia), USFDA, WHO-GMP, MHRA(UK),NDA
                                                (Uganda),TFDA(Tanzania),UAEC, DACA-(Ethiopia),GMP(Yemen).</p>
                                            <p>&raquo;&nbsp;700 Stainless Steel and Glass Lined Reaction Vessels with
                                                capacities ranging from 50 to 6000 liters. (Total Volume 1000 kilo liters).
                                            </p>
                                            <p>&raquo;&nbsp;CGMP pilot plant having 10 reaction vessels with capacities
                                                ranging from 250 to 1000 liters( Total volume 5.5 kilo-liters).</p>
                                        </th>
                                        <th scope="col">
                                            <p>&raquo;&nbsp; 11 Dedicated blocks operating as per USFDA guidelines.</p>
                                            <p>&raquo;&nbsp;Fully Automated Solvent Recovery System.</p>
                                            <p>&raquo;&nbsp;Biological waste water treatment plant.</p>
                                            <p>&raquo;&nbsp;1,50,0000 (15 lakhs) sq. ft. covered area.</p>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                            <p>Ind-Swift has an R & D facility duly approved by the Department Of Science of Technology and
                                the Govt of India. This facility has eight synthetic labs with over 40,000 Sq ft of research
                                area and the best pool of scientists and researchers.</p>
                        </div>


                        <div class="tab-pane fade" id="nav-break" role="tabpanel" aria-labelledby="nav-break-tab">
                            <div class="section_title mt-5">
                                <h2>Major Break Throughs</h2>
                            </div>
                            <p></p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>&raquo;&nbsp; Ind-Swift has filed more than 680 dossiers for registration in
                                                more than 20 Countries around the world stretching from South America to
                                                Philippines.</p>
                                            <p>&raquo;&nbsp;It has developed Netazoxanide Anti-Diarrheal drug for the first
                                                time in India after successful clinical trials and bio-equivalence studies.
                                            </p>
                                            <p>&raquo;&nbsp;It has strong capacity to develop non infringing API's requiring
                                                Complex Chemistry and Multiple reactions.</p>
                                        </th>

                                        <th scope="col">
                                            <p>&raquo;&nbsp;Ind-Swift has developed taste masking technology of macrolides
                                                for the first time in India.</p>
                                            <p>&raquo;&nbsp;Ind-Swift has developed the sustained release process of
                                                Isoxsuprine HCL tablets for the first time in India.</p>
                                            <p>&raquo;&nbsp;Ind-Swift has been developed the mouth desolving tablet for
                                                easily.</p>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>


                        <div class="tab-pane fade" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">
                            <div class="section_title mt-5">
                                <h2>Products In Pipeline</h2>
                            </div>
                            <p></p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>&raquo;&nbsp; Fluvastatin</p>
                                            <p>&raquo;&nbsp;Risedronate</p>
                                            <p>&raquo;&nbsp;Acamprosate</p>
                                            <p>&raquo;&nbsp;Montelukast Na</p>
                                            <p>&raquo;&nbsp;Cinacalcet</p>
                                            <p>&raquo;&nbsp;Duloxetine</p>
                                            <p>&raquo;&nbsp;Naratriptan HCl</p>
                                        </th>

                                        <th scope="col">
                                            <p>&raquo;&nbsp;(Anti Hyperlipidimic)</p>
                                            <p>&raquo;&nbsp;(Osteoporosis)</p>
                                            <p>&raquo;&nbsp;(AntiAlcoholism)</p>
                                            <p>&raquo;&nbsp;(Anti Asthmatic)</p>
                                            <p>&raquo;&nbsp;(Hyperparathyroidism)</p>
                                            <p>&raquo;&nbsp;(Mental Depression)</p>
                                            <p>&raquo;&nbsp;(Anti Migraine)</p>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                            <p>Drug regulatory affair and documentation: Dossiers for ANDA's of different countries, NDA's
                                filing in India, patents filing after a thorough scrutiny by attorneys, documentation for
                                getting USFDA, documentation for R & D products, documentation for commercial samples,
                                documentation for bioequivalence samples</p>
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
