@extends('layouts.dashboard_layout')
@section('title' , 'Add Product Item')

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
					<div class="breadcrumb-title pe-3">Add Product Item</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="/admin/dashboard"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Product Item</li>
							</ol>
						</nav>
					</div>
				
				</div>
				<!--end breadcrumb-->

				<div class="card">
  				<div class="card-body p-4">
	  			<h5 class="card-title">Add New Item for {{$product->name}}</h5>
	  			<hr/>


<div class="col-md-8">	
			<form method="post" action="/add-productitem/{{$product->id}}">
				@csrf
                    <div class="mb-3">
                        <select name="color" class="form-select" id="colorID">
						@foreach ($colors as $color)
						<option value="{{$color->id}}">{{$color->color}}</option>
						@endforeach
					    </select>
                    </div>

					<div class="mb-3">
                        <select name="size" class="form-select" id="sizeID">
						@foreach ($sizes as $size)
						<option value="{{$size->id}}">{{$size->size}}</option>
						@endforeach
					    </select>
                    </div>
					
                    <div class="mb-3">
                    <input id= "quantityID" type="text" name="quantity" class="form-control" placeholder="Enter Quantity">
                    </div>
                    
					@error('sku')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror


                    <div class="mb-3 mt-3">
                    <button class="btn btn-primary">Add Item</button>
                    </div>

			</form>
			</div>