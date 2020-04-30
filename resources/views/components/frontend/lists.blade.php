<div class="job_lists">
    <div class="row">
        @foreach($data as $row)
            <div class="col-lg-12 col-md-12">
                <div class="single_jobs white-bg d-flex justify-content-between">
                    <div class="jobs_left d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?php echo url('storage/'.$row->logo_path) ?>" style="width:100%" alt="">
                        </div>
                        <div class="jobs_conetent">
                            <a href="<?php echo url('/'.$nameRedirect.'/'.$row->id) ?>"><h4>{{$row->name}}</h4></a>
                            <div class="links_locat d-flex align-items-center">
                                @if(!empty($subtext))
                                    @foreach($subtext  as $marker=>$purpose)
                                        <div class="location">
                                            <p> <i class="fa {{$marker}}"></i>
                                                @if($purpose=='location')
                                                    {{$row->City->city_name}},{{$row->states->name}},{{$row->zip}}
                                                @endif
                                            </p>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="jobs_right">
                        <div class="apply_now">
                            <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                            <a href="<?php echo url('/'.$action1Redirect.'/'.$row->id) ?>" class="boxed-btn3">Know More</a>
                        </div>
                        <div class="date">
                            <p>Date line: 31 Jan 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
</div>
