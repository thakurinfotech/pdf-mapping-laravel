@extends('layouts.auth')
@section('content')
<div class="card">
	<div class="row align-items-center text-center">
		<div class="col-md-12">
			<div class="card-body">
				<a href="{{ route('welcome') }}">
					<img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
				</a>
				<h4 class="mb-3 f-w-400">Signin</h4>

				<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    @csrf
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="feather icon-mail"></i></span>
						</div>
						<input name="email" type="email" class="form-control @error('email') is-invalid @enderror" 
						placeholder="Email address">
						@error('email')
							<label class="error jquery-validation-error small form-text invalid-feedback">
								{{ $message }}
							</label>
                        @enderror
					</div>
					<div class="input-group mb-4">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="feather icon-lock"></i></span>
						</div>
						<input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
						@error('password')
							<label class="error jquery-validation-error small form-text invalid-feedback">
								{{ $message }}
							</label>
                        @enderror
					</div>
					<div class="form-group text-left mt-2">
						<div class="checkbox checkbox-primary d-inline">
							<input type="checkbox" name="remember" id="checkbox-fill-a1" checked="">
							<label for="checkbox-fill-a1" class="cr"> Save credentials</label>
						</div>
					</div>
					<button class="btn btn-block btn-primary mb-4">Signin</button>
				</form>

				<p class="mb-2 text-muted">Forgot password? <a href="{{ route('password.request') }}" class="f-w-400">Reset</a></p>
				<p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}" class="f-w-400">Signup</a></p>
			</div>
		</div>
	</div>
</div>
@endsection