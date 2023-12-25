@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Sản Phẩm 
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
                                @foreach ($edit_product as $key =>$pro)
                                <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã Sản Phẩm</label>
                                    <input type="text" value="{{ $pro->product_id}}" name="category_product_id" class="form-control" id="exampleInputEmail1" disabled="disabled">
                                </div>     
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá Sản Phẩm</label>
                                    <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_price}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh Sản Phẩm</label>
                                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                                    <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Sản Phẩm</label>
                                    <textarea style="resize:none" rows="5" class="form-control" name="product_desc" id="exampleInputPassword1" value="{{ $pro->product_desc}}">{{ $pro->product_desc}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội Dung Sản Phẩm</label>
                                    <textarea style="resize:none" rows="5" class="form-control" name="product_content" id="exampleInputPassword1" value="{{ $pro->product_content}}">{{ $pro->product_content}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Danh Mục Sản Phẩm</label>
                                    <select name="product_cate" id="" class="form-control input-sm m-bot15">
                                      @foreach($cate_product as $key =>$cate)  
                                        @if($cate->category_id == $pro -> category_id)
                                        <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @else
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @endif
                                        @endforeach
                                     
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Thương Hiệu</label>
                                    <select name="product_brand" id="" class="form-control input-sm m-bot15">
                                    @foreach($brand_product as $key =>$brand)  
                                        @if($brand->brand_id == $pro -> brand_id)
                                        <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                        @else
                                        <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                        @endif
                                        @endforeach
                                     
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Hiển Thị</label>
                                    <select name="product_status" id="" class="form-control input-sm m-bot15">
                                    <option value="0">Hiển Thị</option>
                                    <option value="1">Ẩn </option>
                                     
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Phân Loại </label>
                                    <select name="product_hot" id="" class="form-control input-sm m-bot15">
                                        <option value="0">Hot </option>
                                        <option value="1">Nổi Bật</option>
                                        <option value="2">Thường</option>
                                        <option value="3">Sale</option>
                                     
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phần Trăm Giảm Giá Sản Phẩm</label>
                                    <input type="text" name="product_pricesale" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_pricesale}}">
                                </div>
                                
                                <button type="submit"name="add_product" class="btn btn-info">Cập Nhật Sản Phẩm </button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>
@endsection        