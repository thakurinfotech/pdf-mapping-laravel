@extends('layouts.dashboard')
@section('content')
<div class="row">
    <!-- [ Form Validation ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Add Company</h5>                
            </div>
            <div class="card-body">
                @include('site.common.form-alert')
                <form method="POST" action="{{ route('company.store') }}" enctype="multipart/form-data">
                	@csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Company Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Company Name">
                                @error('name')
                                    <label class="error jquery-validation-error small form-text invalid-feedback">
                                        {{ $message }}
                                    </label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Company CIN</label>
                                <input type="text" class="form-control @error('cin') is-invalid @enderror" name="cin" placeholder="Company Cin">
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
                                <textarea class="form-control @error('registered_office') is-invalid @enderror" name="registered_office" placeholder="Company Registered Office"></textarea>
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
                                <textarea class="form-control @error('registered_office_at') is-invalid @enderror" name="registered_office_at" placeholder="Company Office At"></textarea>
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
                    {{-- Modal Starts --}}
                    <div id="exampleModalCenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Company Terms</h5>
                                    <button type="button" class="btn  btn-info sweet-info float-end">Credits Remaining : {{ ( auth()->user()->company_credit == "-1")?'Unlimited':auth()->user()->company_credit }}</button>                                    
                                </div>
                                <div class="modal-body">
                                    <p> One credit will be deducted for every new company , you are not able to edit company name , Please verfiy all details</p>
                                    <p>Click on continue to create.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn  btn-success">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal Ends --}}
                </form>
                <button type="button" class="btn  btn-primary" data-toggle="modal" 
                data-target="#exampleModalCenter">Create Company</button>
            </div>
        </div>
    </div>
    <!-- [ Form Validation ] end -->
</div>

@endsection