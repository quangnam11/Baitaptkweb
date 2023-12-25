<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    public function index(){
        $cate_product= DB::table('tbl_category_product')->where('category_status','0')->orderBy('category_id','desc')->get();
        $brand_product= DB::table('tbl_brand')->where('brand_status','0')->orderBy('brand_id','desc')->get();

        $slide_product= DB::table('tbl_slide')->where('slide_status','0')->where('slide_class','0')->orderBy('slide_id','desc')->limit(5)->get();
        $button_product= DB::table('tbl_slide')->where('slide_status','0')->where('slide_class','1')->orderBy('slide_id','desc')->limit(3)->get();
        $button_product1= DB::table('tbl_slide')->where('slide_status','0')->where('slide_class','1')->orderBy('slide_id','asc')->limit(3)->get();

        $all_product_sale= DB::table('tbl_product')->where('product_status','0')->where('product_hot','3')->orderBy('product_id','desc')->limit(10)
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
       ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->orderBy('tbl_product.product_id','desc')->get();
        
       $all_product_hot= DB::table('tbl_product')->where('product_status','0')->where('product_hot','0')->orderBy('product_id','desc')->limit(5)
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
       ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->orderBy('tbl_product.product_id','desc')->get();

       $all_product_hot1= DB::table('tbl_product')->where('product_status','0')->where('product_hot','0')->orderBy('product_id','asc')->limit(5)
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
       ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->orderBy('tbl_product.product_id','desc')->get();

        return view('pages.home')->with('slide',$slide_product)->with('button',$button_product)->with('button1',$button_product1)->with('category',$cate_product)->with('brand',$brand_product)->with('all_product_sale',$all_product_sale)->with('all_product_hot',$all_product_hot)->with('all_product_hot1',$all_product_hot1);
    }
}
