@extends('layouts.main')
@section('content')
<!-- bradcam_area  -->
<x-frontend.Banner2 message="Company Details" />
<!--/ bradcam_area  -->

<div class="job_details_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="job_details_header">
                    <div class="single_jobs white-bg d-flex justify-content-between">
                        <div class="jobs_left d-flex align-items-center">
                            <div class="thumb">
                                <img src="{{asset('frontend/img/svg_icon/1.svg')}}" alt="">
                            </div>
                            <div class="jobs_conetent">
                                <a href="#"><h4>{{$company->name}}</h4></a>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p> <i class="fa fa-map-marker"></i>{{$company->City->city_name}},{{$company->states->name}},{{$company->zip}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="descript_wrap white-bg">
                    <div class="single_wrap">
                        <h4>About {{$company->name}}</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                        <p>Variations of passages of lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                    </div>



                </div>

            </div>
            <div class="col-lg-4">
                <div class="job_sumary">
                    <div class="summery_header">
                        <h3>Contact Details</h3>
                    </div>
                    <div class="job_content">
                        <ul>
                            <li>Phone Numbers: <br>
                                @foreach($company->CompanyContactNumbers as $number)
                                <span>{{$number->number}}</span>
                                @endforeach
                            </li>
                            <li>Email Contact: <br>
                                @foreach($company->CompanyContactEmails as $email)
                                    <span>{{$email->email}}</span>
                                @endforeach
                            <li>Address: <br>
                                @if(isset($company->address1))<span>{{$company->address1}}</span><br>@endif
                                @if(isset($company->address2))<span>{{$company->address2}}</span><br>@endif
                                @if(isset($company->address3))<span>{{$company->address3}}</span><br>@endif
                                <span>{{$company->City->city_name}}</span><br>
                                <span>{{$company->states->name}}</span><br>
                                <span>{{$company->zip}}</span><br>

                            </li>
                            <li>Registered User: <br>
                                <span>{{$company->User->name}}</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
