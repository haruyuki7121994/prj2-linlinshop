@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Promotion" action="List" />

        <!-- row opened -->
        <div class="row row-sm">

            <!--div-->
            <div class="col-xl-12">

                <div class="card">
                    <div>
                        <div class="col-lg-4" style="margin-top: 20px"><a href="{{route('cms.promotion.create')}}"><button class="btn btn-primary">Create</button></a></div>

                    </div>
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">Promotion Table</h4>
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
                                    <th>From Date</th>
                                    <th>To Date</th>
                                    <th>Total Product</th>
                                    <th>Status</th>
                                    <th>Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($promotions as $promotion)
                                    <tr>
                                        <th scope="row">{{$promotion->id}}</th>
                                        <td>{{$promotion->name}}</td>
                                        <td>{{$promotion->from_date}}</td>
                                        <td>{{$promotion->end_date}}</td>
                                        <td>0</td>
                                        <td>
                                            @if($promotion->is_active == \App\Promotion::ACTIVE)
                                            <a class="badge badge-success" href="#">Active</a>
                                        @else
                                            <a class="badge badge-danger" href="#">Inactive</a>
                                        @endif
                                        </td>
                                        <td>
                                            <x-button classType="success">
                                                <x-slot name="action"><i class="fa fa-eye"></i></x-slot>
                                                {{route('cms.promotion.edit', $promotion->id)}}
                                            </x-button>
                                            <x-delete-form>
                                                {{route('cms.promotion.destroy', $promotion->id)}}
                                            </x-delete-form>
                                            <x-button classType="primary">
                                                <x-slot name="action"><i class="fa fa-plus"></i></x-slot>
                                                {{route('cms.promotion.show', $promotion->id)}}
                                            </x-button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- bd -->
                        {{ $promotions->links() }}
                    </div><!-- bd -->
                </div><!-- bd -->
            </div>
            <!--/div-->
        </div>
        <!-- /row -->
    </div>
    <!-- Container closed -->
@endsection
