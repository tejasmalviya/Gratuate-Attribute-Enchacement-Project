@extends('layouts.dashboard')

@section('data')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <br>
                <div class="panel-heading"><h2>STUDENT REGISTRATION FORM</h2></div>


                <div class="panel-body">

 
<table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="City" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="Pin_Code" maxlength="6" />
(6 digit number)
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="State" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><input type="text" name="Country" value="India" readonly="readonly" /></td>
</tr>
 
<!----- Hobbies ---------------------------------------------------------->
 
<tr>
<td>HOBBIES <br /><br /><br /></td>
 
<td>
Drawing
<input type="checkbox" name="Hobby_Drawing" value="Drawing" />
Singing
<input type="checkbox" name="Hobby_Singing" value="Singing" />
Dancing
<input type="checkbox" name="Hobby_Dancing" value="Dancing" />
Sketching
<input type="checkbox" name="Hobby_Cooking" value="Cooking" />
<br />
Others
<input type="checkbox" name="Hobby_Other" value="Other">
<input type="text" name="Other_Hobby" maxlength="30" />
</td>
</tr>
 
<!----- Qualification---------------------------------------------------------->
<tr>
<td>SCORE <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table>
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Examination</b></td>

<td align="center"><b>Percentage</b></td>
<td align="center"><b>Year of Passing</b></td>
<td align="center"><b>Total Backlogs</b></td>

</tr>
 
<tr>
<td>1</td>
<td>Semester1</td>
<td><input type="text" name="Sem_no" maxlength="30" /></td>
<td><input type="text" name="Sem_Percentage" maxlength="30" /></td>
<td><input type="text" name="Sem_Y" maxlength="30" /></td>
</tr>
 
<tr>
<td>2</td>
<td>Semester2</td>
<td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
<td><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassXII_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>3</td>
<td>Semester3</td>
<td><input type="text" name="Graduation_Board" maxlength="30" /></td>
<td><input type="text" name="Graduation_Percentage" maxlength="30" /></td>
<td><input type="text" name="Graduation_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>4</td>
<td>Semester4</td>
<td><input type="text" name="Semester4_Board" maxlength="30" /></td>
<td><input type="text" name="Semester4_Percentage" maxlength="30" /></td>
<td><input type="text" name="Semester4_YrOfPassing" maxlength="30" /></td>
</tr>

<td>5</td>
<td>Semester5</td>
<td><input type="text" name="Semester5_Board" maxlength="30" /></td>
<td><input type="text" name="Semester5_Percentage" maxlength="30" /></td>
<td><input type="text" name="Semester5_YrOfPassing" maxlength="30" /></td>
</tr>

<td>6</td>
<td>Semester6</td>
<td><input type="text" name="Semester6_Board_Board" maxlength="30" /></td>
<td><input type="text" name="Semester6_Percentage_Percentage" maxlength="30" /></td>
<td><input type="text" name="Semester6_YrOfPassing_YrOfPassing" maxlength="30" /></td>
</tr>
 
 <td>7</td>
<td>Semester7</td>
<td><input type="text" name="Semester7_Board_Board" maxlength="30" /></td>
<td><input type="text" name="Semester7_Percentage" maxlength="30" /></td>
<td><input type="text" name="Semester7_YrOfPassing" maxlength="30" /></td>
</tr>

<td>8</td>
<td>Semester8</td>
<td><input type="text" name="Semester8_Board" maxlength="30" /></td>
<td><input type="text" name="Semester8_Percentage" maxlength="30" /></td>
<td><input type="text" name="Semester8_YrOfPassing" maxlength="30" /></td>
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
<input type="submit" value="Submit">
<input type="reset" value="Reset">
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
