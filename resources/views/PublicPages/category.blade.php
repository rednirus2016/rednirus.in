@extends('layouts.app')
@section('meta_title',$category->name)
@section('meta_keywords',$category->name)
@section('meta_description',$category->name)
@section('meta_image')
@if($category->image)
content="{{ Request::root() }}/storage/{{$category->image}}"
@else
content="{{ Request::root() }}/images/logo-2.png"
@endif
@endsection
@section('content')
<div class="rs-breadcrumbs img3">
   <div class="breadcrumbs-inner text-center">
      <h1 class="page-title">{{$category->name}}</h1>
      <ul>
         <li title="{{$category->name}}">
            <a class="active" href="/">Home</a>
         </li>
         <li title="Go To Services">
            <a class="active" href="#"> {{$category->name}}</a>
         </li>
         <li>{{$category->name}}</li>
      </ul>
   </div>
   <p></p>
</div>
<section class=" pb-80">
   <div class="container">
      <div class="row">
         
         <div class="col-sm-12 col-md-12 col-lg-3">
            <div class="sidebar-cat">
               <h4 class="catr">All Categories</h4>
               <div class="list-group">
                  @foreach ($categories as $item)
                  @if($category->id == $item->id)
                  <a href="{{ $item->slug }}" class="active">
                  {{ $item->name }}
                  </a>
                  @else
                  <a href="{{ $item->slug }}" class="">
                  {{ $item->name }}
                  </a>
                  @endif
                  @endforeach
               </div>
            </div>
            <div class="form-groups">
               <h4 class="catr">Enquiry Now</h4>
               <form  class="row" method="post" action="/enquiry/store">
                  @csrf
                  <div id="formmessage"></div>
                  <div class="form-group col-md-12">
                     <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required">
                  </div>
                  <div class="form-group col-md-12">
                     <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required">
                  </div>
                  <div class="form-group col-md-12">
                     <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required="required">
                  </div>
                  <div class="form-group col-md-12">
                     <select name="about" class="form-select form-control">
                        <option>Choose Service</option>
                        <option>Digital Marketing</option>
                        <option>Seo Service</option>
                     </select>
                  </div>
                  <div class="form-group col-md-12">
                     <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="3" required="required"></textarea>
                  </div>
                  <div class="col-md-12 text-center mt-4">
                     <button class="btn btn-theme" type><span>Send Messages</span>
                     </button>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-lg-9 col-md-12">
            <div class="row">
               @if(count($products)>0)
               @foreach($products as $pro)
               <div class="col-lg-4">
                  <div class="content-type">
                     <img src="/{{$pro->image}}">
                     <div class="bcont">
                        <h4><a href="{{$pro->slug}}">{{$pro->name}}</a></h4>
                        <p>{{ Str::limit($pro->composition, 50) }}</p>
                     </div>
                  </div>
               </div>
               @endforeach
               @else
               <h1>No results found..</h1>
               @endif
            </div>
         </div>
         <div class="col-lg-12">
            <div class="description">
               <p> <?php
                  echo html_entity_decode($category->description);
                  ?></p>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection