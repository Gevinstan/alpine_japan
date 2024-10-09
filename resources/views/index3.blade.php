@extends('layout')
@section('title')
    <!-- <title>{{ $seo_setting->seo_title }}</title> -->
    <title>Alpine Japan</title>
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{!! strip_tags(clean($seo_setting->seo_description)) !!}">

    

@endsection

@section('body-content')
<main>
    <!-- banner-part-start  -->
    <section class="banner" style="background-image: url({{  asset('japan_home/Cover1.jpg') }});"> 
            <div class="container-fluid">
                    <div class="row align-items-center text-bann">
                        <div class="col-lg-12 col-xl-7" style="margin-bottom: 100px;">
                            <div class="banner-taitel" >
                                <span style="padding-left: 10px">{{ $homepage->home3_intro_short_title }}</span>
                                <h1 style="padding-left: 10px">Simplifying Your Car</h1> 
                                <h1 style="color: #038ffc; padding-left: 10px">Buying Experience</h1>
                                <p style="padding-left: 10px">We are commited to helping you find the perfect car with confidence and ease. Start your simplified car buying experience with us today</p>
                            </div>

                            <!----- 0ld Data ----->

                            <!-- <div class="banner-search-bar" style="padding-left: 10px">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab1" data-bs-toggle="pill"
                                            data-bs-target="#pills-home1" type="button" role="tab"
                                            aria-controls="pills-home1" aria-selected="true">{{ __('translate.JDM Stock') }}</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab1" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile1" type="button" role="tab"
                                            aria-controls="pills-profile1" aria-selected="false">{{ __('translate.Buy Now Cars') }}</button>
                                    </li>
                                    <li class="nav-item" role="presentation">   
                                        <button class="nav-link" id="pills-contact-tab1" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact1" type="button" role="tab"
                                            aria-controls="pills-contact1" aria-selected="false">{{ __('translate.New Car Arrivals') }}</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent1">
                                    <div class="tab-pane fade show active" id="pills-home1" role="tabpanel"
                                        aria-labelledby="pills-home-tab1">
                                        <div class="banner-sarchber-box">
                                            <form class="banner-sarchber-box-item" action="{{ route('listings') }}">
                                        
                                                <div class="banner-sarchber-box-inner">
                                                    <select class="form-select form-select"
                                                        aria-label=".form-select example" name="brands[]">
                                                        <option selected value="">
                                                            {{ __('Brand') }} <i class="bi bi-caret-down"></i>
                                                        </option>
                                                        @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}"><i class="bi bi-caret-down-fill"></i>{{ $brand->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="banner-sarchber-box-inner">
                                                    <select class="form-select form-select"
                                                        aria-label=".form-select example" name="location">
                                                        <option selected value="">
                                                            {{ __('Model') }}
                                                        </option>
                                                        @foreach ($cities as $city)
                                                            <option {{ request()->get('location') == $city->id ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="banner-sarchber-box-inner">
                                                    <select class="form-select form-select"
                                                        aria-label=".form-select example" name="sort_by">
                                                        <option selected>{{ __('translate.Year') }}</option>
                                                        <option value="asc_to_dsc">{{ __('translate.ASC - DSC') }}</option>
                                                        <option value="dsc_to_asc">{{ __('translate.DSC - ASC') }}</option>
                                                        <option value="price_low_high">{{ Session::get('currency_icon') }}{{ __('translate.(Low-High)') }}</option>
                                                        <option value="price_high_low">{{ Session::get('currency_icon') }}{{ __('translate.(High-Low)') }}</option>
                                                    </select>
                                                </div>

                                                <div class="banner-sarchber-box-inner two">
                                                    <button type="submit" class="sarchber-box-btn">
                                                        <span>
                                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M21.9972 18.6491L24.3032 20.9551C25.2285 21.8804 25.2285 23.3807 24.3032 24.306C23.3779 25.2313 21.8776 25.2313 20.9523 24.306L18.6463 22M0.997192 11.2C0.997192 5.5667 5.56388 1 11.1972 1C16.8305 1 21.3972 5.5667 21.3972 11.2C21.3972 16.8333 16.8305 21.4 11.1972 21.4C5.56388 21.4 0.997192 16.8333 0.997192 11.2Z"
                                                                    stroke-width="1.8" stroke-linecap="round" />
                                                            </svg>
                                                        </span>

                                                        <span><p class="text-sarchber">SEARCH</p></span>
                                                    </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile1" role="tabpanel"
                                        aria-labelledby="pills-profile-tab1">
                                        <div class="banner-sarchber-box">
                                            <form class="banner-sarchber-box-item" action="{{ route('listings') }}">
                                                <div class="banner-sarchber-box-inner">
                                                    <span class="icon">
                                                        
                                                    </span>
                                                    <select class="form-select form-select"
                                                        aria-label=".form-select example" name="brands[]">
                                                        <option selected value="">
                                                            {{ __('translate.Select Brand') }}
                                                        </option>
                                                        @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="banner-sarchber-box-inner">
                                                    <span class="icon">
                                                        
                                                    </span>
                                                    <select class="form-select form-select"
                                                        aria-label=".form-select example" name="location">
                                                        <option selected value="">
                                                            {{ __('translate.Select City') }}
                                                        </option>
                                                        @foreach ($cities as $city)
                                                            <option {{ request()->get('location') == $city->id ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="banner-sarchber-box-inner">
                                                    <span class="icon">
                                                        
                                                    </span>
                                                    <select class="form-select form-select"
                                                        aria-label=".form-select example" name="sort_by">
                                                        <option selected>{{ __('translate.Sort by') }}</option>
                                                        <option value="asc_to_dsc">{{ __('translate.ASC - DSC') }}</option>
                                                        <option value="dsc_to_asc">{{ __('translate.DSC - ASC') }}</option>
                                                        <option value="price_low_high">{{ Session::get('currency_icon') }}{{ __('translate.(Low-High)') }}</option>
                                                        <option value="price_high_low">{{ Session::get('currency_icon') }}{{ __('translate.(High-Low)') }}</option>
                                                    </select>
                                                </div>

                                                <input type="hidden" name="condition[]" value="Used">

                                                <div class="banner-sarchber-box-inner two">
                                                    <button type="submit" class="sarchber-box-btn">
                                                        <span>
                                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M21.9972 18.6491L24.3032 20.9551C25.2285 21.8804 25.2285 23.3807 24.3032 24.306C23.3779 25.2313 21.8776 25.2313 20.9523 24.306L18.6463 22M0.997192 11.2C0.997192 5.5667 5.56388 1 11.1972 1C16.8305 1 21.3972 5.5667 21.3972 11.2C21.3972 16.8333 16.8305 21.4 11.1972 21.4C5.56388 21.4 0.997192 16.8333 0.997192 11.2Z"
                                                                    stroke-width="1.8" stroke-linecap="round" />
                                                            </svg>
                                                        </span>

                                                        <span><p class="text-sarchber">SEARCH</p></span>
                                                    </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact1" role="tabpanel">
                                        <div class="banner-sarchber-box">
                                            <form class="banner-sarchber-box-item" action="{{ route('listings') }}">

                                                <div class="banner-sarchber-box-inner">
                                                    <span class="icon">
                                                        
                                                    </span>
                                                    <select class="form-select form-select"
                                                        aria-label=".form-select example" name="brands[]">
                                                        <option selected value="">
                                                            {{ __('translate.Select Brand') }}
                                                        </option>
                                                        @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="banner-sarchber-box-inner">
                                                    <span class="icon">
                                                        
                                                    </span>
                                                    <select class="form-select form-select"
                                                        aria-label=".form-select example" name="location">
                                                        <option selected value="">
                                                            {{ __('translate.Select City') }}
                                                        </option>
                                                        @foreach ($cities as $city)
                                                            <option {{ request()->get('location') == $city->id ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="banner-sarchber-box-inner"> 
                                                    <span class="icon">
                                                        
                                                    </span>
                                                    <select class="form-select form-select"
                                                        aria-label=".form-select example" name="sort_by">
                                                        <option selected>{{ __('translate.Sort by') }}</option>
                                                        <option value="asc_to_dsc">{{ __('translate.ASC - DSC') }}</option>
                                                        <option value="dsc_to_asc">{{ __('translate.DSC - ASC') }}</option>
                                                        <option value="price_low_high">{{ Session::get('currency_icon') }}{{ __('translate.(Low-High)') }}</option>
                                                        <option value="price_high_low">{{ Session::get('currency_icon') }}{{ __('translate.(High-Low)') }}</option>
                                                    </select>
                                                </div>

                                                <input type="hidden" name="condition[]" value="New">

                                                <div class="banner-sarchber-box-inner two">
                                                    <button type="submit" class="sarchber-box-btn">
                                                        <span>
                                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M21.9972 18.6491L24.3032 20.9551C25.2285 21.8804 25.2285 23.3807 24.3032 24.306C23.3779 25.2313 21.8776 25.2313 20.9523 24.306L18.6463 22M0.997192 11.2C0.997192 5.5667 5.56388 1 11.1972 1C16.8305 1 21.3972 5.5667 21.3972 11.2C21.3972 16.8333 16.8305 21.4 11.1972 21.4C5.56388 21.4 0.997192 16.8333 0.997192 11.2Z"
                                                                    stroke-width="1.8" stroke-linecap="round" />
                                                            </svg>
                                                        </span>

                                                        <span><p class="text-sarchber">SEARCH</p></span>
                                                    </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="container btn-dd">
                                <div class="car-data-one btn-dc1">
                                    <p class="custom-btn1" style="font-size:18px;font-weight: 400;">JDM Stock</p>
                                </div>

                                <div class="car-data-two btn-dc1">
                                    <p class="custom-btn1" style="font-size:18px;font-weight: 400;">Buy Now Cars</p>
                                </div>

                                <div class="car-data-three btn-dc1">
                                    <p class="custom-btn1" style="font-size:18px;font-weight: 400; ">New Car Arrivals</p>
                                </div>
                            
                              <div class="btn-group" >
                                    <!-- <div class="btn-group-lg btn-dc4">
                                            <button class="btn btn-light custom-btn1 dropdown-toggle btn-rad-left" type="button" id="defaultDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                Brand
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                                <li><a class="dropdown-item" href="#">Chevrolet</a></li>
                                                <li><a class="dropdown-item" href="#">Honda</a></li>
                                                <li><a class="dropdown-item" href="#">BMW</a></li>
                                                <li><a class="dropdown-item" href="#">Hyundai</a></li>
                                                <li><a class="dropdown-item" href="#">Mercedes</a></li>
                                                <li><a class="dropdown-item" href="#">Nissan</a></li>
                                                <li><a class="dropdown-item" href="#">Renault</a></li>
                                                <li><a class="dropdown-item" href="#">Alfa Remoe</a></li>
                                            </ul>
                                    </div> -->

                                    <div class="btn-group-lg btn-dc4">
                                        <button class="btn btn-light custom-btn1 dropdown-toggle btn-rad-left" type="button" id="defaultDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            Brand
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                            <li><a class="dropdown-item" href="#" onclick="updateButtonText('Chevrolet')">Chevrolet</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateButtonText('Honda')">Honda</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateButtonText('BMW')">BMW</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateButtonText('Hyundai')">Hyundai</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateButtonText('Mercedes')">Mercedes</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateButtonText('Nissan')">Nissan</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateButtonText('Renault')">Renault</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateButtonText('Alfa Romeo')">Alfa Romeo</a></li>
                                        </ul>
                                    </div>

                                    <div class="btn-group-lg btn-dc5">
                                            <button class="btn btn-light custom-btn1 dropdown-toggle btn-rad" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" aria-expanded="false">
                                                Model
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                                                <li><a class="dropdown-item" href="#">Dhaka</a></li>
                                                <li><a class="dropdown-item" href="#">Mirpur</a></li>
                                                <li><a class="dropdown-item" href="#">Dinajpur</a></li>
                                                <li><a class="dropdown-item" href="#">Rangpur</a></li>
                                                <li><a class="dropdown-item" href="#">Rajshahi</a></li>
                                            </ul>
                                    </div>

                                    <!-- <div class="btn-group-lg btn-dc6">
                                        <button class="btn btn-light custom-btn1 dropdown-toggle btn-rad" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" aria-expanded="false">
                                            Year
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                            <li><a class="dropdown-item" href="#">ASC - DSC</a></li>
                                            <li><a class="dropdown-item" href="#">DSC - ASC</a></li>
                                            <li><a class="dropdown-item" href="#">$(Low - High)</a></li>
                                            <li><a class="dropdown-item" href="#">$(High - Low)</a></li>
                                        </ul>
                                    </div> -->

                                    <select class="btn-group-lg btn-dc6" name="cars" id="cars">
                                        <option value="volvo">Year</option>
                                        <option value="saab">ASC - DSC</option>
                                        <option value="opel">DSC - ASC</option>
                                        <option value="audi">$(Low - High)</option>
                                        <option value="audi">$(High - Low)</option>
                                    </select>

                                    <form class="btn-group btn-dc7">
                                        <div class="form-group position-relative">
                                            <input type="text" 
                                                style="background-color: #038ffc; color: white; width: 180px; height: 52px; border: none;" 
                                                class="form-control btn-rad-right" 
                                                id="exampleInputEmail1" 
                                                placeholder="         SEARCH"
                                                oninput="toggleIconVisibility(this)">
                                            <i id="searchIcon" class="bi bi-search position-absolute" style="left: 20px; top: 46%; transform: translateY(-50%); color: white;"></i>
                                        </div>
                                    </form>

                              </div>
                            </div>
                        </div>


                        <div class="col-lg-5">
                            <div class="banner-slick-main">

                                <div class="banner-slick">
                                    @foreach ($featured_cars->take(3) as $index => $car)
                                        <div class="banner-slick-thumb">
                                            <img src="{{ asset($car->thumb_image) }}" alt="thumb" >
                                            <div class="banner-slick-thumb-overlay">
                                                <div class="banner-slick-thumb-txt">
                                                    <p>{{ $car?->brand?->name }}</p>
                                                    <h6>
                                                        @if ($car->offer_price)
                                                            {{ currency($car->offer_price) }}
                                                        @else
                                                            {{ currency($car->regular_price) }}
                                                        @endif
                                                    </h6>
                                                </div>
                                                <div class="banner-slick-thumb-txt-two">
                                                    <a href="{{ route('listing', $car->slug) }}">
                                                        <h4>{{ html_decode($car->title) }}</h4>
                                                    </a>
                                                </div>
                                                <div class="banner-slick-thumb-overlay-icon-main" >
                                                    <div class="banner-slick-thumb-overlay-icon-main-item" >
                                                        <span class="banner-slick-thumb-overlay-icon">
                                                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M20 10.2935C20 7.75456 18.9535 5.45057 17.2608 3.77159C17.2476 3.7544 17.2335 3.73758 17.2175 3.72192C17.2015 3.70626 17.1843 3.69249 17.1668 3.67963C15.4505 2.02368 13.0953 1 10.5 1C7.90472 1 5.54953 2.02374 3.83318 3.67963C3.81561 3.69255 3.79848 3.70632 3.78247 3.72192C3.76646 3.73758 3.75238 3.75434 3.73918 3.77159C2.0465 5.45057 1 7.75456 1 10.2935C1 12.7755 1.98794 15.1089 3.78179 16.8642C3.78204 16.8644 3.78229 16.8647 3.78253 16.865C3.78272 16.8651 3.78285 16.8653 3.78303 16.8654C3.78328 16.8656 3.78353 16.8659 3.78378 16.8661C3.87498 16.9553 3.99452 16.9999 4.11407 16.9999C4.23368 16.9999 4.35328 16.9553 4.44448 16.866C4.45227 16.8584 4.45931 16.8503 4.46641 16.8422L5.90617 15.4337C6.08864 15.2552 6.08864 14.9658 5.90617 14.7873C5.72371 14.6089 5.42787 14.6089 5.24547 14.7873L4.12192 15.8864C2.81179 14.4602 2.05173 12.6653 1.9472 10.7505H3.53616C3.79418 10.7505 4.00337 10.546 4.00337 10.2935C4.00337 10.041 3.79418 9.83642 3.53616 9.83642H1.94732C2.05596 7.86974 2.86107 6.08137 4.12497 4.70343L5.24547 5.79958C5.33667 5.88879 5.45628 5.9334 5.57582 5.9334C5.69537 5.9334 5.81497 5.88879 5.90617 5.79958C6.08864 5.62102 6.08864 5.33167 5.90617 5.15318L4.78573 4.05697C6.19435 2.82055 8.0224 2.03295 10.0328 1.92673V3.48108C10.0328 3.73356 10.242 3.93814 10.5 3.93814C10.758 3.93814 10.9672 3.73356 10.9672 3.48108V1.92673C12.9776 2.03295 14.8056 2.82061 16.2143 4.05703L15.0938 5.15318C14.9113 5.33173 14.9113 5.62108 15.0938 5.79958C15.185 5.88879 15.3046 5.9334 15.4241 5.9334C15.5437 5.9334 15.6633 5.88879 15.7545 5.79958L16.875 4.70343C18.1389 6.08143 18.944 7.86974 19.0526 9.83642H17.4637C17.2057 9.83642 16.9965 10.041 16.9965 10.2935C16.9965 10.546 17.2057 10.7505 17.4637 10.7505H19.0527C18.9481 12.6653 18.1881 14.4603 16.878 15.8865L15.7545 14.7873C15.5721 14.6089 15.2762 14.6089 15.0938 14.7873C14.9113 14.9659 14.9113 15.2552 15.0938 15.4337L16.5568 16.8649C16.648 16.9541 16.7676 16.9987 16.8871 16.9987C16.9469 16.9987 17.0067 16.9876 17.0629 16.9653C17.1192 16.943 17.1719 16.9095 17.2175 16.8649C19.0118 15.1096 20 12.7758 20 10.2935Z" fill="#038ffc" stroke="#038ffc" stroke-width="0.2"/>
                                                                <path d="M12.6465 5.05221C12.4068 4.9583 12.135 5.07214 12.039 5.30652L10.6889 8.60341C10.626 8.59683 10.5631 8.59232 10.5001 8.59232C9.8425 8.59232 9.24852 8.94864 8.94981 9.52222C8.63759 10.1218 8.71758 10.8382 9.16361 11.4385C9.20921 11.4999 9.26652 11.556 9.32969 11.6009C9.69206 11.8586 10.0968 11.9948 10.5001 11.9948C11.1577 11.9948 11.7517 11.6385 12.0504 11.0649C12.3626 10.4653 12.2826 9.74898 11.8369 9.14914C11.7913 9.08759 11.7338 9.03128 11.6705 8.98618C11.6364 8.96193 11.6016 8.93981 11.5668 8.91775L12.9064 5.64638C13.0024 5.41213 12.886 5.14606 12.6465 5.05221ZM11.2177 10.65C11.0793 10.9156 10.8043 11.0807 10.5 11.0807C10.3004 11.0807 10.0995 11.0125 9.90268 10.8779C9.67842 10.5629 9.63437 10.2214 9.78245 9.9371C9.92075 9.67146 10.1957 9.50644 10.5001 9.50644C10.5971 9.50644 10.6944 9.52289 10.7915 9.55488C10.7947 9.55616 10.7976 9.55781 10.8008 9.55909C10.8111 9.56305 10.8213 9.56628 10.8316 9.56951C10.9207 9.60297 11.0094 9.64904 11.0974 9.70912C11.3216 10.0241 11.3657 10.3657 11.2177 10.65Z" fill="#038ffc" stroke="#038ffc" stroke-width="0.2"/>
                                                                </svg>


                                                        </span>
                                                        <h5 class="banner-slick-thumb-overlay-txt" >{{ html_decode($car->mileage) }}</h5>
                                                    </div>
                                                    <div class="banner-slick-thumb-overlay-icon-main-item">
                                                        <span class="banner-slick-thumb-overlay-icon" style="height: 50%">
                                                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.3901 3.09765L13.8901 1.76431C13.7436 1.63409 13.5063 1.63409 13.3598 1.76431C13.2133 1.89453 13.2133 2.10547 13.3598 2.23565L14.5947 3.33331L13.3598 4.43096C13.2895 4.49346 13.25 4.57809 13.25 4.66665V5.66665C13.25 6.40202 13.9227 6.99999 14.75 6.99999V12.6666C14.75 12.8505 14.5819 13 14.375 13C14.1681 13 14 12.8506 14 12.6666V12C14 11.4485 13.4953 11 12.875 11H12.5V2.33334C12.5 1.59797 11.8273 1 11 1H3.50001C2.67275 1 2.00001 1.59797 2.00001 2.33334V14.3333C1.17275 14.3333 0.5 14.9313 0.5 15.6667V16.6667C0.5 16.8509 0.66773 17 0.875011 17H13.625C13.8323 17 14 16.8509 14 16.6667V15.6667C14 14.9313 13.3273 14.3333 12.5 14.3333V11.6667H12.875C13.0819 11.6667 13.25 11.8161 13.25 12V12.6667C13.25 13.2181 13.7546 13.6667 14.375 13.6667C14.9954 13.6667 15.5 13.2181 15.5 12.6667V3.33334C15.5 3.24478 15.4604 3.16015 15.3901 3.09765ZM2.75003 2.33334C2.75003 1.96584 3.08658 1.66669 3.50001 1.66669H11C11.4134 1.66669 11.75 1.96584 11.75 2.33334V14.3333H2.74999L2.75003 2.33334ZM13.25 15.6666V16.3333H1.25002V15.6666C1.25002 15.2991 1.58657 15 2.00001 15H12.5C12.9134 15 13.25 15.2991 13.25 15.6666ZM14.75 6.33333C14.3365 6.33333 14 6.03418 14 5.66668V4.80468L14.75 4.13803V6.33333Z" fill="#038ffc" stroke="#038ffc" stroke-width="0.2"/>
                                                                <path d="M10.5416 2.52393H3.79162C3.58434 2.52393 3.41661 2.66978 3.41661 2.85003V6.76925C3.41661 6.9495 3.58434 7.09535 3.79162 7.09535H10.5416C10.7489 7.09535 10.9166 6.9495 10.9166 6.76925V2.85C10.9166 2.66978 10.7489 2.52393 10.5416 2.52393ZM10.1666 6.44314H4.16659V3.17611H10.1666V6.44314Z" fill="#038ffc" stroke="#038ffc" stroke-width="0.2"/>
                                                                </svg>

                                                        </span>
                                                        <h5 class="banner-slick-thumb-overlay-txt" >{{ html_decode($car->fuel_type) }}</h5>
                                                    </div>
                                                    <div class="banner-slick-thumb-overlay-icon-main-item">
                                                        <span class="banner-slick-thumb-overlay-icon" style="height: 50%">
                                                                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.9167 8.23819H17.2833C17.0314 8.23819 16.7897 8.3586 16.6116 8.57293C16.4334 8.78726 16.3333 9.07795 16.3333 9.38106V9.76202H15.7V7.85723C15.7 7.55412 15.5999 7.26343 15.4218 7.0491C15.2436 6.83477 15.002 6.71436 14.75 6.71436H13.8C13.716 6.71436 13.6355 6.67422 13.5761 6.60278C13.5167 6.53134 13.4833 6.43444 13.4833 6.3334V5.57149C13.4833 5.26838 13.3832 4.97769 13.2051 4.76336C13.0269 4.54903 12.7853 4.42862 12.5333 4.42862H11.2667V3.28574H12.85C13.102 3.28574 13.3436 3.16533 13.5218 2.951C13.6999 2.73667 13.8 2.44598 13.8 2.14287C13.8 1.83976 13.6999 1.54907 13.5218 1.33474C13.3436 1.12041 13.102 1 12.85 1H6.51667C6.26471 1 6.02307 1.12041 5.84491 1.33474C5.66676 1.54907 5.56667 1.83976 5.56667 2.14287C5.56667 2.44598 5.66676 2.73667 5.84491 2.951C6.02307 3.16533 6.26471 3.28574 6.51667 3.28574H8.1V4.42862H6.51667C6.26471 4.42862 6.02307 4.54903 5.84491 4.76336C5.66676 4.97769 5.56667 5.26838 5.56667 5.57149C5.56667 5.67252 5.5333 5.76942 5.47392 5.84087C5.41453 5.91231 5.33399 5.95245 5.25 5.95245H4.3C4.04804 5.95245 3.80641 6.07285 3.62825 6.28719C3.45009 6.50152 3.35 6.79221 3.35 7.09532V8.61915H2.4V7.09532C2.4 6.79221 2.29991 6.50152 2.12175 6.28719C1.94359 6.07285 1.70196 5.95245 1.45 5.95245C1.19804 5.95245 0.956408 6.07285 0.778249 6.28719C0.600089 6.50152 0.5 6.79221 0.5 7.09532L0.5 13.1906C0.5 13.4937 0.600089 13.7844 0.778249 13.9988C0.956408 14.2131 1.19804 14.3335 1.45 14.3335C1.70196 14.3335 1.94359 14.2131 2.12175 13.9988C2.29991 13.7844 2.4 13.4937 2.4 13.1906V11.6668H3.35V13.5716C3.35 13.8747 3.45009 14.1654 3.62825 14.3797C3.80641 14.5941 4.04804 14.7145 4.3 14.7145H5.62113C5.70511 14.7145 5.78564 14.7546 5.84502 14.8261L7.37388 16.6653C7.46185 16.7719 7.56651 16.8563 7.68181 16.9138C7.7971 16.9713 7.92073 17.0006 8.04553 17.0002H14.75C15.002 17.0002 15.2436 16.8798 15.4218 16.6655C15.5999 16.4511 15.7 16.1604 15.7 15.8573V14.3335H16.3333V14.7145C16.3333 15.0176 16.4334 15.3083 16.6116 15.5226C16.7897 15.7369 17.0314 15.8573 17.2833 15.8573H17.9167C18.3364 15.8567 18.7389 15.6559 19.0357 15.2988C19.3325 14.9417 19.4995 14.4575 19.5 13.9526V10.143C19.4995 9.63798 19.3325 9.15384 19.0357 8.79676C18.7389 8.43967 18.3364 8.23879 17.9167 8.23819ZM6.2 2.14287C6.2 2.04184 6.23336 1.94494 6.29275 1.87349C6.35214 1.80205 6.43268 1.76191 6.51667 1.76191H12.85C12.934 1.76191 13.0145 1.80205 13.0739 1.87349C13.1333 1.94494 13.1667 2.04184 13.1667 2.14287C13.1667 2.24391 13.1333 2.34081 13.0739 2.41225C13.0145 2.48369 12.934 2.52383 12.85 2.52383H6.51667C6.43268 2.52383 6.35214 2.48369 6.29275 2.41225C6.23336 2.34081 6.2 2.24391 6.2 2.14287ZM8.73333 3.28574H10.6333V4.42862H8.73333V3.28574ZM1.76667 13.1906C1.76667 13.2917 1.7333 13.3886 1.67392 13.46C1.61453 13.5315 1.53399 13.5716 1.45 13.5716C1.36601 13.5716 1.28547 13.5315 1.22608 13.46C1.1667 13.3886 1.13333 13.2917 1.13333 13.1906V7.09532C1.13333 6.99428 1.1667 6.89738 1.22608 6.82594C1.28547 6.7545 1.36601 6.71436 1.45 6.71436C1.53399 6.71436 1.61453 6.7545 1.67392 6.82594C1.7333 6.89738 1.76667 6.99428 1.76667 7.09532V13.1906ZM2.4 10.9049V9.38106H3.35V10.9049H2.4ZM15.0667 15.8573C15.0667 15.9584 15.0333 16.0553 14.9739 16.1267C14.9145 16.1982 14.834 16.2383 14.75 16.2383H8.04553C7.96155 16.2383 7.88102 16.1981 7.82165 16.1267L6.29278 14.2874C6.20478 14.181 6.1001 14.0966 5.98482 14.0391C5.86954 13.9816 5.74593 13.9522 5.62113 13.9526H4.3C4.21601 13.9526 4.13547 13.9124 4.07608 13.841C4.0167 13.7695 3.98333 13.6726 3.98333 13.5716V7.09532C3.98333 6.99428 4.0167 6.89738 4.07608 6.82594C4.13547 6.7545 4.21601 6.71436 4.3 6.71436H5.25C5.50196 6.71436 5.74359 6.59395 5.92175 6.37962C6.09991 6.16529 6.2 5.8746 6.2 5.57149C6.2 5.47045 6.23336 5.37355 6.29275 5.30211C6.35214 5.23067 6.43268 5.19053 6.51667 5.19053H12.5333C12.6173 5.19053 12.6979 5.23067 12.7573 5.30211C12.8166 5.37355 12.85 5.47045 12.85 5.57149V6.3334C12.85 6.63651 12.9501 6.92721 13.1282 7.14154C13.3064 7.35587 13.548 7.47627 13.8 7.47628H14.75C14.834 7.47628 14.9145 7.51641 14.9739 7.58785C15.0333 7.6593 15.0667 7.7562 15.0667 7.85723V15.8573ZM15.7 13.5716V10.5239H16.3333V13.5716H15.7ZM18.8667 13.9526C18.8667 14.2557 18.7666 14.5464 18.5884 14.7607C18.4103 14.975 18.1686 15.0954 17.9167 15.0954H17.2833C17.1993 15.0954 17.1188 15.0553 17.0594 14.9838C17 14.9124 16.9667 14.8155 16.9667 14.7145V9.38106C16.9667 9.28003 17 9.18313 17.0594 9.11168C17.1188 9.04024 17.1993 9.0001 17.2833 9.0001H17.9167C18.1686 9.0001 18.4103 9.12051 18.5884 9.33484C18.7666 9.54917 18.8667 9.83987 18.8667 10.143V13.9526Z" fill="#038ffc" stroke="#038ffc" stroke-width="0.2"/>
                                                                    </svg>
                                                        </span>
                                                        <h5 class="banner-slick-thumb-overlay-txt" >{{ html_decode($car->engine_size) }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>


                    </div>
            </div> 
    </section>
    <!-- banner-part-end -->

    <!-- Whatsapp fix -->
     <!-- <div class="whatsapp">
        <a href="https://api.whatsapp.com/send/?phone=%2B919962561981&text&type=phone_number&app_absent=0"><img src="{{  asset('japan_home/WhatsApp.png')  }}" alt="HTML tutorial" ></a>
     </div> -->
        <!-- Whatsapp fix end -->

    <!-- Categories-part-start -->
    <section class="categories  pb-120px">
        <div class="container-fluid">
            <div class="row align-items-end">
                <div class="col-lg-8 col-sm-8 col-md-12  ">
                    <div class="taitel">
                        <div class="taitel-img">
                            <span>
                                <!-- <svg width="71" height="8" viewBox="0 0 71 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6.08589C15.5 0.18137 51.5 -0.151783 70 6.42496" stroke="#46d993" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg> -->

                            </span>
                        </div>
                        <!-- <span>{{ __('translate.Brands') }}</span> -->
                    </div>

                    <div>
                        <h2 style="display: inline;">Popular</h2> 
                        <h2 style="display: inline; color: #038ffc;">Brands</h2>
                    </div>
                </div>

            </div>


            <div class="row g-3  mt-30px ">
                @foreach ($brands->take(6) as $index => $brand)
                <div class="col-xl-2 col-xl-2 col-lg-4 col-6 col-md-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="categories-logo">
                        <a href="{{ route('listings', ['brands[]' => $brand->id]) }}" class="categories-logo-thumb">
                            <img src="{{ asset('Brand/'.$brand->image) }}" alt="logo">
                        </a>
                    </div>
                </div>
                @endforeach

                <!-- <div class="col-xl-2 col-xl-2 col-lg-4 col-6 col-md-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="categories-logo">
                        <a href="{{ route('listings', ['brands[]' => $brand->id]) }}" class="categories-logo-thumb">
                            <img src="{{  asset('japan_home/benz.svg')  }}" alt="logo">
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-xl-2 col-lg-4 col-6 col-md-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="categories-logo">
                        <a href="{{ route('listings', ['brands[]' => $brand->id]) }}" class="categories-logo-thumb">
                            <img src="{{  asset('japan_home/bmw.svg')  }}" alt="logo">
                        </a>
                        
                    </div>
                </div>

                <div class="col-xl-2 col-xl-2 col-lg-4 col-6 col-md-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="categories-logo">
                        <a href="{{ route('listings', ['brands[]' => $brand->id]) }}" class="categories-logo-thumb">
                            <img src="{{ asset('japan_home/daihatsu.png') }}" alt="logo">
                        </a>
                        
                    </div>
                </div>

                <div class="col-xl-2 col-xl-2 col-lg-4 col-6 col-md-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="categories-logo">
                        <a href="{{ route('listings', ['brands[]' => $brand->id]) }}" class="categories-logo-thumb">
                            <img src="{{ asset('japan_home/honda.svg') }}" alt="logo">
                        </a>
                        
                    </div>
                </div>

                <div class="col-xl-2 col-xl-2 col-lg-4 col-6 col-md-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="categories-logo">
                        <a href="{{ route('listings', ['brands[]' => $brand->id]) }}" class="categories-logo-thumb">
                            <img src="{{ asset('japan_home/isuzu.svg') }}" alt="logo">
                        </a>
                        
                    </div>
                </div>

                <div class="col-xl-2 col-xl-2 col-lg-4 col-6 col-md-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="categories-logo">
                        <a href="{{ route('listings', ['brands[]' => $brand->id]) }}" class="categories-logo-thumb">
                            <img src="{{ asset('japan_home/jaqur.svg') }}" alt="logo">
                        </a>
                        
                    </div>
                </div>

                <div class="col-xl-2 col-xl-2 col-lg-4 col-6 col-md-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="categories-logo">
                        <a href="{{ route('listings', ['brands[]' => $brand->id]) }}" class="categories-logo-thumb">
                            <img src="{{ asset('japan_home/lambor.svg') }}" alt="logo">
                        </a>
                        
                    </div>
                </div>

                <div class="col-xl-2 col-xl-2 col-lg-4 col-6 col-md-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="categories-logo">
                        <a href="{{ route('listings', ['brands[]' => $brand->id]) }}" class="categories-logo-thumb">
                            <img src="{{ asset('japan_home/mazda.svg') }}" alt="logo">
                        </a>
                        
                    </div>
                </div>

                <div class="col-xl-2 col-xl-2 col-lg-4 col-6 col-md-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="categories-logo">
                        <a href="{{ route('listings', ['brands[]' => $brand->id]) }}" class="categories-logo-thumb">
                            <img src="{{ asset('japan_home/mitsu.svg') }}" alt="logo">
                        </a>
                        
                    </div>
                </div>

                <div class="col-xl-2 col-xl-2 col-lg-4 col-6 col-md-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="categories-logo">
                        <a href="{{ route('listings', ['brands[]' => $brand->id]) }}" class="categories-logo-thumb">
                            <img src="{{ asset('japan_home/subaru.svg') }}" alt="logo">
                        </a>
                        
                    </div>
                </div>

                <div class="col-xl-2 col-xl-2 col-lg-4 col-6 col-md-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="categories-logo">
                        <a href="{{ route('listings', ['brands[]' => $brand->id]) }}" class="categories-logo-thumb">
                            <img src="{{ asset('japan_home/suzuki.svg') }}" alt="logo">
                        </a>
                        
                    </div>
                </div>

                <div class="col-xl-2 col-xl-2 col-lg-4 col-6 col-md-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="categories-logo">
                        <a href="{{ route('listings', ['brands[]' => $brand->id]) }}" class="categories-logo-thumb">
                            <img src="{{ asset('japan_home/benz.svg') }}" alt="logo">
                        </a>
                        
                    </div>
                </div> -->
            </div>

        </div>

        <div class="container ">
            <div class="col-lg-4">
                    <div class="categories-three-view-btn" style="margin-top: 40px; margin-right: -300px">
                    <a href="{{ route('listings') }}" class="thm-btn">{{ __('translate.View All') }}</a>
                    </div>
            </div>
        </div>
    </section>
    <!-- Categories-part-end -->


<!--  Brand Car-part-start -->
    <section class="brand-car ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-car-position-img">

                    </div>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col-lg-6 col-sm-6  col-md-6">
                    <div class="taitel">
                        <div class="taitel-img">
                            <span>
                                <!-- <svg width="188" height="6" viewBox="0 0 188 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5C26.4245 1.98151 99.2187 -2.24439 187 5" stroke="#46D993" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg> -->

                            </span>
                        </div>
                        <!-- <span>{{ __('translate.verified Available Brand Car') }}</span> -->
                    </div>

                            <h2 style="display: inline;">Top Selling</h2> 
                            <h2 style="display: inline; color: #038ffc;">Cars</h2>
                </div>

                <div class="col-lg-6 col-sm-6  col-md-6">
                    <ul class="nav nav-pills " id="pills-tab23" role="tablist">
                       
                    </ul>
                </div>
            </div>

            <div class="row mt-60px">
                <div class="col-lg-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">


                            <div class="row g-5">
                                @foreach ($top_sells as $car)
                                    <div class=" col-xl-3 col-lg-5  col-sm-6 col-md-6 " style="flex: 0 0 20%;" data-aos="fade-up"
                                        data-aos-delay="50">
                                        <div class="brand-car-item">
                                            <div class="brand-car-item-img">
                                                <img src="{{ asset($car['picture']) }}" alt="thumb">

                                                <div class="brand-car-item-img-text">

                                                  

                                                    <div class="icon-main">
                                                        @guest('web')
                                                        @else
                                                            <a href="{{ route('user.add-to-wishlist', $car->id) }}" class="icon">
                                                                <span>
                                                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M9.61204 2.324L9 2.96329L8.38796 2.324C6.69786 0.558667 3.95767 0.558666 2.26757 2.324C0.577476 4.08933 0.577475 6.95151 2.26757 8.71684L7.77592 14.4704C8.45196 15.1765 9.54804 15.1765 10.2241 14.4704L15.7324 8.71684C17.4225 6.95151 17.4225 4.08934 15.7324 2.324C14.0423 0.558667 11.3021 0.558666 9.61204 2.324Z"
                                                                            stroke-width="1.3" stroke-linejoin="round"></path>
                                                                    </svg>

                                                                </span>
                                                            </a>

                                                        @endif

                                        
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="brand-car-inner">
                                                <div class="brand-car-inner-item">
                                                    <span>
                                                    @if(session('front_lang')=='en')
                                                        {{ $car['model_name_en'] }}
                                                    @else
                                                       {{ $car['model_name'] }}
                                                    @endif
                                                        
                                                    </span>
                                                    <p style="font-size:20px">
                                                    @if(session('front_lang')=='en')
                                                        {{ $car['start_price_num'] }}
                                                    @else
                                                       {{ $car['start_price'] }}
                                                    @endif
                                                    </p>
                                                </div>

                                                <a href="{{ route('listing', $car['id']) }}">
                                                    <h3 style="font-size:17px">
                                                    @if(session('front_lang')=='en')
                                                        {{ html_decode($car['model_name_en']) }}
                                                    @else
                                                        {{ html_decode($car['model_name']) }}
                                                    @endif
                                                    </h3>
                                                </a>

                                                <div class="brand-car-inner-item-main">
                                                    <div class="brand-car-inner-item-two">
                                                        <div class="brand-car-inner-item-thumb">
                                                            <span>
                                                                <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M20 10.2935C20 7.75456 18.9535 5.45057 17.2608 3.77159C17.2476 3.7544 17.2335 3.73758 17.2175 3.72192C17.2015 3.70626 17.1843 3.69249 17.1668 3.67963C15.4505 2.02368 13.0953 1 10.5 1C7.90472 1 5.54953 2.02374 3.83318 3.67963C3.81561 3.69255 3.79848 3.70632 3.78247 3.72192C3.76646 3.73758 3.75238 3.75434 3.73918 3.77159C2.0465 5.45057 1 7.75456 1 10.2935C1 12.7755 1.98794 15.1089 3.78179 16.8642C3.78204 16.8644 3.78229 16.8647 3.78253 16.865C3.78272 16.8651 3.78285 16.8653 3.78303 16.8654C3.78328 16.8656 3.78353 16.8659 3.78378 16.8661C3.87498 16.9553 3.99452 16.9999 4.11407 16.9999C4.23368 16.9999 4.35328 16.9553 4.44448 16.866C4.45227 16.8584 4.45931 16.8503 4.46641 16.8422L5.90617 15.4337C6.08864 15.2552 6.08864 14.9658 5.90617 14.7873C5.72371 14.6089 5.42787 14.6089 5.24547 14.7873L4.12192 15.8864C2.81179 14.4602 2.05173 12.6653 1.9472 10.7505H3.53616C3.79418 10.7505 4.00337 10.546 4.00337 10.2935C4.00337 10.041 3.79418 9.83642 3.53616 9.83642H1.94732C2.05596 7.86974 2.86107 6.08137 4.12497 4.70343L5.24547 5.79958C5.33667 5.88879 5.45628 5.9334 5.57582 5.9334C5.69537 5.9334 5.81497 5.88879 5.90617 5.79958C6.08864 5.62102 6.08864 5.33167 5.90617 5.15318L4.78573 4.05697C6.19435 2.82055 8.0224 2.03295 10.0328 1.92673V3.48108C10.0328 3.73356 10.242 3.93814 10.5 3.93814C10.758 3.93814 10.9672 3.73356 10.9672 3.48108V1.92673C12.9776 2.03295 14.8056 2.82061 16.2143 4.05703L15.0938 5.15318C14.9113 5.33173 14.9113 5.62108 15.0938 5.79958C15.185 5.88879 15.3046 5.9334 15.4241 5.9334C15.5437 5.9334 15.6633 5.88879 15.7545 5.79958L16.875 4.70343C18.1389 6.08143 18.944 7.86974 19.0526 9.83642H17.4637C17.2057 9.83642 16.9965 10.041 16.9965 10.2935C16.9965 10.546 17.2057 10.7505 17.4637 10.7505H19.0527C18.9481 12.6653 18.1881 14.4603 16.878 15.8865L15.7545 14.7873C15.5721 14.6089 15.2762 14.6089 15.0938 14.7873C14.9113 14.9659 14.9113 15.2552 15.0938 15.4337L16.5568 16.8649C16.648 16.9541 16.7676 16.9987 16.8871 16.9987C16.9469 16.9987 17.0067 16.9876 17.0629 16.9653C17.1192 16.943 17.1719 16.9095 17.2175 16.8649C19.0118 15.1096 20 12.7758 20 10.2935Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                    <path d="M12.6465 5.05246C12.4068 4.95855 12.135 5.07238 12.039 5.30676L10.6889 8.60366C10.626 8.59708 10.5631 8.59257 10.5001 8.59257C9.8425 8.59257 9.24852 8.94889 8.94981 9.52246C8.63759 10.1221 8.71758 10.8385 9.16361 11.4387C9.20921 11.5001 9.26652 11.5562 9.32969 11.6012C9.69206 11.8589 10.0968 11.9951 10.5001 11.9951C11.1577 11.9951 11.7517 11.6388 12.0504 11.0652C12.3626 10.4656 12.2826 9.74922 11.8369 9.14938C11.7913 9.08783 11.7338 9.03152 11.6705 8.98643C11.6364 8.96217 11.6016 8.94005 11.5668 8.91799L12.9064 5.64663C13.0024 5.41237 12.886 5.1463 12.6465 5.05246ZM11.2177 10.6502C11.0793 10.9159 10.8043 11.0809 10.5 11.0809C10.3004 11.0809 10.0995 11.0127 9.90268 10.8782C9.67842 10.5631 9.63437 10.2216 9.78245 9.93735C9.92075 9.67171 10.1957 9.50668 10.5001 9.50668C10.5971 9.50668 10.6944 9.52313 10.7915 9.55513C10.7947 9.55641 10.7976 9.55805 10.8008 9.55933C10.8111 9.56329 10.8213 9.56652 10.8316 9.56975C10.9207 9.60321 11.0094 9.64928 11.0974 9.70937C11.3216 10.0244 11.3657 10.3659 11.2177 10.6502Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                    </svg>

                                                            </span>
                                                        </div>

                                                        <span style="font-size:12px">
                                                        @if(session('front_lang')=='en')
                                                         {{ html_decode($car['mileage']) }}
                                                        @else
                                                         {{ html_decode($car['mileage_en']) }}
                                                        @endif
                                                          
                                                        </span>
                                                    </div>
                                                    <div class="brand-car-inner-item-two">
                                                        <div class="brand-car-inner-item-thumb">
                                                            <span>
                                                                <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M15.8901 3.09765L14.3901 1.76431C14.2436 1.63409 14.0063 1.63409 13.8598 1.76431C13.7133 1.89453 13.7133 2.10547 13.8598 2.23565L15.0947 3.33331L13.8598 4.43096C13.7895 4.49346 13.75 4.57809 13.75 4.66665V5.66665C13.75 6.40202 14.4227 6.99999 15.25 6.99999V12.6666C15.25 12.8505 15.0819 13 14.875 13C14.6681 13 14.5 12.8506 14.5 12.6666V12C14.5 11.4485 13.9953 11 13.375 11H13V2.33334C13 1.59797 12.3273 1 11.5 1H4.00001C3.17275 1 2.50001 1.59797 2.50001 2.33334V14.3333C1.67275 14.3333 1 14.9313 1 15.6667V16.6667C1 16.8509 1.16773 17 1.37501 17H14.125C14.3323 17 14.5 16.8509 14.5 16.6667V15.6667C14.5 14.9313 13.8273 14.3333 13 14.3333V11.6667H13.375C13.5819 11.6667 13.75 11.8161 13.75 12V12.6667C13.75 13.2181 14.2546 13.6667 14.875 13.6667C15.4954 13.6667 16 13.2181 16 12.6667V3.33334C16 3.24478 15.9604 3.16015 15.8901 3.09765ZM3.25003 2.33334C3.25003 1.96584 3.58658 1.66669 4.00001 1.66669H11.5C11.9134 1.66669 12.25 1.96584 12.25 2.33334V14.3333H3.24999L3.25003 2.33334ZM13.75 15.6666V16.3333H1.75002V15.6666C1.75002 15.2991 2.08657 15 2.50001 15H13C13.4134 15 13.75 15.2991 13.75 15.6666ZM15.25 6.33333C14.8365 6.33333 14.5 6.03418 14.5 5.66668V4.80468L15.25 4.13803V6.33333Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                    <path d="M11.041 2.52344H4.29103C4.08375 2.52344 3.91602 2.66929 3.91602 2.84954V6.76876C3.91602 6.94901 4.08375 7.09487 4.29103 7.09487H11.041C11.2483 7.09487 11.416 6.94901 11.416 6.76876V2.84951C11.416 2.66929 11.2483 2.52344 11.041 2.52344ZM10.666 6.44265H4.666V3.17562H10.666V6.44265Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                    </svg>

                                                            </span>
                                                        </div>

                                                        <span style="font-size:12px">
                                                            
                                                        </span>
                                                    </div>
                                                    <div class="brand-car-inner-item-two">
                                                        <div class="brand-car-inner-item-thumb">
                                                            <span>
                                                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.9167 8.23819H17.2833C17.0314 8.23819 16.7897 8.3586 16.6116 8.57293C16.4334 8.78726 16.3333 9.07795 16.3333 9.38106V9.76202H15.7V7.85723C15.7 7.55412 15.5999 7.26343 15.4218 7.0491C15.2436 6.83477 15.002 6.71436 14.75 6.71436H13.8C13.716 6.71436 13.6355 6.67422 13.5761 6.60278C13.5167 6.53134 13.4833 6.43444 13.4833 6.3334V5.57149C13.4833 5.26838 13.3832 4.97769 13.2051 4.76336C13.0269 4.54903 12.7853 4.42862 12.5333 4.42862H11.2667V3.28574H12.85C13.102 3.28574 13.3436 3.16533 13.5218 2.951C13.6999 2.73667 13.8 2.44598 13.8 2.14287C13.8 1.83976 13.6999 1.54907 13.5218 1.33474C13.3436 1.12041 13.102 1 12.85 1H6.51667C6.26471 1 6.02307 1.12041 5.84491 1.33474C5.66676 1.54907 5.56667 1.83976 5.56667 2.14287C5.56667 2.44598 5.66676 2.73667 5.84491 2.951C6.02307 3.16533 6.26471 3.28574 6.51667 3.28574H8.1V4.42862H6.51667C6.26471 4.42862 6.02307 4.54903 5.84491 4.76336C5.66676 4.97769 5.56667 5.26838 5.56667 5.57149C5.56667 5.67252 5.5333 5.76942 5.47392 5.84087C5.41453 5.91231 5.33399 5.95245 5.25 5.95245H4.3C4.04804 5.95245 3.80641 6.07285 3.62825 6.28719C3.45009 6.50152 3.35 6.79221 3.35 7.09532V8.61915H2.4V7.09532C2.4 6.79221 2.29991 6.50152 2.12175 6.28719C1.94359 6.07285 1.70196 5.95245 1.45 5.95245C1.19804 5.95245 0.956408 6.07285 0.778249 6.28719C0.600089 6.50152 0.5 6.79221 0.5 7.09532L0.5 13.1906C0.5 13.4937 0.600089 13.7844 0.778249 13.9988C0.956408 14.2131 1.19804 14.3335 1.45 14.3335C1.70196 14.3335 1.94359 14.2131 2.12175 13.9988C2.29991 13.7844 2.4 13.4937 2.4 13.1906V11.6668H3.35V13.5716C3.35 13.8747 3.45009 14.1654 3.62825 14.3797C3.80641 14.5941 4.04804 14.7145 4.3 14.7145H5.62113C5.70511 14.7145 5.78564 14.7546 5.84502 14.8261L7.37388 16.6653C7.46185 16.7719 7.56651 16.8563 7.68181 16.9138C7.7971 16.9713 7.92073 17.0006 8.04553 17.0002H14.75C15.002 17.0002 15.2436 16.8798 15.4218 16.6655C15.5999 16.4511 15.7 16.1604 15.7 15.8573V14.3335H16.3333V14.7145C16.3333 15.0176 16.4334 15.3083 16.6116 15.5226C16.7897 15.7369 17.0314 15.8573 17.2833 15.8573H17.9167C18.3364 15.8567 18.7389 15.6559 19.0357 15.2988C19.3325 14.9417 19.4995 14.4575 19.5 13.9526V10.143C19.4995 9.63798 19.3325 9.15384 19.0357 8.79676C18.7389 8.43967 18.3364 8.23879 17.9167 8.23819ZM6.2 2.14287C6.2 2.04184 6.23336 1.94494 6.29275 1.87349C6.35214 1.80205 6.43268 1.76191 6.51667 1.76191H12.85C12.934 1.76191 13.0145 1.80205 13.0739 1.87349C13.1333 1.94494 13.1667 2.04184 13.1667 2.14287C13.1667 2.24391 13.1333 2.34081 13.0739 2.41225C13.0145 2.48369 12.934 2.52383 12.85 2.52383H6.51667C6.43268 2.52383 6.35214 2.48369 6.29275 2.41225C6.23336 2.34081 6.2 2.24391 6.2 2.14287ZM8.73333 3.28574H10.6333V4.42862H8.73333V3.28574ZM1.76667 13.1906C1.76667 13.2917 1.7333 13.3886 1.67392 13.46C1.61453 13.5315 1.53399 13.5716 1.45 13.5716C1.36601 13.5716 1.28547 13.5315 1.22608 13.46C1.1667 13.3886 1.13333 13.2917 1.13333 13.1906V7.09532C1.13333 6.99428 1.1667 6.89738 1.22608 6.82594C1.28547 6.7545 1.36601 6.71436 1.45 6.71436C1.53399 6.71436 1.61453 6.7545 1.67392 6.82594C1.7333 6.89738 1.76667 6.99428 1.76667 7.09532V13.1906ZM2.4 10.9049V9.38106H3.35V10.9049H2.4ZM15.0667 15.8573C15.0667 15.9584 15.0333 16.0553 14.9739 16.1267C14.9145 16.1982 14.834 16.2383 14.75 16.2383H8.04553C7.96155 16.2383 7.88102 16.1981 7.82165 16.1267L6.29278 14.2874C6.20478 14.181 6.1001 14.0966 5.98482 14.0391C5.86954 13.9816 5.74593 13.9522 5.62113 13.9526H4.3C4.21601 13.9526 4.13547 13.9124 4.07608 13.841C4.0167 13.7695 3.98333 13.6726 3.98333 13.5716V7.09532C3.98333 6.99428 4.0167 6.89738 4.07608 6.82594C4.13547 6.7545 4.21601 6.71436 4.3 6.71436H5.25C5.50196 6.71436 5.74359 6.59395 5.92175 6.37962C6.09991 6.16529 6.2 5.8746 6.2 5.57149C6.2 5.47045 6.23336 5.37355 6.29275 5.30211C6.35214 5.23067 6.43268 5.19053 6.51667 5.19053H12.5333C12.6173 5.19053 12.6979 5.23067 12.7573 5.30211C12.8166 5.37355 12.85 5.47045 12.85 5.57149V6.3334C12.85 6.63651 12.9501 6.92721 13.1282 7.14154C13.3064 7.35587 13.548 7.47627 13.8 7.47628H14.75C14.834 7.47628 14.9145 7.51641 14.9739 7.58785C15.0333 7.6593 15.0667 7.7562 15.0667 7.85723V15.8573ZM15.7 13.5716V10.5239H16.3333V13.5716H15.7ZM18.8667 13.9526C18.8667 14.2557 18.7666 14.5464 18.5884 14.7607C18.4103 14.975 18.1686 15.0954 17.9167 15.0954H17.2833C17.1993 15.0954 17.1188 15.0553 17.0594 14.9838C17 14.9124 16.9667 14.8155 16.9667 14.7145V9.38106C16.9667 9.28003 17 9.18313 17.0594 9.11168C17.1188 9.04024 17.1993 9.0001 17.2833 9.0001H17.9167C18.1686 9.0001 18.4103 9.12051 18.5884 9.33484C18.7666 9.54917 18.8667 9.83987 18.8667 10.143V13.9526Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                    </svg>

                                                            </span>
                                                        </div>

                                                        <span style="font-size:12px">
                                                          
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="brand-car-btm-txt-btm" >
                                                    <h6 style="font-size:12px; word-spacing: 8px;" class="brand-car-btm-txt"><span><i class="bi bi-geo-alt-fill"></i> Hyogo,Japan&nbsp; &nbsp; &nbsp;     2024-02-02</span></h6>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">


                            <!-- <div class="row g-5">
                                @foreach ($used_cars as $car)
                                <div class="col-xl-3 col-lg-4  col-sm-6 col-md-6">
                                    <div class="brand-car-item">
                                        <div class="brand-car-item-img">
                                            <img src="{{ asset($car->thumb_image) }}" alt="thumb">

                                            <div class="brand-car-item-img-text">

                                                <div class="text-df">
                                                    @if ($car->offer_price)
                                                        <p class="text">{{ calculate_percentage($car->regular_price, $car->offer_price) }}% {{ __('translate.Off') }}</p>
                                                    @endif

                                                    @if ($car->condition == 'New')
                                                        <p class="text text-two ">{{ __('translate.New') }}</p>
                                                    @else
                                                        <p class="text text-two ">{{ __('translate.Used') }}</p>
                                                    @endif
                                                </div>

                                                <div class="icon-main">

                                                    @guest('web')
                                                        <a  href="javascript:;" class="icon before_auth_wishlist">
                                                            <span>
                                                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.61204 2.324L9 2.96329L8.38796 2.324C6.69786 0.558667 3.95767 0.558666 2.26757 2.324C0.577476 4.08933 0.577475 6.95151 2.26757 8.71684L7.77592 14.4704C8.45196 15.1765 9.54804 15.1765 10.2241 14.4704L15.7324 8.71684C17.4225 6.95151 17.4225 4.08934 15.7324 2.324C14.0423 0.558667 11.3021 0.558666 9.61204 2.324Z"
                                                                stroke-width="1.3" stroke-linejoin="round"></path>
                                                        </svg>

                                                            </span>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('user.add-to-wishlist', $car->id) }}" class="icon">
                                                            <span>
                                                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.61204 2.324L9 2.96329L8.38796 2.324C6.69786 0.558667 3.95767 0.558666 2.26757 2.324C0.577476 4.08933 0.577475 6.95151 2.26757 8.71684L7.77592 14.4704C8.45196 15.1765 9.54804 15.1765 10.2241 14.4704L15.7324 8.71684C17.4225 6.95151 17.4225 4.08934 15.7324 2.324C14.0423 0.558667 11.3021 0.558666 9.61204 2.324Z"
                                                                stroke-width="1.3" stroke-linejoin="round"></path>
                                                        </svg>

                                                            </span>
                                                        </a>

                                                    @endif


                                                    <a href="{{ route('add-to-compare', $car->id) }}" class="icon">
                                                        <span>
                                                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 10V9C1 6.23858 3.23858 4 6 4H17L14 1"
                                                                    stroke-width="1.3" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M17 10V11C17 13.7614 14.7614 16 12 16H1L4 19"
                                                                    stroke-width="1.3" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="brand-car-inner">
                                            <div class="brand-car-inner-item">
                                                <span>{{ $car?->brand?->name }}</span>
                                                <p>
                                                    @if ($car->offer_price)
                                                        {{ currency($car->offer_price) }}
                                                    @else
                                                        {{ currency($car->regular_price) }}
                                                    @endif
                                                </p>
                                            </div>

                                            <a href="{{ route('listing', $car->slug) }}">
                                                <h3>{{ html_decode($car->title) }}</h3>
                                            </a>

                                            <div class="brand-car-inner-item-main">
                                                <div class="brand-car-inner-item-two">
                                                    <div class="brand-car-inner-item-thumb">
                                                        <span>
                                                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M20 10.2935C20 7.75456 18.9535 5.45057 17.2608 3.77159C17.2476 3.7544 17.2335 3.73758 17.2175 3.72192C17.2015 3.70626 17.1843 3.69249 17.1668 3.67963C15.4505 2.02368 13.0953 1 10.5 1C7.90472 1 5.54953 2.02374 3.83318 3.67963C3.81561 3.69255 3.79848 3.70632 3.78247 3.72192C3.76646 3.73758 3.75238 3.75434 3.73918 3.77159C2.0465 5.45057 1 7.75456 1 10.2935C1 12.7755 1.98794 15.1089 3.78179 16.8642C3.78204 16.8644 3.78229 16.8647 3.78253 16.865C3.78272 16.8651 3.78285 16.8653 3.78303 16.8654C3.78328 16.8656 3.78353 16.8659 3.78378 16.8661C3.87498 16.9553 3.99452 16.9999 4.11407 16.9999C4.23368 16.9999 4.35328 16.9553 4.44448 16.866C4.45227 16.8584 4.45931 16.8503 4.46641 16.8422L5.90617 15.4337C6.08864 15.2552 6.08864 14.9658 5.90617 14.7873C5.72371 14.6089 5.42787 14.6089 5.24547 14.7873L4.12192 15.8864C2.81179 14.4602 2.05173 12.6653 1.9472 10.7505H3.53616C3.79418 10.7505 4.00337 10.546 4.00337 10.2935C4.00337 10.041 3.79418 9.83642 3.53616 9.83642H1.94732C2.05596 7.86974 2.86107 6.08137 4.12497 4.70343L5.24547 5.79958C5.33667 5.88879 5.45628 5.9334 5.57582 5.9334C5.69537 5.9334 5.81497 5.88879 5.90617 5.79958C6.08864 5.62102 6.08864 5.33167 5.90617 5.15318L4.78573 4.05697C6.19435 2.82055 8.0224 2.03295 10.0328 1.92673V3.48108C10.0328 3.73356 10.242 3.93814 10.5 3.93814C10.758 3.93814 10.9672 3.73356 10.9672 3.48108V1.92673C12.9776 2.03295 14.8056 2.82061 16.2143 4.05703L15.0938 5.15318C14.9113 5.33173 14.9113 5.62108 15.0938 5.79958C15.185 5.88879 15.3046 5.9334 15.4241 5.9334C15.5437 5.9334 15.6633 5.88879 15.7545 5.79958L16.875 4.70343C18.1389 6.08143 18.944 7.86974 19.0526 9.83642H17.4637C17.2057 9.83642 16.9965 10.041 16.9965 10.2935C16.9965 10.546 17.2057 10.7505 17.4637 10.7505H19.0527C18.9481 12.6653 18.1881 14.4603 16.878 15.8865L15.7545 14.7873C15.5721 14.6089 15.2762 14.6089 15.0938 14.7873C14.9113 14.9659 14.9113 15.2552 15.0938 15.4337L16.5568 16.8649C16.648 16.9541 16.7676 16.9987 16.8871 16.9987C16.9469 16.9987 17.0067 16.9876 17.0629 16.9653C17.1192 16.943 17.1719 16.9095 17.2175 16.8649C19.0118 15.1096 20 12.7758 20 10.2935Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                <path d="M12.6465 5.05246C12.4068 4.95855 12.135 5.07238 12.039 5.30676L10.6889 8.60366C10.626 8.59708 10.5631 8.59257 10.5001 8.59257C9.8425 8.59257 9.24852 8.94889 8.94981 9.52246C8.63759 10.1221 8.71758 10.8385 9.16361 11.4387C9.20921 11.5001 9.26652 11.5562 9.32969 11.6012C9.69206 11.8589 10.0968 11.9951 10.5001 11.9951C11.1577 11.9951 11.7517 11.6388 12.0504 11.0652C12.3626 10.4656 12.2826 9.74922 11.8369 9.14938C11.7913 9.08783 11.7338 9.03152 11.6705 8.98643C11.6364 8.96217 11.6016 8.94005 11.5668 8.91799L12.9064 5.64663C13.0024 5.41237 12.886 5.1463 12.6465 5.05246ZM11.2177 10.6502C11.0793 10.9159 10.8043 11.0809 10.5 11.0809C10.3004 11.0809 10.0995 11.0127 9.90268 10.8782C9.67842 10.5631 9.63437 10.2216 9.78245 9.93735C9.92075 9.67171 10.1957 9.50668 10.5001 9.50668C10.5971 9.50668 10.6944 9.52313 10.7915 9.55513C10.7947 9.55641 10.7976 9.55805 10.8008 9.55933C10.8111 9.56329 10.8213 9.56652 10.8316 9.56975C10.9207 9.60321 11.0094 9.64928 11.0974 9.70937C11.3216 10.0244 11.3657 10.3659 11.2177 10.6502Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                </svg>

                                                        </span>
                                                    </div>

                                                    <span>
                                                        {{ html_decode($car->mileage) }}
                                                    </span>
                                                </div>
                                                <div class="brand-car-inner-item-two">
                                                    <div class="brand-car-inner-item-thumb">
                                                        <span>
                                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.8901 3.09765L14.3901 1.76431C14.2436 1.63409 14.0063 1.63409 13.8598 1.76431C13.7133 1.89453 13.7133 2.10547 13.8598 2.23565L15.0947 3.33331L13.8598 4.43096C13.7895 4.49346 13.75 4.57809 13.75 4.66665V5.66665C13.75 6.40202 14.4227 6.99999 15.25 6.99999V12.6666C15.25 12.8505 15.0819 13 14.875 13C14.6681 13 14.5 12.8506 14.5 12.6666V12C14.5 11.4485 13.9953 11 13.375 11H13V2.33334C13 1.59797 12.3273 1 11.5 1H4.00001C3.17275 1 2.50001 1.59797 2.50001 2.33334V14.3333C1.67275 14.3333 1 14.9313 1 15.6667V16.6667C1 16.8509 1.16773 17 1.37501 17H14.125C14.3323 17 14.5 16.8509 14.5 16.6667V15.6667C14.5 14.9313 13.8273 14.3333 13 14.3333V11.6667H13.375C13.5819 11.6667 13.75 11.8161 13.75 12V12.6667C13.75 13.2181 14.2546 13.6667 14.875 13.6667C15.4954 13.6667 16 13.2181 16 12.6667V3.33334C16 3.24478 15.9604 3.16015 15.8901 3.09765ZM3.25003 2.33334C3.25003 1.96584 3.58658 1.66669 4.00001 1.66669H11.5C11.9134 1.66669 12.25 1.96584 12.25 2.33334V14.3333H3.24999L3.25003 2.33334ZM13.75 15.6666V16.3333H1.75002V15.6666C1.75002 15.2991 2.08657 15 2.50001 15H13C13.4134 15 13.75 15.2991 13.75 15.6666ZM15.25 6.33333C14.8365 6.33333 14.5 6.03418 14.5 5.66668V4.80468L15.25 4.13803V6.33333Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                <path d="M11.041 2.52344H4.29103C4.08375 2.52344 3.91602 2.66929 3.91602 2.84954V6.76876C3.91602 6.94901 4.08375 7.09487 4.29103 7.09487H11.041C11.2483 7.09487 11.416 6.94901 11.416 6.76876V2.84951C11.416 2.66929 11.2483 2.52344 11.041 2.52344ZM10.666 6.44265H4.666V3.17562H10.666V6.44265Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                </svg>

                                                        </span>
                                                    </div>

                                                    <span>
                                                        {{ html_decode($car->fuel_type) }}
                                                    </span>
                                                </div>
                                                <div class="brand-car-inner-item-two">
                                                    <div class="brand-car-inner-item-thumb">
                                                        <span>
                                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17.9167 8.23819H17.2833C17.0314 8.23819 16.7897 8.3586 16.6116 8.57293C16.4334 8.78726 16.3333 9.07795 16.3333 9.38106V9.76202H15.7V7.85723C15.7 7.55412 15.5999 7.26343 15.4218 7.0491C15.2436 6.83477 15.002 6.71436 14.75 6.71436H13.8C13.716 6.71436 13.6355 6.67422 13.5761 6.60278C13.5167 6.53134 13.4833 6.43444 13.4833 6.3334V5.57149C13.4833 5.26838 13.3832 4.97769 13.2051 4.76336C13.0269 4.54903 12.7853 4.42862 12.5333 4.42862H11.2667V3.28574H12.85C13.102 3.28574 13.3436 3.16533 13.5218 2.951C13.6999 2.73667 13.8 2.44598 13.8 2.14287C13.8 1.83976 13.6999 1.54907 13.5218 1.33474C13.3436 1.12041 13.102 1 12.85 1H6.51667C6.26471 1 6.02307 1.12041 5.84491 1.33474C5.66676 1.54907 5.56667 1.83976 5.56667 2.14287C5.56667 2.44598 5.66676 2.73667 5.84491 2.951C6.02307 3.16533 6.26471 3.28574 6.51667 3.28574H8.1V4.42862H6.51667C6.26471 4.42862 6.02307 4.54903 5.84491 4.76336C5.66676 4.97769 5.56667 5.26838 5.56667 5.57149C5.56667 5.67252 5.5333 5.76942 5.47392 5.84087C5.41453 5.91231 5.33399 5.95245 5.25 5.95245H4.3C4.04804 5.95245 3.80641 6.07285 3.62825 6.28719C3.45009 6.50152 3.35 6.79221 3.35 7.09532V8.61915H2.4V7.09532C2.4 6.79221 2.29991 6.50152 2.12175 6.28719C1.94359 6.07285 1.70196 5.95245 1.45 5.95245C1.19804 5.95245 0.956408 6.07285 0.778249 6.28719C0.600089 6.50152 0.5 6.79221 0.5 7.09532L0.5 13.1906C0.5 13.4937 0.600089 13.7844 0.778249 13.9988C0.956408 14.2131 1.19804 14.3335 1.45 14.3335C1.70196 14.3335 1.94359 14.2131 2.12175 13.9988C2.29991 13.7844 2.4 13.4937 2.4 13.1906V11.6668H3.35V13.5716C3.35 13.8747 3.45009 14.1654 3.62825 14.3797C3.80641 14.5941 4.04804 14.7145 4.3 14.7145H5.62113C5.70511 14.7145 5.78564 14.7546 5.84502 14.8261L7.37388 16.6653C7.46185 16.7719 7.56651 16.8563 7.68181 16.9138C7.7971 16.9713 7.92073 17.0006 8.04553 17.0002H14.75C15.002 17.0002 15.2436 16.8798 15.4218 16.6655C15.5999 16.4511 15.7 16.1604 15.7 15.8573V14.3335H16.3333V14.7145C16.3333 15.0176 16.4334 15.3083 16.6116 15.5226C16.7897 15.7369 17.0314 15.8573 17.2833 15.8573H17.9167C18.3364 15.8567 18.7389 15.6559 19.0357 15.2988C19.3325 14.9417 19.4995 14.4575 19.5 13.9526V10.143C19.4995 9.63798 19.3325 9.15384 19.0357 8.79676C18.7389 8.43967 18.3364 8.23879 17.9167 8.23819ZM6.2 2.14287C6.2 2.04184 6.23336 1.94494 6.29275 1.87349C6.35214 1.80205 6.43268 1.76191 6.51667 1.76191H12.85C12.934 1.76191 13.0145 1.80205 13.0739 1.87349C13.1333 1.94494 13.1667 2.04184 13.1667 2.14287C13.1667 2.24391 13.1333 2.34081 13.0739 2.41225C13.0145 2.48369 12.934 2.52383 12.85 2.52383H6.51667C6.43268 2.52383 6.35214 2.48369 6.29275 2.41225C6.23336 2.34081 6.2 2.24391 6.2 2.14287ZM8.73333 3.28574H10.6333V4.42862H8.73333V3.28574ZM1.76667 13.1906C1.76667 13.2917 1.7333 13.3886 1.67392 13.46C1.61453 13.5315 1.53399 13.5716 1.45 13.5716C1.36601 13.5716 1.28547 13.5315 1.22608 13.46C1.1667 13.3886 1.13333 13.2917 1.13333 13.1906V7.09532C1.13333 6.99428 1.1667 6.89738 1.22608 6.82594C1.28547 6.7545 1.36601 6.71436 1.45 6.71436C1.53399 6.71436 1.61453 6.7545 1.67392 6.82594C1.7333 6.89738 1.76667 6.99428 1.76667 7.09532V13.1906ZM2.4 10.9049V9.38106H3.35V10.9049H2.4ZM15.0667 15.8573C15.0667 15.9584 15.0333 16.0553 14.9739 16.1267C14.9145 16.1982 14.834 16.2383 14.75 16.2383H8.04553C7.96155 16.2383 7.88102 16.1981 7.82165 16.1267L6.29278 14.2874C6.20478 14.181 6.1001 14.0966 5.98482 14.0391C5.86954 13.9816 5.74593 13.9522 5.62113 13.9526H4.3C4.21601 13.9526 4.13547 13.9124 4.07608 13.841C4.0167 13.7695 3.98333 13.6726 3.98333 13.5716V7.09532C3.98333 6.99428 4.0167 6.89738 4.07608 6.82594C4.13547 6.7545 4.21601 6.71436 4.3 6.71436H5.25C5.50196 6.71436 5.74359 6.59395 5.92175 6.37962C6.09991 6.16529 6.2 5.8746 6.2 5.57149C6.2 5.47045 6.23336 5.37355 6.29275 5.30211C6.35214 5.23067 6.43268 5.19053 6.51667 5.19053H12.5333C12.6173 5.19053 12.6979 5.23067 12.7573 5.30211C12.8166 5.37355 12.85 5.47045 12.85 5.57149V6.3334C12.85 6.63651 12.9501 6.92721 13.1282 7.14154C13.3064 7.35587 13.548 7.47627 13.8 7.47628H14.75C14.834 7.47628 14.9145 7.51641 14.9739 7.58785C15.0333 7.6593 15.0667 7.7562 15.0667 7.85723V15.8573ZM15.7 13.5716V10.5239H16.3333V13.5716H15.7ZM18.8667 13.9526C18.8667 14.2557 18.7666 14.5464 18.5884 14.7607C18.4103 14.975 18.1686 15.0954 17.9167 15.0954H17.2833C17.1993 15.0954 17.1188 15.0553 17.0594 14.9838C17 14.9124 16.9667 14.8155 16.9667 14.7145V9.38106C16.9667 9.28003 17 9.18313 17.0594 9.11168C17.1188 9.04024 17.1993 9.0001 17.2833 9.0001H17.9167C18.1686 9.0001 18.4103 9.12051 18.5884 9.33484C18.7666 9.54917 18.8667 9.83987 18.8667 10.143V13.9526Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                </svg>

                                                        </span>
                                                    </div>

                                                    <span>
                                                        {{ html_decode($car->engine_size) }}
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="brand-car-btm-txt-btm">
                                            <h6 class="brand-car-btm-txt"><span><i class="bi bi-geo-alt-fill"></i> Hyogo, Japan&nbsp; &nbsp; &nbsp;     2024-02-02</span></h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endforeach

                            </div> -->
                        </div>
                    </div>
                    <div class="brand-car-btn mt-48px">
                        <a href="{{ route('listings') }}" class="thm-btn">{{ __('SEE ALL') }}</a>
                    </div>
                </div>
            </div>

            
        </div>
    </section>
<!--  Brand Car-part-end -->

<!--  Brand New Cars -part-start -->
    <section class="brand-car ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-car-position-img">

                    </div>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col-lg-6 col-sm-6  col-md-6">
                    <div class="taitel">
                        <div class="taitel-img">
                            <span>
                                <!-- <svg width="188" height="6" viewBox="0 0 188 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5C26.4245 1.98151 99.2187 -2.24439 187 5" stroke="#46D993" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg> -->

                            </span>
                        </div>
                        <!-- <span>{{ __('translate.verified Available Brand Car') }}</span> -->
                    </div>

                            <h2 style="display: inline;">Brand New</h2> 
                            <h2 style="display: inline; color: #038ffc;">Cars</h2>
                </div>

                <div class="col-lg-6 col-sm-6  col-md-6">
                    <ul class="nav nav-pills " id="pills-tab23" role="tablist">
                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">{{ __('translate.New Car') }}</button>
                        </li> -->
                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">{{ __('translate.Used Car') }}</button>
                        </li> -->
                    </ul>
                </div>
            </div>

            <div class="row mt-60px">
                <div class="col-lg-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">


                            <div class="row g-5">
                                @foreach ($new_cars as $car)
                                    <div class=" col-xl-3 col-lg-5  col-sm-6 col-md-6 " style="flex: 0 0 20%;" data-aos="fade-up"
                                        data-aos-delay="50">
                                        <div class="brand-car-item">
                                            <div class="brand-car-item-img">
                                                <img src="{{ asset($car->thumb_image) }}" alt="thumb">

                                                <div class="brand-car-item-img-text">

                                                    <div class="text-df">
                                                        @if ($car->offer_price)
                                                            <p class="text">{{ calculate_percentage($car->regular_price, $car->offer_price) }}% {{ __('translate.Off') }}</p>
                                                        @endif

                                                        @if ($car->condition == 'New')
                                                            <!-- <p class="text text-two ">{{ __('translate.New') }}</p> -->
                                                        @else
                                                            <!-- <p class="text text-two ">{{ __('translate.Used') }}</p> -->
                                                        @endif
                                                    </div>

                                                    <div class="icon-main">
                                                        @guest('web')

                                                        <!-- <span style="position: relative; display: inline-block;">
                                                            <i style="color: #FFA800; font-size: 28px;" class="bi bi-star-fill"></i>
                                                            <span style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 12px; color: white;"><b>4</b></span>
                                                        </span> -->
                                                            <!-- <a  href="javascript:;" class="icon before_auth_wishlist">
                                                                <span>
                                                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M9.61204 2.324L9 2.96329L8.38796 2.324C6.69786 0.558667 3.95767 0.558666 2.26757 2.324C0.577476 4.08933 0.577475 6.95151 2.26757 8.71684L7.77592 14.4704C8.45196 15.1765 9.54804 15.1765 10.2241 14.4704L15.7324 8.71684C17.4225 6.95151 17.4225 4.08934 15.7324 2.324C14.0423 0.558667 11.3021 0.558666 9.61204 2.324Z"
                                                                            stroke-width="1.3" stroke-linejoin="round"></path>
                                                                    </svg>

                                                                </span>
                                                            </a> -->
                                                        @else
                                                            <a href="{{ route('user.add-to-wishlist', $car->id) }}" class="icon">
                                                                <span>
                                                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M9.61204 2.324L9 2.96329L8.38796 2.324C6.69786 0.558667 3.95767 0.558666 2.26757 2.324C0.577476 4.08933 0.577475 6.95151 2.26757 8.71684L7.77592 14.4704C8.45196 15.1765 9.54804 15.1765 10.2241 14.4704L15.7324 8.71684C17.4225 6.95151 17.4225 4.08934 15.7324 2.324C14.0423 0.558667 11.3021 0.558666 9.61204 2.324Z"
                                                                            stroke-width="1.3" stroke-linejoin="round"></path>
                                                                    </svg>

                                                                </span>
                                                            </a>

                                                        @endif

                                                        
                                                        <!-- <a href="{{ route('add-to-compare', $car->id) }}" class="icon"> -->

                                                        <!-- <span style="position: relative; display: inline-block; padding-top: 220px">
                                                            <i style="color: red; font-size: 24px;" class="bi bi-heart-fill"></i>
                                                        </span> -->
                                                            <!-- <span>
                                                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M1 10V9C1 6.23858 3.23858 4 6 4H17L14 1"
                                                                        stroke-width="1.3" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M17 10V11C17 13.7614 14.7614 16 12 16H1L4 19"
                                                                        stroke-width="1.3" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span> -->
                                                        <!-- </a> -->
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="brand-car-inner">
                                                <div class="brand-car-inner-item">
                                                    <span>{{ $car?->brand?->name }}</span>
                                                    <p style="font-size:20px">
                                                        @if ($car->offer_price)
                                                            {{ currency($car->offer_price) }}
                                                        @else
                                                            {{ currency($car->regular_price) }}
                                                        @endif
                                                    </p>
                                                </div>

                                                <a href="{{ route('listing', $car->slug) }}">
                                                    <h3 style="font-size:17px">{{ html_decode($car->title) }}</h3>
                                                </a>

                                                <div class="brand-car-inner-item-main">
                                                    <div class="brand-car-inner-item-two">
                                                        <div class="brand-car-inner-item-thumb">
                                                            <span>
                                                                <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M20 10.2935C20 7.75456 18.9535 5.45057 17.2608 3.77159C17.2476 3.7544 17.2335 3.73758 17.2175 3.72192C17.2015 3.70626 17.1843 3.69249 17.1668 3.67963C15.4505 2.02368 13.0953 1 10.5 1C7.90472 1 5.54953 2.02374 3.83318 3.67963C3.81561 3.69255 3.79848 3.70632 3.78247 3.72192C3.76646 3.73758 3.75238 3.75434 3.73918 3.77159C2.0465 5.45057 1 7.75456 1 10.2935C1 12.7755 1.98794 15.1089 3.78179 16.8642C3.78204 16.8644 3.78229 16.8647 3.78253 16.865C3.78272 16.8651 3.78285 16.8653 3.78303 16.8654C3.78328 16.8656 3.78353 16.8659 3.78378 16.8661C3.87498 16.9553 3.99452 16.9999 4.11407 16.9999C4.23368 16.9999 4.35328 16.9553 4.44448 16.866C4.45227 16.8584 4.45931 16.8503 4.46641 16.8422L5.90617 15.4337C6.08864 15.2552 6.08864 14.9658 5.90617 14.7873C5.72371 14.6089 5.42787 14.6089 5.24547 14.7873L4.12192 15.8864C2.81179 14.4602 2.05173 12.6653 1.9472 10.7505H3.53616C3.79418 10.7505 4.00337 10.546 4.00337 10.2935C4.00337 10.041 3.79418 9.83642 3.53616 9.83642H1.94732C2.05596 7.86974 2.86107 6.08137 4.12497 4.70343L5.24547 5.79958C5.33667 5.88879 5.45628 5.9334 5.57582 5.9334C5.69537 5.9334 5.81497 5.88879 5.90617 5.79958C6.08864 5.62102 6.08864 5.33167 5.90617 5.15318L4.78573 4.05697C6.19435 2.82055 8.0224 2.03295 10.0328 1.92673V3.48108C10.0328 3.73356 10.242 3.93814 10.5 3.93814C10.758 3.93814 10.9672 3.73356 10.9672 3.48108V1.92673C12.9776 2.03295 14.8056 2.82061 16.2143 4.05703L15.0938 5.15318C14.9113 5.33173 14.9113 5.62108 15.0938 5.79958C15.185 5.88879 15.3046 5.9334 15.4241 5.9334C15.5437 5.9334 15.6633 5.88879 15.7545 5.79958L16.875 4.70343C18.1389 6.08143 18.944 7.86974 19.0526 9.83642H17.4637C17.2057 9.83642 16.9965 10.041 16.9965 10.2935C16.9965 10.546 17.2057 10.7505 17.4637 10.7505H19.0527C18.9481 12.6653 18.1881 14.4603 16.878 15.8865L15.7545 14.7873C15.5721 14.6089 15.2762 14.6089 15.0938 14.7873C14.9113 14.9659 14.9113 15.2552 15.0938 15.4337L16.5568 16.8649C16.648 16.9541 16.7676 16.9987 16.8871 16.9987C16.9469 16.9987 17.0067 16.9876 17.0629 16.9653C17.1192 16.943 17.1719 16.9095 17.2175 16.8649C19.0118 15.1096 20 12.7758 20 10.2935Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                    <path d="M12.6465 5.05246C12.4068 4.95855 12.135 5.07238 12.039 5.30676L10.6889 8.60366C10.626 8.59708 10.5631 8.59257 10.5001 8.59257C9.8425 8.59257 9.24852 8.94889 8.94981 9.52246C8.63759 10.1221 8.71758 10.8385 9.16361 11.4387C9.20921 11.5001 9.26652 11.5562 9.32969 11.6012C9.69206 11.8589 10.0968 11.9951 10.5001 11.9951C11.1577 11.9951 11.7517 11.6388 12.0504 11.0652C12.3626 10.4656 12.2826 9.74922 11.8369 9.14938C11.7913 9.08783 11.7338 9.03152 11.6705 8.98643C11.6364 8.96217 11.6016 8.94005 11.5668 8.91799L12.9064 5.64663C13.0024 5.41237 12.886 5.1463 12.6465 5.05246ZM11.2177 10.6502C11.0793 10.9159 10.8043 11.0809 10.5 11.0809C10.3004 11.0809 10.0995 11.0127 9.90268 10.8782C9.67842 10.5631 9.63437 10.2216 9.78245 9.93735C9.92075 9.67171 10.1957 9.50668 10.5001 9.50668C10.5971 9.50668 10.6944 9.52313 10.7915 9.55513C10.7947 9.55641 10.7976 9.55805 10.8008 9.55933C10.8111 9.56329 10.8213 9.56652 10.8316 9.56975C10.9207 9.60321 11.0094 9.64928 11.0974 9.70937C11.3216 10.0244 11.3657 10.3659 11.2177 10.6502Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                    </svg>

                                                            </span>
                                                        </div>

                                                        <span style="font-size:12px">
                                                            {{ html_decode($car->mileage) }}
                                                        </span>
                                                    </div>
                                                    <div class="brand-car-inner-item-two">
                                                        <div class="brand-car-inner-item-thumb">
                                                            <span>
                                                                <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M15.8901 3.09765L14.3901 1.76431C14.2436 1.63409 14.0063 1.63409 13.8598 1.76431C13.7133 1.89453 13.7133 2.10547 13.8598 2.23565L15.0947 3.33331L13.8598 4.43096C13.7895 4.49346 13.75 4.57809 13.75 4.66665V5.66665C13.75 6.40202 14.4227 6.99999 15.25 6.99999V12.6666C15.25 12.8505 15.0819 13 14.875 13C14.6681 13 14.5 12.8506 14.5 12.6666V12C14.5 11.4485 13.9953 11 13.375 11H13V2.33334C13 1.59797 12.3273 1 11.5 1H4.00001C3.17275 1 2.50001 1.59797 2.50001 2.33334V14.3333C1.67275 14.3333 1 14.9313 1 15.6667V16.6667C1 16.8509 1.16773 17 1.37501 17H14.125C14.3323 17 14.5 16.8509 14.5 16.6667V15.6667C14.5 14.9313 13.8273 14.3333 13 14.3333V11.6667H13.375C13.5819 11.6667 13.75 11.8161 13.75 12V12.6667C13.75 13.2181 14.2546 13.6667 14.875 13.6667C15.4954 13.6667 16 13.2181 16 12.6667V3.33334C16 3.24478 15.9604 3.16015 15.8901 3.09765ZM3.25003 2.33334C3.25003 1.96584 3.58658 1.66669 4.00001 1.66669H11.5C11.9134 1.66669 12.25 1.96584 12.25 2.33334V14.3333H3.24999L3.25003 2.33334ZM13.75 15.6666V16.3333H1.75002V15.6666C1.75002 15.2991 2.08657 15 2.50001 15H13C13.4134 15 13.75 15.2991 13.75 15.6666ZM15.25 6.33333C14.8365 6.33333 14.5 6.03418 14.5 5.66668V4.80468L15.25 4.13803V6.33333Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                    <path d="M11.041 2.52344H4.29103C4.08375 2.52344 3.91602 2.66929 3.91602 2.84954V6.76876C3.91602 6.94901 4.08375 7.09487 4.29103 7.09487H11.041C11.2483 7.09487 11.416 6.94901 11.416 6.76876V2.84951C11.416 2.66929 11.2483 2.52344 11.041 2.52344ZM10.666 6.44265H4.666V3.17562H10.666V6.44265Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                    </svg>

                                                            </span>
                                                        </div>

                                                        <span style="font-size:12px">
                                                            {{ html_decode($car->fuel_type) }}
                                                        </span>
                                                    </div>
                                                    <div class="brand-car-inner-item-two">
                                                        <div class="brand-car-inner-item-thumb">
                                                            <span>
                                                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17.9167 8.23819H17.2833C17.0314 8.23819 16.7897 8.3586 16.6116 8.57293C16.4334 8.78726 16.3333 9.07795 16.3333 9.38106V9.76202H15.7V7.85723C15.7 7.55412 15.5999 7.26343 15.4218 7.0491C15.2436 6.83477 15.002 6.71436 14.75 6.71436H13.8C13.716 6.71436 13.6355 6.67422 13.5761 6.60278C13.5167 6.53134 13.4833 6.43444 13.4833 6.3334V5.57149C13.4833 5.26838 13.3832 4.97769 13.2051 4.76336C13.0269 4.54903 12.7853 4.42862 12.5333 4.42862H11.2667V3.28574H12.85C13.102 3.28574 13.3436 3.16533 13.5218 2.951C13.6999 2.73667 13.8 2.44598 13.8 2.14287C13.8 1.83976 13.6999 1.54907 13.5218 1.33474C13.3436 1.12041 13.102 1 12.85 1H6.51667C6.26471 1 6.02307 1.12041 5.84491 1.33474C5.66676 1.54907 5.56667 1.83976 5.56667 2.14287C5.56667 2.44598 5.66676 2.73667 5.84491 2.951C6.02307 3.16533 6.26471 3.28574 6.51667 3.28574H8.1V4.42862H6.51667C6.26471 4.42862 6.02307 4.54903 5.84491 4.76336C5.66676 4.97769 5.56667 5.26838 5.56667 5.57149C5.56667 5.67252 5.5333 5.76942 5.47392 5.84087C5.41453 5.91231 5.33399 5.95245 5.25 5.95245H4.3C4.04804 5.95245 3.80641 6.07285 3.62825 6.28719C3.45009 6.50152 3.35 6.79221 3.35 7.09532V8.61915H2.4V7.09532C2.4 6.79221 2.29991 6.50152 2.12175 6.28719C1.94359 6.07285 1.70196 5.95245 1.45 5.95245C1.19804 5.95245 0.956408 6.07285 0.778249 6.28719C0.600089 6.50152 0.5 6.79221 0.5 7.09532L0.5 13.1906C0.5 13.4937 0.600089 13.7844 0.778249 13.9988C0.956408 14.2131 1.19804 14.3335 1.45 14.3335C1.70196 14.3335 1.94359 14.2131 2.12175 13.9988C2.29991 13.7844 2.4 13.4937 2.4 13.1906V11.6668H3.35V13.5716C3.35 13.8747 3.45009 14.1654 3.62825 14.3797C3.80641 14.5941 4.04804 14.7145 4.3 14.7145H5.62113C5.70511 14.7145 5.78564 14.7546 5.84502 14.8261L7.37388 16.6653C7.46185 16.7719 7.56651 16.8563 7.68181 16.9138C7.7971 16.9713 7.92073 17.0006 8.04553 17.0002H14.75C15.002 17.0002 15.2436 16.8798 15.4218 16.6655C15.5999 16.4511 15.7 16.1604 15.7 15.8573V14.3335H16.3333V14.7145C16.3333 15.0176 16.4334 15.3083 16.6116 15.5226C16.7897 15.7369 17.0314 15.8573 17.2833 15.8573H17.9167C18.3364 15.8567 18.7389 15.6559 19.0357 15.2988C19.3325 14.9417 19.4995 14.4575 19.5 13.9526V10.143C19.4995 9.63798 19.3325 9.15384 19.0357 8.79676C18.7389 8.43967 18.3364 8.23879 17.9167 8.23819ZM6.2 2.14287C6.2 2.04184 6.23336 1.94494 6.29275 1.87349C6.35214 1.80205 6.43268 1.76191 6.51667 1.76191H12.85C12.934 1.76191 13.0145 1.80205 13.0739 1.87349C13.1333 1.94494 13.1667 2.04184 13.1667 2.14287C13.1667 2.24391 13.1333 2.34081 13.0739 2.41225C13.0145 2.48369 12.934 2.52383 12.85 2.52383H6.51667C6.43268 2.52383 6.35214 2.48369 6.29275 2.41225C6.23336 2.34081 6.2 2.24391 6.2 2.14287ZM8.73333 3.28574H10.6333V4.42862H8.73333V3.28574ZM1.76667 13.1906C1.76667 13.2917 1.7333 13.3886 1.67392 13.46C1.61453 13.5315 1.53399 13.5716 1.45 13.5716C1.36601 13.5716 1.28547 13.5315 1.22608 13.46C1.1667 13.3886 1.13333 13.2917 1.13333 13.1906V7.09532C1.13333 6.99428 1.1667 6.89738 1.22608 6.82594C1.28547 6.7545 1.36601 6.71436 1.45 6.71436C1.53399 6.71436 1.61453 6.7545 1.67392 6.82594C1.7333 6.89738 1.76667 6.99428 1.76667 7.09532V13.1906ZM2.4 10.9049V9.38106H3.35V10.9049H2.4ZM15.0667 15.8573C15.0667 15.9584 15.0333 16.0553 14.9739 16.1267C14.9145 16.1982 14.834 16.2383 14.75 16.2383H8.04553C7.96155 16.2383 7.88102 16.1981 7.82165 16.1267L6.29278 14.2874C6.20478 14.181 6.1001 14.0966 5.98482 14.0391C5.86954 13.9816 5.74593 13.9522 5.62113 13.9526H4.3C4.21601 13.9526 4.13547 13.9124 4.07608 13.841C4.0167 13.7695 3.98333 13.6726 3.98333 13.5716V7.09532C3.98333 6.99428 4.0167 6.89738 4.07608 6.82594C4.13547 6.7545 4.21601 6.71436 4.3 6.71436H5.25C5.50196 6.71436 5.74359 6.59395 5.92175 6.37962C6.09991 6.16529 6.2 5.8746 6.2 5.57149C6.2 5.47045 6.23336 5.37355 6.29275 5.30211C6.35214 5.23067 6.43268 5.19053 6.51667 5.19053H12.5333C12.6173 5.19053 12.6979 5.23067 12.7573 5.30211C12.8166 5.37355 12.85 5.47045 12.85 5.57149V6.3334C12.85 6.63651 12.9501 6.92721 13.1282 7.14154C13.3064 7.35587 13.548 7.47627 13.8 7.47628H14.75C14.834 7.47628 14.9145 7.51641 14.9739 7.58785C15.0333 7.6593 15.0667 7.7562 15.0667 7.85723V15.8573ZM15.7 13.5716V10.5239H16.3333V13.5716H15.7ZM18.8667 13.9526C18.8667 14.2557 18.7666 14.5464 18.5884 14.7607C18.4103 14.975 18.1686 15.0954 17.9167 15.0954H17.2833C17.1993 15.0954 17.1188 15.0553 17.0594 14.9838C17 14.9124 16.9667 14.8155 16.9667 14.7145V9.38106C16.9667 9.28003 17 9.18313 17.0594 9.11168C17.1188 9.04024 17.1993 9.0001 17.2833 9.0001H17.9167C18.1686 9.0001 18.4103 9.12051 18.5884 9.33484C18.7666 9.54917 18.8667 9.83987 18.8667 10.143V13.9526Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                    </svg>

                                                            </span>
                                                        </div>

                                                        <span style="font-size:12px">
                                                            {{ html_decode($car->engine_size) }}
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="brand-car-btm-txt-btm" >
                                                    <h6 style="font-size:12px; word-spacing: 6px" class="brand-car-btm-txt"><span><i class="bi bi-geo-alt-fill"></i> Hyogo, Japan&nbsp; &nbsp; &nbsp;     2024-02-02</span></h6>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">


                            <!-- <div class="row g-5">
                                @foreach ($used_cars as $car)
                                <div class="col-xl-3 col-lg-4  col-sm-6 col-md-6">
                                    <div class="brand-car-item">
                                        <div class="brand-car-item-img">
                                            <img src="{{ asset($car->thumb_image) }}" alt="thumb">

                                            <div class="brand-car-item-img-text">

                                                <div class="text-df">
                                                    @if ($car->offer_price)
                                                        <p class="text">{{ calculate_percentage($car->regular_price, $car->offer_price) }}% {{ __('translate.Off') }}</p>
                                                    @endif

                                                    @if ($car->condition == 'New')
                                                        <p class="text text-two ">{{ __('translate.New') }}</p>
                                                    @else
                                                        <p class="text text-two ">{{ __('translate.Used') }}</p>
                                                    @endif
                                                </div>

                                                <div class="icon-main">

                                                    @guest('web')
                                                        <a  href="javascript:;" class="icon before_auth_wishlist">
                                                            <span>
                                                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.61204 2.324L9 2.96329L8.38796 2.324C6.69786 0.558667 3.95767 0.558666 2.26757 2.324C0.577476 4.08933 0.577475 6.95151 2.26757 8.71684L7.77592 14.4704C8.45196 15.1765 9.54804 15.1765 10.2241 14.4704L15.7324 8.71684C17.4225 6.95151 17.4225 4.08934 15.7324 2.324C14.0423 0.558667 11.3021 0.558666 9.61204 2.324Z"
                                                                stroke-width="1.3" stroke-linejoin="round"></path>
                                                        </svg>

                                                            </span>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('user.add-to-wishlist', $car->id) }}" class="icon">
                                                            <span>
                                                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.61204 2.324L9 2.96329L8.38796 2.324C6.69786 0.558667 3.95767 0.558666 2.26757 2.324C0.577476 4.08933 0.577475 6.95151 2.26757 8.71684L7.77592 14.4704C8.45196 15.1765 9.54804 15.1765 10.2241 14.4704L15.7324 8.71684C17.4225 6.95151 17.4225 4.08934 15.7324 2.324C14.0423 0.558667 11.3021 0.558666 9.61204 2.324Z"
                                                                stroke-width="1.3" stroke-linejoin="round"></path>
                                                        </svg>

                                                            </span>
                                                        </a>

                                                    @endif


                                                    <a href="{{ route('add-to-compare', $car->id) }}" class="icon">
                                                        <span>
                                                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 10V9C1 6.23858 3.23858 4 6 4H17L14 1"
                                                                    stroke-width="1.3" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M17 10V11C17 13.7614 14.7614 16 12 16H1L4 19"
                                                                    stroke-width="1.3" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="brand-car-inner">
                                            <div class="brand-car-inner-item">
                                                <span>{{ $car?->brand?->name }}</span>
                                                <p>
                                                    @if ($car->offer_price)
                                                        {{ currency($car->offer_price) }}
                                                    @else
                                                        {{ currency($car->regular_price) }}
                                                    @endif
                                                </p>
                                            </div>

                                            <a href="{{ route('listing', $car->slug) }}">
                                                <h3>{{ html_decode($car->title) }}</h3>
                                            </a>

                                            <div class="brand-car-inner-item-main">
                                                <div class="brand-car-inner-item-two">
                                                    <div class="brand-car-inner-item-thumb">
                                                        <span>
                                                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M20 10.2935C20 7.75456 18.9535 5.45057 17.2608 3.77159C17.2476 3.7544 17.2335 3.73758 17.2175 3.72192C17.2015 3.70626 17.1843 3.69249 17.1668 3.67963C15.4505 2.02368 13.0953 1 10.5 1C7.90472 1 5.54953 2.02374 3.83318 3.67963C3.81561 3.69255 3.79848 3.70632 3.78247 3.72192C3.76646 3.73758 3.75238 3.75434 3.73918 3.77159C2.0465 5.45057 1 7.75456 1 10.2935C1 12.7755 1.98794 15.1089 3.78179 16.8642C3.78204 16.8644 3.78229 16.8647 3.78253 16.865C3.78272 16.8651 3.78285 16.8653 3.78303 16.8654C3.78328 16.8656 3.78353 16.8659 3.78378 16.8661C3.87498 16.9553 3.99452 16.9999 4.11407 16.9999C4.23368 16.9999 4.35328 16.9553 4.44448 16.866C4.45227 16.8584 4.45931 16.8503 4.46641 16.8422L5.90617 15.4337C6.08864 15.2552 6.08864 14.9658 5.90617 14.7873C5.72371 14.6089 5.42787 14.6089 5.24547 14.7873L4.12192 15.8864C2.81179 14.4602 2.05173 12.6653 1.9472 10.7505H3.53616C3.79418 10.7505 4.00337 10.546 4.00337 10.2935C4.00337 10.041 3.79418 9.83642 3.53616 9.83642H1.94732C2.05596 7.86974 2.86107 6.08137 4.12497 4.70343L5.24547 5.79958C5.33667 5.88879 5.45628 5.9334 5.57582 5.9334C5.69537 5.9334 5.81497 5.88879 5.90617 5.79958C6.08864 5.62102 6.08864 5.33167 5.90617 5.15318L4.78573 4.05697C6.19435 2.82055 8.0224 2.03295 10.0328 1.92673V3.48108C10.0328 3.73356 10.242 3.93814 10.5 3.93814C10.758 3.93814 10.9672 3.73356 10.9672 3.48108V1.92673C12.9776 2.03295 14.8056 2.82061 16.2143 4.05703L15.0938 5.15318C14.9113 5.33173 14.9113 5.62108 15.0938 5.79958C15.185 5.88879 15.3046 5.9334 15.4241 5.9334C15.5437 5.9334 15.6633 5.88879 15.7545 5.79958L16.875 4.70343C18.1389 6.08143 18.944 7.86974 19.0526 9.83642H17.4637C17.2057 9.83642 16.9965 10.041 16.9965 10.2935C16.9965 10.546 17.2057 10.7505 17.4637 10.7505H19.0527C18.9481 12.6653 18.1881 14.4603 16.878 15.8865L15.7545 14.7873C15.5721 14.6089 15.2762 14.6089 15.0938 14.7873C14.9113 14.9659 14.9113 15.2552 15.0938 15.4337L16.5568 16.8649C16.648 16.9541 16.7676 16.9987 16.8871 16.9987C16.9469 16.9987 17.0067 16.9876 17.0629 16.9653C17.1192 16.943 17.1719 16.9095 17.2175 16.8649C19.0118 15.1096 20 12.7758 20 10.2935Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                <path d="M12.6465 5.05246C12.4068 4.95855 12.135 5.07238 12.039 5.30676L10.6889 8.60366C10.626 8.59708 10.5631 8.59257 10.5001 8.59257C9.8425 8.59257 9.24852 8.94889 8.94981 9.52246C8.63759 10.1221 8.71758 10.8385 9.16361 11.4387C9.20921 11.5001 9.26652 11.5562 9.32969 11.6012C9.69206 11.8589 10.0968 11.9951 10.5001 11.9951C11.1577 11.9951 11.7517 11.6388 12.0504 11.0652C12.3626 10.4656 12.2826 9.74922 11.8369 9.14938C11.7913 9.08783 11.7338 9.03152 11.6705 8.98643C11.6364 8.96217 11.6016 8.94005 11.5668 8.91799L12.9064 5.64663C13.0024 5.41237 12.886 5.1463 12.6465 5.05246ZM11.2177 10.6502C11.0793 10.9159 10.8043 11.0809 10.5 11.0809C10.3004 11.0809 10.0995 11.0127 9.90268 10.8782C9.67842 10.5631 9.63437 10.2216 9.78245 9.93735C9.92075 9.67171 10.1957 9.50668 10.5001 9.50668C10.5971 9.50668 10.6944 9.52313 10.7915 9.55513C10.7947 9.55641 10.7976 9.55805 10.8008 9.55933C10.8111 9.56329 10.8213 9.56652 10.8316 9.56975C10.9207 9.60321 11.0094 9.64928 11.0974 9.70937C11.3216 10.0244 11.3657 10.3659 11.2177 10.6502Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                </svg>

                                                        </span>
                                                    </div>

                                                    <span>
                                                        {{ html_decode($car->mileage) }}
                                                    </span>
                                                </div>
                                                <div class="brand-car-inner-item-two">
                                                    <div class="brand-car-inner-item-thumb">
                                                        <span>
                                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.8901 3.09765L14.3901 1.76431C14.2436 1.63409 14.0063 1.63409 13.8598 1.76431C13.7133 1.89453 13.7133 2.10547 13.8598 2.23565L15.0947 3.33331L13.8598 4.43096C13.7895 4.49346 13.75 4.57809 13.75 4.66665V5.66665C13.75 6.40202 14.4227 6.99999 15.25 6.99999V12.6666C15.25 12.8505 15.0819 13 14.875 13C14.6681 13 14.5 12.8506 14.5 12.6666V12C14.5 11.4485 13.9953 11 13.375 11H13V2.33334C13 1.59797 12.3273 1 11.5 1H4.00001C3.17275 1 2.50001 1.59797 2.50001 2.33334V14.3333C1.67275 14.3333 1 14.9313 1 15.6667V16.6667C1 16.8509 1.16773 17 1.37501 17H14.125C14.3323 17 14.5 16.8509 14.5 16.6667V15.6667C14.5 14.9313 13.8273 14.3333 13 14.3333V11.6667H13.375C13.5819 11.6667 13.75 11.8161 13.75 12V12.6667C13.75 13.2181 14.2546 13.6667 14.875 13.6667C15.4954 13.6667 16 13.2181 16 12.6667V3.33334C16 3.24478 15.9604 3.16015 15.8901 3.09765ZM3.25003 2.33334C3.25003 1.96584 3.58658 1.66669 4.00001 1.66669H11.5C11.9134 1.66669 12.25 1.96584 12.25 2.33334V14.3333H3.24999L3.25003 2.33334ZM13.75 15.6666V16.3333H1.75002V15.6666C1.75002 15.2991 2.08657 15 2.50001 15H13C13.4134 15 13.75 15.2991 13.75 15.6666ZM15.25 6.33333C14.8365 6.33333 14.5 6.03418 14.5 5.66668V4.80468L15.25 4.13803V6.33333Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                <path d="M11.041 2.52344H4.29103C4.08375 2.52344 3.91602 2.66929 3.91602 2.84954V6.76876C3.91602 6.94901 4.08375 7.09487 4.29103 7.09487H11.041C11.2483 7.09487 11.416 6.94901 11.416 6.76876V2.84951C11.416 2.66929 11.2483 2.52344 11.041 2.52344ZM10.666 6.44265H4.666V3.17562H10.666V6.44265Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                </svg>

                                                        </span>
                                                    </div>

                                                    <span>
                                                        {{ html_decode($car->fuel_type) }}
                                                    </span>
                                                </div>
                                                <div class="brand-car-inner-item-two">
                                                    <div class="brand-car-inner-item-thumb">
                                                        <span>
                                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17.9167 8.23819H17.2833C17.0314 8.23819 16.7897 8.3586 16.6116 8.57293C16.4334 8.78726 16.3333 9.07795 16.3333 9.38106V9.76202H15.7V7.85723C15.7 7.55412 15.5999 7.26343 15.4218 7.0491C15.2436 6.83477 15.002 6.71436 14.75 6.71436H13.8C13.716 6.71436 13.6355 6.67422 13.5761 6.60278C13.5167 6.53134 13.4833 6.43444 13.4833 6.3334V5.57149C13.4833 5.26838 13.3832 4.97769 13.2051 4.76336C13.0269 4.54903 12.7853 4.42862 12.5333 4.42862H11.2667V3.28574H12.85C13.102 3.28574 13.3436 3.16533 13.5218 2.951C13.6999 2.73667 13.8 2.44598 13.8 2.14287C13.8 1.83976 13.6999 1.54907 13.5218 1.33474C13.3436 1.12041 13.102 1 12.85 1H6.51667C6.26471 1 6.02307 1.12041 5.84491 1.33474C5.66676 1.54907 5.56667 1.83976 5.56667 2.14287C5.56667 2.44598 5.66676 2.73667 5.84491 2.951C6.02307 3.16533 6.26471 3.28574 6.51667 3.28574H8.1V4.42862H6.51667C6.26471 4.42862 6.02307 4.54903 5.84491 4.76336C5.66676 4.97769 5.56667 5.26838 5.56667 5.57149C5.56667 5.67252 5.5333 5.76942 5.47392 5.84087C5.41453 5.91231 5.33399 5.95245 5.25 5.95245H4.3C4.04804 5.95245 3.80641 6.07285 3.62825 6.28719C3.45009 6.50152 3.35 6.79221 3.35 7.09532V8.61915H2.4V7.09532C2.4 6.79221 2.29991 6.50152 2.12175 6.28719C1.94359 6.07285 1.70196 5.95245 1.45 5.95245C1.19804 5.95245 0.956408 6.07285 0.778249 6.28719C0.600089 6.50152 0.5 6.79221 0.5 7.09532L0.5 13.1906C0.5 13.4937 0.600089 13.7844 0.778249 13.9988C0.956408 14.2131 1.19804 14.3335 1.45 14.3335C1.70196 14.3335 1.94359 14.2131 2.12175 13.9988C2.29991 13.7844 2.4 13.4937 2.4 13.1906V11.6668H3.35V13.5716C3.35 13.8747 3.45009 14.1654 3.62825 14.3797C3.80641 14.5941 4.04804 14.7145 4.3 14.7145H5.62113C5.70511 14.7145 5.78564 14.7546 5.84502 14.8261L7.37388 16.6653C7.46185 16.7719 7.56651 16.8563 7.68181 16.9138C7.7971 16.9713 7.92073 17.0006 8.04553 17.0002H14.75C15.002 17.0002 15.2436 16.8798 15.4218 16.6655C15.5999 16.4511 15.7 16.1604 15.7 15.8573V14.3335H16.3333V14.7145C16.3333 15.0176 16.4334 15.3083 16.6116 15.5226C16.7897 15.7369 17.0314 15.8573 17.2833 15.8573H17.9167C18.3364 15.8567 18.7389 15.6559 19.0357 15.2988C19.3325 14.9417 19.4995 14.4575 19.5 13.9526V10.143C19.4995 9.63798 19.3325 9.15384 19.0357 8.79676C18.7389 8.43967 18.3364 8.23879 17.9167 8.23819ZM6.2 2.14287C6.2 2.04184 6.23336 1.94494 6.29275 1.87349C6.35214 1.80205 6.43268 1.76191 6.51667 1.76191H12.85C12.934 1.76191 13.0145 1.80205 13.0739 1.87349C13.1333 1.94494 13.1667 2.04184 13.1667 2.14287C13.1667 2.24391 13.1333 2.34081 13.0739 2.41225C13.0145 2.48369 12.934 2.52383 12.85 2.52383H6.51667C6.43268 2.52383 6.35214 2.48369 6.29275 2.41225C6.23336 2.34081 6.2 2.24391 6.2 2.14287ZM8.73333 3.28574H10.6333V4.42862H8.73333V3.28574ZM1.76667 13.1906C1.76667 13.2917 1.7333 13.3886 1.67392 13.46C1.61453 13.5315 1.53399 13.5716 1.45 13.5716C1.36601 13.5716 1.28547 13.5315 1.22608 13.46C1.1667 13.3886 1.13333 13.2917 1.13333 13.1906V7.09532C1.13333 6.99428 1.1667 6.89738 1.22608 6.82594C1.28547 6.7545 1.36601 6.71436 1.45 6.71436C1.53399 6.71436 1.61453 6.7545 1.67392 6.82594C1.7333 6.89738 1.76667 6.99428 1.76667 7.09532V13.1906ZM2.4 10.9049V9.38106H3.35V10.9049H2.4ZM15.0667 15.8573C15.0667 15.9584 15.0333 16.0553 14.9739 16.1267C14.9145 16.1982 14.834 16.2383 14.75 16.2383H8.04553C7.96155 16.2383 7.88102 16.1981 7.82165 16.1267L6.29278 14.2874C6.20478 14.181 6.1001 14.0966 5.98482 14.0391C5.86954 13.9816 5.74593 13.9522 5.62113 13.9526H4.3C4.21601 13.9526 4.13547 13.9124 4.07608 13.841C4.0167 13.7695 3.98333 13.6726 3.98333 13.5716V7.09532C3.98333 6.99428 4.0167 6.89738 4.07608 6.82594C4.13547 6.7545 4.21601 6.71436 4.3 6.71436H5.25C5.50196 6.71436 5.74359 6.59395 5.92175 6.37962C6.09991 6.16529 6.2 5.8746 6.2 5.57149C6.2 5.47045 6.23336 5.37355 6.29275 5.30211C6.35214 5.23067 6.43268 5.19053 6.51667 5.19053H12.5333C12.6173 5.19053 12.6979 5.23067 12.7573 5.30211C12.8166 5.37355 12.85 5.47045 12.85 5.57149V6.3334C12.85 6.63651 12.9501 6.92721 13.1282 7.14154C13.3064 7.35587 13.548 7.47627 13.8 7.47628H14.75C14.834 7.47628 14.9145 7.51641 14.9739 7.58785C15.0333 7.6593 15.0667 7.7562 15.0667 7.85723V15.8573ZM15.7 13.5716V10.5239H16.3333V13.5716H15.7ZM18.8667 13.9526C18.8667 14.2557 18.7666 14.5464 18.5884 14.7607C18.4103 14.975 18.1686 15.0954 17.9167 15.0954H17.2833C17.1993 15.0954 17.1188 15.0553 17.0594 14.9838C17 14.9124 16.9667 14.8155 16.9667 14.7145V9.38106C16.9667 9.28003 17 9.18313 17.0594 9.11168C17.1188 9.04024 17.1993 9.0001 17.2833 9.0001H17.9167C18.1686 9.0001 18.4103 9.12051 18.5884 9.33484C18.7666 9.54917 18.8667 9.83987 18.8667 10.143V13.9526Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                </svg>

                                                        </span>
                                                    </div>

                                                    <span>
                                                        {{ html_decode($car->engine_size) }}
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="brand-car-btm-txt-btm">
                                            <h6 class="brand-car-btm-txt"><span><i class="bi bi-geo-alt-fill"></i> Hyogo, Japan&nbsp; &nbsp; &nbsp;     2024-02-02</span></h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endforeach

                            </div> -->
                        </div>
                    </div>
                    <div class="brand-car-btn mt-48px">
                        <a href="{{ route('listings') }}" class="thm-btn">{{ __('SEE ALL') }}</a>
                    </div>
                </div>
            </div>

            
        </div>
    </section>
<!--  Brand New Cars -part-end -->

<!-- Image advertisment start -->
    <div class="container-fluid img-avt">
        <div class="row">
            <div class="col-6 col-md-3 p-2">
                <img src="{{ asset('japan_home/Poster1.svg') }}" alt="logo" class="" style="">
            </div>

            <div class="col-6 col-md-4 p-2">
                <img src="{{ asset('japan_home/Poster2.svg') }}" alt="logo" class="" style="">
            </div>

            <div class="col-6 col-md-2 p-2">
                <img src="{{ asset('japan_home/Poster3.svg') }}" alt="logo" class="" style="padding-left:50px;pading-bottom:25px">
            </div>

            <div class="col-6 col-md-3 p-2">
                <img src="{{ asset('japan_home/Poster4.jpg') }}" alt="logo" class="" style="width:100%">
            </div>
        </div>
    </div>

<!-- <div class="container img-avt">
    <div class="row">
        <div class="col-6 col-md-3 p-2">
            <img src="{{ asset('japan_home/Poster1.svg') }}" alt="logo">
        </div>

        <div class="col-6 col-md-4 p-2">
            <img src="{{ asset('japan_home/Poster2.svg') }}" alt="logo">
        </div>

        <div class="col-6 col-md-2 p-2">
            <img src="{{ asset('japan_home/Poster3.svg') }}" alt="logo">
        </div>

        <div class="col-6 col-md-3 p-2">
            <img src="{{ asset('japan_home/Poster4.jpg') }}" alt="logo">
        </div>
    </div>
</div> -->

<!-- Image advertisment end -->

    <!--  Feature-part-start -->
    <section class="feature py-120px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row feature-taitel align-items-end">
                        <div class="col-lg-8 col-sm-6 col-md-6">
                            <div class="taitel">
                                <div class="taitel-img">
                                    <span>
                                        <!-- <svg width="161" height="6" viewBox="0 0 161 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 5C22.7338 1.98151 84.9612 -2.24439 160 5" stroke="#46D993" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg> -->

                                    </span>
                                </div>
                                <!-- <span>{{ __('translate.Featured Cars') }}</span> -->
                            </div>

                            <!-- <h2>{{ __('translate.Featured Car Listings') }}</h2> -->
                            <h2 style="display: inline;">New</h2> 
                            <h2 style="display: inline; color: #038ffc;">Arrival</h2>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="feature-slick-icon">
                                <div class="feature-slick-prev">
                                    <span>
                                        <svg width="23" height="16" viewBox="0 0 23 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 1L1 8M1 8L8 15M1 8L22 8" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="feature-slick-next">
                                    <span>
                                        <svg width="23" height="16" viewBox="0 0 23 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 15L22 8M22 8L15 0.999999M22 8L1 8" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                        <div class="row mt-56px  feature-slick" >
                            @foreach ($new_arrived_cars as $index => $car)
                                <div class="col-lg-4" style="padding-top: 35px">
                                    <div class="brand-car-item">
                                        <div class="brand-car-item-img">
                                            <img src="{{ asset($car['picture']) }}" alt="thumb">

                                            <div class="brand-car-item-img-text">

                                                <div class="icon-main">
                                                    @guest('web')
            
                                                    @else
                                                        <a href="{{ route('user.add-to-wishlist', $car->id) }}" class="icon">
                                                            <span>
                                                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.61204 2.324L9 2.96329L8.38796 2.324C6.69786 0.558667 3.95767 0.558666 2.26757 2.324C0.577476 4.08933 0.577475 6.95151 2.26757 8.71684L7.77592 14.4704C8.45196 15.1765 9.54804 15.1765 10.2241 14.4704L15.7324 8.71684C17.4225 6.95151 17.4225 4.08934 15.7324 2.324C14.0423 0.558667 11.3021 0.558666 9.61204 2.324Z"
                                                                stroke-width="1.3" stroke-linejoin="round"></path>
                                                        </svg>

                                                            </span>
                                                        </a>

                                                    @endif   
                                                </div>


                                            </div>
                                        </div>

                                        <div class="brand-car-inner">
                                            <div class="brand-car-inner-item">
                                                <span>
                                                    @if(session('front_lang')=='en')
                                                        {{ $car['model_name_en'] }}
                                                    @else
                                                        {{ $car['model_name'] }}
                                                    @endif
                                                </span>
                                                <p>
                                                @if(session('front_lang')=='en')
                                                    {{ $car['start_price_num'] }}
                                                @else
                                                    {{ $car['start_price'] }}
                                                @endif
                                                </p>
                                            </div>

                                            <a href="#">
                                                <h3>
                                                @if(session('front_lang')=='en')
                                                    {{ html_decode($car['model_name_en']) }}
                                                @else
                                                    {{ html_decode($car['model_name']) }}
                                                @endif
                                                </h3>
                                            </a>

                                            <div class="brand-car-inner-item-main">
                                                <div class="brand-car-inner-item-two">
                                                    <div class="brand-car-inner-item-thumb">
                                                        <span>
                                                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M20 10.2935C20 7.75456 18.9535 5.45057 17.2608 3.77159C17.2476 3.7544 17.2335 3.73758 17.2175 3.72192C17.2015 3.70626 17.1843 3.69249 17.1668 3.67963C15.4505 2.02368 13.0953 1 10.5 1C7.90472 1 5.54953 2.02374 3.83318 3.67963C3.81561 3.69255 3.79848 3.70632 3.78247 3.72192C3.76646 3.73758 3.75238 3.75434 3.73918 3.77159C2.0465 5.45057 1 7.75456 1 10.2935C1 12.7755 1.98794 15.1089 3.78179 16.8642C3.78204 16.8644 3.78229 16.8647 3.78253 16.865C3.78272 16.8651 3.78285 16.8653 3.78303 16.8654C3.78328 16.8656 3.78353 16.8659 3.78378 16.8661C3.87498 16.9553 3.99452 16.9999 4.11407 16.9999C4.23368 16.9999 4.35328 16.9553 4.44448 16.866C4.45227 16.8584 4.45931 16.8503 4.46641 16.8422L5.90617 15.4337C6.08864 15.2552 6.08864 14.9658 5.90617 14.7873C5.72371 14.6089 5.42787 14.6089 5.24547 14.7873L4.12192 15.8864C2.81179 14.4602 2.05173 12.6653 1.9472 10.7505H3.53616C3.79418 10.7505 4.00337 10.546 4.00337 10.2935C4.00337 10.041 3.79418 9.83642 3.53616 9.83642H1.94732C2.05596 7.86974 2.86107 6.08137 4.12497 4.70343L5.24547 5.79958C5.33667 5.88879 5.45628 5.9334 5.57582 5.9334C5.69537 5.9334 5.81497 5.88879 5.90617 5.79958C6.08864 5.62102 6.08864 5.33167 5.90617 5.15318L4.78573 4.05697C6.19435 2.82055 8.0224 2.03295 10.0328 1.92673V3.48108C10.0328 3.73356 10.242 3.93814 10.5 3.93814C10.758 3.93814 10.9672 3.73356 10.9672 3.48108V1.92673C12.9776 2.03295 14.8056 2.82061 16.2143 4.05703L15.0938 5.15318C14.9113 5.33173 14.9113 5.62108 15.0938 5.79958C15.185 5.88879 15.3046 5.9334 15.4241 5.9334C15.5437 5.9334 15.6633 5.88879 15.7545 5.79958L16.875 4.70343C18.1389 6.08143 18.944 7.86974 19.0526 9.83642H17.4637C17.2057 9.83642 16.9965 10.041 16.9965 10.2935C16.9965 10.546 17.2057 10.7505 17.4637 10.7505H19.0527C18.9481 12.6653 18.1881 14.4603 16.878 15.8865L15.7545 14.7873C15.5721 14.6089 15.2762 14.6089 15.0938 14.7873C14.9113 14.9659 14.9113 15.2552 15.0938 15.4337L16.5568 16.8649C16.648 16.9541 16.7676 16.9987 16.8871 16.9987C16.9469 16.9987 17.0067 16.9876 17.0629 16.9653C17.1192 16.943 17.1719 16.9095 17.2175 16.8649C19.0118 15.1096 20 12.7758 20 10.2935Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                <path d="M12.6465 5.05246C12.4068 4.95855 12.135 5.07238 12.039 5.30676L10.6889 8.60366C10.626 8.59708 10.5631 8.59257 10.5001 8.59257C9.8425 8.59257 9.24852 8.94889 8.94981 9.52246C8.63759 10.1221 8.71758 10.8385 9.16361 11.4387C9.20921 11.5001 9.26652 11.5562 9.32969 11.6012C9.69206 11.8589 10.0968 11.9951 10.5001 11.9951C11.1577 11.9951 11.7517 11.6388 12.0504 11.0652C12.3626 10.4656 12.2826 9.74922 11.8369 9.14938C11.7913 9.08783 11.7338 9.03152 11.6705 8.98643C11.6364 8.96217 11.6016 8.94005 11.5668 8.91799L12.9064 5.64663C13.0024 5.41237 12.886 5.1463 12.6465 5.05246ZM11.2177 10.6502C11.0793 10.9159 10.8043 11.0809 10.5 11.0809C10.3004 11.0809 10.0995 11.0127 9.90268 10.8782C9.67842 10.5631 9.63437 10.2216 9.78245 9.93735C9.92075 9.67171 10.1957 9.50668 10.5001 9.50668C10.5971 9.50668 10.6944 9.52313 10.7915 9.55513C10.7947 9.55641 10.7976 9.55805 10.8008 9.55933C10.8111 9.56329 10.8213 9.56652 10.8316 9.56975C10.9207 9.60321 11.0094 9.64928 11.0974 9.70937C11.3216 10.0244 11.3657 10.3659 11.2177 10.6502Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                </svg>

                                                        </span>
                                                    </div>

                                                    <span>
                                                    @if(session('front_lang')=='en')
                                                    {{ html_decode($car['mileage']) }}
                                                    @else
                                                        {{ html_decode($car['mileage_en']) }}
                                                    @endif
                                                    </span>
                                                </div>
                                                <div class="brand-car-inner-item-two">
                                                    <div class="brand-car-inner-item-thumb">
                                                        <span>
                                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.8901 3.09765L14.3901 1.76431C14.2436 1.63409 14.0063 1.63409 13.8598 1.76431C13.7133 1.89453 13.7133 2.10547 13.8598 2.23565L15.0947 3.33331L13.8598 4.43096C13.7895 4.49346 13.75 4.57809 13.75 4.66665V5.66665C13.75 6.40202 14.4227 6.99999 15.25 6.99999V12.6666C15.25 12.8505 15.0819 13 14.875 13C14.6681 13 14.5 12.8506 14.5 12.6666V12C14.5 11.4485 13.9953 11 13.375 11H13V2.33334C13 1.59797 12.3273 1 11.5 1H4.00001C3.17275 1 2.50001 1.59797 2.50001 2.33334V14.3333C1.67275 14.3333 1 14.9313 1 15.6667V16.6667C1 16.8509 1.16773 17 1.37501 17H14.125C14.3323 17 14.5 16.8509 14.5 16.6667V15.6667C14.5 14.9313 13.8273 14.3333 13 14.3333V11.6667H13.375C13.5819 11.6667 13.75 11.8161 13.75 12V12.6667C13.75 13.2181 14.2546 13.6667 14.875 13.6667C15.4954 13.6667 16 13.2181 16 12.6667V3.33334C16 3.24478 15.9604 3.16015 15.8901 3.09765ZM3.25003 2.33334C3.25003 1.96584 3.58658 1.66669 4.00001 1.66669H11.5C11.9134 1.66669 12.25 1.96584 12.25 2.33334V14.3333H3.24999L3.25003 2.33334ZM13.75 15.6666V16.3333H1.75002V15.6666C1.75002 15.2991 2.08657 15 2.50001 15H13C13.4134 15 13.75 15.2991 13.75 15.6666ZM15.25 6.33333C14.8365 6.33333 14.5 6.03418 14.5 5.66668V4.80468L15.25 4.13803V6.33333Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                <path d="M11.041 2.52344H4.29103C4.08375 2.52344 3.91602 2.66929 3.91602 2.84954V6.76876C3.91602 6.94901 4.08375 7.09487 4.29103 7.09487H11.041C11.2483 7.09487 11.416 6.94901 11.416 6.76876V2.84951C11.416 2.66929 11.2483 2.52344 11.041 2.52344ZM10.666 6.44265H4.666V3.17562H10.666V6.44265Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                </svg>

                                                        </span>
                                                    </div>

                                                
                                                </div>
                                                <div class="brand-car-inner-item-two">
                                                    <div class="brand-car-inner-item-thumb">
                                                        <span>
                                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17.9167 8.23819H17.2833C17.0314 8.23819 16.7897 8.3586 16.6116 8.57293C16.4334 8.78726 16.3333 9.07795 16.3333 9.38106V9.76202H15.7V7.85723C15.7 7.55412 15.5999 7.26343 15.4218 7.0491C15.2436 6.83477 15.002 6.71436 14.75 6.71436H13.8C13.716 6.71436 13.6355 6.67422 13.5761 6.60278C13.5167 6.53134 13.4833 6.43444 13.4833 6.3334V5.57149C13.4833 5.26838 13.3832 4.97769 13.2051 4.76336C13.0269 4.54903 12.7853 4.42862 12.5333 4.42862H11.2667V3.28574H12.85C13.102 3.28574 13.3436 3.16533 13.5218 2.951C13.6999 2.73667 13.8 2.44598 13.8 2.14287C13.8 1.83976 13.6999 1.54907 13.5218 1.33474C13.3436 1.12041 13.102 1 12.85 1H6.51667C6.26471 1 6.02307 1.12041 5.84491 1.33474C5.66676 1.54907 5.56667 1.83976 5.56667 2.14287C5.56667 2.44598 5.66676 2.73667 5.84491 2.951C6.02307 3.16533 6.26471 3.28574 6.51667 3.28574H8.1V4.42862H6.51667C6.26471 4.42862 6.02307 4.54903 5.84491 4.76336C5.66676 4.97769 5.56667 5.26838 5.56667 5.57149C5.56667 5.67252 5.5333 5.76942 5.47392 5.84087C5.41453 5.91231 5.33399 5.95245 5.25 5.95245H4.3C4.04804 5.95245 3.80641 6.07285 3.62825 6.28719C3.45009 6.50152 3.35 6.79221 3.35 7.09532V8.61915H2.4V7.09532C2.4 6.79221 2.29991 6.50152 2.12175 6.28719C1.94359 6.07285 1.70196 5.95245 1.45 5.95245C1.19804 5.95245 0.956408 6.07285 0.778249 6.28719C0.600089 6.50152 0.5 6.79221 0.5 7.09532L0.5 13.1906C0.5 13.4937 0.600089 13.7844 0.778249 13.9988C0.956408 14.2131 1.19804 14.3335 1.45 14.3335C1.70196 14.3335 1.94359 14.2131 2.12175 13.9988C2.29991 13.7844 2.4 13.4937 2.4 13.1906V11.6668H3.35V13.5716C3.35 13.8747 3.45009 14.1654 3.62825 14.3797C3.80641 14.5941 4.04804 14.7145 4.3 14.7145H5.62113C5.70511 14.7145 5.78564 14.7546 5.84502 14.8261L7.37388 16.6653C7.46185 16.7719 7.56651 16.8563 7.68181 16.9138C7.7971 16.9713 7.92073 17.0006 8.04553 17.0002H14.75C15.002 17.0002 15.2436 16.8798 15.4218 16.6655C15.5999 16.4511 15.7 16.1604 15.7 15.8573V14.3335H16.3333V14.7145C16.3333 15.0176 16.4334 15.3083 16.6116 15.5226C16.7897 15.7369 17.0314 15.8573 17.2833 15.8573H17.9167C18.3364 15.8567 18.7389 15.6559 19.0357 15.2988C19.3325 14.9417 19.4995 14.4575 19.5 13.9526V10.143C19.4995 9.63798 19.3325 9.15384 19.0357 8.79676C18.7389 8.43967 18.3364 8.23879 17.9167 8.23819ZM6.2 2.14287C6.2 2.04184 6.23336 1.94494 6.29275 1.87349C6.35214 1.80205 6.43268 1.76191 6.51667 1.76191H12.85C12.934 1.76191 13.0145 1.80205 13.0739 1.87349C13.1333 1.94494 13.1667 2.04184 13.1667 2.14287C13.1667 2.24391 13.1333 2.34081 13.0739 2.41225C13.0145 2.48369 12.934 2.52383 12.85 2.52383H6.51667C6.43268 2.52383 6.35214 2.48369 6.29275 2.41225C6.23336 2.34081 6.2 2.24391 6.2 2.14287ZM8.73333 3.28574H10.6333V4.42862H8.73333V3.28574ZM1.76667 13.1906C1.76667 13.2917 1.7333 13.3886 1.67392 13.46C1.61453 13.5315 1.53399 13.5716 1.45 13.5716C1.36601 13.5716 1.28547 13.5315 1.22608 13.46C1.1667 13.3886 1.13333 13.2917 1.13333 13.1906V7.09532C1.13333 6.99428 1.1667 6.89738 1.22608 6.82594C1.28547 6.7545 1.36601 6.71436 1.45 6.71436C1.53399 6.71436 1.61453 6.7545 1.67392 6.82594C1.7333 6.89738 1.76667 6.99428 1.76667 7.09532V13.1906ZM2.4 10.9049V9.38106H3.35V10.9049H2.4ZM15.0667 15.8573C15.0667 15.9584 15.0333 16.0553 14.9739 16.1267C14.9145 16.1982 14.834 16.2383 14.75 16.2383H8.04553C7.96155 16.2383 7.88102 16.1981 7.82165 16.1267L6.29278 14.2874C6.20478 14.181 6.1001 14.0966 5.98482 14.0391C5.86954 13.9816 5.74593 13.9522 5.62113 13.9526H4.3C4.21601 13.9526 4.13547 13.9124 4.07608 13.841C4.0167 13.7695 3.98333 13.6726 3.98333 13.5716V7.09532C3.98333 6.99428 4.0167 6.89738 4.07608 6.82594C4.13547 6.7545 4.21601 6.71436 4.3 6.71436H5.25C5.50196 6.71436 5.74359 6.59395 5.92175 6.37962C6.09991 6.16529 6.2 5.8746 6.2 5.57149C6.2 5.47045 6.23336 5.37355 6.29275 5.30211C6.35214 5.23067 6.43268 5.19053 6.51667 5.19053H12.5333C12.6173 5.19053 12.6979 5.23067 12.7573 5.30211C12.8166 5.37355 12.85 5.47045 12.85 5.57149V6.3334C12.85 6.63651 12.9501 6.92721 13.1282 7.14154C13.3064 7.35587 13.548 7.47627 13.8 7.47628H14.75C14.834 7.47628 14.9145 7.51641 14.9739 7.58785C15.0333 7.6593 15.0667 7.7562 15.0667 7.85723V15.8573ZM15.7 13.5716V10.5239H16.3333V13.5716H15.7ZM18.8667 13.9526C18.8667 14.2557 18.7666 14.5464 18.5884 14.7607C18.4103 14.975 18.1686 15.0954 17.9167 15.0954H17.2833C17.1993 15.0954 17.1188 15.0553 17.0594 14.9838C17 14.9124 16.9667 14.8155 16.9667 14.7145V9.38106C16.9667 9.28003 17 9.18313 17.0594 9.11168C17.1188 9.04024 17.1993 9.0001 17.2833 9.0001H17.9167C18.1686 9.0001 18.4103 9.12051 18.5884 9.33484C18.7666 9.54917 18.8667 9.83987 18.8667 10.143V13.9526Z" fill="#0D274E" stroke="#0D274E" stroke-width="0.2"/>
                                                                </svg>

                                                        </span>
                                                    </div>

                                                    <span>
                                                    
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="brand-car-btm-txt-btm">
                                                <h6 class="brand-car-btm-txt" style="word-spacing: 3px"><span><i class="bi bi-geo-alt-fill"></i> Hyogo, Japan&nbsp; &nbsp; &nbsp;     2024-02-02</span></h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    
                </div>

                @if ($home3_ads->status == 'enable')
                    <div class="col-lg-4">
                        <div class=" feature-thumb">
                            <a href="{{ $home3_ads->link }}" target="_blank"> <img src="{{ asset('japan_home/big_sale.svg') }}" alt="logo" class="img-fluid" style="padding-bottom: 80px"></a>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-position-img"></div>
                </div>
            </div>
        </div>

        <div class="brand-car-btn mt-48px">
            <a href="{{ route('listings') }}" class="thm-btn">{{ __('SEE ALL') }}</a>
        </div>
    </section>

    <!--  Feature-part-end -->

    <!--  vedio-part-start -->

    <section class="vedio">
        <div class="container-fluid vedio-bg" style="background: url({{ asset($homepage->video_bg_image) }});">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6 ">
                    <div class="taitel">

                        <div class="taitel-img">
                            <span>
                                <!-- <svg width="163" height="5" viewBox="0 0 163 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4C23.0072 1.73613 86.0173 -1.43329 162 4" stroke="#46D993" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> -->

                            </span>
                        </div>
                        <span>
                            {{ $homepage->video_short_title }}
                        </span>
                    </div>

                    <h2 class="vedio-taitel">{{ $homepage->video_title }}</h2>

                    <div class="vedio-btn">
                        <a href="{{ route('contact-us') }}" class="thm-btn">{{ __('translate.Contact Us') }}</a>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 ">
                    <div class="vedio-item">
                        <a class="my-video-links" data-autoplay="true" data-vbtype="video"
                            href="https://youtu.be/{{ $homepage->video_id }}">

                            <div class="vedio-item-icon">
                                <span>
                                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_48_15344)">
                                            <path
                                                d="M37.5687 14.6098L20.0823 1.7875C18.7166 0.787393 17.1005 0.18501 15.4133 0.0471256C13.7261 -0.0907584 12.0337 0.241243 10.5237 1.00633C9.01364 1.77141 7.74494 2.9397 6.85822 4.38168C5.9715 5.82367 5.5014 7.48303 5.50001 9.17584V34.8333C5.49738 36.5278 5.96503 38.1898 6.8509 39.6342C7.73678 41.0787 9.00612 42.2489 10.5176 43.0148C12.0292 43.7806 13.7236 44.1119 15.4122 43.9719C17.1009 43.8319 18.7176 43.226 20.0823 42.2217L37.5687 29.3993C38.729 28.5478 39.6724 27.4351 40.3228 26.1512C40.9731 24.8673 41.312 23.4484 41.312 22.0092C41.312 20.57 40.9731 19.151 40.3228 17.8671C39.6724 16.5832 38.729 15.4705 37.5687 14.619V14.6098Z" />
                                        </g>
                                    </svg>
                                </span>
                            </div>

                        </a>

                        <!-- <video width="320" height="240" controls>
                            <source src="movie.mp4" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video> -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--  vedio-part-end -->



    

    <!--   Testimonial-part-start -->
    <section class=" testimonial pb-5 pt-5 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sm-df" style="margin-left:50px">
                        <div class="t-df-sm">
                            <div class="taitel">
                                <div class="taitel-img">
                                    <span>
                                        <!-- <svg width="154" height="6" viewBox="0 0 154 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 5C21.777 1.98151 81.2647 -2.24439 153 5" stroke="#46D993" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg> -->

                                    </span>
                                </div>
                                <!-- <span>
                                    {{ __('translate.Our Testimonial') }}
                                </span> -->
                            </div>

                            <h2 style="display: inline;">Customer Say About</h2> 
                            <h2 style=" color: #038ffc;">Our Services</h2>
                            <p class="testimonial-p">{{ __('translate.We have 15m+ Global and Local Happy Customers') }}</p>
                        </div>

                        <div class="t-df-item">
                            <div class="testimonial-slick-btn">
                                <div class="feature-slick-prev testimonial-slick-prve">
                                    <span>
                                        <svg width="23" height="16" viewBox="0 0 23 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 1L1 8M1 8L8 15M1 8L22 8" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="feature-slick-next testimonial-slick-next">
                                    <span>
                                        <svg width="23" height="16" viewBox="0 0 23 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 15L22 8M22 8L15 0.999999M22 8L1 8" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-1"></div>

                <div class="col-lg-6">
                    <div class="testimonial-slick-main">
                        <div class="testimonial-slick">

                            @foreach ($testimonials as $index => $testimonial)
                                <div class="testimonial-slick-top-main">
                                    <div class="testimonial-slick-top">
                                        <div class="testimonial-slick-top-thumb">
                                            <img src="{{ asset($testimonial->image) }}"
                                                alt="thumb">
                                        </div>

                                        <div class="testimonial-slick-top-txt">
                                            <h4>John Abraham</h4>
                                            <p style="display: inline;">Hyogo, Japan - Jun  07, 2024 |</p> 
                                            <p style="display: inline; color: #43C640;"> Verified Buyer</p> 
                                        </div>
                                    </div>
                                    <p class="testimonial-p">{{ $testimonial->comment }}</p>


                                    <div class="testimonial-btm-item">
                                        <div class="testimonial-btm-item-thumb">
                                            <span>
                                                <svg width="54" height="40" viewBox="0 0 54 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M49.5406 4.06287C47.1408 1.36698 44.2282 0 40.8838 0C37.8781 0 35.33 1.07033 33.3098 3.18112C31.3024 5.27842 30.2845 7.88345 30.2845 10.924C30.2845 13.7974 31.3127 16.3578 33.3404 18.5344C35.129 20.4545 37.3822 21.6759 40.0496 22.1736C39.5831 25.7101 36.4568 28.9111 30.7387 31.7003L29.709 32.2026L33.9307 39.9964L34.8837 39.5134C46.976 33.3839 53.1072 24.7214 53.1072 13.7664C53.1072 9.98687 51.9073 6.72226 49.5406 4.06287ZM34.8388 37.062L32.7236 33.1576C39.0843 29.8246 42.3069 25.8181 42.3069 21.2372V20.2564L41.3324 20.146C38.7077 19.849 36.6191 18.8322 34.9474 17.0374C33.2877 15.2557 32.4808 13.2562 32.4808 10.924C32.4808 8.43381 33.2711 6.39791 34.8964 4.69953C36.5086 3.01495 38.4672 2.19605 40.8839 2.19605C43.6124 2.19605 45.9074 3.28432 47.9 5.5229C49.9262 7.79943 50.9111 10.4958 50.9111 13.7663C50.9111 18.7872 49.4973 23.3202 46.7091 27.2392C44.0485 30.9785 40.0582 34.2797 34.8388 37.062Z" fill="#038ffc"/>
                                                    <path d="M19.7738 4.0579C17.3473 1.36532 14.4226 0 11.0807 0C8.07213 0 5.53555 1.0723 3.54187 3.18703C1.5653 5.2835 0.563015 7.88657 0.563015 10.924C0.563015 13.7973 1.59113 16.3577 3.61863 18.5344C5.40351 20.4504 7.62964 21.6706 10.2474 22.1706C9.78658 25.7098 6.68627 28.9124 1.01401 31.7021L0 32.2006L4.1166 40L5.07906 39.5144C17.2262 33.3852 23.3853 24.7223 23.3853 13.7663C23.3852 9.98387 22.17 6.71749 19.7738 4.0579ZM5.04711 37.0583L2.98964 33.1599C9.30416 29.8257 12.5037 25.8182 12.5037 21.2371V20.2585L11.5314 20.1463C8.96052 19.8496 6.89766 18.8327 5.22542 17.0373C3.56573 15.2558 2.75906 13.2561 2.75906 10.924C2.75906 8.4306 3.53782 6.39252 5.13964 4.69362C6.72402 3.01308 8.6675 2.19605 11.0807 2.19605C13.8119 2.19605 16.122 3.28588 18.1422 5.52798C20.1925 7.80328 21.1892 10.4981 21.1892 13.7663C21.1892 18.7864 19.7692 23.3188 16.9683 27.2374C14.2963 30.9756 10.2888 34.2763 5.04711 37.0583Z" fill="#038ffc"/>
                                                    </svg>

                                            </span>
                                        </div>

                                        <div class="testimonial-btm-item-txt-item">
                                            <!-- <h6>{{ __('translate.Quality Service') }}</h6> -->

                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa-solid fa-star"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa-solid fa-star"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa-solid fa-star"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa-solid fa-star"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa-solid fa-star"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="testimonial-position-img">
                        <div class="testimonial-position-img-left">

                        </div>

                        <div class="testimonial-position-img-right">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--   Testimonial-part-end -->

    <!-- Buy in 3 Easy Steps start -->
            <section class="Easy-test" style="margin-top: 100px">
                <img src="{{ asset('japan_home/buy.jpg') }}" alt="logo" class="d-block mx-auto img-fluid">

                
                    <div class="container buy-img" >
                        <div class="row">
                            <div class="centered-1">
                                <h2 style="color: white; padding-bottom: 20px"><b>Buy in 3 Easy Steps</b></h2>
                                <h6 style="font-size:14px; color: white">Adding smiles to your miles. Car buying mode simpler</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 bottom-left" style="padding-left: 20px; padding-right: 20px">
                                    <h5 style="color: white">Find the perfect car</h5>
                                    <h6 style="font-size:14px; color: white">Seamlessly browse thousands of MRL Certified cars.
                                        Seamlessly browse thousands of MRL Certified car</h6>                                        
                            </div>

                            <div class="col-md-4 centered" style="padding-left: 20px; padding-right: 20px">
                                    <h5 style="color: white">Send Enquiry to Alpine Japan</h5>
                                    <h6 style="font-size:14px; color: white">Seamlessly browse thousands of MRL Certified cars.
                                        Seamlessly browse thousands of MRL Certified cars </h6>       
                            </div>

                            <div class="col-md-4 bottom-right" style="padding-left: 20px; padding-right: 20px">
                                    <h5 style="color: white">Buy it your way</h5>
                                    <h6 style="font-size:14px; color: white">Seamlessly browse thousands of MRL Certified cars.
                                        Seamlessly browse thousands of MRL Certified cars </h6>        
                            </div>
                        </div>
                    </div> 
            </section>
    <!-- Buy in 3 Easy Steps end -->

    <!-- About Alpine Japan Start -->
            <div class="container-fluid pb-5 pt-5">
                <div class="row mb-4">
                    <div class="col-12 text-center text-md-start" style="margin-left: 165px;">
                        <h2 style="display: inline;">About</h2> 
                        <h2 style="display: inline; color: #038ffc;">Alpine Japan</h2>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-5 mb-4">
                        <img src="{{ asset('japan_home/Aj_img.svg') }}" alt="logo" class="d-block mx-auto img-fluid">
                    </div>

                    <div class="col-md-7">
                        <div class="row mb-4">
                            <p style="font-size: 14px; text-align: justify; color: black;">
                                Alpine Japan, founded in 2009, provides a unique range of vehicles from passenger cars to heavy equipment and cranes. 
                                Japanese vehicles are known to stand out for their quality, reliability, and ease of use. Our company is committed to 
                                making the unique experience of owning Japanese vehicles available to as many people as possible in different countries and continents.
                            </p>
                        </div>

                        <div class="row mb-4">
                            <p style="font-size: 14px; text-align: justify;">
                                We specialize in exporting JDM vehicles to markets in the United States, Canada, Australia, and the United Kingdom. To Malaysia, 
                                we supply minivans and new cars, and to the Middle East we supply classic cars. In the African continent market, we provide 
                                conventional cars that are becoming an integral part of everyday life.
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn btn-primary btn-block btn-sm">READ MORE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    <!-- About Alpine Japan End -->

    <!-- Quality Compliance Part Start -->
            <div class="container-fluid pb-5">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center ">
                        <div style="margin-left:50px">
                            <h2 style="display: inline;">Quality</h2> 
                            <h2 style="display: inline; color: #038ffc;">Compliance</h2>
                        </div>
                        <p style="font-size: 14px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus excepturi consequuntur voluptate id reprehenderit optio voluptas quidem, asperiores molestiae fugiat fuga velit, 
                            cupiditate placeat reiciendis corrupti perspiciatis distinctio ut aspernatur.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('japan_home/qc1.svg') }}" alt="logo" class="d-block mx-auto">
                    </div>

                    <div class="col-md-4">
                        <img src="{{ asset('japan_home/qc2.svg') }}" alt="logo" class="d-block mx-auto">
                    </div>

                    <div class="col-md-4">
                        <img src="{{ asset('japan_home/qc3.svg') }}" alt="logo" class="d-block mx-auto">
                    </div>
                </div>
            </div>

    <!-- Quality Compliance Part end -->
     <script>
        document.getElementById("heartIcon").addEventListener("click", function() {
            this.classList.toggle("red");
        });
    </script>

    <!-- banner page drop down -->

    <script>
        function toggleIconVisibility(input) {
            const icon = document.getElementById('searchIcon');
            icon.style.display = input.value ? 'none' : 'block';
    }
    // let placeholderSet = document.getElementById('exampleInputEmail1')
    // console.log("placeholderSet",placeholderSet.current)

    function updateButtonText(selectedBrand) {
    document.getElementById('defaultDropdown').innerText = selectedBrand;
    }
    </script>
    


</main>
@endsection
