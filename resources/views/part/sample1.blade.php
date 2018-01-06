<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery.min.js"></script>
<link href={{ URL::to('css/bootstrap-homepage.css')}} rel="stylesheet" type="text/css" />

<style type="text/css">
 .gallery{
 
   background-image:url({{URL::asset('assets/images/picture-2.png')}});
 }

 .gallery h1{
  font-size: 34px;
  padding: 30px;
  text-align: center;
  font-weight: 900;
  color: #fff;
  margin-top: 20px;
  margin-bottom: 23px;
  background-color: rgba(0, 26, 150, 0.6);

 }

 .gallery h2{
    font-size: 24px;
  padding: 20px;
  text-align: center;
  font-weight: 900;
  color: #fff;
  margin-top: 20px;
  margin-bottom: 23px;
  background-color: rgba(3, 1, 15, 0.6);

 }
  
</style>
  

  <meta charset="utf-8">
  <title>JS Bin</title>

  
</head>
<body>
  <div class="container-fluid clearfix">

  <div class="row gallery"> 
    <div class="col-md-4">
      
    </div>
     <div class="col-md-4 ">
      <h1 class="col-4-offset-3">Welcome to Tutorsboard</h1>

<h2> Help Students excel and Earn </h2>

<h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </h4>

<a href="#" class="btn btn-xls btn-primary"> Become a tutor </a>
    </div>
     <div class="col-md-4">
      
    </div>



  </div>
</div>

</body>
</html>