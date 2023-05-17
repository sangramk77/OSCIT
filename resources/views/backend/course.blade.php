@include('dashboard_header')
@include('sidebar')
<div class="col-10 bg-light p-4">
	<div class="container">
		<div class="row justify-content-center ">
			<div class="col-md-10 col-lg-10">
                <div class="table-responsive p-2">
                    <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                        <thead class="back_table_color">
                            <tr class="info">
                                <th>Sl. no</th>
                                <th>Pages Name</th>
                                <th>Action</th>
                                </tr>
                        </thead> 
                        <tbody>
                             @foreach($crhdr as $crhdrs)  
                              <tr>
                                <td>{{$loop->iteration}}</td>                                                                            
                                <td>{{$crhdrs->cr_nm}}</td>  
                                <td><a href={{"up/".$crhdrs['id']}}><i style="font-size: 24px;" class="fa fa-edit text-dark pl-3"></i></a></td>                          
                            </tr>
                            @endforeach   
                        <tbody>
                    </table>                                
                </div>
	        </div>
		</div>
        <div class="pl-6">
           {!! $crhdr->links() !!}
        </div>
	</div>
</div>

