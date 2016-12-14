@extends('layouts.layout')

@section('content')

    <div class="container-fluid">

        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif


        <div class="page-header">
            <h1>Current Emails</h1>
        </div>

        <div class="row">
            @foreach ($mailers as $mailer)
                <div class="col-xs-6 col-sm-4 col-md-2">
                    <a href="{{url('edit')}}/{{$mailer->id}}" class="thumbnail">
                        <img src="{{$mailer->preview}}" alt="{{$mailer->name}}">
                    </a>
                </div>
            @endforeach
        </div>

        <div class="btn-group" role="group" aria-label="...">
            <a href="{{url('create')}}" type="button" class="btn btn-default">New Mailer</a>
        </div>

    </div>

@endsection
