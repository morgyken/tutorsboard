<?php $usertype = Auth::User()->user_type; ?>

@if($usertype != 'admin')
    <div class="col-md-3">
          <button data-toggle="collapse" style="margin-right: 12px;" class="btn btn-primary btn-block" data-target="#reply">Reply</button>
    </div>


    <div class="col-md-3">
        <button data-toggle="collapse" style="margin-right: 12px;" class="btn btn-primary btn-block" data-target="#message">Send Us a Message </button>
    </div>

    @if ($assigned =='Assigned')
        <div class="col-md-3">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal-ans">Answer Question</button>
        </div>   


        <div class="col-md-3">
            <button data-toggle="collapse" style="margin-right: 12px;" class="btn btn-primary btn-block" data-target="#message">Opt Out of Question </button>
        </div>
    @else
        <div class="col-md-4">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal-commit">Commit to Answer</button>
        </div>

    @endif
@else

    <div class="row">
        <div class="col-md-2">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal-dispute"> Dispute Question</button>
        </div>
        
        <div class="col-md-4">
            <button type="button" class="btn btn-primary btn-block center" data-toggle="modal" data-target="#myModal-unassign">Unassign</button>
        </div>


        <div class="col-md-2">
            <button type="button" class="btn btn-primary btn-block center" data-toggle="modal" data-target="#reply">Comment</button>
        </div>

        <div class="col-md-4">
            <button type="button" class="btn btn-primary btn-block center" data-toggle="modal" data-target="#myModal-cancel">Cancel</button>
        </div>
    </div>

   <div class="row">

        <div class="col-md-3">
            <button type="button" class="btn btn-primary btn-block center" data-toggle="modal" data-target="#modal-accept">Accept</button>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal-reassign">Reassign Question</button>
        </div>

        <div class="col-md-3">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal-finish">Mark As Finished</button>
        </div>
        
         <div class="col-md-3">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal-unassign">Unassign</button>
        </div>

    </div>

@endif