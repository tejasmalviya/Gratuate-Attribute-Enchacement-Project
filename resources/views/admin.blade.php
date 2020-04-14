@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">STAFF Dashboard</div>

                <div class="panel-body">
                    <h5>View all Departmental <a href="/studentupdates"> Updates/Activities </a> </h5>
                </div>
            </div>

        </div>


    </div>


            

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading ">Approve Student Activity</div>

                <div class="panel-body">
                    <table class="col-md-12">
                        <tr>
                            <th>
                                Uploaded By
                            </th>
                            <th>
                                Activity Name
                            </th>
                            <th>
                                Activity Type
                            </th>
                            <th>
                                View Details
                            </th>
                        </tr>
                        @foreach($certificates as $certificate)
                        @if($certificate->astatus==0 )
                        <tr>
                            <td>
                                {{$certificate->sname}}
                            </td>
                            <td>
                                {{$certificate->aname}}
                            </td>
                            <td>
                                {{$certificate->atype}}
                            </td>
                            <td>
                             <a href="admin/approve/{{$certificate->aid}}" class="">View</a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                        </table>

                </div>
            </div>

        </div>
            
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading ">Student List</div>

                <div class="panel-body">
                    <table class="col-md-12">
                        <tr>
                            <th>
                                Student ID
                            </th>
                            <th>
                                Student Name
                            </th>
                            <th>
                                Year
                            </th>
                            <th>
                                Profile
                            </th>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td>
                                {{$user->idnumber}}
                            </td>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{$user->studyyear}}
                            </td>
                            <td>
                                <a href="/studentprofile/{{$user->id}}">View Profile</a>
                            </td>
                        </tr>
                        @endforeach
                        </table>

                </div>
            </div>

        </div>

        
    




</div>



@endsection
