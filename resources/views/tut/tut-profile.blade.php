
<style>

    .myrow{
        margin-top:40px;
    }
</style>


@extends('layout.tut-layout1')

@section('body')
    <div class="col-lg-3">

        @include('part.vertical-menu1')

    </div>

    <div class="col-lg-9">

        <h1> Tutor Main Profile</h1>

        <hr>

     <article class="col-xl-12 maincontent">
         <div class="row myrow">

             <div class="col-sm-5"> Name: </div>
             <div class="col-sm-6">  </div>

         </div>

         <div class="row myrow">

             <div class="col-sm-5"> Second Name: </div>
             <div class="col-sm-6">  </div>

         </div>
         <div class="row myrow">

             <div class="col-sm-5"> Phone Number: </div>
             <div class="col-sm-6">  </div>

         </div>

         <div class="row myrow">

             <div class="col-sm-5"> Town/City: </div>
             <div class="col-sm-6">  </div>

         </div>

         <div class="row myrow">

             <div class="col-sm-5"> Profile Pic: </div>
             <div class="col-sm-6">  </div>

         </div>

         <div class="row myrow">

             <div class="col-sm-5"> Cover Picture: </div>
             <div class="col-sm-6">  </div>

         </div>
         <div class="row myrow">

             <div class="col-sm-5"> Personal Picture: </div>
             <div class="col-sm-6">  </div>

         </div>

         <h2> Areas Of Experrtise</h2>
         <hr>

         <div class="row myrow">

             <div class="col-sm-5"> Education: </div>
             <div class="col-sm-6"> 
             
                <div class="row myrow">

                    <div class=""> College Degree: </div>
                    
                    <div class=""> Masters Degree : </div>
                    
                </div>
            </div>
         </div>
         
         <div class="row myrow">

             <div class="col-sm-5"> Education: </div>
             <div class="col-sm-6"> 
             
                <div class="row myrow">

                    <div class=""> College Degree: </div>
                    
                    <div class=""> Masters Degree : </div>
                    
                </div>
            </div>
         </div>

         <div class="row myrow">

                 <div class="col-sm-12"> Curriculum Vitae</div>
                     <div class="col-sm-16"> Show vitae here</div>
                     <div class="col-sm-16"> Show certificate here</div>
                

             </div>




     </article>

<!-- /Article -->

            <hr>

@endsection
<!-- /Article -->