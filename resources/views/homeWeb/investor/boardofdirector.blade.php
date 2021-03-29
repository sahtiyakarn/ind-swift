@extends('homeWeb/base')
@section('title')
    Board of Director
    {{-- {{ $data['title'] }} --}}
@endsection
@section('description')
    {{-- {{ $data->description }} --}}
@endsection
@section('keyword')
    {{-- {{ $data->keyword }} --}}
@endsection
@section('customcss')
    {{-- <link rel="stylesheet" href="{{ $data->canonical }}"> --}}
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
    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll"
            data-image-src="{{ asset('assets/images/about.jpg') }}" data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title">About <span>IND-Swift</span></div>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li>About Ind-Swift</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->
    <div class="about" style="padding-top:40px;">
        <div class="container-fluid">
            <div class="row">
                <!-- About Content -->
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Company Announcements</h3>
                        </div>
                    </div>
                    <hr>
                    <br>

                    <!--*********************vertical nav pill ********************-->


                    <div class="row">
                        <div class="col-3">
                            <div class="nav flex-column nav-pills" aria-orientation="vertical">
                                <a class="nav-link active" href="/boardofdirector">Board of Director</a>
                                <a class="nav-link" href="/board_meetings">Board Meeting</a>
                                <a class="nav-link" href="/agm">AGM Notic</a>
                                <a class="nav-link" href="/egm">EGM Notic</a>
                                <a class="nav-link" href="/general_meeting_transcripts">General Meeting Transcripts</a>
                                <a class="nav-link" href="/transfer_of_share_to_iepf">Tranfer of Shares to IEPF</a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                @foreach ($data as $item)
                                    <div class="col-lg-4 mb-4">
                                        <div class="card service">
                                            <div class="card-header text-center">
                                                <img src="{{ asset('assets/boardofdirector/' . $item->photo) }}"
                                                    class="rounded-circle" height="100px;" alt="">
                                            </div>
                                            <div class="card-body text-center">
                                                <p class="card-text font-weight-bold">{{ $item->name }}</p>
                                                <p class="card-text">{{ $item->designtion }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-1"></div>

            </div>
        </div>
    </div>


@endsection
