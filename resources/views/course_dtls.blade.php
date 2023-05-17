@include('header')
<style>
  .modal-body a{
    color: black;
  } 
</style>
<!-- start banner Area -->
<section class="carousel section-gap">
	<div id="demo" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ul class="carousel-indicators">
	  <li data-target="#demo" data-slide-to="0" class="active"></li>
	  <li data-target="#demo" data-slide-to="1"></li>
	  <li data-target="#demo" data-slide-to="2"></li>
	  <li data-target="#demo" data-slide-to="3"></li>
	  </ul>
	  <!-- The slideshow -->
	  <div class="carousel-inner">
	  <div class="carousel-item active">
		<img src="img/wp1.png" alt="" >
	  </div>
	  <div class="carousel-item">
		<img src="img/wp2.png" alt="" >
	  </div>
	  <div class="carousel-item">
		<img src="img/wp4.png" alt="" >
	  </div>
	  <div class="carousel-item">
		<img src="img/wp3.png" alt="" >
	  </div>
	  </div>
	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	  <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	  <span class="carousel-control-next-icon"></span>
	  </a>
	</div>
  </section>
  <!-- End banner Area -->	
<!-- End Hero -->
<!-- ======= About Section ======= -->
    <section id="welcome" class="welcome">
      <div class="container">
        <div class="row g-3">
          <div class="col-md-7 pr-5">
            @foreach($os_cit as $data) 
            @if($data->id ==1)  
             <h2 class="colour-gray"><strong>{!!$data->cr_description!!}</strong></h2>
              <i style="text-align:justify">
              <p>{!!$data->cr_short_notes!!}</span></p></p>
              </i>             
              @endif
              @endforeach	              
             </div>
          <div class="col-md-5 pl-3 pt-3">
            <img src="https://helpdesksuites.com/wp-content/uploads/2018/01/standing_out_celebration_300_clr_11866.gif" height="800px" width="800px"class="img-fluid" alt="ocbu">
          </div>
        </div>
      </div>
    </section>
  <!-- End About Section -->
  <!-- ======= About Section ======= -->
  <section id="welcome" class="welcome">
    <div class="container">
      <div class="row g-3">
        <div class="col-md-5 pr-3">
          <img src="img/logo.jpg" height="100px" width="100px"class="img-fluid" alt="ocbu">
          <img src="img/2.png" height="800px" width="800px"class="img-fluid" alt="ocbu">
        </div>
        <div class="col-md-7 p-4 pl-5">
          @foreach($os_cit as $data) 
          @if($data->id ==2)  
           <h2 class="colour-gray"><strong>{!!$data->cr_description!!}</strong></h2>
            <i style="text-align:justify">
            <p>{!!$data->cr_short_notes!!}</span></p></p>
            </i>             
            @endif
            @endforeach	              
        </div>
      </div>
    </div>
  </section>
