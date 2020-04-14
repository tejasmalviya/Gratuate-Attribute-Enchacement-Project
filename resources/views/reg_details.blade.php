
@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


<form method="POST" action="/create">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
 
        <div class="form-group">
            <label for="branch">Branch</label>
            <select name="branch" class="form-control" id="branch" name="branch">
<option value=""> Select Branch</option>                
<option value="101">Computer Enginering</option>
<option value="102">Information Technology</option>
<option value="103">Electronics</option>
</select>
            
        </div>
 
        <div class="form-group">
            <label for="year">Year of Study</label>
            <select name="branch" class="form-control" id="branch" name="branch">
<option value=""> Select Branch</option>                
<option value="101">Computer Enginering</option>
<option value="102">Information Technology</option>
<option value="103">Electronics</option>
</select>
            <input type="year" class="form-control" id="year" name="year">
        </div>
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
 -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

<div class="row">
        
            
            <form method="POST" action="fill_initail_details/create">
        {{ csrf_field() }}
        <div class="form-group">

                    <div class="col-sm-16">
                        <label for="inputFirstname">Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">ID Number</label>
                        <input type="number" class="form-control" name="idnumber" placeholder="Certificate number">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Year of Study</label>
                        <input type="text" class="form-control" name="studyyear" placeholder="eg: FE,SE,TE,BE">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">Cousre Type</label>
                        <select name="branch" class="form-control" id="branch" name="branch">
<option value="Information Technology"> Select Branch</option>                
<option value="Computer">Computer Enginering</option>
<option value="Information Technology">Information Technology</option>
<option value="Electronics">Electronics</option>
</select>

                        
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">Completion Year</label>
                        <select class="form-control" id="year" name="year">
<option value=""> Select Year</option>                
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
</select>

                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">Date of Birth</label>

                        <input type="Date" class="form-control" name="dob" placeholder="Date">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Contact Number</label>
                        <input type="number" class="form-control" name="contact" placeholder="Contact Number">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputWebsite">E-mail Address</label>
                        <input type="email" class="form-control" name="email" placeholder="E-mail">
                    </div>
                    
                </div>
                <button class="btn btn-primary" type="submit" value = "Add student"/>Save</button>
               
            </form>
            <br>
               </div>
    </div>
    
</div>



@endsection