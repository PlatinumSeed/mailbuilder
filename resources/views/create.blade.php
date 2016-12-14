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
                    <input class="form-control" type="file" name="doctor_image" value="" />
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

            <fieldset>
                <legend>Loyalty</legend>

                <div class="form-group">
                    <label>Jade Members</label>
                    <input type="number" name="jade_members" class="form-control" placeholder="Jade Members">
                </div>

                <div class="form-group">
                    <label>Pearl Members</label>
                    <input type="number" name="pearl_members" class="form-control" placeholder="Pearl Members">
                </div>

                <div class="form-group">
                    <label>Diamond Members</label>
                    <input type="number" name="diamond_members" class="form-control" placeholder="Diamond Members">
                </div>

            </fieldset>

            <p>
                <button class="btn btn-success" type="submit">Submit</button>
            </p>

        </form>
    </div>
@endsection
