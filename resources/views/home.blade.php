<form class="" action="{{url('create-mail')}}" method="post">
    {{ csrf_field() }}
    <input type="text" name="title" value="" /><br />
    <button type="submit" name="button">Submit</button>
</form>
