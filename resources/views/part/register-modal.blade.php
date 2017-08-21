<!-- Modal -->
<div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content clearfix">
            <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span>Fill in the following to Register</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="email"><span class="glyphicon glyphicon-user"></span> Name</label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">E-Mail Address</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('user_type') ? ' has-error' : '' }}">


                                <label>Select User type</label>
                                <div class="col-md-12">
                                    <select name ="user_type" class="form-control custom-select mb-2 mr-sm-2 mb-sm-0" >
                                        <option selected>Choose...</option>
                                        <option value="Tutor">Tutor</option>
                                        <option value="Student">Student</option>
                                    </select>


                                @if ($errors->has('name'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                @endif
                            </div>

                    </div>


                    <div class="form-group{{ $errors->has('university') ? ' has-error' : '' }}">


                        <label>Select University</label>
                        <div class="col-md-12">
                            @include('partials.university-search')
                            @if ($errors->has('university'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('university') }}</strong>
                                        </span>
                            @endif
                        </div>

                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="email"><span class="glyphicon glyphicon-envelope"></span>Password</label>

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">

                        <label for="email"><span class="glyphicon glyphicon-qrcode"></span>Confirm Password</label>

                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class=" col-md-8">
                            <button type="submit" class="btn btn-primary">
                                Continue and Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
</div>

<script>
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#registerModal").modal();
        });
    });
</script>

</body>
</html>
