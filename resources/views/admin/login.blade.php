<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="{{asset('')}}">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/css/maink.css">
</head>
<body>
	<div class="main">
		<!-- <div class="main-1"> -->
			<h2 class="text-login">
					Login
			</h2>
		<!-- </div> -->
		@if(count($errors) > 0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
							{{$err}} <br>
						@endforeach
					</div>
				@endif

				@if(session('thongbao'))
					<div class="alert alert-danger">
						{{session('thongbao')}}
					</div>
				@endif
		
		<form class="login100-form validate-form p-b-33 p-t-5" action="admin/login" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
			{{csrf_field()}} <!-- có dòng này mới được submit -->
			<div class="text-email" data-validate = "Enter username">
				<input class="inputemail" type="text" name="email" placeholder="Email">
				<span class="focus-input100" data-placeholder="&#xe82a;"></span>
			</div>
			<div class="text-email" data-validate="Enter password">
				<input class="inputemail" type="password" name="password" placeholder="Password">
				<span class="focus-input100" data-placeholder="&#xe80f;"></span>
			</div>

			<div class="button">
				<button class="login100-form-btn">
					Login
				</button>
			</div>

			
				
			
		
	</div>

	

	<script src="admin_asset/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="admin_asset/vendor/animsition/js/animsition.min.js"></script>
	<script src="admin_asset/vendor/bootstrap/js/popper.js"></script>
	<script src="admin_asset/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="admin_asset/vendor/select2/select2.min.js"></script>
	<script src="admin_asset/vendor/daterangepicker/moment.min.js"></script>
	<script src="admin_asset/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="admin_asset/vendor/countdowntime/countdowntime.js"></script>
	<script src="admin_asset/js/main.js"></script>

</body>
</html>