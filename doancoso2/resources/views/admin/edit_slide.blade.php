@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Quảng Cáo 
                        </header>
                        <div class="panel-body">
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert" style="color: red; font-size: 17px;width: 100%;text-align: center;font-weight: bold;">'. $message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                            <div class="position-center">
                                @foreach ($edit_slide as $key =>$pro)
                                <form role="form" action="{{URL::to('/update-slide/'.$pro->slide_id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã Quảng Cáo</label>
                                    <input type="text" value="{{ $pro->slide_id}}" name="slide_id" class="form-control" id="exampleInputEmail1" disabled="disabled">
                                </div>     
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Quảng Cáo</label>
                                    <input type="text" name="slide_name" class="form-control" id="exampleInputEmail1" value="{{ $pro->slide_name}}">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh Quảng Cáo</label>
                                    <input type="file" name="slide_image" class="form-control" id="exampleInputEmail1">
                                    <img src="{{URL::to('public/uploads/slide/'.$pro->slide_image)}}" height="100" width="100">
                                </div>
                                
                                
                                
                                <div class="form-group">
                                <label for="exampleInputPassword1">Hiển Thị</label>
                                    <select name="slide_status" id="" class="form-control input-sm m-bot15">
                                    <option value="0">Hiển Thị</option>
                                    <option value="1">Ẩn </option>
                                     
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Phân Loại </label>
                                    <select name="slide_class" id="" class="form-control input-sm m-bot15">
                                        <option value="0">Slider </option>
                                        <option value="1">Button Khuyến Mãi</option>
                                     
                                    </select>
                                </div>
                                
                                
                                <button type="submit"name="add_slide" class="btn btn-info">Cập Nhật Quảng Cáo </button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>
@endsection        