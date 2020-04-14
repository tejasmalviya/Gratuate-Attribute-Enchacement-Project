@extends('layouts.app')

@section('content')
<h2 class="center" style="text-align: center;">Activity Verification</h2>

</div></div>

  
    <div class="row">
  <div class="col-6">
  	<div class="col-md-6" style="align-items: center;padding-left: 50px;padding-top: 70px" >

  		<table class="col-md-12" style="align-items: center;padding-top: 100px">
                        
                        @foreach($users as $user)
                        <style type="text/css">
                        	th, td { 
                width:150px; 
                
                padding:15px
                        </style>
                        <tr>
                        	
                            <td>
                                Uploaded By 
                            </td>
                            <td>
                        		-
                        	</td>
                            <td>
                                {{$user->sname}}
                            </td>
                            
                        </tr>

                        <tr>
                            <td>
                                Activity Name :
                            </td>
                            <td>
                        		-
                        	</td>
                            <td>
                                {{$user->aname}}
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                Activity Type :
                            </td>
                            <td>
                        		-
                        	</td>
                            <td>
                                {{$user->atype}}
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                Activity Scope :
                            </td>
                            <td>
                        		-
                        	</td>
                            <td>
                                {{$user->ascope}}
                            </td>
                            
                        </tr>
                        
                        </table>
                        <br><br>
  <div style="padding-top: 220px;align-items: center;padding-left: 150px">                      
<a href="/admin/approve/grade/{{$user->aid}}" class="btn btn-primary" >Aprrove and proceed</a>
<a href="/admin/reject/{{$user->aid}}" class="btn btn-danger">Reject Activity</a>
    </div>
    </div>
  </div>
  <div class="col-6">
  	<img src="{{asset('uploads/activity/'.$user->image)}}" style="height: 620px;width: 650px;border:1.5px solid black">
  </div>
</div>
@endforeach

@endsection