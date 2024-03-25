<?php

namespace App\Http\Controllers\Web\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StorePersonalInfoRequest;
use App\Models\ProfileInformation;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    public function store(StorePersonalInfoRequest $request)
    {
        // dd($request->all());
        // validated data
        $data = $request->validated();

        // Insert new User
        $user                                = new ProfileInformation;
        $user->first_name                     = $data['first_name'];
        $user->middle_name                     = $data['middle_name'];
        $user->surname                     = $data['surname'];
        $user->extension                     = $data['extension'];
        $user->birthday                     = $data['birthday'];
        $user->birthplace                     = $data['birthplace'];
        $user->sex                     = $data['sex'];
        $user->civil_status                     = $data['civil_status'];
        $user->other_civil_status                     = $data['other_civil_status'];
        $user->height                     = $data['height'];
        $user->weight                     = $data['weight'];
        $user->blood_type                     = $data['blood_type'];
        $user->gsis_id                     = $data['gsis_id'];
        $user->pagibig_id                     = $data['pagibig_id'];
        $user->sss_id                     = $data['sss_id'];
        $user->philhealth_id                     = $data['philhealth_id'];
        $user->tin                     = $data['tin'];
        $user->agency_id                     = $data['agency_id'];
        $user->citizenship1 = $data['citizenship1'];
        $user->citizenship2 = $data['citizenship2'];
        $user->citizenship3                     = $data['citizenship3'];
        $user->res_house                     = $data['res_house'];
        $user->res_street                     = $data['res_street'];
        $user->res_subdivision                     = $data['res_subdivision'];
        $user->res_barangay                     = $data['res_barangay'];
        $user->res_municipality                     = $data['res_municipality'];
        $user->res_province                     = $data['res_province'];
        $user->res_zipcode                     = $data['res_zipcode'];
        $user->per_house                     = $data['per_house'];
        $user->per_street                     = $data['per_street'];
        $user->per_subdivision                     = $data['per_subdivision'];
        $user->per_barangay                     = $data['per_barangay'];
        $user->per_municipality                     = $data['per_municipality'];
        $user->per_province                     = $data['per_province'];
        $user->per_zipcode                     = $data['per_zipcode'];
        $user->save();



        // redirection
        return redirect()->route('users.index');
    }
}
