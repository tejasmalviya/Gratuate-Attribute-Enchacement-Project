@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">USER Dashboard</div>

                <div class="panel-body">
                    You are logged in as <strong>STUDENT</strong>!
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Acedemic Details</div>

                <div class="panel-body">
                    Click here <strong><a href="{{ url('/fill_details') }}"> ADD/EDIT</a></strong>!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
