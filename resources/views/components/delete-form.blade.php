<form action="{{$slot}}" onsubmit="confirm('Do you want delete ?')" method="post" style="display: inline">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
</form>
