@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="User" action="Edit" />

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
                            <div class="media">
                                <div class="media-icon bg-info-transparent text-info">
                                    <i class="icon-layers text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <span>Total Order</span>
                                    <div>
                                        5
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
                                <div class="mb-4 main-content-label">Email Preferences</div>
                                <div class="form-group mb-0">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Verified User</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="custom-controls-stacked">
                                                <label class="ckbox mg-b-10"><input checked="" type="checkbox"><span> Accept and Send email</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
                    </div>
                </div>
            </div>
            <!-- /Col -->

        </div>
        <!--div-->
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Order Table</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mg-b-0 text-md-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Order Code</th>
                                <th>User</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Active</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>#000001</td>
                                <td>Petey Cruiser</td>
                                <td>20$</td>
                                <td>Paid</td>
                                <td>
                                    <a href="invoice.html"><button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button></a>
                                    <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>#000002</td>
                                <td>Petey Cruiser</td>
                                <td>40$</td>
                                <td>Pending</td>
                                <td>
                                    <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>#000003</td>
                                <td>Petey Cruiser</td>
                                <td>50$</td>
                                <td>Pre-Pending</td>
                                <td>
                                    <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>#000004</td>
                                <td>Petey Cruiser</td>
                                <td>60$</td>
                                <td>Delivery</td>
                                <td>
                                    <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>#000005</td>
                                <td>Petey Cruiser</td>
                                <td>20$</td>
                                <td>Paid</td>
                                <td>
                                    <button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-danger" style="width: 50px"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- bd -->
                </div><!-- bd -->
            </div><!-- bd -->
        </div>
        <!--/div-->
        <!-- row closed -->
    </div>
    <!-- Container closed -->
@endsection
