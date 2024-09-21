<!DOCTYPE html>
<html>

@include('auth.includes.head')

@include('auth.includes.image')

<div class="container my-5 bg-white rounded-3">
	<div class="row">
		<div class="col-md-5 d-none d-md-block img-wrapper">
			<img src="{{asset('assests/images/rear-view-young-college-student.jpg')}}" alt="">
		</div>
		<div class="col-md-7">
			<form action="{{ route('login') }}" method="post" class="text-center h-100 px-3 d-flex flex-column justify-content-center">
				@csrf
				<h3 class="fw-semibold mb-5">LOGIN FORM</h3>


				<div class="input-group mb-3">
					
					<input type="text" placeholder="UserName" class="form-control" class="form-control me-2 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
					<img src="{{asset('assests/images/user-svgrepo-com.svg')}}" alt="" class="input-group-text">
					@error('username')
						<div class="alert alert-warning">{{$message}}</div>
					@enderror
				</div>

				

				<div class="input-group mb-3">
					
					<input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
					<img src="{{asset('assests/images/password-svgrepo-com.svg')}}" alt="" class="input-group-text">
					@error('password')
						<div class="alert alert-warning">{{$message}}</div>
					@enderror
				</div>

				<button class="btn btn-dark px-5 mb-2">
					{{ __('Login') }}
					<img src="{{asset('assests/images/arrow-sm-right-svgrepo-com.svg')}}" alt="">
				</button>
				<a href="{{ route('register') }}" class="fw-semibold fs-6 text-decoration-none text-dark">New User?</a>
			</form>
		</div>
	</div>
</div>
	
</body>
</html>
