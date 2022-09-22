@extends('layouts.dashboard')
@section('content')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Map Csv Columns</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('shareholder.index') }}">Shareholders</a></li>
                    <li class="breadcrumb-item"><a href="#!">Map Columns</a></li>
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
                <h5>Map Columns</h5>
            </div>
            <div class="card-body">
                @include('site.common.form-alert')
                <div class="table-responsive">
                    <form action="{{ route('shareholder.mapcsv.import') }}" method="POST">
                        @csrf
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Registered Folio No.</th>
                                    <th>Name Of Equity Shareholders</th>
                                    <th>No. of Shares held</th>
                                    <th>Total Amount in Rs.</th>
                                    <th>Distinctive No's From</th>
                                    <th>Distinctive No's To</th>
                                    <th>Subscription Allotment Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($fields as $field)
                                        <td>
                                            <div class="form-group">
                                                <select name="{{$field}}" class="form-control">
                                                    @foreach($csv_headers as $key=>$csv_header)
                                                        <option value="{{ $key }}">{{ $csv_header }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                    @endforeach   
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection