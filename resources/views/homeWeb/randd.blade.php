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
        style="background-image: url({{ asset('assets/images/rnd.png') }}); padding-top:115px;padding-bottom:85px;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <h2 class="text-white" style="">Research & Devlopment</h2>
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
                                aria-controls="nav-about" aria-selected="true" style="font-size: 13px;">Objectives</a>
                            <a class="nav-link " id="nav-message-tab" data-toggle="tab" href="#nav-message" role="tab"
                                aria-controls="nav-message" aria-selected="false" style="font-size: 13px;">Products
                                Developed</a>
                            <a class="nav-link " id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                                aria-controls="nav-profile" aria-selected="false" style="font-size: 13px;">Achievements</a>
                            <a class="nav-link " id="nav-policy-tab" data-toggle="tab" href="#nav-policy" role="tab"
                                aria-controls="nav-policy" aria-selected="false" style="font-size: 13px;">Future Plans</a>

                        </div>
                    </nav>

                    <div class="tab-content" style="border-top:2px solid red;" id="nav-tabContent">
                        <div class="tab-pane fade in show active" id="nav-about" role="tabpanel"
                            aria-labelledby="nav-about-tab">
                            <div class="section_title mt-5">
                                <h2>Objectives</h2>
                            </div>
                            <br>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Development of NDDS (Novel Drug Delivery System).</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>New process development for cost effectiveness.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Trouble shooting in the various plants </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Performance batches.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Bioequivalence and bioavailability as per DCGI (Drug Controller
                                            General of India) and International guidelines.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th> Drug regulatory affair and documentation: Dossiers for ANDA’s( Abbreviated New
                                            Drug Application) of different countries, NDA's (New Drug Application) filing in
                                            India, patents filing after a thorough scrutiny by attorneys, documentation for
                                            getting USFDA, documentation for R & D products, documentation for commercial
                                            samples, documentation for bioequivalence samples.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th> Contract Research from conceptualization till the final dossier of the
                                            product</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>


                        <div class="tab-pane fade" id="nav-message" role="tabpanel" aria-labelledby="nav-message-tab">
                            <div class="section_title mt-5">
                                <h2>Products Developed</h2>
                            </div>
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center text-info">
                                            <h4> NDDS products developed by the
                                                company</h4>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-info">Products</th>
                                        <th class="text-info">Therapeutic Segment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Clarie DT (Dispersible Tablet)</td>
                                        <td>Macrolide</td>
                                    </tr>
                                    <tr>
                                        <td>Clarie OD</td>
                                        <td>Macrolide</td>
                                    </tr>
                                    <tr>
                                        <td>Clarie SR (Sustained Release)</td>
                                        <td>Macrolide</td>
                                    </tr>
                                    <tr>
                                        <td>Excef DT (Dispersible Tablet)</td>
                                        <td>Antibiotic</td>
                                    </tr>
                                    <tr>
                                        <td>Suprox SR (Sustained Release)</td>
                                        <td>Vasodilator</td>
                                    </tr>
                                    <tr>
                                        <td>Fexidine Kid Tab (Dispersible Tablet)</td>
                                        <td>Anti histamine</td>
                                    </tr>
                                    <tr>
                                        <td>Netazox DT (Dispersible Tablet)</td>
                                        <td>Anti diarrhea</td>
                                    </tr>
                                    <tr>
                                        <td>Agile SR Tab (Sustained Release)</td>
                                        <td>Anti inflammatory</td>
                                    </tr>
                                    <tr>
                                        <td>Askil tablet (mouth dissolving)</td>
                                        <td>Anti inflammatory</td>
                                    </tr>
                                    <tr>
                                        <td>Roxy Kid Tab</td>
                                        <td>Macrolide</td>
                                    </tr>
                                    <tr>
                                        <td>Montelukast chewable tablet</td>
                                        <td>Anti asthmatic</td>
                                    </tr>
                                    <tr>
                                        <td>Metformin SR (Sustained Release)</td>
                                        <td>Anti diabetic</td>
                                    </tr>
                                    <tr>
                                        <td>Acamprostate enteric coated</td>
                                        <td>Anti alcoholic</td>
                                    </tr>
                                </tbody>
                                <tr>

                                    <th colspan="2" class="text-center text-info">
                                        <h4>Global Launch Status (with regard to the
                                            originator)</h4>
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-info">Products</th>
                                    <th class="text-info">Status</th>
                                </tr>
                                <tr>
                                    <td>Clarithromycin dispersible tablets</td>
                                    <td>First</td>
                                </tr>
                                <tr>
                                    <td>Fexofenadine dispersible tablets/ mouth dissolving NDDS</td>
                                    <td>First</td>
                                </tr>
                                <tr>
                                    <td>Roxithromycin taste masked granules</td>
                                    <td>First</td>
                                </tr>
                                <tr>
                                    <td>Roxithromycin dispersible tablets</td>
                                    <td>First</td>
                                </tr>
                                <tr>
                                    <td>Clarithromycin taste masked granules</td>
                                    <td>Second</td>
                                </tr>
                                <tr>
                                    <td>Clarithromycin sustained release tablets</td>
                                    <td>Second</td>
                                </tr>
                                <tr>
                                    <td>Netazoxanide dispersible tablets/ dry syrup</td>
                                    <td>Second</td>
                                </tr>

                            </table>
                        </div>


                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="section_title mt-5">
                                <h2>Achievements</h2>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Pocketed two patent of Clarithromycin & Fexofenadine.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Taste masking technology of macrolides for the first time in India.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Development of NDDS for old and new molecules. </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Developing non infringing process of four products.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Unique tablet in tablet technology.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Development of sustained release process of Isoxsuprine HCL tablets first time
                                            in India.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th> Researching such ayurvedic medicinal plants which show a promise in treating
                                            chronic ailments, conditions and life style disorders.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th> Development of mouth dissolving tablet technique.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Development of Netazoxanide based formulations single & in combination with
                                            ofloxacin, first in the country.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th> Received US and EU patent for Extended Release dosage form of Clarithromycin.
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Received European patents for the taste masked formulations of Fexofenadine for
                                            pediatrics.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Developed tasteless, directly compressible, fast dissolving, Fexofenadine
                                            carboner complex to be used in all solid dosage form of fexofenadine for all age
                                            groups .</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Developed soluble and stable Macrolide citrate salts to be used in all solid
                                            dosage form of Macrolide especially in modified release forms.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Developed Netazoxanide an Anti-diarrheal drug for the first time in India after
                                            successful clinical trials and Bioequivalence studies.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Development of Once Daily (OD) of Clarithromycin.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Development of liquid Preparation of Fexofenadine .</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="nav-policy" role="tabpanel" aria-labelledby="nav-policy-tab">
                            <div class="section_title mt-5">
                                <h2>Future Plans</h2>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>To be Recognized as a Research oriented Organisation.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Targeting New Chemical studies, Novel Drug Delivery System.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>To Conduct Bio- Equivalence. </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Dossier preparation in CTD (Common Technical Document) format.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">></th>
                                        <th>Stability data Profiling..</th>
                                    </tr>

                                </thead>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="nav-awards" role="tabpanel" aria-labelledby="nav-awards-tab">
                            <div class="section_title mt-5">
                                <h2>Awards & Achievements</h2>
                            </div>
                            <p>&raquo;&nbsp;<q>MOST PROMISING ENTRANT INTO THE BIG LEAGUE, AWARD at 5th Annual
                                    Pharmaceutical Leadership Summit & Business Leadership Award 2012 held in Mumbai on 21
                                    September 2012</q></p>
                            <p>&raquo;&nbsp;<q>ISO 9001-2008 by BSI (British Standards Institution)</q></p>
                            <p>&raquo;&nbsp;<q>R&D Centre approved & recognized by DSIR and is also USFDA Registered</q></p>
                            <p>&raquo;&nbsp;<q>IDMA Quality Excellence Certified</q></p>
                            <p>&raquo;&nbsp;<q>Winner of Pharma Pulse Awards for 3 consecutive year 2002-2005</q></p>
                            <p>&raquo;&nbsp;<q>Punjab Rattan Award</q></p>
                            <p>&raquo;&nbsp;<q>Ludhiana Management Association Award</q></p>
                            <p>&raquo;&nbsp;<q>Bharat Udyog Rattan Award</q></p>
                            <p>&raquo;&nbsp;<q>Ranked 2nd in the Pharma Generics Business</q></p>
                            <p>&raquo;&nbsp;<q>Ranked No 35 among top Indian Pharmaceuticals companies</q></p>
                            <p class="text-danger" style="font-size: 15px;font-weight: bold;"><q>Ind-Swift Limited is
                                    Awarded as the most promising Pharmaceutical Company at 8th Healthcare Forum held at
                                    Chandigarh on 27th April 2018.</q></p>
                            <br>
                            <img src="{{ asset('assets/images/certificate.png') }}"><img
                                src="{{ asset('assets/images/award.jpg') }}"><img
                                src="{{ asset('assets/images/award1.jpg') }}">
                        </div>

                        <div class="tab-pane fade" id="nav-member" role="tabpanel" aria-labelledby="nav-member-tab">
                            <div class="section_title mt-5">
                                <h2>Membership</h2>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;<q>IAOC(Industries Association of Chandigarh)</q></p>
                                            <p>&raquo;&nbsp;<q>BBNA (Baddi Barotiwala Nalagarh Association)</q></p>
                                            <p>&raquo;&nbsp;<q>ASSOCHAM (Association Chambers of Commerce & Industry)</q>
                                            </p>
                                            <p>&raquo;&nbsp;<q>FIEO (Federation of Indian Export Organisations )</q></p>
                                            <p>&raquo;&nbsp;<q>PHARMEXCIL (Pharmaceutical Export Promotion Council)</q></p>
                                        </th>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;<q>Indo-German Chamber of Commerce</q></p>
                                            <p>&raquo;&nbsp;<q>PHDCCI (PHD Chamber of Commerce & Industry)</q></p>
                                            <p>&raquo;&nbsp;<q>CII (Confederation of Indian Industry)</q></p>
                                            <p>&raquo;&nbsp;<q>FICCI (Federation of Indian Chamber of Commerce &
                                                    Industry)</q></p>
                                            <p>&raquo;&nbsp;<q>IDMA (Indian Drug Manufacturers Association)</q></p>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="nav-approvals" role="tabpanel" aria-labelledby="nav-approvals-tab">
                            <div class="section_title mt-5">
                                <h2>Approvals</h2>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;<q>TGA- Australia</q></p>
                                            <p>&raquo;&nbsp;<q>USFDA</q></p>
                                            <p>&raquo;&nbsp;<q>WHO-GMP</q></p>
                                            <p>&raquo;&nbsp;<q>MHRA UK</q></p>
                                            <p>&raquo;&nbsp;<q>NDA- UGANDA</q></p>
                                        </th>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;<q>TFDA –TANZANIA</q></p>
                                            <p>&raquo;&nbsp;<q>UAEC Registration</q></p>
                                            <p>&raquo;&nbsp;<q>DACA –ETHIOPIA</q></p>
                                            <p>&raquo;&nbsp;<q>YEMEN – GMP</q></p>
                                            <p>&raquo;&nbsp;<q>IVORY COAST-GMP</q></p>
                                        </th>
                                    </tr>
                                </thead>
                            </table>

                        </div>

                        <div class="tab-pane fade " id="nav-facility" role="tabpanel" aria-labelledby="nav-facility-tab">
                            <div class="section_title mt-5">
                                <h2>Facilities</h2>
                            </div>
                            <p>A unique and unmatched excellence in pharmaceuticals manufacturing with highest reliance of
                                product quality attributes is our corporate strength . Ind-Swift's multipurpose,
                                multilocation manufacturing set-ups are acrossspread across the lush-green plains of
                                northern Indian states viz Himachal Pradesh, Haryana and Jammu and Kashmir. The locations
                                are environmental pollution free and together offer approx.12 lacs sq. ft of newly
                                constructed plants with state of the art facilities for pharma manufacturing.</p>

                            <p>The facilities are built according to current guidelines of USFDA, MHRA, EU, and WHO, and
                                accreditations with ISO 14000 series standard.</p>

                            <p>A strong and ever vigilant Quality Assurance System forms the backbone of our continuing
                                compliance to stringent regulatory guidelines, backed by latest equipments and
                                instrumentation system. We achieve constant compliance to product quality.attributes with an
                                enviable cost of efficiency. It is always our strong endeavor to continuously invest in
                                newer products, process technologies and look out for new horizons in pharmaceutical
                                business to establish our well earned leadership.</p>
                            <br>
                            <h6>EQUIPMENTS</h6>
                            <p>All of the above facilities house the latest, automated equipments, operating with
                                pre-programmed logic controllers and a highly qualified and trained staff to produce
                                products conforming to defined quality attribute .
                                Some of the examples of these equipments are&nbsp;:</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;Fully automatic and integrated lines for filling of Ampoules and
                                                vials</p>
                                            <p>&raquo;&nbsp;Dehydrogenating and Sterilizing tunnel.</p>
                                            <p>&raquo;&nbsp;Bottles (Glass/ PET) washing, filling and sealing machines</p>
                                            <p>&raquo;&nbsp;Herbal and Neutraceuticals</p>
                                            <p>&raquo;&nbsp;High speed tablet compression machine</p>
                                        </th>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;Tablet Auto coaters</p>
                                            <p>&raquo;&nbsp;Heavy duty granulation, blenders</p>
                                            <p>&raquo;&nbsp;Capsule Filling Inspection and Polishing machines</p>
                                            <p>&raquo;&nbsp;Blister packaging machine (PVC and ALU-ALU)</p>
                                            <p>&raquo;&nbsp;Product processing under Isolators (for Oncologicals)</p>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                            <p style="font-size: 12px;">All the operations are complementary by a highly efficient
                                classified Air Handling System with pressure gradients and an continuously operating water
                                generating, storage and distribution system to supply high
                                purity water.</p>
                            <p style="font-size: 12px;font-weight: bold;">The Manufacturing facilities are strategically
                                grouped so as to offer dedicated environment for the manufacturing of&nbsp;:</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;General category formulations</p>
                                            <p>&raquo;&nbsp;Beta lactum</p>
                                            <p>&raquo;&nbsp;Steroids and hormones</p>
                                        </th>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;Cephalosporins</p>
                                            <p>&raquo;&nbsp;Oncologicals</p>
                                            <p>&raquo;&nbsp;Soft Gelatin capsules</p>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                            <p style="font-size: 12px;font-weight: bold;">These facilities together produce a diverse range
                                of dosage forms like
                                &nbsp;:</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;Oral solutions and suspensions</p>
                                            <p>&raquo;&nbsp;Dry syrups (General, beta lactum and Cephalosporins)</p>
                                            <p>&raquo;&nbsp;Tablets with all different technologies</p>
                                            <p>&raquo;&nbsp;Hard Gelatin Capsules</p>
                                        </th>

                                        <th scope="col">
                                            <p>&raquo;&nbsp;Soft Gelatin Capsules</p>
                                            <p>&raquo;&nbsp;Liquid and Dry powder injectables</p>
                                            <p>&raquo;&nbsp;Dermatological</p>
                                            <p>&raquo;&nbsp;Eye/ Ear drops</p>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                            <br>
                            <h6>CAPACITY</h6>
                            <p><span style="font-size: 12px;font-weight: bold;">Ind-Swift Ltd</span> is proud to have an
                                enviable manufacturing capacity to process above range of products</p>
                            <p>The current annualized capacity is
                                &nbsp;:</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>&raquo;&nbsp;2300 million Tablets</p>
                                            <p>&raquo;&nbsp;64 million Ampoules</p>
                                            <p>&raquo;&nbsp;27 million Vialss</p>
                                            <p>&raquo;&nbsp;84 million Capsules</p>
                                        </th>

                                        <th scope="col">
                                            <p>&raquo;&nbsp;Soft Gelatin Capsules</p>
                                            <p>&raquo;&nbsp;18 million Dermatological products</p>
                                            <p>&raquo;&nbsp;62 million Oral liquid bottles</p>
                                            <p>&raquo;&nbsp;Soft Gelatin Capsules</p>
                                        </th>
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
                            9001-2008, WHO GMP certified company... <br> </div>
                    </div>

                </div>

                <div class="col-lg-1"></div>

            </div>
        </div>
    </div>

@endsection
