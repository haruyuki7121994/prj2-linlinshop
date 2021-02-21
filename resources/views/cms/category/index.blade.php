@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Category" action="List" />

        <!-- row opened -->
        <div class="row row-sm">

            <!--div-->
            <div class="col-xl-12">

                <div class="card">
                    <div>
                        <div class="col-lg-4" style="margin-top: 20px">
                            <x-button classType="primary">
                                <x-slot name="action">Create</x-slot>
                                {{route('cms.category.create')}}
                            </x-button>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('cms.layout.message')
                        <div class="table-responsive" style="margin-bottom: 20px">
                            <table class="table table-striped mg-b-0 text-md-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        @if($category->is_active == \App\Category::ACTIVE)
                                            <a class="badge badge-success" href="#">Active</a>
                                        @else
                                            <a class="badge badge-danger" href="#">Inactive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <x-button classType="success">
                                            <x-slot name="action"><i class="fa fa-eye"></i></x-slot>
                                            {{route('cms.category.edit', $category->id)}}
                                        </x-button>
                                        <x-delete-form>
                                            {{route('cms.category.destroy', $category->id)}}
                                        </x-delete-form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>

                            </table>

                        </div><!-- bd -->
                        {{ $categories->links() }}
                    </div><!-- bd -->

                </div><!-- bd -->
            </div>
            <!--/div-->
        </div>
        <!-- /row -->
    </div>
    <!-- Container closed -->
@endsection
