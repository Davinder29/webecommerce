
<section class="main-header">
  <div class="top-bar fixed-top bg-green">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="left-top">
            <p class="t-p-l">INTERNATIONAL BRANDS & INDIAN DESIGN</p>

            <!-- <div class="mob-toggle-btn">
              <p class="toggle-btn-icon"><i class="fa-solid fa-bars"></i></p>
              <p class="me-text">menu</p>
            </div> -->
            <div class="mob-header-menu">
                <img src="images/mob-logo.png" class="img-fluid" alt="mob-logo">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-top">
            <div class="dropdown flag-drop">
                <button class="btn flag-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><span class="flag-icon flag-icon-us "></span> <span>UK</span></button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <a class="dropdown-item active" href="#"><span class="flag-icon flag-icon-us "></span> <span>UK</span></a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr"></span> <span>Fr</span></a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-es"></span> <span>Sp</span></a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-sa"></span> <span>Ar</span></a>
                    </li>
                </ul>
            </div>
            <div class="right-top-list">
              <ul class="r-i-l">
                <li><a href="javascript:;" class="klant">Customer Service</a></li>
                <li class="klantli">
                    <div class="dropdown">
                        <button class="btn user-tog dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-user"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                         <li><a class="dropdown-item" href="{{ route('dashboard') }}"><span><i class="fa-solid fa-angle-right"></i></span>My Account</a></li>
                         <li><a class="dropdown-item" href="{{ route('listWishlist') }}"><span><i class="fa-solid fa-angle-right"></i></span>Wishlist</a></li>
                         <li><a class="dropdown-item" href="{{ route('myCartView') }}"><span><i class="fa-solid fa-angle-right"></i></span>My Cart</a></li>
                        @auth
                            <li><a class="dropdown-item" href="{{ route('checkout-page') }}"><span><i class="fa-solid fa-angle-right"></i></span>Checkout</a></li>
                        @endauth
                        <li>
                            @auth
                                <a class="dropdown-item" href="{{ route('user.logout') }}"><span><i class="fa-solid fa-angle-right"></i></span>User Logout</a>
                            @else
                                <a class="dropdown-item" href="{{ route('login') }}"><span><i class="fa-solid fa-angle-right"></i></span>>Login/Register</a>
                                <a href="{{ route('login') }}"><i class="icon fa fa-lock"></i>Login/Register</a>
                            @endauth
                        </li>
                        </ul>
                      </div>
                </li>
                <li><a href="{{ route('listWishlist') }}" class="heart"><i class="fa-solid fa-heart"></i><span class="no">0</span></a></li>
                <li><a href="{{ route('myCartView') }}" class="shipping-bag"><i class="fa-solid fa-bag-shopping"></i><span class="no">0</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mid-menu">
    <div class="container">
        <div class="in-mid-menu"> 
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <div class="main-logo">
                        <div class="ma-l-img">
                            <img src="{{ asset('frontend_new/assets/images/main-logo.png') }}" class="img-fluid" alt="main-logo">
                        </div>
                        <ul class="da-he-menu">
                            <li><a href="{{ route('dashboard') }}"><span>Men</span></a></li>
                            <li><a href="{{ route('dashboard') }}"><span>Women</span></a></li>
                            <li><a href="{{ route('dashboard') }}"><span>Kids</span></a></li>
                            <li><a href="{{ route('dashboard') }}" class="xtra xlink"><span>NEW!</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">  
                    <div class="right-menu-search">
                        <form>
                            <div class="ipuser">
                             <input type="text" name="search-box search-field" placeholder="Please search here.">
                             <span class="search-icon search-button"><i class="fa-solid fa-magnifying-glass"></i></span>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="l-botom-menu">
            <header class="header">
              <div class="container">
                <div class="row v-center">
                    @php
                        $categories = \App\Models\Category::with(['subcategory', 'subsubcategory', 'products'])->orderBy('category_name_en', 'ASC')->get();
                    @endphp
                   
                  <!-- menu start here -->
                  <div class="header-item item-center">
                    <div class="menu-overlay"></div>
                    <nav class="menu">
                      <div class="mobile-menu-head">
                        <div class="go-back"><i class="fa fa-angle-left"></i></div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                      </div>
                      <ul class="menu-main">
                       @foreach ($categories as $category)
                        @if ($loop->index > 6)
                            @php
                                continue;
                            @endphp
                        @endif 
                        <li class="menu-item-has-children">
                          <a href="#"> {{ $category->category_name_en }} <i class="fa fa-angle-down"></i> </a>
                           @if($category->subsubcategory->count())
                           <div class="sub-menu mega-menu mega-menu-column-4">
                            @foreach ($category->subcategory as $subcategory)
                            <div class="list-item">
                             <!--  <h4 class="title">Men's Fashion</h4> -->
                              <ul>
                                  @foreach ($subcategory->subsubcategory as $subsubcategory)
                                    <li><a
                                            href="{{ route('subsubcategory.products', ['id' => $subsubcategory->id, 'slug' => $subsubcategory->subsubcategory_slug_en]) }}">
                                            @if (session()->get('language') == 'bangla')
                                                {{ $subsubcategory->subsubcategory_name_bn }}
                                            @else
                                                {{ $subsubcategory->subsubcategory_name_en }}
                                            @endif
                                        </a></li>
                                @endforeach
                          
                              </ul>
                              <!-- <h4 class="title">Beauty</h4>
                              <ul>
                                <li><a href="#">Moisturizer</a></li>
                                <li><a href="#">Face powder</a></li>
                                <li><a href="#">Lipstick</a></li>
                              </ul> -->
                            </div>
                            @endforeach
                           <!--  <div class="list-item">
                              <h4 class="title">Women's Fashion</h4>
                              <ul>
                                <li><a href="#">Sarees</a></li>
                                <li><a href="#">Sandals</a></li>
                                <li><a href="#">Watchs</a></li>
                                <li><a href="#">Shoes</a></li>
                              </ul>
                              <h4 class="title">Furniture</h4>
                              <ul>
                                <li><a href="#">Chairs</a></li>
                                <li><a href="#">Tables</a></li>
                                <li><a href="#">Doors</a></li>
                                <li><a href="#">Bed</a></li>
                              </ul>
                            </div>
                            <div class="list-item">
                              <h4 class="title">Home, Kitchen</h4>
                              <ul>
                                <li><a href="#">Kettle</a></li>
                                <li><a href="#">Toaster</a></li>
                                <li><a href="#">Dishwasher</a></li>
                                <li><a href="#">Microwave oven</a></li>
                                <li><a href="#">Pitcher</a></li>
                                <li><a href="#">Blender</a></li>
                                <li><a href="#">Colander</a></li>
                                <li><a href="#">Tureen</a></li>
                                <li><a href="#">Cookware</a></li>
                              </ul>
                            </div> -->
                            @if($category->category_image)
                            <div class="list-item">
                                <img class="img-responsive"
                                    src="{{ asset($category->category_image) }}" alt="">
                            </div>
                            @endif
                           </div>
                          @endif
                        </li>
                      @endforeach
                       <li class="dropdown  navbar-right special-menu"> <a href="#">Todays offer</a> </li>
                      </ul>
                    </nav>
                  </div>
                   <div class="full-togle">
                     <div class="mobile-menu-trigger">
                      <span></span>

                    </div>
                    <p class="me-text">menu</p> 
                   </div> 
                </div>
              </div>
        
            </header>
        </div>
    </div>
  </div>
</section>
