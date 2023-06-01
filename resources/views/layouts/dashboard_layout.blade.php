<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<!--favicon-->
	<link rel="icon" href="{{asset('back')}}/assets/images/favicon-32x32.png" type="image/png" />
	<!--bootstrap-->
	
	<link href="{{asset('back')}}/assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet" />
	<!--plugins-->
	
	<link href="{{asset('back')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="{{asset('back')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{asset('back')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset('back')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	
	<!-- loader-->
	<link href="{{asset('back')}}/assets/css/pace.min.css" rel="stylesheet" />
	
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link href="{{asset('back')}}/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('back')}}/assets/css/app.css" rel="stylesheet">
	<link href="{{asset('back')}}/assets/css/icons.css" rel="stylesheet">
	

	<!-- DataTable -->
	<link href="{{asset('back')}}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- DataTable-->
	

	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('back')}}/assets/css/dark-theme.css" />
	<link rel="stylesheet" href="{{asset('back')}}/assets/css/semi-dark.css" />
	<link rel="stylesheet" href="{{asset('back')}}/assets/css/header-colors.css" />
	<title>@yield('title')</title>
	@livewireStyles
</head>

<body>
	

<!--wrapper-->
	<div class="wrapper">
		
		<!--sidebar wrapper -->
		@yield('sidebar')
		<!--end sidebar wrapper -->
		
		<!--start header -->
		@yield('header')
		<!--end header -->
		
		<!--start page wrapper -->
		
        @yield('content')
		
        <!--end page wrapper -->
		
        
        <!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include ('admin.includes.footer')
	</div>
	<!--end wrapper-->
	
	<script src="{{asset('back')}}/assets/js/pace.min.js"></script>
	<!-- Jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Jquery -->
	
	
	<!-- Bootstrap JS -->
	<script src="{{asset('back')}}/assets/js/bootstrap.bundle.min.js"></script>
	
	<!--plugins-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="{{asset('back')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{asset('back')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{asset('back')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{asset('back')}}/assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="{{asset('back')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{asset('back')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="{{asset('back')}}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="{{asset('back')}}/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<script src="{{asset('back')}}/assets/plugins/jquery-knob/excanvas.js"></script>
	<script src="{{asset('back')}}/assets/plugins/jquery-knob/jquery.knob.js"></script>
	
	
	<!--SweetAlert-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
	
	<!--SweetAlert-->

	<!--Datatable-->
	<script src="{{ asset('back')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<!--Datatable-->
	
	<script>
	$(document).ready(function() {
	$('#example').DataTable();
	} );
	</script>
	<!--app JS-->
	<script src="{{asset('back')}}/assets/js/app.js"></script> 
	
	<script>	
		$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
				$('#showImage').show();
			}
			reader.readAsDataURL(e.target.files['0']);
		});
		});

	$(document).on('click','.show_confirm',function (event){
	event.preventDefault();
	var requestURL= $(this).data('url');
    swal.fire({
		title:"Are You sure ?",
		text:"You won't be able to revert this!" ,
		icon:"warning" ,
		showCancelButton: true,
  		confirmButtonColor: '#3085d6',
  		cancelButtonColor: '#d33',
  		confirmButtonText: 'Yes, delete it!'
	})
	
	.then ((result) => {
		if (result.isConfirmed) {
			$.ajax({
			headers:{
			'x-csrf-token':$('meta[name="csrf-token"]').attr('content')
			},
			url  : requestURL ,
			type : "DELETE" , 
			success : function() {
            $('#example').load(' #example')
			Swal.fire(
      		'Deleted!',
      		'Item has been deleted.',
      		'success'
    		)
			} 
		});
	}
}
	)
}
)	

	
	</script>
	
	
	<script src="{{ asset('back')}}/assets/plugins/input-tags/js/tagsinput.js"></script>

<script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
</script>

<script>
   tinymce.init({
	 selector: '#mytextarea'
   });
</script>
	
	
	
	
	
	
	
	@livewireScripts 

	

</body>

</html>