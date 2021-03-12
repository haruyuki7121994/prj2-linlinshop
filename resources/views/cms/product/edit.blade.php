@extends('cms.layout.master')
@section('content')
    <!-- container -->
    <div class="container-fluid">

        <x-breadcrumb category="Product" action="Edit" />

        <!-- row -->
        <div class="row row-sm">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Edit New Product</h4>
                    </div>
                    <div class="card-body pt-0">
                        @include('cms.layout.message')
                        <form class="form-horizontal" method="post" action="{{route('cms.product.update', $product->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="{{old('name', $product->name)}}">
                            </div>

                            <div class="form-group">
                                <select name="category_id" id="" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option {{$product->category_id == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="note" placeholder="Description" cols="10" name="description">{{$product->description}}</textarea>
                            </div>
                            <div class="form-group mb-0 justify-content-end">
                                <label for="inputName">Status: </label>
                                <input type="hidden" name="is_featured" id="btn-active" value="{{old('is_featured', $product->is_featured)}}">
                                <div class="main-toggle main-toggle-secondary {{$category->is_active == \App\Category::ACTIVE ? 'on' : ''}}">
                                    <span></span>
                                </div>
                            </div>

                            <div class="row row-sm" style="margin-top: 10px">
                                <div class="col-lg">
                                    <a class="btn btn-success" data-target="#modaldemo1" data-toggle="modal" href="">Add Variant</a>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped mg-b-0 text-md-nowrap">
                                        <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Selection</th>
                                        </tr>
                                        </thead>
                                        <tbody id="variant-table">
                                        @foreach($variants as $variant)
                                            <tr data-id="{{$variant->id}}">
                                                <th><img width="200" style="object-fit: contain" src="{{$variant->images ? $variant->images->url : ''}}" alt=""></th>
                                                <td>{{$variant->size->name}}</td>
                                                <td>{{$variant->color->name}}</td>
                                                <td>{{$variant->qty}}</td>
                                                <td>{{$variant->price}}$</td>
                                                <td>
                                                    <x-button classType="primary">
                                                        <x-slot name="action"><i class="fa fa-eye"></i></x-slot>
                                                        {{route('cms.product.attr.show', $variant->id)}}
                                                    </x-button>
                                                    <span class="btn btn-danger btn-destroy" data-id="{{$variant->id}}"><i class="fa fa-trash"></i></span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div><!-- bd -->
                            </div><!-- bd -->
                            <input type="hidden" name="variants" id="variants">
                            <div class="form-group mb-0 mt-3 justify-content-end">
                                <div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="submit" class="btn btn-secondary">Back</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
    <x-add-attributes-product :colors="$colors" :sizes="$sizes"></x-add-attributes-product>
    <!-- Container closed -->
    @push('custom-js')
        <!-- Internal form-elements js -->
        <script src="{{asset('cms/assets/js/form-elements.js')}}"></script>
        <script src="{{asset('cms/assets/js/modal.js')}}"></script>
        <script>
            $( document ).ready(function() {
                let variants = []
                let index = 1

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token()}}'
                    }
                });

                $('.main-toggle').click(function() {
                    let className = this.className
                    className.includes(' on') ? $('#btn-active').val(1) : $('#btn-active').val(0)
                });

                $('#btn-variant').click(function () {
                    let file = new FormData()
                    file.append('file', $('#file').prop('files')[0])

                    let color = $('#color_id').val()
                    let size = $('#size_id').val()
                    let qty = $('#qty').val()
                    let price = $('#price').val()

                    $.ajax({
                        url: '{{route('cms.upload')}}',
                        type: 'POST',
                        data: file,
                        success:function(data){
                            let tr = ''
                            tr += `
                            <tr>
                                <th><img width="200" style="object-fit: contain" src="${data}" alt=""></th>
                                <td>${$('#size_id').find(":selected").text()}</td>
                                <td>${$('#color_id').find(":selected").text()}</td>
                                <td>${qty}</td>
                                <td>${price}$</td>

                                <td>
                                    <span class="btn btn-danger variant" data-id="${index}" style="width: 50px"><i class="fa fa-trash"></i></span>
                                </td>
                            </tr>
                            `
                            $('#variant-table').append(tr);
                            variants.push({
                                'id': index,
                                'image_url': data,
                                'size': size,
                                'color': color,
                                'qty': qty,
                                'price': price,
                            })
                            inputVariants()
                            index++
                        },
                        cache: false,
                        contentType: false,
                        processData: false
                    });
                })

                $('.btn-destroy').click(function () {
                    if (confirm('Do you want delete attributes ?')) {
                        let id = $(this).data('id')
                        window.location.href = '/cms/product/attributes/' + id + '/delete'
                    }
                })

                $( document ).ajaxComplete(function( event, request, settings ) {
                    $('.variant').on('click', function () {
                        let id = $(this).data('id')
                        variants = variants.filter(itm => itm.id !== id)
                        inputVariants()
                        $(this).parent().parent().remove()
                    })
                });

                function inputVariants() {
                    let variants_json = JSON.stringify(variants)
                    $('#variants').val(variants_json)
                }
            });
        </script>
    @endpush
@endsection

