@include('dashboard_header')
@include('sidebar')
<div class="col-10 bg-light p-4">
	<div class="container">
		<div class="row justify-content-cente"> 
			   <div class="col-12 card p-4 bg-white ">
			   		<div class="card-header bg-white wrap d-md-flex justify-content-center">
					   <h1>UPDATE</h1>
					</div>
                    <form action="{{url('edit/')}}" method="POST" enctype="multipart/form-data">
                        @csrf
					    <input type="hidden" type="text" value="{{$data['id']}}" name="id" id="id">
						<div class="d-grid mx-auto col-6"><br>
							<label class="text-dark " >NAME</label>
                            <input type="text" placeholder="{{$data->name}}" id="name" class="form-control" value="{{$data['name']}}" name="name"
                            required autofocus>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
						</div><br>
						<div class="d-grid mx-auto col-6">
							<label>LOGIN ID</label>
                            <input type="email" placeholder="{{$data->email}}" id="email" value="{{$data['email']}}" class="form-control" name="email"
                            required autofocus>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
						</div><br><br>
                        <div class="d-grid mx-auto col-4">
                            <button type="submit" class="btn btn-dark btn-block">Update</button>
                        </div><br>
                   </form>
                </div>  
            </div>             
        </div>
    </div>
</div>
