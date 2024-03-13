<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slug;
use App\Models\Type;
use App\Models\Division;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\City;
use App\Models\State;
use App\Models\visual;
use DB;
use Validator;
use App\Models\ProductOrder;
use App\Models\Mr;
use App\Models\Enquiry;
use Illuminate\Support\Facades\App;
class PublicPages extends Controller
{

    public function loactionkeywords($location , $keywords){
        
        //$location= Category::where('slug',$location)->first();
        
        $location_data= City::whereRaw('LOWER(`name`) LIKE ? ',[''.trim(strtolower($location)).''])->first(); 
        if(empty($location_data))
        { 
            $location_data = State::whereRaw('LOWER(`name`) LIKE ? ',[''.trim(strtolower($location)).''])->first();
        }
        $location = $location_data;
         
        
        $keywrds= Category::where('slug',$keywords)->first();
        $slugsearch=Slug::where('slug',$keywords)->first();        
        
        $category= Category::whereIn('status',[3,5])->orderBy('id','ASC')->get();
        $categories= Category::where('status',2)->get();
        $product = Product::where('status',1)
        ->join('category_products','category_products.product_id','=','products.id');
        
        //if(!empty($location)) {
        //$product = $product->where('category_products.category_id',$location->id);
        //}
       
        $locid = 0;
        if(!empty($location)) {
            $locid = $location->id;
        }


        if(!empty($keywrds)) {
        $product = $product->where('category_products.category_id',$keywords->id);
        }

        if(!empty($slugsearch)) {
            return $this->index($slugsearch->slug,$locid);
        } else {
            $slugsearch=Slug::where('slug','LIKE',"%{$keywords}%")->first();
            if(!empty($slugsearch)) {
                    return $this->index($slugsearch->slug,$locid);
            } else {
                return redirect('/');
            }
        }
       
       
       $product = $product->get();
       
       return view('PublicPages.loactionkeywords')
       ->with('location',$location)
       ->with('keywords',$keywrds)
       ->with('category',$category)
       ->with('product',$product)
       ->with('categories',$categories);
    }
     public function search(){
        $simple_text= $_GET['query'];
        if($simple_text){
        $products['products']=DB::table('products')->where('name','LIKE','%'. $simple_text.'%')->paginate(15);
         
        return view('search',$products)->with('vis',DB::table('visuals')->get());
        }else{
            return redirect('/');
        }
     }
    
    public function index($data='Home',$locid=0){
        $slug=Slug::where('slug',$data)
            ->first();
        if(empty($slug)) {
            $slug=Slug::where('slug','LIKE',"%{$data}%")->first();
        }
        //dd($locid);
        //dd($slug);
               
        if($slug != NULL){
            if($slug->type==1){
                //product
                $product=Product::where('slug',$slug->slug)
                    ->where('id',$slug->slugid)
                    ->where('status',1)
                    ->first();
                if($product != NULL){
                    $products=Product::where('id','!=',$slug->slugid)
                        ->where('status',1)
                        ->get();
                        $city = null;
                        //dd($locid);
                        if($locid > 0) {
                          $city=City::where('active',1)->where('id',$locid)->first();
                            if(empty($city))
                            {
                                $city = State::where('id',$locid)->first();
                            }
                        }        
                    return view('PublicPages.product')
                        ->with('product',$product)
                        ->with('city',$city)
                        ->with('products',$products);
                }
                //return abort(404);
                return redirect('/');
            }
            elseif($slug->type==2){
                //blog
                $blog=Blog::where('slug',$data)
                    ->where('id',$slug->slugid)
                    ->where('status',1)
                    ->first();
                //dd($blog);
                if($blog != NULL){
                    return view('PublicPages.blogdetails')
                        ->with('blog',$blog);
                }
                //return abort(404);
                return redirect('/');
            }
            elseif($slug->type==3){
                //page
 
                $page=Page::where('slug',$data)
                    ->where('id',$slug->slugid)
                    ->where('status',1)
                    ->first();

                if($page != NULL){
                    return view('PublicPages.page')
                        ->with('page',$page);
                }
                //return abort(404);
                 return redirect('/');
            }
            elseif($slug->type==4){
                //category
                $category=Category::where('slug',$data)
                    ->where('id',$slug->slugid)
                    ->whereIn('status',[1,2,3,4,5])
                    ->first();
                    
                if($category != NULL){
                    
                    if($category->type == 1){

                        $products=Product::whereHas('categories',function($q) use($category){
                                $q->where('category_id',$category->id);
                            })
                            ->where('status',1)
                            ->get();
                         
                        
                          $location=Category::whereIn('status',[3,5])->orderBy('id','ASC')->get();

                        $city = null;
                        if($locid > 0) {
                          $city=City::where('active',1)->where('id',$locid)->first();
                          if(empty($city))
                            {
                                $city = State::where('id',$locid)->first();
                            }
                        }

                          
                         
                        return view('PublicPages.category')
                            ->with('category',$category)
                            ->with('products',$products)
                            ->with('location',$location)
                            ->with('city',$city)
                            ->with('categories',Category::where('status',2)->where('type',1)->orderBy('id','ASC')->get());
                    }
                    elseif($category->type == 2){
                        $blogs=Blog::whereHas('categories',function($q) use($category){
                            $q->where('category_id',$category->id);
                        })
                        ->where('status',1)
                        ->paginate(15);

                        return view('PublicPages.blogs')
                            ->with('category',$category)
                            ->with('blogs',$blogs)
                            ->with('categories',Category::where('status',1)->where('type',2)->get());
                    }
                }
                //return abort(404);
                return redirect('/');
            }
           
        }
        if($data == "contact-us"){
            return view('PublicPages.contactus');
        }

        //return abort(404);
        return redirect('/');
    }
}
