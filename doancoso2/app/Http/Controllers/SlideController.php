<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class SlideController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
            }else {
                return Redirect::to('admin')->send();
                }
    }
    public function add_slide(){
        $this->AuthLogin();
        return view('admin.add_slide');
    }
    public function all_slide(){
        $this->AuthLogin();
       $all_slide= DB::table('tbl_slide')->get();
       $manager_slide=view('admin.all_slide')->with('all_slide',$all_slide);
        return view('admin_layout')->with('admin.all_slide',$manager_slide);
    }

    public function save_slide( Request $request){
        $this->AuthLogin();
        $data = array();
        $data['slide_name']=$request->slide_name;
        $data['slide_status']=$request->slide_status;
        $data['slide_class']=$request->slide_class;
        $get_image=$request->file('slide_image');
        if($get_image){
            $get_name_image=$get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/slide',$new_image);
            $data['slide_image']=$new_image;
            DB::table('tbl_slide')->insert($data);
            Session::put('message','Thêm quảng cáo thành công!');
            return Redirect::to('all-slide'); 
        }
        $data['slide_image']='';
        DB::table('tbl_slide')->insert($data);
        Session::put('message','Thêm quảng cáo thành công!');
        return Redirect::to('all-slide');;

    }

    public function unactive_slide($slide_id){
        $this->AuthLogin();
        DB::table('tbl_slide')->where('slide_id',$slide_id)->update(['slide_status'=>1]);
        Session::put('message','Không hiển thị quảng cáo thành công!');
        return Redirect::to('all-slide');
    }
    public function active_slide($slide_id){
        $this->AuthLogin();
        DB::table('tbl_slide')->where('slide_id',$slide_id)->update(['slide_status'=>0]);
        Session::put('message','Hiển thị quảng cáo sản phẩm thành công!');
        return Redirect::to('all-slide');
    }

    public function edit_slide($slide_id){
        $this->AuthLogin();
        $edit_slide= DB::table('tbl_slide')->where('slide_id',$slide_id)->get();
        $manager_slide=view('admin.edit_slide')->with('edit_slide',$edit_slide);
         return view('admin_layout')->with('admin.edit_slide',$manager_slide);
     
    }

    public function update_slide(Request $request,$slide_id){
        $this->AuthLogin();
        $data=array();
        $data['slide_name']=$request->slide_name;
        $data['slide_class']=$request->slide_class;
        $get_image=$request->file('slide_image');

        if($get_image){
            $get_name_image=$get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/slide',$new_image);
            $data['slide_image']=$new_image;
            DB::table('tbl_slide')->where('slide_id',$slide_id)->update($data);
            Session::put('message','Cập nhật quảng cáo thành công!');
            return Redirect::to('all-slide');
        }
        $data['slide_image']='';
        DB::table('tbl_slide') ->where('slide_id',$slide_id) ->update($data);
        Session::put('message','Cập nhật quảng cáo thành công!');
        return Redirect::to('all-slide');

        
    } 
     
    public function delete_slide($slide_id){
        $this->AuthLogin();
        
        DB::table('tbl_slide') ->where('slide_id',$slide_id) ->delete();
        Session::put('message','Xóa quảng cáo thành công!');
        return Redirect::to('all-slide');
    }
}
