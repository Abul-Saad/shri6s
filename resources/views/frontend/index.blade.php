@extends('frontend.Layouts.main')

@section('main-section')

     </section>
        <!-- Center -->

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />


<section id="center_column" class="col-md-9" style="margin-top: 10px;">
   
<div id="carousel-slider">
     <div>
    <img style="width:100%; height:100%;" class="d-block w-100" src="{{url('frontend/assets/images/shripic/shri4.jpg')}}" alt="Paramedical Council" title="First">
</div>
    <div>
    <img style="width:100%; height:100%;" class="d-block w-100" src="{{url('frontend/assets/images/shripic/shri9.jpg')}}" alt="second" title="second">
</div>
    <div>
    <img style="width:100%; height:100%;" class="d-block w-100" src="{{url('frontend/assets/images/shripic/shri10.jpg')}}" alt="third" title="third">
</div>
    <div>
    <img style="width:100%; height:100%;" class="d-block w-100" src="{{url('frontend/assets/images/shripic/shri10.jpg')}}" alt="forth" title="forth">
</div>
     
 
</div>


<style>
    


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 1;
}

/* Declare heights because of positioning of img element */

@media only screen and (max-width: 675px) {
    .carousel .item {
      min-height: 280px;
      background-color:#555;
    }
}

@media only screen and (min-width: 676px) {
    .carousel .item {
      min-height: 630px;
      background-color:#555;
    }
}

.carousel img {
  position: absolute;
  top: 0;
  left: 0;
  margin:auto;
  //min-height: 400px;
}



/* MARKETING CONTENT
-------------------------------------------------- */

/* Pad the edges of the mobile views a bit */
.marketing {
  padding-left: 15px;
  padding-right: 15px;
}

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  text-align: center;
  margin-bottom: 20px;
}
.marketing h2 {
  font-weight: normal;
}
.marketing .col-lg-4 p {
  margin-left: 10px;
  margin-right: 10px;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 80px 0; /* Space out the Bootstrap <hr> more */
}
.featurette {
  padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
  overflow: hidden; /* Vertically center images part 2: clear their floats. */
}
.featurette-image {
  margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
}

/* Give some space on the sides of the floated elements so text doesn't run right into it. */
.featurette-image.pull-left {
  margin-right: 40px;
}
.featurette-image.pull-right {
  margin-left: 40px;
}

/* Thin out the marketing headings */
.featurette-heading {
  font-size: 50px;
  font-weight: 300;
  line-height: 1;
  letter-spacing: -1px;
}



/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 768px) {

  /* Remve the edge padding needed for mobile */
  .marketing {
    padding-left: 0;
    padding-right: 0;
  }

  /* Navbar positioning foo */
  .navbar-wrapper {
    margin-top: 20px;
    margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
  }
  /* The navbar becomes detached from the top, so we round the corners */
  .navbar-wrapper .navbar {
    border-radius: 4px;
  }

  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
  }

}

</style>
          <div class="clearfix"></div>
             

            <div class="row" >
              <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 nopadding nobackground noborder" >
                <div class="widget-html block">
                  <div class="block_content">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 padding border">
                        <h1>Best Trust in Meerut Uttar Pradesh - India for Social Activities </h1>

<div>
  
<p style="font-size: 18px;"><strong>Shri Sant Saptarishi Satogun Sampuran Sanskar Trust, </strong>a dynamic Trust in Meerut,<strong>Uttar Pradesh.</strong>  </p>

<p style="font-size: 18px;">Committed to making a positive impact in our society, we engage in a diverse range of projects that touch the lives of various segments of our community. Through our initiatives, we strive to provide Quality<strong> education </strong> to underprivileged children, foster cultural heritage through<strong> Sanskriti Vidhyalay,</strong> ensure the well-being of our elderly through our <strong>old age home, </strong>promote healthcare accessibility, helping<strong> poor girl marriage </strong>as Kanyadaan program, and contribute to a greener environment through<strong> tree plantation and Gaushala. </strong></p>

<p>&nbsp;</p>

<p style="font-size: 18px;">With a passionate team and unwavering dedication, we are driven to bring about lasting change and uplift the lives of those in need</p>

<p style="font-size: 18px;">Together, let’s create a brighter and more compassionate future for all</p>
<img class="sidebar" width="400px" height="auto" src="{{url('frontend/assets/images/shripic/MIS.jpg')}}" alt="">

