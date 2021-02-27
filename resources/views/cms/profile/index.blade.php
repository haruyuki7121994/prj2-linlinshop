@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Admin" action="Profile" />

        <!-- row -->
        <div class="row row-sm">
            <!-- Col -->
            <div class="col-lg-4">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label tx-13 mg-b-25">
                            Contact
                        </div>
                        <div class="main-profile-contact-list">
                            <div class="media">
                                <div class="media-icon bg-primary-transparent text-primary">
                                    <i class="icon ion-md-phone-portrait"></i>
                                </div>
                                <div class="media-body">
                                    <span>Mobile</span>
                                    <div>
                                        +245 354 654
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-icon bg-success-transparent text-success">
                                    <i class="icon ion-logo-slack"></i>
                                </div>
                                <div class="media-body">
                                    <span>Email</span>
                                    <div>
                                        david_beckham@spruko.w
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-icon bg-info-transparent text-info">
                                    <i class="icon ion-md-locate"></i>
                                </div>
                                <div class="media-body">
                                    <span>Current Address</span>
                                    <div>
                                        San Francisco, CA
                                    </div>
                                </div>
                            </div>
                        </div><!-- main-profile-contact-list -->
                    </div>
                </div>
            </div>

            <!-- Col -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4 main-content-label">Personal Information</div>
                        <form class="form-horizontal">
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">User Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  placeholder="User Name" value="Petey Cruiser">
                                    </div>
                                </div>
                                <div class="mb-4 main-content-label">Contact Info</div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Email<i>(required)</i></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  placeholder="Email" value="info@Valex.in">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Phone</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  placeholder="phone number" value="+245 354 654">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Address</label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="example-textarea-input" rows="2"  placeholder="Address">San Francisco, CA</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- /Col -->

        </div>
        <!-- row closed -->

        <div class="row row-sm">
            <div class="col-lg-4"></div>
            <!-- Col -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4 main-content-label">Update Password</div>
                        <form class="form-horizontal">
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">New Password</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  placeholder="New Password" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Re Password</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"  placeholder="Re Password" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update Password</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
            <!-- /Col -->
        </div>
    </div>
    <!-- Container closed -->
@endsection
