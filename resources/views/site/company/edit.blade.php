@extends('layouts.dashboard')
@section('content')
<div class="row">
    <!-- [ Form Validation ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Edit Company</h5>
            </div>
            <div class="card-body">
                @include('site.common.form-alert')
                <form method="POST" action="{{ route('company.update',$company->id) }}" enctype="multipart/form-data">
                	@csrf
                	@method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Company CIN</label>
                                <input type="text" class="form-control @error('cin') is-invalid @enderror" name="cin" placeholder="Company Cin" value="<?php echo $company->cin;?>">
                                @error('name')
                                    <label class="error jquery-validation-error small form-text invalid-feedback">
                                        {{ $message }}
                                    </label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Company Registered Office</label>
                                <textarea class="form-control @error('registered_office') is-invalid @enderror" name="registered_office" placeholder="Company Registered Office"><?php echo $company->registered_office;?></textarea>
                                @error('name')
                                    <label class="error jquery-validation-error small form-text invalid-feedback">
                                        {{ $message }}
                                    </label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Company Registered Office At</label>
                                <textarea class="form-control @error('registered_office_at') is-invalid @enderror" name="registered_office_at" placeholder="Company Office At"><?php echo $company->registered_office_at;?></textarea>
                                @error('name')
                                    <label class="error jquery-validation-error small form-text invalid-feedback">
                                        {{ $message }}
                                    </label>
                                @enderror
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Director One Signature</label>
                                <input type="file" name="director_one_sign" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Director Two Signature</label>
                                <input type="file" name="director_two_sign" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Company Stamp Image</label>
                                <input type="file" name="company_stamp_image" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn  btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <!-- [ Form Validation ] end -->
</div>
@endsection