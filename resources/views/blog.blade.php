@extends('layouts.app')
@section('meta_title','Blogs | Rednirus Digital Media')
@section('meta_keywords','')
@section('meta_description','Here you will know about the latest market updates in digital marketing and development field. Checkout our blogs post to know more.')
@section('content')

<div class="rs-breadcrumbs img3">
   <div class="breadcrumbs-inner text-center">
      <h1 class="page-title">Blogs</h1>
      <ul>
         <li title="SEO Services">
            <a class="active" href="/">Home</a>
         </li>
       
         <li>Blogs</li>
      </ul>
   </div>
   <p></p>
</div>


<a href="/blog"></a>

<div class="blog blog-page">
<div class="container">
    <div class="container">
    <div class="col-lg-12">
<div class="row">
  <?php $blog  = DB::table('blogs')->orderby('updated_at','DESC')->get(); ?>  
    @foreach($blog as $b)
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-blog">
<div class="part-text">
<h3><a href="/{{$b->slug}}">{{$b->name}}</a></h3>
</div>

<div class="part-img"><a href="/{{$b->slug}}"><img alt="" src="/public/images/blog/{{$b->image}}" /></a></div>
</div>
</div>


@endforeach


</div>
</div>
</div></div>



@endsection
