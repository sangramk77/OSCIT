@include('header')
<style>
.testimonials::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(var(--color-secondary-dark-rgb), 0.8);
}
.img-fluid{
    width: 400px;
    height: 700px;
}
h5:hover{
    color: rgb(60, 60, 218);
}
h5{
    color: ;
}
</style>
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    OS-CIT Certificate Verification				
                </h1>	
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->
<!-- ======= About Section ======= -->
<section id="welcome" class="welcome">
    <div class="container">
        <div class="row g-3">
            <div class="col-md col-lg col-sm col-xl p-5">
                <a href="https://certificate.okcl.co.in/" >
                    <h5>Click here for OS-CIT Certificate Verification <br>
                        (2013 to May 2017 Exam Event)</h5> 
                    <img src="img/oscitcert.jpg" class="img-fluid" alt="ocbu">
                </a>
            </div>
            <div class="col-md col-lg col-sm col-xl p-5">
                <a href="http://oscit.osou.ac.in/" >
                    <h5>Click here for OSOU OS-CIT Certificate Verification <br>
                        (June 2017 Exam Event Onwards)</h5>  
                    <img src="img/cert2.jpg" class="img-fluid" alt="ocbu">
                </a>
            </div>
            
        </div>
    </div>
  </section>
@include('footer')