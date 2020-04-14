
@extends('layouts.dashboard')

@section('data')
<style type="text/css">
    ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 20px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <h4>Deptarment Activities Updates</h4>
            <ul class="timeline">
                @foreach($users as $user)
                <li>
                    Preformed by: {{$user->sname}}
                    <a href="#" class="float-right">Date : {{$user->adate}}</a>
                    <ul>
                        <li>
                            Activity Name :{{$user->aname}}
                        </li>
                        <li>
                            Activity Type : {{$user->atype}}
                        </li>
                        <li>
                            Activity Scope : {{$user->ascope}}
                        </li>
                        <li>
                            Activity Descrption : {{$user->adesc}} 
                        </li>
                        <li>
                            Activity Link : {{$user->alink}}
                        </li>
                        
                            <a href="/upload/viewcertificate/{{$user->aid}}" class="btn btn-primary" target="_blank" class="float-right">View Certificate</a>
                        
                    </ul>

                </li>
                @endforeach
                
            </ul>
        </div>
    </div>
</div>



@endsection
