<!-- Basic modal -->
<div class="modal" id="modaldemo1">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <form action="{{route('cms.promotion.add', $promotion->id)}}" method="post">
                @csrf
                <div class="modal-header">
                    <h6 class="modal-title">Add Product</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control" id="color_id">
                            @foreach($products as $product)
                            <option value="{{$product->id}}">{{$product->product->name}} - Color: {{$product->color->name}} - Size: {{$product->size->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-primary" id="btn-variant" type="button">Submit</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Basic modal -->
