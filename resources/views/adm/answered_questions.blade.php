<style type="text/css">
    .question > quest{
        color:#333;
        cursor: pointer;
    }

    .question_table{
        font-size: 12px;
    }

</style>

<?php

function ConvertTime12( $seconds){

    $dtF = new \DateTime('@0');
    $dtT = new \DateTime("@$seconds");

    $days =  $dtF->diff($dtT)->format('%a');

    if($days> 0){
        return $dtF->diff($dtT)->format('%a d %h hrs');
    }
    else {
        return $dtF->diff($dtT)->format('%h hrs %i min');
    }



}

function getDeadlineInSeconds1($deadline){


    $deadline = new \Carbon\Carbon($deadline);

    $now = \Carbon\Carbon::now();
    $difference = $deadline -> diffInSeconds($now);


    $interval = ConvertTime12($difference);

    return $interval; // array ['h']=>h, ['m]=> m, ['s'] =>s



}
?>

@extends('layout.admin-blank-layout')
@section( 'title')
    Admin Questions

@endsection
@section('pagename')
    Admin Questions Page
@endsection

@section('content')


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Questions Answered
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table  question_table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Question ID</th>
                                    <th>status </th>
                                    <th>Date Posted</th>
                                    <th>Time Left</th>
                                    <th>Summary</th>
                                    <th>Price</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($question as $quest=>$value)
                                    <?php  $question_id1 = substr($value->question_id, 0, 8) ;
                                    $rand = rand(75, 90);
                                    $summ = substr($value->summary, 0, $rand) ;
                                    $deadline = getDeadlineInSeconds1($value->question_deadline);

                                    $date=date_create($value->created_at);
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><a href="{{URL::to('/view-question/'.$value->question_id)}}">{{strtoupper($question_id1)}}... </a></td>
                                        <td class="center">{{$value->status}}</td>
                                        <td>{{ date_format($date,"m-d H:i") }}</td>
                                        <td>{{$deadline}}</td>
                                        <td>{{$summ}}...</td>
                                        <td class="center"> Ksh. {{$value->question_price}}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <h5>{{ $question->links() }}</h5>


                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

                @endsection