@include('header')
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style_login.css">
	</head>
	<body>
	<section class="ftco-section section-gap"><br><br><br>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center">
					<a href="{{url('/')}}" class="heading-section"><b>Odisha Knowledge Corportation Limited</b></a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10" >
					<div class="wrap d-md-flex" style="background-image: url('/img/login.png') ">
						<div class="form-group p-3">
							<img src="/img/logo2.jpg" height="500px" width="200px"class="img-fluid card" alt="ocbu">
						</div>
						{{-- <div class="img">
							<img src="{{url('/img/login.png')}}" width="950" height="550" alt="">
			             </div> --}}
						<div class="login-wrap p-3 p-md-5">
							<div class="d-flex">
								<div class="w-100" style="align-content: left">
									<h3 class="mb-4" style="text-align: center;"><b>Sign In</b></h3>
								</div>								
							</div>
							<form method="POST" action="{{ route('login.custom') }}" class="signin-form" enctype="multipart/form-data">
								<div class="form-group mb-3">
								@csrf
								<label class="label" for="password">Email</label><br>
								<input type="text" placeholder="Email" id="email" class="form-control px-3" name="email" required
										autofocus>
									@if ($errors->has('email'))
									<span class="text-danger">{{ $errors->first('email') }}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label><br>
									<input type="password" placeholder="Password" id="password" class="form-control px-3" name="password" required>
										@if ($errors->has('password'))
										<span class="text-danger">{{ $errors->first('password') }}</span>
										@endif
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
		        		    </form>		          
		        		</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		@include('footer')