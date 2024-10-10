@extends('layout')
@section('title')
    <title>{{ $seo_setting->seo_title }}</title>
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{!! strip_tags(clean($seo_setting->seo_description)) !!}">
@endsection

@section('body-content')

<style>
    .page-item.active .page-link {
        color:white !important;
    }

    .page-link,
    .page-link:hover{
        color: #0a58ca !important;
    }

    .page-item .page-link {
        color: #0a58ca !important;
    }
</style>
<main>
    <!-- banner-part-start  -->

        <section class="inner-banner">
            <div class="inner-banner-img">
                <div class="container-fluid">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-banner-df">
                            <!-- <h1 class="inner-banner-taitel">{{ __('translate.Car Listing') }}</h1> -->
                            <nav aria-label="breadcrumb">   
                                <ol class="breadcrumb">
                                    <li>JDM Stock</li>
                                    <li><i class="bi bi-arrow-right-short"></i></li>
                                    <li>Volvo</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="row" style=" padding-top: 20px;padding-bottom: 14px">
                    <div class="col-lg-12">
                        <span>
                            <h6>JDM Stock <i class="bi bi-arrow-right-short"></i> Volvo</h6>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    
    <!-- banner-part-end -->

    <!-- Inventory-part-start -->

    <section class="inventory feature-two">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <form action="" id="search_form">
                        <div class="inventory-main-box">
                           
                            <div class="card" style="padding-bottom: 10px;padding-left:10px; padding-right:10px; margin-bottom:15px;">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            Collapse All Filters
                                        </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" style="padding-bottom: 10px;padding-left:10px; padding-right:10px; margin-bottom:15px;">
                                <div class="accordion" id="accordionPanelsStayOpenExample1">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            Select Location
                                        </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card" style="padding-bottom: 10px;padding-left:10px; padding-right:10px; margin-bottom:15px;">
                                <div class="accordion" id="accordionPanelsStayOpenExample2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            Brand & Model
                                        </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show">
                                        
                                            <div class="form-check me-3" style="padding-bottom: 20px">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Brand New Cars
                                                    </label>

                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">

                                            </div>

                                            <div class="input-group">
                                                <input class="form-control border-end-0 border" style="font-size:12px;"  type="search" id="example-search-input">
                                                <span class="input-group-append">
                                                    <button class="btn btn-outline-secondary bg-white border-start-0 accordion border ms-n5" type="button">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                            </div>

                                            <h6 style="padding-top:30px">Popular</h6>
                                            @foreach($brand_count as $brand)
                                            <div class="d-flex align-items-center">
                                                <!-- Checkbox -->
                                                    <div class="form-check me-3">
                                                        <input class="form-check-input popular-search" name="jdm_model[]" type="checkbox" value="{{$brand->model}}"
                                                        {{ in_array($brand->model, request('jdm_model', [])) ? 'checked' : '' }}>
                                                        
                                                        <label class="form-check-label">
                                                            {{ $brand->model }} ({{ $brand->total_count }})
                                                        </label>
                                                    </div>
                                            </div>
                                            @endforeach
                                            <h6 style="color:#038ffc;">Show More Brands</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" style="padding-bottom: 10px;padding-left:10px; padding-right:10px; margin-bottom:15px;">
                                <div class="accordion" id="accordionPanelsStayOpenExample3">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            Budget
                                        </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <input type="hidden" id="priceSearch" name="price_range_scale" value="">
                                                <button id="searchButton" style="margin-left: 5px; padding: 5px 10px;">Search</button>
                                                <span><p style="color: #038ffc;padding-left:10px; font-size:12px"><b>$0 $500,000</b></p></span>
                                                <div class="range-container">
                                                    <input type="range" class="form-range" min="0" max="5" step="0.1" id="customRangeMin" value="1">
                                                    <input type="range" class="form-range" min="0" max="5" step="0.1" id="customRangeMax" value="2">
                                                </div>

                                                <span><p style="padding-left:10px; font-size:12px; word-spacing: 145px;padding-top:10px">$5k $5Lakh</p></span>

                                                <h6 style="padding-top:30px">Price Range</h6>

                                                @foreach($price_range as $key=>$range)
                                                <div class="d-flex align-items-center">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input popular-search" type="checkbox" name="price_range[]" value="{{$key}}" id="defaultCheck1"
                                                            {{ in_array($key, request('price_range', [])) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="defaultCheck1">
                                                             {{$key}}({{$range}})
                                                            
                                                            </label>
                                                        </div>
                                                </div>

                                                @endforeach

                                               

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="card" style="padding-bottom: 10px;padding-left:10px; padding-right:10px; margin-bottom:15px;">
                                <div class="accordion" id="accordionPanelsStayOpenExample5">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsesix" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            Model Year
                                        </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapsesix" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                            <span><p style="color: #038ffc;padding-left:10px; font-size:12px"><b>$1,00,000 $3,00,000</b></p></span>
                                                <div class="range-container">
                                                    <input type="range" class="form-range" min="1960" max="2024"  id="start">
                                                    <output name="age_output" id="age_output" for="start" ></output>
                                                    <input type="hidden" id="start_year" name="jdm_year[]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                         

                            <div class="card" style="padding-bottom: 10px;padding-left:10px; padding-right:10px; margin-bottom:15px;">
                                <div class="accordion" id="accordionPanelsStayOpenExample7">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseeight" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            Transmission
                                        </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseeight" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            @foreach($transmission as $transmission)
                                            <div class="d-flex align-items-center">
                                                <!-- Checkbox -->
                                                  <div class="form-check me-3">
                                                      <input class="form-check-input popular-search" type="checkbox" name="transmission[]" value="{{$transmission->transmission}}" id="defaultCheck2"
                                                      {{ in_array($transmission->transmission, request('transmission', [])) ? 'checked' : '' }}>

                                                      <label class="form-check-label" for="defaultCheck1">
                                                       {{$transmission->transmission}}({{$transmission->total_count}})
                                                      </label>
                                                  </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    
                    @if ($listing_ads->status == 'enable')
                        <div class="inventory-main-box-thumb">
                            <a href="{{ $listing_ads->link }}" target="_blank"> <img src="{{ asset('japan_home/Ads.svg') }}" alt="img"></a>
                        </div>
                    @endif
                </div>

                <div class="col-lg-9">
                    <div class="inventory-ber">
                        <div class="inventory-ber-left">
                            <div class="inventory-sarch-ber-item">
                                <div class="inventory-sarch-ber">

                                    <div class="input-group">
                                        <input type="text" class="form-control position-relative" id="outside_form_search" name="search"
                                            placeholder="{{ __('translate.Search Car') }}" value="{{ request()->get('search') }}">
                                        <span class="input-group-append position-absolute"
                                         style="right: 16px;top: 16px;">
                                            <a href="javascript:void(0);" id="outside_form_btn">
                                            <i class="bi bi-search"></i></a></span>
                                    </div>
                                            
                                    <!-- <button id="outside_form_btn" type="button" class="thm-btn-two">{{ __('translate.Search Now') }}</button> -->
                                </div>

                                <div class="inventory-sarch-ber-text" style="padding-left:100px">
                                    <p style="display:inline; color:black; font-weight:bold">{{ __('Sort By:') }}</p>
                                    <div class="dropdown" style="display:inline; ">
                                        <a class="btn btn-white dropdown-toggle" style="padding-bottom:10px; color:#038ffc !important" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            Recently Added
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a style="color:#038ffc !important" class="dropdown-item" href="#">Action</a></li>
                                            <li><a style="color:#038ffc !important" class="dropdown-item" href="#">Another action</a></li>
                                            <li><a style="color:#038ffc !important" class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="inventory-ber-right">
                            <div class="inventory-ber-right-btn">
                                <ul class="nav nav-pills " id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true">

                                            <span>
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.88404 0.221924H2.58645C1.28267 0.221924 0.22168 1.28292 0.22168 2.5867V6.88375C0.22168 8.18753 1.28267 9.24853 2.58645 9.24853H6.88351C8.18729 9.24853 9.24828 8.18753 9.24828 6.88375V2.5867C9.24881 1.28292 8.18781 0.221924 6.88404 0.221924ZM7.67229 6.88428C7.67229 7.31887 7.31863 7.67254 6.88404 7.67254H2.58645C2.15186 7.67254 1.7982 7.31887 1.7982 6.88428V2.58722C1.7982 2.15263 2.15186 1.79897 2.58645 1.79897H6.88351C7.3181 1.79897 7.67177 2.15263 7.67177 2.58722L7.67229 6.88428ZM17.5161 0.221924H13.2185C11.9147 0.221924 10.8537 1.28292 10.8537 2.5867V6.88375C10.8537 8.18753 11.9147 9.24853 13.2185 9.24853H17.5161C18.8198 9.24853 19.8808 8.18753 19.8808 6.88375V2.5867C19.8808 1.28292 18.8204 0.221924 17.5161 0.221924ZM18.3043 6.88428C18.3043 7.31887 17.9507 7.67254 17.5161 7.67254H13.2185C12.7839 7.67254 12.4302 7.31887 12.4302 6.88428V2.58722C12.4302 2.15263 12.7839 1.79897 13.2185 1.79897H17.5161C17.9507 1.79897 18.3043 2.15263 18.3043 2.58722V6.88428ZM6.88404 10.3479H2.58645C1.28267 10.3479 0.22168 11.4089 0.22168 12.7127V17.0097C0.22168 18.3135 1.28267 19.3745 2.58645 19.3745H6.88351C8.18729 19.3745 9.24828 18.3135 9.24828 17.0097V12.7127C9.24881 11.4084 8.18781 10.3479 6.88404 10.3479ZM7.67229 17.0097C7.67229 17.4443 7.31863 17.798 6.88404 17.798H2.58645C2.15186 17.798 1.7982 17.4443 1.7982 17.0097V12.7127C1.7982 12.2781 2.15186 11.9244 2.58645 11.9244H6.88351C7.3181 11.9244 7.67177 12.2781 7.67177 12.7127L7.67229 17.0097ZM17.5161 10.3479H13.2185C11.9147 10.3479 10.8537 11.4089 10.8537 12.7127V17.0097C10.8537 18.3135 11.9147 19.3745 13.2185 19.3745H16.4293C16.8644 19.3745 17.2176 19.0214 17.2176 18.5862C17.2176 18.1511 16.8644 17.798 16.4293 17.798H13.2185C12.7839 17.798 12.4302 17.4443 12.4302 17.0097V12.7127C12.4302 12.2781 12.7839 11.9244 13.2185 11.9244H17.5161C17.9507 11.9244 18.3043 12.2781 18.3043 12.7127V16.3145C18.3043 16.7496 18.6575 17.1027 19.0926 17.1027C19.5277 17.1027 19.8808 16.7496 19.8808 16.3145V12.7127C19.8808 11.4084 18.8204 10.3479 17.5161 10.3479Z" />
                                                </svg>
                                            </span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false"><i
                                                class="fa-solid fa-list"></i></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                


                    <div class="tab-content" id="pills-home-tab">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row g-5">
                            @if(count($cars_array) > 0)  
                                @foreach ($cars_array as $index => $car)
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
                                                    <span> @if(session('front_lang')=='en')
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

                                                <a href="{{ route('jdm-stock-all-listing', $car['id']) }}">
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
                                                       {{-- @if(session('front_lang')=='en')
                                                            {{ html_decode($car['mileage']) }}
                                                        @else
                                                            {{ html_decode($car['mileage_en']) }}
                                                        @endif --}}
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
                                                    <h6 class="brand-car-btm-txt"><span><i class="bi bi-geo-alt-fill"></i> Hyogo, Japan&nbsp; &nbsp; &nbsp;     2024-02-02</span></h6>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            @else
                            <div class="col-12">
                                        <div class="not-found-box">
                                            <div class="not-found-thumb-main">
                                                <div class="not-fount-main-thumb">
                                                    <span>
                                                        <svg width="480" height="410" viewBox="0 0 480 410" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M471.499 0H294.403C289.728 0 285.902 3.81856 285.902 8.48569V255.137C285.902 259.804 289.728 263.622 294.403 263.622H471.499C476.174 263.622 479.999 259.804 479.999 255.137V8.48569C479.999 3.81856 476.174 0 471.499 0ZM478.583 255.137C478.583 258.955 475.466 262.208 471.499 262.208H294.403C290.578 262.208 287.319 259.096 287.319 255.137V8.48569C287.319 4.66713 290.436 1.41428 294.403 1.41428H471.499C475.324 1.41428 478.583 4.5257 478.583 8.48569V255.137Z" fill="#405FF2"/>
                                                            <path d="M471.499 0H294.403C289.728 0 285.902 3.81856 285.902 8.48569V32.8113H479.999V8.48569C479.999 3.81856 476.174 0 471.499 0ZM414.12 20.5071C411.853 20.5071 410.011 18.6685 410.011 16.4057C410.011 14.1428 411.853 12.3043 414.12 12.3043C416.387 12.3043 418.228 14.1428 418.228 16.4057C418.228 18.6685 416.387 20.5071 414.12 20.5071ZM435.796 20.5071C433.529 20.5071 431.688 18.6685 431.688 16.4057C431.688 14.1428 433.529 12.3043 435.796 12.3043C438.063 12.3043 439.905 14.1428 439.905 16.4057C439.905 18.6685 438.063 20.5071 435.796 20.5071ZM457.614 20.5071C455.348 20.5071 453.506 18.6685 453.506 16.4057C453.506 14.1428 455.348 12.3043 457.614 12.3043C459.881 12.3043 461.723 14.1428 461.723 16.4057C461.723 18.6685 459.881 20.5071 457.614 20.5071Z" fill="#405FF2"/>
                                                            <path d="M442.455 65.623H323.305V71.8459H442.455V65.623Z" fill="#405FF2"/>
                                                            <path d="M442.455 91.7871H323.305V98.01H442.455V91.7871Z" fill="#405FF2"/>
                                                            <path d="M442.455 117.811H323.305V124.033H442.455V117.811Z" fill="#405FF2"/>
                                                            <path d="M407.604 299.827H166.471C161.512 299.827 157.545 295.867 157.545 290.917V62.2274C157.545 57.2774 161.512 53.3174 166.471 53.3174H407.604C412.563 53.3174 416.53 57.2774 416.53 62.2274V290.775C416.672 295.725 412.563 299.827 407.604 299.827Z" fill="white" stroke="#263156" stroke-width="1.1192" stroke-miterlimit="10"/>
                                                            <path d="M404.063 92.3506H170.013V287.38H404.063V92.3506Z" fill="#DAE4FE"/>
                                                            <path d="M175.537 76.2292C177.806 76.2292 179.646 74.3929 179.646 72.1278C179.646 69.8626 177.806 68.0264 175.537 68.0264C173.268 68.0264 171.429 69.8626 171.429 72.1278C171.429 74.3929 173.268 76.2292 175.537 76.2292Z" fill="#263156"/>
                                                            <path d="M204.297 76.2292C206.566 76.2292 208.406 74.3929 208.406 72.1278C208.406 69.8626 206.566 68.0264 204.297 68.0264C202.028 68.0264 200.188 69.8626 200.188 72.1278C200.188 74.3929 202.028 76.2292 204.297 76.2292Z" fill="#263156"/>
                                                            <path d="M189.989 76.2292C192.258 76.2292 194.097 74.3929 194.097 72.1278C194.097 69.8626 192.258 68.0264 189.989 68.0264C187.719 68.0264 185.88 69.8626 185.88 72.1278C185.88 74.3929 187.719 76.2292 189.989 76.2292Z" fill="#263156"/>
                                                            <path d="M340.732 256.409H233.483C229.658 256.409 226.683 253.439 226.683 249.62V125.729C226.683 121.91 229.658 118.94 233.483 118.94H340.732C344.558 118.94 347.533 121.91 347.533 125.729V249.762C347.533 253.439 344.558 256.409 340.732 256.409Z" fill="white"/>
                                                            <path d="M330.106 204.506H243.967C242.975 204.506 241.983 203.657 241.983 202.525C241.983 201.535 242.833 200.545 243.967 200.545H330.106C331.098 200.545 332.09 201.394 332.09 202.525C332.09 203.657 331.24 204.506 330.106 204.506Z" fill="#B2C2FD"/>
                                                            <path d="M330.106 217.801H243.967C242.975 217.801 241.983 216.952 241.983 215.82C241.983 214.83 242.833 213.84 243.967 213.84H330.106C331.098 213.84 332.09 214.689 332.09 215.82C332.09 216.952 331.24 217.801 330.106 217.801Z" fill="#B2C2FD"/>
                                                            <path d="M330.106 232.934H243.967C242.975 232.934 241.983 232.085 241.983 230.953C241.983 229.963 242.833 228.973 243.967 228.973H330.106C331.098 228.973 332.09 229.821 332.09 230.953C332.09 232.085 331.24 232.934 330.106 232.934Z" fill="#B2C2FD"/>
                                                            <path d="M328.973 162.784H242.834C241.842 162.784 240.851 161.935 240.851 160.804C240.851 159.813 241.701 158.823 242.834 158.823H328.973C329.965 158.823 330.957 159.672 330.957 160.804C330.957 161.935 330.107 162.784 328.973 162.784Z" fill="#B2C2FD"/>
                                                            <path d="M328.973 176.079H242.834C241.842 176.079 240.851 175.23 240.851 174.099C240.851 173.108 241.701 172.118 242.834 172.118H328.973C329.965 172.118 330.957 172.967 330.957 174.099C330.957 175.23 330.107 176.079 328.973 176.079Z" fill="#B2C2FD"/>
                                                            <path d="M328.973 138.458H242.834C241.842 138.458 240.851 137.609 240.851 136.478C240.851 135.487 241.701 134.497 242.834 134.497H328.973C329.965 134.497 330.957 135.346 330.957 136.478C330.957 137.609 330.107 138.458 328.973 138.458Z" fill="#B2C2FD"/>
                                                            <path d="M328.973 151.754H242.834C241.842 151.754 240.851 150.905 240.851 149.773C240.851 148.783 241.701 147.793 242.834 147.793H328.973C329.965 147.793 330.957 148.642 330.957 149.773C330.957 150.905 330.107 151.754 328.973 151.754Z" fill="#B2C2FD"/>
                                                            <path d="M328.973 191.213H242.834C241.842 191.213 240.851 190.364 240.851 189.232C240.851 188.242 241.701 187.252 242.834 187.252H328.973C329.965 187.252 330.957 188.101 330.957 189.232C330.957 190.364 330.107 191.213 328.973 191.213Z" fill="#B2C2FD"/>
                                                            <path d="M287.038 210.869C315.128 210.869 337.9 188.137 337.9 160.096C337.9 132.055 315.128 109.323 287.038 109.323C258.947 109.323 236.176 132.055 236.176 160.096C236.176 188.137 258.947 210.869 287.038 210.869Z" stroke="#DE5469" stroke-width="5.596" stroke-miterlimit="10"/>
                                                            <path d="M323.164 124.173L251.051 196.018" stroke="#DE5469" stroke-width="5.596" stroke-miterlimit="10"/>
                                                            <path d="M42.6442 405.334C42.6442 405.334 36.8355 410.567 31.1684 403.354C25.5013 396.141 22.6678 390.484 20.9677 385.958C19.4092 381.432 19.2675 378.462 16.2923 374.502C13.3171 370.542 8.92515 367.289 9.77521 363.895C10.4836 361.067 16.1507 359.652 16.1507 359.652L30.46 382.705L42.6442 405.334Z" fill="#263156"/>
                                                            <path d="M31.3096 353.43L43.4938 349.046L49.1608 369.553L41.5103 372.24L33.5764 368.846L27.626 359.37L31.3096 353.43Z" fill="#ECC351"/>
                                                            <path d="M41.5102 372.24C41.5102 372.24 40.6601 385.393 41.2268 391.333C41.7935 397.273 47.0356 402.082 42.6436 405.335C38.2516 408.587 31.3095 395.293 27.3425 387.515C23.3756 379.736 23.0922 372.665 19.4086 369.553C15.8667 366.442 15.0166 360.926 16.1501 359.795C17.2835 358.663 29.4677 353.148 31.1678 353.43C31.1678 353.43 29.4677 355.835 33.8596 363.189C38.2516 370.543 41.5102 372.24 41.5102 372.24Z" fill="#405FF2"/>
                                                            <path d="M37.4014 386.665V386.807C37.4014 387.09 37.6847 387.373 37.9681 387.373L41.2266 387.231C41.51 387.231 41.7933 386.948 41.7933 386.665V386.524C41.7933 386.241 41.51 385.958 41.2266 385.958L37.9681 386.099C37.543 386.099 37.4014 386.382 37.4014 386.665Z" fill="white"/>
                                                            <path d="M37.5439 383.696V383.837C37.5439 384.12 37.8273 384.403 38.1107 384.403L41.3692 384.261C41.6526 384.261 41.9359 383.979 41.9359 383.696V383.554C41.9359 383.271 41.6526 382.988 41.3692 382.988L38.1107 383.13C37.8273 383.13 37.5439 383.413 37.5439 383.696Z" fill="white"/>
                                                            <path d="M37.5439 380.301V380.443C37.5439 380.725 37.8273 381.008 38.1107 381.008L41.3692 380.867C41.6526 380.867 41.9359 380.584 41.9359 380.301V380.16C41.9359 379.877 41.6526 379.594 41.3692 379.594L38.1107 379.735C37.8273 379.735 37.5439 380.018 37.5439 380.301Z" fill="white"/>
                                                            <path d="M37.6855 376.908V377.049C37.6855 377.332 37.9689 377.615 38.2523 377.615L41.5108 377.473C41.7942 377.473 42.0775 377.19 42.0775 376.908V376.766C42.0775 376.483 41.7942 376.2 41.5108 376.2L38.2523 376.342C37.8272 376.342 37.6855 376.625 37.6855 376.908Z" fill="white"/>
                                                            <path d="M186.304 398.547C186.304 398.547 187.579 406.184 178.512 407.174C169.445 408.022 163.069 407.598 158.394 406.608C153.719 405.618 151.027 404.062 146.21 404.487C141.251 404.911 136.292 406.891 133.742 404.487C131.759 402.507 133.6 396.85 133.6 396.85L160.802 396.991L186.304 398.547Z" fill="#263156"/>
                                                            <path d="M136.15 380.726L135.441 368.705L157.968 369.271L157.543 381.999L152.301 388.788L140.4 388.222L136.15 380.726Z" fill="#ECC351"/>
                                                            <path d="M157.544 382C157.544 382 168.312 389.637 173.554 392.324C178.796 394.87 185.738 393.173 186.163 398.547C186.588 404.063 171.712 402.79 162.928 401.942C154.144 401.093 148.052 397.699 143.377 399.113C138.701 400.527 133.743 398.264 133.317 396.709C133.034 395.153 134.734 381.859 135.868 380.586C135.868 380.586 137.001 383.273 145.643 383.556C154.427 383.839 157.544 382 157.544 382Z" fill="#405FF2"/>
                                                            <path d="M167.603 393.173C168.028 393.456 168.311 393.314 168.453 393.032L170.153 390.202C170.295 389.919 170.153 389.636 170.011 389.495L169.87 389.354C169.586 389.212 169.303 389.354 169.161 389.495L167.461 392.324C167.178 392.749 167.319 393.032 167.603 393.173Z" fill="white"/>
                                                            <path d="M165.053 391.476C165.478 391.759 165.761 391.617 165.903 391.334L167.603 388.505C167.745 388.222 167.603 387.939 167.461 387.798L167.32 387.656C167.036 387.515 166.753 387.656 166.611 387.798L164.911 390.627C164.77 390.91 164.911 391.334 165.053 391.476Z" fill="white"/>
                                                            <path d="M162.219 389.638C162.644 389.921 162.927 389.779 163.069 389.496L164.769 386.667C164.911 386.384 164.769 386.101 164.627 385.96L164.486 385.818C164.202 385.677 163.919 385.818 163.777 385.96L162.077 388.789C161.936 389.072 162.077 389.496 162.219 389.638Z" fill="white"/>
                                                            <path d="M159.386 387.799C159.811 388.082 160.094 387.94 160.236 387.658L161.936 384.828C162.078 384.545 161.936 384.262 161.794 384.121L161.653 383.979C161.369 383.838 161.086 383.98 160.944 384.121L159.244 386.95C159.103 387.375 159.244 387.658 159.386 387.799Z" fill="white"/>
                                                            <path d="M103.848 250.328C103.848 250.328 156.268 260.087 163.21 277.765C170.153 295.444 160.802 336.034 161.51 374.785C161.51 374.785 144.084 377.331 133.458 374.502L129.208 303.647L103.565 294.878C103.565 294.878 122.408 336.882 119.432 355.268C117.449 367.714 45.9022 375.916 45.9022 375.916L36.9766 350.742C36.9766 350.742 75.5126 338.862 77.0711 337.872C77.0711 337.872 47.8857 299.262 42.502 286.534C37.1182 273.805 38.3933 253.298 38.3933 253.298L103.848 250.328Z" fill="#263156"/>
                                                            <path d="M92.0895 148.784C92.2312 148.501 98.1816 125.165 98.3233 124.741L99.8817 125.165C104.982 129.408 110.649 135.49 115.75 139.733L112.916 152.603C112.916 152.603 118.441 160.664 118.016 161.937C116.741 166.321 89.5393 172.403 92.0895 148.784Z" fill="#ECC351"/>
                                                            <path d="M128.077 131.248C124.535 141.007 119.151 150.624 109.659 147.937C103 146.098 97.4746 135.774 97.1913 126.864C97.0496 122.338 96.7662 118.237 97.1913 115.408C97.4746 113.145 97.758 111.59 97.758 111.59L100.025 106.781L101.442 103.952C101.442 103.952 103.85 102.397 106.542 100.7C109.942 98.5782 114.192 102.821 114.334 102.68C114.476 102.397 128.502 102.255 132.044 108.195C132.327 108.761 132.61 109.327 132.752 109.892C132.894 110.317 132.894 110.741 132.894 111.165C132.752 112.014 132.61 113.287 132.327 114.842C132.185 115.55 132.044 116.257 131.902 116.964C131.619 118.237 131.335 119.651 131.052 121.207C130.344 124.46 129.352 127.995 128.077 131.248Z" fill="#ECC351"/>
                                                            <path d="M112.917 148.502C111.925 148.502 110.792 148.36 109.659 148.078C105.692 146.946 102.15 142.986 99.8828 138.036" stroke="#0D274E" stroke-width="0.2233" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M96.623 115.267C96.623 115.267 97.7565 92.9217 110.649 94.6188C110.649 94.6188 123.967 88.396 132.609 98.296C136.718 102.963 134.734 112.58 133.601 115.55C132.892 117.389 131.901 118.944 131.759 118.803C131.05 118.379 131.192 116.54 128.642 116.823C117.875 117.954 110.366 108.337 107.249 109.752C104.132 111.166 97.3314 128.42 97.3314 128.42C97.3314 128.42 97.7565 119.934 96.623 115.267Z" fill="#0D274E"/>
                                                            <path d="M116.701 110.735C117.81 107.317 116.055 103.687 112.779 102.628C109.504 101.569 105.95 103.481 104.841 106.899C103.731 110.317 105.487 113.947 108.762 115.006C112.037 116.065 115.592 114.153 116.701 110.735Z" fill="#0D274E"/>
                                                            <path d="M140.644 109.053C142.597 103.035 139.474 96.6334 133.668 94.7557C127.862 92.878 121.572 96.2349 119.619 102.254C117.666 108.272 120.789 114.674 126.595 116.551C132.401 118.429 138.691 115.072 140.644 109.053Z" fill="#0D274E"/>
                                                            <path d="M131.138 102.016C133.092 95.9975 129.968 89.5963 124.162 87.7186C118.357 85.8408 112.066 89.1978 110.113 95.2165C108.16 101.235 111.283 107.636 117.089 109.514C122.895 111.392 129.185 108.035 131.138 102.016Z" fill="#0D274E"/>
                                                            <path d="M112.793 103.044C114.36 98.214 111.829 93.0692 107.14 91.5526C102.451 90.036 97.3784 92.7219 95.8109 97.5517C94.2434 102.382 96.7742 107.526 101.464 109.043C106.153 110.56 111.225 107.874 112.793 103.044Z" fill="#0D274E"/>
                                                            <path d="M125.542 115.043C126.651 111.625 124.895 107.996 121.62 106.937C118.345 105.877 114.791 107.79 113.681 111.208C112.572 114.626 114.328 118.255 117.603 119.314C120.878 120.374 124.433 118.461 125.542 115.043Z" fill="#0D274E"/>
                                                            <path d="M131.761 118.519C130.06 120.64 126.802 122.479 120.851 117.104C111.642 108.76 103.992 111.164 104.842 108.619C105.692 106.073 112.493 106.073 120.143 108.477C127.794 110.882 133.319 116.539 131.761 118.519Z" fill="#0D274E"/>
                                                            <path d="M99.5994 117.671C99.5994 117.671 94.3574 112.862 93.5073 118.802C92.6572 124.883 97.8993 128.419 97.8993 128.419L99.5994 117.671Z" fill="#ECC351"/>
                                                            <path d="M97.7569 119.368C97.7569 119.368 93.3649 117.106 96.9068 124.46L97.7569 119.368Z" fill="#0D274E"/>
                                                            <path d="M127.224 161.937C127.224 161.937 140.259 204.082 141.25 208.891L158.818 195.596L167.46 204.506C167.46 204.506 151.026 237.459 128.641 235.338C118.44 234.348 109.373 186.121 109.373 186.121L117.449 178.201L120.282 167.877L127.224 161.937Z" fill="#ECC351"/>
                                                            <path d="M158.818 195.455C158.818 195.455 161.085 192.485 164.344 190.08C167.602 187.676 170.861 185.413 174.261 185.272C177.803 185.13 184.32 185.413 186.304 187.535C188.287 189.656 189.562 194.04 189.137 195.313C188.712 196.586 187.579 196.445 187.579 196.445C187.579 196.445 188.57 198.283 188.429 199.556C188.287 200.829 187.295 200.829 187.295 200.829C187.295 200.829 188.429 203.092 187.862 204.082C187.295 205.072 185.595 204.789 184.745 203.516C184.037 202.102 180.353 198.849 178.511 199.132C176.67 199.415 170.861 203.94 166.469 204.789C163.777 205.355 161.935 204.647 161.935 204.647L158.818 195.455Z" fill="#ECC351"/>
                                                            <path d="M187.579 196.586C187.579 196.586 184.745 192.343 183.754 191.636C182.62 190.929 178.512 190.929 178.512 190.929" stroke="#263156" stroke-width="0.3632" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M187.296 200.97C187.296 200.97 184.32 196.445 180.637 195.879" stroke="#263156" stroke-width="0.3632" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M202.597 125.445C192.821 135.486 186.304 151.609 188.146 161.509C189.987 171.268 199.48 171.126 209.255 161.085C219.031 151.043 225.548 134.921 223.706 125.021C221.865 115.121 212.372 115.262 202.597 125.445Z" fill="#263156"/>
                                                            <path d="M164.911 216.808C166.611 217.798 168.736 217.091 169.586 215.393L194.521 166.601L191.688 165.045L163.494 212.141C162.644 213.838 163.211 215.959 164.911 216.808Z" fill="#263156"/>
                                                            <path d="M199.622 124.456C189.846 134.498 183.329 150.62 185.171 160.52C187.013 170.279 196.505 170.137 206.281 160.096C216.056 150.055 222.574 133.932 220.732 124.032C218.89 114.132 209.398 114.415 199.622 124.456ZM219.032 125.87C220.732 134.639 214.923 149.206 205.997 158.258C197.213 167.309 188.713 167.45 187.013 158.682C185.313 149.913 191.121 135.346 200.047 126.295C208.831 117.243 217.332 116.96 219.032 125.87Z" fill="#DE5469"/>
                                                            <path d="M199.905 126.295C191.121 135.346 185.312 149.914 186.871 158.682C188.571 167.451 197.072 167.309 205.856 158.258C214.64 149.206 220.59 134.639 218.89 125.871C217.331 116.961 208.831 117.244 199.905 126.295Z" fill="white"/>
                                                            <path d="M164.344 201.959L168.169 192.2L169.586 191.352C169.444 191.352 169.444 191.493 169.302 191.493C168.594 191.917 168.169 192.2 168.169 192.2C168.169 192.2 168.594 191.917 169.302 191.352C170.011 190.927 171.003 190.22 172.419 189.655C173.128 189.372 173.836 189.089 174.686 189.089C175.536 188.947 176.528 189.23 177.378 189.796C178.228 190.362 178.936 191.069 179.22 192.2C179.361 192.766 178.936 193.473 178.37 193.756C177.803 194.039 177.378 194.039 176.953 194.18C175.111 194.746 173.694 196.019 172.561 197.433C171.994 198.14 171.569 198.847 171.003 199.554C170.436 200.262 169.727 200.686 169.161 200.969C168.169 201.534 167.177 201.817 166.327 201.959C166.186 201.959 165.902 201.959 165.761 202.1C164.769 201.959 164.344 201.959 164.344 201.959Z" fill="#ECC351"/>
                                                            <path d="M168.169 192.06C168.169 192.06 168.594 191.777 169.303 191.211C170.011 190.787 171.003 190.08 172.42 189.514C173.128 189.231 173.836 188.948 174.686 188.948C175.536 188.807 176.528 189.09 177.378 189.655C178.228 190.221 178.937 190.928 179.22 192.06C179.362 192.625 178.937 193.332 178.37 193.615C177.803 193.898 177.378 193.898 176.953 194.04C175.111 194.605 173.695 195.878 172.561 197.292C171.995 198 171.569 198.707 171.003 199.414C170.436 200.121 169.728 200.545 169.161 200.828C168.169 201.394 167.178 201.677 166.327 201.818C166.186 201.818 165.902 201.818 165.761 201.96" stroke="#263156" stroke-width="0.3632" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M139.41 200.688C139.41 200.688 136.86 203.375 130.059 205.921C126.234 207.335 114.333 209.032 114.333 209.032L113.341 205.78L112.066 201.537C112.066 201.537 111.216 207.052 110.508 210.871C109.375 217.377 105.549 242.692 105.549 250.188C105.549 251.885 96.7653 252.309 84.7228 253.582C64.038 255.845 38.3945 253.299 38.3945 253.299C38.3945 253.299 39.1029 207.477 46.8951 181.03C49.8703 170.705 54.5457 157.411 62.0545 150.764C69.7051 144.117 93.0817 143.834 93.0817 143.834C96.6236 148.501 99.8822 156.563 104.983 157.694C112.775 159.391 113.058 152.178 113.058 152.178C113.058 152.178 128.076 157.835 131.051 168.16C133.318 175.938 137.002 190.222 138.56 196.87C139.127 199.415 139.41 200.688 139.41 200.688Z" fill="#405FF2"/>
                                                            <path d="M65.7376 179.474C65.7376 179.474 53.4118 200.122 53.1284 201.395C52.8451 202.526 61.629 231.802 61.629 231.802L48.8781 238.308C48.8781 238.308 34.9938 215.114 30.7435 205.072C26.3515 195.172 40.2358 177.069 40.2358 177.069L65.7376 179.474Z" fill="#ECC351"/>
                                                            <path d="M75.3715 164.057L59.362 191.777L58.0869 193.899C44.3443 179.332 36.2687 182.867 35.9854 183.009C35.9854 182.867 36.6937 181.736 37.8272 179.897C42.5025 172.119 55.1117 152.177 62.7622 150.763C68.4293 150.056 75.3715 164.057 75.3715 164.057Z" fill="#405FF2"/>
                                                            <path d="M59.362 191.777L58.0869 193.899C44.3443 179.332 36.2687 182.867 35.9854 183.009C35.9854 182.867 36.6937 181.736 37.8272 179.897C41.7941 180.039 52.8449 181.029 59.362 191.777Z" fill="#263156"/>
                                                            <path d="M63.7547 252.875C63.7547 252.875 63.0463 254.43 61.3462 254.289C59.7878 254.148 58.2293 250.753 56.3875 249.763C54.5457 248.773 53.4123 246.935 53.4123 246.935C52.1372 244.813 52.5623 243.682 51.1455 242.268L59.3628 235.055C64.0381 235.479 71.1219 236.328 72.9637 237.459C74.5222 238.449 76.0806 241.136 77.214 243.54C78.0641 245.379 78.6308 247.076 78.6308 247.076C77.639 250.329 73.9555 249.198 73.9555 249.198C72.9637 253.299 68.8551 252.026 68.8551 252.026C67.0133 254.006 63.7547 252.875 63.7547 252.875Z" fill="#ECC351"/>
                                                            <path d="M61.6289 231.66L64.1791 236.044L51.1448 242.126L48.7363 238.166L61.6289 231.66Z" fill="#ECC351"/>
                                                            <path d="M73.9549 248.915C73.9549 248.915 72.9631 245.379 70.6963 242.126" stroke="#263156" stroke-width="0.3632" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M68.7126 251.742C68.7126 251.742 67.5792 246.509 65.5957 244.104" stroke="#263156" stroke-width="0.3632" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M63.7539 252.875C63.7539 252.875 63.0455 248.773 60.0703 246.228" stroke="#263156" stroke-width="0.3632" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M103.706 295.019L88.5469 266.733" stroke="#D6E0FA" stroke-width="0.3632" stroke-miterlimit="10"/>
                                                            <path d="M112.207 201.676L114.899 185.412" stroke="#263156" stroke-width="0.3632" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M58.2285 193.898L66.5874 182.726" stroke="#263156" stroke-width="0.3632" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M139.41 200.686C139.41 200.686 136.86 203.373 130.06 205.919C126.234 207.333 114.334 209.03 114.334 209.03L113.342 205.778C116.884 205.212 133.035 202.1 138.56 197.15C139.127 199.413 139.41 200.686 139.41 200.686Z" fill="#263156"/>
                                                            <path d="M54.2622 30.2676C73.2468 30.2676 86.5645 41.0161 86.5645 59.8261C86.5645 78.636 72.9635 87.8289 54.4039 87.8289L53.8371 98.5774H36.6943L35.9859 74.9589H42.2197C56.6707 74.9589 67.5798 72.2718 67.4381 59.8261C67.4381 51.7647 62.4794 46.6733 54.1205 46.6733C45.6199 46.6733 40.5195 51.4818 40.5195 59.8261H22.1016C22.1016 42.8547 33.8607 30.2676 54.2622 30.2676ZM45.1949 131.813C38.111 131.813 33.0107 126.863 33.0107 120.357C33.0107 113.993 37.9694 108.902 45.1949 108.902C51.9953 108.902 57.0957 113.852 57.0957 120.357C57.0957 126.863 51.9953 131.813 45.1949 131.813Z" fill="#405FF2"/>
                                                            <path d="M400.237 270.41C396.553 274.087 387.061 273.945 372.751 268.006C367.368 265.743 362.409 263.056 358.159 260.51L363.401 255.277L354.192 257.964C347.958 253.721 344.133 249.903 344.274 248.771C344.699 246.65 357.875 244.387 382.102 249.478C382.952 249.62 383.66 249.903 384.51 250.044C385.927 252.307 388.052 255.984 388.052 255.984L387.911 250.893C405.904 256.55 402.928 267.864 400.237 270.41Z" fill="#0CA640"/>
                                                            <path d="M449.967 264.188C449.117 264.754 447.983 265.461 446.708 266.168L438.207 267.158C438.207 267.158 441.041 267.724 443.45 268.007C436.649 271.825 427.015 276.351 417.098 275.927C417.098 275.927 417.806 265.32 432.257 259.804C446.708 254.147 469.66 252.874 470.368 255.703C471.076 258.531 455.634 260.794 449.967 264.188Z" fill="#0CA640"/>
                                                            <path d="M462.151 304.778C461.585 305.344 457.051 304.354 450.392 304.637L446 301.101L447.842 304.778C445.575 305.061 443.308 305.344 440.758 306.051C429.141 308.879 413.981 315.102 411.856 299.828C411.856 299.828 411.006 284.271 424.607 285.119C427.441 285.261 429.991 285.544 432.399 285.827L431.266 288.938L436.366 286.534C443.733 287.948 449.259 290.494 454.076 294.454C461.585 300.394 462.86 304.071 462.151 304.778Z" fill="#0CA640"/>
                                                            <path d="M454.643 300.111C454.643 300.111 426.874 289.646 411.998 299.829C397.122 310.011 399.672 368.28 399.672 368.28" stroke="#263156" stroke-width="0.5317" stroke-miterlimit="10"/>
                                                            <path d="M345.693 326.275C346.26 326.699 350.51 324.719 357.169 323.729L360.711 319.345L359.719 323.447C361.986 323.164 364.395 323.022 366.945 323.164C378.846 323.447 394.997 326.275 393.863 310.86C393.863 310.86 391.313 295.585 378.279 299.121C375.587 299.828 373.179 300.677 370.77 301.525L372.47 304.212L366.945 302.94C360.144 305.91 355.186 309.587 351.36 314.537C345.41 321.891 344.843 325.709 345.693 326.275Z" fill="#0CA640"/>
                                                            <path d="M460.592 256.975C460.592 256.975 436.082 258.672 417.097 275.926C398.112 293.322 403.496 366.723 403.496 366.723" stroke="#263156" stroke-width="0.5317" stroke-miterlimit="10"/>
                                                            <path d="M363.403 283.988C364.253 284.554 365.386 285.261 366.661 285.968L375.162 286.958C375.162 286.958 372.328 287.524 369.92 287.807C376.72 291.625 386.354 296.151 396.272 295.727C396.272 295.727 395.563 285.12 381.112 279.604C366.661 273.947 343.71 272.674 343.001 275.502C342.293 278.331 357.735 280.735 363.403 283.988Z" fill="#0CA640"/>
                                                            <path d="M352.776 276.916C352.776 276.916 377.286 278.613 396.271 295.867C415.256 313.263 410.722 371.249 410.722 371.249" stroke="#263156" stroke-width="0.5317" stroke-miterlimit="10"/>
                                                            <path d="M355.328 250.894C355.328 250.894 391.739 258.389 400.24 270.411C408.74 282.432 408.032 366.44 408.032 366.44" stroke="#263156" stroke-width="0.5317" stroke-miterlimit="10"/>
                                                            <path d="M354.619 318.778C354.619 318.778 381.538 302.938 393.439 312.838C405.339 322.738 402.931 374.925 402.931 374.925" stroke="#263156" stroke-width="0.5317" stroke-miterlimit="10"/>
                                                            <path d="M426.873 349.609L426.448 354.559V354.701L426.307 356.539L425.882 361.065L425.74 362.762V362.904L425.598 365.166L425.457 367.429L425.315 368.419V368.561V369.409L425.173 371.814L425.032 373.794L424.89 375.632L424.465 380.158L424.323 381.996L423.898 386.522L423.757 388.361L423.332 392.886L423.19 394.725L422.765 399.251L422.623 400.806C422.623 400.948 422.623 401.089 422.623 401.231C422.198 404.484 420.781 406.888 419.081 406.888H393.296C391.596 406.888 390.038 404.484 389.754 401.231C389.754 401.089 389.754 400.948 389.754 400.806L389.613 399.251L389.188 394.725L389.046 392.886L388.621 388.361L388.479 386.522L388.054 381.996L387.912 380.158L387.487 375.632L387.346 373.794L387.204 371.814L387.062 369.409V368.561V368.419L386.921 367.429L386.779 365.166L386.637 362.904V362.762L386.496 361.065L386.071 356.539L385.929 354.701V354.559L385.504 349.609H426.873Z" fill="#ECC351"/>
                                                            <path d="M426.446 354.56L426.305 356.399H385.927L385.785 354.56H426.446Z" fill="#D7AB42"/>
                                                            <path d="M425.879 360.924L425.738 362.621V362.763H386.493V362.621L386.352 360.924H425.879Z" fill="#D7AB42"/>
                                                            <path d="M425.455 367.288L425.313 368.278V368.42V369.127H387.061L386.919 368.42V368.278V367.288H425.455Z" fill="#D7AB42"/>
                                                            <path d="M424.889 373.652L424.747 375.491H387.486L387.345 373.652H424.889Z" fill="#D7AB42"/>
                                                            <path d="M424.322 380.017L424.18 381.856H388.053L387.911 380.017H424.322Z" fill="#D7AB42"/>
                                                            <path d="M423.896 386.381L423.612 388.22H388.618L388.477 386.381H423.896Z" fill="#D7AB42"/>
                                                            <path d="M423.329 392.745L423.187 394.584H389.043L388.901 392.745H423.329Z" fill="#D7AB42"/>
                                                            <path d="M422.763 399.109L422.621 400.665C422.621 400.807 422.621 400.948 422.621 401.09H389.61C389.61 400.948 389.61 400.807 389.61 400.665L389.469 399.109H422.763Z" fill="#D7AB42"/>
                                                            <path d="M470.792 405.333H0V410H470.792V405.333Z" fill="#263156"/>
                                                            </svg>

                                                    </span>
                                                </div>
                                            </div>

                                            <div class="not-found-txt-main">
                                                <h4 class="not-found-txt">{{ __('translate.Listing Not Found!') }}</h4>
                                                <p class="not-found-sub-txt">
                                                    {{ __('translate.Whoops... this information is not available for a  moment') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                     
                            </div>
                            @endif
                        </div>
                    </div>
                    
                    <div style="padding-top:30px;padding-bottom:30px">
                        @if ($cars->hasPages())
                            {{ $cars->appends(request()->query())->links() }}
                        @endif
                    </div>

                </div>  
                </form>
            </div>
        </div>
    </section>

    <!-- Inventory-part-end -->

    <!-- pagination Starts -->

  

    <!-- pagination ends -->
                   
</main>
@endsection


@push('js_section')

<script>

const startRange = document.getElementById('customRangeMin');
const endRange = document.getElementById('customRangeMax');
const priceRangeScale = document.getElementById('priceSearch');
const valueDisplay = document.querySelector('span p');

// Function to format currency
const formatCurrency = (value) => {
    return `$${(value * 100000).toLocaleString()}`;
};

// Function to update the display
const updateDisplay = () => {
    const startValue = formatCurrency(startRange.value);
    const endValue = formatCurrency(endRange.value);
    valueDisplay.textContent = `${startValue} ${endValue}`;
    const startValueNumber = formatNumber(startRange.value * 100000);
    const endValueNumber = formatNumber(endRange.value * 100000);
    console.log(startValueNumber);
    priceRangeScale.value=`${startValueNumber} - ${endValueNumber}`;
};
function formatNumber(value) {
    return Math.round(value);
}

// Event listener for the start range input
startRange.addEventListener('input', () => {
    if (parseFloat(startRange.value) > parseFloat(endRange.value)) {
        startRange.value = endRange.value;
    }
    updateDisplay();
});

// Event listener for the end range input
endRange.addEventListener('input', () => {
    if (parseFloat(endRange.value) < parseFloat(startRange.value)) {
        endRange.value = startRange.value;
    }
    updateDisplay();
});


(function($) {
    "use strict";
    $(document).ready(function () {
        const form = $('#search_form');
        $("#outside_form_search").on("keyup", function(e) {
            let inputValue = $(this).val();
            $("#inside_form_search").val(inputValue);
        });

        $("#outside_form_btn").on("click", function(e) {
            e.preventDefault();   
            form.submit();
        });

        $(".popular-search").on('change',function(e){
            e.preventDefault();   
            form.submit();
        })

        $("#start").on('input',function(e){
            $("#age_output").val(parseInt($(this).val()))
            $("#start_year").val(parseInt($(this).val()));
            // form.submit();
        })

    
    });
})(jQuery);
</script>   <!------- Range ------->
@endpush