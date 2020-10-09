    <!-- BEGIN TOP BAR -->
    <div class="pre-header" style="background-color: #2643f6;color: white">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li>
                          <a href="javascript:void(0);">Refer Friends</a>
                        </li>
                        <!-- BEGIN CURRENCIES -->
                        <li class="shop-currencies">
                            <a href="javascript:void(0);">Custom Services</a>
                            
                        </li>
                        <!-- END CURRENCIES -->
                        <!-- BEGIN LANGS -->
                        <li class="langs-block">
                            <a href="/help-cashback" class="current">Help </a>
                        </li>
                        <!-- END LANGS -->
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <!-- <li><a href="shop-account.html">My Account</a></li> -->
                        <!-- <li><a href="shop-wishlist.html">My Wishlist</a></li> -->
                        <!-- <li><a href="shop-checkout.html">Checkout</a></li> -->
                        <li><a href="/login">Log In</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div class="header" style="background-color: #2643f6">
      <div class="container">
        <a class="site-logo" href="/">
          <img src="../../assets/frontend/layout/img/logos/logos.png" alt="Metronic Shop UI">
        </a>
        <div class="search-box">
          <input class="search-input" type="text" name="search" placeholder="Please enter search data">
        </div>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->
    <div class="popularStoreCategoryTabs hidden-sm hidden-xs ">
      <div class="container">
        
        <ul class="nav" style="display: flex;">
          <li role="presentation" class="popularStoreCategoryTab dropdown">
           <a class="dropdown-toggle popularStoreCategoryTabName" style="color: black" data-toggle="dropdown" data-target="#" href="javascript:;">
              Popular                   
            </a>
            <!-- <div role="button" href="#">
                <span class="popularStoreCategoryTabName">Popular</span>
            </div> -->
            <ul class="dropdown-menu">
              <li>
                @include('common.shopList.shoplist')
                <div class="text-center">
                  <a class="cursor-pointer outline-none focus:outline-none inline-block px-3 py-2 bg-sb-very-light-pink hover:bg-sb-white text-sb-store text-sm rounded" href="/all-stores">View More Popular Stores</a>
                </div>
              </li>
            </ul>
          </li>
          <li role="presentation" class="popularStoreCategoryTab dropdown">
            <a class="dropdown-toggle popularStoreCategoryTabName" style="color: black" data-toggle="dropdown" data-target="#" href="javascript:;">
              Groceries                   
            </a>
            <!-- <div role="button" href="#">
                <span class="popularStoreCategoryTabName">Popular</span>
            </div> -->
            <ul class="dropdown-menu dropdown-second">
               @include('common.shopList.shoplist')
                <div class="text-center">
                  <a class="cursor-pointer outline-none focus:outline-none inline-block px-3 py-2 bg-sb-very-light-pink hover:bg-sb-white text-sb-store text-sm rounded" href="/all-stores">View More Popular Stores</a>
                </div>
            </ul>
          </li>
          <li role="presentation" class="popularStoreCategoryTab dropdown">
            <a class="dropdown-toggle popularStoreCategoryTabName" style="color: black" data-toggle="dropdown" data-target="#" href="javascript:;">
              Travel                   
            </a>
            <!-- <div role="button" href="#">
                <span class="popularStoreCategoryTabName">Popular</span>
            </div> -->
            <ul class="dropdown-menu dropdown-third">
               @include('common.shopList.shoplist')
                <div class="text-center">
                  <a class="cursor-pointer outline-none focus:outline-none inline-block px-3 py-2 bg-sb-very-light-pink hover:bg-sb-white text-sb-store text-sm rounded" href="/all-stores">View More Popular Stores</a>
                </div>
            </ul>
          </li>
          <li role="presentation" class="popularStoreCategoryTab dropdown">
            <a class="dropdown-toggle popularStoreCategoryTabName" style="color: black" data-toggle="dropdown" data-target="#" href="javascript:;">
              Electronics                   
            </a>
            <!-- <div role="button" href="#">
                <span class="popularStoreCategoryTabName">Popular</span>
            </div> -->
            <ul class="dropdown-menu dropdown-fourth">
               @include('common.shopList.shoplist')
                <div class="text-center">
                  <a class="cursor-pointer outline-none focus:outline-none inline-block px-3 py-2 bg-sb-very-light-pink hover:bg-sb-white text-sb-store text-sm rounded" href="/all-stores">View More Popular Stores</a>
                </div>
            </ul>  
          </li>
          <li role="presentation" class="popularStoreCategoryTab dropdown">
            <a class="dropdown-toggle popularStoreCategoryTabName" style="color: black" data-toggle="dropdown" data-target="#" href="javascript:;">
              Fashion                   
            </a>
            <!-- <div role="button" href="#">
                <span class="popularStoreCategoryTabName">Popular</span>
            </div> -->
            <ul class="dropdown-menu dropdown-fifth">
               @include('common.shopList.shoplist')
                <div class="text-center">
                  <a class="cursor-pointer outline-none focus:outline-none inline-block px-3 py-2 bg-sb-very-light-pink hover:bg-sb-white text-sb-store text-sm rounded" href="/all-stores">View More Popular Stores</a>
                </div>
            </ul> 
          </li>
          <li role="presentation" class="popularStoreCategoryTab dropdown">
            <a class="dropdown-toggle popularStoreCategoryTabName" style="color: black" data-toggle="dropdown" data-target="#" href="javascript:;">
              Dining                   
            </a>
            <!-- <div role="button" href="#">
                <span class="popularStoreCategoryTabName">Popular</span>
            </div> -->
            <ul class="dropdown-menu dropdown-sixth">
               @include('common.shopList.shoplist')
                <div class="text-center">
                  <a class="cursor-pointer outline-none focus:outline-none inline-block px-3 py-2 bg-sb-very-light-pink hover:bg-sb-white text-sb-store text-sm rounded" href="/all-stores">View More Popular Stores</a>
                </div>
            </ul> 
          </li>
          <li role="presentation" class="popularStoreCategoryTab dropdown">
            <a class="dropdown-toggle popularStoreCategoryTabName" style="color: black" data-toggle="dropdown" data-target="#" href="javascript:;">
              Health &amp; Beauty                   
            </a>
            <!-- <div role="button" href="#">
                <span class="popularStoreCategoryTabName">Popular</span>
            </div> -->
            <ul class="dropdown-menu dropdown-seventh">
               @include('common.shopList.shoplist')
                <div class="text-center">
                  <a class="cursor-pointer outline-none focus:outline-none inline-block px-3 py-2 bg-sb-very-light-pink hover:bg-sb-white text-sb-store text-sm rounded" href="/all-stores">View More Popular Stores</a>
                </div>
            </ul>
          </li>
          <li role="presentation" class="popularStoreCategoryTab dropdown">
            <a class="dropdown-toggle popularStoreCategoryTabName" style="color: black" data-toggle="dropdown" data-target="#" href="javascript:;">
              Home &amp; Living                   
            </a>
            <!-- <div role="button" href="#">
                <span class="popularStoreCategoryTabName">Popular</span>
            </div> -->
            <ul class="dropdown-menu dropdown-eighth">
               @include('common.shopList.shoplist')
                <div class="text-center">
                  <a class="cursor-pointer outline-none focus:outline-none inline-block px-3 py-2 bg-sb-very-light-pink hover:bg-sb-white text-sb-store text-sm rounded" href="/all-stores">View More Popular Stores</a>
                </div>
            </ul> 
          </li>
          <li role="presentation" class="popularStoreCategoryTab dropdown">
            <a class="dropdown-toggle popularStoreCategoryTabName" style="color: black" data-toggle="dropdown" data-target="#" href="javascript:;">
              Sports &amp; Outdoors                   
            </a>
            <!-- <div role="button" href="#">
                <span class="popularStoreCategoryTabName">Popular</span>
            </div> -->
            <ul class="dropdown-menu dropdown-nineth">
               @include('common.shopList.shoplist')
                <div class="text-center">
                  <a class="cursor-pointer outline-none focus:outline-none inline-block px-3 py-2 bg-sb-very-light-pink hover:bg-sb-white text-sb-store text-sm rounded" href="/all-stores">View More Popular Stores</a>
                </div>
            </ul> 
          </li>
        </ul>
      </div>
    </div>