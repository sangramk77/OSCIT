@include('dashboard_header')
@include('sidebar')
<div class="col-10 bg-light p-4">
	<div class="container ">
		<div class="row p-3  justify-content-center">
			<div class="col-10 p-4 card">
                <div class="card-header bg-white wrap d-md-flex justify-content-center">
    				<h1>{!!$data->cr_nm!!}</h1>
    			</div>
                <form action={!!url('update/')!!} method="POST" enctype="multipart/form-data">
				@csrf
                <input type="hidden" type="number" value="{!!$data->id!!}" name="id" id="id">
                <div class="form-group justify p-1">
                <label class="text-dark " >COURSE NAME</label>
            	<input type="text" id="cr_nm" type="text" class="form-control bg-light" value="{!!$data->cr_nm!!}" name="cr_nm"  placeholder="{!!$data->cr_nm!!}">
            	</div>
                <div class="form-group justify p-1">
                <label class="text-dark " >COURSE CERTIFICATION</label>
            	<input type="text" id="cr_certify" type="text" class="form-control bg-light" value="{!!$data->cr_certify!!}" name="cr_certify"  placeholder="{!!$data->cr_certify!!}">
            	</div>
                <div class="form-group justify p-1">
                <label class="text-dark " >NO. OF SEATS</label>
            	<input type="text" id="cr_seats" type="text" class="form-control bg-light" value="{!!$data->cr_seats!!}" name="cr_seats"  placeholder="{!!$data->cr_seats!!}"> 
            	</div>
				<div class="form-group justify p-1">
					<label class="text-dark " >ELIGIBILITY</label>
					<textarea type="textarea" id="cr_eligible" type="textarea" class="form-control bg-light" value="{!!$data->cr_eligible!!}" name="cr_eligible"  placeholder="{!!$data->cr_eligible!!}"> </textarea>
				</div>
                <div class="form-group justify p-1">
                <label class="text-dark " >COURSE PRICE</label>
            	<input type="text" id="cr_price" type="text" class="form-control bg-light" value="{!!$data->cr_price!!}" name="cr_price"  placeholder="{!!$data->cr_price!!}">
            	</div>
                <div class="form-group justify p-1">
                <label class="text-dark " >COURSE DURATION</label>
            	<input type="text" id="cr_dur" type="text" class="form-control bg-light" value="{!!$data->cr_dur!!}" name="cr_dur"  placeholder="{!!$data->cr_dur!!}">
            	</div>
            	<div class="d-grid mx-auto">
            	    <button type="submit" class="btn btn-dark btn-block"><span>Update</span><i class="fa fa-edit text-blue"></i></button>
            	</div>
			    </form>
		    </div>
        </div> 
    </div>   
</div> 
