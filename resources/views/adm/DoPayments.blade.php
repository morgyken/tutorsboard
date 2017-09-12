
<style>
    td > a {
        display: block;
    }
</style>
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
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <form action="{{route('tut-payment')}}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <td> <div class="col-md-3">User ID </div></td>
                                        <td> <div class="col-md-2">Request ID </div></td>

                                        <td> <div class="col-md-1">Paid </div></td>
                                        <td> <div class="col-md-3">Amount  </div></td>
                                        <td> <div class="col-md-2">Pay  </div></td>


                                    </tr>
                                </thead>
                                <hr>
                                
                                @foreach( $payment_req as $req => $value)
                                {
                                
                                <tbody>
                                <tr class="odd gradeX" style="cursor: pointer; margin-top: 7px;">
                                    <td>
                               <div class="col-md-3"><a href="{{route('tut-profile', ['email'=> $value->user_id] )}}">
                                       {{ $value-> user_id }}</a> </div>   </td>
                              <td> <div class="col-md-2"> {{$value-> request_id}}
                                    </div></td>
                                    <td>@if($value -> status =='paid')
                                            <div class="col-md-1"><i class="fa fa-check" aria-hidden="true"></i></div>
                                    @else
                                        <div class="col-md-1"><i class="fa fa-times" aria-hidden="true"></i></div>
                                    @endif</td>
                                    <td> <div class="col-md-3"> {{$value -> amount}} </div></td>
                                    <td>  <div class="col-md-2">
                                                     <input type="checkbox" name="checkbox[]" value="{{$value-> request_id}}" />
                                                 </div>  </td>
                                               
                                                                                 
                                 </tr>

                                @endforeach

                                </tbody>
                                
                            </table>
                                <hr>
                                <button type="input" class="btn btn-action center"> Confirm Payment </button>
                                </form>

                            <h5>{{ $payment_req->links() }}</h5>
                            <!-- /.table-responsive -->
                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            

                @endsection