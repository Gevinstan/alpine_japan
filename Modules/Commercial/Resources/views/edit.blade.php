@extends('admin.master_layout')
@section('title')
    <title>{{ __('translate.Edit Commercial') }}</title>
@endsection

@section('body-header') 
    <h3 class="crancy-header__title m-0">{{ __('translate.Edit Commercial') }}</h3>
    <p class="crancy-header__text">{{ __('translate.Commercial') }} >> {{ __('translate.Edit Commercial') }}</p>
    <style>
         .file_image{
          width: 30px ! important;
          height: 30px ! important;
          border-radius: 50% ! important;
          margin-top:3px ! important;
        }
    </style>
@endsection

@section('body-content')
    <!-- crancy Dashboard -->
    <section class="crancy-adashboard crancy-show">
        <div class="container container__bscreen">
            <div class="row">
                <div class="col-12">
                    <div class="crancy-body">
                        <!-- Dashboard Inner -->
                        <div class="crancy-dsinner">
                            <form action="{{ route('admin.commercial.update',$commercial->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                                <div class="row">
                                    <div class="col-12 mg-top-30">
                                        <!-- Product Card -->
                                        <div class="crancy-product-card">
                                            <div class="create_new_btn_inline_box">
                                                <h4 class="crancy-product-card__title">{{ __('translate.Edit Commercial') }}</h4>

                                                <a href="{{ route('admin.categories.index') }}" class="crancy-btn "><i class="fa fa-list"></i> {{ __('translate.Commercial List') }}</a>
                                            </div>


                                            <div class="row mg-top-30">
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Category') }} * </label>
                                                        <select  name="category" id="category"  class="crancy__item-input">
                                                            <option value="">Select Catagory</option>
                                                           @foreach($category as $category)
                                                              <option value="{{$category->name}}" {{$category->name == $commercial->category ? 'selected' : ''}}>
                                                                {{$category->name}}
                                                            </option>
                                                           @endforeach  
                                                        </select>
                                                        @error('category')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Image') }} </label>
                                                        <div class="text-center position-relative d-flex">
                                                            <a target="_blank" href="{{ asset('Small-Heavy/' . $commercial->image) }}">
                                                                <img class="img-fluid file_image mr-2 mt-1" src="{{asset('Small-Heavy/' . $commercial->image)}}" class="admin-img" alt="">
                                                            </a>
                                                            <input type="file" id="image" class="form-control input-file"  name="image" value="" accept="image/png, image/jpeg ,image/jpg">
                                                        </div>
                                                        <!-- <input type="file" class="form-control" name="image"> -->
                                                        @error('image')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Title') }} * </label>
                                                        <input class="crancy__item-input" type="text" name="title" id="title" value="{{$commercial->title}}">
                                                        @error('title')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mg-top-30">
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Maker') }} * </label>
                                                        <input class="crancy__item-input" type="text" name="maker" id="maker" value="{{$commercial->make}}">
                                                        @error('maker')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Model') }} * </label>
                                                        <input class="crancy__item-input" type="text" name="model" id="model" value="{{$commercial->model}}">
                                                        @error('model')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Year Of Made') }} </label>
                                                        <input class="crancy__item-input" type="text" name="year_of_made" id="year_of_made" value="{{$commercial->yom}}">
                                                        @error('year_of_made')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mg-top-30">
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Chassis number') }} * </label>
                                                        <input class="crancy__item-input" type="text" name="chassis_number" id="chassis_number" value="{{$commercial->chassis}}">
                                                        @error('chassis_number')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Serial Number') }} </label>
                                                        <input class="crancy__item-input" type="text" name="serial_number" id="serial_number" value="{{$commercial->serial}}">
                                                        @error('serial_number')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Year Of Registration') }}  </label>
                                                        <input class="crancy__item-input" type="text" name="year_of_registration" id="year_of_registration" value="{{$commercial->year_of_reg}}">
                                                        @error('year_of_registration')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mg-top-30">                                               
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Kilometers') }} </label>
                                                        <input class="crancy__item-input" type="text" name="kilometers" id="kilometers" value="{{$commercial->kms}}">
                                                        @error('kilometers')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Engine type') }} </label>
                                                        <input class="crancy__item-input" type="text" name="engine_type" id="engine_type" value="{{$commercial->engine}}">
                                                        @error('engine_type')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Transmission type') }} </label>
                                                        <input class="crancy__item-input" type="text" name="transmission_type" id="transmission_type" value="{{$commercial->transmission}}">
                                                        @error('transmission_type')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mg-top-30">
                                            <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Fuel') }} * </label>
                                                        <input class="crancy__item-input" type="text" name="fuel" id="fuel" value="{{$commercial->fuel}}">
                                                        @error('fuel')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Dimensions') }}  </label>
                                                        <input class="crancy__item-input" type="text" name="dimensions" id="dimensions" value="{{$commercial->dimensions}}">
                                                        @error('dimensions')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{__('Active')}} </label>
                                                        <div class="crancy-ptabs__notify-switch  crancy-ptabs__notify-switch--two">
                                                            <label class="crancy__item-switch">
                                                            <input name="active" type="checkbox" {{$commercial->is_active == '1' ? 'checked' : ''}}>
                                                            <span class="crancy__item-switch--slide crancy__item-switch--round"></span>
                                                            </label>
                                                        </div>
                                                        @error('active')
                                                                <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mg-top-30">
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Price($)') }} * </label>
                                                        <input class="crancy__item-input" type="text" name="price_dollar" id="price_dollar" value="{{$commercial->price}}">
                                                        @error('price_dollar')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Price(RU)') }} </label>
                                                        <input class="crancy__item-input" type="text" name="price_rupees" id="price_rupees" value="{{$commercial->price_ru}}">
                                                        @error('price_rupees')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Price(Yen)') }}  </label>
                                                        <input class="crancy__item-input" type="text" name="price_yen" id="price_yen" value="{{$commercial->price_jpy}}">
                                                        @error('price_yen')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mg-top-30">
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Remarks') }} * </label>
                                                        <textarea name="remarks" id="remarks" class='crancy__item-input'>{{$commercial->remarks}}</textarea>
                                                        @error('remarks')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{ __('translate.Sell Points') }} * </label>
                                                        <textarea name="sell_points" id="sell_points" class='crancy__item-input'>{{$commercial->sell_points}}</textarea>
                                                        @error('sell_points')
                                                            <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mg-top-30">
                                                <div class="col-4">
                                                    <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{__('North America market')}} </label>
                                                        <div class="crancy-ptabs__notify-switch  crancy-ptabs__notify-switch--two">
                                                            <label class="crancy__item-switch">
                                                            <input name="north_america_market" type="checkbox" {{$commercial->is_na_market == '1' ? 'checked' : ''}}>
                                                            <span class="crancy__item-switch--slide crancy__item-switch--round"></span>
                                                            </label>
                                                        </div>
                                                        @error('north_america_market')
                                                                <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                <div class="crancy__item-form--group w-100 h-100">
                                                        <label class="crancy__item-label">{{__('Russia market')}} </label>
                                                        <div class="crancy-ptabs__notify-switch  crancy-ptabs__notify-switch--two">
                                                            <label class="crancy__item-switch">
                                                            <input name="russia_market" type="checkbox" {{$commercial->is_ru_market == '1' ? 'checked' : ''}}>
                                                            <span class="crancy__item-switch--slide crancy__item-switch--round"></span>
                                                            </label>
                                                        </div>
                                                        @error('russia_market')
                                                                <div style="color: red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                                
                                         
                                            <button class="crancy-btn mg-top-25" type="submit">{{ __('translate.Save') }}</button>

                                        </div>
                                        <!-- End Product Card -->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Dashboard Inner -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End crancy Dashboard -->
@endsection

@push('js_section')
    <script>
        (function($) {
            "use strict"
            $(document).ready(function () {
                $("#name").on("keyup",function(e){
                    let inputValue = $(this).val();
                    let slug = inputValue.toLowerCase().replace(/[^\w ]+/g,'').replace(/ +/g,'-');
                    $("#slug").val(slug);
                })
            });
        })(jQuery);

        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('view_img');
                output.src = reader.result;
            }

            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
@endpush


