@extends('frontend.layout.master')
@section('content')
    @php
        $user = Auth::user();
        $orders = $user->orders;
    @endphp
    <section>
        <div class="container">
            <br><br>
            <legend style="text-align: center; font-weight: bolder; font-size: 3em; font-family: Verdana, Geneva, Tahoma, sans-serif;"></legend>
            <div class="container-fluid">

                <!-- row -->
                <div class="row row-sm">
                    <!-- Col -->
                    <div class="col-lg-4">
                        <div class="card mg-b-20">
                            <div class="card-body">

                                <div class="main-content-label tx-13 mg-b-25">
                                    <h3 style="font-weight: bolder;">Contact</h3>
                                </div>
                                <div class="main-profile-contact-list">
                                    <div class="media">
                                        <div class="media-icon bg-primary-transparent text-primary">
                                            <i class="icon ion-md-phone-portrait"></i>
                                        </div>
                                        <div class="media-body">
                                            <span>Mobile:</span>
                                            <div>
                                                <i class="fas fa-phone-square-alt"></i> {{$user->mobile}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-icon bg-success-transparent text-success">
                                            <i class="icon ion-logo-slack"></i>
                                        </div>
                                        <div class="media-body">
                                            <span>Email:</span>
                                            <div>
                                                <i class="fas fa-envelope-square"></i> {{$user->email}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-icon bg-info-transparent text-info">
                                            <i class="icon ion-md-locate"></i>
                                        </div>
                                        <div class="media-body">
                                            <span>Current Address:</span>
                                            <div>
                                                <i class="fas fa-map-marker-alt"></i> {{$user->address}}
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- main-profile-contact-list -->
                            </div>
                        </div>
                    </div>

                    <!-- Col -->

                    <div class="col-lg-8">
                        @include('cms.layout.message')
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4 main-content-label" style="font-size: 1.5em; font-weight: bolder;">Personal Information</div>

                                <form class="form-horizontal" method="post" action="{{route('auth.profile.update')}}">
                                    @csrf
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label">User Name</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"  placeholder="User Name" value="{{old('name', $user->name)}}"  name="name" >
                                            </div>
                                        </div>
                                        <div class="mb-4 main-content-label" style="font-size: 1.5em; font-weight: bolder;">Contact Info</div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label">Phone</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" name="mobile" value="{{old('mobile', $user->mobile)}}"  placeholder="Phone number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label">Province</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <select name="province_id" id="" class="form-control">
                                                        @foreach($provinces as $province)
                                                            <option {{old('province_id', $province->id) == $user->province_id ? 'selected' : ''}} value="{{$province->id}}">{{$province->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label">Address</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="address" rows="2"  placeholder="Address">{{old('address', $user->address)}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-columns">
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
                                <div class="mb-4 main-content-label" style="font-size: 1.5em; font-weight: bolder;">Update Password</div>

                                <form class="form-horizontal" method="post" action="{{route('auth.profile.repassword')}}">
                                    @csrf

                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label">New Password</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="new_password"  placeholder="New Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label">Re Password</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"  placeholder="Re Password" name="re_password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-colums">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update Password</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                    <!-- /Col -->
                </div>
                <br>
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0" style="font-size: 1.5em; font-weight: bolder;" >History Order</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped mg-b-0 text-md-nowrap">
                                <thead>
                                <tr>
                                    <th>Order Code</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>#{{$order->code}}</td>
                                    <td>${{$order->total}}</td>
                                    <td>{{\App\Order::LIST_STATUS[$order->status]}}</td>
                                    <td>
                                        <a href="{{route('frontend.order.success', $order->code)}}"><button class="btn btn-success" style="width: 50px"><i class="fa fa-eye"></i></button></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- bd -->
                    </div><!-- bd -->
                </div><!-- bd -->

            </div>
            <br><br>
        </div>
        <br><br>
    </section>
@endsection
