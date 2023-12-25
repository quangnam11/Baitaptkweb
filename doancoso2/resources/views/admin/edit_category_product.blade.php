@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Danh Mục Sản Phẩm
                        </header>
                        <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert" style="color: red; font-size: 17px;width: 100%;text-align: center;font-weight: bold;">'. $message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">
                            @foreach($edit_category_product as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã Danh Mục</label>
                                    <input type="text" value="{{ $edit_value->category_id}}" name="category_product_id" class="form-control" id="exampleInputEmail1" disabled="disabled">
                                </div>    
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input type="text" value="{{ $edit_value->category_name}}" name="category_product_name" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh Danh Mục</label>
                                    <input type="file" name="category_image" class="form-control" id="exampleInputEmail1">
                                    <img src="{{URL::to('public/uploads/category/'.$edit_value->category_image)}}" height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                                    <textarea style="resize:none" value="{{ $edit_value->category_desc}}" rows="5" class="form-control" name="category_product_desc" id="exampleInputPassword1">
                                    {{ $edit_value->category_desc}}
                                    </textarea>
                                </div>
                                
                                
                                <button type="submit"name="update_category_product" class="btn btn-info">Cập Nhật Danh Mục </button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
            
        </div>
@endsection        