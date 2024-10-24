@extends('admin.master_layout')
@section('title')
    <title>{{ __('translate.Commercial Stock List') }}</title>
@endsection

@section('body-header')
    <h3 class="crancy-header__title m-0">{{ __('translate.Commercial Stock List') }}</h3>
    <p class="crancy-header__text">{{ __('translate.Commercial') }} >> {{ __('translate.Commercial Stock List') }}</p>
@endsection

@section('body-content')
    <!-- crancy Dashboard -->
    <section class="crancy-adashboard crancy-show">
        <div class="container container__bscreen">
            <div class="row">
                <div class="col-12">    
                    <div class="crancy-body">
                        <div class="crancy-dsinner">

                            <div class="crancy-table crancy-table--v3 mg-top-30">

                                <div class="crancy-customer-filter">
                                    <div class="crancy-customer-filter__single crancy-customer-filter__single--csearch d-flex items-center justify-between create_new_btn_box">
                                        <div class="crancy-header__form crancy-header__form--customer create_new_btn_inline_box  d-flex  justify-between">
                                            <h4 class="crancy-product-card__title">{{ __('translate.Commercial Stock List') }}</h4>
                                            <div class="d-flex gap-3">
                                            <a href="{{ route('admin.commercial.create') }}" class="crancy-btn text-nowrap"><span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                    <path d="M8 1V15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M1 8H15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                </span> {{ __('translate.Create New') }}</a>
                                            <button class="crancy-btn delete_danger_btn" id="delete-model">Delete</button>  
                                            </div>  
                                        </div>
                                    </div>
                                </div>

                                <!-- crancy Table -->
                                <div id="crancy-table__main_wrapper" class=" dt-bootstrap5 no-footer">

                                    <table class="crancy-table__main crancy-table__main-v3 no-footer" id="dataTable">
                                        <!-- crancy Table Head -->
                                        <thead class="crancy-table__head">
                                            <tr>

                                                <th class="crancy-table__column-2 crancy-table__h2 sorting">
                                                   <input type="checkbox" name="" id="masterCheckbox" class="form-control">
                                                </th>

                                                <th class="crancy-table__column-2 crancy-table__h2 sorting">
                                                    {{ __('translate.ID') }}
                                                </th>

                                                <th class="crancy-table__column-2 crancy-table__h2 sorting">
                                                    {{ __('translate.Category') }}
                                                </th>

                                                <th class="crancy-table__column-2 crancy-table__h2 sorting">
                                                    {{ __('translate.Title') }}
                                                </th>

                                                <th class="crancy-table__column-3 crancy-table__h3 sorting">
                                                    {{ __('translate.Year of Manuf.') }}
                                                </th>
                                                <th class="crancy-table__column-3 crancy-table__h3 sorting">
                                                    {{ __('translate.Image') }}
                                                </th>
                                                <th class="crancy-table__column-3 crancy-table__h3 sorting">
                                                    {{ __('translate.Status') }}
                                                </th>
                                                <th class="crancy-table__column-3 crancy-table__h3 sorting">
                                                    {{ __('translate.Actions') }}
                                                </th>

                                            </tr>
                                        </thead>
                                        <!-- crancy Table Body -->
                                        <tbody class="crancy-table__body">
                                           @foreach ($commercials as $index => $commerical)
                                                <tr class="odd">

                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                         <input type="checkbox" name="" id="" data-id="{{$commerical->id}}" class="form-control td-checkbox-class">
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ ++$index }}</h4>
                                                    </td>

                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ $commerical->category }}</h4>
                                                    </td>

                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ $commerical->title }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ $commerical->yom }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                    <img src="{{ asset('Small-heavy/' . $commerical->image) }}"  width="100" height="100" alt="Product Image" class="common-image">
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        @if ($commerical->is_active == '1')
                                                                <span class="badge bg-success text-white">{{ __('translate.Active') }}</span>
                                                        @else
                                                        <span class="badge bg-danger text-white">{{ __('translate.Inactive') }}</span>
                                                        @endif
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                    <div style="
                                                        display: flex;
                                                        align-items: center;
                                                        justify-content: space-between;
                                                        gap: 10px;">
                                                    <a href="{{ route('admin.commercial.edit', ['commercial' => $commerical->id] ) }}" class="crancy-btn"><i class="fas fa-edit"></i> {{ __('translate.Edit') }}</a>
                                                        <a onclick="itemDeleteConfrimation({{ $commerical->id }})" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="crancy-btn delete_danger_btn"><i class="fas fa-trash"></i> {{ __('translate.Delete') }}</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach 

                                        </tbody>
                                        <!-- End crancy Table Body -->
                                    </table>
                                </div>
                                <!-- End crancy Table -->
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End crancy Dashboard -->


  <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('translate.Delete Confirmation') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>{{ __('translate.Are you realy want to delete this item?') }}</p>
                </div>
                <div class="modal-footer">
                    <form action="" id="item_delect_confirmation" class="delet_modal_form" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('translate.Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('translate.Yes, Delete') }}</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js_section')
    <script>
 
     $(document).ready(function(){
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    //   initializedTable();
     })

        "use strict"
        function itemDeleteConfrimation(id){
            var deleteUrl = "{{ route('admin.commercial.destroy', ':id') }}";
            deleteUrl = deleteUrl.replace(':id', id);
            document.getElementById("item_delect_confirmation").setAttribute("action", deleteUrl);
        }


        document.addEventListener('DOMContentLoaded', function() {
            // Select the master checkbox and the checkboxes in the table rows
            const masterCheckbox = document.querySelector('#masterCheckbox');
            const rowCheckboxes = document.querySelectorAll('.td-checkbox-class');
            const deleteButton = document.querySelector('#delete-model');

            // Add event listener to the master checkbox
            masterCheckbox.addEventListener('change', function() {
                // Set all row checkboxes to the state of the master checkbox
                rowCheckboxes.forEach(function(checkbox) {
                    checkbox.checked = masterCheckbox.checked;
                });
            });

           // Handle delete button click
          deleteButton.addEventListener('click', function() {
        // Gather selected IDs
        const selectedIds = Array.from(rowCheckboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.getAttribute('data-id'));

        if (selectedIds.length > 0) {
            // Confirm deletion
            if (confirm('Are you sure you want to delete the selected records?')) {


                //Send AJAX request to delete records
                fetch('/delete-commercial', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ ids: selectedIds })
                })
                .then(response => response.json())
                .then(data => {
                    // Handle response
                    if (data.success) {
                        // Remove deleted rows from the table
                        rowCheckboxes.forEach(checkbox => {
                            if (checkbox.checked) {
                                checkbox.closest('tr').remove();
                            }
                            $("#masterCheckbox").prop('checked',false);
                        });
                        alert('Selected records deleted successfully.');
                    } else {
                        alert('Error deleting records.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        } else {
            alert('No records selected.');
        }
    });

});

        
// function initializedTable(){
//    let attendanceTable = $('#commerical_datatable').DataTable({  
//         lengthChange: true,
//         ordering: true,
//         dom: '<"d-flex customname  justify-content-between"fB><"clearfix">rtip',
//         lengthMenu: [[10, 50, 100, 250, 500, -1], [10, 50, 100, 250, 500, "All"]],
//         processing: true,
//         serverSide: true,
//         bDestroy: true,
//         scrollX: true,
//         scrollY: '70vh',
//         scrollCollapse: true,
//         fixedHeader: true,
//         responsive: true,
//         autoWidth: false,
//         ajax: {
//             url: "{{ route('fetch_commercials') }}",
//             type: 'GET',
//             dataType: "json",
//             data: function(d) {
//                     // Add additional data to the request
//                     // d.class_id = $("#classFilter").val();
//                     // d.section_id = $("#sections").val();
//                     // d.student_id = $('#students').val();
//                 },
//             dataSrc: function ( receivedData ) {
//               $(".default-option").removeClass('default-option');
//             // tickets_info=receivedData.data;
//             return receivedData.data;
//           }, 
//         },
//         columns: [  
//             {data: 'checkbox', width: '5%'},
//             {data: 'DT_RowIndex', width: '5%'},
//             {data: 'category', width: '15%'},
//             {data: 'title', width: '25%'},
//             {data: 'yom', width: '10%'},
//             {data: 'image', width: '10%'}, 
//             {data: 'Status', width: '10%'}, 
//             {data: 'Action', width: '20%'}
//         ]
//     });
// }


    </script>
@endpush
