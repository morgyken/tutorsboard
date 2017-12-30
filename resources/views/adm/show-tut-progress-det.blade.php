@extends('layouts.admin-layout-latest')

<style type="text/css">
    .mydiv
    {
        
        margin-bottom: 50px;
        padding: 20px;
    }
    .header1 > .badge
    {
        background-color: green;
        padding: 10px;
        font-size: 13px;
    }
    span
    {
      padding: 25px;

    }
</style>

@section('header')

Tutor Profile

@endsection

@section('mycontent')

<h2> My Profile</h2>

<hr>

<span class="col-md-5 col-offset-3"> QA Score </span> 
<span class="col-md-7 col-offset-3"> 0% </span> 



<span class="col-md-5 col-offset-3"> Revisions % </span> 
<span class="col-md-7 col-offset-3">  0.00</span> 


<span class="col-md-5 col-offset-3"> Late Uploads</span> 
<span class="col-md-7 col-offset-3"> 0.00% </span> 


<span class="col-md-5 col-offset-3"> Refunds</span> 
<span class="col-md-7 col-offset-3"> 0.00 % </span> 


<span class="col-md-12 btn btn-lg col-offset-3" style="background-color: green; padding: 20px"> Total Score </span> 
<span class="col-md-12 btn btn-lg col-offset-3" style="background-color: red; padding: 20px;"> 0.00 % </span>


@endsection
                

    


