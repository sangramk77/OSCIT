@include('header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }

    a:link {
	text-decoration: none;
	}
    a:visited {
	text-decoration: none;
	}
	.single-feature{
		box-shadow: 0 10px 10px 0 rgba(0, 0, 0, .2);
	}	
	.section-gap{
		padding-top: 130px;
	}
	.cols:hover{
		color: black;
	}
	.cols:hover{
		color: white;
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
  <!-- ======= About Section ======= -->
 <section id="welcome" class="welcome pt-0 pb-5">
    <div class="container card p-5" style="background-image: linear-gradient( 111.4deg,  rgba(238,113,113,1) 1%, rgba(246,215,148,1) 58% );color:white;">
      <div class="row g-3 ">
        <div class="col-md-5">
			<img src="img/about1.jpg" height="600px" width="800px"class="img-fluid card" alt="ocbu">
			<video class="w-100 h-50" autoplay loop muted class="card">
				<source src="/img/OS-CITLockdown-ALD-English.mp4" type="video/mp4" />
			</video>
          
        </div>
        <div class="col-md-7 p-4 pl-5 ">
          @foreach($home as $data) 
          @if($data->id ==1)  
           <h2 >{!!$data->description!!}</h2>
            <i style="text-align:justify">
            <p>{!!$data->short_notes!!}</span></p>
            </i>             
            @endif
            @endforeach	              
        </div>
      </div>
    </div>
  </section>
<!-- ======= End About Section ======= -->
<!-- Start feature Area -->
<section class="feature-area pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-feature">
                    <div class="title card  w3-pale-yellow">
                        <h4>ONLINE ADMISSION</h4>
                    </div>
                    <div class="desc-wrap" >
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement
                            of technology.
                        </p>
                        <a style="background-image: linear-gradient(to right, #DD5E89 0%, #F7BB97 51%, #DD5E89 100%);color:white;"  class="read-more cols p-2" href="{{url('http://join.okcl.org/')}}">Join Now</a>									
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-feature">
                    <div class="title card  w3-pale-yellow">
                        <h4>LOCATE CENTER</h4>
                    </div>
                    <div class="desc-wrap">
						<br>
                        <p>
                            With academic interactions, assessments, and collaboration
                        </p>
                        <a style="background-image: linear-gradient(to right, #DD5E89 0%, #F7BB97 51%, #DD5E89 100%);color:white;"  class="read-more cols p-2" href="{{url('http://solarex.mkcl.org/EF/ATC_NEW/report/rptDistrictWiseCenterDetails.jsp?jvId=ElfkzSi%2BqnA%3D')}}">Locate Now</a>							
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-feature">
                    <div class="title card  w3-pale-yellow">
                        <h4>Verify OSCIT Certificate</h4>
                    </div>
                    <div class="desc-wrap">
						<br>
                        <p>
                            Learning facilitation by certified professionals
                        </p><br>
                        {{-- For OSOU:  <a style="color:blue;" href="http://oscit.osou.ac.in/" >OSOU</a><br> --}}
                       <a style="background-image: linear-gradient(to right, #DD5E89 0%, #F7BB97 51%, #DD5E89 100%);color:white;"  class="read-more p-2 cols" href="{{('certificate')}}">Verify Now</a>				
                    </div>
                </div>
            </div>												
        </div>
    </div>	
</section>
<!-- End feature Area -->						
			<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">In This Popular Course we offer</h1>
								<p>There is a moment in the life of any aspiring.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-popular-carusel">
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/pillar/1.png" alt="">
									</div>																		
								</div>								
							</div>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/pillar/2.png" alt="">
									</div>																		
								</div>							
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/pillar/3.png" alt="">
									</div>									
								</div>	
							</div>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/pillar/4.png" alt="">
									</div>																		
								</div>								
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/pillar/5.png" alt="">
									</div>																		
								</div>								
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/pillar/6.png" alt="">
									</div>																		
								</div>								
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid p-0" src="img/pillar/7.png" alt="">
									</div>																		
								</div>								
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/pillar/8.png" alt="">
									</div>																		
								</div>								
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid p-0" src="img/pillar/9.png" alt="">
									</div>																		
								</div>								
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid p-0" src="img/pillar/10.png" alt="">
									</div>																		
								</div>								
							</div>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid p-0" src="img/pillar/11.png" alt="">
									</div>																		
								</div>								
							</div>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid p-0" src="img/pillar/12.png" alt="">
									</div>																		
								</div>							
							</div>									
						</div>
					</div>		
				</div>	
			</section>
			<!-- End popular-course Area -->
			<div class="col-lg-6 video-play position-relative">
				<a href="/img/OS-CITLockdown-ALD-English.mp4" autoplay class="glightbox play-btn"></a>
			</div>
			<!-- ======= On Focus Section ======= -->
			<section id="onfocus" class="onfocus">
				<div class="container-fluid p-4" data-aos="fade-up">
					<div class="row g-0">
						<div class="col-lg-12">
							<div class="content d-flex flex-column justify-content-center h-100">
								<h3>This Course Comprises</h3><br>							
								<ul>
								<li> Reading and understanding a highly illustrated book</li>
								<li> eLearning based self-learning sessions</li>
								<li> Through OKCL's eLearning Revolution for All (ERA)</li>
								<li> Providing hands-on practice sessions.</li>
								<li> Learning facilitation by certified professionals</li>
								<li> With academic interactions, assessments, and collaboration</li>
								</ul>
								Visit below link to learn 21st-century digital skills at your home as “OS-CIT Online” is just a click away.<br><br>
								<div class="row p-2">
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<a href="http://join.okcl.org/" style="background-image: linear-gradient(to right, #DD5E89 0%, #F7BB97 51%, #DD5E89 100%);" target="_blank" class="read-more" ><span>Enroll for OS-CIT</span><i class="fa fa-arrow-right"></i></a>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<a href="{{url('course_dtls')}}" style="background-image: linear-gradient(to right, #DD5E89 0%, #F7BB97 51%, #DD5E89 100%);"  class="read-more"><span>Know more about OS-CIT</span><i class="fa fa-arrow-right"></i></a>		
									</div>
									
									
								</div>					
							</div>
						</div>
					</div>		  
				</div>
            </section><!-- End On Focus Section -->										
			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h2 style="color: white">Do you want know how to get an Admission?</h2>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" style="background-image: linear-gradient(to right, #DD5E89 0%, #F7BB97 51%, #DD5E89 100%);" href="{{url('admission')}}">view Admission Process</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta-two Area -->
@include('footer')