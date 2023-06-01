@extends('layouts.dashboard_layout')
@section('title' , 'Add Product')

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
					<div class="breadcrumb-title pe-3">Add Products</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="/admin/dashboard"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Products</li>
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

				<div class="card">
  <div class="card-body p-4">
	  <h5 class="card-title">Add New Product</h5>
	  <hr/>
       <div class="form-body mt-4">
	    <div class="row">
		   <div class="col-lg-8">
           <div class="border border-3 p-4 rounded">
			
			<div class="mb-3">
				<label for="inputProductTitle" class="form-label">Product Name</label>
				<input type="text" name="product_name" class="form-control" id="inputProductTitle" placeholder="Enter product title">
			  </div>
            <div class="mb-3">
				<label for="inputProductTitle" class="form-label">Product Tags</label>
				<input type="text" name="product_tags" class="form-control visually-hidden" data-role="tagsinput" value="new product,top product">
			  </div>
			  <div class="mb-3">
				<label for="inputProductTitle" class="form-label">Product Size</label>
				<input type="text" name="product_size" class="form-control visually-hidden" data-role="tagsinput" value="Small,Midium,Large ">
			  </div>
			  <div class="mb-3">
				<label for="inputProductTitle" class="form-label">Product Color</label>
				<input type="text" name="product_color" class="form-control visually-hidden" data-role="tagsinput" value="Red,Blue,Black">
			  </div>
			  <div class="mb-3">
				<label for="inputProductDescription" class="form-label">Short Description</label>
				<textarea name="short_descp" class="form-control" id="inputProductDescription" rows="3"></textarea>
			  </div>
			   <div class="mb-3">
				<label for="inputProductDescription" class="form-label">Long Description</label>
				<textarea id="mytextarea" name="long_descp">Hello, World!</textarea>
			  </div>
  <div class="mb-3">
				<label for="inputProductTitle" class="form-label">Main Thambnail</label>
				<input name="product_thambnail" class="form-control" type="file" id="formFile">
			  </div>
  <div class="mb-3">
				<label for="inputProductTitle" class="form-label">Multiple Image</label>
				<input class="form-control" name="multi_img[]" type="file" id="formFileMultiple" multiple="">
			  </div>












@endsection