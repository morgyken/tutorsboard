@extends('layouts.admin-layout-latest')

<style type="text/css">
    .mydiv{
        
        margin-bottom: 50px;
        padding: 20px;
    }
    .header1 > .badge{
        background-color: green;
        padding: 10px;
        font-size: 13px;
    }
    span{
      padding: 25px;

    }
</style>

@section('header')

Tutor Profile

@endsection

@section('mycontent')

<h2> My Profile</h2>

<hr>

<span class="col-md-5 col-offset-3"> First Name </span> 
<span class="col-md-7 col-offset-3"> Paul </span> 



<span class="col-md-5 col-offset-3"> Last Name </span> 
<span class="col-md-7 col-offset-3"> Kennedy </span> 


<span class="col-md-5 col-offset-3"> SKype </span> 
<span class="col-md-7 col-offset-3"> morgyken </span> 


<span class="col-md-5 col-offset-3"> County </span> 
<span class="col-md-7 col-offset-3"> Machakos </span> 


<span class="col-md-5 col-offset-3"> Town </span> 
<span class="col-md-7 col-offset-3"> Machakos </span>


<span class="col-md-5 col-offset-3"> Phone Number </span> 
<span class="col-md-7 col-offset-3"> Phone Number</span>

<span class="col-md-5 col-offset-3"> Email </span> 
<span class="col-md-7 col-offset-3"> morgyken@gmail.com</span>

<span class="col-md-12"> 
  <a href="#" class="btn btn-lg btn-primary btn-block"> Change Phone Number </a> </span> 

  <h2>Eduction Profiles</h2>
  <hr>

<span class="col-md-5 col-offset-3"> HighSchool </span> 
<span class="col-md-7 col-offset-3"> Highschool </span> 

<span class="col-md-5 col-offset-3"> College </span> 
<span class="col-md-7 col-offset-3"> College </span>

<span class="col-md-5 col-offset-3"> Area of Study </span> 
<span class="col-md-7 col-offset-3"> Area of Study</span>


  <h2> Additional Information</h2>
  <hr>
  <form action="" method="POST">
  <span class="col-md-3 col-offset-3"> Language </span> 
  <span class="col-md-9 col-offset-3"> morgyken@gmail.com</span>

  <span class="col-md-3 col-offset-3"> Area Of Expertise </span> 
<span class="col-md-9 col-offset-3"> <textarea class="col-md-12" rows="5"></textarea></span>

{{ csrf_field()}}

<button type="input" class="btn btn-lg btn-primary btn-block"> Save Changes</button>


</form>

@endsection
                

    


