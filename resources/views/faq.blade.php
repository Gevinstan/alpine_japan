@extends('layout')
@section('title')
    <title>{{ $seo_setting->seo_title }}</title>
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{!! strip_tags(clean($seo_setting->seo_description)) !!}">
@endsection

@section('body-content')
<main>
    <!-- banner-part-start  -->

    <!-- <section class="inner-banner">
    <div class="inner-banner-img" style=" background-image: url({{ asset($breadcrumb) }}) ;"></div>
        <div class="container">
        <div class="col-lg-12">
            <div class="inner-banner-df">
                <h1 class="inner-banner-taitel">{{ __('translate.FAQ') }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('translate.Homejkk') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('translate.FAQ') }}</li>
                    </ol>
                </nav>
            </div>
            </div>
        </div>
    </section> -->
    <section>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12 faq-img">
                    <img src="{{  asset('japan_home/faq_img.svg')  }}" alt="HTML tutorial" class="img-fluid">

                    <div class="faq-top-left">
                        <p class="faq-top-left-p" style="display: inline">How To Buy</p>
                        <p class="faq-top-left-p1" style="display: inline">JDM Car</p>
                        <br>
                        <p class="faq-top-left-p" style="display: inline;margin-left:180px; top:30px">from</p>
                        <p class="faq-top-left-p1" style="display: inline">Japan</p>
                    </div>

                    <div class="faq-bottom-left">
                        <p class="faq-bottom-left-p"><b>How to find JDM car from?</b></p><br>
                        <p class="faq-bottom-left-p"><b>How to choose Japan car?</b></p><br>
                        <p class="faq-bottom-left-p"><b>How do we export and delivery Japan car?</b></p><br>
                        <p class="faq-bottom-left-p"><b>How is the payment processed?</b></p><br>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- banner-part-end -->


    <!--FAQ-part-start -->

    <section class=" faq" style="padding-top:100px; margin-left: 10px">
        <div class="container-fluid">
            <div class="row  justify-content-center">
                <div class="col-lg-11">
                    <div class="accordion" id="accordionExample">
                        @foreach ($faqs as $index => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne-{{ $index }}">
                                    <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne-{{ $index }}" aria-expanded="true" aria-controls="collapseOne-{{ $index }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="collapseOne-{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }} "
                                    aria-labelledby="headingOne-{{ $index }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {!! clean($faq->answer) !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--FAQ-part-end -->

    <!--  help-part-start -->
    <section class="help ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="help-box">
                        <!-- <div class="icon">
                            <span>
                                    <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M29.4744 32.801C28.8497 32.1764 27.8689 32.0851 27.1396 32.5837L22.6506 35.6531C21.9214 36.1517 20.9405 36.0603 20.3158 35.4357L11.564 26.6839C10.9393 26.0592 10.8481 25.0784 11.3466 24.3491L14.416 19.8601C14.9147 19.1308 14.8233 18.15 14.1987 17.5253L7.16509 10.4917C6.695 10.0217 6.03397 9.86183 5.43206 10.0081C2.27544 14.8489 2.82099 21.3985 7.07017 25.6477L21.3519 39.9295C25.6011 44.1787 32.1507 44.7243 36.9914 41.5676C37.1376 40.9656 36.9778 40.3046 36.5077 39.8346L29.4744 32.801Z" fill="#405FF2"/>
                                    <path d="M25.7025 33.566L23.6851 34.9455L33.4283 44.6887C34.5368 44.1134 35.5775 43.3613 36.5076 42.4311C36.6717 42.2671 36.7963 42.079 36.8854 41.8789C36.324 42.3023 35.7362 42.6739 35.1267 42.9902L25.7025 33.566Z" fill="white"/>
                                    <path d="M5.12134 10.1141C4.92131 10.203 4.73322 10.3277 4.56909 10.4917C3.639 11.4218 2.88681 12.4624 2.31152 13.5711L12.0548 23.3144L13.4343 21.297L4.01004 11.8727C4.32628 11.2633 4.69806 10.6754 5.12134 10.1141Z" fill="white"/>
                                    <path d="M36.5084 39.8345L29.4748 32.801C28.8501 32.1763 27.8693 32.085 27.14 32.5836L25.7031 33.566L35.1275 42.9903C35.7369 42.6741 36.3248 42.3023 36.8861 41.879C37.186 41.2048 37.0613 40.3875 36.5084 39.8345Z" fill="#EE3536"/>
                                    <path d="M14.199 17.5254L7.16547 10.4918C6.61248 9.93883 5.79522 9.81418 5.12106 10.1142C4.69769 10.6755 4.32601 11.2633 4.00977 11.8728L13.434 21.297L14.4164 19.8601C14.915 19.1309 14.8236 18.1501 14.199 17.5254Z" fill="#EE3536"/>
                                    <path d="M30.6577 13.8864V26.3486C30.6577 27.2032 30.927 27.9944 31.3841 28.6438H35.5988V30.3423H37.4699L39.1791 28.6438H42.0877C44.2933 28.6438 46.0813 26.8558 46.0813 24.6502V12.188C46.0813 11.3334 45.8121 10.5422 45.355 9.89276H34.6513C32.4456 9.89276 30.6577 11.6808 30.6577 13.8864Z" fill="#405FF2"/>
                                    <path d="M36.9216 21.8818L39.1703 21.4625L38.9156 21.415L33.6116 21.4162L31.8864 21.7379C30.4789 22.0004 29.4585 23.2288 29.4585 24.6606V28.5927H33.4118V26.107C33.4116 24.0371 34.8868 22.2613 36.9216 21.8818Z" fill="white"/>
                                    <path d="M42.6924 28.5926C42.8214 28.5926 42.949 28.5859 43.0752 28.575V24.6605C43.0752 23.2287 42.0548 22.0004 40.6472 21.7379L39.1702 21.4625L36.9215 21.8818C34.8868 22.2613 33.4116 24.0371 33.4116 26.1068V28.5925H35.5291V31.7912H35.9784L39.4815 28.5925L42.6924 28.5926Z" fill="#7D9BFF"/>
                                    <path d="M35.5799 19.4374V17.3276C35.5799 15.9908 36.3891 14.8433 37.5442 14.3473C37.1522 14.1791 36.7203 14.0855 36.2665 14.0855C34.476 14.0855 33.0244 15.5371 33.0244 17.3276V19.4374C33.0244 21.2279 34.476 22.6794 36.2665 22.6794C36.7203 22.6794 37.1521 22.5859 37.5442 22.4176C36.389 21.9217 35.5799 20.7741 35.5799 19.4374Z" fill="white"/>
                                    <path d="M39.5088 19.4373V17.3276C39.5088 15.9907 38.6995 14.8433 37.5444 14.3473C36.3893 14.8433 35.5801 15.9907 35.5801 17.3276V19.4373C35.5801 20.7742 36.3894 21.9216 37.5444 22.4176C38.6995 21.9216 39.5088 20.7741 39.5088 19.4373Z" fill="#FFCDAC"/>
                                    <path d="M11.8443 1.83612C17.0302 1.83612 21.2492 6.16462 21.2492 11.4853C21.2492 11.9923 21.6604 12.4034 22.1673 12.4034C22.6742 12.4034 23.0853 11.9922 23.0853 11.4853C23.0854 5.15228 18.0426 0 11.8443 0C11.3373 0 10.9263 0.411066 10.9263 0.91806C10.9263 1.42505 11.3373 1.83612 11.8443 1.83612Z" fill="#0D274E"/>
                                    <path d="M11.8419 6.19168C14.6816 6.19168 16.9919 8.56637 16.9919 11.4852C16.9919 11.9922 17.4029 12.4033 17.9099 12.4033C18.4169 12.4033 18.828 11.9921 18.828 11.4852C18.828 7.55385 15.694 4.35547 11.8419 4.35547C11.3349 4.35547 10.9238 4.76654 10.9238 5.27353C10.9238 5.78052 11.335 6.19168 11.8419 6.19168Z" fill="#0D274E"/>
                                    <path d="M10.9414 9.2858C10.9414 9.79279 11.3526 10.2039 11.8595 10.2039C12.5229 10.2039 13.0625 10.766 13.0625 11.4571C13.0625 11.9641 13.4736 12.3751 13.9805 12.3751C14.4875 12.3751 14.8986 11.964 14.8986 11.4571C14.8986 9.75359 13.5351 8.36774 11.8594 8.36774C11.3525 8.36774 10.9414 8.7788 10.9414 9.2858Z" fill="#0D274E"/>
                                    <path d="M42.0873 7.27628H40.0522C39.5453 7.27628 39.1342 7.68734 39.1342 8.19434C39.1342 8.70133 39.5453 9.1124 40.0522 9.1124H42.0873C43.7831 9.1124 45.1629 10.4921 45.1629 12.188V24.6502C45.1629 25.6266 44.7049 26.4975 43.9932 27.0613V24.6605C43.9932 22.7875 42.6567 21.1787 40.8154 20.8353L40.222 20.7247C40.3544 20.319 40.4268 19.8866 40.4268 19.4372V17.3276C40.4268 15.0337 38.5605 13.1674 36.2666 13.1674C33.9727 13.1674 32.1066 15.0337 32.1066 17.3276V19.4372C32.1066 19.8866 32.1791 20.319 32.3114 20.7247L31.7179 20.8353C29.8766 21.1786 28.5402 22.7874 28.5402 24.6605V27.322C27.6123 26.7918 26.985 25.7932 26.985 24.6502V12.188C26.985 10.4921 28.3648 9.1124 30.0606 9.1124H32.2487C32.7557 9.1124 33.1667 8.70124 33.1667 8.19434C33.1667 7.68734 32.7556 7.27628 32.2487 7.27628H30.0606C27.3523 7.27628 25.1489 9.47968 25.1489 12.188V24.6502C25.1489 27.3585 27.3523 29.5619 30.0606 29.5619H34.6804V32.2015C34.6804 32.5723 34.9034 32.9068 35.2458 33.0491C35.3598 33.0965 35.4795 33.1196 35.5983 33.1196C35.8362 33.1196 36.0702 33.027 36.2456 32.8528L39.5573 29.5619H42.0873C44.7956 29.5619 46.999 27.3585 46.999 24.6502V12.188C46.999 9.47958 44.7956 7.27628 42.0873 7.27628ZM33.9426 17.3276C33.9426 16.0461 34.9851 15.0036 36.2665 15.0036C37.548 15.0036 38.5906 16.0461 38.5906 17.3276V19.4372C38.5906 20.7187 37.548 21.7613 36.2665 21.7613C34.9851 21.7613 33.9426 20.7187 33.9426 19.4372V17.3276ZM39.1786 27.7258C38.9361 27.7258 38.7035 27.8217 38.5314 27.9925L36.5164 29.995V28.6437C36.5164 28.1367 36.1053 27.7257 35.5984 27.7257H30.3763V24.6604C30.3763 23.6713 31.0821 22.8216 32.0544 22.6402L33.3487 22.3989C34.1001 23.1394 35.1306 23.5973 36.2665 23.5973C37.4024 23.5973 38.433 23.1392 39.1845 22.3988L40.4788 22.6401C41.4512 22.8215 42.157 23.6711 42.157 24.6603V27.7237C42.1337 27.7243 42.1107 27.7255 42.0873 27.7255H39.1789V27.7258H39.1786Z" fill="#0D274E"/>
                                    <path d="M35.7066 9.11273C35.9481 9.11273 36.185 9.01451 36.3556 8.84377C36.5264 8.67211 36.6247 8.43619 36.6247 8.19467C36.6247 7.95233 36.5265 7.71632 36.3556 7.54558C36.185 7.37392 35.9482 7.27661 35.7066 7.27661C35.4652 7.27661 35.2283 7.37392 35.0575 7.54558C34.8868 7.71549 34.7886 7.95233 34.7886 8.19467C34.7886 8.4361 34.8867 8.67303 35.0575 8.84377C35.2284 9.01442 35.4652 9.11273 35.7066 9.11273Z" fill="#0D274E"/>
                                    <path d="M16.4132 30.6149C16.1718 30.6149 15.9348 30.7131 15.7642 30.8839C15.5934 31.0546 15.4951 31.2915 15.4951 31.533C15.4951 31.7753 15.5933 32.0113 15.7642 32.1821C15.9357 32.3537 16.1717 32.4518 16.4132 32.4518C16.6546 32.4518 16.8915 32.3537 17.0623 32.1821C17.2339 32.0113 17.3312 31.7753 17.3312 31.533C17.3312 31.2915 17.2339 31.0546 17.0623 30.8839C16.8914 30.7131 16.6556 30.6149 16.4132 30.6149Z" fill="#0D274E"/>
                                    <path d="M30.1238 32.1518C29.1875 31.2154 27.7145 31.0785 26.6218 31.8258L22.1327 34.8953C21.7684 35.1443 21.2776 35.0987 20.9654 34.7865L19.481 33.302C19.1226 32.9437 18.5414 32.9436 18.1825 33.302C17.824 33.6604 17.824 34.2417 18.1825 34.6004L19.667 36.085C20.6033 37.0212 22.0761 37.1585 23.169 36.4109L27.6581 33.3415C28.0222 33.0925 28.5132 33.138 28.8254 33.4502L35.8589 40.4838C36.2168 40.8416 36.2168 41.4242 35.8588 41.7823C31.3487 46.2924 24.01 46.2924 19.4998 41.7823L5.21794 27.5001C3.03299 25.3153 1.8299 22.4105 1.8299 19.3206C1.8299 16.2307 3.03309 13.3258 5.21804 11.1408C5.39144 10.9674 5.62185 10.8721 5.86713 10.8721C6.11241 10.8721 6.34301 10.9675 6.51632 11.1409L13.5498 18.1745C13.8618 18.4865 13.9075 18.9775 13.6586 19.3418L10.5893 23.8308C9.84175 24.9237 9.9789 26.3965 10.9151 27.3329L13.1465 29.5643C13.5051 29.9227 14.0863 29.9227 14.445 29.5643C14.8035 29.2058 14.8035 28.6245 14.445 28.2658L12.2136 26.0344C11.9016 25.7224 11.8559 25.2315 12.1049 24.8672L15.1743 20.3782C15.9216 19.2852 15.7845 17.8124 14.8483 16.8761L7.81479 9.84255C6.74095 8.76871 4.99359 8.76871 3.91957 9.84255C-1.30652 15.0687 -1.30652 23.5723 3.91957 28.7985L18.2015 43.0804C20.8146 45.6934 24.247 47 27.6794 47C31.1118 46.9999 34.5442 45.6934 37.1573 43.0804C38.2311 42.0065 38.2311 40.2593 37.1573 39.1852L30.1238 32.1518Z" fill="#0D274E"/>
                                    <path d="M11.7173 24.1419C11.4823 24.1419 11.2474 24.0523 11.0681 23.8731L5.50274 18.3078C5.14427 17.9493 5.14427 17.368 5.50274 17.0093C5.8613 16.6509 6.44246 16.6509 6.8012 17.0093L12.3665 22.5746C12.725 22.9331 12.725 23.5144 12.3665 23.8731C12.1872 24.0523 11.9522 24.1419 11.7173 24.1419Z" fill="#0D274E"/>
                                    <path d="M33.0178 45.4418C32.7828 45.4418 32.5479 45.3522 32.3686 45.173L26.513 39.3173C26.1545 38.9589 26.1545 38.3775 26.513 38.0189C26.8715 37.6605 27.4527 37.6605 27.8115 38.0189L33.6671 43.8745C34.0256 44.233 34.0256 44.8143 33.6671 45.173C33.4876 45.3522 33.2527 45.4418 33.0178 45.4418Z" fill="#0D274E"/>
                                    </svg>

                            </span>
                        </div> -->

                        <!-- <div class="text">
                            <h6>{{ $homepage->callus_title }}</h6>
                            <h3> <a href="tel:{{ $homepage->callus_phone }}">{{ $homepage->callus_phone }}</a></h3>
                        </div> -->
                    </div>

                    <h2 class="help-taitel" data-aos="flip-up" data-aos-duration="1000">
                        <p>We Are Proud Of Our Business</p>
                        <br>
                        <span>Get a Free Quotation Now!</span>
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="help-img">
                        <img src="{{ asset('japan_home/faq.png') }}" alt="img" style="width:95%" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  help-part-end -->


</main>
@endsection
