@extends('layout')
@section('title')
    <!-- <title>{{ $seo_setting->seo_title }}</title> -->
    <title>Alpine Japan</title>
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{!! strip_tags(clean($seo_setting->seo_description)) !!}">

    

@endsection

@section('body-content')
<main>
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
                            <form class="btn-group btn-dc7" id="jdm_stock_form" action="{{route('jdm-stock-all')}}">
                              <div class="btn-group">
                              <div class="btn-group-lg btn-dc4">
                                        <button class="btn btn-light custom-btn1 dropdown-toggle btn-rad-left" type="button" id="defaultDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            Brand
                                        </button>
                                        <input type="hidden" name="jdm_brand" id="jdm_brand">
                                        <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                        @foreach($jdm_core_brand as $brand)
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="updateButtonText('{{ $brand->slug }}')">{{ html_decode($brand->name) }}</a></li>
                                        @endforeach
                                        </ul>
                                    </div>
                               

                                    <div class="btn-group-lg btn-dc5">
                                            <button class="btn btn-light custom-btn1 dropdown-toggle btn-rad" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" aria-expanded="false">
                                                Model
                                            </button>
                                            <input type="hidden" name="jdm_model" id="jdm_model">
                                            <ul class="dropdown-menu model-ul" aria-labelledby="dropdownMenuClickableOutside">
                                            </ul>
                                    </div>

                                    <div class="btn-group-lg btn-dc6">
                                        <button class="btn btn-light custom-btn1 dropdown-toggle btn-rad" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" aria-expanded="false">
                                            Year
                                        </button>
                                        <input type="hidden" name="jdm_year" id="jdm_year">
                                        <ul class="dropdown-menu year-ul" aria-labelledby="dropdownMenuClickableInside">
                                        </ul>
                                    </div>

                                        <div class="form-group position-relative">
                                            <input type="button" 
                                                style="background-color: #038ffc; color: white; width: 150px; height: 52px; border: none;" 
                                                class="form-control btn-rad-right btn" 
                                                id="searchBtn" 
                                                value="SEARCH"
                                                oninput="toggleIconVisibility(this)">
                                            <i id="searchIcon" class="bi bi-search position-absolute" style="right: 18px; top: 28px; transform: translateY(-50%); color: white;"></i>
                                        </div>
                                    </form>

                              </div>
                            </div>
                        </div>


                        <div class="col-lg-5">
                            <div class="banner-slick-main">
                                <div class="banner-slick">
                                </div>
                            </div>
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


        document.addEventListener('DOMContentLoaded', function() {
            const dropdownButton = document.getElementById('dropdownMenuButton');
            const dropdownItems = document.querySelectorAll('.dropdown-item');

            dropdownItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    dropdownButton.textContent = this.textContent;
                });
            });
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

    <script>
    // Initialize Bootstrap tooltips
    document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>

    


</main>
@endsection
@push('js_section')
<script>
       $(()=>{
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
         });
function updateButtonText(selectedBrand) { 
    document.getElementById('defaultDropdown').innerText = selectedBrand; 
    $("#jdm_brand").val(selectedBrand);
    $.ajax({
        url:"get-brands",
        type:"POST",
        datatype:"JSON",
        data:{"brand":selectedBrand},
        beforeSend:function(response){
            console.log("loading")
        },
        success:function(data){
            console.log(data.response);
             var brands=data.response;
            for (let index = 0; index < brands.length; index++) {
                const element = brands[index];
                console.log(element)
                $(".model-ul").append(`<li><a class="dropdown-item" href="javascript:void(0);" onclick="getModel('${element.model}')">${element.model}</a></li>`);
            }

        }
    })
}

function getModel(selectedModel){
    document.getElementById('dropdownMenuClickableOutside').innerText = selectedModel; 
    $("#jdm_model").val(selectedModel);


    $.ajax({
        url:"get-model-year",
        type:"POST",
        datatype:"JSON",
        data:{"brand":document.getElementById('defaultDropdown').innerText,
            'model':selectedModel},
        beforeSend:function(response){
            console.log("loading")
        },
        success:function(data){
            console.log(data.response);
             var brands=data.response;
            for (let index = 0; index < brands.length; index++) {
                const element = brands[index];
                $(".year-ul").append(`<li><a class="dropdown-item" href="javascript:void(0);" onclick="getModelYear('${element.yom}')">${element.yom}</a></li>`);
            }

        }
    })
}

 function getModelYear(yom){
    document.getElementById('dropdownMenuClickableInside').innerText = yom; 
    $("#jdm_year").val(yom)
}

$("#searchBtn").on('click',function(){
     $("#jdm_stock_form").submit();
})
</script>
@endpush
