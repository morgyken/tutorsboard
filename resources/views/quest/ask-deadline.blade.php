@extends('layout.main-layout')

@section('title', 'Welcome')

<script type="text/javascript">

    function incrementValue()
    {
        var value =  document.getElementById('price').value ;
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('price').value =  value;
    }
    function decrementValue()
    {
        var value =document.getElementById('price').value;
        value = isNaN(value) ? 0 : value;
        value--;
        document.getElementById('price').value =  value;
    }



</script>


@section('content')
<div class="clearfix col-md-12">
    <h1>Almost there! Just give us a few more details.</h1>

<hr>
    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:66%">
            66% Complete (success)
        </div>
    </div>
    <hr>
<div class="col-md-2" >

</div>
    <div class="col-md-8" style="text-align: center; margin-bottom:70px;" >
        <form method="post" action="{{route('PostQuestionPrice')}}"  >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="well well-lg "  style="margin-top:80">


                <div class="well well-sm">
                    <p><strong>What is your Price? </strong></p>

                </div>


                <div style="font-size:24px"> <button type="button" id="min" onclick="decrementValue()">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button>
                    <i class="fa fa-usd" aria-hidden="true"></i>
                    <input type="text" id="price" name="question_price" id="price"  value="20" style="text-align: center; font-weight: 800">
                        <button type="button" id="plus" onclick="incrementValue()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                </div>

                <div class="well well-sm">
                    <h2><strong>What is your Deadline?</strong></h2>
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

                            <div class="form-group" >
                      
                                <input type="number" name="pages" id="pages" class="form-control" placeholder="Number of pages" id="pages">
                            </div>

                        </div>
                    </div>

                <div class="well well-lg">
                    <p><strong>The average question is picked up within 15 minutes
                            Satisfaction is guaranteed. </strong></p>

                </div>

                 <div class="well well-lg">
                    <p id="total"><strong> </strong></p>

                </div>
                <button type='input' class="btn btn-primary btn-md btn-block">
                    <h3>
                        <strong>  Finish
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </strong>
                    </h3></button>
            </div>
    </form>

    <div class="col-md-2">

    </div>
</div>

@endsection

