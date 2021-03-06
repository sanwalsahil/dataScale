<?php

namespace App\Http\Controllers;

use App\CompanyDetail;
use App\CompanyContactNumber;
use App\CompanyContactEmail;
use Auth;
use App\State;
use App\City;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CompanyDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        //
        $companies = CompanyDetail::paginate(15);
        //dd($companies->links());
        return view('frontend.all_companies',['data'=>$companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $states = State::all();
        $cities = City::all();
        return view('frontend.company.register',['states'=>$states,'cities'=>$cities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->input('number'));

        if($file = $request->file('logo')){
            $path = $file->store('public/frontend/company_images/logo');
            $path = str_replace('public/','',$path);
        }else{
            $path = 'frontend/company_images/logo/default-logo.png';
        }

        $validationData = $request->validate([
            'name'=>'required',
            'address1'=>'required',
            'city_id'=>'required|numeric',
            'state_id'=>'required|numeric',
            'zip'=>'required|numeric',
            'number'=>'required|numeric',
            'email'=>'required|email',
            'description'=>'required'
        ],[
            'name.required'=>'Company Name is Required',
            'address1.required'=>'At Least One Address Line Needs To Be Mentioned',
            'city_id.required'=>'Please Select City Where Your Company Is Located',
            'state_id.required'=>'Please Select State Where Your Company Is Located',
            'zip.required'=>'Please Enter Zip Postal Code Of Location',
            'number.required'=>'Please Enter Contact Number',
            'description.required'=>'Please Enter Company Description',
            'email.required'=>'Please Enter Email Address',
            'zip.numeric'=>'Zip Postal Code Must Be Numeric',
            'number.numeric'=>'Contact Number Must Be Numeric',
            'email.email'=>'Please Enter Email In Correct Format'
        ]);
        DB::beginTransaction();
        try{
            $company = new CompanyDetail();
            $company->name = $request->input('name');
            $company->address1 = $request->input('address1');
            $company->address2 = $request->input('address2');
            $company->address3 = $request->input('address3');
            $company->city_id = $request->input('city_id');
            $company->state_id = $request->input('state_id');
            $company->zip = $request->input('zip');
            $company->user_id = Auth::user()->id;
            $company->description = $request->input('description');
            $company->logo_path = $path;
            $company->website = $request->input('website');
            $company->save();

            $number = new CompanyContactNumber();
            $number->number = $request->input('number');
            $company->CompanyContactNumbers()->save($number);

            $email = new CompanyContactEmail();
            $email->email = $request->input('email');
            $company->CompanyContactEmails()->save($email);
            DB::commit();

            return redirect(url('/companyDetails/'.$company->id))->with('status', 'Company Added Successfully !');
        }catch(\Exception $e){
            DB::rollback();
            return redirect(url('/'));
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CompanyDetail  $companyDetail
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyDetail $companyDetail)
    {
        //
        echo $companyDetail;die;
    }


    public function showDetail($id)
    {
        //
        $company = CompanyDetail::findorfail($id);
        //dd($company);
        return view('frontend.company_details',['company'=>$company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CompanyDetail  $companyDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyDetail $companyDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CompanyDetail  $companyDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyDetail $companyDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CompanyDetail  $companyDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyDetail $companyDetail)
    {
        //
    }
}
