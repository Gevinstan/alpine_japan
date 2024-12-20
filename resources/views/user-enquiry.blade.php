@extends('layout4')
@section('title')
    <title>{{ __('translate.Dashboard') }}</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
@endsection

@section('body-content')
@php
use Carbon\Carbon;
@endphp

<main>
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="inner-banner-img" style="background-image: url({{ asset($breadcrumb) }});"></div>
        <div class="container">
            <div class="col-lg-12">
                <div class="inner-banner-df">
                    <h1 class="inner-banner-taitel">{{ __('translate.Dashboard') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('translate.Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('translate.Dashboard') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Dashboard Section -->
    <section class="dashboard">
        <div class="container">
            <div class="row">
                @include('profile.sidebar')
                <div class="col-lg-9">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
                            <thead class="table-blue">
                                <tr>
                                    <th>{{ __('translate.Brand') }}</th>
                                    <th>{{ __('translate.Model') }}</th>
                                    <th>{{ __('translate.URL') }}</th>
                                    <th>{{ __('translate.Commission') }}</th>
                                    <th>{{ __('translate.Delivery Charge') }}</th>
                                    <th>{{ __('translate.Total Price') }}</th>
                                    <th>{{ __('translate.Created At') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vehicle_enquiry as $enquiry)
                                @php
                                    $carbonInstance = Carbon::parse($enquiry->created_at);
                                @endphp
                                <tr>
                                    <td>{{ $enquiry->make }}</td>
                                    <td>{{ $enquiry->model }}</td>
                                    <td><a href="{{ $enquiry->url_link }}" target="_blank">{{ __('translate.View') }}</a></td>
                                    <td>{{ $enquiry->comission }}</td>
                                    <td>{{ $enquiry->delivery_charge }}</td>
                                    <td>{{ $enquiry->total_car_price }}</td>
                                    <td>{{ $carbonInstance->format('Y-m-d') }}</td>
                                </tr>
                                @endforeach  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section End -->

    @include('profile.logout')
</main>
@endsection

@push('js_section')
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
<script>
    (function($) {
        "use strict";
        // Initialize DataTable
        $("#example").DataTable({
            responsive: true,
            autoWidth: false,
            language: {
                lengthMenu: "Show _MENU_ entries",
                search: "Search:",
                paginate: {
                    next: "›",
                    previous: "‹"
                }
            },
            dom: '<"row pb-3"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>' + // Length and Search on the same row
                 'rt' + // Table contents
                 '<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>', // Info and Pagination with Flexbox in the same row
        });
    })(jQuery);
</script>
@endpush
