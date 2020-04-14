
@extends('layouts.dashboard')


@section('data')


<div class="container-fluid py-5">
                <h2 style="text-align: center;">Add Activity</h2>
    <div class="row">
        <div class="col-md-10 mx-auto">

            
            <form method="POST" action="{{ route('addimage') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">

                    <div class="col-sm-16">
                        <label for="inputFirstname">Name</label>
                        <input type="text" class="form-control" id="anane" name="aname" placeholder="Name">
                    </div>
                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="atype">Activity Type</label>
                        <select  class="form-control" id="atype" name="atype">
<option value="None">-Select one-</option>                
<option value="Internship">Internship</option>
<option value="Competition">Competition</option>
<option value="Course">Course</option>
</select>
                        </div>
                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="ascope">Activity Scope</label>
                        
    <select class="form-control" id="ascope" name="ascope">
      <option value="None">-Select one-</option>
      <option value="Curricular">Curricular</option>
      <option value="Co-curricular">Co-curricular</option>
      <option value="Extra-curricular">Extra-curricular</option>
      
    </select>

                        
                    </div>
                    <div class="col-sm-3">
                        <label for="adate">Completion Date</label>
                        <input class="form-control" type="date" value="0000-00-00" id="adate" name="adate">

                    </div>
                    
                </div>
                <div class="form-group">

                    <div class="col-sm-16">
                        <label for="inputFirstname">Description</label>
                        <input type="text" class="form-control" id="adesc" name="adesc" placeholder="Enter Activity Description ">
                    </div>

                    <div class="form-group">

                    <div class="col-sm-16">
                        <label for="inputFirstname">Reference Link</label>
                        <input type="text" class="form-control" id="alink" name="alink" placeholder="Enter URL">
                    </div>
                    
                </div>
                    
                </div>

                <div class="form-group">
                     <p>Certifate Upload:</p>
    <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" name="afile" id="afile">
      <label class="custom-file-label" for="afile">Choose file</label>
    </div>

                    <!-- <div class="col-sm-16">
                        <label for="inputFirstname">adgsfg</label>
                        <p>Certifate Upload:</p>
                        <input type="file" class="custom-file-input" name="customFile" name="filename">
      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div> -->
                    
                </div>
        
                
                <button class="btn btn-primary" type="submit" value = "add activity"/>SAVE</button>
                <a href="/uploads"> <button type="button"  class="btn btn-danger px-4 float-centre">BACK</button></a>
            
               
            </form>
            <br>
               </div>
    </div>
    
</div>
</div>
    
</div>
    

@endsection