@extends('layouts.app')
@section('meta_title',$blog->meta_title)
@section('meta_keywords',$blog->meta_keyword)
@section('meta_description',$blog->meta_description)
@section('meta_image')
    @if($blog->image)
        content="{{ Request::root() }}/storage/{{$blog->image}}"
    @else
        content="{{ Request::root() }}/images/logo-2.png"
    @endif
@endsection
@section('content')

<div class="rs-breadcrumbs img3">
   <div class="breadcrumbs-inner text-center">
      <h1 class="page-title">{{ $blog->name }}</h1>
      <ul>
         <li title="SEO Services">
            <a class="active" href="/">Home</a>
         </li>
       
         <li>{{ $blog->name }}</li>
      </ul>
   </div>
   <p></p>
</div>


<br><br><br>
    <!--<h1 style="text-align: center">{{ $blog->name }}</h1>-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="/public/images/blog/{{ $blog->image }}" width="100%" alt="citriclabs | {{ $blog->name }}">
                                <?php
                                    echo html_entity_decode($blog->description);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                     <aside class="side-bar"><!-- 13. SEARCH -->
<div class="widget bg-white ">
 <div class="vngfkhh">


  <section id="contact" style="    width: 427px;">
                                    
	<div class="sectionheader">	<h1 style="text-align:center;">CONTACT</h1></div>
	<article>
	<p>Contact Rednirus Digital Media and get exclusive services for all your needs.</p>
		
			<label for="checkcontact" class="contactbutton"><div class="mail"></div></label><input id="checkcontact" type="checkbox">
   
<div class="container">

  <form action="/enquiry/store" method="post">
                               @csrf
                                                 
				<p class="input_wrapper"><input type="text" id="name" name="name">
				
				<label for="contact_nom">NAME</label></p>
				
				
				<p class="input_wrapper"><input type="text" id="email" name="email">
				<label for="contact_email">EMAIL</label></p>
				
				
					<p class="input_wrapper"><input type="text" id="phone" name="phone">
				<label for="contact_email">PHONE</label></p>
				
				<p class="input_wrapper"><input type="text" id="Website" name="subject"><label for="contact_sujet">SUBJECT</label></p>
				
				<p class="textarea_wrapper"><textarea id="message" name="message"></textarea></p>
				
				
			<div class="btn-part" style="    text-align: center;">                                            
                                            <div class="form-group mb-0">
                                                <input class="readon learn-more submit" type="submit" value="Submit Now">
                                            </div>
                                        </div> 		
                                </form> 
</div>
</div>
</div>
<!-- 2. RECENT POSTS -->

     <div class="pojghjkjf">
<h3>Digital Marketing</h3>
<ul class="listing-style">                              
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/Search-Engine-Optimization">Search Engine Optimization</a></span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span> <a href="/social-media-optimization"> Social Media Optimization</a></span>
                                </li>
                                 <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span> <a href="/google-adwords">  Google Adwords (PPC)</a></span>
                                </li>  
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/Social-Media-Marketing-Service">  Social Media Marketing Service</a></span>
                                </li>
                               
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/Marketing-Via-SMS">Marketing Via SMS</a></span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/Bulk-SMS-Service"> Bulk SMS Services</a></span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i><a href="/Whatsapp-Marketing">  Whatsapp Marketing</a></span>
                                </li>                              
                            </ul>
                            
                            
                            <h3>UI - UX Designing & Development</h3>
<ul class="listing-style">                              
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/PHP-Web-Development"> PHP Website Development</a></span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span> <a href="/website-optimization">  Website Optimization</a></span>
                                </li>
                                 <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span> <a href="/wordpress-development">  WordPress Website Development</a></span>
                                </li>  
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/Responsive-Web-Design">   Responsive Web Designing</a></span>
                                </li>
                               
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/Custom-Website-Designing"> Custom Website Designing</a></span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/HTML-Bootstrap-Website-Designing">  HTML & Bootstrap Website Designing</a></span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i><a href="/#"> Logo Design</a></span>
                                </li>       
                                
                                  <li>
                                    <i class="fa fa-check-circle"></i><a href="#">  Mobile App Design</a></span>
                                </li>  
                            </ul>
                            
                            <h3>Ecommerce Websites</h3>