<!-- End About Section -->
  <!-- More Details-->
  <section class="inner-page p-3">
    <h1 style="text-align:center;">Course Insights</h1>
    <div class="container" data-aos="fade-up">
      <div class="row g-4 p-3">
        <div class="col-lg-3 col-md-6 p-3" style="text-align: center">
          <div class="flip-card" type="button" class="btn btn-danger p-0" data-toggle="modal" data-target="#myModal91">           
            <div class="flip-card-inner">
              <div class="flip-card-front p-5">
                <h4 style="text-align:center;color:white">Learning Options</h4>
              </div>
              <div class="flip-card-back p-5">
                <h4 style="text-align:center;color:white">Learning Options</h4>
              </div>
            </div>            
          </div>
          <!-- The Modal -->
          <div class="modal" id="myModal91">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">                     
                  @foreach($os_cit as $data) 
                  @if($data->id ==13)                       
                  <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>                       
                <!-- Modal body -->
                <div class="modal-body">
                  <p>{!!$data->cr_short_notes!!}</p>
                  @endif
                @endforeach	                                       
                </div>                       
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>                       
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 p-3" style="text-align: center">
          <div class="flip-card" type="button" class="btn btn-danger p-0" data-toggle="modal" data-target="#myModal92">
            <div class="flip-card-inner">
              <div class="flip-card-front p-5">
                <h4 style="text-align:center;color:white">Eligibility & Medium</h4>
              </div>
              <div class="flip-card-back p-5">
                <h4 style="text-align:center;color:white">Eligibility & Medium</h4>               
              </div>
            </div>
          </div>
           <!-- The Modal -->
           <div class="modal" id="myModal92">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">                     
                  @foreach($os_cit as $data) 
                  @if($data->id ==14)                       
                  <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>                       
                <!-- Modal body -->
                <div class="modal-body">
                  <p>{!!$data->cr_short_notes!!}</p>
                  @endif
                @endforeach	                                       
                </div>                       
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>                       
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 p-3 " style="text-align: center">
          <div class="flip-card" type="button" class="btn btn-danger p-0 modal" data-toggle="modal" data-target="#myModal93">
            <div class="flip-card-inner">
              <div class="flip-card-front p-5">
                <h4 style="text-align:center;color:white">Examination</h4>
              </div>
              <div class="flip-card-back p-5">
                <h4 style="text-align:center;color:white">Examination</h4>              
              </div>
            </div>            
          </div>
          <!-- The Modal -->
          <div class="modal" id="myModal93">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">                     
                  @foreach($os_cit as $data) 
                  @if($data->id ==15)                       
                  <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>                       
                <!-- Modal body -->
                <div class="modal-body">
                  <p>{!!$data->cr_short_notes!!}</p>
                  @endif
                @endforeach	                                       
                </div>                       
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>                       
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 p-3" style="text-align: center">
          <div class="flip-card" type="button" class="btn btn-danger p-0" data-toggle="modal" data-target="#myModal94">
            <div class="flip-card-inner">
              <div class="flip-card-front p-5">
                <h4 style="text-align:center;color:white">Center Setup</h4>
              </div>
              <div class="flip-card-back p-5">
                <h4 style="text-align:center;color:white">Center Setup</h4> 
              </div>
            </div>
          </div>
          <!-- The Modal -->
          <div class="modal" id="myModal94">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">                     
                  @foreach($os_cit as $data) 
                  @if($data->id ==16)                       
                  <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>                       
                <!-- Modal body -->
                <div class="modal-body">
                  <p>{!!$data->cr_short_notes!!}</p>
                  @endif
                @endforeach	                                       
                </div>                       
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>                       
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row g-4 p-3">
        <div class="col-lg-3 col-md-6 p-3" style="text-align: center">
          <div class="flip-card" type="button" class="btn btn-danger p-0" data-toggle="modal" data-target="#myModal95">
            <div class="flip-card-inner">
              <div class="flip-card-front p-5">
                <h4 style="text-align:center;color:white;">Computing Resources</h4>
              </div>
              <div class="flip-card-back p-5">
                <h4 style="text-align:center;color:white">Computing Resources</h4>               
              </div>
            </div>
          </div>
          <!-- The Modal -->
          <div class="modal" id="myModal95">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">                     
                  @foreach($os_cit as $data) 
                  @if($data->id ==17)                       
                  <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>                       
                <!-- Modal body -->
                <div class="modal-body">
                  <p>{!!$data->cr_short_notes!!}</p>
                  @endif
                @endforeach	                                       
                </div>                       
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>                       
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 p-3" style="text-align: center">
          <div class="flip-card" type="button" class="btn btn-danger p-0" data-toggle="modal" data-target="#myModal96">
            <div class="flip-card-inner">
              <div class="flip-card-front p-5">
                <h4 style="text-align:center;color:white">Important Dates</h4>
              </div>
              <div class="flip-card-back p-5">
                <h4 style="text-align:center;color:white">Important Dates</h4>             
              </div>
            </div>
          </div>
          <!-- The Modal -->
          <div class="modal" id="myModal96">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">                     
                  @foreach($os_cit as $data) 
                  @if($data->id ==18)                       
                  <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>                       
                <!-- Modal body -->
                <div class="modal-body">
                  <p>{!!$data->cr_short_notes!!}</p>
                  @endif
                @endforeach	                                       
                </div>                       
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>                       
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 p-3 " style="text-align: center">
          <div class="flip-card" type="button" class="btn btn-danger p-0" data-toggle="modal" data-target="#myModal97">
            <div class="flip-card-inner">
              <div class="flip-card-front p-5">
                <h4 style="text-align:center;color:white">Government Resolution</h4>
              </div>
              <div class="flip-card-back p-5">
                <h4 style="text-align:center;color:white">Government Resolution</h4>              
              </div>
            </div>
          </div>
          <!-- The Modal -->
          <div class="modal" id="myModal97">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">                     
                  @foreach($os_cit as $data) 
                  @if($data->id ==19)                       
                  <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>                       
                <!-- Modal body -->
                <div class="modal-body ">
                  <p>{!!$data->cr_short_notes!!}</p>
                  @endif
                @endforeach	                                       
                </div>                       
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>                       
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 p-3" style="text-align: center">
          <div class="flip-card" type="button" class="btn btn-danger p-0" data-toggle="modal" data-target="#myModal98">
            <div class="flip-card-inner">
              <div class="flip-card-front p-5">
                <h4 style="text-align:center;color:white">Terms & Conditions</h4>
              </div>
              <div class="flip-card-back p-5">
                <h4 style="text-align:center;color:white">Terms & Conditions</h4>               
              </div>
            </div>
          </div>
          <!-- The Modal -->
          <div class="modal" id="myModal98">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">                     
                  @foreach($os_cit as $data) 
                  @if($data->id ==20)                       
                  <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>                       
                <!-- Modal body -->
                <div class="modal-body">
                  <p>{!!$data->cr_short_notes!!}</p>
                  @endif
                @endforeach	                                       
                </div>                       
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>                       
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End More Details -->			

  
<!-- ======= syllabus Section ======= -->
<section class="inner-page pt-5" style="background:url(../img/login.png) right no-repeat;background-size:cover;">
  <div class="container" data-aos="fade-up">
    <h4 style="text-align:center;color:white"> Learn 200+ Skills in OS-CIT</h4>
    <h5 style="text-align:center;color:white">This course offers the following modules:</h5>
    <!-- Button to Open the Modal -->
      <div class="col-lg-12 col-md-6 col-sm-4 p-2 syllabus " type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal220" style="text-align: center" >
        <img src="img/oscit.png" height="500px" width="550px">
      </div>
        <!-- The Modal -->
        <div class="modal" id="myModal220">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">                                          
                <h4 class="modal-title">Pillar's of OS-CIT</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>                       
              <!-- Modal body -->
              <div class="modal-body">
                <div class="col-lg-12 col-md-10 p-2" style="text-align: center">
                  <div class="container">
                    <div class="row g-4">
                      <div class="col-lg-3 col-md-4 hii p-3">
                        <!-- Button to Open the Modal -->
                        <img type="button" class="btn btn-danger high" data-toggle="modal" data-target="#myModal" src="img/pillar/1.png" height="100px" width="100px" alt="">
                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <!-- Modal Header -->
                              <div class="modal-header">                     
                                @foreach($os_cit as $data) 
                                @if($data->id ==3)                       
                                <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>                       
                              <!-- Modal body -->
                              <div class="modal-body">
                                <p>{!!$data->cr_short_notes!!}</p>
                                @endif
                               @endforeach	                                       
                              </div>                       
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>                       
                            </div>
                          </div>
                        </div>
                      <div>   
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 hii p-3">
                    <!-- Button to Open the Modal -->
                    <img type="button" class="btn btn-danger high" data-toggle="modal" data-target="#myModal20" src="img/pillar/2.png" height="100px" width="100px" alt="">
                    <!-- The Modal -->
                    <div class="modal" id="myModal20">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <!-- Modal Header -->
                          <div class="modal-header">                     
                            @foreach($os_cit as $data) 
                            @if($data->id ==4)                       
                            <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>                       
                          <!-- Modal body -->
                          <div class="modal-body">
                            <p>{!!$data->cr_short_notes!!}</p>
                            @endif
                           @endforeach	                                       
                          </div>                       
                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>                       
                        </div>
                      </div>
                    </div>
                  <div>          
                </div>
              </div>
             <div class="col-lg-3 col-md-4 hii p-3">
               <!-- Button to Open the Modal -->
               <img type="button" class="btn btn-danger high" data-toggle="modal" data-target="#myModal2" src="img/pillar/3.png" height="100px" width="100px" alt="">
               <!-- The Modal -->
               <div class="modal" id="myModal2">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <!-- Modal Header -->
                     <div class="modal-header">                     
                       @foreach($os_cit as $data) 
                       @if($data->id ==5)                       
                       <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>                       
                     <!-- Modal body -->
                     <div class="modal-body">
                       <p>{!!$data->cr_short_notes!!}</p>
                       @endif
                     @endforeach	                                       
                     </div>                       
                     <!-- Modal footer -->
                     <div class="modal-footer">
                       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                     </div>                       
                   </div>
                 </div>
               </div>
             <div>          
           </div>
         </div>
                              <div class="col-lg-3 col-md-4 hii p-3">
                                <!-- Button to Open the Modal -->
                                <img type="button" class="btn btn-danger high" data-toggle="modal" data-target="#myModal3" src="img/pillar/4.png" height="100px" width="100px" alt="">
                                <!-- The Modal -->
                                <div class="modal" id="myModal3">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <!-- Modal Header -->
                                      <div class="modal-header">                     
                                        @foreach($os_cit as $data) 
                                        @if($data->id ==6)                       
                                        <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>                       
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                        <p>{!!$data->cr_short_notes!!}</p>
                                        @endif
                                      @endforeach	                                       
                                      </div>                       
                                      <!-- Modal footer -->
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                      </div>                       
                                    </div>
                                  </div>
                                </div>
                              <div>          
                            </div>
                          </div>
                          <div class="container">
                            <div class="row g-4">
                              <div class="col-lg-3 col-md-4 hii p-3">
                                <!-- Button to Open the Modal -->
                                <img type="button" class="btn btn-danger high" data-toggle="modal" data-target="#myModal4" src="img/pillar/5.png" height="100px" width="100px" alt="">
                                <!-- The Modal -->
                                <div class="modal" id="myModal4">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <!-- Modal Header -->
                                      <div class="modal-header">                     
                                        @foreach($os_cit as $data) 
                                        @if($data->id ==7)                       
                                        <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>                       
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                            <p>{!!$data->cr_short_notes!!}</p>
                                            @endif
                                          @endforeach	                                       
                                          </div>                       
                                          <!-- Modal footer -->
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                          </div>                       
                                        </div>
                                      </div>
                                    </div>
                                  <div>   
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-4 hii p-3">
                                <!-- Button to Open the Modal -->
                                <img type="button" class="btn btn-danger high" data-toggle="modal" data-target="#myModal5" src="img/pillar/6.png" height="100px" width="100px" alt="">
                                <!-- The Modal -->
                                <div class="modal" id="myModal5">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <!-- Modal Header -->
                                      <div class="modal-header">                     
                                        @foreach($os_cit as $data) 
                                        @if($data->id ==8)                       
                                        <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>                       
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                        <p>{!!$data->cr_short_notes!!}</p>
                                        @endif
                                      @endforeach	                                       
                                      </div>                       
                                      <!-- Modal footer -->
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                      </div>                       
                                    </div>
                                  </div>
                                </div>
                              <div>          
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-4 hii p-3">
                            <!-- Button to Open the Modal -->
                            <img type="button" class="btn btn-danger high" data-toggle="modal" data-target="#myModal6" src="img/pillar/7.png" height="100px" width="100px" alt="">
                            <!-- The Modal -->
                            <div class="modal" id="myModal6">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <!-- Modal Header -->
                                  <div class="modal-header">                     
                                    @foreach($os_cit as $data) 
                                    @if($data->id ==9)                       
                                    <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>                       
                                  <!-- Modal body -->
                                  <div class="modal-body">
                                    <p>{!!$data->cr_short_notes!!}</p>
                                    @endif
                                  @endforeach	                                       
                                  </div>                       
                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  </div>                       
                                </div>
                              </div>
                            </div>
                          <div>          
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 hii p-3">
                        <!-- Button to Open the Modal -->
                        <img type="button" class="btn btn-danger high" data-toggle="modal" data-target="#myModal7" src="img/pillar/8.png" height="100px" width="100px" alt="">
                        <!-- The Modal -->
                        <div class="modal" id="myModal7">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <!-- Modal Header -->
                              <div class="modal-header">                     
                                @foreach($os_cit as $data) 
                                @if($data->id ==10)                       
                                <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>                       
                              <!-- Modal body -->
                              <div class="modal-body">
                                <p>{!!$data->cr_short_notes!!}</p>
                                @endif
                                @endforeach	                                       
                              </div>                       
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>                       
                            </div>
                          </div>
                        </div>
                      <div>          
                    </div>
                  </div>
                  <div class="container">
                    <div class="row g-4">
                      <div class="col-lg-3 col-md-4 hii p-3">
                        <!-- Button to Open the Modal -->
                        <img type="button" class="btn btn-danger high"  data-toggle="modal" data-target="#myModal8" src="img/pillar/9.png" height="100px" width="100px" alt="">
                        <!-- The Modal -->
                        <div class="modal" id="myModal8">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <!-- Modal Header -->
                              <div class="modal-header">                     
                                @foreach($os_cit as $data) 
                                @if($data->id ==11)                       
                                <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>                       
                              <!-- Modal body -->
                              <div class="modal-body">
                                <p>{!!$data->cr_short_notes!!}</p>
                                @endif
                               @endforeach	                                       
                              </div>                       
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>                       
                            </div>
                          </div>
                        </div>
                      <div>   
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 hii p-3">
                      <!-- Button to Open the Modal -->
                      <img type="button" class="btn btn-danger high"  data-toggle="modal" data-target="#myModal9" src="img/pillar/10.png" height="100px" width="100px" alt="">
                      <!-- The Modal -->
                      <div class="modal" id="myModal9">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">                     
                              @foreach($os_cit as $data) 
                              @if($data->id ==12)                       
                              <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>                       
                            <!-- Modal body -->
                            <div class="modal-body">
                              <p>{!!$data->cr_short_notes!!}</p>
                              @endif
                             @endforeach	                                       
                            </div>                       
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>                       
                          </div>
                        </div>
                      </div>
                    <div>   
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 hii p-3">
                  <!-- Button to Open the Modal -->
                  <img type="button" class="btn btn-danger high"  data-toggle="modal" data-target="#myModal10" src="img/pillar/11.png" height="100px" width="100px" alt="">
                  <!-- The Modal -->
                  <div class="modal" id="myModal10">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">                     
                          @foreach($os_cit as $data) 
                          @if($data->id ==21)                       
                          <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>                       
                        <!-- Modal body -->
                        <div class="modal-body">
                          <p>{!!$data->cr_short_notes!!}</p>
                          @endif
                         @endforeach	                                       
                        </div>                       
                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>                       
                      </div>
                    </div>
                  </div>
                <div>   
              </div>
            </div>
                  <div class="col-lg-3 col-md-4 hii p-3">
                        <!-- Button to Open the Modal -->
                        <img type="button" class="btn btn-danger high" data-toggle="modal" data-target="#myModal11" src="img/pillar/12.png" height="100px" width="100px" alt="">
                        <!-- The Modal -->
                        <div class="modal" id="myModal11">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <!-- Modal Header -->
                              <div class="modal-header">                     
                                @foreach($os_cit as $data) 
                                @if($data->id ==22)                       
                                <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>                       
                              <!-- Modal body -->
                              <div class="modal-body">
                                <p>{!!$data->cr_short_notes!!}</p>
                                @endif
                               @endforeach	                                       
                              </div>                       
                              <!-- Modal footer -->
                              <div class="modal-footer"vissible>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>                       
                            </div>
                          </div>
                        </div>
                      <div>          
                    </div>
                  </div>
                </div>           
              </div>                       
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>                       
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End syllabus Page -->


<!-- Start cta-two Area -->
<section class="cta-two-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 cta-left">
                <h2 style="color: white">Do you want to get an Admission?</h2>
            </div>
            <div class="col-lg-4 cta-right">
                <a type="button" class="btn btn-danger high wh" style="background-image: linear-gradient(to right, #DD5E89 0%, #F7BB97 51%, #DD5E89 100%);" data-toggle="modal" data-target="#myModal87">View Fees Structure, Certification And Duration</a>
                <!-- The Modal -->
                <div class="modal" id="myModal87">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">                     
                        @foreach($os_cit as $data) 
                        @if($data->id ==27)                       
                        <h4 class="modal-title">{!!$data->cr_description!!}</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>                       
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p>{!!$data->cr_short_notes!!}</p>
                        @endif
                       @endforeach	                                       
                      </div>                       
                      <!-- Modal footer -->
                      <div class="modal-footer"vissible>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>                       
                    </div>
                  </div>
                </div>
            </div>           
          </div>
        </div>	
      </section>
     <!-- End cta-two Area -->
     @include('footer')
