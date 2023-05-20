@extends('layouts.dashboard_layout')
@section('title' , 'All Brands')

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
					<div class="breadcrumb-title pe-3">All Brands</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="/admin/dashboard"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All Brands</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
						<a href="/add-brand"><button type="button" class="btn btn-primary">Add Brand</button></a>


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
				<th>Brand Name </th>
				<th>Brand Image </th>
				<th>Action</th> 
			</tr>
		</thead>
		<tbody>
				
				@foreach ($brands as $key=>$brand)	
				<tr id="{{$brand->id}}">
				<td>{{$key+1}}</td>
				<td>{{$brand->name}}</td>
				<td><img src="{{$brand->image}}" style="width: 70px; height:40px;" ></td>
				<td >
				<a href="/edit-brand/{{$brand->id}}" class="btn btn-info btn-xs">Edit</a>
				<a href="javascript:void(0);" onclick="deletebrand(event)" class="btn btn-danger" >Delete</a>

	
				</td> 
				</tr>
			@endforeach


			</tbody>
			
			</table>
						</div>
					</div>
				</div>



			</div>

<script>
function deletebrand(e) {
e.preventDefault();
$.ajax({
headers:{
'x-csrf-token':$('meta[name="csrf-token"]').attr('content')
},
url  : "/delete-brand/{{$brand->id}}" ,
type : "DELETE" , 
	
success : function(response) {
	$('#{{$brand->id}}').hide() ;
  toastr.success(response.message, response.title);

    // toastr.success("{!! session()->get('success')!!}");
} ,


});
}
</script>
@endsection