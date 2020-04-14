@extends('layouts.app')

@section('content')
<div class="container">


<div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading ">Uploaded Certicates</div>

                <div class="panel-body">
                    <table class="col-md-12">
                        <tr>
                            
                            <th>
                                Certificate ID
                            </th>
                            <th>
                                Certificate Name
                            </th>
                            <th>
                                Type
                            </th>
                            <th>
                                Level
                            </th>
                            <th>
                                Assigned Score
                            </th>
                            <th>
                            
                            </th>
                        </tr>
                        
                        <tr>
                            <td>
                                2354
                            </td>
                            <td>
                                Hackaton
                            </td>
                            <td>
                                Curriculum
                            </td>
                            <td>
                                University 
                            </td>

                            <td>
                                <select>
<?php
    for ($i=75; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
</select>
                            </td>
                            <td>
                                <a href="/admin/view1"><button class="btn btn-primary">View Certificate</button></a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                5674
                            </td>
                            <td>
                                Chess
                            </td>
                            <td>
                                Sports
                            </td>
                            <td>
                                State
                            </td>
                            <td>
                                <select>
<?php
    for ($i=45; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
</select>
                                
                            </td>
                            <td>
                                <a href="/admin/view1"><button class="btn btn-primary">View Certificate</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                7889
                            </td>
                            <td>
                                ICast 19-20
                            </td>
                            <td>
                                Co-Curriculum
                            </td>
                            <td>
                                National
                            </td>
                            <td>
                                <select>
<?php
    for ($i=65; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
</select>
                            </td>
                            <td>
                                <a href="/admin/view1"><button class="btn btn-primary">View Certificate</button></a>
                            </td>
                        </tr>

                                                <tr>
                            <td>
                                2354
                            </td>
                            <td>
                                Idea Compitttion
                            </td>
                            <td>
                                Curriculum
                            </td>
                            <td>
                                Inter-College 
                            </td>

                            <td>
                                <select>
<?php
    for ($i=55; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
</select>
                            </td>
                            <td>
                                <a href="/admin/view1"><button class="btn btn-primary">View Certificate</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                5642
                            </td>
                            <td>
                                Project Compitetion
                            </td>
                            <td>
                                Curriculum
                            </td>
                            <td>
                                Intra-college 
                            </td>

                            <td>
                                <select>
<?php
    for ($i=40; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
</select>
                            </td>
                            <td>
                                <a href="/admin/view1"><button class="btn btn-primary">View Certificate</button></a>
                            </td>
                        </tr>



                        </table>

                </div>
            </div>

        </div>

</div>



@endsection
