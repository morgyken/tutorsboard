<?php $usertype = Auth::User()->user_type; 
echo $usertype;
?>

@if($usertype = 'admin')
   
 <p><a href="#" data-toggle="collapse" data-target="#reply">Reply</a>

  
<p> <a href="#"  data-toggle="collapse" style="margin-right: 12px;"  data-target="#message">Send Us a Message </a>


    @if ($assigned =='Assigned')
    
        <p>   <a href="#"  data-toggle="modal" data-target="#myModal-ans">Answer Question</a>
   
          <p>  <a href="#"  data-toggle="collapse" style="margin-right: 12px;"  data-target="#message">Opt Out of Question </a>
       
    @else
      
           <p>  <a href="#"  data-toggle="modal" data-target="#myModal-commit">Commit to Answer</a>
       
    @endif
@else

    <div class="row">
        
       <p> <a href="#" data-toggle="modal" data-target="#myModal-dispute"> Dispute Question</a>
        
        
       
       <p>   <a href="#"  data-toggle="modal" data-target="#myModal-unassign">Unassign</a>
      


       
          <p> <a href="#"  data-toggle="collapse" data-target="#reply1">Comment</a>
    

       
          <p> <a href="#"  data-toggle="modal" data-target="#myModal-cancel">Cancel</a>
    
    </div>

   <div class="row">

       
        <p> <a href="#"   data-toggle="modal" data-target="#modal-accept">Accept</a>
        
        
        <p> <a href="#"  data-toggle="modal" data-target="#myModal-reassign">Reassign Question</a>
       

        
        <p> <a href="#"  data-toggle="modal" data-target="#myModal-finish">Mark As Finished</a>
       
        
    
        <p> <a href="#"  data-toggle="modal" data-target="#myModal-unassign">Unassign</a>
        

    </div>

@endif