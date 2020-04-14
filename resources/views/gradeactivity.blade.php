
@extends('layouts.app')

@section('content')

<h2 style="text-align: center;padding-bottom: 30px">Mark Attributes Relation</h2>

 <h4 style="text-align: right;margin-top: -30px;padding-right: 200px">**Range: 0 to 10**</h4>
 <h4 style="text-align: right;margin-top: 5px;padding-right: 150px"><a href="https://www.mun.ca/engineering/undergrad/graduateattributes.pdf" target="_blank">View GA Attributes Details</a></h4>
               
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
@foreach($user as $usr)
<div class="row">
        
            
            <form method="POST" action="update/{{$usr->id}}">
        {{ csrf_field() }}
        
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="ga1">Attribute 1: Engineering knowledge</label>
                        <input type="number" class="form-control" name="ga1" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                    <div class="col-sm-6">
                        <label for="ga2">Attribute 2: Problem analysis</label>
                        <input type="number" class="form-control" name="ga2" placeholder="Range: 0-10"  min="0" step="0.5" max="10" value="0">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="ga1">Attribute 3: Design/development of solutions</label>
                        <input type="number" class="form-control" name="ga3" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                    <div class="col-sm-6">
                        <label for="ga2">Attribute 4: Conduct investigations of complex problems</label>
                        <input type="number" class="form-control" name="ga4" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="ga1">Attribute 5: Modern tool usage</label>
                        <input type="number" class="form-control" name="ga5" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                    <div class="col-sm-6">
                        <label for="ga2">Attribute 6: The engineer and society</label>
                        <input type="number" class="form-control" name="ga6" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="ga1">Attribute 7: Environment and sustainability</label>
                        <input type="number" class="form-control" name="ga7" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                    <div class="col-sm-6">
                        <label for="ga2">Attribute 8: Ethics</label>
                        <input type="number" class="form-control" name="ga8" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="ga1">Attribute 9: Individual and team work</label>
                        <input type="number" class="form-control" name="ga9" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                    <div class="col-sm-6">
                        <label for="ga10">Attribute 10: Communication</label>
                        <input type="number" class="form-control" name="ga10" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="ga11">Attribute 11: Project management and finance</label>
                        <input type="number" class="form-control" name="ga11" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                    <div class="col-sm-6">
                        <label for="ga12">Attribute 12: Life-long learning</label>
                        <input type="number" class="form-control" name="ga12" placeholder="Range: 0-10"  min="0" max="10" value="0" step="0.5">
                    </div>
                </div>


                <button class="btn btn-primary" type="submit" value = "Update">Save</button>
                <a href="/admin/approve/{{$aid}}" class="btn btn-danger">Back</a>
               
            </form>
            <br>
            @endforeach
               </div>
    </div>
    
</div>



@endsection