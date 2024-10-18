@extends('layout')
@section('title')
    <title>{{ $seo_setting->seo_title }}</title>
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{!! strip_tags(clean($seo_setting->seo_description)) !!}">
@endsection

@section('body-content')
<main>
    <!-- banner-part-start  -->

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

    


</main>
@endsection
