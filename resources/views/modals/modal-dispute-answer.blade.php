




<style>
    #ans{
        padding:12px;
    }
</style>

<!-- Modal -->
<div class="modal fade" id="myModal-dispute" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Are you Sure you want to Dispute the answer? 
                    </h4>
            </div>
            <div class="modal-body clearfix">
                
                <p id="ans">Give us a reason why you are disputing the answer </p>
                
                <form action="{{route('update-question', ['question_id' => $question['question_id']])}}" method="post" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" name="update" value="dispute">
                     
                    <div class="form-group">
                        <label for="usr">Enter your message here</label>
                        <textarea name="message"type="text" class="form-control" id="usr"> </textarea>
                    </div>
                     
                 
                    <button type="input" class="btn btn-md col-sm-3 btn-success btn-block"> Confirm Dispute</button>
                    <button type="reset" class="btn btn-md col-sm-3 btn-warning btn-block" data-dismiss="modal"> Cancel</button>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>

</div>



