@extends('layouts.main')

@section('content')
    <style>
        .nice-select ul{
            height:200px;
            overflow-y: scroll !important;
        }
    </style>
    <!-- bradcam_area  -->
    <x-frontend.Banner2 message="Add Company" />

    <!-- form section -->
    <div class="job_details_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="job_details_header">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="jobs_conetent">
                                    <h4>Add Company</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- form -->
                    <div class="descript_wrap white-bg">



                        <form action="{{url('/saveCompany')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-md-6">
                                <div class="mt-10">
                                    <input type="text" name="name" placeholder="Company Name"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Name'"
                                           class="single-input">
                                    @error('name')
                                    <div class="alert-danger" style="background-color:white;padding-left:10px">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="address1" placeholder="Address line 1"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address line 1'"
                                           class="single-input">
                                    @error('address1')
                                    <div class="alert-danger" style="background-color:white;padding-left:10px">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="address2" placeholder="Address line 2"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address line 2'"
                                           class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="address3" placeholder="Address line 3"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address line 3'"
                                           class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="zip" placeholder="Zip Code"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zip Code'"
                                           class="single-input">
                                    @error('zip')
                                    <div class="alert-danger" style="background-color:white;padding-left:10px">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-10">
								<textarea name="description" class="single-textarea" placeholder="Company Description" onfocus="this.placeholder = ''"
                                          onblur="this.placeholder = 'Company Description'" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-10">
                                    <input type="text" name="number" placeholder="Contact Number"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Number'"
                                           class="single-input">
                                    @error('number')
                                    <div class="alert-danger" style="background-color:white;padding-left:10px">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="email" placeholder="Contact Email"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Email'"
                                           class="single-input">
                                    @error('email')
                                    <div class="alert-danger" style="background-color:white;padding-left:10px">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                    <div class="form-select" id="default-select">
                                    <select name="city_id">
                                        <option value="">City</option>
                                        @foreach($cities as $city)
                                            <option value="{{$city->id}}">{{$city->city_name}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    @error('city_id')
                                    <div class="alert-danger" style="background-color:white;padding-left:10px">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                    <div class="form-select" >
                                    <select name="state_id" class="form-control">
                                        <option value="">State</option>
                                        @foreach($states as $state)
                                            <option value="{{$state->id}}">{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    @error('state_id')
                                    <div class="alert-danger" style="background-color:white;padding-left:10px">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="website" placeholder="Company Website"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Website'"
                                           class="single-input">

                                </div>
                                <div class="input-group-icon mt-10">
                                    Upload Logo : <input type="file" name="logo">
                                </div>


                            </div>
                            </div>
                            <div class="input-group-icon mt-10">
                                <input type="submit" class="btn btn-primary" style="width:100%">
                            </div>
                        </form>


                            </div>
                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
