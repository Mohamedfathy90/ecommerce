@extends('layouts.dashboard_layout')
@section('title', 'Vendor Profile')


@section('sidebar')
@include('vendor.includes.sidebar')
@endsection

@section('header')
@include('vendor.includes.header')
@endsection


@section('content')

<div class="page-wrapper">
			<div class="page-content"> 
				
				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
											<img src="{{auth()->user()->image}}"  class="rounded-circle p-1 bg-primary" width="110">
											<div class="mt-3">
												<h4>{{auth()->user()->name}}</h4>
												<p class="text-secondary mb-1">{{auth()->user()->email}}</p>
												<p class="text-muted font-size-sm">{{auth()->user()->address}}</p>
												
											</div>
										</div>
										<hr class="my-4" />
										<ul class="list-group list-group-flush">
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
												<span class="text-secondary">https://codervent.com</span>
											</li>
											
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
												<span class="text-secondary">codervent</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card">
									<div class="card-body">
										
										<form action="/vendor/profile" method="post" enctype="multipart/form-data">
											@csrf
											<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Username</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" class="form-control" value="{{auth()->user()->username}}" disabled />
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Email</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name='email' class="form-control" value="{{auth()->user()->email}}"/>
												@error('email')
												<span class="text-danger ml-4">{{ $message }}</span>
												@enderror
											</div>		
										</div>
										
										<div class="row mb-3 mt-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Full Name</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name='name' class="form-control" value="{{auth()->user()->name}}" />
												@error('name')
												<span class="text-danger">{{ $message }}</span>
												@enderror
												</div>	
										</div>
									
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Mobile</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input name='phone' type="text" class="form-control" value="{{auth()->user()->phone}}" />
											</div>
										</div>
										
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Address</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name='address' class="form-control" value="{{auth()->user()->address}}" />
											</div>
										</div>
										
										<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Vendor Join Date </h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text"  class="form-control" value="{{auth()->user()->created_at->toDateString()}}" disabled/>
										</div>
										</div>
										
										<div class="row mb-3">
										<div class="col-sm-3">
										<h6 class="mb-0">Vendor Info</h6>
										</div>
										<div class="col-sm-9 text-secondary">
										<textarea name="vendor_info" class="form-control" id="inputAddress2" placeholder="Vendor Info" rows="3">{{auth()->user()->vendor_info}}</textarea>
										@error('vendor_info')
										<span class="text-danger">{{ $message }}</span>
										@enderror
										</div>
										</div>
										
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Image</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input id="image" type="file" name="image" class="form-control" />
												@error('image')
												<span class="text-danger">{{ $message }}</span>
												@enderror
											</div>
											
										</div>
										
										<div class="row mb-3">
											<div class="col-sm-3">
											<h6 class="mb-0"> </h6>
											</div>
											<div class="col-sm-9 text-secondary">
					 						<img id="showImage" src="{{auth()->user()->image}}"  style="width:100px; height: 100px;"  >
											</div>
										</div>

										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9 text-secondary">
												<input type="submit" class="btn btn-primary px-4 mt-3" value="Save Changes" />
											</div>
										</div>
									
										</form>	
									</div>
								</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection