<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Models\Page;
use App\Models\Slug;

class SitemapController extends Controller
{
    //
    public function index()
    {
     $categories = Category::where("type","!=",3)->get();
      $products = Product::all();
      $pages = Page::where("status","=",1)->get();
      $slugs = Slug::all();
      $blogs = Blog::all();  
      return response()->view('sitemap.index', [
        'categories' => $categories,
        'products' => $products,
        'pages' => $pages,
          'slugs' => $slugs,
          'blogs'=>$blogs ,
      ])->header('Content-Type', 'text/xml');
   
    }
    
    
      public function keywords(){
        $keywords = Category::whereIn('status',[2,4])->get();
        return response()->view('sitemap.keywords', [
            'keyword' => $keywords,
        ])->header('Content-Type', 'text/xml');
   }
    
    
      public function product($data){
        
        $cat = Category::where('slug',$data)->first();
    
         $product = Product::where('status',1)
             ->join('category_products','category_products.product_id','=','products.id')
             ->where('category_products.category_id',$cat->id)
             ->get();
             
        return response()->view('sitemap.products', [
            'pro' => $product,
            'cat'=>$cat,
        ])->header('Content-Type', 'text/xml');
   }
    
    
     public function kpslug($k , $p ){
         $cat = Category::where(['slug'=>$k])->first();
        $p = Product::where(['status'=>1,'slug'=>$p])->first();
        $c = Category::where('status',3)
        ->join('category_products','category_products.category_id','=','categories.id')
        ->where('category_products.product_id',$p->id)
        ->get();
       
         return response()->view('sitemap.kpslug', [
            'c' => $c,
            'p'=>$p,
            'cat'=>$cat,
        ])->header('Content-Type', 'text/xml');
   }
    
    public function pages()
    {
        $pages = Page::latest()->get();
        return response()->view('sitemap.pages', [
            'pages' => $pages,
        ])->header('Content-Type', 'text/xml');
    }

    public function categories()
    {
        $categories = Category::all();
        return response()->view('sitemap.categories', [
            'categories' => $categories,
        ])->header('Content-Type', 'text/xml');
    }

    public function products()
    {
        $products = Product::latest()->get();
        return response()->view('sitemap.products', [
            'products' => $products,
        ])->header('Content-Type', 'text/xml');
    }

   
}