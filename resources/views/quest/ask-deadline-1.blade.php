@extends('layout.cust-dashboard-layout')
    
    @section('title')

    Client Dashboard

    @endsection

    @section('bodytext')


<script type="text/javascript">

    function incrementValue()
    {
        var value =  document.getElementById('price').value ;

        value = isNaN(value) ? 0 : value;
        if(value < 150){
            value++;
        }
        
        document.getElementById('price').value =  value;
    }
    function decrementValue()
    {
        var value =document.getElementById('price').value;
        value = isNaN(value) ? 0 : value;
        if(value > 20){
            value--;
        }
        document.getElementById('price').value =  value;
    }
    function minmax(value, min, max) 
    {
        if(parseInt(value) < min || isNaN(parseInt(value))) 
            return 20; 
        else if(parseInt(value) > max) 
            return 150; 
        else return value;
    }



</script>


         <section class="testimonials4 cid-qI9LEZJgCJ" id="testimonials4-g">       

          
          <div class="container">
            <h2 class="pb-3 mbr-fonts-style mbr-white align-center display-2 col-md-8">
            GIVE DEADLINE
            </h2>
            <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style mbr-white align-center display-5 col-md-8">
              In this panel, you will set the dates for the deadline and choose paper options. Some options are not mandatory
            </h3>
            <div class="col-md-12 testimonials-container"> 
              <div class="clearfix col-md-8">
            <h1>Almost there! Just give us a few more details.</h1>

            <hr>
            <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:66%">
            66% Complete (success)
        </div>
    </div>
    <hr>

    <div class="col-md-11" style="text-align: center; margin-bottom:70px;" >
        <form method="post" action="{{route('PostQuestionPrice')}}"  >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="well well-lg "  style="margin-top:80">


                <div class="well well-sm">
                    <h3><strong>What is your Price? </strong></h3>

                    <p>Use the + and - sign to increase to the agreed price</p>

                </div>


                <div style="font-size:24px"> <button type="button" id="min" onclick="decrementValue()">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button>
                    <i class="fa fa-usd" aria-hidden="true"></i>
                    <input type="text" id="price" name="question_price" id="price" min="12"
                    onkeyup="this.value = minmax(this.value, 20, 150)" max="150" value="20" style="text-align: center; font-weight: 800" readonly>
                        <button type="button" id="plus" onclick="incrementValue()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                </div>

                <div class="well well-sm">
                    <h2><strong>What is your Deadline?</strong></h2>
                    <p>Click on the link below to select deadline</p>
                </div>

                <div class="row">
                    <div class='col-md-12'>

                        @include('part.datetimepicker')

                    </div>
                </div>
            </div>
            <div class="row well well-sm">
            <div class="form-group col-md-3">
            <label for="comment">Paper Format </label>
                <div class="radio">
                    <label><input type="radio" value="APA" name="paper_format">APA</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" value="MLA" name="paper_format">MLA</label>
                    </div>
                    <div class="radio disabled">
                      <label><input type="radio" value="Chicago" name="paper_format">Chicago</label>
                    </div>
                    <div class="radio disabled">
                      <label><input type="radio" value="Harvard" name="paper_format">Harvard</label>
                    </div>
            </div>

                        <div class="form-group col-md-3">
                            <label for="comment">Urgency </label>
                           
                                <div class="radio">
                                  <label><input type="radio" value="low" name="urgency">Low</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" value="medium" name="urgency">Medium</label>
                                </div>
                                <div class="radio disabled">
                                  <label><input type="radio" value="high" name="urgency">High</label>
                                </div>
                                <div class="radio disabled">
                                  <label><input type="radio" value="very_high" name="urgency">Very High</label>
                                </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                           
                                @include('part.academic-level')
                            </div>

                            <div class="form-group">
                           
                               @include('part.auto-com')
                            </div>
                             <div class="form-group">
                            <label for="topic"> 
                                <h4>Select Question Category</h4></label>
                                   <select type="text" name="academic_level" class="form-control" placeholder="Enter Topic" required="required"  id="topic">
                                      @foreach($category as $item)
                                        <option value="{{$item->category}}">
                                          {{$item->academic_level}}
                                        </option>
                                      @endforeach
                                    </select>           
                            </div>

                            <div class="form-group" >
                      
                                <input type="number" name="pages" id="pages" class="form-control" placeholder="Number of pages" id="pages">
                            </div>

                        </div>
                    </div>

                <div class="well well-lg">
                    <p><strong>The average question is picked up within 15 minutes
                            Satisfaction is guaranteed. </strong></p>

                </div>

                 
                <button type='input' class="btn btn-primary btn-md btn-block">
                    <h3>
                        <strong>  Finish
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </strong>
                    </h3></button>
            </div>
    </form>

    
</div>

              
          </div>
        </section>
  
        @endsection
         @section ('comments')
         <section class="mbr-section article content11 cid-qI9Iudr8h7" id="content11-3">
     
             <div class="container">
                <div class="media-container-row">
                    <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                        <ol>
                          <li><strong>MOBILE FRIENDLY</strong> - no special actions required, all sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site, it will adapt automagically. <a href="https://Mobiriseirise.com/">Try it now!</a></li>
                            <li><strong>EASY AND SIMPLE</strong> - cut down the development time with drag-and-drop website builder. Drop the blocks into the page, edit content inline and publish - no technical skills required. <a href="https://mobirise.com/">Try it now!</a></li>
                            <li><strong>UNIQUE STYLES</strong> - choose from the large selection of latest pre-made blocks - full-screen intro, bootstrap carousel, content slider, responsive image gallery with lightbox, parallax scrolling, video backgrounds, hamburger menu, sticky header and more. <a href="https://mobirise.com/">Try it now!</a></li>
                      
                        </ol>
                    </div>
                </div>
            </div>
        </section>                   

      @endsection


