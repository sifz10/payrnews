<!DOCTYPE html>
   <html lang="en-US">
      <head>
         <meta charset="UTF-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <meta name="viewport" content="width=device-width, initial-scale=1" />
         <meta name="author" content="" />
         <meta name="description" content="" />
         <meta name="keywords" content="" />
         <!-- Title-->
         @if (\Request::is('/'))
           <title>Payrnews :-: Home</title>
          @endif
         @if (\Request::is('login'))
           <title>Payrnews :-: Login</title>
          @endif
         @if (\Request::is('register'))
           <title>Payrnews :-: Register</title>
          @endif
         <!-- Favicon-->
         <link rel="icon" href="{!! asset('fontendAsset') !!}/img/favicon.png" type="image/x-icon" />
         <!-- Stylesheets-->
         <link rel="stylesheet" href="{!! asset('fontendAsset') !!}/css/style.css" type="text/css" media="all" />
         <!-- end head -->
      </head>
      <body class="mobile_nav_class jl-has-sidebar">
         <div class="options_layout_wrapper jl_clear_at jl_radius jl_none_box_styles jl_border_radiuss jl_en_day_night">
            <div class="options_layout_container full_layout_enable_front">
               <header class="header-wraper jl_header_magazine_style two_header_top_style header_layout_style3_custom jl_cus_top_share">
                  <div class="header_top_bar_wrapper">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="menu-primary-container navigation_wrapper">
                                 <ul id="jl_top_menu" class="jl_main_menu">
                                    <li class="menu-item current-menu-item current_page_item"> <a href="index-2.html">Home<span class="border-menu"></span></a></li>
                                    <li class="menu-item menu-item-4278"> <a href="#">About Us<span class="border-menu"></span></a></li>
                                    <li class="menu-item menu-item-4279"> <a href="#">special offer<span class="border-menu"></span></a></li>
                                    <li class="menu-item menu-item-4275"> <a href="#">Info!!<span class="border-menu"></span></a></li>
                                    <li class="menu-item menu-item-4275"> <a href="{!! route('login') !!}">login<span class="border-menu"></span></a></li>
                                 </ul>
                              </div>
                              <div class="jl_top_cus_social">
                                 <div class="menu_mobile_share_wrapper">
                                    <span class="jl_hfollow">Share us</span>
                                    <ul class="social_icon_header_top jl_socialcolor">
                                       <li> <a class="facebook" href="#" target="_blank"><i class="jli-facebook"></i></a></li>
                                       <li> <a class="vk" href="#" target="_blank"><i class="jli-vk"></i></a></li>
                                       <li> <a class="telegram" href="#" target="_blank"><i class="jli-telegram"></i></a></li>
                                       <li> <a class="behance" href="#" target="_blank"><i class="jli-behance"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Start Main menu -->
                  <div class="jl_blank_nav"></div>
                  <div id="menu_wrapper" class="menu_wrapper jl_menu_sticky jl_stick">
                     <div class="container">
                        <div class="row">
                           <div class="main_menu col-md-12">
                              <div class="logo_small_wrapper_table">
                                 <div class="logo_small_wrapper">
                                    <!-- begin logo --><a class="logo_link" href="index-2.html"><img class="jl_logo_n" src="{!! asset('fontendAsset') !!}/img/logo_n.png" alt="sprasa" /><img class="jl_logo_w" src="{!! asset('fontendAsset') !!}/img/logo_w.png" alt="sprasa" /></a><!-- end logo -->
                                 </div>
                              </div>
                              <div class="search_header_menu jl_nav_mobile">
                                 <div class="menu_mobile_icons">
                                    <div class="jlm_w"><span class="jlma"></span><span class="jlmb"></span><span class="jlmc"></span></div>
                                 </div>
                                 <div class="search_header_wrapper search_form_menu_personal_click"><i class="jli-search"></i></div>
                                 <div class="jl_h_cart nav-cart is-hover">
                                    <a class="jl_l_cart cart-link" href="#" title="view cart"> <span class="jl_i_cart"><i class="jli-bag"></i><em class="cart-counter jl_count_cart">11</em></span></a>
                                    <div class="jl-nav-cart jl-hshow">
                                       <div class="jl-cart-wrap woocommerce">
                                          <div class="widget_shopping_cart_content">
                                             <ul class="woocommerce-mini-cart cart_list product_list_widget">
                                                <li class="woocommerce-mini-cart-item mini_cart_item"> <a href="#" class="remove remove_from_cart_button"> &times; </a><a href="#"><img width="380" height="380" src="{!! asset('fontendAsset') !!}/img/herdian-indraputra-6kNVJ1fr3Ug-unsplash-380x380.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />thread</a> <span class="quantity"> 9 &times; <span class="woocommerce-Price-amount amount"> <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>12.00</bdi></span></span></li>
                                                <li class="woocommerce-mini-cart-item mini_cart_item"> <a href="#" class="remove remove_from_cart_button" aria-label="Remove this item"> &times; </a><a href="#"><img width="380" height="380" src="{!! asset('fontendAsset') !!}/img/irene-kredenets-maO-qIKLqi8-unsplash-1-380x380.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />cup</a> <span class="quantity"> 1 &times; <span class="woocommerce-Price-amount amount"> <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>35.00</bdi></span></span></li>
                                                <li class="woocommerce-mini-cart-item mini_cart_item"> <a href="#" class="remove remove_from_cart_button"> &times; </a><a href="#"><img width="380" height="380" src="{!! asset('fontendAsset') !!}/img/annie-spratt-fbAnIjhrOL4-unsplash-380x380.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />Flowerpot Plant</a> <span class="quantity"> 1 &times; <span class="woocommerce-Price-amount amount"> <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>2.00</bdi></span></span></li>
                                             </ul>
                                             <p class="woocommerce-mini-cart__total total"> <strong>Subtotal:</strong><span class="woocommerce-Price-amount amount"> <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>145.00</bdi></span></p>
                                             <p class="woocommerce-mini-cart__buttons buttons"><a href="#" class="button wc-forward">View cart</a><a href="#" class="button checkout wc-forward">Checkout</a></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="jl_day_night jl_day_en"> <span class="jl-night-toggle-icon"> <span class="jl_moon"> <i class="jli-moon"></i> </span><span class="jl_sun"> <i class="jli-sun"></i> </span></span></div>
                              </div>
                              <div class="menu-primary-container navigation_wrapper jl_cus_share_mnu">
                                 <ul id="mainmenu" class="jl_main_menu">
                                    <li class="menu-item current-menu-item current_page_item"> <a href="index-2.html">Home<span class="border-menu"></span></a></li>
                                    <li class="menu-item menu-item-has-children">
                                       <a href="#"> Features<span class="border-menu"></span> <span class="jl_menu_lb" style="background: #222ddc !important;"><span class="jl_lb_ar" style="border-top: 3px solid #222ddc !important;"></span>New</span> </a>
                                       <ul class="sub-menu">
                                          <li class="menu-item menu-item-has-children">
                                             <a href="post-layout-1.html">Post Layout<span class="border-menu"></span></a>
                                             <ul class="sub-menu">
                                                <li class="menu-item"> <a href="post-layout-1.html">Post Layout 1<span class="border-menu"></span></a></li>
                                                <li class="menu-item"> <a href="post-layout-2.html">Post Layout 2<span class="border-menu"></span></a></li>
                                                <li class="menu-item"> <a href="post-layout-3.html">Post Layout 3<span class="border-menu"></span></a></li>
                                             </ul>
                                          </li>
                                          <li class="menu-item menu-item-has-children">
                                             <a href="post-format-standard.html">Post Format<span class="border-menu"></span></a>
                                             <ul class="sub-menu">
                                                <li class="menu-item"> <a href="post-format-standard.html">Post format standard<span class="border-menu"></span></a></li>
                                                <li class="menu-item"> <a href="post-format-gallery.html">Post format gallery<span class="border-menu"></span></a></li>
                                                <li class="menu-item"> <a href="post-format-quote.html">Post Format Quote<span class="border-menu"></span></a></li>
                                                <li class="menu-item"> <a href="post-format-video.html">Post format video<span class="border-menu"></span></a></li>
                                                <li class="menu-item"> <a href="post-format-audio.html">Post format audio<span class="border-menu"></span></a></li>
                                             </ul>
                                          </li>
                                          <li class="menu-item"> <a href="author.html">Author Page<span class="border-menu"></span></a></li>
                                          <li class="menu-item"> <a href="category.html">Category Page<span class="border-menu"></span></a></li>
                                          <li class="menu-item"> <a href="page-404.html">Page 404<span class="border-menu"></span></a></li>
                                       </ul>
                                    </li>
                                    <li class="menu-item"> <a href="inspiration.html">Inspiration<span class="border-menu"></span></a></li>
                                    <li class="menu-item"> <a href="category.html">Active<span class="border-menu"></span></a></li>
                                    <li class="menupost">
                                       <a href="business.html"> Business<span class="border-menu"></span> <span class="jl_menu_lb" style="background: #f74539 !important;"><span class="jl_lb_ar" style="border-top: 3px solid #f74539 !important;"></span>Hot!</span> </a>
                                       <ul class="sub-menu menu_post_feature">
                                          <li>
                                             <div id="sprasa_recent_large_widgets-2" class="widget main_post_style">
                                                <h3 class="widget-title"><span>Recent Posts</span></h3>
                                                <div class="jl_grid_overlay jl_w_menu jl_clear_at">
                                                   <div class="jl_grid_overlay_col">
                                                      <div class="jl_grid_verlay_wrap jl_radus_e">
                                                         <div class="jl_f_img_bg" style="background-image: url('{!! asset('fontendAsset') !!}/img/pexels-luis-quintero-3731255-scaled-500x350.jpg');"></div>
                                                         <a href="#" class="jl_f_img_link"></a> <span class="jl_f_cat"><a class="post-category-color-text" style="background: #91bd3a;" href="#">Inspiration</a></span>
                                                         <div class="jl_f_postbox">
                                                            <h3 class="jl_f_title"> <a href="#">You can make your art with canyon color</a> </h3>
                                                            <span class="jl_post_meta"> <span class="jl_author_img_w"><i class="jli-user"></i><a href="#" title="Posts by Spraya" rel="author">Spraya</a></span><span class="post-date"><i class="jli-pen"></i>July 23, 2016</span><span class="post-read-time"><i class="jli-watch-2"></i>2 Mins read</span></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="jl_grid_overlay_col">
                                                      <div class="jl_grid_verlay_wrap jl_radus_e">
                                                         <div class="jl_f_img_bg" style="background-image: url('{!! asset('fontendAsset') !!}/img/pexels-matt-hardy-2602545-scaled-500x350.jpg');"></div>
                                                         <a href="#" class="jl_f_img_link"></a> <span class="jl_f_cat"><a class="post-category-color-text" style="background: #91bd3a;" href="#">Inspiration</a></span>
                                                         <div class="jl_f_postbox">
                                                            <h3 class="jl_f_title"> <a href="#">A comprehensive guide to the best summer dresses</a> </h3>
                                                            <span class="jl_post_meta"> <span class="jl_author_img_w"><i class="jli-user"></i><a href="#" title="Posts by Spraya" rel="author">Spraya</a></span><span class="post-date"><i class="jli-pen"></i>July 23, 2016</span><span class="post-read-time"><i class="jli-watch-2"></i>2 Mins read</span></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="jl_grid_overlay_col">
                                                      <div class="jl_grid_verlay_wrap jl_radus_e">
                                                         <div class="jl_f_img_bg" style="background-image: url('{!! asset('fontendAsset') !!}/img/paige-muller-q_iJJGDATYQ-unsplash-500x350.jpg');"></div>
                                                         <a href="#" class="jl_f_img_link"></a> <span class="jl_f_cat"><a class="post-category-color-text" style="background: #91bd3a;" href="#">Inspiration</a></span>
                                                         <div class="jl_f_postbox">
                                                            <h3 class="jl_f_title"> <a href="#">It feel like win 1 million dollar when code no error</a> </h3>
                                                            <span class="jl_post_meta"> <span class="jl_author_img_w"><i class="jli-user"></i><a href="#" title="Posts by Spraya" rel="author">Spraya</a></span><span class="post-date"><i class="jli-pen"></i>July 23, 2016</span><span class="post-read-time"><i class="jli-watch-2"></i>2 Mins read</span></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="jl_grid_overlay_col">
                                                      <div class="jl_grid_verlay_wrap jl_radus_e">
                                                         <div class="jl_f_img_bg" style="background-image: url('{!! asset('fontendAsset') !!}/img/taylor-friehl-VwzvLjsiPb4-unsplash-500x360.jpg');"></div>
                                                         <a href="#" class="jl_f_img_link"></a> <span class="jl_f_cat"><a class="post-category-color-text" style="background: #d63447;" href="#">Health</a></span>
                                                         <div class="jl_f_postbox">
                                                            <h3 class="jl_f_title"> <a href="#">Creative photography ideas from smart devices</a> </h3>
                                                            <span class="jl_post_meta"> <span class="jl_author_img_w"><i class="jli-user"></i><a href="#" title="Posts by Spraya" rel="author">Spraya</a></span><span class="post-date"><i class="jli-pen"></i>July 23, 2016</span><span class="post-read-time"><i class="jli-watch-2"></i>2 Mins read</span></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                       <a href="shop.html"> Shop<span class="border-menu"></span> <span class="jl_menu_lb" style="background: #ffe500 !important; color: #000000 !important;"><span class="jl_lb_ar" style="border-top: 3px solid #ffe500 !important;"></span>Now</span> </a>
                                       <ul class="sub-menu">
                                          <li class="menu-item"> <a href="cart.html">Cart<span class="border-menu"></span></a></li>
                                          <li class="menu-item"> <a href="my-account.html">My Account<span class="border-menu"></span></a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </header>
               <div id="content_nav" class="jl_mobile_nav_wrapper">
                  <div id="nav" class="jl_mobile_nav_inner">
                     <div class="menu_mobile_icons mobile_close_icons closed_menu"> <span class="jl_close_wapper"><span class="jl_close_1"></span><span class="jl_close_2"></span></span></div>
                     <ul id="mobile_menu_slide" class="menu_moble_slide">
                        <li class="menu-item current-menu-item current_page_item"> <a href="index-2.html">Home<span class="border-menu"></span></a></li>
                        <li class="menu-item menu-item-has-children">
                           <a href="#">Features<span class="border-menu"></span></a>
                           <ul class="sub-menu">
                              <li class="menu-item menu-item-has-children">
                                 <a href="post-layout-1.html">Post Layout<span class="border-menu"></span></a>
                                 <ul class="sub-menu">
                                    <li class="menu-item"> <a href="post-layout-1.html">Post Layout 1<span class="border-menu"></span></a></li>
                                    <li class="menu-item"> <a href="post-layout-2.html">Post Layout 2<span class="border-menu"></span></a></li>
                                    <li class="menu-item"> <a href="post-layout-3.html">Post Layout 3<span class="border-menu"></span></a></li>
                                 </ul>
                              </li>
                              <li class="menu-item menu-item-has-children">
                                 <a href="post-format-standard.html">Post Format<span class="border-menu"></span></a>
                                 <ul class="sub-menu">
                                    <li class="menu-item"> <a href="post-format-standard.html">Post format standard<span class="border-menu"></span></a></li>
                                    <li class="menu-item"> <a href="post-format-gallery.html">Post format gallery<span class="border-menu"></span></a></li>
                                    <li class="menu-item"> <a href="post-format-quote.html">Post Format Quote<span class="border-menu"></span></a></li>
                                    <li class="menu-item"> <a href="post-format-video.html">Post format video<span class="border-menu"></span></a></li>
                                    <li class="menu-item"> <a href="post-format-audio.html">Post format audio<span class="border-menu"></span></a></li>
                                 </ul>
                              </li>
                              <li class="menu-item"> <a href="author.html">Author Page<span class="border-menu"></span></a></li>
                              <li class="menu-item"> <a href="category.html">Category Page<span class="border-menu"></span></a></li>
                              <li class="menu-item"> <a href="page-404.html">Page 404<span class="border-menu"></span></a></li>
                           </ul>
                        </li>
                        <li class="menu-item"> <a href="inspiration.html">Inspiration<span class="border-menu"></span></a></li>
                        <li class="menu-item"> <a href="category.html">Active<span class="border-menu"></span></a></li>
                        <li class="menu-item"> <a href="business.html">Business<span class="border-menu"></span></a></li>
                        <li class="menu-item menu-item-has-children">
                           <a href="shop.html">Shop<span class="border-menu"></span></a>
                           <ul class="sub-menu">
                              <li class="menu-item"> <a href="cart.html">Cart<span class="border-menu"></span></a></li>
                              <li class="menu-item"> <a href="my-account.html">My Account<span class="border-menu"></span></a></li>
                           </ul>
                        </li>
                     </ul>
                     <div id="sprasa_recent_post_text_widget-11" class="widget post_list_widget">
                        <div class="widget_jl_wrapper">
                           <div class="ettitle">
                              <div class="widget-title">
                                 <h2 class="jl_title_c">Recent Posts</h2>
                              </div>
                           </div>
                           <div class="bt_post_widget">
                              <div class="jl_m_right jl_sm_list jl_ml jl_clear_at">
                                 <div class="jl_m_right_w">
                                    <div class="jl_m_right_img jl_radus_e"><a href="#"><img width="120" height="120" src="{!! asset('fontendAsset') !!}/img/pexels-ichad-windhiagiri-3993407-scaled-120x120.jpg" class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image" alt="" loading="lazy" /></a></div>
                                    <div class="jl_m_right_content">
                                       <h2 class="entry-title"><a href="#" tabindex="-1">Best inspire dark photo in the winter season</a></h2>
                                       <span class="jl_post_meta"> <span class="jl_author_img_w"><i class="jli-user"></i><a href="#" title="Posts by Spraya" rel="author">Spraya</a></span><span class="post-date"><i class="jli-pen"></i>July 23, 2016</span></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="jl_m_right jl_sm_list jl_ml jl_clear_at">
                                 <div class="jl_m_right_w">
                                    <div class="jl_m_right_img jl_radus_e"><a href="#"><img width="120" height="120" src="{!! asset('fontendAsset') !!}/img/ben-o-sullivan-GNp7ng0lR-8-unsplash-scaled-120x120.jpg" class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image" alt="" loading="lazy" /></a></div>
                                    <div class="jl_m_right_content">
                                       <h2 class="entry-title"><a href="#" tabindex="-1">Your job will be perfect if you concentrate</a></h2>
                                       <span class="jl_post_meta"> <span class="jl_author_img_w"><i class="jli-user"></i><a href="#" title="Posts by Spraya" rel="author">Spraya</a></span><span class="post-date"><i class="jli-pen"></i>July 23, 2016</span></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="jl_m_right jl_sm_list jl_ml jl_clear_at">
                                 <div class="jl_m_right_w">
                                    <div class="jl_m_right_img jl_radus_e"><a href="#"><img width="120" height="120" src="{!! asset('fontendAsset') !!}/img/pexels-unviajesinmaleta-3404200-120x120.jpg" class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image" alt="" loading="lazy" /></a></div>
                                    <div class="jl_m_right_content">
                                       <h2 class="entry-title"><a href="#" tabindex="-1">Enjoy the best time with a special person</a></h2>
                                       <span class="jl_post_meta"> <span class="jl_author_img_w"><i class="jli-user"></i><a href="#" title="Posts by Spraya" rel="author">Spraya</a></span><span class="post-date"><i class="jli-pen"></i>July 23, 2016</span></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="sprasa_about_us_widget-3" class="widget jellywp_about_us_widget">
                        <div class="widget_jl_wrapper about_widget_content">
                           <div class="jellywp_about_us_widget_wrapper">
                              <div class="social_icons_widget">
                                 <ul class="social-icons-list-widget icons_about_widget_display">
                                    <li> <a href="#" class="facebook" target="_blank"><i class="jli-facebook"></i></a></li>
                                    <li> <a href="#" class="behance" target="_blank"><i class="jli-behance"></i></a></li>
                                    <li> <a href="#" class="vimeo" target="_blank"><i class="jli-vimeo"></i></a></li>
                                    <li> <a href="#" class="youtube" target="_blank"><i class="jli-youtube"></i></a></li>
                                    <li> <a href="#" class="instagram" target="_blank"><i class="jli-instagram"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="search_form_menu_personal">
                  <div class="menu_mobile_large_close"> <span class="jl_close_wapper search_form_menu_personal_click"><span class="jl_close_1"></span><span class="jl_close_2"></span></span></div>
                  <form method="get" class="searchform_theme" action="#"><input type="text" placeholder="Search..." value="" name="s" class="search_btn" /><button type="submit" class="button"><i class="jli-search"></i></button></form>
               </div>
               <div class="mobile_menu_overlay"></div>
               @yield('content')

               <!-- end content --><!-- Start footer -->
               <footer id="footer-container" class="jl_footer_act enable_footer_columns_dark">
                  <div class="footer-columns">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-4">
                              <div id="sprasa_about_us_widget-2" class="widget jellywp_about_us_widget">
                                 <div class="widget_jl_wrapper about_widget_content">
                                    <div class="jellywp_about_us_widget_wrapper">
                                       <img class="footer_logo_about" src="{!! asset('fontendAsset') !!}/img/logo_w.png" alt="" />
                                       <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit Aenean commodo ligula eget dolor aenean massa cum sociis natoque penatibus et magnis cum aenean massa cum sociis natoque penatibus</p>
                                       <div class="social_icons_widget">
                                          <ul class="social-icons-list-widget icons_about_widget_display"></ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="sprasa_about_us_widget-4" class="widget jellywp_about_us_widget">
                                 <div class="widget_jl_wrapper about_widget_content">
                                    <div class="jellywp_about_us_widget_wrapper">
                                       <div class="social_icons_widget">
                                          <ul class="social-icons-list-widget icons_about_widget_display">
                                             <li> <a href="#" class="facebook" target="_blank"><i class="jli-facebook"></i></a></li>
                                             <li> <a href="#" class="behance" target="_blank"><i class="jli-behance"></i></a></li>
                                             <li> <a href="#" class="telegram" target="_blank"><i class="jli-telegram"></i></a></li>
                                             <li> <a href="#" class="vimeo" target="_blank"><i class="jli-vimeo"></i></a></li>
                                             <li> <a href="#" class="youtube" target="_blank"><i class="jli-youtube"></i></a></li>
                                             <li> <a href="#" class="tumblr" target="_blank"><i class="jli-tumblr"></i></a></li>
                                             <li> <a href="#" class="instagram" target="_blank"><i class="jli-instagram"></i></a></li>
                                             <li> <a href="#" class="linkedin" target="_blank"><i class="jli-linkedin"></i></a></li>
                                             <li> <a href="#" class="pinterest" target="_blank"><i class="jli-pinterest"></i></a></li>
                                             <li> <a href="#" class="twitter" target="_blank"><i class="jli-twitter"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div id="sprasa_recent_post_text_widget-8" class="widget post_list_widget">
                                 <div class="widget_jl_wrapper">
                                    <div class="ettitle">
                                       <div class="widget-title">
                                          <h2 class="jl_title_c">More from Us</h2>
                                       </div>
                                    </div>
                                    <div class="bt_post_widget">
                                       <div class="jl_m_right jl_sm_list jl_ml jl_clear_at">
                                          <div class="jl_m_right_w">
                                             <div class="jl_m_right_img jl_radus_e"><a href="#"><img width="120" height="120" src="{!! asset('fontendAsset') !!}/img/laura-chouette-IbsP3KmoWa4-unsplash-120x120.jpg" class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image" alt="" loading="lazy" /></a></div>
                                             <div class="jl_m_right_content">
                                                <h2 class="entry-title"><a href="#" tabindex="-1">Hold my hand and enjoy trips around the world</a></h2>
                                                <span class="jl_post_meta"> <span class="jl_author_img_w"><i class="jli-user"></i><a href="#" title="Posts by Spraya" rel="author">Spraya</a></span><span class="post-date"><i class="jli-pen"></i>July 21, 2016</span></span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="jl_m_right jl_sm_list jl_ml jl_clear_at">
                                          <div class="jl_m_right_w">
                                             <div class="jl_m_right_img jl_radus_e"><a href="#"><img width="120" height="120" src="{!! asset('fontendAsset') !!}/img/gbarkz-cMHzDQ8ZPMM-unsplash-scaled-120x120.jpg" class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image" alt="" loading="lazy" /></a></div>
                                             <div class="jl_m_right_content">
                                                <h2 class="entry-title"><a href="#" tabindex="-1">This is a good place for concentrate project</a></h2>
                                                <span class="jl_post_meta"> <span class="jl_author_img_w"><i class="jli-user"></i><a href="#" title="Posts by Spraya" rel="author">Spraya</a></span><span class="post-date"><i class="jli-pen"></i>July 21, 2016</span></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="widget_jl_wrapper jl_clear_at">
                                 <div id="sprasa_category_image_widget_register-2" class="widget jellywp_cat_image">
                                    <div class="widget-title">
                                       <h2 class="jl_title_c">Categories</h2>
                                    </div>
                                    <div class="wrapper_category_image">
                                       <div class="category_image_wrapper_main">
                                          <div class="jl_cat_img_w">
                                             <div class="jl_cat_img_c">
                                                <a class="category_image_link" id="category_color_2" href="#"></a>
                                                <div class="category_image_bg_image jl_f_img_bg" style="background-color: #4dcf8f; background-image: url('{!! asset('fontendAsset') !!}/img/morning-brew-rWfR4uYBFtY-unsplash-120x120.jpg');"></div>
                                                <span class="jl_cm_overlay"><span class="jl_cm_name">Active</span><span class="jl_cm_count">11 Posts</span></span>
                                             </div>
                                          </div>
                                          <div class="jl_cat_img_w">
                                             <div class="jl_cat_img_c">
                                                <a class="category_image_link" id="category_color_3" href="#"></a>
                                                <div class="category_image_bg_image jl_f_img_bg" style="background-color: #eba845; background-image: url({!! asset('fontendAsset') !!}/'img/pexels-andrea-piacquadio-3808904-1-120x120.jpg');"></div>
                                                <span class="jl_cm_overlay"><span class="jl_cm_name">Business</span><span class="jl_cm_count">10 Posts</span></span>
                                             </div>
                                          </div>
                                          <div class="jl_cat_img_w">
                                             <div class="jl_cat_img_c">
                                                <a class="category_image_link" id="category_color_4" href="#"></a>
                                                <div class="category_image_bg_image jl_f_img_bg" style="background-color: #7ebdb4; background-image: url('{!! asset('fontendAsset') !!}/img/tianyi-ma-WiONHd_zYI4-unsplash-120x120.jpg');"></div>
                                                <span class="jl_cm_overlay"><span class="jl_cm_name">Crazy</span><span class="jl_cm_count">5 Posts</span></span>
                                             </div>
                                          </div>
                                          <div class="jl_cat_img_w">
                                             <div class="jl_cat_img_c">
                                                <a class="category_image_link" id="category_color_6" href="#"></a>
                                                <div class="category_image_bg_image jl_f_img_bg" style="background-color: #d63447; background-image: url('{!! asset('fontendAsset') !!}/img/pexels-anna-shvets-3905792-120x120.jpg');"></div>
                                                <span class="jl_cm_overlay"><span class="jl_cm_name">Health</span><span class="jl_cm_count">6 Posts</span></span>
                                             </div>
                                          </div>
                                          <div class="jl_cat_img_w">
                                             <div class="jl_cat_img_c">
                                                <a class="category_image_link" id="category_color_5" href="#"></a>
                                                <div class="category_image_bg_image jl_f_img_bg" style="background-color: #91bd3a; background-image: url('{!! asset('fontendAsset') !!}/img/alexunder-hess-6zqd6092B1c-unsplash-120x120.jpg');"></div>
                                                <span class="jl_cm_overlay"><span class="jl_cm_name">Inspiration</span><span class="jl_cm_count">10 Posts</span></span>
                                             </div>
                                          </div>
                                          <div class="jl_cat_img_w">
                                             <div class="jl_cat_img_c">
                                                <a class="category_image_link" id="category_color_7" href="#"></a>
                                                <div class="category_image_bg_image jl_f_img_bg" style="background-color: #d66300; background-image: url('{!! asset('fontendAsset') !!}/img/daniel-korpai-Y3LGWCsrgmg-unsplash-120x120.jpg');"></div>
                                                <span class="jl_cm_overlay"><span class="jl_cm_name">Science</span><span class="jl_cm_count">4 Posts</span></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="footer-bottom enable_footer_copyright_dark">
                     <div class="container">
                        <div class="row bottom_footer_menu_text">
                           <div class="col-md-12">
                              <div class="jl_ft_w">
                                 © Copyright 2020 Jellywp. All rights reserved powered by Jellywp
                                 <ul id="menu-footer-menu" class="menu-footer">
                                    <li class="menu-item menu-item-6"> <a title="" href="#">About Us</a></li>
                                    <li class="menu-item menu-item-7"> <a title="" href="#">Private policy</a></li>
                                    <li class="menu-item menu-item-8"> <a title="" href="#">Forums</a></li>
                                    <li class="menu-item menu-item-9"> <a title="" href="#">Community</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </footer>
               <!-- End footer -->
               <div id="go-top"> <a href="#go-top"><i class="jli-up-chevron"></i></a></div>
            </div>
         </div>
         <script src="{!! asset('fontendAsset') !!}/js/jquery.js"></script>
      </body>
      <!-- Mirrored from jellywp.com/html/sprasa-preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 16:25:14 GMT -->
   </html>
