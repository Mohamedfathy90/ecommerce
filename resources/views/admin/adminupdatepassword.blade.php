@extends('layouts.dashboard_layout')
@section('title' , 'Update Password')

@section('sidebar')
@include('admin.includes.sidebar')
@endsection

@section('header')
@include('admin.includes.header')
@endsection



@section ('content')


<div class="page-content"> 

	<div class="container">
		<div class="main-body">
			<div class="row">
			<div class="col-lg-8 mx-auto mt-4">
			<div class="card mt-4">
			@livewire('updatepassword')
			</div>
						</div>
					</div>
				</div>
</div>



@endsection