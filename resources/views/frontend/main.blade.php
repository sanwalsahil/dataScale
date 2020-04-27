@extends('layouts.main')

@section('content')
    <x-frontend.banner1 :bgUrl="asset('frontend/img/banner/illustration.png')">
        <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Get connected with DataScale Today</h5>
        <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Data Is Power</h3>
        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Get connected to Scale Data for others or find someone to scale your data</p>
        <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
            <a href="@if(Auth::check()){{url('/postRequirement')}}@else{{url('/login')}}@endif" class="boxed-btn3">Post A Requirement</a>
            <a href="@if(Auth::check()){{url('/registerCompanies')}}@else{{url('/login')}}@endif" class="boxed-btn3">Register Company</a>
        </div>
    </x-frontend.banner1>


<!-- catagory_area -->
    <?php $popular=['Sales','Marketing','Administrative','Design','Architechture'];
    $dropdowns = [
        [
            'name'=>'Locations',
            'options'=>['delhi','chandigarh','pune','mumbai'],
        ],
        [
            'name'=>'Categories',
            'options'=>['Data Analysis','Data Scientist','Data','Tech Support'],
        ],
    ];
    ?>
    <x-frontend.searchBar :popular="$popular" :dropdowns="$dropdowns"/>

<!--/ catagory_area -->

<!-- popular_catagory_area_start  -->
    <?php
    $categories = [
        ['heading'=>'Design and Mareting','text'=>'positions available'],
        ['heading'=>'Administration','text'=>'positions available'],
        ['heading'=>'Sales','text'=>'positions available'],
        ['heading'=>'Tech Support','text'=>'positions available'],
        ['heading'=>'Management','text'=>'positions available'],
        ['heading'=>'Design and Mareting','text'=>'positions available'],
        ['heading'=>'Administration','text'=>'positions available'],
        ['heading'=>'Sales','text'=>'positions available'],

    ];
    ?>
<div class="popular_catagory_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title mb-40">
                    <h3>Popolar Categories</h3>
                </div>
            </div>
        </div>
        <x-frontend.boxDisplay :categories="$categories"/>
    </div>
</div>
<!-- popular_catagory_area_end  -->

<!-- job_listing_area_start  -->
<div class="job_listing_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section_title">
                    <h3>Job Listing</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="brouse_job text-right">
                    <a href="jobs.html" class="boxed-btn4">Browse More Job</a>
                </div>
            </div>
        </div>
    <x-frontend.lists />
    </div>
</div>
<!-- job_listing_area_end  -->

<!-- featured_candidates_area_start  -->
<div class="featured_candidates_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-40">
                    <h3>Featured Candidates</h3>
                </div>
            </div>
        </div>
    <x-frontend.horizontalCatScroll />
    </div>
</div>
<!-- featured_candidates_area_end  -->
<?php
$categories = [
    ['heading'=>'Design and Mareting','text'=>'positions available'],
    ['heading'=>'Administration','text'=>'positions available'],
    ['heading'=>'Sales','text'=>'positions available'],
    ['heading'=>'Tech Support','text'=>'positions available'],
    ['heading'=>'Management','text'=>'positions available'],
    ['heading'=>'Design and Mareting','text'=>'positions available'],
    ['heading'=>'Administration','text'=>'positions available'],
    ['heading'=>'Sales','text'=>'positions available'],

];

?>
<div class="top_companies_area popular_catagory_area">
    <div class="container">
        <div class="row align-items-center mb-40">
            <div class="col-lg-6 col-md-6">
                <div class="section_title">
                    <h3>Top Companies</h3>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="brouse_job text-right">
                    <a href="jobs.html" class="boxed-btn4">Browse More Job</a>
                </div>
            </div>
        </div>
        <x-frontend.boxDisplay :categories="$categories"/>
    </div>
</div>

<!-- job_searcing_wrap  -->
<div class="job_searcing_wrap overlay ">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 col-md-6">
                <div class="searching_text">
                    <h3>Realise Potential Of Data?</h3>
                    <p>Get connected to Scale Data for others or find someone to scale your data </p>
                    <a href="#" class="boxed-btn3">Browse Job</a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-6">
                <div class="searching_text">
                    <h3>Looking for a Expert?</h3>
                    <p>We provide online instant cash loans with quick approval </p>
                    <a href="#" class="boxed-btn3">Post a Requirement</a>
                    <a href="#" class="boxed-btn3">Register You Company</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- job_searcing_wrap end  -->

<!-- testimonial_area  -->
<div class="testimonial_area  ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-40">
                    <h3>Testimonial</h3>
                </div>
            </div>
            <div class="col-xl-12">
                <x-frontend.quoteScroll />
            </div>
        </div>
    </div>
</div>
<!-- /testimonial_area  -->

@endsection
