@extends('layouts.dashboard_layout')
@section('title' , 'add new Sub-Category')

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
					<div class="breadcrumb-title pe-3">Add Sub-Category </div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="/admin/dashboard"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Sub-Category </li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">

					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">

<div class="col-lg-10">
	<div class="card">
		<div class="card-body">

		<form method="post" action="/add-subcategory" enctype="multipart/form-data" >
			@csrf

			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Main Category</h6>
				</div>
				<div class="form-group col-sm-9 text-secondary">
	 	        <select name="category_id" class="form-select mb-3" aria-label="Default select example">
			    <option selected="">Open this select menu</option>

			    @foreach($categories as $category)
		 	    <option value="{{ $category->id }}">{{ $category->name }}</option>
		 	    @endforeach

				</select>
				</div>
			</div>
            
            <div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Sub-Category Name</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="name" class="form-control"   />
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
				</div>
			</div>


			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 text-secondary">
					<input type="submit" class="btn btn-primary px-4" value="Save Changes" />
				</div>
			</div>
		</div>

		</form>



	</div>




							</div>
						</div>
					</div>
				</div>
			</div>










@endsection