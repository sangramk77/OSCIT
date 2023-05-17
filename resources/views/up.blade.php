@include('dashboard_header')
@include('sidebar')
<div class="col-10 bg-light p-4">
	<div class="container">
		<div class="row justify-content-center g-4 p-3">
			
		@foreach($datas as $data)
			<div class="col-6 p-1">				
                <form action={{url('up/')}} method="POST"  enctype="multipart/form-data" >
				@csrf
				<input type="hidden" type="number" value="{{$data->id}}" name="id" id="id">
                <input type="hidden" type="number" value="{{$data->cr_id}}" name="cr_id" id="cr_id">
				{{-- <div class="form-group justify">
                	<label class="text-dark">Card back Content</label>
            		<textarea id="hdr" type="text"  type="text" rows="1" cols="10" class="form-control bg-light hdr" value="{{$data->cr_hdr}}" name="cr_hdr"  placeholder="{{$data->cr_hdr}}">{{$data->cr_hdr}}</textarea>  
            	</div> --}}
                <div class="form-group justify">
                	<label class="text-dark">Title</label>
            		<textarea id="Title" type="text"  type="text" rows="1" cols="50" class="form-control bg-light titli" value="{{$data->cr_description}}" name="cr_description"  placeholder="{{$data->cr_description}}">{{$data->cr_description}}</textarea>  
            	</div>
                <div class="form-group justify">
                	<label class="text-dark">Content</label>
            		<textarea id="summernote" type="text"  type="text" rows="15" cols="50" class="form-control bg-light cont" value="{{$data->cr_short_notes}}" name="cr_short_notes"  placeholder="{{$data->cr_short_notes}}">{{$data->cr_short_notes}}</textarea>  
            	</div>
            	<div class="form-group justify">
            	    <button type="submit" class="btn btn-dark btn-block"><span>Update</span><i class="fa fa-edit text-blue"></i></button>
            	</div>
			    </form>
		    </div>
			@endforeach
        </div> 
    </div>   
</div> 
<script>
	$('.hdr').summernote({
	  tabsize: 1,
	  height: 200
	});
	$('.cont').summernote({
	  tabsize: 1,
	  height: 200
	});
	$('.titli').summernote({
	  tabsize: 1,
	  height: 50
	});
</script>