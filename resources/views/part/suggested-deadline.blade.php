

<div class="row">
    @foreach($deadlines as $comm => $value)
        <div class="col-md-12" style="background: #F3F3F3;">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star-empty"></span>
            <p> {{$value->user_id}} Suggested: {{'  '.$value-> question_deadline}}</p>
            <span class="pull-right">10 days ago</span>
        </div>
        <hr>
    @endforeach
</div>