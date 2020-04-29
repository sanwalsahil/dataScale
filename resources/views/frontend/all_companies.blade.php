@extends('layouts.main')

@section('content')
<?php
$subtext = ['fa-map-marker'=>'location']
?>
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
                    <x-frontend.lists :data="$data" :subtext="$subtext" nameRedirect="companyDetails" action1Redirect="companyDetails"/>
                    <div class="row">
                        <div class="col-lg-12">
                            {{$data->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- job_listing_area_end  -->
@endsection
