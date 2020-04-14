
@extends('layouts.dashboard')


@section('data')



<div><h2 style="text-align: center;margin-top: 30px;">All Certificates</h2></div>



<div class="text-right mb-3" style="padding-right: 150px;margin-top:-20px;">
    <a href="/addcertificate" class="btn btn-primary btn-lg">ADD NEW</a>
</div>
 <div class="container col-sm-10" style="margin-top:-25px; align-items: center!important;">  
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
                    
                     @foreach($users as $user)

                     @if($user->astatus == 1)
                        <tr>
                            <td>
                                {{$user->aname}}
                            </td>
                            <td>
                                {{$user->atype}}
                            </td>
                            <td>
                                {{$user->ascope}}
                            </td>
                            <td>
                                {{$user->adate}}
                            </td>
                            <td>
                                <a href="/upload/viewcertificate/{{$user->aid}}" class="btn btn-primary" target="_blank">View</a>
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
                    
                     @foreach($users as $user)

                     @if($user->astatus != 1)
                        <tr>
                            <td>
                                {{$user->aname}}
                            </td>
                            <td>
                                {{$user->atype}}
                            </td>
                            <td>
                                {{$user->ascope}}
                            </td>
                            <td>
                                {{$user->adate}}
                            </td>
                            <td>
                                @if($user->astatus==0)
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