<div class="row">
    @foreach($categories as $category)
        <div class="col-lg-4 col-xl-3 col-md-6">
            <div class="single_catagory">
                <a href="jobs.html"><h4>{{$category['heading']}}</h4></a>
                <p> <span>50</span>{{$category['text']}}</p>
            </div>
        </div>
    @endforeach

</div>
