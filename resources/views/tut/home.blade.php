@extends('layout.tut-layout12')

@section('body')

    <?php

    function ConvertTime12( $seconds){

        $dtF = new \DateTime('@0');
        $dtT = new \DateTime("@$seconds");

        $days =  $dtF->diff($dtT)->format('%a');

        if($days> 0){
            return $dtF->diff($dtT)->format('%a days %h hours');
        }
        else {
            return $dtF->diff($dtT)->format('%h hours %i min');
        }



    }

    function getDeadlineInSeconds1($deadline){


        $deadline = new \Carbon\Carbon($deadline);

        $now = \Carbon\Carbon::now();

        $difference = $deadline -> diffInSeconds($now);

        $TimeStart = strtotime(\Carbon\Carbon::now());

        $TimeEnd = strtotime($deadline);

        $Difference = ($TimeEnd - $TimeStart);

        if($Difference < 0){

            return 'Overdue';
        }



        $interval = ConvertTime12($difference);

        return $interval; // array ['h']=>h, ['m]=> m, ['s'] =>s

    }

    function getDeadlineInSeconds12($deadline){


        $deadline = new \Carbon\Carbon($deadline);

        $now = \Carbon\Carbon::now();

        $difference = $deadline -> diffInSeconds($now);

        $TimeStart = strtotime(\Carbon\Carbon::now());

        $TimeEnd = strtotime($deadline);

        $Difference = ($TimeEnd - $TimeStart);

        return $Difference;
    }
    ?>


<div class="clearfix">
    <div class="col-md-10">
        <h4>Question Detail  </h4>
    </div>
    <div class="col-md-2">
        <h4> Other Details</h4>
    </div>

</div>
<hr>
@foreach($question as $quest=>$value)



    <?php  $array_of_deadline = getDeadlineInSeconds1($value->question_deadline);

    $deadline12 = getDeadlineInSeconds12($value->question_deadline);

    ?>


    <div class="question">

        <a href="{{route('view-question', ['question_id'=> $value->question_id])}}">
            <div class="clearfix quest">
                <div class="col-md-10" style="color:#333">

                    <h4>{{$value->category}}</h4>
                    <p>{{ $value->summary  }}  </p>
                </div>
                <div class="col-md-2">

                    <h4 style="padding-bottom:20px;">
                            <span class="label label-danger label-lg ">
                                {{ $array_of_deadline }}
                            </span>  </h4>
                    <h4> <span class="label label-warning ">Ksh: {{$value->question_price}}</span></h4>
                </div>
            </div>
        </a>
    </div>



    <hr>


@endforeach
<h5>{{ $question->links() }}</h5>



</article>

    @endsection
<!-- /Article -->