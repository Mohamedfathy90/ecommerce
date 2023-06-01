@extends('layouts.dashboard_layout')
@section('title' , 'Vendor details')

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
					<div class="breadcrumb-title pe-3">Vendor Details</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Vendor Details</li>
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

<div class="col-lg-12">
	<div class="card">
		<div class="card-body">

		<form method="post" action="/admin/updatevendorstatus/{{$vendor->id}}" enctype="multipart/form-data" >
			@csrf

			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">User Name</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" class="form-control" value="{{ $vendor->username }}" disabled />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0"> Shop Name</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="name" class="form-control" value="{{ $vendor->name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Email</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="email" name="email" class="form-control" value="{{ $vendor->email }}" />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Phone </h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="phone" class="form-control" value="{{ $vendor->phone }}" />
				</div>
			</div>

			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Address</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="address" class="form-control" value="{{ $vendor->address }}" />
				</div>
			</div>

			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Join</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="vendor_join" class="form-control" value="{{ $vendor->created_at->toDateString()}}" />
				</div>
			</div>

			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Info</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<textarea name="vendor_short_info" class="form-control" id="inputAddress2" placeholder="Vendor Info " rows="3">
					{{ $vendor->vendor_info }}
				</textarea>
				</div>
			</div>



			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Photo</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					 <img id="showImage" src="{{$vendor->image}}" alt="Vendor" style="width:100px; height: 100px;"  >
				</div>
			</div>

			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 text-secondary">
                <input type="submit" class="btn btn-danger px-4" value = {{$vendor->status === 'active' ? "Deactivate" : "Activate"}} />
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