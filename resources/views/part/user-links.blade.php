<?php $usertype = Auth::User()->user_type; 
?>
        @if($usertype == '')


            @if($assigned->status=='Assigned'||$assigned->status=='answered' )
            <p><a href="#" data-toggle="collapse" data-target="#reply">Comment on the question</a></p>

            <p><a href="#"  data-toggle="modal" data-target="#myModal-ans">Answer Question</a></p>
            <hr>
            <p> <a href="#"  data-toggle="collapse" style="margin-right: 12px;" data-target="#message">Send Moderator a Message </a></p>
            <p><a href="#"  data-toggle="modal" data-target="#myModal-optout">Opt Out Question</a></p>

            @else <p>  <a href="#"  data-toggle="modal" data-target="#myModal-commit">Commit to Answer</a></p>
            <p><a href="#" data-toggle="collapse" data-target="#reply">Comment on the Question </a></p>
            <p> <a href="#"  data-toggle="collapse" style="margin-right: 12px;" data-target="#message">Send Us a Message </a></p>

            @endif
        @else
            <p> <a href="#"   data-toggle="modal" data-target="#modal-accept">Accept</a></p>
            <p> <a href="#"  data-toggle="collapse" data-target="#reply1">Comment</a></p>
            <p> <a href="#"  data-toggle="modal" data-target="#myModal-finish">Mark As Finished</a></p>
    <hr>
        <p> <a href="#" data-toggle="modal" data-target="#myModal-dispute"> Dispute Question</a></p>
       <p><a href="#"  data-toggle="modal" data-target="#myModal-unassign">Unassign</a></p>

        <p> <a href="#"  data-toggle="modal" data-target="#myModal-cancel">Cancel</a></p>

        <p> <a href="#"  data-toggle="modal" data-target="#myModal-reassign">Reassign Question</a></p>


        @endif
        

