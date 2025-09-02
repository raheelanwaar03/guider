@extends('admin.layout.index')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Students</h4>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table mb-0 checkbox-all" id="datatable_1">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Student</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Passport No</th>
                                                <th>Added By</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($student as $item)
                                                <tr>
                                                    <td>
                                                        @if ($item->profile_pic == null)
                                                            <img src="{{ asset('admin/assets/images/users/avatar-5.jpg') }}"
                                                                style="border-radius:12px;height:50px;width:50px;"
                                                                class="img-fluid img-responsive">
                                                        @else
                                                            <img src="{{ asset('student/' . $item->profile_pic) }}"
                                                                style="border-radius:12px;height:50px;width:50px;"
                                                                class="img-fluid img-responsive">
                                                        @endif
                                                        {{ $item->student_id }}
                                                    </td>
                                                    <td>{{ $item->fname }}</td>
                                                    <td>{{ $item->lname }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->passport_no }}</td>
                                                    <td>{{ $item->added_by }}</td>
                                                    <td class="text-end">
                                                        <a href="{{ route('Admin.Student.Detail', $item->id) }}"
                                                            class="btn btn-sm btn-primary">Detail</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
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
                                        {{ env('APP_NAME') }}
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

                {{-- Model --}}

                <div class="modal fade bd-example-modal-lg" id="exampleModalLarge" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title m-0" id="myLargeModalLabel">Add New Student</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div><!--end modal-header-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-4 text-center">
                                        <img src="{{ asset('admin/assets/images/extra/card/find.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="col-lg-8 align-self-center">
                                        {{-- add form for adding branch --}}
                                        {{-- <form action="{{ route('Admin.Add.New.Branch') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <div class="form-label">Name</div>
                                                <input type="text" name="branch_name" class="form-control"
                                                    placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label">Email</div>
                                                <input type="text" name="branch_email" class="form-control"
                                                    placeholder="Email for crendtials">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label">Location</div>
                                                <input type="text" name="location" class="form-control"
                                                    placeholder="Location | City">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label">Password</div>
                                                <input type="text" name="password" class="form-control"
                                                    placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label">Retype Password</div>
                                                <input type="text" name="password_confirmation" class="form-control"
                                                    placeholder="Retype Password">
                                            </div>
                                            <div class="mt-2">
                                                <button class="btn btn-primary">Add</button>
                                            </div>
                                        </form> --}}
                                        <h1>Here will be the form for adding new student</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
