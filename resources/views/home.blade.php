<form class="" action="{{url('create-mail')}}" method="post">
    {{ csrf_field() }}
    <input type="text" name="file_name" value="" /><br />
    <textarea name="content" rows="8" cols="40"></textarea><br />
    <button type="submit" name="button">Submit</button>
</form>
