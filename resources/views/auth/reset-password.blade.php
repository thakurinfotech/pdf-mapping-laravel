@extends('layouts.auth')
@section('content')
<div class="card">
	<div class="row align-items-center">
		<div class="col-md-12">
			<div class="card-body">
				<div class="text-center">
					<img src="{{ asset('assets/images/logo-dark.png') }}" alt="" class="img-fluid mb-4">
				</div>
				<h4 class="mb-4 f-w-400">Change your password</h4>
				<form class="form-horizontal" method="POST" action="{{ route('password.update') }}">
				    @csrf
				    <input type="hidden" name="token" value="{{ $token }}">
					<div class="input-group mb-2">
						<input type="email" name="email" class="form-control @error('password') is-invalid @enderror" placeholder="Email" value="{{ $email ?? old('email') }}">
						@error('email')
							<label class="error jquery-validation-error small form-text invalid-feedback">
								{{ $message }}
							</label>
                        @enderror
					</div>
					<div class="input-group mb-2">
						<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="New Password">
						@error('password')
							<label class="error jquery-validation-error small form-text invalid-feedback">
								{{ $message }}
							</label>
                        @enderror
					</div>
					<div class="input-group mb-4">
						<input type="password" name="password_confirmation"  class="form-control" placeholder="Re-Type New Password">						
					</div>
					<button class="btn btn-block btn-primary mb-4">Change password</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection