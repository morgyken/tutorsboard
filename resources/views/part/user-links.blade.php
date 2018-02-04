<?php $usertype = Auth::User()->user_type; 
echo $usertype;
?>

@if($usertype =='')
    @if($status->current == 1 )
    
    @if(Auth::user()->user_role === 'admin')
    <p>  <a href="#"  data-toggle="collapse" data-target="#myModal-commit">Assign Question to a Tutor</a></p>
    @endif
        <p>  <a href="#"  data-toggle="collapse" data-target="#myModal-commit">Commit to Answer</a></p>
        <p> <a href="#"  data-toggle="collapse" style="margin-right: 12px;" 
          data-target="#Comment">Send Us a Message </a></p>

    @elseif($status->assigned == 1)

        <p>   <a href="#"  data-toggle="collapse" data-target="#myModal-ans">Answer Question</a></p>

        <p><a href="#" data-toggle="collapse" data-target="#message">Reply a student</a></p>
        
        <p> <a href="#"  data-toggle="collapse" data-target="#Comment">Send Us a Message</a></p>

        <p>   <a href="#"  data-toggle="collapse" data-target="#myModal-optout">Opt Out Question</a></p>

    @elseif($status->answered == 1)
        <p> <a href="#"  data-toggle="collapse" data-target="#Comment">Comment on the Question</a></p>

        <p> <a href="#"  data-toggle="collapse" data-target="#message">Send Admin Message</a></p>
    @endif

@else

        
       <p> <a href="#" data-toggle="collapse" data-target="#myModal-dispute"> Dispute Question</a></p>
        
       
       <p>   <a href="#"  data-toggle="collapse" data-target="#myModal-unassign">Unassign</a></p>


       
          <p> <a href="#"  data-toggle="collapse" data-target="#message">Comment</a></p>
    

       
          <p> <a href="#"  data-toggle="collapse" data-target="#myModal-cancel">Cancel</a></p>
    

       
        <p> <a href="#"   data-toggle="collapse" data-target="#modal-accept">Accept</a></p>
        
        
        <p> <a href="#"  data-toggle="collapse" data-target="#myModal-reassign">Reassign Question</a></p>

       <p> <a href="#"  data-toggle="collapse" data-target="#myModal-unassign">Unassign</a></p>
        
        <p> <a href="#"  data-toggle="collapse" data-target="#myModal-finish">Mark As Finished</a></p>

@endif
       
        
    

        