<p>&nbsp;</p>
<img class="img" src="{{url('frontend/assets/images/shripic/passionate.svg')}}" alt="">
<h2>Passionate</h2>

<p style="font-size: 18px;"> I understand the financial challenges that many nonprofit organizations face, and I believe that by pooling our resources, we can bring about the change we wish to see in the world.Shri Sant Saptarishi Satogun Sampuran Sanskar Trust has proven time and again that it is capable of turning every dollar into impactful change, and I am proud to be a part of that effort.</p>

</div>                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
<!-- BEGIN # MODAL LOGIN -->
 <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;z-index: 99999;" aria-modal="true">
     
  
    
    
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<a href="index.html" target="_blank" class="close" data-dismiss="modal" aria-label="Close">

						<span class="fa fa-remove" aria-hidden="true"></span>
					</a>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms" style="padding:20px;">
                                               <img src="{{url('frontend/assets/images/shripic/logo.png')}}" class="img-responsive" /> 
                                        <br />
                                        <h1>Join Us +91-9760428012</h1>  </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>
    <!-- END # MODAL LOGIN -->
 
 
 
     </section> 
        </div>
      </div>
  </section> 
  <div class="whatsapp-foot pulse2">
      
<center>
    <a href="https://api.whatsapp.com/send?phone=919760428012&amp;text=" target="_blank">
        <i class="fa fa-whatsapp" style="font-size:36px;color:#fff;margin-top: 13px;"></i>
    </a>
</center>
</div>
<style>
.pulse2 {
  display: block;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: #cca92c;
  cursor: pointer;
  box-shadow: 0 0 0 rgba(204,169,44, 0.4);
  animation: pulse 1s infinite;
}
.pulse2:hover {
  animation: none;
}

@-webkit-keyframes pulse2 {
  0% {
    -webkit-box-shadow: 0 0 0 0 rgba(204,169,44, 0.4);
  }
  70% {
      -webkit-box-shadow:150px rgba(204,169,44, 0);
  }
  100% {
      -webkit-box-shadow: 0 0 0 0 rgba(204,169,44, 0);
  }
}
@keyframes pulse2 {
  0% {
    -moz-box-shadow: 0 0 0 10 rgba(255,69,90, 0.4);
    box-shadow: 0 0 0 0 rgba(255,69,90, 0.4);
  }
  70% {
      -moz-box-shadow: 0 0 0 30px rgba(255,69,90, 0);
      box-shadow: 0 0 0 40px rgba(255,69,90, 0);
  }
  100% {
      -moz-box-shadow: 0 0 0 60 rgba(255,69,90, 0);
      box-shadow: 0 0 0 70 rgba(255,69,90, 0);
  }
}

.pulse {
  display: block;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: #cca92c;
  cursor: pointer;
  box-shadow: 0 0 0 rgba(204,169,44, 0.4);
  animation: pulse 1s infinite;
}
.pulse:hover {
  animation: none;
}

@-webkit-keyframes pulse {
  0% {
    -webkit-box-shadow: 0 0 0 0 rgba(204,169,44, 0.4);
  }
  70% {
      -webkit-box-shadow:150px rgba(204,169,44, 0);
  }
  100% {
      -webkit-box-shadow: 0 0 0 0 rgba(204,169,44, 0);
  }
}
@keyframes pulse {
  0% {
    -moz-box-shadow: 0 0 0 10 rgba(255,69,90, 0.4);
    box-shadow: 0 0 0 0 rgba(255,69,90, 0.4);
  }
  70% {
      -moz-box-shadow: 0 0 0 30px rgba(255,69,90, 0);
      box-shadow: 0 0 0 40px rgba(255,69,90, 0);
  }
  100% {
      -moz-box-shadow: 0 0 0 60 rgba(255,69,90, 0);
      box-shadow: 0 0 0 70 rgba(255,69,90, 0);
  }
}


    .whatsapp-foot {
    position: fixed;
    bottom: 7%;
    left: 30px;
    z-index: 999999;
    border-radius: 50%;
    height: 60px;
    width: 60px;
    text-align: center;
    background: #094e04;
}
.phone-foot {
    position: fixed;
    bottom: 7%;
    right: 30px;
    z-index: 999999;
    border-radius: 50%;
    color:#fff;
}
</style>
@endsection