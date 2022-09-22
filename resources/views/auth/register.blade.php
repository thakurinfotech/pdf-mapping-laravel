@extends('layouts.auth')
@section('content')
<div class="card">
	<div class="row align-items-center text-center">
		<div class="col-md-12">
			<div class="card-body">
				<a href="{{ route('welcome') }}">
					<img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
				</a>
				<h4 class="mb-3 f-w-400">Sign up</h4>
				<form method="POST" class="form-horizontal" action="{{ route('register') }}">
                    @csrf
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="feather icon-user"></i></span>
						</div>
						<input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
						@error('name')
							<label class="error jquery-validation-error small form-text invalid-feedback">
								{{ $message }}
							</label>
                        @enderror
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="feather icon-mail"></i></span>
						</div>
						<input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{ old('email') }}">
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
					<div class="input-group mb-4">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="feather icon-lock"></i></span>
						</div>
						<input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password">
					</div>
					<button class="btn btn-primary btn-block mb-4">Sign up</button>
				</form>
				<p class="mb-2">Already have an account? <a href="{{ route('login') }}" class="f-w-400">Signin</a></p>
			</div>
		</div>
	</div>
</div>
@endsection