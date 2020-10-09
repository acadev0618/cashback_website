@extends('layout.app')
@section('header',"product")
	<link href="{{asset('assets/global/plugins/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet">
  	<link href="{{asset('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
  	<link href="{{asset('assets/global/plugins/slider-layer-slider/css/layerslider.css')}}" rel="stylesheet">
@section('content')
<div class="container">
	<div class="rounded -ml-1 -mr-1">
	    <div class="-mx-2 flexboxgrid2__container-fluid___XKLhm">
	        <div class="flexboxgrid2__row___ZtOZv">
	            <div data-id-title="" class="flexboxgrid2__col-xs-12___AdoKE flexboxgrid2__col-md-12___2t4Kh flexboxgrid2__col-lg-12___p4dm-"><div class="shadow my-1 -mx-1" data-id-title="" data-impression-event="Web.Impression.Content" data-ui-element-type="banner.single" data-ui-element-id="5f43835eb9a50750205828e0" data-content-type="banner" data-content-name="" data-content-id="207" data-content-position="1">
	                <picture class="flex-auto">
	                    <img class="w-full h-auto lazyloaded" data-src="https://img.shopback.com.au/NHcJAtHFj9k/rs:fit/w:1000/h:0/g:ce/el:1/q:75/bl:0/aHR0cHM6Ly9zaG9waWx5LWF1LnMzLmFtYXpvbmF3cy5jb20vdXBsb2Fkcy9iYW5uZXJzLzYxMDEvZmFzaGlvbi1wcm9tb193ZGd0X2R0X2NkNDFjNTA2LnBuZw.jpg" alt="Fashion" sizes="(min-width: 1280px) 1120px, (max-width: 1280px) and (min-width: 768px) 720px, 92vw" src="https://img.shopback.com.au/NHcJAtHFj9k/rs:fit/w:1000/h:0/g:ce/el:1/q:75/bl:0/aHR0cHM6Ly9zaG9waWx5LWF1LnMzLmFtYXpvbmF3cy5jb20vdXBsb2Fkcy9iYW5uZXJzLzYxMDEvZmFzaGlvbi1wcm9tb193ZGd0X2R0X2NkNDFjNTA2LnBuZw.jpg">
	                </picture>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
        <div class="col-md-12 sale-product" style="margin-top: 20px;">
            <h2>Women's Fashion</h2>
            <div class="owl-carousel owl-carousel5">
	            <div>
	                <div class="product-item">
	                  	<div class="pi-img-wrapper">
	                    	<img src="{{asset('assets/frontend/pages/img/products/model1.jpg')}}" class="img-responsive" alt="Amazon">
	                    	<div>
	                      		<a href="{{asset('assets/frontend/pages/img/products/model1.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
	                      		<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
	                    	</div>
	                  	</div>
	                  	<h3><a href="shop-item.html">Amazon</a></h3>
	                  	<div class="pi-price">8% </div>
	                  	<a href="javascript:;" class="btn btn-default add2cart">Shop now</a>
	                </div>
	            </div>
              	<div>
	                <div class="product-item">
	                  	<div class="pi-img-wrapper">
	                    	<img src="{{asset('assets/frontend/pages/img/products/model2.jpg')}}" class="img-responsive" alt="Amazon">
		                    <div>
		                      	<a href="{{asset('assets/frontend/pages/img/products/model2.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
		                      	<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
		                    </div>
		                 </div>
	                 	<h3><a href="shop-item.html">eBay</a></h3>
	                  	<div class="pi-price">5% </div>
	                  	<a href="javascript:;" class="btn btn-default add2cart">Shop now</a>
	                </div>
              	</div>
	            <div>
	                <div class="product-item">
	                  	<div class="pi-img-wrapper">
	                    	<img src="{{asset('assets/frontend/pages/img/products/model6.jpg')}}" class="img-responsive" alt="Amazon">
	                    	<div>
	                      		<a href="{{asset('assets/frontend/pages/img/products/model6.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
	                      		<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
	                    	</div>
	                  	</div>
	                  	<h3><a href="shop-item.html">Alibaba</a></h3>
	                  	<div class="pi-price">3% </div>
	                  	<a href="javascript:;" class="btn btn-default add2cart">Shop now</a>
	                </div>
	            </div>
	            <div>
	                <div class="product-item">
	                    <div class="pi-img-wrapper">
	                      	<img src="{{asset('assets/frontend/pages/img/products/model4.jpg')}}" class="img-responsive" alt="Amazon">
	                      	<div>
	                        	<a href="{{asset('assets/frontend/pages/img/products/model4.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
	                        	<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
	                      	</div>
	                    </div>
	                    <h3><a href="javascript:;">Booking</a></h3>
	                    <div class="pi-price">9% </div>
	                    <a href="javascript:;" class="btn btn-default add2cart">Shop now</a>
	                    <div class="sticker sticker-new"></div>
	                </div>
	            </div>
	            <div>
	                <div class="product-item">
	                  	<div class="pi-img-wrapper">
	                    	<img src="{{asset('assets/frontend/pages/img/products/model5.jpg')}}" class="img-responsive" alt="Amazon">
		                    <div>
		                      	<a href="{{asset('assets/frontend/pages/img/products/model5.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
		                      	<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
		                    </div>
	                  	</div>
	                  	<h3><a href="shop-item.html">Ionic</a></h3>
	                  	<div class="pi-price">10% </div>
	                  	<a href="javascript:;" class="btn btn-default add2cart">Shop now</a>
	                </div>
	            </div>
	            <div>
	                <div class="product-item">
	                  	<div class="pi-img-wrapper">
	                    	<img src="{{asset('assets/frontend/pages/img/products/model3.jpg')}}" class="img-responsive" alt="Amazon">
	                    	<div>
	                      		<a href="{{asset('assets/frontend/pages/img/products/model3.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
	                      		<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
	                    	</div>
	                  	</div>
	                  	<h3><a href="shop-item.html">Taobao</a></h3>
	                  	<div class="pi-price">8% </div>
	                  	<a href="javascript:;" class="btn btn-default add2cart">Shop now</a>
	                </div>
	            </div>
	            <div>
	                <div class="product-item">
	                  	<div class="pi-img-wrapper">
	                    	<img src="{{asset('assets/frontend/pages/img/products/model7.jpg')}}" class="img-responsive" alt="Amazon">
                    		<div>
	                      		<a href="{{asset('assets/frontend/pages/img/products/model7.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
	                      		<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
	                    	</div>
	                  	</div>
	                  	<h3><a href="shop-item.html">Amazon3</a></h3>
	                  	<div class="pi-price">8% </div>
	                  	<a href="javascript:;" class="btn btn-default add2cart">Shop now</a>
	                </div>
	            </div>
            </div>
        </div>
        <div class="col-md-12 sale-product" style="margin-top: 20px;">
            <h2>Men's Fashion</h2>
            <div class="owl-carousel owl-carousel5">
	            <div>
	                <div class="product-item">
	                  	<div class="pi-img-wrapper">
	                    	<img src="{{asset('assets/frontend/pages/img/products/model4.jpg')}}" class="img-responsive" alt="Amazon">
	                    	<div>
	                      		<a href="{{asset('assets/frontend/pages/img/products/model1.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
	                      		<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
	                    	</div>
	                  	</div>
	                  	<h3><a href="shop-item.html">Amazon</a></h3>
	                  	<div class="pi-price">8% </div>
	                  	<a href="javascript:;" class="btn btn-default add2cart">Shop now</a>
	                </div>
	            </div>
              	<div>
	                <div class="product-item">
	                  	<div class="pi-img-wrapper">
	                    	<img src="{{asset('assets/frontend/pages/img/products/model5.jpg')}}" class="img-responsive" alt="Amazon">
		                    <div>
		                      	<a href="{{asset('assets/frontend/pages/img/products/model2.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
		                      	<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
		                    </div>
		                 </div>
	                 	<h3><a href="shop-item.html">eBay</a></h3>
	                  	<div class="pi-price">5% </div>
	                  	<a href="javascript:;" class="btn btn-default add2cart">Shop now</a>
	                </div>
              	</div>
	            <div>
	                <div class="product-item">
	                  	<div class="pi-img-wrapper">
	                    	<img src="{{asset('assets/frontend/pages/img/products/model7.jpg')}}" class="img-responsive" alt="Amazon">
	                    	<div>
	                      		<a href="{{asset('assets/frontend/pages/img/products/model6.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
	                      		<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
	                    	</div>
	                  	</div>
	                  	<h3><a href="shop-item.html">Alibaba</a></h3>
	                  	<div class="pi-price">3% </div>
	                  	<a href="javascript:;" class="btn btn-default add2cart">Shop now</a>
	                </div>
	            </div>
	            <div>
	                <div class="product-item">
	                    <div class="pi-img-wrapper">
	                      	<img src="{{asset('assets/frontend/pages/img/products/model1.jpg')}}" class="img-responsive" alt="Amazon">
	                      	<div>
	                        	<a href="{{asset('assets/frontend/pages/img/products/model4.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
	                        	<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
	                      	</div>
	                    </div>
	                    <h3><a href="javascript:;">Booking</a></h3>
	                    <div class="pi-price">9% </div>
	                    <a href="javascript:;" class="btn btn-default add2cart">Shop now</a>
	                    <div class="sticker sticker-new"></div>
	                </div>
	            </div>
	            <div>
	                <div class="product-item">
	                  	<div class="pi-img-wrapper">
	                    	<img src="{{asset('assets/frontend/pages/img/products/model3.jpg')}}" class="img-responsive" alt="Amazon">
		                    <div>
		                      	<a href="{{asset('assets/frontend/pages/img/products/model5.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
		                      	<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
		                    </div>
	                  	</div>
	                  	<h3><a href="shop-item.html">Ionic</a></h3>
	                  	<div class="pi-price">10% </div>
	                  	<a href="javascript:;" class="btn btn-default add2cart">Shop now</a>
	                </div>
	            </div>
	            <div>
	                <div class="product-item">
	                  	<div class="pi-img-wrapper">
	                    	<img src="{{asset('assets/frontend/pages/img/products/model3.jpg')}}" class="img-responsive" alt="Amazon">
	                    	<div>
	                      		<a href="{{asset('assets/frontend/pages/img/products/model3.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
	                      		<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
	                    	</div>
	                  	</div>
	                  	<h3><a href="shop-item.html">Taobao</a></h3>
	                  	<div class="pi-price">8% </div>
	                  	<a href="javascript:;" class="btn btn-default add2cart">Shop now</a>
	                </div>
	            </div>
	            <div>
	                <div class="product-item">
	                  	<div class="pi-img-wrapper">
	                    	<img src="{{asset('assets/frontend/pages/img/products/model7.jpg')}}" class="img-responsive" alt="Amazon">
                    		<div>
	                      		<a href="{{asset('assets/frontend/pages/img/products/model7.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
	                      		<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
	                    	</div>
	                  	</div>
	                  	<h3><a href="shop-item.html">Amazon3</a></h3>
	                  	<div class="pi-price">8% </div>
	                  	<a href="javascript:;" class="btn btn-default add2cart">Shop now</a>
	                </div>
	            </div>
            </div>
        </div>
          <!-- END SALE PRODUCT -->
    </div>
</div>
@endsection
@section('script')
	<script src="{{asset('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/zoom/jquery.zoom.min.js')}}" type="text/javascript"></script>
@endsection
