@extends('layout')
@section('title')
    <title>{{ $seo_setting->seo_title }}</title>
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{!! strip_tags(clean($seo_setting->seo_description)) !!}">
@endsection

@section('body-content')

    <main>
        <!-- banner-part-start  -->

        <section class="inner-banner">
        </section>
        <!-- banner-part-end -->


        <!-- Privacy and Policy-part start  -->

        <section class="privacy">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="privacy-text-item">
                            {!! clean($terms_condition->description) !!}
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Privacy and Policy-part end  -->

    </main>

@endsection
