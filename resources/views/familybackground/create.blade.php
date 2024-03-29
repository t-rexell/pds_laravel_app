<div class="tab-pane fade" id="tabs-family-background" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="row">
        <div class="col-12 col-xl-12">

            <div class="card card-body border-0 shadow mb-4">
                <h1 class="h5 mb-3" style="text-align: center"><b>Family background</b></h1>
                <div class="alert alert-warning" role="alert" style="padding: 10px">
                    <p style="font-size: 14px; padding: 0%">
                        Any misrepresentation made in the Personal Data Sheet and the Work Experience
                        Sheet
                        shall cause the filing of administrative/criminal case/s against the person
                        concerned.
                        Print legibly. Tick appropriate boxes, and
                        indicate N/A if not applicable. DO NOT ABBREVIATE.
                    </p>
                </div>

                <form method="POST" action="{{ route('personal-info.store') }}">
                    @csrf
                    @method('POST')

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group mb-3">
                                <label for="first_name">First Name
                                    <x-asterisks />
                                </label>
                                <input type="text" id="first_name" name="first_name"
                                    class="form-control @error('first_name') is-invalid @enderror"
                                    placeholder="First Name" value="{{ old('first_name') }}">
                                @error('first_name')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group mb-3">
                                <label for="middle_name">Middle Name <em>(If any)</em></label>
                                <input type="text" id="middle_name" name="middle_name"
                                    class="form-control @error('middle_name') is-invalid @enderror"
                                    placeholder="Middle Name" value="{{ old('middle_name') }}">
                                @error('middle_name')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group mb-3">
                                <label for="surname">Surname
                                    <x-asterisks />
                                </label>
                                <input type="text" id="surname" name="surname"
                                    class="form-control @error('surname') is-invalid @enderror" placeholder="Surname"
                                    value="{{ old('surname') }}">
                                @error('surname')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group mb-3">
                                <label for="extension">Name Extension <em>(Jr, Sr, etc.)</em>
                                    <x-asterisks />
                                </label>
                                <input type="text" id="extension" name="extension"
                                    class="form-control @error('extension') is-invalid @enderror"
                                    placeholder="Name Extension" value="{{ old('extension') }}">
                                @error('extension')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="birthday">Date of Birth
                                    <x-asterisks />
                                </label>
                                <div class="input-group"><span class="input-group-text"><svg class="icon icon-xs"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg> </span><input data-datepicker="" class="form-control datepicker-input"
                                        id="birthday" type="text" placeholder="dd/mm/yyyy" required="" name="birthday">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label for="birthplace">Place of Birth
                                    <x-asterisks />
                                </label>
                                <input type="text" id="birthplace" name="birthplace"
                                    class="form-control @error('birthplace') is-invalid @enderror"
                                    placeholder="Place of Birth" value="{{ old('birthplace') }}">
                                @error('birthplace')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-2"><label for="sex">Sex
                                <x-asterisks />
                            </label> <select class="form-select mb-0" id="sex" aria-label="sex select example"
                                name="sex">
                                {{-- <option selected="selected">Sex</option> --}}
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="civil_status">Civil Status
                                <x-asterisks />
                            </label>
                            <select class="form-select mb-0" id="civil_status" aria-label="civil_status select example"
                                name="civil_status">
                                {{-- <option selected="selected">Sex</option> --}}
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-sm-2" style="padding-top: 32px">
                            <div class="form-group mb-3">
                                <div id="other_civil_status" style="display: none;">
                                    <input type="text" id="other_civil_status" name="other_civil_status"
                                        class="form-control @error('other_civil_status') is-invalid @enderror"
                                        placeholder="Enter Other Option" value="{{ old('other_civil_status') }}">
                                    @error('other_civil_status')
                                    <x-input-error message="{{ $message }}" />
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group mb-3">
                                <label for="height">Height
                                    <x-asterisks />
                                </label>
                                <input type="text" id="height" name="height"
                                    class="form-control @error('height') is-invalid @enderror" placeholder="Height (cm)"
                                    value="{{ old('height') }}">
                                @error('height')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group mb-3">
                                <label for="weight">Weight
                                    <x-asterisks />
                                </label>
                                <input type="text" id="weight" name="weight"
                                    class="form-control @error('weight') is-invalid @enderror" placeholder="Weight (kg)"
                                    value="{{ old('weight') }}">
                                @error('weight')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="blood_type">Blood Type
                                <x-asterisks />
                            </label>
                            <select class="form-select mb-0" id="blood_type" aria-label="blood_type select example"
                                name="blood_type">
                                {{-- <option selected="selected">Sex</option> --}}
                                <option value="unknown">Unknown</option>
                                <option value="a+">A+</option>
                                <option value="a-">A-</option>
                                <option value="b+">B+</option>
                                <option value="b-">B-</option>
                                <option value="ab+">AB+</option>
                                <option value="ab-">AB-</option>
                                <option value="o+">O+</option>
                                <option value="o-">O-</option>

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group mb-3">
                                <label for="gsis_id">GSIS ID NO.
                                </label>
                                <input type="text" id="gsis_id" name="gsis_id"
                                    class="form-control @error('gsis_id') is-invalid @enderror"
                                    placeholder="GSIS ID No." value="{{ old('gsis_id') }}">
                                @error('gsis_id')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group mb-3">
                                <label for="pagibig_id">PAGIBIG ID NO.</label>
                                <input type="text" id="pagibig_id" name="pagibig_id"
                                    class="form-control @error('pagibig_id') is-invalid @enderror"
                                    placeholder="PAGIBIG ID No." value="{{ old('pagibig_id') }}">
                                @error('pagibig_id')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group mb-3">
                                <label for="philhealth_id">PHILHEALTH ID NO.</label>
                                <input type="text" id="philhealth_id" name="philhealth_id"
                                    class="form-control @error('philhealth_id') is-invalid @enderror"
                                    placeholder="PHILHEALTH ID No." value="{{ old('philhealth_id') }}">
                                @error('philhealth_id')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group mb-3">
                                <label for="sss_id">SSS NO.</label>
                                <input type="text" id="sss_id" name="sss_id"
                                    class="form-control @error('sss_id') is-invalid @enderror" placeholder="SSS No."
                                    value="{{ old('sss_id') }}">
                                @error('sss_id')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group mb-3">
                                <label for="tin">TIN</label>
                                <input type="text" id="tin" name="tin"
                                    class="form-control @error('tin') is-invalid @enderror" placeholder="TIN"
                                    value="{{ old('tin') }}">
                                @error('tin')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group mb-3">
                                <label for="agency_id" style="font-size: 15px">AGENCY EMPLOYEE
                                    NO.</label>
                                <input type="text" id="agency_id" name="agency_id"
                                    class="form-control @error('agency_id') is-invalid @enderror"
                                    placeholder="AGENCY EMPLOYEE No." value="{{ old('agency_id') }}">
                                @error('agency_id')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row" style="background-color: #d4dcf12b; padding-top: 10px; padding-bottom: 10px">
                        <div class="col-sm-4">
                            <div class="form-group mb-2">
                                <label for="citizenship"><strong>CITIZENSHIP</strong>
                                    <x-asterisks />
                                </label>
                                <div class="row" id="checkboxes">
                                    <div class="col-sm-4" id="FilipinoCheckbox">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Filipino"
                                                id="filipinoCheckbox" name="citizenship1" @error('filipinoCheckbox')
                                                is-invalid @enderror">
                                            @error('filipinoCheckbox')
                                            <x-input-error message="{{ $message }}" />
                                            @enderror
                                            <label class="form-check-label" for="defaultCheck10">
                                                Fillipino
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-check" id="DualCitizenshipCheckbox">
                                            <input class="form-check-input" type="checkbox" value="Dual Citizenship"
                                                id="DualCitizenshipCheckbox" name="citizenship1"
                                                @error('DualCitizenshipCheckbox') is-invalid @enderror">
                                            @error('DualCitizenshipCheckbox')
                                            <x-input-error message="{{ $message }}" />
                                            @enderror
                                            <label class="form-check-label" for="defaultCheck10">
                                                Dual Citizenship
                                            </label>
                                        </div>
                                    </div>
                                    @error('citizenship1')
                                    <div class="col-12">
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8" style="border-left-style: solid; padding-top: 30px">
                            <div class="row" id="checkboxes2">
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="By Birth"
                                            id="ByBirthCheckbox" name="citizenship2">
                                        <label class="form-check-label" for="defaultCheck10">
                                            By Birth
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="By Naturalization"
                                            id="ByNaturalizationCheckbox" name="citizenship2">
                                        <label class="form-check-label" for="defaultCheck10">
                                            By Naturalization
                                        </label>
                                    </div>
                                    @error('citizenship2')
                                    <div class="col-12">
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-7">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label for="country" style="display: inline-block;
                                             width: 200px;">Pls.
                                                Indicate Country:</label>
                                        </div>
                                        <div class="col-sm-7" id="country_dropdown">
                                            <select class="form-select mb-0" id="country"
                                                aria-label="civil_status select example" style="" value=""
                                                name="citizenship3">
                                                <option value="..." name="citizenship3">...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row" style="padding-top: 20px; background-color: #a6b7df74; padding-top: 10px"">
                        <div class=" col-sm-12">
                        <label for="residential_address"><strong>RESIDENTIAL ADDRESS</strong>
                            <x-asterisks />
                        </label>
                    </div>
            </div>
            <div class="row" style="background-color: #c1cadf6b;">
                <div class="col-sm-4">
                    <div class="form-floating mb-3">
                        <input type="text" id="res_house" name="res_house"
                            class="form-control @error('res_house') is-invalid @enderror"
                            placeholder="House/Block/Lot No." value="{{ old('res_house') }}">
                        <label for="floatingInput">House/Block/Lot No.</label>
                        @error('res_house')
                        <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-floating mb-3">
                        <input type="text" id="res_street" name="res_street"
                            class="form-control @error('res_street') is-invalid @enderror" placeholder="Street"
                            value="{{ old('res_street') }}">
                        <label for="floatingInput">Street</label>
                        @error('res_street')
                        <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-floating mb-3">
                        <input type="text" id="res_subdivision" name="res_subdivision"
                            class="form-control @error('res_subdivision') is-invalid @enderror"
                            placeholder="Subdivision/Village" value="{{ old('res_subdivision') }}">
                        <label for="floatingInput">Subdivision/Village</label>
                        @error('res_subdivision')
                        <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-floating mb-3">
                        <input type="text" id="res_barangay" name="res_barangay"
                            class="form-control @error('res_barangay') is-invalid @enderror" placeholder="Barangay"
                            value="{{ old('res_barangay') }}">
                        <label for="floatingInput">Barangay</label>
                        @error('res_barangay')
                        <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-floating mb-3">
                        <input type="text" id="res_municipality" name="res_municipality"
                            class="form-control @error('res_municipality') is-invalid @enderror"
                            placeholder="City/Municipality" value="{{ old('res_municipality') }}">
                        <label for="floatingInput">City/Municipality</label>
                        @error('res_municipality')
                        <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-floating mb-3">
                        <input type="text" id="res_province" name="res_province"
                            class="form-control @error('res_province') is-invalid @enderror" placeholder="Province"
                            value="{{ old('res_province') }}">
                        <label for="floatingInput">Province</label>
                        @error('res_province')
                        <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-floating mb-3">
                        <input type="text" id="res_zipcode" name="res_zipcode"
                            class="form-control @error('res_zipcode') is-invalid @enderror" placeholder="Zip Code"
                            value="{{ old('res_zipcode') }}">
                        <label for="floatingInput">Zip Code</label>
                        @error('res_zipcode')
                        <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 20px; background-color: #a6b7df74; padding-top: 10px"">
                        <div class=" col-sm-12">
                <label for="permanent_address"><strong>PERMANENT ADDRESS</strong>
                    <x-asterisks />
                </label>
            </div>
        </div>
        <div class="row" style="background-color: #c1cadf6b;">

            <div class="col-sm-4">
                <div class="form-floating mb-3">
                    <input type="text" id="per_house" name="per_house"
                        class="form-control @error('per_house') is-invalid @enderror" placeholder="House/Block/Lot No."
                        value="{{ old('per_house') }}">
                    <label for="floatingInput">House/Block/Lot No.</label>
                    @error('per_house')
                    <x-input-error message="{{ $message }}" />
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-floating mb-3">
                    <input type="text" id="per_street" name="per_street"
                        class="form-control @error('per_street') is-invalid @enderror" placeholder="Street"
                        value="{{ old('per_street') }}">
                    <label for="floatingInput">Street</label>
                    @error('per_street')
                    <x-input-error message="{{ $message }}" />
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-floating mb-3">
                    <input type="text" id="per_subdivision" name="per_subdivision"
                        class="form-control @error('per_subdivision') is-invalid @enderror"
                        placeholder="Subdivision/Village" value="{{ old('per_subdivision') }}">
                    <label for="floatingInput">Subdivision/Village</label>
                    @error('per_subdivision')
                    <x-input-error message="{{ $message }}" />
                    @enderror
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-floating mb-3">
                    <input type="text" id="per_barangay" name="per_barangay"
                        class="form-control @error('res_barangay') is-invalid @enderror" placeholder="Barangay"
                        value="{{ old('per_barangay') }}">
                    <label for="floatingInput">Barangay</label>
                    @error('per_barangay')
                    <x-input-error message="{{ $message }}" />
                    @enderror
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-floating mb-3">
                    <input type="text" id="per_municipality" name="per_municipality"
                        class="form-control @error('per_municipality') is-invalid @enderror"
                        placeholder="City/Municipality" value="{{ old('per_municipality') }}">
                    <label for="floatingInput">City/Municipaclity</label>
                    @error('per_municipality')
                    <x-input-error message="{{ $message }}" />
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-floating mb-3">
                    <input type="text" id="per_province" name="per_province"
                        class="form-control @error('per_province') is-invalid @enderror" placeholder="Province"
                        value="{{ old('per_province') }}">
                    <label for="floatingInput">Province</label>
                    @error('per_province')
                    <x-input-error message="{{ $message }}" />
                    @enderror
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-floating mb-3">
                    <input type="text" id="per_zipcode" name="per_zipcode"
                        class="form-control @error('per_zipcode') is-invalid @enderror" placeholder="Zip Code"
                        value="{{ old('per_zipcode') }}">
                    <label for="floatingInput">Zip Code</label>

                    @error('per_zipcode')
                    <x-input-error message="{{ $message }}" />
                    @enderror
                </div>
            </div>
        </div>
        <div class="mt-3">
            <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><i class="me-2 bi bi-save"></i>
                Save</button>
            <a href="{{ route('users.index') }}" class="btn btn-gray-800 mt-2 animate-up-2"><i
                    class="me-2 bi bi-back"></i>
                Back</a>
        </div>
        </form>
    </div>
</div>
</div>
</div>