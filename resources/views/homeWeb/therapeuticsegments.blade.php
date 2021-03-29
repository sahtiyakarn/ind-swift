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
        style="background-image: url({{ asset('assets/images/about.jpg') }}); padding-top:115px;padding-bottom:85px;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <h2 class="text-white" style="">Therapeutic Segments</h2>
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
                            <a class="nav-link " id="nav-urology-tab" data-toggle="tab" href="#nav-urology" role="tab"
                                aria-controls="nav-urology" aria-selected="false" style="font-size: 13px;">Urology</a>

                            <a class="nav-link" id="nav-paedology-tab" data-toggle="tab" href="#nav-paedology" role="tab"
                                aria-controls="nav-paedology" aria-selected="false" style="font-size: 13px;">Paedology</a>

                            <a class="nav-link " id="nav-cardiology-tab" data-toggle="tab" href="#nav-cardiology" role="tab"
                                aria-controls="nav-cardiology" aria-selected="false" style="font-size: 13px;">Cardiology</a>

                            <a class="nav-link active" id="nav-gynaecology-tab" data-toggle="tab" href="#nav-gynaecology"
                                role="tab" aria-controls="nav-gynaecology" aria-selected="true"
                                style="font-size: 13px;">Gynaecology</a>

                            <a class="nav-link " id="nav-dermatology-tab" data-toggle="tab" href="#nav-dermatology"
                                role="tab" aria-controls="nav-dermatology" aria-selected="false"
                                style="font-size: 13px;">Dermatology</a>

                            <a class="nav-link " id="nav-diabetology-tab" data-toggle="tab" href="#nav-diabetology"
                                role="tab" aria-controls="nav-diabetology" aria-selected="false"
                                style="font-size: 13px;">Diabetology</a>

                            <a class="nav-link " id="nav-gastroenterology-tab" data-toggle="tab"
                                href="#nav-gastroenterology" role="tab" aria-controls="nav-gastroenterology"
                                aria-selected="false" style="font-size: 13px;">Gastroenterology</a>
                        </div>
                    </nav>

                    <div class="tab-content" style="border-top:2px solid red;" id="nav-tabContent">
                        <div class="tab-pane fade " id="nav-urology" role="tabpanel" aria-labelledby="nav-urology-tab">
                            <div class="section_title mt-5">
                                <h2>Urology</h2>
                            </div>
                            <br>
                            <p>In the time of the ancient Egyptians and Greeks, doctors frequently examined urine’s color,
                                odor, and texture. They also looked for bubbles, blood, and other signs of disease. Today,
                                an entire field of medicine focuses on the health of the urinary system. It’s called
                                urology. </p>
                            <p>Urology is the field of medicine that focuses on diseases of the urinary tract and the male
                                reproductive tract. Some urologists treat general diseases of the urinary tract. Others
                                specialize in a particular type of urology, such as:</p>
                            <ul>
                                <li>&raquo;&nbsp;female urology, which focuses on conditions of a woman’s reproductive and
                                    urinary tract</li>
                                <li>&raquo;&nbsp;male infertility, which focuses on problems that prevent a man from
                                    conceiving a baby with his partner</li>
                                <li>&raquo;&nbsp;neurourology, which focuses on urinary problems due to conditions of the
                                    nervous system</li>
                                <li>&raquo;&nbsp;pediatric urology, which focuses on urinary problems in children</li>
                                <li>&raquo;&nbsp;urologic oncology, which focuses on cancers of the urinary system,
                                    including the bladder, kidneys, prostate, and testicles</li>
                            </ul>
                            <p>The range of health conditions associated with urology is quite large and diverse, from
                                problems with urinary control to cancers. Here is a general list of conditions treated by a
                                urologist:</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <ul>
                                        <li>&raquo;&nbsp;Urinary incontinence</li>
                                        <li>&raquo;&nbsp;Urinary tract infection</li>
                                        <li>&raquo;&nbsp;Kidney stones</li>
                                        <li>&raquo;&nbsp;Bladder stones</li>
                                        <li>&raquo;&nbsp;Low testosterone</li>
                                        <li>&raquo;&nbsp;Erectile Dysfunction</li>
                                        <li>&raquo;&nbsp;Penile curvature</li>
                                        <li>&raquo;&nbsp;Male infertility</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li>&raquo;&nbsp;Prostatitis </li>
                                        <li>&raquo;&nbsp;Enlarged prostate</li>
                                        <li>&raquo;&nbsp;Blood in the urine </li>
                                        <li>&raquo;&nbsp;Overactive bladder</li>
                                        <li>&raquo;&nbsp;Pelvic Organ Prolapse</li>
                                        <li>&raquo;&nbsp;Premature ejaculation</li>
                                        <li>&raquo;&nbsp;Prostate cancer</li>
                                        <li>&raquo;&nbsp;Kidney cancer</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li>&raquo;&nbsp;Kidney cysts</li>
                                        <li>&raquo;&nbsp;Testicular cancer</li>
                                        <li>&raquo;&nbsp;Penile cancer</li>
                                        <li>&raquo;&nbsp;Bladder cancer</li>
                                        <li>&raquo;&nbsp;Elevated PSA</li>
                                        <li>&raquo;&nbsp;Urgent urination</li>
                                        <li>&raquo;&nbsp;Interstitial Cystitis</li>
                                        <li>&raquo;&nbsp;Ureteral stones</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-paedology" role="tabpanel" aria-labelledby="nav-paedology-tab">
                            <div class="section_title mt-5">
                                <h2>Paedology</h2>
                            </div>
                        </div>

                        <div class="tab-pane fade " id="nav-cardiology" role="tabpanel"
                            aria-labelledby="nav-cardiology-tab">
                            <div class="section_title mt-5">
                                <h2>Cardiology</h2>
                            </div>
                            <p>The term cardiology is derived from the Greek words “cardia,” which refers to the heart and
                                “logy” meaning “study of.” Cardiology is a branch of medicine that concerns diseases and
                                disorders of the heart, which may range from congenital defects through to acquired heart
                                diseases such as coronary artery disease and congestive heart failure.</p>
                            <p>The range of health conditions associated with urology :-</p>
                            <ul>
                                <li>&raquo;&nbsp;Heart Disease</li>
                                <li>&raquo;&nbsp;Heart Attack </li>
                                <li>&raquo;&nbsp;Stroke</li>
                                <li>&raquo;&nbsp;Heart Failure</li>
                                <li>&raquo;&nbsp;Arrhythmia</li>
                                <li>&raquo;&nbsp;Heart Valve Problem</li>
                            </ul>
                        </div>


                        <div class="tab-pane fade in show active" id="nav-gynaecology" role="tabpanel"
                            aria-labelledby="nav-gynaecology-tab">
                            <div class="section_title mt-5">
                                <h2>Gynaecology</h2>
                            </div>
                            <p>Gynecology and obstetrics are twin subjects that deal with the female reproductive system.
                                While obstetrics deals with pregnancy and its associated procedures and complications,
                                gynaecology involves treating women who are not pregnant. Gynecology comprises of both
                                medicine as well as surgical fields. While many of the gynaecological illnesses need
                                hormonal and other pharmacological management, cancers, fibroids etc. require surgical
                                removal.</p>
                            <p>Range of diagnostic and therapeutic procedures done by Gynecologist are :-</p>
                            <ul>
                                <li>&raquo;&nbsp;Hysterectomy or removal of the uterus</li>
                                <li>&raquo;&nbsp;Ovary removal</li>
                                <li>&raquo;&nbsp;Removal of fallopian tubes during surgery</li>
                                <li>&raquo;&nbsp;Taking cone biopsies from the inner walls of the uterus if cancer of the
                                    womb is suspected</li>
                                <li>&raquo;&nbsp;Taking biopsy or tissue samples from the cervix, if cancer is suspected
                                </li>
                                <li>&raquo;&nbsp;Ultrasound examination of the reproductive organs</li>
                                <li>&raquo;&nbsp;Laparoscopy or visualizing the inner abdominal organs of the female
                                    reproductive system and diagnosis and removal of cysts and infections from the ovaries
                                    and fallopian tubes</li>
                                <li>&raquo;&nbsp;Removal of uterus fibroids</li>
                                <li>&raquo;&nbsp;Diagnosis and treatment of sexually transmitted infections</li>
                                <li>&raquo;&nbsp;Diagnosis and treatment of urinary incontinence</li>
                                <li>&raquo;&nbsp;Diagnosis problems with menstruation like absence, heavy bleeding,
                                    irregular or no-onset of menstruation etc.</li>
                                <li>&raquo;&nbsp;Diagnosis and treatment of cancers of cervix, vagina, vulva, uterus or
                                    ovary.</li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="nav-dermatology" role="tabpanel"
                            aria-labelledby="nav-dermatology-tab">
                            <div class="section_title mt-5">
                                <h2>Dermatology</h2>
                            </div>
                            <p>The root word for dermatology is derm, or dermis. This comes from the Greek word derma, which
                                means skin or hide. Dermatology involves the study, research, diagnosis, and management of
                                any health conditions that may affect the skin, fat hair, nails, and membranes. The skin is
                                the largest organ of the body, which acts as a barrier to protect the internal organs from
                                injury and bacteria. It is also a good indicator of the overall health of the body, making
                                the field of dermatology important in the diagnosis and management of many health
                                conditions.</p>
                            <ul>
                                <li>&raquo;&nbsp;Acne: pimples on the skin due to inflammation of the sebaceous glands</li>
                                <li>&raquo;&nbsp;Dermatitis: red, swollen and sore skin caused by irritation or allergy</li>
                                <li>&raquo;&nbsp;Eczema: rough and inflamed skin that is itchy and may bleed</li>
                                <li>&raquo;&nbsp;Psoriasis: itchy, red, scaly patches on the skin</li>
                                <li>&raquo;&nbsp;Fungal infections: infection of the skin or nails caused by a fungus</li>
                                <li>&raquo;&nbsp;Warts: small hard growth on the skin caused by a virus</li>
                                <li>&raquo;&nbsp;Cold sore: inflamed blister near the mouth caused by herpes simplex virus
                                </li>
                                <li>&raquo;&nbsp;Skin cancer: uncontrolled growth of skin cells</li>
                            </ul>
                        </div>


                        <div class="tab-pane fade" id="nav-diabetology" role="tabpanel"
                            aria-labelledby="nav-diabetology-tab">
                            <div class="section_title mt-5">
                                <h2>Diabetology</h2>
                            </div>
                            <p>Diabetology is the clinical science of diabetes mellitus, its diagnosis, treatment and
                                follow-up. A diabetologist is a doctor who specialises in the treatment of diabetes.</p>
                            <p>Following are the conditions which diabetologists treat</p>
                            <ul>
                                <li>&raquo;&nbsp;Diabetes Type I</li>
                                <li>&raquo;&nbsp;Diabetes Type II</li>
                                <li>&raquo;&nbsp;Complications of diabetes</li>
                            </ul>
                        </div>


                        <div class="tab-pane fade" id="nav-gastroenterology" role="tabpanel"
                            aria-labelledby="nav-gastroenterology-tab">
                            <div class="section_title mt-5">
                                <h2>Gastroenterology </h2>
                            </div>
                            <p>Gastroenterology is the study of the normal function and diseases of the esophagus, stomach,
                                small intestine, colon and rectum, pancreas, gallbladder, bile ducts and liver. It involves
                                a detailed understanding of the normal action (physiology) of the gastrointestinal organs
                                including the movement of material through the stomach and intestine (motility), the
                                digestion and absorption of nutrients into the body, removal of waste from the system, and
                                the function of the liver as a digestive organ. It includes common and important conditions
                                such as colon polyps and cancer, hepatitis, gastroesophageal reflux (heartburn), peptic
                                ulcer disease, colitis, gallbladder and biliary tract disease, nutritional problems,
                                Irritable Bowel Syndrome (IBS), and pancreatitis. In essence, all normal activity and
                                disease of the digestive organs is part of the study of Gastroenterology.</p>
                            <p>The range of health conditions associated with Gastroenterology</p>
                            <ul>
                                <li>&raquo;&nbsp;Constipation</li>
                                <li>&raquo;&nbsp;Irritable bowel syndrome (IBS)</li>
                                <li>&raquo;&nbsp;Hemorrhoids</li>
                                <li>&raquo;&nbsp;Internal hemorrhoids</li>
                                <li>&raquo;&nbsp;External hemorrhoids</li>
                                <li>&raquo;&nbsp;Anal fissures</li>
                                <li>&raquo;&nbsp;Perianal abscesses</li>
                                <li>&raquo;&nbsp;Anal fistula</li>
                                <li>&raquo;&nbsp;Colon polyps and cancer</li>
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
