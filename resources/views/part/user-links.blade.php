<?php $usertype = Auth::User()->user_type; 
echo $usertype;
?>

@if($usertype =='')
    @if($assigned->status == 'New' || $assigned->status== 'Available' )

        <p>  <a href="#"  data-toggle="modal" data-target="#myModal-commit">Commit to Answer</a></p>

        <p> <a href="#"  data-toggle="collapse" style="margin-right: 12px;"
               data-target="#message">Send Us a Message </a></p>

    @elseif($assigned->status == 'Assigned')

        <p>   <a href="#"  data-toggle="modal" data-target="#myModal-ans">Answer Question</a></p>

        <p><a href="#" data-toggle="collapse" data-target="#reply">Post a reply</a></p>

        <p>   <a href="#"  data-toggle="modal" data-target="#myModal-optout">Opt Out Question</a></p>

    @elseif($assigned->status == 'answered')
        <p> <a href="#"  data-toggle="collapse" data-target="#Comment">Comment on the Question</a></p>

        <p> <a href="#"  data-toggle="collapse" data-target="#message">Send Admin Message</a></p>
    @endif

@else

        
       <p> <a href="#" data-toggle="modal" data-target="#myModal-dispute"> Dispute Question</a></p>
        
       
       <p>   <a href="#"  data-toggle="modal" data-target="#myModal-unassign">Unassign</a></p>


       
          <p> <a href="#"  data-toggle="collapse" data-target="#reply1">Comment</a></p>
    

       
          <p> <a href="#"  data-toggle="modal" data-target="#myModal-cancel">Cancel</a></p>
    

       
        <p> <a href="#"   data-toggle="modal" data-target="#modal-accept">Accept</a></p>
        
        
        <p> <a href="#"  data-toggle="modal" data-target="#myModal-reassign">Reassign Question</a></p>

       <p> <a href="#"  data-toggle="modal" data-target="#myModal-unassign">Unassign</a></p>
        
        <p> <a href="#"  data-toggle="modal" data-target="#myModal-finish">Mark As Finished</a></p>

@endif
       
        
    

        

