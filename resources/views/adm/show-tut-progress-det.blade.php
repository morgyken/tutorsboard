@extends('layouts.admin-layout-latest')

<style type="text/css">
    
    .header1 > .badge{
        background-color: green;
        padding: 10px;
        font-size: 13px;
    }
    .mydiv div{
      padding: 25px;

    }
</style>

@section('header')

Tutor Progress

@endsection

@section('mycontent')

<h3> Account Progress</h3>

<hr>
<div class="mydiv">

<article class="col-xl-12 maincontent">
         

    <div class="col-sm-5"> QA Score: </div>
    <div class="col-sm-6"> 0%</div>
       
    <div class="col-sm-5"> Revisons </div>
    <div class="col-sm-6"> 0.00% </div>
       
    <div class="col-sm-5"> Late Uploads</div>
    <div class="col-sm-6">0.00% </div>
    
    <div class="col-sm-5"> Refunds </div>
    <div class="col-sm-6"> 120 </div>

    <span class="col-md-12 btn btn-success col-offset-3" style=""> Total Score </span> 
    <span class="col-md-12 btn btn-warning col-offset-3" style=""> 0.00 % </span>
            
                
</article>
</div>






@endsection
                

    


