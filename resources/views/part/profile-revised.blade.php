<link href="{{URL::asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<style>


    /* ==========================================================================
       Author's custom styles
       ========================================================================== */

    .fb-profile img.fb-image-lg{
        z-index: 0;
        width: 100%;
        height: 150px;
        margin-bottom: 10px;
        margin-top: -20px;
    }

    .fb-image-profile
    {
        margin: -90px 10px 0px 50px;
        z-index: 9;
        height: 180px;
        width: 150px;
        border-radius: 50%;
    }

    @media (max-width:768px)
    {

        .fb-profile-text>h1{
            font-weight: 700;
            font-size:16px;
        }

        .fb-image-profile
        {
            margin: -45px 10px 0px 25px;
            z-index: 9;
            width: 20%;
        }
    }

</style>

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="{{URL::asset('admin/images/image.jpg')}}" alt="Profile image example"/>
        <img align="left" class="fb-image-profile thumbnail" src="http://lorempixel.com/180/180/people/9/" alt="Profile image example"/>
        <div class="fb-profile-text">
            <div class="col-dm-9">
                <h3> Name: Morgan Okoth</h3>
                <p> Tutor Since: 12/12/ 2009</p>
                <p>Answered 23</p>


            </div>
        </div>

</div> <!-- /container -->
<div class="container">
    <div class="well clearfix">
        <div class="col-sm-4"> <h4> Final Earning</h4>  </div>
        <div  class="col-sm-4"><h4>Total Earning </h4> </div>
        <div class="col-sm-4"> <h4>Other details </h4> </div>
    </div>
</div>

<div class="container">
    <div class="well clearfix">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
            <tr>
                <th>Question Id</th>
                <th>Summary</th>

                <th>Total Amount </th>

                <th>Status</th>


            </tr>
            </thead>
        @foreach( $question as $quest=> $value)
            <tbody>

            <a href="#"> <tr class="odd gradeX" style="cursor: pointer">

                <td> {{$value->question_id}} </td>
                <td> {!! substr( $value-> summary, 0, 100)!!}  </td>
                <td> Ksh. 34 </td>
            </tr>
            </a>

            @endforeach

            </tbody>
            </table>

            <h5>{{ $question->links() }}</h5>
    </div>
</div>


