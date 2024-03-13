<?php

namespace App\Http\Controllers;
use App\Exports\CityExport;
use App\Models\City;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Session;
use DB;


class CitiesController extends Controller
{

    



    public function view(){
        return view('City.view')
            ->with('cities',City::orderby('subadmin1_code','ASC')->paginate(500));

    }



    public function changestatus($cid){
        $city=City::where('id',$cid)
            ->first();
        if($city->active==1){
            City::where('id',$cid)
                ->update([
                    "active" => 0
                ]);
            Session::flash('flash_type','danger');
            Session::flash('flash_message','City Status changed to inactive.');
        }
        else{
            City::where('id',$cid)
                ->update([
                    "active" => 1
                ]);
                Session::flash('flash_type','success');
                Session::flash('flash_message','City Status changed to active.');
        }

        return redirect('/admin/cities/view');
    }




    public function export($st) {
        if($st==1){
            return Excel::download(new CityExport(1), 'cities-collection.xlsx');
        } else {
            return Excel::download(new CityExport(0), 'cities-collection.xlsx');
        }
         
        
    }





    public function search(Request $request){
        $this->validate($request,[
            'cname'=>'required', 
        ]);
        $citys=City::where('name','LIKE',$request->cname.'%')
            ->paginate(20);
        return view('City.view')
            ->with('cities',$citys);
    }
    
    
    
}
