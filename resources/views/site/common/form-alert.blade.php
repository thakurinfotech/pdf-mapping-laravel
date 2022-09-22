@if (session('success'))
	<div class="alert alert-primary" role="alert">
		{{ session('success') }}
	</div>
@endif

@if (session('failed'))
	<div class="alert alert-danger" role="alert">
		{{ session('failed') }}
	</div>
@endif

@if (session('warning'))
	<div class="alert alert-warning" role="alert">
		{{ session('warning') }}
	</div>
@endif