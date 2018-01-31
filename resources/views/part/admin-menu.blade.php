


<div class="col-md-12" id="sidebar">
    <div class="list-group">
        <a href="#" class="list-group-item active link-header">Available Question </a>
        <a href="#" class="list-group-item">All Available <span class="badge badge-success">2</span></a>
        <a href="#" class="list-group-item">Bids<span class="badge badge-success"></span></a>
        <a href="#" class="list-group-item">Suggested <span class="badge badge-success"></span></a>
        <a href="#" class="list-group-item">In Progress <span class="badge badge-success"></span></a>
      
    </div>
</div><!--/span-->
<div class="col-md-12" id="sidebar">
    <div class="list-group">
        <a href="#" class="list-group-item active link-header">Tutors </a>
        <a href="#" class="list-group-item">New Applications <span class="badge badge-success">2</span></a>
        <a href="#" class="list-group-item">Active Tutors<span class="badge badge-success"></span></a>
        <a href="#" class="list-group-item">Inactive Tutors<span class="badge badge-success"></span></a>
        <a href="#" class="list-group-item">Pro Tutors<span class="badge badge-success"></span></a>
      
    </div>
</div><!--/span-->

<div class="col-md-12" id="sidebar">
    <div class="list-group">
        <a href="#" class="list-group-item active">Questions</a>
        
        <a href="#" class="list-group-item">Answered <span class="badge badge-success"></span></a>
        <a href="#" class="list-group-item">Reviews <span class="badge badge-success"></span></a>
        <a href="#" class="list-group-item">Completed <span class="badge badge-success"></span></a>
        <a href="#" class="list-group-item">Rated<span class="badge badge-success"></span></a>
        <a href="#" class="list-group-item">Paid <span class="badge badge-success"></span></a>
        <a href="#" class="list-group-item">Reassigned <span class="badge badge-success"></span></a>
        <a href="#" class="list-group-item">Overdue <span class="badge badge-success"></span></a>
      
    </div>
</div><!--/span-->

<div class="col-md-12" id="sidebar">
    <div class="list-group">
        <a href="#" class="list-group-item active">Payments</a>
        <a href="#" class="list-group-item">Upcoming Payment</a>
        <a href="#" class="list-group-item">Bonuses</a>
        
        <a href="#" class="list-group-item">Payment History</a>
        <a href="#" class="list-group-item">Rescheduled Payments</a>
        <a href="#" class="list-group-item">Refunds</a>
        
      
    </div>
</div><!--/span-->

<div class="col-md-12" id="sidebar">
    <div class="list-group">
        <a href="#" class="list-group-item active"> 
            @if(Auth::user()->user_role == 'admin')
                Tutor Profile
            @else
            Tutor Profile
            @endif
            </a>
        <a href="{{route('tut-profile')}}" class="list-group-item">Personal Information</a>
        <a href="{{route('tut-account')}}" class="list-group-item">Account Information</a>
        <a href="{{route('tut-progress')}}" class="list-group-item">Account Progress </a>
             
    </div>
</div><!--/span-->