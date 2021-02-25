<!-- Basic modal -->
<div class="modal" id="modaldemo1">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add Variant</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <select class="form-control" id="color_id">
                        @foreach($colors as $color)
                        <option value="{{$color->id}}">{{$color->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" id="size_id">
                        @foreach($sizes as $size)
                            <option value="{{$size->id}}">{{$size->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="number" id="qty" class="form-control" placeholder="Qty">
                </div>
                <div class="form-group">
                    <input type="number" id="price" class="form-control" placeholder="Price">
                </div>
                <div class="form-group">
                    <input type="file" id="file" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-primary" id="btn-variant" type="button">Submit</button>
                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Basic modal -->
