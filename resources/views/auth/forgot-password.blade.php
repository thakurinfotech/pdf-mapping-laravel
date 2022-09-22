@extends('layouts.auth')
@section('content')
<div class="card">
	<div class="row align-items-center text-center">
		<div class="col-md-12">
			<div class="card-body">
				<a href="{{ route('welcome') }}">
					<img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
				</a>
				<h4 class="mb-3 f-w-400">Reset your password</h4>
				@if (session('status'))
                    <div class="alert alert-success text-center mb-4" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
               	<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
               		@csrf
					<div class="input-group mb-4">
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
					<button class="btn btn-block btn-primary mb-4">Reset password</button>
				</form>
				<p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}" class="f-w-400">Signup</a></p>
			</div>
		</div>
	</div>
</div>
@endsection