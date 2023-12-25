<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/public/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/frontend/css/index.css')}}">
	<link rel="stylesheet" href="{{asset('/public/frontend/css/product.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css')}}" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="{{asset('/public/frontend/assets/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/frontend/assets/owlcarousel/assets/owl.theme.default.min.css')}}">
	<script src="{{asset('/public/frontend/assets/vendors/jquery.min.js')}}"></script>
    <script src="{{asset('/public/frontend/assets/owlcarousel/owl.carousel.js')}}"></script>
	<link href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">

	
	<style>
		.owl-carousel .owl-item img {
  			width: 75px;
			height: 75px; 
			clip-path: circle(50%);
			
		}
		.category-icon img {
  			transition: 0.5s ease ;
		}
		.category-icon:hover img {
			width: 80px;
			height: 80px;
			transform: rotate(45deg);
		}

	</style>
</head>

<body>
    <section class="myheader">
        <div class="container">
            <div class="row header">
                <div class="col-md-3 py-0 ">
                    <img src="{{URL::to('public/frontend/image/logoxoaphonghoanthien.png')}}" class="img-fluid logo" alt="logo" style="width: 300px; height: 230px ">
                </div>
                <div class="col-md-3 py-xl-5 m-4">
                    <div class="input-group mb-3 seach">
                        <input type="text" class="form-control border-danger border-2" placeholder="Từ khóa tìm kiếm " aria-label="Từ khóa tìm kiếm" aria-describedby="basic-addon2">
                        <span class="input-group-text border-danger border-2 " id="basic-addon2">
                            <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #ff4d00;display: var(--fa-display,inline-block);"></i>
                        </span>
                      </div>
                </div>
                <div class="col-md-3 py-4 ">
                    <div class="row ">
                        <div class="col information">
                            <div class="row ">
                                <div class="col-3 py-2 ">
                                    <i class="fa-solid fa-phone fa-xl fs-3" style="color: #ff6600;display: var(--fa-display,inline-block);"></i>
                                </div>
                                <div class="col-9">
                                    Tư vấn hỗ trợ <br>
                                    <strong><a class="fone" href="tel:0358137896"  >0358137896</a> </strong>
                                </div>
                            </div>
                        </div>
                        <div class="col information">
                            <div class="row">
                                <div class="col-3 py-2">
                                    <i class="fa-regular fa-user fa-xl fs-3" style="color: #ff5900;"></i>
                                </div>
                                <div class="col-9">
                                    Xin chào!<br>
                                    <strong>Đăng nhập</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 notification">
            
                    <a href="button" class="btn position-relative m">
                        <span class="fs-4"><i class="fa-regular fa-heart fa-lg" style="color: #f96706;"></i></span>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                          99+
                          <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                    <a href="button" class="btn position-relative m">
                        <span class="fs-4"><i class="fa-solid fa-bag-shopping fa-lg" style="color: #f96706;    display: var(--fa-display,inline-block);"></i></span>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                          99+
                          <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                    <a href="button" class="btn position-relative m">
                        <span class="fs-4"><i class="fa-regular fa-bell fa-lg" style="color: #f96706;"></i></span>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                          99+
                          <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- MyHeader -->
    <section class="mymainmenu navbar1">
        <div class="container ">
            <div class="row ">
                <div class="col-md-3">
					
                    <div class="row " id="mainmenu" style="display: flex;flex-wrap: nowrap;margin-left: -30px;">
						<li style="position: relative; list-style: none;margin-left: -74px;" class="categorylist">
							<span class="fs-1 l"><i class="fa-solid fa-bars-staggered" ></i></span>
                        	<span class="list l">Danh Mục Sản Phẩm</span>
							<ul class="sub-menu" style="position: absolute;background-color:red;padding: 3px;list-style: none;width: 200px;z-index: 1;" >
								@foreach($category as $key => $cate)
								<li><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}" style="display:block; padding: 18px 20px;text-decoration:none;padding: 8px 15px;border-bottom:1px solid #434343;">{{$cate->category_name}}</a></li>
								@endforeach
							</ul>
						</li>
                    </div>
                </div>
                <div class="col-md-9 ">
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid">
                          
                          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav s">
                              <a class="nav-link active " aria-current="page" href="{{URL::to('/trang-chu')}}"><div class="a">Trang chủ</div></a>
							  <a class="nav-link active " aria-current="page" href="#">Sản Phẩm</a>
                              <a class="nav-link active " aria-current="page" href="#">Liên Hệ</a>
                              <a class="nav-link active " aria-current="page" href="#">Khuyến Mãi</a>
                              <a class="nav-link active " aria-current="page" href="#">Thanh Toán</a>
                            </div>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </div>

    </section>
    @yield('content')
	
    <section class="myfooter bg-dark text-white py-4">
        <div class="container">
            <div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<h4 class="title-menu">
						<span>
							Văn phòng giao dịch 
						</span>
					</h4>
					<ul class="list-menu">
						<li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>
						<li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
						<li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>
						<li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>
						<li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>
						<li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>
						<li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<h4 class="title-menu">
						<span>
							Về chúng tôi 
						</span>
					</h4>
					<ul class="list-menu">
						<li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>
						<li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
						<li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>
						<li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>
						<li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>
						<li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>
						<li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<h4 class="title-menu">
						<span>
							Chính sách bán hàng 
						</span>
					</h4>
					<ul class="list-menu">
						<li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>
						<li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
						<li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>
						<li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>
						<li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>
						<li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>
						<li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<h4 class="title-menu">
						<span>
							Theo dõi chúng tôi 
						</span>
					</h4>
					<ul class="list-menu">
						<li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>
						<li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
						<li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>
						<li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>
						<li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>
						<li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>
						<li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
						
					</ul>
				</div>
			</div>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-12">
					<h4 class="title-menu">
						<span>
							Thiên đường mua sắm Boy Phố
						</span>
					</h4>
					<ul>
						<li>Copyright@ 2024 Công ty cổ phần thương mại Dolce & Gabbana</li>
						<li>Chứng nhận ĐKKD số: 0388282938 do sở KH &amp; ĐT TP.Vinh cấp</li>
						<li>Địa chỉ: 66B,Nguyễn Sỹ Sách, Phường Tân Bình, Nghệ An</li>
						<li>Điện thoại: <a class="fone" href="tel:0358137896">0358137896</a> 
							- Email: <a href="mailto:qnam051@gmail.com">qnam051@gmail.com</a></li>
					</ul>
				</div>
                <div class="col-lg-6 col-12">
					<h4 class="title-menu">
						<span>
							Nhận tin khuyến mãi
						</span>
					</h4>
					<div class="mail_footer subscribe">
						<form id="mc-form" class="newsletter-form" data-toggle="validator" novalidate="true">
							<div class="input-group">
								<div class="groupiput">
									<input aria-label="Địa chỉ Email" type="email" class="form-control" placeholder="Nhập email của bạn" name="EMAIL" required="" autocomplete="off">
								</div>
								<span class="input-group-append subscribe">
									<button class="btn btn-outline-danger" type="submit" aria-label="Đăng ký" name="subscribe">Đăng ký</button>
								</span>
							</div>
						</form>
						<div class="mailchimp-alerts">
							<div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
							<div class="mailchimp-success"></div><!-- mailchimp-success end -->
							<div class="mailchimp-error"></div><!-- mailchimp-error end -->
						</div>
					</div>
					
					<script>
						$('#mc-form').ajaxChimp({
							language: 'en',
							callback: mailChimpResponse,
							url: '//gmail.us2.list-manage.com/subscribe/post?u=ef7f65e3be67e30ff1c4bd591&id=a7430e9bc5'
						});
						function mailChimpResponse(resp) {
							if (resp.result === 'success') {
								if(resp.msg == 'Thank you for subscribing!'){
									$('.mailchimp-success').html('Cảm ơn bạn đã đăng ký!').fadeIn(900);
								}else{
									$('.mailchimp-success').html('' + resp.msg).fadeIn(900);
								}
								$('.mailchimp-error').fadeOut(100);
							} else if (resp.result === 'error') {
								if(resp.msg == '0 - Please enter a value'){
									$('.mailchimp-error').html('Vui lòng nhập email').fadeIn(900);
								}else if(resp.msg == '0 - An email address must contain a single @'){
									$('.mailchimp-error').html('Địa chỉ email phải chứa ký tự @').fadeIn(900);
								}else if(resp.msg == 'This email cannot be added to this list. Please enter a different email address.'){
									$('.mailchimp-error').html('Email này không thể được thêm vào danh sách này. Vui lòng nhập một địa chỉ email khác.').fadeIn(900);
								}else if(resp.msg.includes('0 - The domain portion of the email address is invalid')){
									$('.mailchimp-error').html('Phần tên miền của địa chỉ email không hợp lệ').fadeIn(900);
								}else if(resp.msg.includes('0 - The username portion of the email address is empty')){
									$('.mailchimp-error').html('Phần tên người dùng của địa chỉ email trống').fadeIn(900);
								}else if(resp.msg == 'Thank you for subscribing!'){
									$('.mailchimp-error').html('Cảm ơn bạn đã đăng ký!').fadeIn(900);
									$('.mailchimp-error').fadeOut(4000);
								}else{
									$('.mailchimp-error').html('' + resp.msg).fadeIn(900);
								}
								$('.mailchimp-error').fadeOut(4000);
							}
						}
					</script>
					<div class="social-footer">
						<div class="social-buttons">
							
							<a href="https://www.facebook.com/profile.php?id=100060399877740&mibextid=ZbWKwL" class="social-button facebook bg-primary" title="Theo dõi trên Facebook" ><i class="fa-brands fa-facebook-f" style="color: #fafafa;"></i></a>
							
							
							<a href="https://www.tiktok.com/@quangcutedeptrai204?_t=8iCBbraT9l4&_r=1" class="social-button tiktok bg-black" title="Theo dõi trên Tiktok"><i class="fa-brands fa-tiktok" style="color: #ffffff;"></i></a>
							
							
							<a href="https://google.com.vn" class="social-button google bg-white" title="Theo dõi trên Google"><i class="fa-brands fa-google" style="color: #005eff;"></i></i></a>
							
							
							<a href="https://www.youtube.com/" class="social-button youtube bg-white" title="Theo dõi trên Youtube"><i class="fa-brands fa-youtube" style="color: #fd0808;"></i></a>
							
						</div>
					</div>
				</div>
            </div>
            <hr>
            <div class="row"></div>
        </div>
    </section>
    
    <script src="{{asset('/public/frontend/js/bootstrap.bundle.min.js')}}"></script> 
	<script src="{{asset('/public/frontend/js/index.js')}}"></script>
	
	<script>
		$(document).ready(function() {
		  $('.owl-carousel').owlCarousel({
			loop: true,
			
			nav:false,
			dots:false,
			responsiveClass: true,
			responsive: {
			  0: {
				items: 4,
				
			  },
			  600: {
				items: 6,
				
			  },
			  1000: {
				items: 8,
				
				loop: false,
				
			  }
			}
		  })
		})
	  </script>
	  

</body>
</html>