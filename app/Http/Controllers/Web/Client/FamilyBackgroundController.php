<?php

namespace App\Http\Controllers\Web\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\UpdateFamilyBackgroundRequest;
use App\Models\FamilyBackground;
use App\Models\ProfileInformation;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FamilyBackgroundController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateFamilyBackgroundRequest $request, ProfileInformation $personalinfo)
    {

        $data = $request->validated();
        $familybackground = new FamilyBackground();
        $familybackground->profile_information_id = $personalinfo->id;
        $familybackground->spouse_first_name = $data['spouse_first_name'];
        $familybackground->spouse_middle_name = $data['spouse_middle_name'];
        $familybackground->spouse_last_name = $data['spouse_last_name'];
        $familybackground->spouse_name_extension = $data['spouse_name_extension'];
        $familybackground->occupation = $data['occupation'];
        $familybackground->employer = $data['employer'];
        $familybackground->business_address = $data['business_address'];
        $familybackground->telephone = $data['telephone'];
        $familybackground->father_first_name = $data['father_first_name'];
        $familybackground->father_middle_name = $data['father_middle_name'];
        $familybackground->father_last_name = $data['father_last_name'];
        $familybackground->father_name_extension = $data['father_name_extension'];
        $familybackground->mother_first_name = $data['mother_first_name'];
        $familybackground->mother_middle_name = $data['mother_middle_name'];
        $familybackground->mother_last_name = $data['mother_last_name'];
        $familybackground->maiden_name = $data['maiden_name'];
        $familybackground->save($data);
        Alert::toast('Family Background Saved!', 'success');

        return back();
    }
}
