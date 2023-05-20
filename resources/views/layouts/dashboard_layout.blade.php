<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<!--favicon-->
	<link rel="icon" href="{{asset('back')}}/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{asset('back')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="{{asset('back')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{asset('back')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset('back')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('back')}}/assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{asset('back')}}/assets/js/pace.min.js"></script>
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
	
@include('sweetalert::alert')
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
	<script src="{{asset('back')}}/assets/js/index.js"></script>
	
	<!--Datatable-->
	<script src="{{ asset('back')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
	$('#example').DataTable();
	} );
	</script>
	<!--Datatable-->
	
	
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
		
	</script>
	@livewireScripts 

	

</body>

</html>