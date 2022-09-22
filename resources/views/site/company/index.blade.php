@extends('layouts.dashboard')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
            <div class="card-header">
                <h5>All Compnies</h5>
                <a href="{{ route('company.create') }}" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Create Company</a>
            </div>
            <div class="card-body table-border-style">
            	@include('site.common.form-alert')
                <div class="table-responsive">
                    <table class="table table-bordered">
				        <thead>
				            <tr>
				                <th>#</th>
				                <th>Company Name</th>
				                <th>Action</th>
				            </tr>
				        </thead>
				        <tbody>
				            @forelse($companies as $company)
				            	<tr>
				            		<td>{{ $loop->iteration }}</td>
				            		<td>{{ $company->name }}</td>
				            		<td>
				            			<a href="{{ route('company.show',$company->id) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View Company">
				            				<i class="fas fa-eye"></i>
				            			</a>
				            			<a href="{{ route('company.edit',$company->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit Company">
				            				<i class="fas fa-edit"></i>
				            			</a>
				            			<a href="{{ route('company.destroy',$company->id) }}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" 
				            				title="Delete Company" onclick="delete_notifier(event,'destroy-form-{{$company->id}}','Do you want to delete this Company?')">
				            				<i class="fas fa-trash-alt"></i>
				            			</a>
				            			<form method="post" action="{{ route('company.destroy',$company->id) }}" style="display:none;" id="destroy-form-{{$company->id}}">
                                            @csrf 
                                            @method('delete')
                                        </form> 
				            		</td>
				            	</tr>
				            @empty
				            	<tr>
				            		<td colspan="3">
				            			<div class="alert alert-warning" role="alert">
											No company is registered.
										</div>
				            		</td>
				            	</tr>
				            @endforelse
				        </tbody>
				    </table>
				    {{ $companies->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
	</div>
</div>
@endsection