<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="slider_text">
                        {{$slot}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
        <img src="{{$bgUrl}}" alt="">
    </div>
</div>
