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

Tutor Profile

@endsection

@section('mycontent')


<div class="mydiv">

<article class="col-xl-12 maincontent">

 <div class="col-sm-12">  <h3>Personal Profile</h3>
    @if(empty($data)) 
  {
    var_dump($data);
 <p style="color: Yellow"> You have not updte your website yet </p>

  }
  @endif
  <hr></div>
  
 
         <form action="{{ route('tut-profile') }}" method="POST">
            {{ csrf_field()}}

             <div class="col-sm-5"> First Name: </div>
             <div class="col-sm-6"> 

              <input type="text" name="firstname" value="{{ $data->firstname }}"> 
            </div>

       
             <div class="col-sm-5"> Last Name </div>
             <div class="col-sm-6"> <input type="text" name="lastname" value="{{ $data->lastname }}"> </div>

       
             <div class="col-sm-5">Skype (Optional) </div>
             <div class="col-sm-6">  <input type="text" name="skype" value="{{ $data->skype }}">  </div>

             <div class="col-sm-5"> County </div>
             <div class="col-sm-6">  <input type="text" name="county" value="{{$data->county }}">  </div>

        

          
             <div class="col-sm-5"> Town </div>
             <div class="col-sm-6"> <input type="text" name="town" value="{{$data->town}}"> </div>


       
             <div class="col-sm-5"> Phone Number </div>
             <div class="col-sm-6"> <input type="text" name="phoneno" value="{{$data->phoneno }}">  </div>

             <div class="col-sm-5"> Email </div>
             <div class="col-sm-6">  <input type="text" name="emil" value="{{ Auth::user()->email }}"> </div>

               <button  type="input" class="btn btn-primary col-md-offset-4"> Update Profile</button>

          </form>
<div class="col-sm-12">  <h3>Eduction Profiles</h3>
  <hr> </div>

          <form action="{{route('tut-education')}}" method="POST">

            <div class="col-sm-5"> High School</div>
             <div class="col-sm-6"> <input type="text" name="highschool" value="{{ $education->highschool }}"> </div>
               {{ csrf_field()}}

       
             <div class="col-sm-5">College</div>
             <div class="col-sm-6"> <input type="text" name="College" value="{{ $education->college }}">  </div>

             <div class="col-sm-5"> Area Of Study</div>
             <div class="col-sm-6">  <input type="text" name="areaofstudy" value="{{$education->areaofstudy }}"> </div>

             <button  type="input" class="btn btn-primary col-md-offset-4">Update Profile</button>

          </form>

          <div class="col-sm-12">  <h3>Profile Pictures</h3>
  <hr> </div>

          <form action="{{ route('profile-pic') }}" method="POST" enctype="multipart/form-data">

            <div class="col-sm-5">Profile Cover Photo</div>
             <div class="col-sm-6"> <input type="file" name="cover" > </div>
               {{ csrf_field()}}

             <div class="col-sm-5">Chosen Picture</div>
             <div class="col-sm-6"> <input type="file" name="College" >  </div>

             <button  type="input" class="btn btn-primary col-md-offset-4">Update Profile</button>

          </form>


             <div class="col-sm-12"> 

              <h3> Additional Information</h3>
              <hr>

                <p> You can have additional information below on the expertise, to helpin filtering the required orders for yourself</p>
              </div>   
      
             <div class="col-sm-12"> 
                <form action="{{ route('tut-account') }}" method="POST" id="">


                     <div class="form-group">
                        <div class="col-md-5 myform">Prefered Payment Method</div>

                            <select name="user_language" form-control>
                                <option value="Equity">English</option>
                                                                                          
                            </select>

                        </div>

                    <div class="form-group myform">
                        <div class="col-md-5">Area Of Expertise</div>

                            <div class="col-md-7">
                                <textarea name="expertise" class="form-control"></textarea> 
                            </div>
                        </div>
                        {{ csrf_field() }}


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Payments
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
        
                
</article>
</div>


@endsection


                

    


