<div class="tab-pane fade" id="tabs-family-background" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="row">
        <div class="col-12 col-xl-12">

            <div class="card card-body border-0 shadow mb-4">
                <h1 class="h5 mb-3" style="text-align: center"><b>Family Background</b></h1>

                <form method="POST" action="{{ route('familybackground.update', $personalinfo->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="row" style="padding-top: 20px; background-color: #a6b7df74; padding-top: 10px"">
                        <div class=" col-sm-12">
                        <label for="residential_address"><strong>SPOUSE'S INFORMATION</strong><i> (If Applicable)</i>
                        </label>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 20px; background-color: #c1cadf6b;"></div>
                    <div class="row" style="background-color: #c1cadf6b;">
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="spouse_first_name" name="spouse_first_name"
                                    class="form-control @error('spouse_first_name') is-invalid @enderror"
                                    placeholder="First Name" value="{{ old('spouse_first_name') }}">
                                <label for="floatingInput">First Name</label>
                                @error('spouse_first_name')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="spouse_middle_name" name="spouse_middle_name"
                                    class="form-control @error('spouse_middle_name') is-invalid @enderror" placeholder="Middle Name"
                                    value="{{ old('spouse_middle_name') }}">
                                <label for="floatingInput">Middle Name</label>
                                @error('spouse_middle_name')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="spouse_last_name" name="spouse_last_name"
                                    class="form-control @error('spouse_last_name') is-invalid @enderror"
                                    placeholder="Last Name" value="{{ old('spouse_last_name') }}">
                                <label for="floatingInput">Last Name</label>
                                @error('spouse_last_name')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="spouse_name_extension" name="spouse_name_extension"
                                    class="form-control @error('spouse_name_extension') is-invalid @enderror"
                                    placeholder="Last Name" value="{{ old('spouse_name_extension') }}">
                                <label for="floatingInput">Name Extension <i> (If Applicable)</i></label>
                                @error('spouse_name_extension')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row" style="background-color: #c1cadf6b;">
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="occupation" name="occupation"
                                    class="form-control @error('occupation') is-invalid @enderror"
                                    placeholder="Occupation" value="{{ old('occupation') }}">
                                <label for="floatingInput">Occupation</label>
                                @error('occupation')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="employer" name="employer"
                                    class="form-control @error('employer') is-invalid @enderror" placeholder="Employer/Business Name"
                                    value="{{ old('employer') }}">
                                <label for="floatingInput">Employer/Business Name</label>
                                @error('employer')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="business_address" name="business_address"
                                    class="form-control @error('business_address') is-invalid @enderror"
                                    placeholder="Business Address" value="{{ old('business_address') }}">
                                <label for="floatingInput">Business Address</label>
                                @error('business_address')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="telephone" name="telephone"
                                    class="form-control @error('telephone') is-invalid @enderror"
                                    placeholder="Telephone" value="{{ old('telephone') }}">
                                <label for="floatingInput">Telephone</i></label>
                                @error('telephone')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px; background-color: #a6b7df74; padding-top: 10px"">
                        <div class=" col-sm-12">
                            <label for="permanent_address"><strong>FATHER'S INFORMATION</strong>
                            </label>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 20px; background-color: #c1cadf6b;"></div>
                    <div class="row" style="background-color: #c1cadf6b;">
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="father_first_name" name="father_first_name"
                                    class="form-control @error('father_first_name') is-invalid @enderror"
                                    placeholder="First Name" value="{{ old('father_first_name') }}">
                                <label for="floatingInput">First Name</label>
                                @error('father_first_name')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="father_middle_name" name="father_middle_name"
                                    class="form-control @error('father_middle_name') is-invalid @enderror" placeholder="Middle Name"
                                    value="{{ old('father_middle_name') }}">
                                <label for="floatingInput">Middle Name</label>
                                @error('father_middle_name')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="father_last_name" name="father_last_name"
                                    class="form-control @error('father_last_name') is-invalid @enderror"
                                    placeholder="Last Name" value="{{ old('father_last_name') }}">
                                <label for="floatingInput">Last Name</label>
                                @error('father_last_name')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="father_name_extension" name="father_name_extension"
                                    class="form-control @error('father_name_extension') is-invalid @enderror"
                                    placeholder="Last Name" value="{{ old('father_name_extension') }}">
                                <label for="floatingInput">Name Extension <i> (If Applicable)</i></label>
                                @error('father_name_extension')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px; background-color: #a6b7df74; padding-top: 10px"">
                        <div class=" col-sm-12">
                            <label for="permanent_address"><strong>MOTHER'S INFORMATION</strong>
                            </label>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 20px; background-color: #c1cadf6b;"></div>
                    <div class="row" style="background-color: #c1cadf6b;">
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="mother_first_name" name="mother_first_name"
                                    class="form-control @error('mother_first_name') is-invalid @enderror"
                                    placeholder="First Name" value="{{ old('mother_first_name') }}">
                                <label for="floatingInput">First Name</label>
                                @error('mother_first_name')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="mother_middle_name" name="mother_middle_name"
                                    class="form-control @error('mother_middle_name') is-invalid @enderror" placeholder="Middle Name"
                                    value="{{ old('mother_middle_name') }}">
                                <label for="floatingInput">Middle Name</label>
                                @error('mother_middle_name')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="mother_last_name" name="mother_last_name"
                                    class="form-control @error('mother_last_name') is-invalid @enderror"
                                    placeholder="Last Name" value="{{ old('mother_last_name') }}">
                                <label for="floatingInput">Last Name</label>
                                @error('mother_last_name')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="maiden_name" name="maiden_name"
                                    class="form-control @error('maiden_name') is-invalid @enderror"
                                    placeholder="Last Name" value="{{ old('maiden_name') }}">
                                <label for="floatingInput">Maiden Name</label>
                                @error('maiden_name')
                                <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px; background-color: #a6b7df74; padding-top: 10px"">
                        <div class=" col-sm-12">
                            <label for="permanent_address"><strong>NAME OF CHILDREN <i>(Write full name and list all)</i></strong>
                            </label>
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
