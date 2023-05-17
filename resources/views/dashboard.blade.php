@include('dashboard_header')
@include('sidebar')
<div class="col-10 bg-light p-4">
	<div class="container">
        <div class="row">
          {{-- @foreach($sqls as $sql)
            <div class="col-4 p-2 ">
                <div class="card-header">
                    <span><h3>{!!$sql->description!!} </h3></span>
                </div>
                <div class="card-body">
                    <span><h1>{!!$sql->short_notes!!} </h1></span> 
                </div><br>
            </div>
           @endforeach --}}
        </div>
    </div>
</div>
