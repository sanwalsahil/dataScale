@extends('layouts.main')

@section('content')
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



                        <form action="" method="post">
                            @csrf
                            <div class="row">
                            <div class="col-md-6">
                                <div class="mt-10">
                                    <input type="text" name="name" placeholder="Company Name"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Name'" required
                                           class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="address1" placeholder="Address line 1"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address line 1'" required
                                           class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="address1" placeholder="Address line 2"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address line 2'" required
                                           class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="address1" placeholder="Address line 3"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address line 3'" required
                                           class="single-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-10">
                                    <input type="text" name="name" placeholder="Contact Number"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Number'" required
                                           class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="name" placeholder="Contact Email"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Email'" required
                                           class="single-input">
                                </div>
                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                    <div class="form-select" id="default-select"">
                                    <select>
                                        <option value=" 1">City</option>
                                        <option value="1">Dhaka</option>
                                        <option value="1">Dilli</option>
                                        <option value="1">Newyork</option>
                                        <option value="1">Islamabad</option>
                                    </select>
                                </div>
                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                    <div class="form-select" id="default-select"">
                                    <select>
                                        <option value=" 1">State</option>
                                        <option value="1">Dhaka</option>
                                        <option value="1">Dilli</option>
                                        <option value="1">Newyork</option>
                                        <option value="1">Islamabad</option>
                                    </select>
                                </div>
                            </div>
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
