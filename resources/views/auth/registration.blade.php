@include('dashboard_header')
@include('sidebar')
<div class="col-10  bg-light p-4">
	<div class="container"><br>
		<div class="row justify-content-center ">
			<div class="card col-8 bg-light wrap d-md-flex"><br>
             <h2 class="text-center">SIGN UP</h2><br>
                <form action="{{ route('register.custom') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                            required autofocus>
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div><br>
                    <div class="form-group mb-3">
                        <input type="text" placeholder="Email" id="email_address" class="form-control"
                            name="email" required autofocus>
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div><br>
                    <div class="form-group mb-3">
                        <input type="password" placeholder="Password" id="password" class="form-control"
                            name="password" required>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <div class="checkbox">
                            <label><input type="checkbox" name="remember"> Remember Me</label>
                        </div>
                    </div>
                    <div class="d-grid col-4 mx-auto">
                        <button type="submit" class="btn btn-dark btn-block"><i class="fa fa-sign-in pr-2"></i>Sign up</button>
                    </div><br>
                </form>
			</div>
        </div>
	</div>
</div>

