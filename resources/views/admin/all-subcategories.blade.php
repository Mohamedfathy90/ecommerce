@extends('layouts.dashboard_layout')
@section('title' , 'All Sub-Categories')

@section('sidebar')
@include('admin.includes.sidebar')
@endsection

@section('header')
@include('admin.includes.header')
@endsection

@section ('content')
<div class="page-content" style="margin-top: 70px;margin-left:250px;">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">All Sub-Categories</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="/admin/dashboard"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All Sub-Categories</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
						<a href="/add-subcategory"><button type="button" class="btn btn-primary">Add Sub-Category</button></a>


						</div>
					</div>
				</div>
				<!--end breadcrumb-->

				<hr/>
				<div class="card mx-auto" >
					<div class="card-body ">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered mx-auto" style="width:100%">
								<thead>
			<tr>
				<th>#</th>
				<th>Category Name </th>
				<th>Sub-Category Image </th>
				<th>Action</th> 
			</tr>
		</thead>
		<tbody>
				
				@foreach ($subcategories as $key=>$subcategory)	
				<tr id="{{$subcategory->id}}">
				<td>{{$key+1}}</td>
				<td>{{$subcategory->category->name}}</td>
				<td>{{$subcategory->name}}</td>
				<td >
				<a href="/edit-subcategory/{{$subcategory->id}}" class="btn btn-info btn-xs">Edit</a>
				<a href="javascript:void(0);" class="btn btn-danger show_confirm" 
                data-url="{{ route('subcategory.delete', $subcategory->id) }}" 
                >Delete</a>

	
				</td> 
				</tr>
			@endforeach


			</tbody>
			
			</table>
						</div>
					</div>
				</div>



			</div>


@endsection