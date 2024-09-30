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
                                    <div class="btn-group-lg btn-dc4">
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

                                    <div class="btn-group-lg btn-dc6">
                                        <button class="btn btn-light custom-btn1 dropdown-toggle btn-rad" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" aria-expanded="false">
                                            Year
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                            <li><a class="dropdown-item" href="#">ASC - DSC</a></li>
                                            <li><a class="dropdown-item" href="#">DSC - ASC</a></li>
                                            <li><a class="dropdown-item" href="#">$(Low - High)</a></li>
                                            <li><a class="dropdown-item" href="#">$(High - Low)</a></li>
                                        </ul>
                                    </div>

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
     <div class="whatsapp">
        <a href="https://api.whatsapp.com/send/?phone=%2B919962561981&text&type=phone_number&app_absent=0"><img src="{{  asset('japan_home/WhatsApp.png')  }}" alt="HTML tutorial" ></a>
     </div>
        <!-- Whatsapp fix end -->

    <!-- Categories-part-start -->
    <section class="categories  pb-120px">
        <div class="container">
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
        <div class="container">
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
        <div class="container">
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
    <div class="container img-avt">
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
        <div class="container">
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

                    <div class="row mt-56px  feature-slick">
                        @foreach ($new_arrived_cars as $index => $car)
                            <div class="col-lg-4">
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
                        <div class="feature-thumb">
                            <a href="{{ $home3_ads->link }}" target="_blank"> <img src="{{ asset('japan_home/big_sale.svg') }}" alt="logo" style="padding-top: 35px"></a>
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
        <div class="container vedio-bg" style="background: url({{ asset($homepage->video_bg_image) }});">
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
        <div class="container">
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



    <!--   Download-part-start -->

    <!-- <section class="download">
        <div class="container download-bg">
            <div class="row ">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="50">
                    <div class="taitel">
                        <div class="taitel-img">
                            <span>
                                <svg width="190" height="6" viewBox="0 0 190 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5C26.6978 1.98151 100.275 -2.24439 189 5" stroke="#46D993" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            </span>
                        </div>
                        <span>{{ $homepage->mobile_short_title }}</span>
                    </div>

                    <h2 class="download-taitel">{{ $homepage->mobile_title }}
                    </h2>

                    <p class="decp">{{ $homepage->mobile_description }}</p>




                    <div class="download-btn">
                        <a href="{{ $homepage->mobile_playstore }}">
                            <span>
                                <svg width="190" height="56" viewBox="0 0 190 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.507812" width="188.28" height="55" rx="7.5" fill="black"/>
                                    <rect x="0.5" y="0.507812" width="188.28" height="55" rx="7.5" stroke="#6984AC"/>
                                    <path d="M95.5331 30.4615C92.2354 30.4615 89.5476 32.9647 89.5476 36.4157C89.5476 39.8443 92.2354 42.3699 95.5331 42.3699C98.8308 42.3699 101.519 39.8443 101.519 36.4157C101.519 32.9647 98.8308 30.4615 95.5331 30.4615ZM95.5331 40.0249C93.7258 40.0249 92.1667 38.5367 92.1667 36.4157C92.1667 34.2723 93.7258 32.8065 95.5331 32.8065C97.3404 32.8065 98.8981 34.2723 98.8981 36.4157C98.8981 38.5353 97.3404 40.0249 95.5331 40.0249ZM82.4742 30.4615C79.1765 30.4615 76.4887 32.9647 76.4887 36.4157C76.4887 39.8443 79.1765 42.3699 82.4742 42.3699C85.7719 42.3699 88.4596 39.8443 88.4596 36.4157C88.461 32.9647 85.7719 30.4615 82.4742 30.4615ZM82.4742 40.0249C80.6669 40.0249 79.1092 38.5367 79.1092 36.4157C79.1092 34.2723 80.6683 32.8065 82.4742 32.8065C84.2814 32.8065 85.8392 34.2723 85.8392 36.4157C85.8406 38.5353 84.2814 40.0249 82.4742 40.0249ZM66.942 34.8141H72.9962C72.8153 36.2351 72.3414 37.2725 71.6179 37.9949C70.7374 38.8741 69.3592 39.8443 66.942 39.8443C63.2153 39.8443 60.3018 36.8441 60.3018 33.1229C60.3018 29.4017 63.2153 26.4015 66.942 26.4015C68.9526 26.4015 70.4206 27.1911 71.5044 28.2061L73.2892 26.4239C71.7764 24.9805 69.7658 23.8745 66.942 23.8745C61.8371 23.8745 57.5453 28.0241 57.5453 33.1215C57.5453 38.2189 61.8371 42.3685 66.942 42.3685C69.6971 42.3685 71.7764 41.4669 73.4028 39.7743C75.074 38.1055 75.5942 35.7591 75.5942 33.8649C75.5942 33.2783 75.5493 32.7365 75.4582 32.2857H66.942V34.8141ZM130.467 34.2499C129.971 32.9185 128.457 30.4601 125.362 30.4601C122.29 30.4601 119.739 32.8737 119.739 36.4143C119.739 39.7519 122.268 42.3685 125.657 42.3685C128.389 42.3685 129.971 40.6997 130.626 39.7295L128.593 38.3757C127.915 39.3683 126.989 40.0221 125.657 40.0221C124.323 40.0221 123.375 39.4131 122.766 38.2175L130.739 34.9247L130.467 34.2499ZM122.335 36.2351C122.268 33.9349 124.12 32.7617 125.452 32.7617C126.491 32.7617 127.371 33.2797 127.666 34.0245L122.335 36.2351ZM115.852 42.0087H118.472V24.5073H115.852V42.0087ZM111.56 31.7915H111.47C110.883 31.0929 109.754 30.4601 108.331 30.4601C105.349 30.4601 102.616 33.0767 102.616 36.4367C102.616 39.7743 105.349 42.3685 108.331 42.3685C109.754 42.3685 110.883 41.7371 111.47 41.0147H111.56V41.8715C111.56 44.1493 110.34 45.3673 108.375 45.3673C106.771 45.3673 105.777 44.2165 105.37 43.2477L103.089 44.1955C103.744 45.7747 105.484 47.7137 108.375 47.7137C111.447 47.7137 114.045 45.9091 114.045 41.5117V30.8213H111.56V31.7915ZM108.557 40.0249C106.75 40.0249 105.237 38.5143 105.237 36.4381C105.237 34.3409 106.75 32.8065 108.557 32.8065C110.342 32.8065 111.741 34.3395 111.741 36.4381C111.741 38.5129 110.342 40.0249 108.557 40.0249ZM142.741 24.5073H136.472V42.0087H139.087V35.3783H142.74C145.639 35.3783 148.489 33.2825 148.489 29.9435C148.489 26.6045 145.64 24.5073 142.741 24.5073ZM142.808 32.9423H139.087V26.9433H142.808C144.764 26.9433 145.875 28.5603 145.875 29.9435C145.875 31.2987 144.764 32.9423 142.808 32.9423ZM158.977 30.4293C157.083 30.4293 155.121 31.2623 154.309 33.1089L156.633 34.0777C157.129 33.1089 158.053 32.7939 159.023 32.7939C160.376 32.7939 161.752 33.6045 161.774 35.0451V35.2257C161.3 34.9555 160.285 34.5495 159.046 34.5495C156.543 34.5495 153.994 35.9229 153.994 38.4905C153.994 40.8327 156.047 42.3405 158.346 42.3405C160.106 42.3405 161.074 41.5523 161.683 40.6297H161.773V41.9807H164.298V35.2705C164.298 32.1625 161.976 30.4293 158.977 30.4293ZM158.66 40.0207C157.803 40.0207 156.607 39.5923 156.607 38.5353C156.607 37.1843 158.096 36.6663 159.381 36.6663C160.53 36.6663 161.072 36.9141 161.771 37.2515C161.569 38.8727 160.172 40.0207 158.66 40.0207ZM173.498 30.8115L170.499 38.3995H170.409L167.298 30.8115H164.48L169.148 41.4165L166.486 47.3161H169.215L176.409 30.8115H173.498ZM149.934 42.0087H152.55V24.5073H149.934V42.0087Z" fill="white"/>
                                    <path d="M66.4246 13.7161H62.3474V14.7255H65.4025C65.3198 15.5459 64.9903 16.1913 64.4393 16.6603C63.8869 17.1293 63.1816 17.3645 62.3474 17.3645C61.4304 17.3645 60.6551 17.0481 60.0214 16.4139C59.3988 15.7685 59.0806 14.9719 59.0806 14.0087C59.0806 13.0469 59.3988 12.2489 60.0214 11.6035C60.6551 10.9707 61.4304 10.6543 62.3474 10.6543C62.8171 10.6543 63.2644 10.7355 63.6752 10.9119C64.086 11.0883 64.4155 11.3347 64.6734 11.6511L65.4488 10.8769C65.0969 10.4779 64.6496 10.1727 64.0986 9.95009C63.5462 9.72749 62.9699 9.62109 62.3474 9.62109C61.1248 9.62109 60.0915 10.0439 59.246 10.8881C58.3992 11.7337 57.9771 12.7767 57.9771 14.0087C57.9771 15.2407 58.3992 16.2851 59.246 17.1293C60.0915 17.9749 61.1248 18.3963 62.3474 18.3963C63.6275 18.3963 64.6496 17.9861 65.4376 17.1531C66.1302 16.4615 66.4835 15.5221 66.4835 14.3489C66.4835 14.1501 66.4597 13.9387 66.4246 13.7161Z" fill="white"/>
                                    <path d="M68.0343 9.8087V18.2087H72.9457V17.1769H69.1153V14.5141H72.5686V13.5047H69.1153V10.8419H72.9457V9.8087H68.0343Z" fill="white"/>
                                    <path d="M79.8523 10.8419V9.8087H74.0716V10.8419H76.4214V18.2087H77.5024V10.8419H79.8523Z" fill="white"/>
                                    <path d="M85.117 9.8087H84.036V18.2087H85.117V9.8087Z" fill="white"/>
                                    <path d="M92.2606 10.8419V9.8087H86.4799V10.8419H88.8298V18.2087H89.9108V10.8419H92.2606Z" fill="white"/>
                                    <path d="M103.2 10.9007C102.365 10.0439 101.343 9.62109 100.121 9.62109C98.8995 9.62109 97.876 10.0439 97.0417 10.8881C96.2075 11.7211 95.7967 12.7655 95.7967 14.0087C95.7967 15.2533 96.2075 16.2963 97.0417 17.1293C97.876 17.9749 98.8995 18.3963 100.121 18.3963C101.331 18.3963 102.365 17.9749 103.2 17.1293C104.034 16.2963 104.445 15.2533 104.445 14.0087C104.445 12.7767 104.034 11.7337 103.2 10.9007ZM97.8185 11.6035C98.441 10.9707 99.2037 10.6543 100.121 10.6543C101.038 10.6543 101.8 10.9707 102.412 11.6035C103.034 12.2265 103.34 13.0357 103.34 14.0087C103.34 14.9831 103.034 15.7923 102.412 16.4139C101.8 17.0481 101.038 17.3645 100.121 17.3645C99.2037 17.3645 98.441 17.0481 97.8185 16.4139C97.2072 15.7811 96.9015 14.9831 96.9015 14.0087C96.9015 13.0357 97.2072 12.2377 97.8185 11.6035Z" fill="white"/>
                                    <path d="M107.041 12.9769L106.995 11.3571H107.041L111.319 18.2087H112.446V9.8087H111.365V14.7255L111.413 16.3439H111.365L107.277 9.8087H105.962V18.2087H107.041V12.9769Z" fill="white"/>
                                    <path d="M29.0472 27.2028L14.1193 43.0228C14.1207 43.0256 14.1207 43.0284 14.1221 43.0312C14.5792 44.7504 16.1509 46.0146 18.0157 46.0146C18.7616 46.0146 19.4612 45.813 20.0613 45.4602L20.109 45.4322L36.9115 35.7512L29.0472 27.2028Z" fill="#EB4335"/>
                                    <path d="M44.1507 24.5093L44.1367 24.4995L36.8824 20.2995L28.7097 27.5613L36.9104 35.7485L44.1269 31.5919C45.3916 30.9101 46.2496 29.5787 46.2496 28.0429C46.2496 26.5183 45.4028 25.1925 44.1507 24.5093Z" fill="#FABC13"/>
                                    <path d="M14.1198 12.997C14.0301 13.3274 13.9824 13.6732 13.9824 14.033V41.9868C13.9824 42.3466 14.0282 42.6938 14.1193 43.0228L29.5609 27.6074L14.1198 12.997Z" fill="#547DBF"/>
                                    <path d="M29.1566 28.0093L36.8834 20.2967L20.0992 10.5807C19.4893 10.2153 18.7784 10.0053 18.0157 10.0053C16.1509 10.0053 14.5778 11.2723 14.1193 12.9929L14.1198 12.997L29.1566 28.0093Z" fill="#30A851"/>
                                    </svg>

                            </span>
                        </a>
                        <a href="{{ $homepage->mobile_appstore }}">
                            <span>
                                <svg width="168" height="56" viewBox="0 0 168 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.507812" width="167" height="55" rx="7.5" fill="black"/>
                                    <rect x="0.5" y="0.507812" width="167" height="55" rx="7.5" stroke="#6984AC"/>
                                    <path d="M34.6772 28.4295C34.6922 27.261 35.0026 26.1153 35.5795 25.099C36.1563 24.0826 36.9808 23.2287 37.9764 22.6167C37.3439 21.7134 36.5096 20.9701 35.5396 20.4457C34.5697 19.9214 33.4908 19.6304 32.3887 19.5959C30.0378 19.3491 27.7587 21.0027 26.5607 21.0027C25.3395 21.0027 23.495 19.6204 21.5088 19.6613C20.224 19.7028 18.9719 20.0764 17.8745 20.7457C16.7771 21.4149 15.8717 22.3571 15.2467 23.4803C12.5391 28.1681 14.5587 35.0575 17.1524 38.8468C18.45 40.7023 19.9666 42.7749 21.951 42.7014C23.8929 42.6209 24.6182 41.4631 26.9622 41.4631C29.2845 41.4631 29.9649 42.7014 31.9896 42.6547C34.0733 42.6209 35.3862 40.791 36.6383 38.9179C37.5707 37.5958 38.2881 36.1346 38.7641 34.5884C37.5535 34.0764 36.5204 33.2193 35.7937 32.1241C35.0669 31.0289 34.6786 29.744 34.6772 28.4295Z" fill="white"/>
                                    <path d="M30.8529 17.1038C31.989 15.7399 32.5488 13.9869 32.4132 12.217C30.6775 12.3993 29.0741 13.2289 27.9226 14.5404C27.3596 15.1812 26.9284 15.9266 26.6537 16.734C26.3789 17.5415 26.266 18.3952 26.3214 19.2464C27.1896 19.2553 28.0485 19.0671 28.8334 18.696C29.6184 18.3249 30.3089 17.7805 30.8529 17.1038Z" fill="white"/>
                                    <path d="M59.2227 38.004H52.596L51.0045 42.7031H48.1977L54.4745 25.3179H57.3907L63.6674 42.7031H60.8127L59.2227 38.004ZM53.2823 35.8357H58.5351L55.9456 28.2095H55.8732L53.2823 35.8357Z" fill="white"/>
                                    <path d="M77.2231 36.3661C77.2231 40.305 75.1149 42.8357 71.9335 42.8357C71.1275 42.8778 70.326 42.6922 69.6207 42.3C68.9154 41.9078 68.3348 41.3249 67.9454 40.6181H67.8852V46.8962H65.2834V30.0278H67.8018V32.136H67.8497C68.257 31.4326 68.8474 30.8527 69.5581 30.4581C70.2688 30.0636 71.0732 29.869 71.8856 29.8952C75.1025 29.8952 77.2231 32.4382 77.2231 36.3661ZM74.5489 36.3661C74.5489 33.7999 73.2227 32.1128 71.1993 32.1128C69.2114 32.1128 67.8743 33.8355 67.8743 36.3661C67.8743 38.92 69.2114 40.6304 71.1993 40.6304C73.2227 40.6304 74.5489 38.9556 74.5489 36.3661Z" fill="white"/>
                                    <path d="M91.1739 36.3661C91.1739 40.305 89.0657 42.8357 85.8842 42.8357C85.0783 42.8778 84.2768 42.6922 83.5715 42.3C82.8662 41.9078 82.2856 41.3249 81.8962 40.6181H81.8359V46.8962H79.2342V30.0278H81.7525V32.136H81.8004C82.2077 31.4326 82.7981 30.8527 83.5088 30.4582C84.2195 30.0636 85.0239 29.869 85.8363 29.8952C89.0534 29.8952 91.1739 32.4382 91.1739 36.3661ZM88.4997 36.3661C88.4997 33.7999 87.1735 32.1128 85.15 32.1128C83.1622 32.1128 81.825 33.8355 81.825 36.3661C81.825 38.92 83.1622 40.6304 85.15 40.6304C87.1735 40.6304 88.4997 38.9556 88.4997 36.3661Z" fill="white"/>
                                    <path d="M100.394 37.8591C100.587 39.5831 102.262 40.7151 104.55 40.7151C106.743 40.7151 108.321 39.5831 108.321 38.0286C108.321 36.6791 107.37 35.8712 105.116 35.3174L102.863 34.7747C99.671 34.0036 98.1889 32.5106 98.1889 30.0879C98.1889 27.0883 100.803 25.028 104.515 25.028C108.189 25.028 110.707 27.0883 110.792 30.0879H108.165C108.008 28.353 106.574 27.3057 104.478 27.3057C102.382 27.3057 100.948 28.3653 100.948 29.9075C100.948 31.1366 101.864 31.8598 104.105 32.4135L106.02 32.8838C109.587 33.7273 111.069 35.1602 111.069 37.7031C111.069 40.9557 108.478 42.9928 104.358 42.9928C100.502 42.9928 97.899 41.0035 97.7309 37.859L100.394 37.8591Z" fill="white"/>
                                    <path d="M116.684 27.0282V30.0278H119.095V32.0882H116.684V39.0759C116.684 40.1614 117.167 40.6673 118.226 40.6673C118.513 40.6623 118.798 40.6422 119.082 40.6071V42.6551C118.606 42.7442 118.122 42.7845 117.637 42.7755C115.071 42.7755 114.07 41.8116 114.07 39.3534V32.0882H112.227V30.0278H114.07V27.0282H116.684Z" fill="white"/>
                                    <path d="M120.491 36.3661C120.491 32.3781 122.839 29.872 126.502 29.872C130.177 29.872 132.515 32.378 132.515 36.3661C132.515 40.3652 130.189 42.8603 126.502 42.8603C122.816 42.8603 120.491 40.3652 120.491 36.3661ZM129.864 36.3661C129.864 33.6304 128.61 32.0157 126.502 32.0157C124.394 32.0157 123.142 33.6427 123.142 36.3661C123.142 39.1128 124.394 40.7152 126.502 40.7152C128.61 40.7152 129.864 39.1128 129.864 36.3661Z" fill="white"/>
                                    <path d="M134.66 30.0278H137.141V32.1852H137.202C137.37 31.5114 137.764 30.916 138.32 30.4989C138.875 30.0819 139.557 29.8687 140.251 29.8952C140.55 29.8942 140.849 29.9267 141.142 29.9923V32.4259C140.763 32.3102 140.369 32.2571 139.973 32.2687C139.595 32.2533 139.218 32.32 138.868 32.464C138.519 32.608 138.204 32.8261 137.947 33.1031C137.689 33.3802 137.494 33.7097 137.376 34.069C137.258 34.4283 137.219 34.809 137.262 35.1849V42.703H134.66L134.66 30.0278Z" fill="white"/>
                                    <path d="M153.138 38.9802C152.788 41.2812 150.547 42.8603 147.68 42.8603C143.992 42.8603 141.704 40.3897 141.704 36.4263C141.704 32.4505 144.005 29.872 147.57 29.872C151.077 29.872 153.283 32.281 153.283 36.1241V37.0155H144.33V37.1728C144.289 37.6392 144.347 38.1092 144.501 38.5513C144.656 38.9935 144.902 39.3978 145.225 39.7374C145.547 40.077 145.938 40.344 146.372 40.5208C146.806 40.6977 147.272 40.7802 147.74 40.763C148.355 40.8206 148.972 40.6782 149.499 40.357C150.027 40.0358 150.436 39.5529 150.667 38.9802L153.138 38.9802ZM144.342 35.1972H150.679C150.703 34.7777 150.639 34.358 150.493 33.9643C150.346 33.5706 150.12 33.2115 149.828 32.9094C149.536 32.6073 149.185 32.3689 148.796 32.209C148.408 32.049 147.99 31.9712 147.57 31.9802C147.147 31.9777 146.727 32.0591 146.335 32.2197C145.943 32.3803 145.586 32.617 145.286 32.9161C144.986 33.2152 144.748 33.5708 144.586 33.9623C144.424 34.3538 144.341 34.7735 144.342 35.1972Z" fill="white"/>
                                    <path d="M52.9562 12.2319C53.5017 12.1928 54.049 12.2752 54.5588 12.4732C55.0685 12.6712 55.528 12.9799 55.904 13.3769C56.28 13.774 56.5632 14.2496 56.7332 14.7694C56.9032 15.2891 56.9556 15.8402 56.8869 16.3827C56.8869 19.0514 55.4445 20.5855 52.9562 20.5855H49.9388V12.2319H52.9562ZM51.2363 19.4041H52.8113C53.201 19.4274 53.5911 19.3635 53.9531 19.217C54.315 19.0706 54.6398 18.8453 54.9036 18.5575C55.1675 18.2697 55.3639 17.9267 55.4785 17.5534C55.5931 17.1801 55.6231 16.786 55.5662 16.3997C55.6189 16.0149 55.586 15.6233 55.4696 15.2527C55.3532 14.8822 55.1564 14.542 54.8931 14.2565C54.6298 13.971 54.3066 13.7473 53.9467 13.6013C53.5868 13.4554 53.1991 13.3909 52.8113 13.4124H51.2363V19.4041Z" fill="white"/>
                                    <path d="M58.3525 17.4306C58.3129 17.0163 58.3603 16.5983 58.4916 16.2034C58.623 15.8085 58.8355 15.4454 59.1154 15.1375C59.3953 14.8295 59.7365 14.5834 60.1171 14.415C60.4977 14.2466 60.9093 14.1597 61.3254 14.1597C61.7416 14.1597 62.1532 14.2466 62.5338 14.415C62.9144 14.5834 63.2556 14.8295 63.5355 15.1375C63.8154 15.4454 64.0279 15.8085 64.1593 16.2034C64.2906 16.5983 64.338 17.0163 64.2984 17.4306C64.3388 17.8453 64.2919 18.2639 64.1609 18.6594C64.0299 19.0549 63.8176 19.4187 63.5376 19.7273C63.2576 20.0358 62.9161 20.2824 62.5351 20.4512C62.1542 20.6199 61.7421 20.7071 61.3254 20.7071C60.9088 20.7071 60.4967 20.6199 60.1157 20.4512C59.7348 20.2824 59.3933 20.0358 59.1133 19.7273C58.8333 19.4187 58.621 19.0549 58.49 18.6594C58.3589 18.2639 58.3121 17.8453 58.3525 17.4306ZM63.0187 17.4306C63.0187 16.0641 62.4048 15.265 61.3275 15.265C60.246 15.265 59.6377 16.0641 59.6377 17.4306C59.6377 18.808 60.2461 19.601 61.3275 19.601C62.4048 19.601 63.0187 18.8026 63.0187 17.4306Z" fill="white"/>
                                    <path d="M72.2021 20.5854H70.9115L69.6086 15.9424H69.5101L68.2127 20.5854H66.9343L65.1966 14.2813H66.4586L67.5879 19.0917H67.6808L68.9769 14.2813H70.1705L71.4666 19.0917H71.565L72.6888 14.2813H73.933L72.2021 20.5854Z" fill="white"/>
                                    <path d="M75.3945 14.2813H76.5921V15.2827H76.6851C76.8428 14.923 77.1088 14.6215 77.4461 14.4202C77.7833 14.2189 78.1749 14.1278 78.5664 14.1596C78.8731 14.1365 79.1811 14.1828 79.4675 14.2949C79.754 14.407 80.0115 14.5822 80.2211 14.8074C80.4306 15.0325 80.5868 15.302 80.6781 15.5957C80.7694 15.8895 80.7934 16.2 80.7484 16.5043V20.5853H79.5042V16.8167C79.5042 15.8036 79.064 15.2998 78.1439 15.2998C77.9356 15.2901 77.7277 15.3256 77.5345 15.4037C77.3412 15.4819 77.1671 15.6009 77.0241 15.7527C76.8811 15.9044 76.7727 16.0853 76.7061 16.2828C76.6396 16.4804 76.6166 16.6901 76.6386 16.8974V20.5854H75.3945L75.3945 14.2813Z" fill="white"/>
                                    <path d="M82.7308 11.8203H83.975V20.5853H82.7308V11.8203Z" fill="white"/>
                                    <path d="M85.7044 17.4306C85.6648 17.0163 85.7123 16.5983 85.8437 16.2033C85.9751 15.8084 86.1876 15.4453 86.4675 15.1374C86.7475 14.8294 87.0887 14.5833 87.4693 14.4149C87.8499 14.2465 88.2615 14.1595 88.6777 14.1595C89.0939 14.1595 89.5056 14.2465 89.8862 14.4149C90.2668 14.5833 90.608 14.8294 90.888 15.1374C91.1679 15.4453 91.3804 15.8084 91.5118 16.2033C91.6432 16.5983 91.6906 17.0163 91.651 17.4306C91.6914 17.8453 91.6445 18.2639 91.5134 18.6594C91.3823 19.055 91.17 19.4187 90.89 19.7273C90.6099 20.0358 90.2685 20.2824 89.8875 20.4512C89.5065 20.6199 89.0944 20.7071 88.6777 20.7071C88.2611 20.7071 87.849 20.6199 87.468 20.4512C87.087 20.2824 86.7455 20.0358 86.4655 19.7273C86.1855 19.4187 85.9731 19.055 85.8421 18.6594C85.711 18.2639 85.6641 17.8453 85.7044 17.4306ZM90.3706 17.4306C90.3706 16.0641 89.7568 15.265 88.6794 15.265C87.598 15.265 86.9896 16.0641 86.9896 17.4306C86.9896 18.808 87.598 19.601 88.6794 19.601C89.7568 19.601 90.3706 18.8026 90.3706 17.4306Z" fill="white"/>
                                    <path d="M92.9608 18.8026C92.9608 17.6678 93.8057 17.0136 95.3055 16.9206L97.0131 16.8222V16.2781C97.0131 15.6122 96.5729 15.2363 95.7225 15.2363C95.028 15.2363 94.5468 15.4912 94.4087 15.9369H93.2042C93.3313 14.8541 94.3499 14.1596 95.7799 14.1596C97.3604 14.1596 98.2518 14.9464 98.2518 16.2781V20.5854H97.0542V19.6994H96.9557C96.7559 20.0172 96.4754 20.2763 96.1427 20.4502C95.81 20.6241 95.4371 20.7066 95.0622 20.6892C94.7975 20.7168 94.53 20.6885 94.277 20.6064C94.0239 20.5242 93.7909 20.3899 93.5929 20.2121C93.3949 20.0344 93.2364 19.8171 93.1275 19.5743C93.0186 19.3315 92.9618 19.0686 92.9608 18.8026ZM97.0131 18.2639V17.7368L95.4737 17.8353C94.6055 17.8934 94.2118 18.1887 94.2118 18.7444C94.2118 19.3118 94.7039 19.642 95.3808 19.642C95.5791 19.6621 95.7794 19.6421 95.9698 19.5831C96.1602 19.5242 96.3368 19.4276 96.4891 19.299C96.6414 19.1704 96.7663 19.0125 96.8563 18.8347C96.9463 18.6569 96.9997 18.4627 97.0131 18.2639Z" fill="white"/>
                                    <path d="M99.887 17.4306C99.887 15.4386 100.911 14.1767 102.504 14.1767C102.898 14.1585 103.289 14.2529 103.631 14.4487C103.973 14.6446 104.253 14.9338 104.437 15.2827H104.53V11.8203H105.774V20.5853H104.582V19.5893H104.483C104.285 19.9358 103.996 20.2215 103.647 20.4154C103.298 20.6092 102.903 20.7039 102.504 20.6892C100.9 20.6893 99.887 19.4274 99.887 17.4306ZM101.172 17.4306C101.172 18.7677 101.802 19.5723 102.857 19.5723C103.905 19.5723 104.553 18.7561 104.553 17.4361C104.553 16.1222 103.898 15.2944 102.857 15.2944C101.809 15.2944 101.172 16.1044 101.172 17.4306Z" fill="white"/>
                                    <path d="M110.922 17.4306C110.882 17.0163 110.929 16.5983 111.061 16.2034C111.192 15.8085 111.405 15.4454 111.684 15.1375C111.964 14.8295 112.306 14.5834 112.686 14.415C113.067 14.2466 113.478 14.1597 113.894 14.1597C114.311 14.1597 114.722 14.2466 115.103 14.415C115.483 14.5834 115.825 14.8295 116.105 15.1375C116.384 15.4454 116.597 15.8085 116.728 16.2034C116.86 16.5983 116.907 17.0163 116.867 17.4306C116.908 17.8453 116.861 18.2639 116.73 18.6594C116.599 19.0549 116.387 19.4187 116.107 19.7273C115.827 20.0358 115.485 20.2824 115.104 20.4512C114.723 20.6199 114.311 20.7071 113.894 20.7071C113.478 20.7071 113.066 20.6199 112.685 20.4512C112.304 20.2824 111.962 20.0358 111.682 19.7273C111.402 19.4187 111.19 19.0549 111.059 18.6594C110.928 18.2639 110.881 17.8453 110.922 17.4306ZM115.588 17.4306C115.588 16.0641 114.974 15.265 113.897 15.265C112.815 15.265 112.207 16.0641 112.207 17.4306C112.207 18.808 112.815 19.601 113.897 19.601C114.974 19.601 115.588 18.8026 115.588 17.4306Z" fill="white"/>
                                    <path d="M118.537 14.2813H119.734V15.2827H119.827C119.985 14.923 120.251 14.6215 120.588 14.4202C120.926 14.2189 121.317 14.1278 121.709 14.1596C122.015 14.1365 122.323 14.1828 122.61 14.2949C122.896 14.407 123.154 14.5822 123.363 14.8074C123.573 15.0325 123.729 15.302 123.82 15.5957C123.912 15.8895 123.936 16.2 123.891 16.5043V20.5853H122.647V16.8167C122.647 15.8036 122.206 15.2998 121.286 15.2998C121.078 15.2901 120.87 15.3256 120.677 15.4037C120.483 15.4819 120.309 15.6009 120.166 15.7527C120.023 15.9044 119.915 16.0853 119.848 16.2828C119.782 16.4804 119.759 16.6901 119.781 16.8974V20.5854H118.537V14.2813Z" fill="white"/>
                                    <path d="M130.921 12.7117V14.31H132.287V15.3579H130.921V18.5995C130.921 19.2599 131.193 19.549 131.812 19.549C131.971 19.5485 132.129 19.5389 132.287 19.5203V20.5566C132.063 20.5966 131.837 20.6179 131.61 20.6202C130.226 20.6202 129.675 20.1335 129.675 18.9181V15.3579H128.674V14.3099H129.675V12.7117H130.921Z" fill="white"/>
                                    <path d="M133.986 11.8203H135.219V15.2943H135.318C135.483 14.9313 135.756 14.6281 136.1 14.426C136.444 14.2239 136.842 14.1328 137.24 14.165C137.545 14.1484 137.85 14.1994 138.133 14.3142C138.416 14.4291 138.671 14.605 138.878 14.8295C139.086 15.054 139.241 15.3215 139.333 15.6129C139.425 15.9042 139.452 16.2124 139.411 16.5152V20.5854H138.166V16.8222C138.166 15.8152 137.697 15.3053 136.818 15.3053C136.604 15.2877 136.389 15.3171 136.187 15.3914C135.986 15.4657 135.803 15.583 135.652 15.7353C135.501 15.8875 135.385 16.0709 135.312 16.2727C135.239 16.4745 135.211 16.6898 135.23 16.9035V20.5853H133.986L133.986 11.8203Z" fill="white"/>
                                    <path d="M146.665 18.8832C146.496 19.4594 146.13 19.9577 145.631 20.2912C145.131 20.6246 144.531 20.7718 143.934 20.707C143.518 20.718 143.106 20.6385 142.724 20.4739C142.343 20.3094 142.001 20.0638 141.724 19.7542C141.447 19.4446 141.241 19.0784 141.12 18.6811C140.998 18.2837 140.965 17.8647 141.022 17.4531C140.966 17.0403 141 16.6204 141.121 16.2219C141.242 15.8233 141.448 15.4554 141.723 15.1431C141.999 14.8308 142.338 14.5814 142.719 14.4117C143.099 14.242 143.512 14.156 143.928 14.1596C145.682 14.1596 146.74 15.358 146.74 17.3376V17.7717H142.289V17.8414C142.269 18.0728 142.299 18.3056 142.374 18.5251C142.45 18.7445 142.571 18.9457 142.729 19.1158C142.887 19.2858 143.079 19.4209 143.292 19.5125C143.506 19.604 143.736 19.65 143.968 19.6474C144.265 19.6832 144.567 19.6296 144.834 19.4935C145.101 19.3574 145.322 19.145 145.468 18.8832L146.665 18.8832ZM142.289 16.8516H145.473C145.489 16.64 145.46 16.4275 145.389 16.2277C145.317 16.0279 145.205 15.8452 145.059 15.6914C144.913 15.5376 144.736 15.4161 144.54 15.3346C144.344 15.2532 144.133 15.2136 143.921 15.2185C143.706 15.2158 143.493 15.2562 143.293 15.3373C143.094 15.4184 142.913 15.5386 142.761 15.6908C142.609 15.843 142.489 16.0241 142.407 16.2235C142.326 16.4228 142.286 16.6364 142.289 16.8516Z" fill="white"/>
                                </svg>

                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-1"></div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="download-main">
                        <div class="download-main-img">
                            <img src="{{ asset($homepage->mobile_app_image) }}" alt="thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!--   Download-part-end -->


    <!--Blogs-part-start -->


    <!-- <section class=" blogs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="taitel">
                        <div class="taitel-img">
                            <span>
                                <svg width="128" height="6" viewBox="0 0 128 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5C18.223 1.98151 67.5353 -2.24439 127 5" stroke="#46D993" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            </span>
                        </div>
                        <span>{{ __('translate.Recent News') }}</span>
                    </div>

                    <h2 class="blogs-taitel">{{ __('translate.Read Our Latest Blogs') }}</h2>
                </div>
            </div>

            <div class="row g-5 mt-32px ">
                @foreach ($blogs as $blog)
                    <div class=" col-xl-3  col-lg-4 col-sm-6 col-md-6" data-aos="fade-up" data-aos-delay="50">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="{{ asset($blog->image) }}" alt="thumb">
                            </div>

                            <div class="blog-item-inner">
                                <div class="blog-item-inner-item">
                                    <div class="blog-item-inner-item-box">
                                        <div class="icon">
                                            <span>
                                                <svg width="12" height="15" viewBox="0 0 12 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.76295 14.9996C1.56168 14.9336 1.35347 14.8896 1.16261 14.7978C0.399159 14.4272 -0.0276769 13.6273 0.00355506 12.743C0.0417274 11.6936 0.277702 10.7103 0.767002 9.7966C1.42634 8.56373 2.37024 7.65741 3.59523 7.07767C3.67504 7.04098 3.75486 7.00428 3.85202 6.95658C2.68256 5.9512 2.17591 4.67062 2.43617 3.10017C2.58886 2.18285 3.03999 1.42698 3.72709 0.847238C5.24358 -0.42967 7.34653 -0.216852 8.60969 1.1738C9.36619 2.00673 9.70974 3.01211 9.61952 4.16426C9.52929 5.31642 9.0157 6.23374 8.14815 6.94924C8.33554 7.04098 8.50558 7.11436 8.67215 7.20609C10.1505 8.006 11.1638 9.24254 11.7016 10.9011C11.9272 11.5945 12.0348 12.3137 11.9931 13.0476C11.9376 14.0163 11.2262 14.8235 10.317 14.9703C10.2927 14.974 10.2684 14.9886 10.2407 14.9996C7.41246 14.9996 4.58771 14.9996 1.76295 14.9996ZM6.00703 13.8475C7.30489 13.8475 8.60275 13.8401 9.89714 13.8512C10.5704 13.8548 10.959 13.3338 10.9035 12.7577C10.8827 12.5486 10.8792 12.3394 10.848 12.1303C10.6328 10.6185 9.9249 9.41133 8.7242 8.5784C7.17302 7.50331 5.51078 7.3602 3.84508 8.23349C2.06139 9.16916 1.15914 10.7506 1.0932 12.8568C1.08973 13.0072 1.1279 13.1723 1.1869 13.3044C1.36388 13.6934 1.68661 13.8438 2.08221 13.8438C3.39395 13.8475 4.70223 13.8475 6.00703 13.8475ZM5.99314 6.53462C7.39164 6.54195 8.54028 5.33843 8.54722 3.85238C8.55416 2.37733 7.4194 1.16647 6.00703 1.15179C4.62241 1.13344 3.45989 2.35531 3.45295 3.8377C3.44601 5.31275 4.59118 6.52728 5.99314 6.53462Z" />
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="txt">
                                            <a href="javascript:;">{{ __('translate.By') }} {{ $blog?->author?->name }}</a>
                                        </div>
                                    </div>
                                    <div class="blog-item-inner-item-box">
                                        <div class="icon">
                                            <span>
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.73782 12.2097C2.29853 12.1117 1.89335 11.9498 1.53083 11.6985C0.554141 11.0211 0.0252811 10.0839 0.0124861 8.89528C-0.0088389 7.06341 -0.00457391 5.23154 0.00822109 3.39968C0.0252811 1.68284 1.24081 0.298285 2.94254 0.038416C3.11314 0.0128551 3.29227 0.00433481 3.46714 0.00433481C6.15835 0.00433481 8.84956 7.46544e-05 11.5408 0.00433481C13.2084 0.00859496 14.5732 1.10771 14.9187 2.73083C14.9698 2.97366 14.9912 3.22501 14.9912 3.47636C14.9954 5.25284 14.9997 7.03359 14.9954 8.81007C14.9912 10.5141 13.8652 11.8944 12.2061 12.2139C11.9715 12.2608 11.7327 12.2693 11.4939 12.2693C10.2954 12.2736 9.1012 12.2736 7.90273 12.2693C7.77478 12.2693 7.66816 12.2991 7.56153 12.3716C6.33321 13.1938 5.10489 14.0117 3.87657 14.8339C3.71877 14.9404 3.55243 15.0171 3.35624 14.9958C2.98945 14.9575 2.74635 14.6848 2.74209 14.3014C2.73782 13.6752 2.74209 13.0447 2.74209 12.4184C2.73782 12.3545 2.73782 12.2906 2.73782 12.2097ZM4.09409 13.0447C4.17086 12.9978 4.21777 12.9637 4.26469 12.9339C5.18166 12.3247 6.09864 11.7155 7.01135 11.0978C7.20754 10.9657 7.40373 10.9103 7.6383 10.9103C8.94339 10.9146 10.2442 10.9146 11.5493 10.9103C12.7435 10.9061 13.6349 10.0114 13.6349 8.81433C13.6349 7.02507 13.6349 5.2358 13.6349 3.44654C13.6349 2.26222 12.7392 1.36332 11.5536 1.36332C8.85809 1.36332 6.15835 1.36332 3.46287 1.36332C2.27294 1.36332 1.37729 2.26222 1.37729 3.45506C1.37729 5.24006 1.37729 7.02081 1.37729 8.80581C1.37729 9.97309 2.20896 10.8464 3.37757 10.9061C3.85098 10.9316 4.09409 11.183 4.09835 11.6559C4.09409 12.1074 4.09409 12.5547 4.09409 13.0447Z" />
                                                    <path
                                                        d="M7.48488 5.45711C6.13714 5.45711 4.79367 5.45711 3.44593 5.45711C2.93839 5.45711 2.60572 4.99701 2.77632 4.54118C2.87868 4.26427 3.09193 4.12368 3.38195 4.09386C3.43313 4.0896 3.48858 4.0896 3.53976 4.0896C6.17979 4.0896 8.81556 4.0896 11.4556 4.0896C11.5707 4.0896 11.6902 4.09812 11.8011 4.1322C12.1167 4.23018 12.3001 4.54544 12.2531 4.88625C12.2105 5.19724 11.929 5.44859 11.5963 5.45285C11.2125 5.46137 10.8286 5.45285 10.4491 5.45285C9.46384 5.45711 8.47436 5.45711 7.48488 5.45711Z" />
                                                    <path
                                                        d="M7.48489 8.17944C6.58925 8.17944 5.69786 8.1837 4.80648 8.17944C4.3288 8.17518 4.01319 7.7875 4.11981 7.34019C4.18379 7.05902 4.43116 6.84601 4.72118 6.82897C4.76383 6.82471 4.80648 6.82471 4.84913 6.82471C6.6191 6.82471 8.39334 6.82471 10.1633 6.82471C10.56 6.82471 10.8287 7.02919 10.8969 7.37427C10.9779 7.78324 10.6836 8.16666 10.2657 8.17944C9.89035 8.19222 9.51077 8.1837 9.13118 8.1837C8.581 8.17944 8.03508 8.17944 7.48489 8.17944Z" />
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="txt">
                                            <a href="javascript:;">{{ $blog->total_comment }} {{ __('translate.Comments') }}</a>
                                        </div>
                                    </div>
                                </div>


                                <a href="{{ route('blog', $blog->slug) }}" class="blog-item-inner-text">
                                    <h3>{{ $blog->title }}</h3>
                                </a>

                                <div class="blog-item-btn">
                                    <a href="{{ route('blog', $blog->slug) }}">{{ __('translate.Learn More') }}
                                        <span>
                                            <svg width="15" height="10" viewBox="0 0 15 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.6227 4.38164C12.5587 4.38164 12.4989 4.38164 12.4349 4.38164C8.56302 4.38164 4.69114 4.38164 0.819254 4.38164C0.7168 4.38164 0.614347 4.37773 0.516163 4.40117C0.195996 4.46758 -0.0302552 4.76447 0.00389589 5.05746C0.0423159 5.37779 0.302718 5.60827 0.644229 5.6278C0.712532 5.63171 0.780834 5.63171 0.853405 5.63171C4.71248 5.63171 8.57583 5.63171 12.4349 5.63171C12.4989 5.63171 12.5587 5.63171 12.6654 5.63171C12.5971 5.69812 12.5587 5.73719 12.516 5.77625C11.3805 6.81928 10.2407 7.86231 9.10517 8.90534C8.82342 9.16317 8.79354 9.51866 9.0326 9.77648C9.27166 10.0382 9.68574 10.0773 9.98029 9.86633C10.0272 9.83508 10.0657 9.79602 10.1084 9.75695C11.6494 8.34671 13.1905 6.93257 14.7273 5.51842C15.0987 5.17856 15.0987 4.8387 14.7273 4.49883C13.1777 3.07687 11.6238 1.65491 10.0742 0.229051C9.8693 0.0415392 9.63878 -0.0483093 9.35276 0.0259132C8.88319 0.147015 8.70389 0.670483 9.00698 1.01425C9.0454 1.06113 9.09236 1.10019 9.13932 1.14317C10.2663 2.17448 11.389 3.20969 12.5203 4.241C12.563 4.28007 12.6185 4.2996 12.6654 4.33085C12.6483 4.34257 12.6355 4.3621 12.6227 4.38164Z" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> -->

    <!--Blogs-part-end -->

    <!-- Buy in 3 Easy Steps start -->
            <section class="Easy-test" style="padding-top: 100px">
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
                    </div> 
            </section>
    <!-- Buy in 3 Easy Steps end -->

    <!-- About Alpine Japan Start -->
            <div class="container pb-5 pt-5">
                <div class="row mb-4">
                    <div class="col-12 text-center text-md-start" style="margin-left: 50px;">
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
            <div class="container pb-5">
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
    </script>
    


</main>
@endsection
