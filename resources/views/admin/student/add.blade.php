@extends('branch.layout.app')

@section('links')
    <link href="{{ asset('admin/assets/libs/mobius1-selectr/selectr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/huebee/huebee.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/vanillajs-datepicker/css/datepicker.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/assets/libs/uppy/uppy.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container-xxl">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h2 class="card-title text-center">Add Student</h2>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <form action="{{ route('Admin.Store.Student.Details') }}" class="row g-3 needs-validation"
                                    enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="col-md-4">
                                        <label for="name" class="form-label">First name <span
                                                style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="name" name="fname"
                                            placeholder="Uzaib" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lname" class="form-label">Last name <span
                                                style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="lname" name="lname"
                                            placeholder="Ahmad" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="MName" class="form-label">Middle Name</label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" id="MName" name="mname"
                                                placeholder="Optional">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="passport" class="form-label">Passport No <span
                                                style="color:red">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" id="passport" name="passport_no"
                                                placeholder="ZX123456" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="passport_expirey" class="form-label">Passport expiry date<span
                                                style="color:red">*</span></label>
                                        <div class="input-group has-validation">
                                            <input class="form-control" type="date" id="passport_expirey"
                                                name="passport_expirey">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="gender" class="form-label">Gender<span
                                                style="color:red">*</span></label>
                                        <div class="input-group">
                                            <div class="col-md-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="male" value="Male">
                                                    <label class="form-check-label" for="male">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="female" value="Female">
                                                    <label class="form-check-label" for="female">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body pt-0">
                                            <div class="d-grid">
                                                <p class="text-muted">Profile Picture</p>
                                                <div
                                                    class="preview-box d-block justify-content-center rounded  border-dashed border-theme-color overflow-hidden p-3">
                                                </div>
                                                <input type="file" id="input-file" name="profile_pic"
                                                    accept="image/*" onchange={handleChange()} hidden />
                                                <label class="btn-upload btn btn-primary mt-3" for="input-file">Upload
                                                    Image</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mb-2" id="country">Country <span
                                                style="color:red">*</span></label>
                                        <input type="text" name="country" id="country" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="state" class="form-label">State <span
                                                style="color:red">*</span></label>
                                        <select class="form-select" name="state" id="state" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Sindh">Sindh</option>
                                            <option value="KPK">KPK</option>
                                            <option value="Bolochistan">Bolochistan</option>
                                            <option value="Azad Jammu & Kashmir">Azad Jammu & Kashmir</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">City <span
                                                style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom03"
                                            name="city" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" name="address" id="address" class="form-control">
                                    </div>
                                    <hr>
                                    <h4>Contact Information</h4>
                                    <div class="col-md-12">
                                        <label for="email" class="form-label">Email <span
                                                style="color: red">*</span></label>
                                        <div class="input-group has-validation">
                                            <input class="form-control" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="phone" class="form-label">Phone NO. <span
                                                style="color: red">*</span></label>
                                        <div class="input-group has-validation">
                                            <input class="form-control" name="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>Lead Management</h4>
                                    <div class="col-md-12">
                                        <label for="status" class="form-label">Status </label>
                                        <div class="input-group has-validation">
                                            <select name="status" id="status" class="form-control">
                                                <option>Select</option>
                                                <option value="Social">Social</option>
                                                <option value="Walk In">Walk In</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="referral" class="form-label">Referral Source </label>
                                        <div class="input-group has-validation">
                                            <select name="referral" id="referral" class="form-control">
                                                <option>Select</option>
                                                <option value="Social">Social</option>
                                                <option value="Walk In">Walk In</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mb-2">Country of interest</label>
                                        <select id="default" name="country_of_interest">
                                            <option value="">-- Select Country --</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BR">Brazil</option>
                                            <option value="CA">Canada</option>
                                            <option value="CN">China</option>
                                            <option value="DE">Germany</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IT">Italy</option>
                                            <option value="JP">Japan</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MX">Mexico</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RU">Russia</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SG">Singapore</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="KR">South Korea</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="TR">Turkey</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>

                                    <h4>Education Summary</h4>

                                    <div class="col-md-6">
                                        <label for="educationCountry">Country of Education <span
                                                style="color:red;">*</span></label>
                                        <input type="text" name="country_of_edu" id="educationCountry"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="level">Highest Level Of Education <span
                                                style="color:red;">*</span></label>
                                        <input type="text" name="edu_level" id="level" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Grading">Grading Scheme <span style="color:red;">*</span></label>
                                        <input type="text" name="grading_scheme" id="Grading" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="average">Grading Average <span style="color:red;">*</span></label>
                                        <input type="text" name="grading_average" id="average"
                                            class="form-control">
                                    </div>
                                    <h4>Background Information</h4>

                                    <p>Did student have rejection from Canada, USA, The United Kingdom, New Zealand,
                                        Australia or Ireland?</p>
                                    <div class="col-md-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rejection"
                                                id="yes" value="Yes">
                                            <label class="form-check-label" for="yes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rejection"
                                                id="no" value="No">
                                            <label class="form-check-label" for="no">No</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </form><!--end form-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/mobius1-selectr/selectr.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/huebee/huebee.pkgd.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/vanillajs-datepicker/js/datepicker-full.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/moment.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/imask/imask.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/forms-advanced.js') }}"></script>

    <script src="{{ asset('admin/assets/libs/uppy/uppy.legacy.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/file-upload.init.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
@endsection
