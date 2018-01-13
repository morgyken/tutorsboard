




<style>
    #ans{
        padding:12px;
    }
</style>

<!-- Modal -->
<div class="modal fade" id="myModal-reassign" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Are you sure you want to resassign this question?</h4>
            </div>
            <div class="modal-body clearfix">
                <form action="{{route('update-question', ['question_id' => $question['question_id']])}}" method="post" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" name="update" value="reassigned">
                     <input type="hidden" name="user_id" value="{{ Auth::user()->email }}">
                     <div class="form-group">
                        <label for="tutor"> Select Tutor</label>
                         <select class="form-control" name="item_id">
                            @foreach($tutors as $item)
                              <option value="{{$item->email}}">{{$item->name}}</option>
                            @endforeach
                          </select>

                     </div>                  


                    <button type="input" class="btn btn-md col-sm-3 btn-success btn-block"> Re-Asign Question</button>
                    <button type="reset" class="btn btn-md col-sm-3 btn-warning btn-block" data-dismiss="modal"> Cancel</button>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>

</div>



