@extends('layouts.dashboard')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
            <div class="card-header">
                <div class="col-md-12">
                	<h5>All Compnies</h5>
                    <a href="{{ route('shareholder.csv.bulk.import.page') }}" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Import Shareholders</a>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 mt-2">
                	<div class="form-group">
                		<div class="row">
                			<div class="col-md-2">
                			<label for="">Choose Company : </label>
                		</div>
                		<div class="col-md-5">
                			<select name="shareholder_company_id" class="form-control shareholder_company_id" data-action="{{route('shareholder.switch.company')}}">
	                			@foreach($companies as $company)
	                				<option {{ ($company->id == $shareholder_company_id )?'selected="selected"':'' }} value="{{$company->id}}">{{$company->name}}</option>
	                			@endforeach
	                		</select>
                		</div> 
                		</div>               		
                	</div>
                </div>
                <div class="col-md-12"></div>
            </div>
            <div class="card-body table-border-style">
            	@include('site.common.form-alert')
                <div class="table-responsive">
                	<div class="dropdown">
					 	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    	Action
					  	</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    	<a class="dropdown-item downloadBulkCert" href="#" data-action="{{route('shareholder.add.to.export')}}">Download Certificate</a>
					  	</div>
					</div>

                    <table class="table table-bordered">
				        <thead>
				            <tr>
				            	<th>
				            		<div class="form-group">
			            				<input type="checkbox" class="form-check selectShareHolderCheckAll" value="all">
			            			</div>
				            	</th>
				                <th>Folio No.</th>
				                <th>Shareholder's Name</th>
				                <th>Shares held</th>
				                <th>Amount</th>
				                <th>From</th>
				                <th>To</th>
				                <th>Action</th>
				            </tr>
				        </thead>
				        <tbody>
				            @forelse($share_holders as $share_holder)
				            	<tr>
				            		<td>
				            			<div class="form-group">
				            				<input type="checkbox" class="form-check selectShareHolderCheck" value="{{ $share_holder->id }}">
				            			</div>
				            		</td>	
				            		<td>{{ $share_holder->folio_number  }}</td>
				            		<td>{{ $share_holder->share_holder_name  }}</td>
				            		<td>{{ $share_holder->no_of_shares_held  }}</td>
				            		<td>{{ $share_holder->amount  }}</td>
				            		<td>{{ $share_holder->no_of_shares_held_from  }}</td>
				            		<td>{{ $share_holder->no_of_shares_held_to  }}</td>
				            		<td>
				            			<a href="{{ route('shareholder.show',$share_holder->id) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View Certificate">
				            				<i class="fas fa-eye"></i>
				            			</a>
				            			<a href="{{ route('shareholder.edit',$share_holder->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit Shareholder">
				            				<i class="fas fa-edit"></i>
				            			</a>
				            			<a href="{{ route('shareholder.destroy',$share_holder->id) }}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" 
				            				title="Delete Shareholder" onclick="delete_notifier(event,'destroy-form-{{$share_holder->id}}','Do you want to delete this Shareholder?')">
				            				<i class="fas fa-trash-alt"></i>
				            			</a>
				            			<form method="post" action="{{ route('shareholder.destroy',$share_holder->id) }}" style="display:none;" id="destroy-form-{{$share_holder->id}}">
                                            @csrf 
                                            @method('delete')
                                        </form> 
				            		</td>
				            	</tr>
				            @empty
				            	<tr>
				            		<td colspan="9">
				            			<div class="alert alert-warning" role="alert">
											This company has no shareholders registered.
										</div>
				            		</td>
				            	</tr>
				            @endforelse
				        </tbody>
				    </table>
				    {{ $share_holders->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
	</div>
</div>
@endsection