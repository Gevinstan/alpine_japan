@extends('layout4')
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
                @foreach ($brands as $index => $brand)
                <div class="col-xl-2 col-xl-2 col-lg-4 col-6 col-md-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="categories-logo">
                        <a href="{{ route('jdm-stock-responsive',[$brand->slug, 'car']) }}" class="categories-logo-thumb">
                            <img src="{{ asset('Brand/'.$brand->image) }}" alt="logo">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

        <!-- <div class="container ">
            <div class="col-lg-4">
                    <div class="categories-three-view-btn" style="margin-top: 40px; margin-right: -300px">
                    <a href="{{ route('listings') }}" class="thm-btn">{{ __('translate.View All') }}</a>
                    </div>
            </div>
        </div> -->
    </section>
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
    $(()=>{
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
         });
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
        $(".brand-search").on('change',function(e){
            e.preventDefault();   
            $(".model-search").val("")
            form.submit();
           
        }) 
        $(".model-search").on('change',function(e){
            e.preventDefault();   
            form.submit();    
        })

    

      
        $("#start").on('input',function(e){
            $("#age_output").val(parseInt($(this).val()))
            $("#start_year").val(parseInt($(this).val()));
            // form.submit();
        })

        $("#brand_new_cars").on('change',function(e){
            e.preventDefault();
                form.submit();
        })

    
    });
})(jQuery);
</script>   <!------- Range ------->
@endpush




