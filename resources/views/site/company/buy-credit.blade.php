@extends('layouts.dashboard')
@section('content')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Buy Credits</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('company.index') }}">Companies</a></li>
                    <li class="breadcrumb-item"><a href="#!">Buy Credits</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- [ basic-alert ] start -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Buy Credits</h5>
            </div>
            <div class="card-body">
                @include('site.common.form-alert')
            </div>
        </div>
    </div>
</div>
@endsection