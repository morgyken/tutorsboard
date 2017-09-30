




<style>
    #ans{
        padding:12px;
    }
</style>

<!-- Modal -->
<div class="modal fade" id="myModal-ans" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Are you Sure you want to Answer the Question?</h4>
            </div>
            <div class="modal-body clearfix">


                <form action="{{ route('update-question', ['question_id' => $question['question_id']]) }}"  enctype="multipart/form-data" method="POST">
                    <p> Use  this to post an answer. The answer will continue being used. </p> 
                       .</p>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                     <input type="hidden" name="update" value="postAnswer" >
                     
                    <div class="form-group">
                        <textarea class="form-control form-control input-lg" name="answer_body" rows="6"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="usr">Include Files</label>
                        @include('part.file-picker')
                    </div>
                    <button type="input" class="btn btn-md col-sm-3 btn-success btn-block">Give your Answer</button>
                    <button type="reset" class="btn btn-md col-sm-3 btn-warning btn-block" data-dismiss="modal"> Cancel</button>
                </form>

                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>

</div>



