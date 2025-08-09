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
                                        <h4 class="card-title">Customers</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <form class="row g-2">
                                            <div class="col-auto">
                                                <a class="btn bg-primary-subtle text-primary dropdown-toggle d-flex align-items-center arrow-none"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false"
                                                    data-bs-auto-close="outside">
                                                    <i class="iconoir-filter-alt me-1"></i> Filter
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-start">
                                                    <div class="p-2">
                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" class="form-check-input" checked
                                                                id="filter-all">
                                                            <label class="form-check-label" for="filter-all">
                                                                All
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" class="form-check-input" checked
                                                                id="filter-one">
                                                            <label class="form-check-label" for="filter-one">
                                                                New
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" class="form-check-input" checked
                                                                id="filter-two">
                                                            <label class="form-check-label" for="filter-two">
                                                                VIP
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" class="form-check-input" checked
                                                                id="filter-three">
                                                            <label class="form-check-label" for="filter-three">
                                                                Repeat
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" class="form-check-input" checked
                                                                id="filter-four">
                                                            <label class="form-check-label" for="filter-four">
                                                                Referral
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" class="form-check-input" checked
                                                                id="filter-five">
                                                            <label class="form-check-label" for="filter-five">
                                                                Inactive
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" checked
                                                                id="filter-six">
                                                            <label class="form-check-label" for="filter-six">
                                                                Loyal
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-auto">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#addBoard"><i class="fa-solid fa-plus me-1"></i> Add
                                                    Product</button>
                                            </div><!--end col-->
                                        </form>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">

                                <div class="table-responsive">
                                    <table class="table mb-0 checkbox-all" id="datatable_1">
                                        <thead class="table-light">
                                            <tr>
                                                <th style="width: 16px;">
                                                    <div class="form-check mb-0">
                                                        <input type="checkbox" class="form-check-input" name="select-all"
                                                            id="select-all">
                                                    </div>
                                                </th>
                                                <th class="ps-0">Customer</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Order</th>
                                                <th>Spent</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 16px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="check"
                                                            id="customCheck1">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <img src="{{ asset('admin/assets/images/users/avatar-2.jpg') }}" alt=""
                                                        class="thumb-md d-inline rounded-circle me-1">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <span class="font-13 fw-medium">Andy Timmons</span>
                                                    </p>
                                                </td>
                                                <td><a href="#"
                                                        class="d-inline-block align-middle mb-0 text-body">dummy@dummy.com</a>
                                                </td>
                                                <td><span class="badge bg-danger-subtle text-danger">VIP</span></td>
                                                <td>75</td>
                                                <td>$280</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="check"
                                                            id="customCheck2">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <img src="{{ asset('admin/assets/images/users/avatar-3.jpg') }}" alt=""
                                                        class="thumb-md d-inline rounded-circle me-1">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <span class="font-13 fw-medium">Jeff Beck</span>
                                                    </p>
                                                </td>
                                                <td><a href="#"
                                                        class="d-inline-block align-middle mb-0 text-body">fake@dummy.com</a>
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success">Loyal</span></td>
                                                <td>65</td>
                                                <td>$150</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="check"
                                                            id="customCheck3">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <img src="{{ asset('admin/assets/images/users/avatar-4.jpg') }}" alt=""
                                                        class="thumb-md d-inline rounded-circle me-1">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <span class="font-13 fw-medium">Vince Nelson</span>
                                                    </p>
                                                </td>
                                                <td><a href="#"
                                                        class="d-inline-block align-middle mb-0 text-body">exemple@dummy.com</a>
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success">Referral</span></td>
                                                <td>32</td>
                                                <td>$39</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="check"
                                                            id="customCheck4">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <img src="{{ asset('admin/assets/images/users/avatar-5.jpg') }}" alt=""
                                                        class="thumb-md d-inline rounded-circle me-1">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <span class="font-13 fw-medium">David Gilmour</span>
                                                    </p>
                                                </td>
                                                <td><a href="#"
                                                        class="d-inline-block align-middle mb-0 text-body">only@dummy.com</a>
                                                </td>
                                                <td><span class="badge bg-secondary-subtle text-secondary">Inactive</span>
                                                </td>
                                                <td>40</td>
                                                <td>$170</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="check"
                                                            id="customCheck5">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <img src="{{ asset('admin/assets/images/users/avatar-6.jpg') }}" alt=""
                                                        class="thumb-md d-inline rounded-circle me-1">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <span class="font-13 fw-medium">Dianna Smiley</span>
                                                    </p>
                                                </td>
                                                <td><a href="#"
                                                        class="d-inline-block align-middle mb-0 text-body">dummy@exemple.com</a>
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success">Re-Order</span></td>
                                                <td>80</td>
                                                <td>$220</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="check"
                                                            id="customCheck6">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <img src="{{ asset('admin/assets/images/users/avatar-7.jpg') }}" alt=""
                                                        class="thumb-md d-inline rounded-circle me-1">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <span class="font-13 fw-medium">Adolfo Hess</span>
                                                    </p>
                                                </td>
                                                <td><a href="#"
                                                        class="d-inline-block align-middle mb-0 text-body">dummy2dummay@dummy.com</a>
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success">New</span></td>
                                                <td>45</td>
                                                <td>$120</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="check"
                                                            id="customCheck7">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <img src="{{ asset('admin/assets/images/users/avatar-8.jpg') }}" alt=""
                                                        class="thumb-md d-inline rounded-circle me-1">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <span class="font-13 fw-medium">James Ahern</span>
                                                    </p>
                                                </td>
                                                <td><a href="#"
                                                        class="d-inline-block align-middle mb-0 text-body">dummy10@dummy.com</a>
                                                </td>
                                                <td><span class="badge bg-blue-subtle text-blue">Repeat</span></td>
                                                <td>88</td>
                                                <td>$580</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="check"
                                                            id="customCheck8">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <img src="{{ asset('admin/assets/images/users/avatar-9.jpg') }}" alt=""
                                                        class="thumb-md d-inline rounded-circle me-1">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <span class="font-13 fw-medium">Simon Young</span>
                                                    </p>
                                                </td>
                                                <td><a href="#"
                                                        class="d-inline-block align-middle mb-0 text-body">totaldummy@dummy.com</a>
                                                </td>
                                                <td><span class="badge bg-danger-subtle text-danger">VIP</span></td>
                                                <td>124</td>
                                                <td>$380</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="check"
                                                            id="customCheck9">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <img src="{{ asset('admin/assets/images/users/avatar-10.jpg') }}" alt=""
                                                        class="thumb-md d-inline rounded-circle me-1">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <span class="font-13 fw-medium">Robert Lewis</span>
                                                    </p>
                                                </td>
                                                <td><a href="#"
                                                        class="d-inline-block align-middle mb-0 text-body">Exemple@dummy.com</a>
                                                </td>
                                                <td><span class="badge bg-secondary-subtle text-secondary">Inactive</span>
                                                </td>
                                                <td>84</td>
                                                <td>$254</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="check"
                                                            id="customCheck10">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <img src="{{ asset('admin/assets/images/users/avatar-1.jpg') }}" alt=""
                                                        class="thumb-md d-inline rounded-circle me-1">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <span class="font-13 fw-medium">Erik Brim</span>
                                                    </p>
                                                </td>
                                                <td><a href="#"
                                                        class="d-inline-block align-middle mb-0 text-body">onlyfake@dummy.com</a>
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success">Potential</span>
                                                </td>
                                                <td>62</td>
                                                <td>$225</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="check"
                                                            id="customCheck11">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <img src="{{ asset('admin/assets/images/users/avatar-5.jpg') }}" alt=""
                                                        class="thumb-md d-inline rounded-circle me-1">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <span class="font-13 fw-medium">Kevin Powers</span>
                                                    </p>
                                                </td>
                                                <td><a href="#"
                                                        class="d-inline-block align-middle mb-0 text-body">exemple@exe.com</a>
                                                </td>
                                                <td><span class="badge bg-blue-subtle text-blue">Repeat</span></td>
                                                <td>54</td>
                                                <td>$345</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="check"
                                                            id="customCheck12">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <img src="{{ asset('admin/assets/images/users/avatar-3.jpg') }}" alt=""
                                                        class="thumb-md d-inline rounded-circle me-1">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <span class="font-13 fw-medium">Wendy Keen</span>
                                                    </p>
                                                </td>
                                                <td><a href="#"
                                                        class="d-inline-block align-middle mb-0 text-body">Exemple@dummy.com</a>
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success">New</span></td>
                                                <td>32</td>
                                                <td>$39</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="check"
                                                            id="customCheck13">
                                                    </div>
                                                </td>
                                                <td class="ps-0">
                                                    <img src="{{ asset('admin/assets/images/users/avatar-1.jpg') }}" alt=""
                                                        class="thumb-md d-inline rounded-circle me-1">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <span class="font-13 fw-medium">Wendy Keen</span>
                                                    </p>
                                                </td>
                                                <td><a href="#"
                                                        class="d-inline-block align-middle mb-0 text-body">Exemple@dummy.com</a>
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success">New</span></td>
                                                <td>32</td>
                                                <td>$39</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
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

            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
@endsection
