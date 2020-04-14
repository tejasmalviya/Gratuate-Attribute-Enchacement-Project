
@extends('layouts.dashboard')


@section('data')

<h2 style="text-align: center;padding-top: 20px">Recommendation Section</h2>
<!-- 
<div class=" alert alert-danger" role="alert">
  No new recommendations found
</div> -->

<div class="card">
  <div class="card-header">
    Activity Recommedation 1
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$rec1->aaname}}</h5>
    <ul>
      <li>
        Type : {{$rec1->aatype}}
      </li>
      <li>
        Scope : {{$rec1->aascope}}
      </li>
      <li>
        Descrption : {{$rec1->aadesc}}
      </li>
      <li>
        Link : {{$rec1->aalink}}
      </li>
    </ul>
    
  <!--   <a href="https://kjsieit.somaiya.edu/en/view-events/824" class="btn btn-primary">Mark as Completed</a>
   --></div>
</div>


<div class="card">
  <div class="card-header">
    Activity Recommendation 2
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$rec2->aaname}}</h5>
    <ul>
      <li>
        Type : {{$rec2->aatype}}
      </li>
      <li>
        Scope : {{$rec2->aascope}}
      </li>
      <li>
        Descrption : {{$rec2->aadesc}}
      </li>
      <li>
        Link : {{$rec2->aalink}}
      </li>
    </ul>
    
    
 <!--    <a href="https://www.coursera.org/learn/r-programming" class="btn btn-primary">Mark as Completed</a>
  --> </div>
</div>
  <div style="padding-left: 500px">
       <a href="/events" class="btn btn-primary">Mark as Completed / Get New</a>
 
  </div>


@endsection