@extends('frontend.Layouts.main')

@section('main-section')

     </section>
        <!-- Center -->
        <section id="center_column" class="col-md-9">
          <div class="clearfix"></div>
            <div class="bannercontainer banner-fullwidth">
          			 <img class="lazy img-responsive" src="{{url('frontend/assets/images/gaushala/gaushalaimg.jpg')}}" style="width: 100%; height: 300px;" alt=""/>
            </div>
         

            <div class="row" >
              <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 nopadding nobackground noborder" >
                <div class="widget-html block">
                  <div class="block_content">
                    <div class="row">
                        <h3>About Us</h3>
                        <br>
                      <h4 style="text-align: center; font-size: 18px; font-style: italic;">Founded in 10 Year, Shri Sant Saptarishi Satogun Sampuran Sanskar Trust is located in Meerut,UTTAR PRADESH, Pin 250002. Our facility is spread over 8 acres of lush green land, providing ample space for cows to roam and graze. We are staffed by a team of dedicated caretakers, veterinarians, and volunteers who work tirelessly to ensure that each cow receives the best care possible.
                    </h4>

                            <br>
                            <br>
<div>
  <img src="{{url('frontend/assets/images/gaushala/gaushala1.jpg')}}" alt="" height="250px" style="margin: 5px 5px;">
  <img src="{{url('frontend/assets/images/gaushala/gaushala2.jpg')}}" alt="" height="250px" style="margin: 5px 5px;">
  <img src="{{url('frontend/assets/images/gaushala/gaushala3.jpg')}}" alt="" height="250px" style="margin: 5px 5px;">
  <img src="{{url('frontend/assets/images/gaushala/gaushala4.jpg')}}" alt="" height="250px" style="margin: 5px 5px;">
  <img src="{{url('frontend/assets/images/gaushala/gaushala5.jpg')}}" alt="" height="250px" style="margin: 5px 5px;">
  <img src="{{url('frontend/assets/images/gaushala/gaushala6.jpg')}}" alt="" height="200px" style="margin: 5px 5px;">
  <br>
  <br>


</div>                </div>
              </div>
            </div>
          </div>
     </section> 
        </div>
      </div>
  </section>
  <style type="text/css">
  	ol {
    margin-top: 0;
    margin-bottom: 10.5px;
    list-style: decimal-leading-zero;
    margin-left: 40px;
	}
  </style> <div class="whatsapp-foot pulse2">
      
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