@include('header')
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="os_cit">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Admission				
                </h1>	
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->
<section id="welcome" class="welcome ">
    <div class="container">
      <div class="row g-3 pt-5">
        <div class="col-md-5 pr-3 pt-5 ">
          <img src="img/ad_pro/1.png" class="img-fluid card p-5" alt="ocbu">
        </div>
        <div class="col-md-7 p-4 pl-5">
          @foreach($os_cit as $data) 
          @if($data->id ==23)  
           <h2>{!!$data->cr_description!!}</h2>          
            <p>{!!$data->cr_short_notes!!}</span></p></p>                     
            @endif
            @endforeach	 
            @foreach($os_cit as $data) 
             @if($data->id ==24)  
            <h2>{!!$data->cr_description!!}</h2>    
            <p>{!!$data->cr_short_notes!!}</span></p></p>          
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
          @foreach($os_cit as $data) 
          @if($data->id ==25)  
           <h2>{!!$data->cr_description!!}</h2>          
            <p>{!!$data->cr_short_notes!!}</span></p></p>                     
            @endif
            @endforeach	              
        </div>    
        <div class="col-md-5 pr-3 pt-5 ">
            <img src="img/ad_pro/2.png" class="img-fluid card p-5" alt="ocbu">
          </div>  
      </div>
    </div>
  </section>
  <section id="welcome" class="welcome ">
    <div class="container">
      <div class="row g-3 pt-5">
        <div class="col-md-5 pr-3 pt-5">
          <img src="img/ad_pro/3.png" height="800px" width="800px"class="img-fluid" alt="ocbu">
        </div>
        <div class="col-md-7 p-4 pl-5">
          @foreach($os_cit as $data) 
          @if($data->id ==26)  
           <h2>{!!$data->cr_description!!}</h2>         
            <p>{!!$data->cr_short_notes!!}</span></p></p>       
            @endif
            @endforeach	              
        </div>
      </div>
    </div>
  </section>
 
@include('footer')