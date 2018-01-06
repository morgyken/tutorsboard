




<style>
    #ans{
        padding:12px;
    }
</style>

<!-- Modal -->
<div class="modal fade" id="myModal-optout" role="dialog">
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
                    
                     <input type="hidden" name="update" value="optout">

                      <input type="hidden" name="user_id" value="{{ Auth::user()->email }}">
                     
                    <p id="ans"> After disputing send us a reason below the question. Note that a reason for disputing must be given</p>
                    <button type="input" class="btn btn-md col-sm-3 btn-success btn-block"> Opt Out of Question</button>
                    <button type="reset" class="btn btn-md col-sm-3 btn-warning btn-block" data-dismiss="modal"> Cancel</button>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>

</div>



