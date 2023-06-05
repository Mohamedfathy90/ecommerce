@extends('layouts.dashboard_layout')
@section('title' , 'All Product items')

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
					<div class="breadcrumb-title pe-3">All Products</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="/admin/dashboard"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All Product item</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
					<a href="/add-productitem/{{$product->id}}" class="btn btn-primary">Add Product item</a> 				 
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="card">
 				 <div class="card-body">
	  			<h5 class="card-title">All Items for {{$product->name}}</h5>
	  			<hr/>
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
			<tr>
				<th>Sl</th>
				<th>Color</th> 
				<th>Size</th> 
				<th>Available Quantity</th>
				<th>SKU</th>
			</tr>
		</thead>
		<tbody>
	
		@foreach($productitems as $key => $item)		
			<tr>
				<td> {{ $key+1 }} </td>				
				<td>{{ $item->productitemcolor->color }}</td>
				<td>{{ $item->productitemsize->size }}</td>
				<td>{{ $item->quantity }}</td>
				<td>{{ $item->SKU}}</td>
				
			</tr>
			@endforeach


		</tbody>
		
	</table>
						</div>
					</div>
				</div>



			</div>




@endsection