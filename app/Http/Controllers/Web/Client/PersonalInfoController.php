<?php

namespace App\Http\Controllers\Web\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StorePersonalInfoRequest;
use App\Http\Requests\Client\UpdatePersonalInfoRequest;
use App\Models\ProfileInformation;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    public function store(StorePersonalInfoRequest $request)
    {
        // dd($request->all());
        // validated data
        $data = $request->validated();

        // Insert new personalinfo
        $personalinfo                                = new ProfileInformation;
        $personalinfo->first_name                     = $data['first_name'];
        $personalinfo->middle_name                     = $data['middle_name'];
        $personalinfo->surname                     = $data['surname'];
        $personalinfo->extension                     = $data['extension'];
        $personalinfo->birthday                     = $data['birthday'];
        $personalinfo->birthplace                     = $data['birthplace'];
        $personalinfo->sex                     = $data['sex'];
        $personalinfo->civil_status                     = $data['civil_status'];
        $personalinfo->other_civil_status                     = $data['other_civil_status'];
        $personalinfo->height                     = $data['height'];
        $personalinfo->weight                     = $data['weight'];
        $personalinfo->blood_type                     = $data['blood_type'];
        $personalinfo->gsis_id                     = $data['gsis_id'];
        $personalinfo->pagibig_id                     = $data['pagibig_id'];
        $personalinfo->sss_id                     = $data['sss_id'];
        $personalinfo->philhealth_id                     = $data['philhealth_id'];
        $personalinfo->tin                     = $data['tin'];
        $personalinfo->agency_id                     = $data['agency_id'];
        $personalinfo->citizenship1 = $data['citizenship1'];
        $personalinfo->citizenship2 = $data['citizenship2'];
        $personalinfo->citizenship3                     = $data['citizenship3'];
        $personalinfo->res_house                     = $data['res_house'];
        $personalinfo->res_street                     = $data['res_street'];
        $personalinfo->res_subdivision                     = $data['res_subdivision'];
        $personalinfo->res_barangay                     = $data['res_barangay'];
        $personalinfo->res_municipality                     = $data['res_municipality'];
        $personalinfo->res_province                     = $data['res_province'];
        $personalinfo->res_zipcode                     = $data['res_zipcode'];
        $personalinfo->per_house                     = $data['per_house'];
        $personalinfo->per_street                     = $data['per_street'];
        $personalinfo->per_subdivision                     = $data['per_subdivision'];
        $personalinfo->per_barangay                     = $data['per_barangay'];
        $personalinfo->per_municipality                     = $data['per_municipality'];
        $personalinfo->per_province                     = $data['per_province'];
        $personalinfo->per_zipcode                     = $data['per_zipcode'];
        $personalinfo->save();



        // redirection
        return redirect()->route('personal-info.index');
    }

    public function index()
    {
    //     $personalinfo = ProfileInformation::all();

        return view('personalinfo.index');
    }

    public function update(UpdatePersonalInfoRequest $request, ProfileInformation $personalinfo)
    {
        $data = $request->validated();

        $personalinfo->first_name                     = $data['first_name'];
        $personalinfo->middle_name                     = $data['middle_name'];
        $personalinfo->surname                     = $data['surname'];
        $personalinfo->extension                     = $data['extension'];
        $personalinfo->birthday                     = $data['birthday'];
        $personalinfo->birthplace                     = $data['birthplace'];
        $personalinfo->sex                     = $data['sex'];
        $personalinfo->civil_status                     = $data['civil_status'];
        $personalinfo->other_civil_status                     = $data['other_civil_status'];
        $personalinfo->height                     = $data['height'];
        $personalinfo->weight                     = $data['weight'];
        $personalinfo->blood_type                     = $data['blood_type'];
        $personalinfo->gsis_id                     = $data['gsis_id'];
        $personalinfo->pagibig_id                     = $data['pagibig_id'];
        $personalinfo->sss_id                     = $data['sss_id'];
        $personalinfo->philhealth_id                     = $data['philhealth_id'];
        $personalinfo->tin                     = $data['tin'];
        $personalinfo->agency_id                     = $data['agency_id'];
        $personalinfo->citizenship1 = $data['citizenship1'];
        $personalinfo->citizenship2 = $data['citizenship2'];
        $personalinfo->citizenship3                     = $data['citizenship3'];
        $personalinfo->res_house                     = $data['res_house'];
        $personalinfo->res_street                     = $data['res_street'];
        $personalinfo->res_subdivision                     = $data['res_subdivision'];
        $personalinfo->res_barangay                     = $data['res_barangay'];
        $personalinfo->res_municipality                     = $data['res_municipality'];
        $personalinfo->res_province                     = $data['res_province'];
        $personalinfo->res_zipcode                     = $data['res_zipcode'];
        $personalinfo->per_house                     = $data['per_house'];
        $personalinfo->per_street                     = $data['per_street'];
        $personalinfo->per_subdivision                     = $data['per_subdivision'];
        $personalinfo->per_barangay                     = $data['per_barangay'];
        $personalinfo->per_municipality                     = $data['per_municipality'];
        $personalinfo->per_province                     = $data['per_province'];
        $personalinfo->per_zipcode                     = $data['per_zipcode'];
        $personalinfo->save();
    }
}
