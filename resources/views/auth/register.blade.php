<!DOCTYPE html>
<html>

@include('admin.includes.head')

<body class="registeration-wrapper"
	style="background-image: linear-gradient(rgba(255, 255, 255, 0.735), rgba(0, 0, 0, 0.5))">

<div class="container my-5 bg-white rounded-3">
	<div class="row">
		<div class="col-md-5 d-none d-md-block img-wrapper">
			<img src="{{asset('assests/images/rear-view-young-college-student.jpg')}}" alt="">
		</div>
		<div class="col-md-7">
			<form action="{{ route('register') }}" class="text-center h-100 px-3 d-flex flex-column justify-content-center" method="post">
				@csrf
				<h3 class="fw-semibold mb-5">REGISERTATION FORM</h3>
				<div class="row mb-3">
					
					<div class="form-group d-flex mb-3" >
					 
						<input id="name" type="text" placeholder="FirstName" class="form-control me-2  @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
						<input id="name" type="text" placeholder="LastName" class="form-control  @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
					 
						@error('firstname')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror

					@error('lastname')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
							
					</div>
				</div>
				

				<div class="input-group mb-3">
					<input type="text" placeholder="UserName" class="form-control" class="form-control me-2 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
					<img src="{{asset('assests/images/user-svgrepo-com.svg')}}" alt="" class="input-group-text">
					@error('username')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				</div>
				<div class="input-group  mb-3">
				
					<input  type="text" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
					<img src="{{asset('assests/images/email-svgrepo-com.svg')}}" alt="" class="input-group-text">
					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				</div>

				<div class="input-group mb-3">
					
					<input type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
					<img src="{{asset('assests/images/password-svgrepo-com.svg')}}" alt="" class="input-group-text">
					@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				</div>
				<div class="input-group mb-5">
					
					<input  type="password" placeholder="Confirm Password"  class="form-control" name="password_confirmation" required autocomplete="new-password">

					<img src="{{asset('assests/images/password-svgrepo-com.svg')}}" alt="" class="input-group-text">
					@error('password_confirmation')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				</div>
				<button class="btn btn-dark px-5 mb-2">
					{{ __('Register') }}
					<img src="{{asset('assests/images/arrow-sm-right-svgrepo-com.svg')}}" alt="">
				</button>
				<a href="{{ route('login') }}" class="fw-semibold fs-6 text-decoration-none text-dark">Already have account?</a>
			</form>
		</div>
	</div>
</div>
	
</body>
</html>
