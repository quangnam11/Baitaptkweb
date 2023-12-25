@extends('layout')
@section('content')
    <section class="mycontainer ">
        <div class="app__container ">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category__heading">
                                <i class="fa-solid fa-list-check"></i>
                                <span>Lựa Chọn</span>
                            </h3>
                            <ul class="category-list">
                                <h6>Danh Mục Sản Phẩm</h6>
                                @foreach($category as $key => $cate)
                
                                <li class="category-item category-item--active">
                                    <a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}" class="category-item__link">
                                        <i class="fa-solid fa-caret-right carets"></i>
                                        {{$cate-> category_name}}</a>
                                </li>
                                @endforeach
                            </ul>
                            <ul class="category-list">
                                <h6>Thương Hiệu Sản Phẩm</h6>
                                @foreach($brand as $key => $a)
                                <li class="category-item category-item--active">
                                    <a href="{{URL::to('/thuong-hieu-san-pham/'.$a->brand_id)}}" class="category-item__link">
                                        <i class="fa-solid fa-caret-right carets"></i>
                                        <span>{{$a->brand_name}}</span></a>
                                </li>
                                @endforeach
                            </ul>
                            <ul class="category-list">
                                <h6>Dạng Sản Phẩm</h6>
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item__link">
                                        <i class="fa-solid fa-caret-right carets"></i>
                                        <span>nổi bật</span></a>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item__link">
                                        <i class="fa-solid fa-caret-right carets"></i>
                                        <span>hot</span></a>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item__link">
                                        <i class="fa-solid fa-caret-right carets"></i>
                                        <span>thường</span></a>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item__link">
                                        <i class="fa-solid fa-caret-right carets"></i>
                                        <span>sale</span></a>
                                </li>
                                
                            </ul>
                            <ul class="category-list">
                                <h6>Giá Sản Phẩm</h6>
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item__link">
                                        <i class="fa-solid fa-caret-right carets"></i>
                                        <span>Thấp -> Cao</span></a>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item__link">
                                        <i class="fa-solid fa-caret-right carets"></i>
                                        Cao -> Thấp</a>
                                </li>
                        
                            </ul>
                        </nav>
                    </div>
                    <div class="grid__column-10">
                        <div class="home-product">
                            <div class="grid__row">
                                @foreach($category_by_id as $key=> $cate)
                                <div class="grid__column-2-4 catego">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img"style=" background-image: url({{URL::to('public/uploads/product/'.$cate->product_image)}});" ></div>
                                        <h4 class="home-product-item__name">{{$cate->product_name}}</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">{{$cate->product_price}}d</span>
                                            <span class="home-product-item__price-current">{{$cate->product_price*$cate->product_pricesale/100}}</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like">
                                                <label class="like">
                                                    <input type="checkbox">
                                                    <span class="material-icons heart">favorite</span>
                                                    <div class="ripple"></div>
                                                    </label>
                                                <!-- <i class="fa-solid fa-heart"></i> -->
                                            </span>
                                            <div class="home-product-item__rating">
                                                
    
    
                                                <section class='o-container'>
                                                
                                                    <!-- Rating Stars Box -->
                                                    <ul id='js-rating-star' class="c-rating-star u-text-center" data-name="test">
                                                    <li class='c-rating-star__item' title='Poor' data-value='1'>
                                                        <i class='fa fa-star fa-fw c-rating-star__icon'></i>
                                                    </li>
                                                    <li class='c-rating-star__item' title='Fair' data-value='2'>
                                                        <i class='fa fa-star fa-fw c-rating-star__icon'></i>
                                                    </li>
                                                    <li class='c-rating-star__item' title='Good' data-value='3'>
                                                        <i class='fa fa-star fa-fw c-rating-star__icon'></i>
                                                    </li>
                                                    <li class='c-rating-star__item' title='Excellent' data-value='4'>
                                                        <i class='fa fa-star fa-fw c-rating-star__icon'></i>
                                                    </li>
                                                    <li class='c-rating-star__item' title='WOW!!!' data-value='5'>
                                                        <i class='fa fa-star fa-fw c-rating-star__icon'></i>
                                                    </li>
                                                    </ul>
                                                    
                                                
                                                    
                                                    
                                                    
                                                </section>
                                            </div>
    
                                        </div>
                                        <div class="home-product-item__origin">
                                            <div class="home-product-item__brand">{{$cate->brand_name}}</div>
                                            <div class="home-product-item__origin-name">han quoc</div>
                                        </div>
                                        <div class="home-product-item__favourite favou">
                                            <i class="fa-solid fa-check" style="display: var(--fa-display,inline-block);"></i>
                                            <span>
                                            <?php
												if($cate->product_hot==0){
													echo 'Hot';
												}else if($cate->product_hot==1){
													echo 'Nổi Bật';
												}else if($cate->product_hot==2){
													echo 'Thường';
												}else if($cate->product_hot==3){
													echo 'Sale';
												}
											?>
                                            </span>
                                        </div>
                                        <div class="home-product-item__sale-off ">
                                            <span class="home-product-item__sale-off-percent">{{$cate->product_pricesale}}%</span>
                                            <span class="home-product-item__sale-off-label">GIAM</span>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
    @endsection