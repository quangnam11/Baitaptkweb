@extends('layout')
@section('content')
<section class="mymaincontent my-3">
		<div class="container">
			<div class="row mb-3">
				<div class="col-md-7">
					<div class="slider">
						<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								@foreach($slide as $key =>$value)
							  <div class="carousel-item active" data-bs-interval="5000">
								<img src="{{URL::to('public/uploads/slide/'.$value->slide_image)}}" class="d-block w-100" alt="...">
							  </div>
							  @endforeach
							  
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev" style="margin-left: 30px;">
							  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							  <span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
							  <span class="carousel-control-next-icon" aria-hidden="true"></span>
							  <span class="visually-hidden">Next</span>
							</button>
						  </div>
					</div>
				</div>
				<div class="col-md-5">
					@foreach($button1 as $key => $but)
					<a  href="ss" class=" safe1">
						<div class="card img-fluid" style="background-image: url({{URL::to('public/uploads/slide/'.$but->slide_image)}}); background-size: 400px 100px; background-repeat: no-repeat;">
							Tới Ngay
						  </div>
					</a>
					@endforeach
					</div>
				
			</div>
			<!-- end slider -->
			<div class="cate-list my-3 mb-3">
				<div class="row">
					<div class="large-12 columns">
						<div class="owl-carousel owl-theme">
							@foreach($category as $key =>$value)
								<div class="item">
									<a class="category-icon" href="{{URL::to('/danh-muc-san-pham/'.$value->category_id)}}">
										<img src="{{URL::to('public/uploads/category/'.$value->category_image)}}" alt="" srcset="" style="border-radius: 50% ; border: 1.5px solid black" >
										<strong>{{$value->category_name}}</strong>
									</a>
									
								</div>
						  	@endforeach
						</div>
					</div>	
						
			  
				  
				</div>
			</div>
			<!-- end cate-list -->
			<div class="promotion-list mb-3 ">
				<div class="row  promotion">
					<a class="col " href="">	
						<img src="{{URL::to('public/frontend/image/logokhuyenmai1.png')}}" alt="" class="promo">
						<h6><strong>Khung giờ săn sale</strong></h6>
					</a>
					<a class="col " href="">
						<img src="{{URL::to('public/frontend/image/logokhuyenmai2.png')}}" alt="" class="promo">
						<h6><strong>Mã giảm giá </strong></h6>
					</a>
					<a class="col " href="">
						<img src="{{URL::to('public/frontend/image/logokhuyenmai3.png')}}" alt="" class="promo">
						<h6><strong>Freeship</strong></h6>
					</a>
					<a class="col " href="">
						<img src="{{URL::to('public/frontend/image/logokhuyenmai4.png')}}" alt="" class="promo">
						<h6><strong>Hàng hiệu giảm sốc</strong></h6>
					</a>
					<a class="col " href="">
						<img src="{{URL::to('public/frontend/image/logokhuyenmai5.png')}}" alt="" class="promo">
						<h6><strong>Mã giảm giá sốc</strong></h6>
					</a>
					<a class="col " href="">
						<img src="{{URL::to('public/frontend/image/logokhuyenmai6.png')}}" alt="" class="promo">
						<h6><strong>Bắt trend-Giá sốc</strong></h6>
					</a>
					<a class="col " href="">
						<img src="{{URL::to('public/frontend/image/logokhuyenmai7.png')}}" alt="" class="promo">
						<h6><strong>Siêu rẻ</strong></h6>
					</a>
				</div>
			</div>
			<!-- end promotion-list -->
			<div class="flashsale">
				<div class="row logoflash">
					<div class="T1a1K4" aria-label="title Flash Sales" tabindex="0" style="background-image: url({{('public/frontend/image/logoflashsale.png')}});"></div>
					<div class="clock1" style="width: 50%;">
						<div class="clock flip-clock-wrapper" style="margin:2em;">
							<span class="flip-clock-divider days">
							</span>
							<ul class="flip">
							  <li class="flip-clock-before">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">9</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">9</div>
								  </div>
								</a>
							  </li>
							  <li class="flip-clock-active">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">0</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">0</div>
								  </div>
								</a>
							  </li>
							</ul>
							<ul class="flip">
							  <li class="flip-clock-before">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">0</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">0</div>
								  </div>
								</a>
							  </li>
							  <li class="flip-clock-active">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">2</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">2</div>
								  </div>
								</a>
							  </li>
							</ul>
							<span class="flip-clock-divider hours">
							</span>
							<ul class="flip">
							  <li class="flip-clock-before">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">0</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">0</div>
								  </div>
								</a>
							  </li>
							  <li class="flip-clock-active">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">1</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">1</div>
								  </div>
								</a>
							  </li>
							</ul>
							<ul class="flip">
							  <li class="flip-clock-before">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">0</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">0</div>
								  </div>
								</a>
							  </li>
							  <li class="flip-clock-active">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">3</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">3</div>
								  </div>
								</a>
							  </li>
							</ul>
							<span class="flip-clock-divider minutes">
							</span>
							<ul class="flip">
							  <li class="flip-clock-before">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">0</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">0</div>
								  </div>
								</a>
							  </li>
							  <li class="flip-clock-active">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">2</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">2</div>
								  </div>
								</a>
							  </li>
							</ul>
							<ul class="flip">
							  <li class="flip-clock-before">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">0</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">0</div>
								  </div>
								</a>
							  </li>
							  <li class="flip-clock-active">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">1</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">1</div>
								  </div>
								</a>
							  </li>
							</ul>
							<span class="flip-clock-divider seconds">
							</span>
							<ul class="flip play">
							  <li class="flip-clock-before">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">1</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">1</div>
								  </div>
								</a>
							  </li>
							  <li class="flip-clock-active">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">0</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">0</div>
								  </div>
								</a>
							  </li>
							</ul>
							<ul class="flip play">
							  <li class="flip-clock-before">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">9</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">9</div>
								  </div>
								</a>
							  </li>
							  <li class="flip-clock-active">
								<a href="#">
								  <div class="up">
									<div class="shadow"></div>
									<div class="inn">8</div>
								  </div>
								  <div class="down">
									<div class="shadow"></div>
									<div class="inn">8</div>
								  </div>
								</a>
							  </li>
							</ul>
						  </div>
						  <div class="message"></div>
					</div>
					
				</div>
				<div class="row categorysale">
					<div class="container">
						<div class="owl-carousel clo">
						@foreach($all_product_sale as $key =>$sale)	
						  <div class="grid__column-21">
								<a class="home-product-item" href="">
									<div class="home-product-item__img"style=" background-image: url({{URL::to('public/uploads/product/'.$sale->product_image)}})" ></div>
									<h4 class="home-product-item__name">{{$sale->product_name}}</h4>
									<div class="home-product-item__price">
										<span class="home-product-item__price-old">{{$sale->product_price}}d</span>
										<span class="home-product-item__price-current">{{$sale->product_price*$sale->product_pricesale/100}}d</span>
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
										<div class="home-product-item__brand">{{$sale->brand_name}}</div>
										<div class="home-product-item__origin-name">han quoc</div>
									</div>
									<div class="home-product-item__favourite favou">
										<i class="fa-solid fa-check"></i>
										<span>
											<?php
												if($sale->product_hot==0){
													echo 'Hot';
												}else if($sale->product_hot==1){
													echo 'Nổi Bật';
												}else if($sale->product_hot==2){
													echo 'Thường';
												}else if($sale->product_hot==3){
													echo 'Sale';
												}
											?>
										</span>
									</div>
									<div class="home-product-item__sale-off ">
										<span class="home-product-item__sale-off-percent">{{$sale->product_pricesale}}%</span>
										<span class="home-product-item__sale-off-label">GIAM</span>
									</div>
								</a>
						  </div>
						  
						@endforeach 
						</div>
					</div>	
				</div>
			</div>
			<!-- end flashsale -->
			<div class="sale-event mb-3 mt-10" >
				<div class="row">
					@foreach($button as $key => $but)
					<div class="col-md-4">
						<a  href="ss" class=" safe1">
							<div class="card img-fluid" style="background-image: url({{URL::to('public/uploads/slide/'.$but->slide_image)}}); background-size: 400px 100px; background-repeat: no-repeat;">
								Tới Ngay
							  </div>
						</a>
					</div>
					@endforeach
					
				</div>
			</div>
			<!-- endsaleevent -->
		</div>
			<div class="hot">
				<h2>HOT TRENDING</h2>
				<div class="space"></div>
				
				<div class="grid__column-10 eae">
					<div class="grid__row">
					@foreach($all_product_hot as $key =>$hot)
						<div class="grid__column-2-4  bg-light hot-category">
							<a class="home-product-item" href="">
								<div class="home-product-item__img" style=" background-image: url({{URL::to('public/uploads/product/'.$hot->product_image)}})"></div>
								<h4 class="home-product-item__name">{{$hot->product_name}}</h4>
								<div class="home-product-item__price">
									<span class="home-product-item__price-old">{{$hot->product_price}}d</span>
									<span class="home-product-item__price-current">{{$hot->product_price*$hot->product_pricesale/100}}d</span>
								</div>
								<div class="home-product-item__sale-off hot-item">
									
									<span class="home-product-item__sale-off-label hot-off">
											<?php
												if($hot->product_hot==0){
													echo 'Hot';
												}else if($hot->product_hot==1){
													echo 'Nổi Bật';
												}else if($hot->product_hot==2){
													echo 'Thường';
												}else if($hot->product_hot==3){
													echo 'Sale';
												}
											?>
									</span>
								</div>
								
								
							</a>
						</div>
						
					@endforeach	
					</div>
					<div class="grid__row">
					@foreach($all_product_hot1 as $key =>$hot1)
						<div class="grid__column-2-4  bg-light hot-category">
							<a class="home-product-item" href="">
								<div class="home-product-item__img" style=" background-image: url({{URL::to('public/uploads/product/'.$hot1->product_image)}})"></div>
								<h4 class="home-product-item__name">{{$hot1->product_name}}</h4>
								<div class="home-product-item__price">
									<span class="home-product-item__price-old">{{$hot1->product_price}}d</span>
									<span class="home-product-item__price-current">{{$hot1->product_price*$hot1->product_pricesale/100}}d</span>
								</div>
								<div class="home-product-item__sale-off hot-item">
									
									<span class="home-product-item__sale-off-label hot-off">
											<?php
												if($hot1->product_hot==0){
													echo 'Hot';
												}else if($hot1->product_hot==1){
													echo 'Nổi Bật';
												}else if($hot1->product_hot==2){
													echo 'Thường';
												}else if($hot1->product_hot==3){
													echo 'Sale';
												}
											?>
									</span>
								</div>
								
								
							</a>
						</div>
						
					@endforeach	
					</div>
				</div>
			</div>
	</section>
@endsection
