@extends('layouts.dashboard')
@section('head-css')
    <!-- fileupload-custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/dropzone.min.css') }}">
@endsection
@section('content')

<div class="row">
    <!-- [ file-upload ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Company Details</h5>
            </div>
            <div class="card-body">
                               
            </div>
        </div>
    </div>
    <!-- [ file-upload ] end -->
</div>

@endsection
@section('footer-js')
<!-- file-upload Js -->
<script src="{{ asset('assets/js/plugins/dropzone-amd-module.min.js') }}"></script>

@endsection