<ul class="listing-style">                              
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/e-commerce-business"> Ecommerce Marketing</a></span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span> <a href="/ecommerce-website">  ECommerce Web Development Services</a></span>
                                </li>
                                 <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span> <a href="/E-commerce-Consultant">   ECommerce Consultation</a></span>
                                </li>  
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/wordpress-development">  Social  WordPress Website Development</a></span>
                                </li>
                               
                              
                               
                                                           
                            </ul></div>
</aside>
                        
                        
     <div class="pojghjkjf">
<h3>Digital Marketing</h3>
<ul class="listing-style">                              
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/Search-Engine-Optimization">Search Engine Optimization</a></span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span> <a href="/social-media-optimization"> Social Media Optimization</a></span>
                                </li>
                                 <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span> <a href="/google-adwords">  Google Adwords (PPC)</a></span>
                                </li>  
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/Social-Media-Marketing-Service">  Social Media Marketing Service</a></span>
                                </li>
                               
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/Marketing-Via-SMS">Marketing Via SMS</a></span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/Bulk-SMS-Service"> Bulk SMS Services</a></span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i><a href="/Whatsapp-Marketing">  Whatsapp Marketing</a></span>
                                </li>                              
                            </ul>
                            
                            
                            <h3>UI - UX Designing & Development</h3>
<ul class="listing-style">                              
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/PHP-Web-Development"> PHP Website Development</a></span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span> <a href="/website-optimization">  Website Optimization</a></span>
                                </li>
                                 <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span> <a href="/wordpress-development">  WordPress Website Development</a></span>
                                </li>  
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/Responsive-Web-Design">   Responsive Web Designing</a></span>
                                </li>
                               
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/Custom-Website-Designing"> Custom Website Designing</a></span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/HTML-Bootstrap-Website-Designing">  HTML & Bootstrap Website Designing</a></span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i><a href="/#"> Logo Design</a></span>
                                </li>       
                                
                                  <li>
                                    <i class="fa fa-check-circle"></i><a href="#">  Mobile App Design</a></span>
                                </li>  
                            </ul>
                            
                            <h3>Ecommerce Websites</h3>
<ul class="listing-style">                              
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/e-commerce-business"> Ecommerce Marketing</a></span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span> <a href="/ecommerce-website">  ECommerce Web Development Services</a></span>
                                </li>
                                 <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span> <a href="/E-commerce-Consultant">   ECommerce Consultation</a></span>
                                </li>  
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span><a href="/wordpress-development">  Social  WordPress Website Development</a></span>
                                </li>
                               
                              
                               
                                                           
                            </ul></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
@endsection
@section('modal')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Please Contact Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/enquiry/store') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Name*" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="enquiry" type="text" class="form-control" readonly name="enquiry" placeholder="Enquiry*" value="Enquiry about {{ $blog->name }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="text" class="form-control" name="email" placeholder="Email*" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="phone" type="text" class="form-control" name="phone" placeholder="Phone no*" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">GST*</label>
                            <label class="col-md-2 col-form-label text-md-right">
                                <input type="radio" name="gst" value="1" id=""> Yes
                            </label>
                            <label class="col-md-2 col-form-label text-md-right">
                                <input type="radio" name="gst" value="0" id="" checked> No
                            </label>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Drug Liscence*</label>
                            <label class="col-md-2 col-form-label text-md-right">
                                <input type="radio" name="drug" value="1" id=""> Yes
                            </label>
                            <label class="col-md-2 col-form-label text-md-right">
                                <input type="radio" name="drug" value="0" id="" checked> No
                            </label>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="location" type="text" class="form-control" name="location" placeholder="Location*" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" placeholder="Message*" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-info">
                                    Submit Enquiry
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection