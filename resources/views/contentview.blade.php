@include('dashboard_header')
<script>
	new FroalaEditor('textarea#froala-editor')
  </script>
@include('sidebar')
<div class="col-10 bg-light p-4">
	<div class="container">
	<!--<p style="justify">hii</p>	-->
		<div class="row justify-content p-3">
			@foreach($contents as $content)
			<div class="col-6 p-2 card">
                <form action="{{"update/".$content['id']}}" method="POST" enctype="multipart/form-data">
				@csrf
			    <input type="hidden" type="number" value="{{$content->id}}" name="id" id="id">
				<input type="hidden" type="text" value="{{$content->title}}" name="title" id="title">
            	<div class="form-group justify">
            	<textarea id="description" type="text" class="form-control titli bg-light" value="{{$content->description}}" name="description" rows="2" cols="50" placeholder="{{$content->description}}">{{$content->description}}</textarea>  
            	</div>
            	<div class="form-group justify">
            	<textarea id="summernote" id="short_notes" type="textarea" value="{{$content->short_notes}}" class="cont form-control bg-light" name="short_notes" rows="10" justify cols="100" placeholder="{{$content->short_notes}}">{{$content->short_notes}}</textarea>
            	</div>
            	<div class="d-grid mx-auto">
            	    <button type="submit" class="btn btn-dark btn-block">Update<i class="fa fa-edit text-blue pl-2"></i></button>
            	</div>
			    </form>
		    </div>
		@endforeach
    </div>   
</div> 
<script>

	$('.cont').summernote({
	  tabsize: 2,
	  height: 200
	});
	$('.titli').summernote({
	  tabsize: 1,
	  height: 50
	});
</script>
