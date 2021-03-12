@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Size" action="List" />

        <!-- row opened -->
        <div class="row row-sm">

            <!--div-->
            <div class="col-xl-12">

                <div class="card">
                    <div>
                        <div class="col-lg-4" style="margin-top: 20px"><a href="{{route('cms.size.create')}}"><button class="btn btn-primary">Create</button></a></div>

                    </div>
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">Size Table</h4>
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
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Selection</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($sizes as $size)
                                    <tr>
                                        <th scope="row">{{$size->id}}</th>
                                        <td>{{$size->name}}</td>
                                        <td>
                                            @if($size->is_active == \App\Category::ACTIVE)
                                                <a class="badge badge-success" href="#">Active</a>
                                            @else
                                                <a class="badge badge-danger" href="#">Inactive</a>
                                            @endif
                                        </td>
                                        <td>
                                            <x-button classType="success">
                                                <x-slot name="action"><i class="fa fa-eye"></i></x-slot>
                                                {{route('cms.size.edit', $size->id)}}
                                            </x-button>
                                            <x-delete-form>
                                                {{route('cms.size.destroy', $size->id)}}
                                            </x-delete-form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- bd -->
                        {{ $sizes->links() }}
                    </div><!-- bd -->
                </div><!-- bd -->
            </div>
            <!--/div-->
        </div>
        <!-- /row -->
    </div>
    <!-- Container closed -->
@endsection
