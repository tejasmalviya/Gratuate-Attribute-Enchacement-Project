
@extends('layouts.dashboard')


@section('data')

<!-- <h2 style="text-align: center;padding-top: 20px">Graduate Attribute Details</h2>
 --><div class="jumbotron jumbotron-fluid" style="margin-top: -30px">
  <div class="container">
    <h2 class="display-6">Graduate Attribute Attainment</h2>
    <p class="lead">Your Graduate Attribute score (GA score) in <span style="color:blue;font-size: 130%"> {{$overall}}/100</span></p>
  </div>
</div>



<div class="container" style="margin-top: -50px">
  <h6 style="padding-bottom: 20px">Detailed Distribution</h6>
  <div class="progress" style="height:20px;">
    <div class="progress-bar" style="width:{{$attribute->a1}}%;">{{$attribute->a1}}%</div>
  </div>
  <p>Attribute 1: Engineering knowledge</p>
  <div class="progress" style="height:20px">
    <div class="progress-bar" style="width:{{$attribute->a2}}%;">{{$attribute->a2}}%</div>
  </div>
  <p>Attribute 2: Problem analysis</p>

  <div class="progress" style="height:20px">
    <div class="progress-bar" style="width:{{$attribute->a3}}%;">{{$attribute->a3}}%</div>
  </div>
  <p>Attribute 3: Design/development of solutions</p>

  <div class="progress" style="height:20px">
    <div class="progress-bar" style="width:{{$attribute->a4}}%;">{{$attribute->a4}}%</div>
  </div>
  <p>Attribute 4: Conduct investigations of complex problems</p>

  <div class="progress" style="height:20px">
    <div class="progress-bar" style="width:{{$attribute->a5}}%;">{{$attribute->a5}}%</div>
  </div>
  <p>Attribute 5: Modern tool usage</p>
  
  <div class="progress" style="height:20px">
    <div class="progress-bar" style="width:{{$attribute->a6}}%;">{{$attribute->a6}}%</div>
  </div>
  <p>Attribute 6: The engineer and society</p>

<div class="progress" style="height:20px">
    <div class="progress-bar" style="width:{{$attribute->a7}}%;">{{$attribute->a7}}%</div>
  </div>
  <p>Attribute 7: Environment and sustainability</p>

<div class="progress" style="height:20px">
    <div class="progress-bar" style="width:{{$attribute->a8}}%;">{{$attribute->a8}}%</div>
  </div>
  <p>Attribute 8: Ethics</p>

<div class="progress" style="height:20px">
    <div class="progress-bar" style="width:{{$attribute->a9}}%;">{{$attribute->a9}}%</div>
  </div>
  <p>Attribute 9: Individual and team work</p>

<div class="progress" style="height:20px">
    <div class="progress-bar" style="width:{{$attribute->a10}}%;">{{$attribute->a10}}%</div>
  </div>
  <p>Attribute 10: Communication</p>

<div class="progress" style="height:20px">
    <div class="progress-bar" style="width:{{$attribute->a11}}%;">{{$attribute->a11}}%</div>
  </div>
  <p>Attribute 11: Project management and finance</p>

<div class="progress" style="height:20px">
    <div class="progress-bar" style="width:{{$attribute->a12}}%;">{{$attribute->a12}}%</div>
  </div>
  <p>Attribute 12: Life-long learning</p>

</div>

  


@endsection