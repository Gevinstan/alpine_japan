<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset($setting->favicon) }}">

    @yield('title')
    <!-- Additionally cdn link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- fontawesome csn link  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/fontawesome/css/all.css') }}">
    <!--bootstrap.min.css  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- venobox.min.css  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/venobox.min.css') }}">
    <!-- slick.css  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <!-- aos.css  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">
    <!-- style.css  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style2.css') }}">
    <!-- responsive.css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('global/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.css" integrity="sha512-SZgE3m1he0aEF3tIxxnz/3mXu/u/wlMNxQSnE0Cni9j/O8Gs+TjM9tm1NX34nRQ7GiLwUEzwuE3Wv2FLz2667w==" crossorigin="anonymous" />


    @stack('style_section')


    @if ($google_analytic->status == 1)
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $google_analytic->analytic_id }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ $google_analytic->analytic_id }}');
        </script>
    @endif

    @if ($facebook_pixel->status == 1)
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{ $facebook_pixel->app_id }}');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id={{ $facebook_pixel->app_id }}&ev=PageView&noscript=1"
    /></noscript>
    @endif

</head>

<body>

    <!-- header part start  -->
    @if (Route::is('home'))
    <header class="header p-0 {{ Session::get('selected_theme') != 'theme_three' ? 'header-two' : ''  }}  {{ Session::get('selected_theme') == 'theme_two' ? 'header-three' : ''  }}">
    @else
    <header class="header header-two inner-header p-0">
    @endif
        <div class="container header-border py-2 px-5">
            <div class="d-flex justify-content-end align-items-center">
                <div>
                    <ul class="d-flex gap-5">
                        <li class="px-5">
                            <div class="dropdown">
                                <a class=" btn-secondary dropdown-toggle header-dropdown" href="#" role="button"
                                    id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="11.0001" cy="11" rx="4" ry="10" stroke-width="1.5" />
                                            <path
                                                d="M20.9962 10.7205C19.1938 12.2016 15.3949 13.2222 11 13.2222C6.60511 13.2222 2.80619 12.2016 1.00383 10.7205M20.9962 10.7205C20.8482 5.32691 16.4294 1 11 1C5.57061 1 1.15183 5.32691 1.00383 10.7205M20.9962 10.7205C20.9987 10.8134 21 10.9065 21 11C21 16.5228 16.5228 21 11 21C5.47715 21 1 16.5228 1 11C1 10.9065 1.00128 10.8134 1.00383 10.7205"
                                                stroke-width="1.5" />
                                        </svg>
                                    </span>
                                    {{ Session::get('front_lang_name') }}

                                    <span class="btn-arrow">
                                        <svg width="12" height="6" viewBox="0 0 12 6" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.0002 0.633816C11.947 0.446997 11.8572 0.28353 11.6808 0.158011C11.3813 -0.0492418 10.9487 -0.0550799 10.6493 0.155092C10.5927 0.195958 10.5361 0.239744 10.4829 0.286449C9.02543 1.56499 7.56465 2.84645 6.10719 4.125C6.07391 4.15419 6.04729 4.18922 5.96743 4.24176C5.94414 4.20673 5.93083 4.16294 5.89755 4.13375C4.42679 2.84062 2.95269 1.5504 1.48192 0.257257C1.22237 0.0295716 0.922896 -0.0579998 0.563523 0.0412478C0.0411014 0.1872 -0.17186 0.776848 0.157565 1.16216C0.194168 1.20595 0.237426 1.24681 0.280683 1.28768C1.97772 2.7764 3.67144 4.26511 5.36848 5.75091C5.67794 6.02238 6.07059 6.07492 6.42663 5.89394C6.51315 5.85015 6.58968 5.78594 6.65956 5.72464C8.30669 4.27971 9.95049 2.83478 11.6009 1.39277C11.784 1.23222 11.947 1.06875 12.0002 0.838149C12.0002 0.771011 12.0002 0.703873 12.0002 0.633816Z" />
                                        </svg>
                                    </span>
                                </a>

                                <ul class="dropdown-menu lang_dropdown" aria-labelledby="dropdownMenuLink">
                                    @foreach ($language_list as $language_dropdown_item)
                                        <li><a class="dropdown-item" href="{{ route('language-switcher', ['lang_code' => $language_dropdown_item->lang_code]) }}">{{ $language_dropdown_item->lang_name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class="text-white heading-fs-14 px-3">
                            <img src="{{asset('japan_home/email.png')}}" />
                            {{ $setting->email }}
                        </li>
                        <li class="text-white heading-fs-14 px-3">
                            <img src="{{asset('japan_home/mob.png')}}" />
                            {{ $setting->phone }}
                        </li>
                        <li>
                            <img src="{{asset('japan_home/insta.png')}}" />
                            <img src="{{asset('japan_home/facebook.png')}}" />
                            <img src="{{asset('japan_home/youtube.png')}}" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <nav class="menu-bg m-0 px-2">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 col-p-0">
                        <div class="nav-main">
                            <div class="nav-left">
                                <div class="logo nav_logo_container" >
                                    <a href="{{ route('home') }}" >
                                        <img src="{{asset('japan_home/japan-logo.png')}}" class="nav_logo" alt="logo" >
                                    </a>
                                </div>
                            </div>

                            <div class="nav-btn">
                                <div class="menu">
                                    <ul class="nav nav_texthead">
                                        <li class="nav-item">
                                            <a class="nav-link mx-2" href="{{ route('home') }}">{{ __('translate.Home') }}</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link mx-2 dropdown-toggle text-nowrap" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{ __('translate.JDM Stock') }}
                                            </a>
                                            <ul class="dropdown-menu dropdown_bg" aria-labelledby="navbarDropdown">
                                                <div class="p-3">
                                                    <div class="row">
                                                        <div class="col-md-4 nav-dropdown-list">
                                                            <h6 class="dropdown-header nav-dropdown-header text-nowrap">Cars</h6>
                                                            <div>
                                                                @foreach($jdm_legend['car'] as $jdm)
                                                                    <a class="dropdown-item nav-dropdown-item" href="{{ route('jdm-stock',[$jdm['slug'], 'car']) }}">{{$jdm['brand_name']}}</a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 nav-dropdown-list">
                                                            <h6 class="dropdown-header nav-dropdown-header text-nowrap">Heavy</h6>
                                                            <div>
                                                                @foreach($jdm_legend['heavy'] as $jdm)
                                                                    <a class="dropdown-item nav-dropdown-item" href="{{ route('jdm-stock',[$jdm['slug'], 'heavy']) }}">{{$jdm['brand_name']}}</a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 nav-dropdown-list">
                                                            <h6 class="dropdown-header nav-dropdown-header text-nowrap">Small Heavy</h6>
                                                            <div class="d-flex flex-column">
                                                                @foreach($jdm_legend['small_heavy'] as $jdm)
                                                                    <a class="dropdown-item nav-dropdown-item" href="{{ route('jdm-stock',[$jdm['slug'], 'small_heavy']) }}">{{$jdm['brand_name']}}</a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </ul>

                                        </li>
                                        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link mx-2 dropdown-toggle text-nowrap" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{ __('translate.Brand New Cars') }}
                                            </a>
                                            <ul class="dropdown-menu dropdown_bg" aria-labelledby="navbarDropdown">
                                                <div class="p-3">
                                                    <div class="row">
                                                        <div class="col-md-4 nav-dropdown-list">
                                                        <a class="dropdown-item nav-dropdown-item" href="{{route('auction-brand-new-car')}}">
                                                            <h6 class="dropdown-header nav-dropdown-header text-nowrap">{{__('translate.Auction')}}</h6>
                                                        </a>   
                                                        </div>
                                                        <div class="col-md-4 nav-dropdown-list">
                                                        <a class="dropdown-item nav-dropdown-item" href="{{route('jdm_brand_new')}}">
                                                            <h6 class="dropdown-header nav-dropdown-header text-nowrap">{{__('translate.Market Price')}}</h6>
                                                        </a> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </ul>

                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mx-2" href="{{ route('new-arrivals') }}">{{ __('translate.New Car Arrivals') }}</a>
                                        </li>

                                        <li class="nav-item">
                                           
                                            @if(Auth::guard('web')->check())
                                                    <a class="nav-link mx-2" href="{{ route('auction-car-marketplace') }}">
                                                    {{ __('translate.Live Auction') }}
                                                    </a>
                                                @else 
                                                    <a class="nav-link mx-2 auct_logout" href="#" onclick="auct_logout()">
                                                    {{ __('translate.Live Auction') }}
                                                    </a>
                                                @endif 
                                           
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link mx-2" href="{{ route('contact-us') }}">{{ __('translate.Contact') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mx-2" href="{{ route('blogs') }}">{{ __('translate.Blogs') }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{ route('user.select-car-purpose') }}" class="thm-btn ms-3">Login</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <!-- mobile navigation start -->
    <header class="mobile-header @if (Route::is('home')) {{ Session::get('selected_theme') == 'theme_two' ? 'two' : '' }} {{ Session::get('selected_theme') == 'theme_three' ? 'three' : '' }}  @endif">
        <div class="container-full">
            <div class="mobile-header__container">
                <div class="p-left">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            @if (Route::is('home'))
                                @if (Session::get('selected_theme') == 'theme_two')
                                    <img src="{{ asset($setting->logo) }}" alt="logo">
                                @elseif (Session::get('selected_theme') == 'theme_three')
                                <img src="{{ asset($setting->logo) }}" alt="logo">
                                @else
                                    <img src="{{ asset($setting->logo) }}" alt="logo">
                                @endif
                            @else
                                <img src="{{ asset($setting->logo) }}" alt="logo">
                            @endif

                            <p class="text-white fw-bold d-inline nav_mobile_head">Alpine Japan</p>
                        </a>  
                    </div>
                    
                </div>

                <div class="p-right">
                    <button id="nav-opn-btn">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- offcanvas -->

    <aside id="offcanvas-nav" >


        <nav class="m-nav @if (Route::is('home'))

        {{ Session::get('selected_theme') == 'theme_two' ? 'm-nav-two' : '' }} {{ Session::get('selected_theme') == 'theme_three' ? 'm-nav-three' : '' }} @endif ">
            <button id="nav-cls-btn"><i class="fa-solid fa-xmark"></i></button>

            <div class="logo">
                <a href="{{ route('home') }}  ">

                    @if (Route::is('home'))
                        @if (Session::get('selected_theme') == 'theme_two')
                            <img src="{{ asset('japan_home/japan-logo.png') }}" alt="logo" style="width:50px;height:50px; ">
                        @elseif (Session::get('selected_theme') == 'theme_three')
                        <img src="{{ asset('japan_home/japan-logo.png') }}" alt="logo" style="width:50px;height:50px; ">
                        @else
                            <img src="{{ asset('japan_home/japan-logo.png') }}" alt="logo" style="width:50px;height:50px; ">
                        @endif
                    @else
                        <img src="{{ asset('japan_home/japan-logo.png') }}" alt="logo" style="width:50px;height:50px; ">
                    @endif

                    <p style="display: inline;padding-left:35px;padding-bottom:40px;font-size:20px; font-weight:bold; color: black">Alpine Japan</p>
                </a>

                
            </div>


            <div class="container header-right-item">
                <div class="row header-right-item-btn-main">

                    <div class="col-md-12 header-right-item-btn">
                        <div class="dropdown">

                            <a class=" btn-secondary dropdown-toggle" href="#" role="button"
                                id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <ellipse cx="11.0001" cy="11" rx="4" ry="10" stroke-width="1.5" />
                                        <path
                                            d="M20.9962 10.7205C19.1938 12.2016 15.3949 13.2222 11 13.2222C6.60511 13.2222 2.80619 12.2016 1.00383 10.7205M20.9962 10.7205C20.8482 5.32691 16.4294 1 11 1C5.57061 1 1.15183 5.32691 1.00383 10.7205M20.9962 10.7205C20.9987 10.8134 21 10.9065 21 11C21 16.5228 16.5228 21 11 21C5.47715 21 1 16.5228 1 11C1 10.9065 1.00128 10.8134 1.00383 10.7205"
                                            stroke-width="1.5" />
                                    </svg>
                                </span>
                                {{ Session::get('front_lang_name') }}

                                <span class="btn-arrow">
                                    <svg width="12" height="6" viewBox="0 0 12 6" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0002 0.633816C11.947 0.446997 11.8572 0.28353 11.6808 0.158011C11.3813 -0.0492418 10.9487 -0.0550799 10.6493 0.155092C10.5927 0.195958 10.5361 0.239744 10.4829 0.286449C9.02543 1.56499 7.56465 2.84645 6.10719 4.125C6.07391 4.15419 6.04729 4.18922 5.96743 4.24176C5.94414 4.20673 5.93083 4.16294 5.89755 4.13375C4.42679 2.84062 2.95269 1.5504 1.48192 0.257257C1.22237 0.0295716 0.922896 -0.0579998 0.563523 0.0412478C0.0411014 0.1872 -0.17186 0.776848 0.157565 1.16216C0.194168 1.20595 0.237426 1.24681 0.280683 1.28768C1.97772 2.7764 3.67144 4.26511 5.36848 5.75091C5.67794 6.02238 6.07059 6.07492 6.42663 5.89394C6.51315 5.85015 6.58968 5.78594 6.65956 5.72464C8.30669 4.27971 9.95049 2.83478 11.6009 1.39277C11.784 1.23222 11.947 1.06875 12.0002 0.838149C12.0002 0.771011 12.0002 0.703873 12.0002 0.633816Z" />
                                    </svg>
                                </span>
                            </a>

                            <ul class="dropdown-menu lang_dropdown" aria-labelledby="dropdownMenuLink">
                                @foreach ($language_list as $language_dropdown_item)
                                    <li><a class="dropdown-item" href="{{ route('language-switcher', ['lang_code' => $language_dropdown_item->lang_code]) }}">{{ $language_dropdown_item->lang_name }}</a></li>
                                @endforeach
                            </ul>

                        </div>
                    </div>

                    <div class="col-md-12 header-right-item-btn">
                        <div class="header-right-phone-num-btn" style="padding-right:35px;" >
                            <span style=" padding:3px; border-radius:50%"><i class="bi bi-envelope"></i></span>
                            <span style="color:black; font-size: 14px; padding-top: -10px !important"> sales@alpinejapan.com </span>
                        </div>
                    </div>

                    <div class="col-md-12 header-right-item-btn">
                        <div class="header-right-phone-num-btn" style="padding-right:20px;">
                            <span style="padding-top:30px !important; border-radius:50%"><i class="bi bi-phone"></i></span>
                            <span style="color:black; font-size: 14px; display:inline">+81 78 242 1568 </span>
                        </div>
                    </div>

                    <div class="col-md-12 header-right-item-btn">
                        <div class="header-right-social-media-btn">
                            <span style="color: black; padding-right:22px; border-radius:50%"><i class="bi bi-instagram"></i></span>
                            <span style="color: black; padding-right:22px; border-radius:50%"><i class="bi bi-facebook"></i></span>
                            <span style="color: black; padding-right:22px; border-radius:50%"><i class="bi bi-youtube"></i></span>
                            <span style="color: black; padding-right:22px; border-radius:50%"><i class="bi bi-linkedin"></i></span>
                            <span style="color: black; padding-right:22px; border-radius:50%"><i class="bi bi-twitter"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <ul class="nav-links">
                <li style="color: black !important" class="dropdown">
                    <a style="color: black !important" href="javascript:;">{{ __('Home') }}</a>
                </li>
                <li><a style="color: black !important" href="{{ route('about-us') }}">{{ __('JDM Stock') }}</a></li>
                <li><a style="color: black !important" href="{{ route('listings') }}">{{ __('Buy Now Cars') }}</a></li>
                <li><a style="color: black !important" href="{{ route('dealers') }}">{{ __('New Car Arrivals') }}</a></li>
                <li><a style="color: black !important" href="{{ route('blogs') }}">{{ __('Useful Links') }}</a></li>
                <li><a style="color: black !important" href="{{ route('contact-us') }}">{{ __('translate.Contact') }}</a></li>
            </ul>
        </nav>
    </aside>

    <!-- header part end -->



    @yield('body-content')





    <!-- footer prart start  -->

    @if (Route::is('home'))
    <footer class=" footer {{ Session::get('selected_theme') == 'theme_two' ? 'footer-three' : ''  }} {{ Session::get('selected_theme') == 'theme_one' ? 'footer-two' : ''  }}">
    @else
    <footer class="overflow-hidden footer footer-two">
    @endif

        <div class="container px-sm-2 px-md-5">
            <div class="footer-bb d-md-flex d-sm-flex    align-items-center">
                <div class="col-lg-5 col-p-0 p-0" data-aos="fade-right" data-aos-delay="50">
                    <h2 class="newsletter-txt">
                        {{ __('translate.Join Our') }} <span>{{ __('translate.Newsletter') }}</span> &
                        {{ __('translate.Get updated.') }}
                    </h2>
                </div>
                <div class="col-lg-7 col-p-0" data-aos="fade-left" data-aos-delay="100">
                    <div class="newsletter-sarch-box-main-item justify-content-md-end justify-content-start">
                        <div class="newsletter-sarch-box-main pt-3">
                            <form action="{{ route('newsletter-request') }}" class="newsletter-sarch-box" method="POST">
                                @csrf
                                <div class="newsletter-sarch-box-item">
                                    <input type="email" class="form-control email-input" id="newsletter_email"
                                placeholder="{{ __('translate.Email Address') }}" name="email">
                                </div>
                                @if (Route::is('home'))
                                <button type="submit" class="email-btn {{ Session::get('selected_theme') == 'theme_two' ? 'thm-btn-thr' : ''  }} {{ Session::get('selected_theme') == 'theme_one' ? 'thm-btn-two' : ''  }} {{ Session::get('selected_theme') == 'theme_three' ? 'thm-btn' : ''  }}">{{ __('translate.Subscribe') }}</button>
                                @else
                                <button type="submit" class="thm-btn-two">{{ __('translate.Subscribe') }}</button>
                                @endif
                            </form>
                            <div class="d-flex justify-content-center text-uppercase">
                                <label class="form-label">Subscribe to Our Newsletter</label>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <hr class="text-white mx-auto">

            <div class="row footer-mt-75px ">
                <div class=" col-xl-4 col-lg-6 col-md-12 " data-aos="fade-right" data-aos-delay="100">
                    <div class="footer-logo">


                        <a href="{{ route('home') }}">
                            <img src="{{asset('japan_home/japan-logo.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="footer-text-p">
                        <p>Buy JDM cars through our online marketplace. Browse Nissan Skyline R34,Toyota Supra MK4, Subaru Impreza WRX STI an more cars for sale from , Japan auction, dealers across all Japan.</p>
                    </div>
                    <div class="footer-icon">
                        
                        <div class="text">
                            <h5>{{ __('REVIEWED ON') }}:</h5>
                            <img src="{{ asset('japan_home/google.svg') }}" alt="logo" style="margin-right:1px; height:35px">
                                      <div class="five_star">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                      </div>  
                            <div><p style="font-size:15px; color: var(--white-color)">(5 Out Of 5)</p></div>
                        </div>

                        <div class="row">
                            <button type="button" class="btn btn-primary">RATE US</button>
                        </div>
                    </div>
                </div>

                <div class=" col-xl-8 col-lg-12 col-12 col-md-12 ">
                    <div class="row footer-ml">
                        <div class="col-xl-4 col-lg-4 col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="footer-item-text ">
                                <h3>{{ __('translate.Why Alpine') }}</h3>
                            </div>
                            <div class="footer-item-text-link">
                                <ul>
                                    <li>
                                        <a href="{{ route('blogs') }}">  <span>
                                            <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.62856 9L12.2952 5M12.2952 5L8.62856 0.999999M12.2952 5L1.29523 5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>{{ __('translate.Blogs') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about-us') }}">  <span>
                                            <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.62856 9L12.2952 5M12.2952 5L8.62856 0.999999M12.2952 5L1.29523 5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>{{ __('translate.About us') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact-us') }}">  <span>
                                            <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.62856 9L12.2952 5M12.2952 5L8.62856 0.999999M12.2952 5L1.29523 5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>{{ __('translate.Contact Us') }}</a>
                                    </li>
                                    <li>
                                            <a href="{{ route('terms-conditions') }}">  <span>
                                                <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.62856 9L12.2952 5M12.2952 5L8.62856 0.999999M12.2952 5L1.29523 5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>{{ __('translate.Terms and Conditions') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('privacy-policy') }}">  <span>
                                                <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.62856 9L12.2952 5M12.2952 5L8.62856 0.999999M12.2952 5L1.29523 5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>{{ __('translate.Privacy & Policy') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('how-to-buy') }}">  <span>
                                                <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.62856 9L12.2952 5M12.2952 5L8.62856 0.999999M12.2952 5L1.29523 5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>{{ __('translate.How To Buy') }}</a>
                                        </li>


                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-6 col-md-5 footer-res-mt " data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="footer-item-text">
                                <h3>{{ __('translate.Quick Links') }}</h3>
                            </div>
                            <div class="footer-item-text-link">
                                <ul>

                                    <li>
                                         @if(Auth::guard('web')->check())
                                            <a href="{{ route('auction-car-marketplace') }}"> <span>
                                            @else
                                            <a href="#" class="auct_logout" onclick="auct_logout()"><span>
                                            @endif
                                            <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.62856 9L12.2952 5M12.2952 5L8.62856 0.999999M12.2952 5L1.29523 5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg></span> {{__('translate.Auction Car MarketPlace') }}
                                           </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('fixed-car-marketplace') }}"> <span>
                                        <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.62856 9L12.2952 5M12.2952 5L8.62856 0.999999M12.2952 5L1.29523 5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg></span> {{ __('translate.Fixed Car Price Marketplace') }}
                                            </a>
                                        </li>
                                    <li>
                                        <a href="{{ route('new-arrivals') }}"> <span>
                                        <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.62856 9L12.2952 5M12.2952 5L8.62856 0.999999M12.2952 5L1.29523 5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg></span> {{ __('translate.New Arrivals') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('shipment') }}"> <span>
                                        <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.62856 9L12.2952 5M12.2952 5L8.62856 0.999999M12.2952 5L1.29523 5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg></span> {{ __('translate.Shipment') }}
                                        </a>
                                    </li>
                                        <li>
                                            <a href="{{ route('custom-page', 'our-stocks') }}"> <span>
                                            <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.62856 9L12.2952 5M12.2952 5L8.62856 0.999999M12.2952 5L1.29523 5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg></span> {{ __('translate.Our Stocks') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('custom-page', 'useful-links') }}"> <span>
                                            <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.62856 9L12.2952 5M12.2952 5L8.62856 0.999999M12.2952 5L1.29523 5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg></span> {{ __('translate.Useful Links') }}
                                            </a>
                                        </li>


                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4   col-sm-6 col-md-3" data-aos="fade-up" data-aos-delay="400">

                            <div class="footer-item-text-link two mb-3">
                                <div class="footer-item-text">
                                    <h3>{{ __('translate.Contact Us') }}</h3>
                                </div>

                                <ul>
                                    <li>
                                        <a href="tel:{{ $setting->phone }}">
                                            <span >
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 1.75C2.30964 1.75 1.75 2.30964 1.75 3C1.75 11.4223 8.57766 18.25 17 18.25C17.6904 18.25 18.25 17.6904 18.25 17V15.3541C18.25 14.8429 17.9388 14.3833 17.4642 14.1935L15.4301 13.3798C14.8265 13.1384 14.1386 13.3999 13.8478 13.9814L13.6708 14.3354C13.5196 14.6379 13.1846 14.8018 12.8529 14.7354L13 14C12.8529 14.7354 12.8532 14.7355 12.8529 14.7354L12.8519 14.7352L12.8507 14.735L12.8475 14.7343L12.8385 14.7325L12.8097 14.7263C12.7859 14.721 12.7529 14.7135 12.7114 14.7034C12.6285 14.6832 12.5115 14.6528 12.3665 14.6101C12.0768 14.525 11.6734 14.3903 11.2046 14.1894C10.2704 13.789 9.05609 13.1167 7.96967 12.0303C6.88325 10.9439 6.21099 9.72958 5.81064 8.79544C5.60973 8.32664 5.47504 7.92316 5.38985 7.6335C5.34721 7.48851 5.31682 7.37154 5.29664 7.28859C5.28655 7.2471 5.279 7.21408 5.27374 7.19026L5.26753 7.1615L5.26566 7.15247L5.26501 7.14932L5.26477 7.14809C5.26472 7.14785 5.26456 7.14709 6 7L5.26456 7.14709C5.19824 6.81544 5.36208 6.48043 5.66459 6.32918L6.01861 6.15217C6.60008 5.86143 6.86163 5.17351 6.62018 4.5699L5.80653 2.53576C5.6167 2.06119 5.15706 1.75 4.64593 1.75H3ZM6.88322 7.38709C8.02553 6.69729 8.51646 5.27171 8.0129 4.01281L7.19925 1.97868C6.78162 0.934616 5.77042 0.25 4.64593 0.25H3C1.48122 0.25 0.25 1.48122 0.25 3C0.25 12.2508 7.74923 19.75 17 19.75C18.5188 19.75 19.75 18.5188 19.75 17V15.3541C19.75 14.2296 19.0654 13.2184 18.0213 12.8008L15.9872 11.9871C14.7283 11.4835 13.3027 11.9745 12.6129 13.1168C12.3906 13.0457 12.111 12.9459 11.7954 12.8106C10.9796 12.461 9.94391 11.8833 9.03033 10.9697C8.11675 10.0561 7.53901 9.02042 7.18936 8.20456C7.05411 7.88897 6.95433 7.60941 6.88322 7.38709ZM10.25 1C10.25 0.585786 10.5858 0.25 11 0.25C12.1491 0.25 13.2869 0.476325 14.3485 0.916054C15.4101 1.35578 16.3747 2.0003 17.1872 2.81282C17.9997 3.62533 18.6442 4.58992 19.0839 5.65152C19.5237 6.71312 19.75 7.85093 19.75 9C19.75 9.41421 19.4142 9.75 19 9.75C18.5858 9.75 18.25 9.41421 18.25 9C18.25 8.04792 18.0625 7.10516 17.6981 6.22554C17.3338 5.34593 16.7997 4.5467 16.1265 3.87348C15.4533 3.20025 14.6541 2.66622 13.7745 2.30187C12.8948 1.93753 11.9521 1.75 11 1.75C10.5858 1.75 10.25 1.41421 10.25 1ZM10.25 5C10.25 4.58579 10.5858 4.25 11 4.25C11.6238 4.25 12.2415 4.37286 12.8177 4.61157C13.394 4.85028 13.9177 5.20016 14.3588 5.64124C14.7998 6.08232 15.1497 6.60596 15.3884 7.18225C15.6271 7.75855 15.75 8.37622 15.75 9C15.75 9.41421 15.4142 9.75 15 9.75C14.5858 9.75 14.25 9.41421 14.25 9C14.25 8.5732 14.1659 8.15059 14.0026 7.75628C13.8393 7.36197 13.5999 7.00369 13.2981 6.7019C12.9963 6.40011 12.638 6.16072 12.2437 5.99739C11.8494 5.83406 11.4268 5.75 11 5.75C10.5858 5.75 10.25 5.41421 10.25 5Z"/>
                                                    </svg>

                                            </span>
                                            {{ $setting->phone }}
                                        </a>
                                    </li>

                                    <li>
                                        <a href="mailto:{{ $setting->email }}">
                                            <span>
                                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.25 5C0.25 2.37665 2.37665 0.25 5 0.25H17C19.6234 0.25 21.75 2.37665 21.75 5V15C21.75 17.6234 19.6234 19.75 17 19.75H7C6.58579 19.75 6.25 19.4142 6.25 19C6.25 18.5858 6.58579 18.25 7 18.25H17C18.7949 18.25 20.25 16.7949 20.25 15V5C20.25 3.20507 18.7949 1.75 17 1.75H5C3.20507 1.75 1.75 3.20507 1.75 5V10C1.75 10.4142 1.41421 10.75 1 10.75C0.585786 10.75 0.25 10.4142 0.25 10V5ZM4.37596 5.58397C4.60573 5.23933 5.07138 5.1462 5.41603 5.37596L9.19723 7.89676C10.2889 8.62454 11.7111 8.62454 12.8028 7.89676L16.584 5.37596C16.9286 5.1462 17.3943 5.23933 17.624 5.58397C17.8538 5.92862 17.7607 6.39427 17.416 6.62404L13.6348 9.14484C12.0393 10.2085 9.9607 10.2085 8.36518 9.14484L4.58397 6.62404C4.23933 6.39427 4.1462 5.92862 4.37596 5.58397ZM0.25 13C0.25 12.5858 0.585786 12.25 1 12.25H7C7.41421 12.25 7.75 12.5858 7.75 13C7.75 13.4142 7.41421 13.75 7 13.75H1C0.585786 13.75 0.25 13.4142 0.25 13ZM0.25 16C0.25 15.5858 0.585786 15.25 1 15.25H7C7.41421 15.25 7.75 15.5858 7.75 16C7.75 16.4142 7.41421 16.75 7 16.75H1C0.585786 16.75 0.25 16.4142 0.25 16Z"/>
                                                    </svg>


                                            </span>
                                            {{ $setting->email }}
                                        </a>
                                    </li>


                                    <li>
                                        <a href="javascript:;">
                                            <span>
                                                <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.75C5.47857 1.75 2.25 4.48059 2.25 8.11111C2.25 9.82498 3.34675 12.1327 4.85679 14.0668C5.59932 15.0178 6.409 15.8353 7.171 16.4074C7.95947 16.9993 8.59247 17.25 9 17.25C9.42269 17.25 10.0624 17.0094 10.8465 16.4554C11.6072 15.9179 12.4148 15.1481 13.1547 14.2468C14.6599 12.4136 15.75 10.2065 15.75 8.5C15.75 4.45503 12.4938 1.75 9 1.75ZM0.75 8.11111C0.75 3.51941 4.78944 0.25 9 0.25C13.2382 0.25 17.25 3.54497 17.25 8.5C17.25 10.7209 15.9026 13.2638 14.314 15.1987C13.5071 16.1815 12.6038 17.0504 11.7121 17.6804C10.8438 18.294 9.88982 18.75 9 18.75C8.09503 18.75 7.13428 18.2555 6.27041 17.6069C5.38006 16.9385 4.4788 16.0201 3.67446 14.9899C2.09075 12.9614 0.75 10.3246 0.75 8.11111ZM9 5.75C7.75736 5.75 6.75 6.75736 6.75 8C6.75 9.24264 7.75736 10.25 9 10.25C10.2426 10.25 11.25 9.24264 11.25 8C11.25 6.75736 10.2426 5.75 9 5.75ZM5.25 8C5.25 5.92893 6.92893 4.25 9 4.25C11.0711 4.25 12.75 5.92893 12.75 8C12.75 10.0711 11.0711 11.75 9 11.75C6.92893 11.75 5.25 10.0711 5.25 8ZM2.25 21C2.25 20.5858 2.58579 20.25 3 20.25H15C15.4142 20.25 15.75 20.5858 15.75 21C15.75 21.4142 15.4142 21.75 15 21.75H3C2.58579 21.75 2.25 21.4142 2.25 21Z"/>
                                                    </svg>
                                            </span>
                                            {{ $setting->address }}
                                        </a>
                                    </li>
                                </ul>


                            </div>
                            <div>
                                <div class="footer-item-text">
                                    <h3 class="text-nowrap">We Accept Credit Card</h3>
                                </div>
                                <div class="footer-item-text-link">
                                    <img class="w-100" src="{{ asset('japan_home/group.svg') }}" alt="cards">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="copyright px-sm-2 px-md-5">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 col-sm-6 col-md-6 p-0">
                        <div class="copyright-text">
                            <p class="text-white heading-fs-14">{{ $setting->copyright }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6  col-md-6 p-0">
                        <div class="copyright-item gap-0">
                            <a class="border-0 heading-fs-14" href="{{ route('privacy-policy') }}">{{ $setting->developed_by}}</a>
                            <a href="{{ route('terms-conditions') }}">
                                <img src="{{asset('japan_home/insta.png')}}" />
                                <img src="{{asset('japan_home/facebook.png')}}" />
                                <img src="{{asset('japan_home/youtube.png')}}" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!-- footer prart start  end -->


  {{--  @if ($cookie_consent->status == 1)
        <!-- common-modal start  -->
        <div class="common-modal cookie_consent_modal d-none" >
            <button type="button" class="btn-close cookie_consent_close_btn" aria-label="Close"></button>

            <h5>{{ __('translate.Cookies') }}</h5>
            <p>{{ $cookie_consent->message }}</p>

            <div class="common-modal-btn">
                <a href="javascript:;" class="thm-btn-two cookie_consent_accept_btn">{{ __('translate.Accept') }}</a>
            </div>

        </div>
        <!-- common-modal end  -->
    @endif --}}

    <!-- back-to-top  -->

    @if (Route::is('home'))
        @if (Session::get('selected_theme') == 'theme_two')
            <div class="back-to-top">
                <span>
                    
                </span>
            </div>
        @elseif (Session::get('selected_theme') == 'theme_one')
            <div class="back-to-top">
                <span>
                    
                </span>
            </div>
        @elseif (Session::get('selected_theme') == 'theme_three')
            <div class="back-to-top">
                <span>
                    <svg width="39" height="75" viewBox="0 0 39 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.235 75.0022L18.3095 74.9021C18.3095 74.8855 18.3144 74.8688 18.3168 74.8521C18.0878 74.8283 17.8612 74.7854 17.6322 74.7831C15.744 74.7759 13.9751 74.2448 12.2526 73.5542C8.50789 72.0514 5.51357 69.6293 3.26965 66.3332C1.58854 63.8612 0.51897 61.1438 0.192494 58.1906C0.0268193 56.6902 0.0195101 55.1708 0.0146374 53.6585C-0.00485375 47.2806 0.0073282 40.9028 1.90292e-05 34.5249C-0.00485375 30.6382 0.925847 27.0087 3.08205 23.7221C5.88146 19.4567 9.78943 16.6536 14.7986 15.3676C16.9281 14.8222 19.0989 14.6245 21.3014 14.8627C27.6384 15.5486 32.5185 18.5517 36.0001 23.7555C37.4546 25.9298 38.3902 28.3233 38.7678 30.8978C38.9311 32.0171 38.9847 33.1603 38.9896 34.2939C39.0066 41.1386 38.9993 47.9808 38.992 54.8255C38.992 55.8519 39.0066 56.8855 38.9092 57.9048C38.7021 60.0673 38.0735 62.1226 37.0965 64.0731C35.2741 67.7098 32.5843 70.5558 28.9809 72.5372C26.793 73.7423 24.4443 74.5235 21.9348 74.7878C21.4987 74.8331 21.0553 74.8307 20.6119 74.8902C20.7386 74.926 20.8653 74.9641 20.9919 74.9998H17.2399L17.235 75.0022ZM3.08449 44.8395H3.08692C3.08692 48.3309 3.06743 51.8223 3.09911 55.3137C3.10885 56.3973 3.18925 57.4881 3.3598 58.5574C3.7618 61.1128 4.80458 63.4301 6.40772 65.4735C9.05851 68.8553 12.5133 70.9868 16.8355 71.6989C18.8869 72.0371 20.9432 72.0228 22.9654 71.5775C26.8271 70.7249 30.0236 68.7886 32.4649 65.714C34.8891 62.6608 36.0001 59.1885 35.9831 55.3208C35.9489 48.2214 35.9684 41.1195 35.9757 34.0177C35.9757 32.7554 35.8344 31.5099 35.5372 30.2881C34.7015 26.8587 32.94 23.9674 30.1698 21.6978C26.1522 18.4041 21.5401 17.1823 16.3994 18.123C12.8374 18.7756 9.82841 20.4737 7.38959 23.1315C4.53901 26.2371 3.12103 29.8785 3.09423 34.0391C3.07231 37.64 3.08936 41.2386 3.08936 44.8395H3.08449Z" fill="#038FFC"></path>
                        <path d="M38.9361 56.4846C38.9216 56.3798 38.8901 56.275 38.8901 56.1726C38.8877 48.866 38.8853 41.5593 38.8877 34.2526C38.8877 34.0478 38.9192 33.843 38.9361 33.6382V56.487V56.4846Z" fill="#038FFC"></path>
                        <path d="M11.0364 8.95426C10.9997 8.54517 11.2855 8.24461 11.5541 7.94092C13.5504 5.68046 15.5488 3.42314 17.5473 1.16477C17.7576 0.926827 17.9582 0.680536 18.1815 0.455117C18.7973 -0.167918 19.5609 -0.15122 20.1411 0.503123C22.4113 3.06205 24.6773 5.62411 26.941 8.1893C27.4328 8.74658 27.4005 9.48546 26.8839 9.91438C26.3349 10.3694 25.6479 10.313 25.1238 9.72549C23.2677 7.64662 21.4234 5.55836 19.577 3.47219C19.1327 2.97021 19.1402 2.97126 18.6765 3.49723C16.8808 5.53227 15.0808 7.56522 13.2829 9.60025C12.9896 9.93212 12.6563 10.169 12.1764 10.145C11.5196 10.1137 11.0364 9.62948 11.0364 8.95426Z" fill="#038FFC"></path>
                        <path d="M16.0442 34.8738C16.0442 34.0641 16.0004 33.2496 16.054 32.4423C16.1612 30.799 17.5231 29.482 19.2042 29.4439C20.9609 29.4034 22.2668 30.6132 22.5275 32.0779C22.6079 32.5328 22.6395 33.0019 22.6395 33.464C22.6395 34.7381 22.6517 36.0146 22.5908 37.2888C22.508 38.9844 21.0242 40.3205 19.3187 40.3086C17.5694 40.2967 16.1417 38.9725 16.0589 37.2459C16.0223 36.4576 16.0515 35.6645 16.0515 34.8738C16.0515 34.8738 16.0491 34.8738 16.0467 34.8738H16.0442Z" fill="#038FFC"></path>
                    </svg>
                </span>
            </div>
        @endif
    @else
        <div class="back-to-top">
            <span>
               
            </span>
        </div>
    @endif

    <!-- back-to-top  -->

    <!-- top-to-bottom -->

    <!-- <div class="top-to-bottom">
        <span>
            <svg width="39" height="75" viewBox="0 0 39 75" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(180deg);">
                <path d="M17.235 75.0022L18.3095 74.9021C18.3095 74.8855 18.3144 74.8688 18.3168 74.8521C18.0878 74.8283 17.8612 74.7854 17.6322 74.7831C15.744 74.7759 13.9751 74.2448 12.2526 73.5542C8.50789 72.0514 5.51357 69.6293 3.26965 66.3332C1.58854 63.8612 0.51897 61.1438 0.192494 58.1906C0.0268193 56.6902 0.0195101 55.1708 0.0146374 53.6585C-0.00485375 47.2806 0.0073282 40.9028 1.90292e-05 34.5249C-0.00485375 30.6382 0.925847 27.0087 3.08205 23.7221C5.88146 19.4567 9.78943 16.6536 14.7986 15.3676C16.9281 14.8222 19.0989 14.6245 21.3014 14.8627C27.6384 15.5486 32.5185 18.5517 36.0001 23.7555C37.4546 25.9298 38.3902 28.3233 38.7678 30.8978C38.9311 32.0171 38.9847 33.1603 38.9896 34.2939C39.0066 41.1386 38.9993 47.9808 38.992 54.8255C38.992 55.8519 39.0066 56.8855 38.9092 57.9048C38.7021 60.0673 38.0735 62.1226 37.0965 64.0731C35.2741 67.7098 32.5843 70.5558 28.9809 72.5372C26.793 73.7423 24.4443 74.5235 21.9348 74.7878C21.4987 74.8331 21.0553 74.8307 20.6119 74.8902C20.7386 74.926 20.8653 74.9641 20.9919 74.9998H17.2399L17.235 75.0022ZM3.08449 44.8395H3.08692C3.08692 48.3309 3.06743 51.8223 3.09911 55.3137C3.10885 56.3973 3.18925 57.4881 3.3598 58.5574C3.7618 61.1128 4.80458 63.4301 6.40772 65.4735C9.05851 68.8553 12.5133 70.9868 16.8355 71.6989C18.8869 72.0371 20.9432 72.0228 22.9654 71.5775C26.8271 70.7249 30.0236 68.7886 32.4649 65.714C34.8891 62.6608 36.0001 59.1885 35.9831 55.3208C35.9489 48.2214 35.9684 41.1195 35.9757 34.0177C35.9757 32.7554 35.8344 31.5099 35.5372 30.2881C34.7015 26.8587 32.94 23.9674 30.1698 21.6978C26.1522 18.4041 21.5401 17.1823 16.3994 18.123C12.8374 18.7756 9.82841 20.4737 7.38959 23.1315C4.53901 26.2371 3.12103 29.8785 3.09423 34.0391C3.07231 37.64 3.08936 41.2386 3.08936 44.8395H3.08449Z" fill="#038FFC"></path>
                <path d="M38.9361 56.4846C38.9216 56.3798 38.8901 56.275 38.8901 56.1726C38.8877 48.866 38.8853 41.5593 38.8877 34.2526C38.8877 34.0478 38.9192 33.843 38.9361 33.6382V56.487V56.4846Z" fill="#038FFC"></path>
                <path d="M11.0364 8.95426C10.9997 8.54517 11.2855 8.24461 11.5541 7.94092C13.5504 5.68046 15.5488 3.42314 17.5473 1.16477C17.7576 0.926827 17.9582 0.680536 18.1815 0.455117C18.7973 -0.167918 19.5609 -0.15122 20.1411 0.503123C22.4113 3.06205 24.6773 5.62411 26.941 8.1893C27.4328 8.74658 27.4005 9.48546 26.8839 9.91438C26.3349 10.3694 25.6479 10.313 25.1238 9.72549C23.2677 7.64662 21.4234 5.55836 19.577 3.47219C19.1327 2.97021 19.1402 2.97126 18.6765 3.49723C16.8808 5.53227 15.0808 7.56522 13.2829 9.60025C12.9896 9.93212 12.6563 10.169 12.1764 10.145C11.5196 10.1137 11.0364 9.62948 11.0364 8.95426Z" fill="#038FFC"></path>
                <path d="M16.0442 34.8738C16.0442 34.0641 16.0004 33.2496 16.054 32.4423C16.1612 30.799 17.5231 29.482 19.2042 29.4439C20.9609 29.4034 22.2668 30.6132 22.5275 32.0779C22.6079 32.5328 22.6395 33.0019 22.6395 33.464C22.6395 34.7381 22.6517 36.0146 22.5908 37.2888C22.508 38.9844 21.0242 40.3205 19.3187 40.3086C17.5694 40.2967 16.1417 38.9725 16.0589 37.2459C16.0223 36.4576 16.0515 35.6645 16.0515 34.8738C16.0515 34.8738 16.0491 34.8738 16.0467 34.8738H16.0442Z" fill="#038FFC"></path>
            </svg>   
        </span>
    </div> -->
        

    <!-- top-to-bottom -->

    <!-- fontawesome  -->
    

    <!-- jquery  -->
    <script src="{{ asset('frontend/assets/fontawesome/js/all.js') }}"></script>

    <script src="{{ asset('global/jquery-3.7.1.min.js') }}"></script>


    <!-- bootstrap.bundle.min.js -->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/gaps.js') }}"></script>

    <!-- venobox.js -->
    <script src="{{ asset('frontend/assets/js/venobox.js') }}"></script>
    <!-- slick.min.js -->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <!-- aos.js -->
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
    
    <!-- custom.js -->
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
   

    <script src="{{ asset('global/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('global/sweetalert/sweetalert2@11.js') }}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js" integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA==" crossorigin="anonymous"></script>


    <script>
        @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('messege') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
        @endif
    </script>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('{{ $error }}');
            </script>
        @endforeach
    @endif


    @stack('js_section')

    <script>
        (function($) {
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            "use strict"
            $(document).ready(function () {
                $('.cookie_consent_close_btn').on('click', function(){
                    $('.cookie_consent_modal').addClass('d-none');
                });

                $('.cookie_consent_accept_btn').on('click',function() {
                    localStorage.setItem('car-listo-cookie','1');
                    $('.cookie_consent_modal').addClass('d-none');
                });

                $('.before_auth_wishlist').on("click", function(){
                    toastr.error("{{ __('translate.Please login first') }}")
                });
                
                if (localStorage.getItem('car-listo-cookie') != '1') {
                $('.cookie_consent_modal').removeClass('d-none');
                }

                $(".auct_logout").on('click',function(){
                    Swal.fire({
                        title: "{{__('Login or Register to access this page ?')}}",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: "{{__('Yes, Ok')}}",
                        cancelButtonText: "{{__('Cancel')}}",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.noConflict();
                            $.ajax({
                                url:"{{route('auct-sess-creation')}}",
                                type:'POST',
                                data:{'key':'acut_sess'},
                                success:function(data){
                                    window.location.href = "{{ url('/user/dashboard') }}";
                                }    
                            })
                            // $("#remove_car_"+id).submit();
                        }

                    })
                })

            });
        })(jQuery);

       

        // function auct_logout(){
        //     Swal.fire({
        //         title: "{{__('Login or Register to access this page ?')}}",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: "{{__('Yes, Ok')}}",
        //         cancelButtonText: "{{__('Cancel')}}",
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             $.noConflict();
        //             $.ajax({
        //                 url:"{{route('auct-sess-creation')}}",
        //                 type:'POST',
        //                 data:{'key':'acut_sess'},
        //                 success:function(data){
        //                     window.location.href = "{{ url('/user/dashboard') }}";
        //                 }    
        //             })
        //             // $("#remove_car_"+id).submit();
        //         }

        //     })
        // }

        $(document).ready(function () {
      $(".nav_texthead .nav-item a").click(function () {
        // Remove 'active' class from all <li>
        $(".nav_texthead .nav-item a").removeClass("active");

        // Add 'active' class to the clicked <li>
        $(this).addClass("active");
      });
    });
    </script>

</body>

</html>
