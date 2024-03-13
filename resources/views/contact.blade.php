@extends('layouts.app')
@section('meta_title','Contact Details of Rednirus Digital Media')
@section('meta_keywords','')
@section('meta_description','If you have any query regarding digital marketing and web development services then call us at +91-9888885364 or drop email at surinder@rednirus.in any time.')
@section('content') 

<style>
    .seb-d button {
    border: 1px solid white;
    width: 149px;
    padding: 6px;
    background: #f3762a;
    color: #fff;
    font-size: 18px;
}
</style>
 <!-- Breadcrumbs Start -->
 <div class="rs-breadcrumbs img3">
    <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">Contact</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="/">Home</a>
                        </li>
                       <li>Contact</li>
                    </ul>
                </div>
    </div>
            <!-- Breadcrumbs End -->

            <!-- Contact Section Start -->
            <div class="rs-contact pt-120 md-pt-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 md-mb-60">
                           <div class="contact-box">
                                <div class="sec-title mb-45">
                                    <span class="sub-text new-text white-color">Let's Talk</span>
                                    <h2 class="title white-color">Speak With our Team.</h2>
                                </div>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-home"></i>
                                   </div>
                                   <div class="address-text">
                                        <span class="label">Email:</span>
                                          <a href="mailto:info@rednirus.in">info@rednirus.in</a>
                                   </div>
                               </div>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-phone"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Phone:</span>
                                       <a href="#">+91-9888885364</a>
                                   </div>
                               </div>
                               <div class="address-box">
                                   <div class="address-icon">
                                       <i class="fa fa-map-marker"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Address:</span>
                                       <div class="desc">SCO 207, 2nd Floor, Sector 14, Panchkula - 134113, Haryana</div>
                                   </div>
                               </div>
                           </div>
                        </div> 
                        <div class="col-lg-8 pl-70 md-pl-15">
                            <div class="contact-widget">
                               <div class="sec-title2 mb-40">
                                   <span class="sub-text contact mb-15">Get In Touch</span>
                                   <h2 class="title testi-title">Fill The Form Below</h2>

                               </div>
                                <div id="form-messages"></div>
                              <form id="frm2" action="/enquiry/store" method="post">
                               @csrf
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                            </div> 
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                            </div>   
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                            </div>   
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="Website" name="subject" placeholder="Your Website" required="">
                                            </div>
                                      
                                            <div class="col-lg-12 mb-3">
                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                                
                                                
                                            </div>
                                            
                                              <div class="col-md-12  mb-30">
                                    
                                       <p><br />
                                       <?php $toshow =  rand(1000, 9999); ?>

<img src="captcharender.php?rand=<?php echo $toshow; ?>" id='captcha_image' alt="captcha render"><input type="text" maxlength="5" class="form-control" placeholder="Enter captcha*" id="captcha_entry" name="captcha_entry"  required="true" >
</p>
<p style="color:black;">Can't read the image?
<a class="rel" style="color:#fff;" href='javascript: refreshCaptcha();'>click here</a>
to refresh</p>
                                   
                                 </div>
                                            
                                        </div>
                                        <div class="col-md-12 col-sm-12 pb-4">
                                      <!--- *tut* hidden variable --->
                                     <input type="hidden" name="cross_check" id="cross_check"   value="{{$toshow}}">
                                     <!--- hidden variable --->
                                 
                                 <!--- *tut* id of button to give  --->
                                 <div class="col-md-12 col-sm-12 pb-4">
                                     <div class="seb-d">
                                   <button type="submit" id="btnsb1" >
                                                    Send
                                                </button>
                                                </div>
                                 </div>
                              </div> 
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="map-canvas pt-120 md-pt-80">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3431.2397555217203!2d76.84353951155393!3d30.683529674502076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xf9448fdffa17ff7%3A0x61e46b3f57b7ae5!2sRednirus%20Digital%20Media!5e0!3m2!1sen!2sin!4v1703574529711!5m2!1sen!2sin" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
            <!-- Contact Section Start -->
            
            
            
            
            
            
            
            
              <script>


/// *tut*  these scripts to be added
//Refresh Captcha
function refreshCaptcha(){
    var img = document.images['captcha_image'];
    var randstr = Math.floor(Math.random()*10000);

    img.src = img.src.substring(
		0,img.src.lastIndexOf("?")
		)+"?rand="+randstr;

		document.getElementById("cross_check").value = randstr;

}

$("#btnsb1").button().click(function(){
        if(!$('#frm2')[0].checkValidity()) {

        event.preventDefault();
        } else {
            if($('#cross_check').val() != $('#captcha_entry').val()) {
                alert("Please enter a valid captcha.");
                event.preventDefault();
            }

        }

});






</script>
            
            
            
@endsection