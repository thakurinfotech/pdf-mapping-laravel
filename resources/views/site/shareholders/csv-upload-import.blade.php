@extends('layouts.dashboard')
@section('content')
<div class="row">
    <!-- [ Form Validation ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Import Shareholders</h5>                
            </div>
            <div class="card-body">
                @include('site.common.form-alert')
                <form method="POST" action="{{ route('shareholder.csv.bulk.import') }}" enctype="multipart/form-data">
                	@csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Company</label>
                                <select name="company" class="form-control">
                                    <option value="">Select Company</option>
                                    @foreach($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>
                                @error('company')
                                    <label class="error jquery-validation-error small form-text invalid-feedback">
                                        {{ $message }}
                                    </label>
                                @enderror
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="form-group">                                
                                <label for="formFile" class="form-label">Upload Csv</label>
                                <input name="csv_file" class="form-control @error('csv_file') is-invalid @enderror" type="file" id="formFile">
                                @error('csv_file')
                                    <label class="error jquery-validation-error small form-text invalid-feedback">
                                        {{ $message }}
                                    </label>
                                @enderror
                            </div>
                        </div>                       
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary"><i class="fas fa-file-upload"></i> Import Csv</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- [ Form Validation ] end -->
</div>

@endsection