




<style>
    #ans{
        padding:12px;
    }
</style>

<!-- Modal -->
<div class="modal fade" id="myModal-revision" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Are you Sure you want to opt out?
                    </h4>
            </div>
            <div class="modal-body clearfix">
                <form action="{{route('update-question', ['question_id' => $question['question_id']])}}" method="post" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                     <input type="hidden" name="update" value="revision">

                      <input type="hidden" name="user_id" value="{{ Auth::user()->email }}">
                      <div class="form-group">                       
                      <textarea type="text" name="revision" class="form-control" rows="6" placeholder="Enter Revision text and instructions here"></textarea> 

                     </div>                  

                     
                    <p id="ans"> The question will be handled successfully by the tutor, thank you in advance</p>
                    <button type="input" class="btn btn-md col-sm-3 btn-success btn-block"> Set on revision</button>
                    <button type="reset" class="btn btn-md col-sm-3 btn-warning btn-block" data-dismiss="modal"> Cancel</button>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>

</div>



