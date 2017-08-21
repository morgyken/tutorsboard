

<div class="row">
@foreach($comment as $comm => $value)
    <div class="col-md-12" style="background: #F3F3F3;">
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
        {{$value->user_id}}
        <span class="pull-right">10 days ago</span>
        <p>

        <p>{{$value-> comment_body}}</p>

        </p>
    </div>
    <hr>
    @endforeach
    </div>