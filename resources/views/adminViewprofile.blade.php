@extends('layouts.app')

@section('content')
<div class="container">
    <h2 style="padding-left: 190px">{{$user->name}}</h2>
        <br>
        <div class="row" style="padding-left: 190px">   
   <button class="btn btn-primary"  value="contact">Recommend Student</button>
 <a href="/admin/viewupload">  <button class="btn btn-primary" value="contact" > View Uploads</button></a>
   <a href="/admin" class="btn btn-primary" value="contact">Back</a> 
</div>   
                                    <div class="row ">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->idnumber}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date of Birth</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->dob}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Branch</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->branch}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>College Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->contact}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Year of Passing</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->year}}</p>
                                            </div>
                                        </div>   
    </div>

</div>



    <div class="row" style="padding-left: 190px">
                                            <div class="col-md-6">
                                    

<br>
 
<td>
<table>
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Examination</b></td>

<td align="center"><b>Percentage</b></td>
<td align="center"><b>Pointer(CGPA)</b></td>
<td align="center"><b>Total Backlogs</b></td>

</tr>
 
<tr>
<td>1</td>
<td>Semester1</td>
<td><input type="text" name="Sem_no" placeholder="67" /></td>
<td><input type="text" name="Sem_Percentage" placeholder="7.45" /></td>
<td><input type="text" name="Sem_Y" placeholder="0" /></td>
</tr>
 
<tr>
<td>2</td>
<td>Semester2</td>
<td><input type="text" name="ClassXII_Board" placeholder="76.7" /></td>
<td><input type="text" name="ClassXII_Percentage" placeholder="8.12" /></td>
<td><input type="text" name="ClassXII_YrOfPassing" placeholder="01" /></td>
</tr>
 
<tr>
<td>3</td>
<td>Semester3</td>
<td><input type="text" name="Graduation_Board" placeholder="60" /></td>
<td><input type="text" name="Graduation_Percentage" placeholder="6.7" /></td>
<td><input type="text" name="Graduation_YrOfPassing" placeholder="0" /></td>
</tr>
 
<tr>
<td>4</td>
<td>Semester4</td>
<td><input type="text" name="Semester4_Board" placeholder="80" /></td>
<td><input type="text" name="Semester4_Percentage" placeholder="8.34" /></td>
<td><input type="text" name="Semester4_YrOfPassing" placeholder="0" /></td>
</tr>

<td>5</td>
<td>Semester5</td>
<td><input type="text" name="Semester5_Board" placeholder="76" /></td>
<td><input type="text" name="Semester5_Percentage" placeholder="7.7" /></td>
<td><input type="text" name="Semester5_YrOfPassing" placeholder="0" /></td>
</tr>

<td>6</td>
<td>Semester6</td>
<td><input type="text" name="Semester6_Board_Board" placeholder="67" /></td>
<td><input type="text" name="Semester6_Percentage_Percentage" placeholder="5.9" /></td>
<td><input type="text" name="Semester6_YrOfPassing_YrOfPassing" placeholder="1" /></td>
</tr>
 
 <td>7</td>
<td>Semester7</td>
<td><input type="text" name="Semester7_Board_Board" placeholder="78" /></td>
<td><input type="text" name="Semester7_Percentage" placeholder="7.2" /></td>
<td><input type="text" name="Semester7_YrOfPassing" placeholder="0" /></td>
</tr>

<td>8</td>
<td>Semester8</td>
<td><input type="text" name="Semester8_Board" placeholder="82" /></td>
<td><input type="text" name="Semester8_Percentage" placeholder="7.9" /></td>
<td><input type="text" name="Semester8_YrOfPassing" placeholder="0" /></td>
</tr>


<tr>
<td></td>
<td></td>
<td align="center"></td>
<td align="center"></td>
</tr>
</table>
 
</td>
</tr>
 
 
<!----- Submit and Reset ------------------------------------------------->
<tr>

<td colspan="2" align="center">
    <br>
</td>
</tr>
</table>
 
</form>
 
                   
                </div>
            </div>






        </div>
    </div>
</div>




@endsection
