
<div class="col-md-12" id="sidebar">
    <div class="list-group">
        <a href="#" class="list-group-item active link-header">Available Question </a>
        <a href="{{ route('all-questions')}}" class="list-group-item">All Available <span class="badge badge-success">2</span></a>
        <a href="{{ route('all-questions', ['status' =>'mybid'])}}" class="list-group-item">Applications<span class="badge badge-success">{{ \App\Http\Controllers\QuestionController::questionStat('mybid') }}</span></a>
        <a href="{{ route('all-questions', ['status' =>'suggested'])}}" class="list-group-item">Suggested <span class="badge badge-success">{{ \App\Http\Controllers\QuestionController::questionStat('suggested') }}</span></a>
        <a href="{{ route('all-questions', ['status' =>'assigned'])}}" class="list-group-item">In Progress <span class="badge badge-success">{{ \App\Http\Controllers\QuestionController::questionStat('assigned') }}</span></a>
      
    </div>
</div><!--/span-->

<div class="col-md-12" id="sidebar">
    <div class="list-group">
        <a href="#" class="list-group-item active">Questions</a>

        <a href="{{ route('all-questions', ['status' =>'answered'])}}" class="list-group-item">Answered <span class="badge badge-success">{{ \App\Http\Controllers\QuestionController::questionStat('answered') }}</span></a>
        <a href="{{ route('all-questions', ['status' =>'revision'])}}" class="list-group-item">Reviews <span class="badge badge-success">{{ \App\Http\Controllers\QuestionController::questionStat('revision') }}</span></a>
        <a href="{{ route('all-questions', ['status' =>'completed'])}}" class="list-group-item">Completed <span class="badge badge-success">{{ \App\Http\Controllers\QuestionController::questionStat('completed') }}</span></a>
        <a href="{{ route('all-questions', ['status' =>'rated'])}}" class="list-group-item">Rated<span class="badge badge-success">{{ \App\Http\Controllers\QuestionController::questionStat('rated') }}</span></a>
        <a href="{{ route('all-questions', ['status' =>'paid'])}}" class="list-group-item">Paid <span class="badge badge-success">{{ \App\Http\Controllers\QuestionController::questionStat('paid') }}</span></a>
        <a href="{{ route('all-questions', ['status' =>'reassigned'])}}" class="list-group-item">Reassigned <span class="badge badge-success">{{ \App\Http\Controllers\QuestionController::questionStat('reassigned') }}</span></a>
        <a href="{{ route('all-questions', ['status' =>'overdue'])}}" class="list-group-item">Overdue <span class="badge badge-success">{{ \App\Http\Controllers\QuestionController::questionStat('overdue') }}</span></a>

        <a href="{{ route('all-questions', ['status' =>'overdue'])}}" class="list-group-item">Overdue <span class="badge badge-success">{{ \App\Http\Controllers\QuestionController::questionStat('overdue') }}</span></a>

        <a href="{{ route('all-questions', ['status' =>'overdue'])}}" class="list-group-item">Rejected <span class="badge badge-success">{{ \App\Http\Controllers\QuestionController::questionStat('overdue') }}</span></a>

        <a href="{{ route('all-questions', ['status' =>'overdue'])}}" class="list-group-item">Editing <span class="badge badge-success">{{ \App\Http\Controllers\QuestionController::questionStat('overdue') }}</span></a>

        <a href="{{ route('all-questions', ['status' =>'overdue'])}}" class="list-group-item">Disputed <span class="badge badge-success">{{ \App\Http\Controllers\QuestionController::questionStat('overdue') }}</span></a>
        <a href="{{ route('all-questions', ['status' =>'overdue'])}}" class="list-group-item">Revision<span class="badge badge-success">{{ \App\Http\Controllers\QuestionController::questionStat('overdue') }}</span></a>
      
    </div>
</div><!--/span-->

<div class="col-md-12" id="sidebar">
    <div class="list-group">
        <a href="#" class="list-group-item active">Payments</a>
        <a href="{{route('get-payment')}}" class="list-group-item">Upcoming Payment</a>
        <a href="{{route('get-payment', ['myurl'=>'payment-bonuses' ])}}" class="list-group-item">Bonuses</a>
        
        <a href="{{route('get-payment', ['myurl'=>'payment-history' ])}}" class="list-group-item">Payment History</a>
        <a href="{{route('get-payment', ['myurl'=>'payment-history' ])}}" class="list-group-item">Rescheduled Payments</a>
        <a href="{{route('get-payment', ['myurl'=>'payment-history' ])}}" class="list-group-item">Refunds</a>
        
      
    </div>
</div><!--/span-->

<div class="col-md-12" id="sidebar">
    <div class="list-group">
        <a href="#" class="list-group-item active">Tutor Profile</a>
        <a href="{{route('tut-profile')}}" class="list-group-item">Personal Information</a>
        <a href="{{route('tut-account')}}" class="list-group-item">Account Information</a>
        <a href="{{route('tut-progress')}}" class="list-group-item">Account Progress </a>
             
    </div>
</div><!--/span-->