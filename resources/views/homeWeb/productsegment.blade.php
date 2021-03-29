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

@section('customjs')
    {{-- <script>
        $(function() {
            alert('nav a[href^="/' + location.pathname.split("#")[1] + '"]').addClass('active'));
            $('nav a[href^="/' + location.pathname.split("#")[1] + '"]').addClass('active');
        });

    </script> --}}
@endsection

@section('body-content')
    <div style="padding-top: 130px;"></div>

    <div class="container-fluid"
        style="background-image: url({{ asset('assets/images/about.jpg') }}); padding-top:115px;padding-bottom:85px;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <h2 class="text-white" style="">Product Segments</h2>
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
                            <!-- <a class="nav-link " id="nav-urology-tab" data-toggle="tab" href="#nav-urology" role="tab" aria-controls="nav-urology" aria-selected="false" style="font-size: 13px;">Baby Care</a> -->

                            <a class="nav-link" id="antibiotics" data-toggle="tab" href="#nav-antibiotics" role="tab"
                                aria-controls="nav-antibiotics" aria-selected="false"
                                style="font-size: 13px;">Anti-Biotics</a>

                            <a class="nav-link " id="nav-female-tab" data-toggle="tab" href="#nav-female" role="tab"
                                aria-controls="nav-female" aria-selected="false" style="font-size: 13px;">Female Care</a>

                            <a class="nav-link " id="nav-food-tab" data-toggle="tab" href="#nav-food" role="tab"
                                aria-controls="nav-food" aria-selected="false" style="font-size: 13px;">Food Product</a>

                            <a class="nav-link" id="nav-nutraceuticals-tab" data-toggle="tab" href="#nav-nutraceuticals"
                                role="tab" aria-controls="nav-nutraceuticals" aria-selected="true"
                                style="font-size: 13px;">Nutraceuticals</a>

                            <a class="nav-link " id="nav-infectives-tab" data-toggle="tab" href="#nav-infectives" role="tab"
                                aria-controls="nav-infectives" aria-selected="false"
                                style="font-size: 13px;">Anti-Infectives</a>

                            <a class="nav-link " id="nav-stateofart-tab" data-toggle="tab" href="#nav-stateofart" role="tab"
                                aria-controls="nav-stateofart" aria-selected="false" style="font-size: 13px;">Ayurveda/State
                                of Art Products</a>

                            <a class="nav-link " id="nav-pain-tab" data-toggle="tab" href="#nav-pain" role="tab"
                                aria-controls="nav-pain" aria-selected="false" style="font-size: 13px;">Pain
                                Mangement/Anti-Inflammatory</a>
                        </div>
                    </nav>

                    <div class="tab-content" style="border-top:2px solid red;" id="nav-tabContent">
                        <div class="tab-pane fade " id="nav-antibiotics" role="tabpanel"
                            aria-labelledby="nav-antibiotics-tab">
                            <div class="section_title mt-5">
                                <h2>Anti-Biotics</h2>
                            </div>
                            <br>
                            <p>Antibiotics are a group of medicines that are used to treat infections caused by some germs
                                (bacteria and certain parasites). They do not work against infections that are caused by
                                viruses - for example, the common cold or flu. You’ve most likely taken an antibiotic or
                                anti-infective at least once in your lifetime. From treatments for painful strep throat or
                                ear infections as a child, to burning urinary tract infections or itchy skin infections as
                                an adult, antibiotics are one of the most highly utilized and important medication classes
                                we have in medicine.</p>
                        </div>

                        <div class="tab-pane fade" id="nav-paedology" role="tabpanel" aria-labelledby="nav-paedology-tab">
                            <div class="section_title mt-5">
                                <h2>Paedology</h2>
                            </div>
                        </div>

                        <div class="tab-pane fade " id="nav-female" role="tabpanel" aria-labelledby="nav-female-tab">
                            <div class="section_title mt-5">
                                <h2>Female Care</h2>
                            </div>
                            <p>Innovation and technology will enable the industry to continue to observe sustainability in
                                the production of even higher performance products to meet the needs and increasing
                                expectations of consumers.</p>
                        </div>


                        <div class="tab-pane fade " id="nav-food" role="tabpanel" aria-labelledby="nav-food-tab">
                            <div class="section_title mt-5">
                                <h2>Food Product</h2>
                            </div>
                            <p>Nutraceutical product is a food or fortified food product that not only supplements the diet
                                but also assists in treating or preventing disease (apart from anemia), so provides medical
                                benefits. A nutraceutical product may be defined as a substance, which has physiological
                                benefit or provides protection against chronic disease. </p>
                            <p>Nutraceuticals may be used to improve health, delay the aging process, prevent chronic
                                diseases, increase life expectancy, or support the structure or function of the body.
                                Nowadays, nutraceuticals have received considerable interest due to potential nutritional,
                                safety and therapeutic effects. </p>
                        </div>

                        <div class="tab-pane fade in show active" id="nav-nutraceuticals" role="tabpanel"
                            aria-labelledby="nav-nutraceuticals-tab">
                            <div class="section_title mt-5">
                                <h2>Nutraceuticals</h2>
                            </div>
                            <p>Nutraceuticals may be used to improve health, delay the aging process, prevent chronic
                                diseases, increase life expectancy, or support the structure or function of the body.
                                Nowadays, nutraceuticals have received considerable interest due to potential nutritional,
                                safety and therapeutic effects. </p>
                        </div>


                        <div class="tab-pane fade" id="nav-infectives" role="tabpanel" aria-labelledby="nav-infectives-tab">
                            <div class="section_title mt-5">
                                <h2>Anti-Infectives</h2>
                            </div>
                            <p>Anti-Infectives are medicines that work to prevent or treat infections, they include
                                antibacterials, antivirals, antifungals and antiparasitic medications. Ind-swift holds the
                                apex rank in anti-infective with a wide range of medicines that fight against different
                                kinds of infections.</p>
                        </div>


                        <div class="tab-pane fade" id="nav-stateofart" role="tabpanel" aria-labelledby="nav-stateofart-tab">
                            <div class="section_title mt-5">
                                <h2>Ayurveda/State of Art Products </h2>
                            </div>
                            <p>Ayurvedic medicine (“Ayurveda” for short) is one of the world's oldest holistic
                                (“whole-body”) healing systems. It’s based on the belief that health and wellness depend on
                                a delicate balance between the mind, body, and spirit. Ayurveda maintains that all life must
                                be supported by energy in balance. When there is minimal stress and the flow of energy
                                within a person is balanced, the body’s natural defense systems will be strong and can more
                                easily defend against disease.The main goal of Ayurveda treatments is to fight diseases by
                                strengthening the immune system while promoting good health.</p>
                            <p>Ayurveda identifies three basic types of energy or functional principles that are present in
                                everyone and everything</p>
                            <p>Vata is the subtle energy associated with movement — composed of Space and Air. It governs
                                breathing, blinking, muscle and tissue movement, pulsation of the heart, and all movements
                                in the cytoplasm and cell membranes.
                                Pitta expresses as the body’s metabolic system — made up of Fire and Water. It governs
                                digestion, absorption, assimilation, nutrition, metabolism and body temperature.
                                Kapha is the energy that forms the body’s structure — bones, muscles, tendons — and provides
                                the “glue” that holds the cells together, formed from Earth and Water. </p>
                        </div>

                        <div class="tab-pane fade" id="nav-pain" role="tabpanel" aria-labelledby="nav-pain-tab">
                            <div class="section_title mt-5">
                                <h2>Pain Mangement/Anti-Inflammatory</h2>
                            </div>
                            <p>Anti-inflammatory is the property of a substance or treatment that reduces inflammation or
                                swelling. Anti-inflammatory drugs make up about half of analgesics, remedying pain by
                                reducing inflammation as opposed to opioids, which affect the central nervous system to
                                block pain signaling to the brain. If you have ever taken medicine to help with a headache,
                                toothache or back pain, chances are you have used non-steroidal anti-inflammatory drugs,
                                also known as NSAIDs. Almost every home would have some NSAIDs. They’re found in tablets,
                                capsules, creams, liquids, injections, sprays and suppositories.</p>
                            <p>NSAIDs can be used to relieve pain and symptoms associated with a range of conditions,
                                including:</p>
                            <ul>
                                <li>headaches</li>
                                <li>toothaches</li>
                                <li>period cramps</li>
                                <li>muscle strains and sprains</li>
                                <li>arthritis</li>
                                <li>back or neck pain</li>
                                <li>some autoimmune conditions</li>
                            </ul>
                        </div>


                    </div>

                    <!--**********************nav pills ends here***********************-->

                </div>

                <!-- Boxes -->
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
