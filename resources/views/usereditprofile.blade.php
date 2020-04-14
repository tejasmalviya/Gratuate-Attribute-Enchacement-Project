
@extends('layouts.dashboard')


@section('data')



<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets">
    <h3 style="padding-top: 20px;padding-left: 300px">Edit User Profile</h3>
<div class="row" style="padding-top: 20px">
  <div class="col-xs-12 col-sm-9">
    <form class="form-horizontal">
        <div class="panel panel-default">
          <div class="panel-body text-center" style="padding-top: 50px">
            <h5>Upload Profile Photo</h5>
                 <input type="file" class="custom-file-input" name="afile" id="afile">
      <label class="custom-file-label" for="afile">Choose Image</label>

          </div>
        </div>
      <div class="panel panel-default" style="margin-top: -50px">
        <div class="panel-heading">
        <h4 class="panel-title">User info</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Update Year</label>
            <div class="col-sm-10">
              <select class="form-control">
                <option selected="">Select year</option>
                <option>SE</option>
                <option>TE</option>
                <option>BE</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Mobile number</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" placeholder="Enter number">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Personal Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Enter Email ID">
            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Work Profiles</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">LinkedIn </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Enter URL">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Github</label>
            <div class="col-sm-10">
              <input placeholder="Enter URL" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">More Profiles</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Enter URL">
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Skills</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Add Skills</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Enter Skills">
            </div>
          </div>
          <div class="form-group" style="padding-left: 300px">
            <div class="col-sm-10 col-sm-offset-2">
              <a href="/home" type="button" class="btn btn-success">Submit</a>
              <a href="/home" type="button" class="btn btn-default">Back</a>
            </div>
          </div>
        </div>
      </div>
    </form>

  </div>


<h2 style="padding-left: 30px">Academic Scores</h2>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">

<div class="row">
        
            
            <form method="POST" action="">
        
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="ga1">SEM 1</label>
                        <input type="number" class="form-control" name="ga1" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                    <div class="col-sm-6">
                        <label for="ga2">Sem 2</label>
                        <input type="number" class="form-control" name="ga2" placeholder="Range: 0-10"  min="0" step="0.5" max="10" value="0">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="ga1">Sem 3</label>
                        <input type="number" class="form-control" name="ga3" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                    <div class="col-sm-6">
                        <label for="ga2">Sem 4</label>
                        <input type="number" class="form-control" name="ga4" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="ga1">Sem 5</label>
                        <input type="number" class="form-control" name="ga5" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                    <div class="col-sm-6">
                        <label for="ga2">Sem 6</label>
                        <input type="number" class="form-control" name="ga6" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="ga1">Sem 7</label>
                        <input type="number" class="form-control" name="ga7" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                    <div class="col-sm-6">
                        <label for="ga2">Sem 8</label>
                        <input type="number" class="form-control" name="ga8" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                </div>



                <button class="btn btn-primary" type="submit" value = "Update">Update</button>
            </form>
               </div>
    </div>
    
</div>


</div>



@endsection