<div style="    position: fixed;
    z-index: 999999;
    margin-top: 20px;
    border: 2px solid #f5f5f5;">
    <img src="{{url('frontend/assets/lbserti-left-logo.jpg')}}" style="max-width:110px;" />
</div>

 <section id="columns" class="columns-container">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: block; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index:999; /* Sit on top */
  padding-top: 50px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  
   
}

/* Modal Content */
.modal-content {
  position: relative;
  
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s;
  
  
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-200px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-200px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 8px;
  background-color: #e9e9e9;
  color: #494949;
  margin:2px;
  border-radius:5px;
  border:1px solid #ccc;
}

.modal-header h2{font-weight:bold;font-size: 15px;
    margin:5px;}
.modal-header .close{margin-top:0px;color:#333;}

.modal-body {padding: 8px 16px;text-align:center;}
.modal-body img{max-width:100%;height:400px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
</style>
 

<script>
function openNotice(url){
    window.open(url,'_blank');
}

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
 
<div class="container-fluid">
  <div class="row"> 
        <!-- Right -->      
 <section id="right_column" class="column sidebar col-md-3">
      <div id="newsletter_block_left" class="block inline">
        <h4 class="title_block">TRENDING NOW</h4>
<div class="block_content">
<div style="min-height:200px;">
   
<marquee onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="2" scrolldelay="1" direction="up"  height="250">


                <a target="_blank" href="#">
                    <img src="{{url('frontend/assets/images/shripic/logo.png')}}" class="img-responsive" >
                  
                </a>
                   
                   
                       <a target="_blank" href="#">
                    <img src="{{url('frontend/assets/images/shripic/shri8.jpg')}}" class="img-responsive" >

                    <p>Jai Shri Ram, Har Har Mahadev! </p>
                    <p>Namaskar to the entire Hindu society, may Lord Shri Ram continue to bless us and the entire Hindu society is requested to donate as much as possible to our ashram, our Swami Shri Sunil Giri Ji
                     Maharaj has continued his efforts for the welfare of the society. And we will keep thanking you, For more information so please contact us . 8769369367, 9548004969, 9358072073, Email ID: info@shri6s.com </p>
                  
                </a>
                   
                   
                
  
    </marquee>
     
    
</div>

</div>
      </div>
      <!-- Block categories module -->
  <div id="newsletter_block_left" class="block inline block-highlighted">
<div id="mdegmedia1"><h4 class="title_block">Health Care</h4>
<div class="block_content">
<span class="blinking">Shri Sant Saptarishi Satogun Sampuran Sanskar Trust has achieved remarkable progress in the sectore of healthcare Trust in Meerut Uttar Pradesh- India</span>
</div></div>
<br/>
<div id="mdegmedia2"><h4 class="title_block">Child Education</h4>
<div class="block_content">
<span class="blinking">Mission Education is a National & International Level initiative of Shri Sant Saptarishi Satogun Sampuran Sanskar Trust
</span>
</div></div>
<br/>
<div id="mdegmedia2"><h4 class="title_block">All Donation Are Exampted Under Section 80 G (5) (vi) of Income Tax Act 1961</h4>
  </div>
  <br/>
  <div id="mdegmedia2" ><h4 class="title_block" style="background-color: #5cb85c;">+91 976 0428012 Info@shri6s.com </h4>
    </div>
    <br>
    <div id="mdegmedia1"><h4 class="title_block" style="background-color: #FF9933;">UDYAM REGISTRATION CERTIFICATE</h4>
      <div class="block_content">
      <span class="blinking"><a href="{{url('frontend/assets/images/Print _ Udyam Registration Certificate Maharj G.pdf')}}" target="_blank" title="E-Certificate"><img src="{{url('frontend/assets/images/ebook-button.png')}}" width="100%" height="120px" style="margin-top:10px;"></a>
      </span>
      </div></div>
 