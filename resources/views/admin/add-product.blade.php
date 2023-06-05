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
					<div class="breadcrumb-title pe-3">Add Product</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="/admin/dashboard"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Product</li>
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
       
	<form method="post" action="/add-product" enctype="multipart/form-data">
		 @csrf
	  <div class="form-body mt-4">
	    <div class="row">
		   
		<div class="col-lg-8">
           <div class="border border-3 p-4 rounded">
			
		   <div class="mb-3">
				<label for="inputProductTitle" class="form-label">Product Name</label>
				<input type="text" name="name" class="form-control" id="inputProductTitle" placeholder="Enter product name">
			</div>
            
			<div class="mb-3">
				<label for="inputProductTitle" class="form-label">Product Tags</label>
				<input type="text" name="tags" class="form-control" data-role="tagsinput" value="new product,top product">
			</div>
			

			<div class="mb-3">
				<label for="inputProductDescription" class="form-label">Short Description</label>
				<textarea name="short_descprition" class="form-control" id="inputProductDescription" rows="3"></textarea>
			</div>
			   
			<div class="mb-3">
				<label for="inputProductDescription" class="form-label">Long Description</label>
				<textarea id="mytextarea" name="long_descprition"></textarea>
			</div>
  				
			<div class="mb-3">
				<label for="inputProductTitle" class="form-label">Main Thumbnail</label>
				<input name="thumbnail" class="form-control" type="file" id="formFile">
			</div>
  			
			<div class="mb-3">
				<label for="inputProductTitle" class="form-label">Multiple Image</label>
				<input class="form-control" name="image[]" type="file" id="formFileMultiple" multiple>
			</div>

			</div>
		   </div>
		   
		 
		   <div class="col-lg-4">
			<div class="border border-3 p-4 rounded">
              <div class="row g-3">
				
			 	<div class="col-md-6">
					<label for="inputPrice" class="form-label">Product Price</label>
					<input type="text" name="price" class="form-control" id="inputPrice" placeholder="00.00">
					@error('price')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
				</div>
				  
				<div class="col-md-6">
				  	<label for="inputCompareatprice" class="form-label">Discount Price </label>
					<input type="text" name="discount" class="form-control" id="inputCompareatprice" placeholder="%">
				</div>
				  
				  
				<div class="col-12">
				  	<label for="inputProductType" class="form-label">Product Brand</label>
					<select name="brand_id" class="form-select" id="inputProductType">
						<option></option>
						@foreach ($brands as $brand)
						<option value="{{$brand->id}}">{{$brand->name}}</option>
						@endforeach
					  </select>
				</div>

				<div class="col-12">
				  	<label for="inputVendor" class="form-label">Product Category</label>
					<select name="category_id" class="form-select" id="maincategory">
						<option></option>
						@foreach ($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
						@endforeach>
					  </select>
				</div>

				<div class="col-12">
				  	<label for="inputCollection" class="form-label">Product SubCategory</label>
					<select name="subcategory_id" class="form-select" id="subcategory">
						<option></option>
					</select>
				</div>

				<div class="row g-3">

				<div class="col-md-6">	
				<div class="form-check">
					<input class="form-check-input" name="hot_deals" type="checkbox" value="1" id="flexCheckDefault">
					<label class="form-check-label" for="flexCheckDefault"> Hot Deals</label>
				</div>
				</div>

				<div class="col-md-6">	
				<div class="form-check">
					<input class="form-check-input" name="featured" type="checkbox" value="1" id="flexCheckDefault">
					<label class="form-check-label" for="flexCheckDefault">Featured</label>
				</div>
				</div>

				<div class="col-md-6">	
				<div class="form-check">
					<input class="form-check-input" name="special_offer" type="checkbox" value="1" id="flexCheckDefault">
					<label class="form-check-label" for="flexCheckDefault">Special Offers</label>
				</div>
				</div>


				<div class="col-md-6">	
				<div class="form-check">
					<input class="form-check-input" name="special_deals" type="checkbox" value="1" id="flexCheckDefault">
					<label class="form-check-label" for="flexCheckDefault">Special Deals</label>
				</div>
				</div>

				 <div class="col-12">
				 <div class="d-grid">
					<button type="submit" class="btn btn-primary">Save Product</button>
				</div>
				</div>
			  </div> 
		  </div>
		  </div>
	   </div><!--end row-->
	</div>
  </div>
	</form>
</div>
</div>


@endsection