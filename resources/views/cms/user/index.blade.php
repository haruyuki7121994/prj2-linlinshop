@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="User" action="List" />

        <!-- row opened -->
        <div class="row row-sm">

            <!--div-->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">User Table</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('cms.layout.message')
                        <div class="table-responsive">
                            <table class="table table-striped mg-b-0 text-md-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Name</th>
                                    <th>Total Order</th>
                                    <th>Status</th>
                                    <th>Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>0</td>
                                    <td>
                                        @if($user->is_active == \App\User::ACTIVE)
                                            <a class="badge badge-success" href="#">Active</a>
                                        @else
                                            <a class="badge badge-danger" href="#">Inactive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <x-button classType="success">
                                            <x-slot name="action"><i class="fa fa-eye"></i></x-slot>
                                            {{route('cms.user.edit', $user->id)}}
                                        </x-button>
                                        <x-delete-form>
                                            {{route('cms.user.destroy', $user->id)}}
                                        </x-delete-form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- bd -->
                        {{ $users->links() }}
                    </div><!-- bd -->
                </div><!-- bd -->
            </div>
            <!--/div-->
        </div>
        <!-- /row -->
    </div>
    <!-- Container closed -->
@endsection
