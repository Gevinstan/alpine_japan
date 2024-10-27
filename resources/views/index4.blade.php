@extends('layout')
@section('title')
    <!-- <title>{{ $seo_setting->seo_title }}</title> -->
    <title>Alpine Japan</title>
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{!! strip_tags(clean($seo_setting->seo_description)) !!}">

    

@endsection

@section('body-content')
<main>
   


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
