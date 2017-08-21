@extends('layout.main-layout')

@section('content')



	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.blade.php">Home</a></li>
			<li class="active">Registration</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Registration</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Register a new account</h3>
							<p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="signin.blade.php">Login</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
							<hr>

							<form class="form-horizontal" method="POST" action="{{ route('register') }}">
								{{ csrf_field() }}

								<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
									<label for="name" class="col-md-4 control-label">Name</label>

									<div class="col-md-6">
										<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

										@if ($errors->has('name'))
											<span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
										@endif
									</div>
								</div>

								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<label for="email" class="col-md-4 control-label">E-Mail Address</label>

									<div class="col-md-6">
										<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

										@if ($errors->has('email'))
											<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
										@endif
									</div>
								</div>

								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<label for="password" class="col-md-4 control-label">Password</label>

									<div class="col-md-6">
										<input id="password" type="password" class="form-control" name="password" required>

										@if ($errors->has('password'))
											<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
										@endif
									</div>
								</div>

								<div class="form-group">
									<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

									<div class="col-md-6">
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary">
											Register
										</button>
									</div>
								</div>
							</form>

						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>

@endsection