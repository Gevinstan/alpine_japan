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


    <!-- Inventory-part-end -->

    <!-- pagination Starts -->

  

    <!-- pagination ends -->
                   
</main>
@endsection


@push('js_section')

<script>

function updateButtonText(selectedBrand,selectedText) {
    const dropdownButton = document.querySelector('[aria-labelledby="defaultDropdown"]').previousElementSibling;
    if (dropdownButton) {
        dropdownButton.innerText = selectedText;
        $("#sort_by_field").val(selectedBrand);
        $('#search_form').submit();
    } else {
        console.error('Dropdown button not found');
    }
}
function setSortByParam(selectedBrand,selectedText) {
    const dropdownButton = document.querySelector('[aria-labelledby="defaultDropdown"]').previousElementSibling;
    if (dropdownButton) {
        dropdownButton.innerText = selectedText;
        $("#sort_by_field").val(selectedBrand);
    } else {
        console.error('Dropdown button not found');
    }
}

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

        const urlParams = new URLSearchParams(window.location.search);
        const urlYear = urlParams.get('year');
        const sortBy = urlParams.get('sort_by'); 


        
        if(sortBy === 'price_low_high') {
            setSortByParam('price_low_high','Low to High')
        }
        if(sortBy === 'price_high_low') {
            setSortByParam('price_high_low','High to Low')
        }
        if(sortBy === 'recent') {
            setSortByParam('recent','Recently Added')
        }
        
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
