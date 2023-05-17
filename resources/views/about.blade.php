@include('header')
<style>
.testimonials::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(var(--color-secondary-dark-rgb), 0.8);
}
</style>
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    About Us				
                </h1>	
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->
 <!-- ======= About Section ======= -->
 <section id="welcome" class="welcome ">
    <div class="container">
      <div class="row g-3 pt-5">
        <div class="col-md-5 pr-3 pt-5">
          <img src="img/about1.jpg" height="800px" width="800px"class="img-fluid card" alt="ocbu">
        </div>
        <div class="col-md-7 p-4 pl-5">
          @foreach($home as $data) 
          @if($data->id ==1)  
           <h2>{!!$data->description!!}</h2>
            <i style="text-align:justify">
            <p>{!!$data->short_notes!!}</span></p></p>
            </i>             
            @endif
            @endforeach	              
        </div>
      </div>
    </div>
  </section>
  <section id="welcome" class="welcome ">
    <div class="container">
      <div class="row g-3 pt-5">        
        <div class="col-md-7 p-4 pl-5">
          @foreach($home as $data) 
          @if($data->id ==2)  
           <h2>{!!$data->description!!}</h2>
            <i style="text-align:justify">
            <p>{!!$data->short_notes!!}</span></p></p>
            </i>             
            @endif
            @endforeach	              
        </div>
        <div class="col-md-5 pr-3 pt-5">
            <img src="img/okcl_build.jpg" height="800px" width="800px"class="img-fluid card" alt="ocbu">
          </div>
      </div>
    </div>
  </section>
<!-- End About Section -->	
<!-- ======= Testimonials Section ======= -->
<div class="p-4 ">
<section id="testimonials" class="testimonials" style='background: url("../img/footer2.jpg") no-repeat;padding: 60px 0;background-position: center;background-size: cover;position: relative;'>
  <div class="container" data-aos="fade-up">
    <div class="testimonials-slider swiper">
      <div class="swiper-wrapper">
        @for($i=1,$j=3;$i<=6;$i++,$j++)
        <div class="swiper-slide">
          <div class="testimonial-item">
            @foreach($home as $data) 
            @if($data->id == $j)           
              <img src="/img/testimonials/{{$i}}.jpg" class="testimonial-img" alt="">
              <p style="color:white;">{!!$data->description!!}</p>  
              <div class="p-2 pl-0">                   
                <p>{!!$data->short_notes!!}</p>
              </div>
            @endif
            @endforeach
          </div><!-- End testimonial item -->
        </div>
        <div class="swiper-pagination"></div>
        @endfor
      </div>
    </div>
  </div>
</section>
</div><!-- End Testimonials Section -->
@include('footer')