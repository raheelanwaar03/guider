@extends('branch.layout.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container-xxl">

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                        <div class="d-flex align-items-center flex-row flex-wrap">
                                            <div class="position-relative me-3">
                                                <img src="{{ asset('student/' . $student->profile_pic) }}" alt=""
                                                    height="120" class="rounded-circle">
                                                <a href="#"
                                                    class="thumb-md justify-content-center d-flex align-items-center bg-primary text-white rounded-circle position-absolute end-0 bottom-0 border border-3 border-card-bg">
                                                    <i class="fas fa-camera"></i>
                                                </a>
                                            </div>
                                            <div class="">
                                                <h5 class="fw-semibold fs-22 mb-1">{{ $student->fname }}</h5>
                                                <p class="mb-0 text-muted fw-medium">{{ $student->country }},
                                                    {{ $student->city }}</p>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-4 ms-auto align-self-center">
                                        <div class="d-flex justify-content-center">
                                            <div
                                                class="border-dashed rounded border-theme-color p-2 me-2 flex-grow-1 flex-basis-0">
                                                <h5 class="fw-semibold fs-22 mb-1">{{ $student->edu_level ?? 'Null' }}
                                                </h5>
                                                <p class="text-muted mb-0 fw-medium">Latest Degree</p>
                                            </div>
                                            <div
                                                class="border-dashed rounded border-theme-color p-2 me-2 flex-grow-1 flex-basis-0">
                                                <h5 class="fw-semibold fs-22 mb-1">
                                                    {{ $student->grading_scheme ?? 'Null' }}</h5>
                                                <p class="text-muted mb-0 fw-medium">Grading System</p>
                                            </div>
                                            <div
                                                class="border-dashed rounded border-theme-color p-2 me-2 flex-grow-1 flex-basis-0">
                                                <h5 class="fw-semibold fs-22 mb-1">
                                                    {{ $student->grading_average ?? 'Null' }}</h5>
                                                <p class="text-muted mb-0 fw-medium">CGPA</p>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-4 align-self-center">
                                        <div class="row row-cols-2">
                                            <div class="col text-end">
                                                <div id="complete" class="apex-charts"></div>
                                            </div>
                                            <div class="col align-self-center">
                                                <button type="button"
                                                    class="btn btn-primary  d-inline-block">Contact</button>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Personal Information</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <a href="#"
                                            class="float-end text-muted d-inline-flex text-decoration-underline"><i
                                                class="iconoir-edit-pencil fs-18 me-1"></i>Edit</a>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            {{-- <div class="card-body pt-0">
                                <p class="text-muted fw-medium mb-3">It is a long established fact that a reader will be
                                    distracted by the readable content of a page when looking at its layout.</p>
                                <div class="mb-3">
                                    <span
                                        class="badge bg-transparent border border-light text-gray-700 fs-12 fw-medium mb-1">Javascript</span>
                                    <span
                                        class="badge bg-transparent border border-light text-gray-700 fs-12 fw-medium mb-1">Python</span>
                                    <span
                                        class="badge bg-transparent border border-light text-gray-700 fs-12 fw-medium mb-1">Angular</span>
                                    <span
                                        class="badge bg-transparent border border-light text-gray-700 fs-12 fw-medium mb-1">Reactjs</span>
                                    <span
                                        class="badge bg-transparent border border-light text-gray-700 fs-12 fw-medium mb-1">Flutter</span>
                                </div>
                                <ul class="list-unstyled mb-0">
                                    <li class=""><i
                                            class="las la-birthday-cake me-2 text-secondary fs-22 align-middle"></i> <b>
                                            Birth
                                            Date </b> : 06 June 1989</li>
                                    <li class="mt-2"><i
                                            class="las la-briefcase me-2 text-secondary fs-22 align-middle"></i>
                                        <b> Position </b> : Full Stack Developer
                                    </li>
                                    <li class="mt-2"><i
                                            class="las la-university me-2 text-secondary fs-22 align-middle"></i>
                                        <b> Education </b> : Stanford Univercity
                                    </li>
                                    <li class="mt-2"><i
                                            class="las la-language me-2 text-secondary fs-22 align-middle"></i>
                                        <b> Languages </b> : English, French, Spanish
                                    </li>
                                    <li class="mt-2"><i class="las la-phone me-2 text-secondary fs-22 align-middle"></i>
                                        <b>
                                            Phone </b> : +91 23456 78910
                                    </li>
                                    <li class="mt-2"><i
                                            class="las la-envelope text-secondary fs-22 align-middle me-2"></i>
                                        <b> Email </b> : mannat.theme@gmail.com
                                    </li>
                                </ul>
                                <div class="row justify-content-center mt-4">
                                    <div class="col-auto text-end border-end">
                                        <span
                                            class="thumb-md justify-content-center d-flex align-items-center bg-blue text-white rounded-circle ms-auto mb-1">
                                            <i class="fab fa-facebook-f"></i>
                                        </span>
                                        <p class="mb-0 fw-semibold">Facebook</p>
                                        <h4 class="m-0 fw-bold">25k <span
                                                class="text-muted fs-12 fw-normal">Followers</span>
                                        </h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <span
                                            class="thumb-md justify-content-center d-flex align-items-center bg-black text-white rounded-circle mb-1">
                                            <i class="fab fa-x-twitter"></i>
                                        </span>
                                        <p class="mb-0 fw-semibold">Twitter</p>
                                        <h4 class="m-0 fw-bold">58k <span
                                                class="text-muted fs-12 fw-normal">Followers</span>
                                        </h4>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div> --}}
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-8">
                        <ul class="nav nav-tabs mb-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link fw-medium" data-bs-toggle="tab" href="#settings" role="tab"
                                    aria-selected="false">Settings</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane p-3 active" id="settings" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h4 class="card-title">Personal Information</h4>
                                            </div><!--end col-->
                                        </div> <!--end row-->
                                    </div><!--end card-header-->
                                    <div class="card-body pt-0">
                                        <div class="form-group mb-3 row">
                                            <label
                                                class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">First
                                                Name</label>
                                            <div class="col-lg-9 col-xl-8">
                                                <input class="form-control" type="text" value="{{ $student->fname }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label
                                                class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Last
                                                Name</label>
                                            <div class="col-lg-9 col-xl-8">
                                                <input class="form-control" type="text" value="{{ $student->lname }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label
                                                class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Middle
                                                Name</label>
                                            <div class="col-lg-9 col-xl-8">
                                                <input class="form-control" type="text" value="{{ $student->mname }}">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 row">
                                            <label
                                                class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Contact
                                                Phone</label>
                                            <div class="col-lg-9 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="las la-phone"></i></span>
                                                    <input type="text" class="form-control"
                                                        value="{{ $student->phone }}" placeholder="Phone"
                                                        aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label
                                                class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Email
                                                Address</label>
                                            <div class="col-lg-9 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="las la-at"></i></span>
                                                    <input type="text" class="form-control"
                                                        value="{{ $student->email }}" placeholder="Email"
                                                        name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label
                                                class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Citizenship</label>
                                            <div class="col-lg-9 col-xl-8">
                                                <input type="text" class="form-control"
                                                    value="{{ $student->country }}" placeholder="Email" name="country">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Change Password</h4>
                                    </div><!--end card-header-->
                                    <div class="card-body pt-0">
                                        <div class="form-group mb-3 row">
                                            <label
                                                class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Current
                                                Password</label>
                                            <div class="col-lg-9 col-xl-8">
                                                <input class="form-control" type="password" placeholder="Password">
                                                <a href="#" class="text-primary font-12">Forgot password ?</a>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label
                                                class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">New
                                                Password</label>
                                            <div class="col-lg-9 col-xl-8">
                                                <input class="form-control" type="password" placeholder="New Password">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label
                                                class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Confirm
                                                Password</label>
                                            <div class="col-lg-9 col-xl-8">
                                                <input class="form-control" type="password" placeholder="Re-Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                <button type="submit" class="btn btn-primary">Change Password</button>
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div>
                        </div>
                    </div> <!--end col-->
                </div><!--end row-->


            </div><!-- container -->
            <!--Start Rightbar-->
            <!--Start Rightbar/offcanvas-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                <div class="offcanvas-header border-bottom justify-content-between">
                    <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                    <button type="button" class="btn-close text-reset p-0 m-0 align-self-center"
                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <h6>Account Settings</h6>
                    <div class="p-2 text-start mt-3">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch1">
                            <label class="form-check-label" for="settings-switch1">Auto updates</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                            <label class="form-check-label" for="settings-switch2">Location Permission</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch3">
                            <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                        </div><!--end form-switch-->
                    </div><!--end /div-->
                    <h6>General Settings</h6>
                    <div class="p-2 text-start mt-3">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch4">
                            <label class="form-check-label" for="settings-switch4">Show me Online</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                            <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch6">
                            <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                        </div><!--end form-switch-->
                    </div><!--end /div-->
                </div><!--end offcanvas-body-->
            </div>
            <!--end Rightbar/offcanvas-->
            <!--end Rightbar-->
            <!--Start Footer-->

            <footer class="footer text-center text-sm-start d-print-none">
                <div class="container-xxl">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-0 rounded-bottom-0">
                                <div class="card-body">
                                    <p class="text-muted mb-0">
                                        ©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script>
                                        Rizz
                                        <span class="text-muted d-none d-sm-inline-block float-end">
                                            Crafted with
                                            <i class="iconoir-heart text-danger"></i>
                                            by Mannatthemes</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
