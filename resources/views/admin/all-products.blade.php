@extends('layouts.dashboard_layout')
@section('title' , 'All Products')

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
								<li class="breadcrumb-item active" aria-current="page">All Products</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
		<a href="/add-product" class="btn btn-primary">Add Product</a> 				 
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
			<tr>
				<th>Sl</th>
				<th>Product Name </th>
				<th>Seller </th>
				<th>Brand Name </th>
				<th>Price </th>
				<th>Discount </th>
				<th>Action</th> 
				<th>View Product Items</th> 
			</tr>
		</thead>
		<tbody>
	@foreach($products as $key => $item)		
			<tr>
				<td> {{ $key+1 }} </td>				
				<td>{{ $item->name }}</td>
				<td>{{ $item->seller->name }}</td>
				<td>{{ $item->brand->name }}</td>
				<td>{{ $item->price }}</td>
				<td>{{ $item->discount }}</td>
				<td>
<a href="/edit-product" class="btn btn-info">Edit</a>
<a href="{{ route('product.delete',$item->id) }}" class="btn btn-danger" id="delete" >Delete</a>
				</td> 
				<td><a href="/productitems/{{$item->id}}">show product items</a></td>
			</tr>
			@endforeach


		</tbody>
		
	</table>
						</div>
					</div>
				</div>



			</div>




@endsection