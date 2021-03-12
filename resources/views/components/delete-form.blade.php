<form action="{{$slot}}" method="post" style="display: inline">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" onclick="return confirm('Do you want delete ?')"><i class="fa fa-trash"></i></button>
</form>
