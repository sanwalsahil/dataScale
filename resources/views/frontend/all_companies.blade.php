@extends('layouts.main')

@section('content')
<!-- bradcam_area  -->
<x-frontend.Banner2 message="Let's Scale Your Data" />

<!--/ bradcam_area  -->

<!-- job_listing_area_start  -->
<div class="job_listing_area plus_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <x-frontend.leftFilter />
            </div>
            <div class="col-lg-9">
                <div class="recent_joblist_wrap">
                    <x-frontend.topFilter />
                </div>

                <div class="job_lists m-0">
                    <x-frontend.lists/>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pagination_wrap">
                                <ul>
                                    <li><a href="#"> <i class="ti-angle-left"></i> </a></li>
                                    <li><a href="#"><span>01</span></a></li>
                                    <li><a href="#"><span>02</span></a></li>
                                    <li><a href="#"> <i class="ti-angle-right"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- job_listing_area_end  -->
@endsection
