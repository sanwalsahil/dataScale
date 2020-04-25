<div class="catagory_area">
    <div class="container">
        <div class="row cat_search">
            <div class="col-lg-3 col-md-4">
                <div class="single_input">
                    <input type="text" placeholder="Search keyword">
                </div>
            </div>
            @foreach($dropdowns as $dropdown)
                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <select class="wide" >
                            <option data-display="{{$dropdown['name']}}">{{$dropdown['name']}}</option>
                            @foreach($dropdown['options'] as $value=>$option)
                            <option value="{{$value}}">{{$option}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            @endforeach
            <div class="col-lg-3 col-md-12">
                <div class="job_btn">
                    <a href="#" class="boxed-btn3">Find Job</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="popular_search d-flex align-items-center">
                    <span>Popular Search:</span>
                    <ul>
                        @foreach($popular as $term)
                            <li><a href="#">{{$term}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
