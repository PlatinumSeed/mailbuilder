@extends('layouts.layout')

@section('content')
    <div id="app" class="container-fluid">
        <form class="" action="{{url('create-mail')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset>
                <legend>Global</legend>

                <div class="form-group">
                    <label>Mailer Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Mailer Name">
                </div>

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>

                <div class="form-group">
                    <label>Sub Title</label>
                    <input type="text" name="sub_title" class="form-control" placeholder="Sub Title">
                </div>

            </fieldset>

            <fieldset>
                <legend>About Section</legend>
                <div class="form-group">
                    <label>Doctor Photo</label>
                    <input type="file" name="about_doctor_photo" value="" />
                </div>

                <div class="form-group">
                    <label>Left Column Content</label>
                    <textarea class="form-control" name="about_left_content"></textarea>
                </div>

                <div class="form-group">
                    <label>Right Column Content</label>
                    <textarea class="form-control" name="about_right_content"></textarea>
                </div>
            </fieldset>

            <addblock></addblock>



            <p>
                <button class="btn btn-default" type="submit">Submit</button>
            </p>

        </form>
    </div>
@endsection
