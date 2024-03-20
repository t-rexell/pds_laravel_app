<x-app-layout>

    <div class="nav-wrapper position-relative mb-2">
        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-waybill" role="tablist">
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-waybill-information-tab" data-bs-toggle="tab"
                    href="#tabs-personal-information" role="tab" aria-controls="tabs-waybill-information"
                    aria-selected="true">Personal Information</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-waybill-particulars-tab" data-bs-toggle="tab"
                    href="#tabs-family-background" role="tab" aria-controls="tabs-waybill-particulars"
                    aria-selected="false">Family Background</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-waybill-conatiners-tab" data-bs-toggle="tab"
                    href="#tabs-waybill-containers" role="tab" aria-controls="tabs-waybill-containers"
                    aria-selected="false">Children</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-waybill-charges-tab" data-bs-toggle="tab"
                    href="#tabs-waybill-charges" role="tab" aria-controls="tabs-waybill-charges"
                    aria-selected="false">Educational Background</a>
            </li>
        </ul>
    </div>
    <div class="card border-0 mb-4 rounded">
        <div class="card-body p-0 card-body-bg-color-override">
            <div class="tab-content" id="tabcontent1">
                <div class="tab-pane fade" id="tabs-personal-information" role="tabpanel"
                    aria-labelledby="tabs-waybill-information-tab">
                    <div class="row">

                        <div class="col-12 col-xl-12">

                            <div class="card card-body border-0 shadow mb-4">
                                <h1 class="h5 mb-3" style="text-align: center"><b>Profile Information</b></h1>
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

                                <form method="POST" action="">
                                    @csrf
                                    @method('PUT')

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
                                                    class="form-control @error('surname') is-invalid @enderror"
                                                    placeholder="Surname" value="{{ old('surname') }}">
                                                @error('surname')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label for="name_extension">Name Extension <em>(Jr, Sr, etc.)</em>
                                                    <x-asterisks />
                                                </label>
                                                <input type="text" id="name_extension" name="name_extension"
                                                    class="form-control @error('name_extension') is-invalid @enderror"
                                                    placeholder="Name Extension" value="{{ old('name_extension') }}">
                                                @error('name_extension')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="birthday">Date of Birth</label>
                                                <div class="input-group"><span class="input-group-text"><svg
                                                            class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg> </span><input data-datepicker=""
                                                        class="form-control datepicker-input" id="birthday" type="text"
                                                        placeholder="dd/mm/yyyy" required=""></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-3">
                                                <label for="birth_place">Place of Birth
                                                    <x-asterisks />
                                                </label>
                                                <input type="text" id="birth_place" name="birth_place"
                                                    class="form-control @error('birth_place') is-invalid @enderror"
                                                    placeholder="Brgy/Municipality/Province"
                                                    value="{{ old('birth_place') }}">
                                                @error('birth_place')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-2"><label for="sex">Sex</label> <select
                                                class="form-select mb-0" id="sex" aria-label="sex select example">
                                                {{-- <option selected="selected">Sex</option> --}}
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="civil_status">Civil Status</label>
                                            <select class="form-select mb-0" id="civil_status"
                                                aria-label="civil_status select example">
                                                {{-- <option selected="selected">Sex</option> --}}
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Widowed">Widowed</option>
                                                <option value="Separated">Separated</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2" style="padding-top: 32px">
                                            <div class="form-group mb-3">
                                                <div id="other_civil_status" style="display: none;">
                                                    <input type="text" id="otherField" name="otherCivilStatus"
                                                        class="form-control @error('otherCivilStatus') is-invalid @enderror"
                                                        placeholder="Enter Other Option"
                                                        value="{{ old('otherCivilStatus') }}">
                                                    @error('otherCivilStatus')
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
                                                    class="form-control @error('height') is-invalid @enderror"
                                                    placeholder="Height (cm)" value="{{ old('height') }}">
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
                                                    class="form-control @error('weight') is-invalid @enderror"
                                                    placeholder="Weight (kg)" value="{{ old('weight') }}">
                                                @error('weight')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="blood_type">Blood Type</label>
                                            <select class="form-select mb-0" id="blood_type"
                                                aria-label="blood_type select example">
                                                {{-- <option selected="selected">Sex</option> --}}
                                                <option value="Single">OA</option>
                                                <option value="Married">A</option>
                                                <option value="Widowed">AB</option>
                                                <option value="Separated">O+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group mb-3">
                                                <label for="gsis">GSIS ID NO.
                                                    <x-asterisks />
                                                </label>
                                                <input type="text" id="gsis" name="GSIS"
                                                    class="form-control @error('gsis') is-invalid @enderror"
                                                    placeholder="GSIS ID No." value="{{ old('gsis') }}">
                                                @error('gsis')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group mb-3">
                                                <label for="pagibig">PAGIBIG ID NO.
                                                    <x-asterisks />
                                                </label>
                                                <input type="text" id="pagibig" name="pagibig"
                                                    class="form-control @error('pagibig') is-invalid @enderror"
                                                    placeholder="PAGIBIG ID No." value="{{ old('pagibig') }}">
                                                @error('height')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group mb-3">
                                                <label for="philhealth">PHILHEALTH ID NO.
                                                    <x-asterisks />
                                                </label>
                                                <input type="text" id="philhealth" name="philhealth"
                                                    class="form-control @error('philhealth') is-invalid @enderror"
                                                    placeholder="PHILHEALTH ID No." value="{{ old('philhealth') }}">
                                                @error('philhealth')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group mb-3">
                                                <label for="sss">SSS NO.
                                                    <x-asterisks />
                                                </label>
                                                <input type="text" id="sss" name="sss"
                                                    class="form-control @error('sss') is-invalid @enderror"
                                                    placeholder="SSS No." value="{{ old('sss') }}">
                                                @error('sss')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group mb-3">
                                                <label for="tin">TIN
                                                    <x-asterisks />
                                                </label>
                                                <input type="text" id="tin" name="tin"
                                                    class="form-control @error('tin') is-invalid @enderror"
                                                    placeholder="TIN" value="{{ old('tin') }}">
                                                @error('tin')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group mb-3">
                                                <label for="agency">AGENCY EMPLOYEE NO.
                                                    <x-asterisks />
                                                </label>
                                                <input type="text" id="agency" name="agency"
                                                    class="form-control @error('agency') is-invalid @enderror"
                                                    placeholder="AGENCY EMPLOYEE No." value="{{ old('agency') }}">
                                                @error('agency')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"
                                        style="background-color: #d4dcf12b; padding-top: 10px; padding-bottom: 10px">
                                        <div class="col-sm-4">
                                            <div class="form-group mb-2">
                                                <label for="citizenship"><strong>CITIZENSHIP</strong>
                                                    <x-asterisks />
                                                </label>
                                                <div class="row">
                                                    <div class="col-sm-4" id="FilipinoCheckbox">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="defaultCheck10">
                                                            <label class="form-check-label" for="defaultCheck10">
                                                                Fillipino
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-check" id="DualCitizenshipCheckbox">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="defaultCheck10">
                                                            <label class="form-check-label" for="defaultCheck10">
                                                                Dual Citizenship
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4" style="border-left-style: solid; padding-top: 30px">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="ByBirthCheckbox">
                                                        <label class="form-check-label" for="defaultCheck10">
                                                            By Birth
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="ByNaturalizationCheckbox">
                                                        <label class="form-check-label" for="defaultCheck10">
                                                            By Naturalization
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="">
                                                <label for="country" style="display: inline-block;
                                                width: 200px;">Pls.
                                                    Indicate Country</label>
                                                <div style="width: ">
                                                    <select class="form-select mb-0" id="country"
                                                        aria-label="civil_status select example" style="">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"
                                        style="padding-top: 20px; background-color: #a6b7df74; padding-top: 10px"">
                                        <div class=" col-sm-12">
                                            <label for="residential_address"><strong>RESIDENTIAL ADDRESS</strong>
                                                <x-asterisks />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row" style="background-color: #c1cadf6b;">
                                        <div class="col-sm-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="house" name="house"
                                                    class="form-control @error('house') is-invalid @enderror"
                                                    placeholder="House/Block/Lot No." value="{{ old('house') }}">
                                                <label for="floatingInput">House/Block/Lot No.</label>
                                                @error('house')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="street" name="street"
                                                    class="form-control @error('street') is-invalid @enderror"
                                                    placeholder="Street" value="{{ old('street') }}">
                                                <label for="floatingInput">Street</label>
                                                @error('street')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="subdivision" name="subdivision"
                                                    class="form-control @error('subdivision') is-invalid @enderror"
                                                    placeholder="Subdivision/Village" value="{{ old('subdivision') }}">
                                                <label for="floatingInput">Subdivision/Village</label>
                                                @error('subdivision')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="barangay" name="barangay"
                                                    class="form-control @error('barangay') is-invalid @enderror"
                                                    placeholder="Barangay" value="{{ old('barangay') }}">
                                                <label for="floatingInput">Barangay</label>
                                                @error('barangay')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="municipality" name="municipality"
                                                    class="form-control @error('municipality') is-invalid @enderror"
                                                    placeholder="City/Municipality" value="{{ old('municipality') }}">
                                                <label for="floatingInput">City/Municipality</label>
                                                @error('municipality')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="province" name="province"
                                                    class="form-control @error('province') is-invalid @enderror"
                                                    placeholder="Province" value="{{ old('province') }}">
                                                <label for="floatingInput">Province</label>
                                                @error('province')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="zipcode" name="zipcode"
                                                    class="form-control @error('zipcode') is-invalid @enderror"
                                                    placeholder="Zip Code" value="{{ old('zipcode') }}">
                                                <label for="floatingInput">Zip Code</label>
                                                @error('zipcode')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"
                                        style="padding-top: 20px; background-color: #a6b7df74; padding-top: 10px"">
                                        <div class=" col-sm-12">
                                            <label for="permanent_address"><strong>PERMANENT ADDRESS</strong>
                                                <x-asterisks />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row" style="background-color: #c1cadf6b;">

                                        <div class="col-sm-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="house2" name="house2"
                                                    class="form-control @error('house2') is-invalid @enderror"
                                                    placeholder="House/Block/Lot No." value="{{ old('house2') }}">
                                                <label for="floatingInput">House/Block/Lot No.</label>
                                                @error('house2')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="street2" name="street2"
                                                    class="form-control @error('street2') is-invalid @enderror"
                                                    placeholder="Street" value="{{ old('street2') }}">
                                                <label for="floatingInput">Street</label>
                                                @error('street2')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="subdivision2" name="subdivision2"
                                                    class="form-control @error('subdivision2') is-invalid @enderror"
                                                    placeholder="Subdivision/Village" value="{{ old('subdivision2') }}">
                                                <label for="floatingInput">Subdivision/Village</label>
                                                @error('subdivision2')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="barangay2" name="barangay2"
                                                    class="form-control @error('barangay') is-invalid @enderror"
                                                    placeholder="Barangay" value="{{ old('barangay2') }}">
                                                <label for="floatingInput">Barangay</label>
                                                @error('barangay2')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="municipality2" name="municipality2"
                                                    class="form-control @error('municipality2') is-invalid @enderror"
                                                    placeholder="City/Municipality" value="{{ old('municipality2') }}">
                                                <label for="floatingInput">City/Municipality</label>
                                                @error('municipality2')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="province2" name="province2"
                                                    class="form-control @error('province2') is-invalid @enderror"
                                                    placeholder="Province" value="{{ old('province2') }}">
                                                <label for="floatingInput">Province</label>
                                                @error('province2')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="zipcode2" name="zipcode2"
                                                    class="form-control @error('zipcode2') is-invalid @enderror"
                                                    placeholder="Zip Code" value="{{ old('zipcode2') }}">
                                                <label for="floatingInput">Zip Code</label>

                                                @error('zipcode2')
                                                <x-input-error message="{{ $message }}" />
                                                @enderror
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
        <div class="tab-pane fade" id="tabs-family-background" role="tabpanel"
            aria-labelledby="tabs-waybill-particulars-tab">
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card card-body border-0 shadow mb-4">
                        <h2 class="h5 mb-4">Family Background</h2>
                        <form method="POST" action="">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
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
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="middle_name">Middle Name</label>
                                        <input type="text" id="middle_name" name="middle_name"
                                            class="form-control @error('middle_name') is-invalid @enderror"
                                            placeholder="Middle Name" value="{{ old('middle_name') }}">
                                        @error('middle_name')
                                        <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="surname">Last Name
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="surname" name="surname"
                                            class="form-control @error('surname') is-invalid @enderror"
                                            placeholder="Last Name" value="{{ old('surname') }}">
                                        @error('surname')
                                        <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="email">Email
                                            <x-asterisks />
                                        </label>
                                        <input type="email" id="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email" value="{{ old('email') }}">
                                        @error('email')
                                        <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="password">Password
                                            <x-asterisks />
                                        </label>
                                        <input type="password" id="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password">
                                        @error('password')
                                        <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="password_confirmation">Confirm Password
                                            <x-asterisks />
                                        </label>
                                        <input class="form-control" id="password_confirmation"
                                            name="password_confirmation" type="password" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><i
                                        class="me-2 bi bi-save"></i> Update</button>
                                <a href="{{ route('users.index') }}" class="btn btn-gray-800 mt-2 animate-up-2"><i
                                        class="me-2 bi bi-back"></i>
                                    Back</a>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>
        <div class="tab-pane fade" id="tabs-waybill-containers" role="tabpanel"
            aria-labelledby="tabs-waybill-containers-tab">
            <div class="row">
                <div class="col-12 col-xl-12">

                    <div class="card card-body border-0 shadow mb-4">
                        <h2 class="h5 mb-4">Children</h2>

                        <form method="POST" action="">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-4">
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
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="middle_name">Middle Name</label>
                                        <input type="text" id="middle_name" name="middle_name"
                                            class="form-control @error('middle_name') is-invalid @enderror"
                                            placeholder="Middle Name" value="{{ old('middle_name') }}">
                                        @error('middle_name')
                                        <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="surname">Last Name
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="surname" name="surname"
                                            class="form-control @error('surname') is-invalid @enderror"
                                            placeholder="Last Name" value="{{ old('surname') }}">
                                        @error('surname')
                                        <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="email">Email
                                            <x-asterisks />
                                        </label>
                                        <input type="email" id="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email" value="{{ old('email') }}">
                                        @error('email')
                                        <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="password">Password
                                            <x-asterisks />
                                        </label>
                                        <input type="password" id="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password">
                                        @error('password')
                                        <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="password_confirmation">Confirm Password
                                            <x-asterisks />
                                        </label>
                                        <input class="form-control" id="password_confirmation"
                                            name="password_confirmation" type="password" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><i
                                        class="me-2 bi bi-save"></i> Update</button>
                                <a href="{{ route('users.index') }}" class="btn btn-gray-800 mt-2 animate-up-2"><i
                                        class="me-2 bi bi-back"></i>
                                    Back</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tabs-waybill-charges" role="tabpanel" aria-labelledby="tabs-waybill-charges-tab">
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="col-12 col-xl-12">
                        <div class="card card-body border-0 shadow mb-4">
                            <h2 class="h5 mb-4">Educational Background</h2>
                            <form method="POST" action="">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="middle_name">Middle Name</label>
                                            <input type="text" id="middle_name" name="middle_name"
                                                class="form-control @error('middle_name') is-invalid @enderror"
                                                placeholder="Middle Name" value="{{ old('middle_name') }}">
                                            @error('middle_name')
                                            <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="surname">Last Name
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="surname" name="surname"
                                                class="form-control @error('surname') is-invalid @enderror"
                                                placeholder="Last Name" value="{{ old('surname') }}">
                                            @error('surname')
                                            <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="email">Email
                                                <x-asterisks />
                                            </label>
                                            <input type="email" id="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email" value="{{ old('email') }}">
                                            @error('email')
                                            <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="password">Password
                                                <x-asterisks />
                                            </label>
                                            <input type="password" id="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password">
                                            @error('password')
                                            <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="password_confirmation">Confirm Password
                                                <x-asterisks />
                                            </label>
                                            <input class="form-control" id="password_confirmation"
                                                name="password_confirmation" type="password"
                                                placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><i
                                            class="me-2 bi bi-save"></i> Update</button>
                                    <a href="{{ route('users.index') }}" class="btn btn-gray-800 mt-2 animate-up-2"><i
                                            class="me-2 bi bi-back"></i>
                                        Back</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @push('scripts')
    <script type="text/javascript" src="{{ asset('js/page/form/index.js') }}"></script>
    @endpush
</x-app-layout>
