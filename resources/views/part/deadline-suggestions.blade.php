<div class="row">
    @foreach($deadline as $dead => $value)
        <div class="col-md-12" style="background: #F3F3F3;">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star-empty"></span>
            <p>
            <div class="col-md-6">{{$value->user_id}}</div>
            <div>${{$value-> suggested_price}}</div></p>
            <span class="pull-right">10 days ago</span>

        </div>
        <hr>
    @endforeach
</div>