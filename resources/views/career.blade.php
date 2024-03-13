 @extends('layouts.app')
@section('meta_title','Career Opportunity at Rednirus Digital Media')
@section('meta_keywords','')
@section('meta_description','Are you searching for a job in the IT Industry? If yes, Fill out this online lead form along with your updated CV, Call us today for instant support.')

   
@section('content')

<div class="rs-breadcrumbs img1">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">Career</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="/">Home</a>
                        </li>
                        <li>Career</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->





<div class="container">
    <div class="contact__wrapper shadow-lg mt-n9">
        <div class="row no-gutters">
            <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
                <h3 class="color--white mb-5" style="color: white;">Contact</h3>
    
                <ul class="contact-info__list list-style--none position-relative z-index-101">
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-envelope"></i></span> info@rednirus.in
                    </li>
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-phone"></i></span> +91-9888885364
                    </li>
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-map-marker-alt"></i></span> Address :
                        <br> SCO 207, 2nd Floor, 
                        <br>Sector 14, Panchkula - 134113, Haryana
    
                       
                    </li>
                </ul>
    
                <figure class="figure position-absolute m-0 opacity-06 z-index-100" style="bottom:0; right: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="444px" height="626px">
                        <defs>
                            <linearGradient id="PSgrad_1" x1="0%" x2="81.915%" y1="57.358%" y2="0%">
                                <stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="1"></stop>
                                <stop offset="100%" stop-color="rgb(0,54,207)" stop-opacity="0"></stop>
                            </linearGradient>
    
                        </defs>
                        <path fill-rule="evenodd" opacity="0.302" fill="rgb(72, 155, 248)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                        <path fill="url(#PSgrad_1)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                    </svg>
                </figure>
            </div>
    
            <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
              <form action="/enquiry/store" method="post">
                               @csrf
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                               
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                        </div>
    
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                               
                                <input type="text" class="form-control" id="name" name="name" placeholder="Last Name">
                            </div>
                        </div>
    
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                             
                                <input type="text" class="form-control" id="email" name="email" placeholder="info@rednirus.in">
                            </div>
                        </div>
    
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                               
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="+91-9888885364">
                            </div>
                        </div>
                        
                         
                        
                         <div class="col-sm-6 mb-3">
                        <div class="form-group">
                           
                            <select id="form_need" name="subject" id="subject" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Select Your Services--</option>
                                <option >web development</option>
                                <option >Search Engine Optimization</option>
                                <option >Google Adwords</option>
                                <option >Marketing Via SMS</option>
                                 <option >Whatsapp Marketing</option>
                                <option >Marketing Via SMS</option>
                                <option >SMO Services</option>
                                <option >Web Designing</option>
                                <option >Other</option>
                            </select>
                                
                                
                            </div>
                        </div>
    
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                
                                <input type="tel" class="form-control" id="experience" name="your" placeholder="Experience">
                            </div>
                        </div>
    
    
    
    <!--<label class="col-sm-6 block mb-4">-->
    <!--                <span class="sr-only">Choose File</span>-->
    <!--                <input type="file" name="image"-->
    <!--                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />-->
    <!--                @error('image')-->
    <!--                <span class="text-red-600 text-sm">{{ $message }}</span>-->
    <!--                @enderror-->
    <!--            </label>-->
                        
                        
                        
    
                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                              
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Describe Yourself  Here......"></textarea>
                            </div>
                        </div>
    
                        <div class="col-sm-12 mb-3">
                            <button type="submit" name="submit" class="btn btn-primary">Subbmit</button>
                        </div>
    
                    </div>
                </form>
            </div>
            <!-- End Contact Form Wrapper -->
    
        </div>
    </div>
</div>




















@endsection