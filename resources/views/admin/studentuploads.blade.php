
@extends('layouts.adminuserdash')


@section('data')



<div><h2 style="text-align: center;margin-top: 30px;">All Certificates by {{$user->name}}</h2></div>




 <div class="container col-sm-10" style="margin-top:45px; align-items: center!important;">  
     <ul class="nav nav-tabs" id="myTab" role="tablist" style="align-items: center!important;">
  
  <li class="nav-item" style="align-content: center!important;">
    <a class="nav-link active" id="viewcertificate-tab" data-toggle="tab" href="#viewcertificate" role="tab" aria-controls="viewcertificate-tab" aria-selected="true">Approved Uploads</a>
  </li>

  <li class="nav-item">
    <a class="nav-link " id="addcertificate-tab" data-toggle="tab" href="#addcertificate" role="tab" aria-controls="addcertificate-tab" aria-selected="true">Pending/Denied Approvals</a>
  </li>
  
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="viewcertificate" role="tabpanel" aria-labelledby="viewcertificate-tab">


        <div class="container-fluid col-sm-12"> 
            <div class="row justify-content-center">
                

                <table class="table col-sm-10">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Activity Type</th>
                            <th>Scope</th>
                            <th>Completion Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                     @foreach($usr as $users)

                     @if($users->astatus == 1)
                        <tr>
                            <td>
                                {{$users->aname}}
                            </td>
                            <td>
                                {{$users->atype}}
                            </td>
                            <td>
                                {{$users->ascope}}
                            </td>
                            <td>
                                {{$users->adate}}
                            </td>
                            <td>
                                <a href="/upload/viewcertificate/{{$users->aid}}" class="btn btn-primary" target="_blank">View</a>
                                <!-- <img src="{{asset('uploads/activity/'.$user->image)}}" style="height: 100px;width: 100px;"> -->
                                
                            </td>
                        </tr>  

                        @endif
                        @endforeach
                   
                </table>
            </div>
</div>
</div>

<div class="tab-pane fade show " id="addcertificate" role="tabpanel" aria-labelledby="addcertificate-tab">
  <div class="container-fluid col-sm-12"> 
            <div class="row justify-content-center">
                

                <table class="table col-sm-10">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Activity Type</th>
                            <th>Scope</th>
                            <th>Completion Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                     @foreach($usr as $users)

                     @if($users->astatus != 1)
                        <tr>
                            <td>
                                {{$users->aname}}
                            </td>
                            <td>
                                {{$users->atype}}
                            </td>
                            <td>
                                {{$users->ascope}}
                            </td>
                            <td>
                                {{$users->adate}}
                            </td>
                            <td>
                                @if($users->astatus==0)
                                Pending Approval
                                @else
                                Rejected
                                @endif
                            </td>
                            <td>
                                <a href="/upload/viewcertificate/{{$user->aid}}" class="btn btn-primary" target="_blank">View</a>
                            </td>
                        </tr>




                        @endif
                        @endforeach
                   
                </table>
            </div>
</div>
</div>







@endsection