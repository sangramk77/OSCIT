@include('dashboard_header')
@include('sidebar')
<div class="col-10 bg-light p-4">
	<div class="container"><br>
		<div class="row justify-content-center ">
			<div class="card col-10 bg-light wrap d-md-flex">
               <div class="table-responsive p-4 ">
                   <table id="dataTableExample1" class="table table-bordered table-striped table-hover ">
                       <thead class="back_table_color">
                           <tr class="info"><br>
                               <th>Sl. no</th>
                               <th>User Name</th> 
                               <th>Login Id</th> 
                               <th>Created At</th> 
                               <th>Updated At</th>
                               <th>Action</th>
                               </tr>
                       </thead> 
                       <tbody>
                            @foreach($users as $user)  
                             <tr>
                               <td>{{$loop->iteration}}</td>                                                                            
                               <td>{{$user->name}}</td>
                               <td>{{$user->email}}</td> 
                               <td>{{$user->created_at}}</td> 
                               <td>{{$user->updated_at}}</td> 
                               <td>
                                    <a href={{"edit/".$user['id']}}><i style="font-size: 24px;" class="fa fa-edit text-dark pl-2"></i></a>
                                    <a href={{"delete/".$user['id']}} ><i style="font-size:24px" class="fa fa-user-times pl-2 text-danger"></i></a>
                                </td>                              
                           </tr>
                           @endforeach  
                       <tbody>
                   </table>                                
                </div>
	        </div>
            <div class="pl-6">
                {!! $users->links() !!}
            </div>
		</div>
	</div>
</div>
</div>