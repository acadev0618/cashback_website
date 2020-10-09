@extends('layout.app')
@section('header',"home")

@section('content')
<div class="page-slider margin-bottom-35 container">
      <!-- LayerSlider start -->
    <div id="layerslider" style="width: 100%; height: 250px; margin: 0 auto;">

        <!-- slide one start -->
        <div class="ls-slide ls-slide1">

          <img src="{{asset('assets/frontend/pages/img/layerslider/slide1/bg.jpg')}}" class="ls-bg" alt="Slide background">

        </div>
        <div class="ls-slide ls-slide1">

          <img src="{{asset('assets/frontend/pages/img/layerslider/slide1/bg.jpg')}}" class="ls-bg" alt="Slide background">

        </div>
        <div class="ls-slide ls-slide1">

          <img src="{{asset('assets/frontend/pages/img/layerslider/slide1/bg.jpg')}}" class="ls-bg" alt="Slide background">

        </div>
       
     </div>
      <!-- LayerSlider end -->
    
 	<div class="main">
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
	        <div class ="row margin-bottom-40" style="margin: -2px;">
	          <!-- BEGIN SALE PRODUCT -->
	            <h2 style="margin-top: 10px;margin-left: 6px">Top Deals</h2>
	            <div>
	            	<div class="col-md-3 top-deal">
	            		<div class="text-with-image-layout deal-tile">
						    <div class="deal-store-logo">
						        <a href="/login" title="THE ICONIC Deals &amp; Promotions">
						            <img alt="THE ICONIC Promotions &amp; Discounts" class="logo-img" data-src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png" height="auto" src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png">
						        </a>
						    </div>
						    <div class="deal-image-container">
						        <img alt="" class="deal-product" data-src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg" height="auto" src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg">
						        <div class="deal-description">
						            <div class="deal-description-text">Birthday Sale: 30% off Fashion, Sport, Kidswear &amp; More</div>
						        </div>
						    </div>
						    <div class="ui-voucher-code">
						        <div class="code-content">
						            <div class="code-empty">No code required</div>
						        </div>
						    </div>
						    <a href="/login" type="button" class="deal-button btn btn-success">10.00% Cashback</a>
						    <div class="deal-info">
						        <span class="display-text">Was 3.50% Cashback</span>
						        <a href="/login" target="_blank">View All THE ICONIC Deals</a>
						    </div>
						</div>
	            	</div>
	            	<div class="col-md-3 top-deal">
	            		<div class="text-with-image-layout deal-tile">
						    <div class="deal-store-logo">
						        <a href="/login" title="THE ICONIC Deals &amp; Promotions">
						            <img alt="THE ICONIC Promotions &amp; Discounts" class="logo-img" data-src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png" height="auto" src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/22486/6c32fbf0-fccc-11ea-b1ae-052e9f243e2a.webp">
						        </a>
						    </div>
						    <div class="deal-image-container">
						        <img alt="" class="deal-product" data-src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg" height="auto" src="https://shopily-au.s3.amazonaws.com/uploads/deals/31095/31095_logo_2335aae8.jpg">
						        <div class="deal-description">
						            <div class="deal-description-text">Birthday Sale: 30% off Fashion, Sport, Kidswear &amp; More</div>
						        </div>
						    </div>
						    <div class="ui-voucher-code">
						        <div class="code-content">
						            <div class="code-empty">No code required</div>
						        </div>
						    </div>
						    <a href="/login" type="button" class="deal-button btn btn-success">10.00% Cashback</a>
						    <div class="deal-info">
						        <span class="display-text">Was 3.50% Cashback</span>
						        <a href="/login" target="_blank">View All THE ICONIC Deals</a>
						    </div>
						</div>
	            	</div>
	            	<div class="col-md-3 top-deal">
	            		<div class="text-with-image-layout deal-tile">
						    <div class="deal-store-logo">
						        <a href="/login" title="THE ICONIC Deals &amp; Promotions">
						            <img alt="THE ICONIC Promotions &amp; Discounts" class="logo-img" data-src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png" height="auto" src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8437/1f93a6b2-9895-11e9-8659-57a732efab28.png">
						        </a>
						    </div>
						    <div class="deal-image-container">
						        <img alt="" class="deal-product" data-src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg" height="auto" src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg">
						        <div class="deal-description">
						            <div class="deal-description-text">Birthday Sale: 30% off Fashion, Sport, Kidswear &amp; More</div>
						        </div>
						    </div>
						    <div class="ui-voucher-code">
						        <div class="code-content">
						            <div class="code-empty">No code required</div>
						        </div>
						    </div>
						    <a href="/login" type="button" class="deal-button btn btn-success">10.00% Cashback</a>
						    <div class="deal-info">
						        <span class="display-text">Was 3.50% Cashback</span>
						        <a href="/login" target="_blank">View All THE ICONIC Deals</a>
						    </div>
						</div>
	            	</div>
	            	<div class="col-md-3 top-deal">
	            		<div class="text-with-image-layout deal-tile">
						    <div class="deal-store-logo">
						        <a href="/login" title="THE ICONIC Deals &amp; Promotions">
						            <img alt="THE ICONIC Promotions &amp; Discounts" class="logo-img" data-src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png" height="auto" src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png">
						        </a>
						    </div>
						    <div class="deal-image-container">
						        <img alt="" class="deal-product" data-src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg" height="auto" src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg">
						        <div class="deal-description">
						            <div class="deal-description-text">Birthday Sale: 30% off Fashion, Sport, Kidswear &amp; More</div>
						        </div>
						    </div>
						    <div class="ui-voucher-code">
						        <div class="code-content">
						            <div class="code-empty">No code required</div>
						        </div>
						    </div>
						    <a href="/login" type="button" class="deal-button btn btn-success">10.00% Cashback</a>
						    <div class="deal-info">
						        <span class="display-text">Was 3.50% Cashback</span>
						        <a href="/login" target="_blank">View All THE ICONIC Deals</a>
						    </div>
						</div>
	            	</div>
	            </div>
	            <div >
	            	<div class="col-md-3 top-deal">
	            		<div class="text-with-image-layout deal-tile">
						    <div class="deal-store-logo">
						        <a href="/login" title="THE ICONIC Deals &amp; Promotions">
						            <img alt="THE ICONIC Promotions &amp; Discounts" class="logo-img" data-src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png" height="auto" src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png">
						        </a>
						    </div>
						    <div class="deal-image-container">
						        <img alt="" class="deal-product" data-src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg" height="auto" src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg">
						        <div class="deal-description">
						            <div class="deal-description-text">Birthday Sale: 30% off Fashion, Sport, Kidswear &amp; More</div>
						        </div>
						    </div>
						    <div class="ui-voucher-code">
						        <div class="code-content">
						            <div class="code-empty">No code required</div>
						        </div>
						    </div>
						    <a href="/login" type="button" class="deal-button btn btn-success">10.00% Cashback</a>
						    <div class="deal-info">
						        <span class="display-text">Was 3.50% Cashback</span>
						        <a href="/login" target="_blank">View All THE ICONIC Deals</a>
						    </div>
						</div>
	            	</div>
	            	<div class="col-md-3 top-deal">
	            		<div class="text-with-image-layout deal-tile">
						    <div class="deal-store-logo">
						        <a href="/login" title="THE ICONIC Deals &amp; Promotions">
						            <img alt="THE ICONIC Promotions &amp; Discounts" class="logo-img" data-src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png" height="auto" src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png">
						        </a>
						    </div>
						    <div class="deal-image-container">
						        <img alt="" class="deal-product" data-src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg" height="auto" src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg">
						        <div class="deal-description">
						            <div class="deal-description-text">Birthday Sale: 30% off Fashion, Sport, Kidswear &amp; More</div>
						        </div>
						    </div>
						    <div class="ui-voucher-code">
						        <div class="code-content">
						            <div class="code-empty">No code required</div>
						        </div>
						    </div>
						    <a href="/login" type="button" class="deal-button btn btn-success">10.00% Cashback</a>
						    <div class="deal-info">
						        <span class="display-text">Was 3.50% Cashback</span>
						        <a href="/login" target="_blank">View All THE ICONIC Deals</a>
						    </div>
						</div>
	            	</div>
	            	<div class="col-md-3 top-deal">
	            		<div class="text-with-image-layout deal-tile">
						    <div class="deal-store-logo">
						        <a href="/login" title="THE ICONIC Deals &amp; Promotions">
						            <img alt="THE ICONIC Promotions &amp; Discounts" class="logo-img" data-src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png" height="auto" src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png">
						        </a>
						    </div>
						    <div class="deal-image-container">
						        <img alt="" class="deal-product" data-src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg" height="auto" src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg">
						        <div class="deal-description">
						            <div class="deal-description-text">Birthday Sale: 30% off Fashion, Sport, Kidswear &amp; More</div>
						        </div>
						    </div>
						    <div class="ui-voucher-code">
						        <div class="code-content">
						            <div class="code-empty">No code required</div>
						        </div>
						    </div>
						    <a href="/login" type="button" class="deal-button btn btn-success">10.00% Cashback</a>
						    <div class="deal-info">
						        <span class="display-text">Was 3.50% Cashback</span>
						        <a href="/login" target="_blank">View All THE ICONIC Deals</a>
						    </div>
						</div>
	            	</div>
	            	<div class="col-md-3 top-deal">
	            		<div class="text-with-image-layout deal-tile">
						    <div class="deal-store-logo">
						        <a href="/login" title="THE ICONIC Deals &amp; Promotions">
						            <img alt="THE ICONIC Promotions &amp; Discounts" class="logo-img" data-src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png" height="auto" src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png">
						        </a>
						    </div>
						    <div class="deal-image-container">
						        <img alt="" class="deal-product" data-src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg" height="auto" src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg">
						        <div class="deal-description">
						            <div class="deal-description-text">Birthday Sale: 30% off Fashion, Sport, Kidswear &amp; More</div>
						        </div>
						    </div>
						    <div class="ui-voucher-code">
						        <div class="code-content">
						            <div class="code-empty">No code required</div>
						        </div>
						    </div>
						    <a href="/login" type="button" class="deal-button btn btn-success">10.00% Cashback</a>
						    <div class="deal-info">
						        <span class="display-text">Was 3.50% Cashback</span>
						        <a href="/login" target="_blank">View All THE ICONIC Deals</a>
						    </div>
						</div>
	            	</div>
	            </div>
	            <div>
	            	<div class="col-md-3 top-deal">
	            		<div class="text-with-image-layout deal-tile">
						    <div class="deal-store-logo">
						        <a href="/login" title="THE ICONIC Deals &amp; Promotions">
						            <img alt="THE ICONIC Promotions &amp; Discounts" class="logo-img" data-src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png" height="auto" src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png">
						        </a>
						    </div>
						    <div class="deal-image-container">
						        <img alt="" class="deal-product" data-src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg" height="auto" src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg">
						        <div class="deal-description">
						            <div class="deal-description-text">Birthday Sale: 30% off Fashion, Sport, Kidswear &amp; More</div>
						        </div>
						    </div>
						    <div class="ui-voucher-code">
						        <div class="code-content">
						            <div class="code-empty">No code required</div>
						        </div>
						    </div>
						    <a href="/login" type="button" class="deal-button btn btn-success">10.00% Cashback</a>
						    <div class="deal-info">
						        <span class="display-text">Was 3.50% Cashback</span>
						        <a href="/login" target="_blank">View All THE ICONIC Deals</a>
						    </div>
						</div>
	            	</div>
	            	<div class="col-md-3 top-deal">
	            		<div class="text-with-image-layout deal-tile">
						    <div class="deal-store-logo">
						        <a href="/login" title="THE ICONIC Deals &amp; Promotions">
						            <img alt="THE ICONIC Promotions &amp; Discounts" class="logo-img" data-src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png" height="auto" src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png">
						        </a>
						    </div>
						    <div class="deal-image-container">
						        <img alt="" class="deal-product" data-src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg" height="auto" src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg">
						        <div class="deal-description">
						            <div class="deal-description-text">Birthday Sale: 30% off Fashion, Sport, Kidswear &amp; More</div>
						        </div>
						    </div>
						    <div class="ui-voucher-code">
						        <div class="code-content">
						            <div class="code-empty">No code required</div>
						        </div>
						    </div>
						    <a href="/login" type="button" class="deal-button btn btn-success">10.00% Cashback</a>
						    <div class="deal-info">
						        <span class="display-text">Was 3.50% Cashback</span>
						        <a href="/login" target="_blank">View All THE ICONIC Deals</a>
						    </div>
						</div>
	            	</div>
	            	<div class="col-md-3 top-deal">
	            		<div class="text-with-image-layout deal-tile">
						    <div class="deal-store-logo">
						        <a href="/login" title="THE ICONIC Deals &amp; Promotions">
						            <img alt="THE ICONIC Promotions &amp; Discounts" class="logo-img" data-src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png" height="auto" src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png">
						        </a>
						    </div>
						    <div class="deal-image-container">
						        <img alt="" class="deal-product" data-src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg" height="auto" src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg">
						        <div class="deal-description">
						            <div class="deal-description-text">Birthday Sale: 30% off Fashion, Sport, Kidswear &amp; More</div>
						        </div>
						    </div>
						    <div class="ui-voucher-code">
						        <div class="code-content">
						            <div class="code-empty">No code required</div>
						        </div>
						    </div>
						    <a href="/login" type="button" class="deal-button btn btn-success">10.00% Cashback</a>
						    <div class="deal-info">
						        <span class="display-text">Was 3.50% Cashback</span>
						        <a href="/login" target="_blank">View All THE ICONIC Deals</a>
						    </div>
						</div>
	            	</div>
	            	<div class="col-md-3 top-deal">
	            		<div class="text-with-image-layout deal-tile">
						    <div class="deal-store-logo">
						        <a href="/login" title="THE ICONIC Deals &amp; Promotions">
						            <img alt="THE ICONIC Promotions &amp; Discounts" class="logo-img" data-src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png" height="auto" src="https://cloud.shopback.com/t_sd_250_pad/store-service-au/assets/8007/e31e3b60-b012-11e9-a939-29fe5b0078f8.png">
						        </a>
						    </div>
						    <div class="deal-image-container">
						        <img alt="" class="deal-product" data-src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg" height="auto" src="https://shopily-au.s3.amazonaws.com/uploads/deals/31005/31005_logo_e8ef2b86.jpg">
						        <div class="deal-description">
						            <div class="deal-description-text">Birthday Sale: 30% off Fashion, Sport, Kidswear &amp; More</div>
						        </div>
						    </div>
						    <div class="ui-voucher-code">
						        <div class="code-content">
						            <div class="code-empty">No code required</div>
						        </div>
						    </div>
						    <a href="/login" type="button" class="deal-button btn btn-success">10.00% Cashback</a>
						    <div class="deal-info">
						        <span class="display-text">Was 3.50% Cashback</span>
						        <a href="/login" target="_blank">View All THE ICONIC Deals</a>
						    </div>
						</div>
	            	</div>
	            </div>
	            
	            <!-- END SALE PRODUCT -->
	        </div>
	        
        	<div class = "section">
        		<section>
				    <div class="brand-tile">
				        <a href="/product-fashion">
				            <img class="brand-image" src="https://shopily-au.s3.amazonaws.com/uploads/banners/6194/fashion-promo_page_thumbnail_ed13031c.png">
				        </a>
				    </div>
				    <div class="brand-tile">
				        <a href="/tech-and-gadgets-depreciated">
				            <img class="brand-image" src="https://shopily-au.s3.amazonaws.com/uploads/banners/6196/tech-sale_page_thumbnail_10cf12ab.png">
				        </a>
				    </div>
				    <div class="brand-tile">
				        <a href="/health-and-beauty-depreciated">
				            <img class="brand-image" src="https://shopily-au.s3.amazonaws.com/uploads/banners/6204/health-and-beauty_page_thumbnail_f1b41232.png">
				        </a>
				    </div>
				    <div class="brand-tile">
				        <a href="/kids-and-babies-deprecitaed">
				            <img class="brand-image" src="https://shopily-au.s3.amazonaws.com/uploads/banners/6208/kids-and-babies_page_thumbnail_96f01409.png">
				        </a>
				    </div>
			    </section>	
			</div>
              	
		</div>
</div>
@endsection
