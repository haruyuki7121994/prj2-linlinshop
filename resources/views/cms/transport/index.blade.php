@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Transport" action="List" />

        <!-- row opened -->
        <div class="row row-sm">

            <!--div-->
            <div class="col-xl-12">

                <div class="card">
                    <div>
                        <div class="col-lg-4" style="margin-top: 20px"><a href="{{route('cms.transport.create')}}"><button class="btn btn-primary">Create</button></a></div>

                    </div>
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">Transport Table</h4>
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
                                    <th>Price</th>
                                    <th>Active</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($transports as $transport)
                                <tr>
                                    <th scope="row">{{$transport->id}}</th>
                                    <td>{{$transport->province->name}}</td>
                                    <td>{{$transport->price}}</td>
                                    <td>
                                        <x-button classType="success">
                                            <x-slot name="action"><i class="fa fa-eye"></i></x-slot>
                                            {{route('cms.transport.edit', $transport->id)}}
                                        </x-button>
                                        <x-delete-form>
                                            {{route('cms.transport.destroy', $transport->id)}}
                                        </x-delete-form>
                                    </td>
                                 
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- bd -->
                        {{ $transports->links() }}
                    </div><!-- bd -->
                </div><!-- bd -->
            </div>
            <!--/div-->
        </div>
        <!-- /row -->
    </div>
    <!-- Container closed -->
@endsection
