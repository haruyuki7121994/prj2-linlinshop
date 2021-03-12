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
                                        {{$user->mobile}}
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
                                        {{$user->email}}
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
                                        {{$user->address}}
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
                                        {{count($user->orders)}}
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
                        @include('cms.layout.message')
                        <form class="form-horizontal"method="post" action="{{route('cms.user.update',$user->id)}}">
                            @method('PUT')
                            @csrf
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">User Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" value="{{old('name',$user->name)}}"  placeholder="User Name" id="inputName">
                                    </div>
                                </div>
                                <div class="mb-4 main-content-label">Contact Info</div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Phone</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" name="mobile" id="phone" value="{{old('mobile',$user->mobile)}}" class="form-control"  placeholder="phone number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Address</label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="address" rows="2"  placeholder="Address">{{old('address',$user->address)}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="inputName">Status: </label>
                                        </div>
                                        <div class="c0l-md-9">
                                            <input type="hidden" name="is_active" id="btn-active" value="{{old('is_active', $user->is_active)}}">
                                    <div class="main-toggle main-toggle-secondary {{$user->is_active == \App\User::ACTIVE ? 'on' : ''}}">
                                        <span></span>
                                    </div>
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
                            @foreach($user->orders as $order)
                            <tr>
                                <th scope="row">{{$order->id}}</th>
                                <td>#{{$order->code}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$order->total}}$</td>
                                <td>{{\App\Order::LIST_STATUS[$order->status]}}</td>
                                <td>
                                    <x-button classType="success">
                                        <x-slot name="action"><i class="fa fa-eye"></i></x-slot>
                                        {{route('cms.order.edit', $order->id)}}
                                    </x-button>
                                </td>
                            </tr>
                            @endforeach
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
@push('custom-js')
    <!-- Internal form-elements js -->
    <script src="{{asset('cms/assets/js/form-elements.js')}}"></script>
    <script>
        $( document ).ready(function() {
            $('.main-toggle').click(function() {
                let className = this.className
                className.includes(' on') ? $('#btn-active').val(1) : $('#btn-active').val(0)
            });
        });
    </script>
@endpush
