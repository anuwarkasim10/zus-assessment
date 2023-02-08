@extends('layouts/contentLayoutMaster')

@can('user-list')
@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('title', 'Product Management')
@section('content')

<div class="row">
{{-- Delete popup modal --}}
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteUserFormLabel">Delete User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="javascript:void(0)" id="deleteUserForm" name="deleteUserForm" class="form-horizontal" method="POST">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <label class="form-label">Are you sure you want to delete this product<strong> <label id="delete_product" class="form-label"></label></strong> ?</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger" id="btn-delete" data-bs-dismiss="modal">Delete</button>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End delete popup modal --}}

    <div class="col-12">
      <div class="card invoice-list-wrapper">
        <div class="row p-2">
            <div class="col-sm-4">
                <label for="filter_from">Name:</label>
                <input type="text" id="filter_name" placeholder="Name" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="filter_to">Tags:</label>
                <select class="form-select" id="filter_tag" name="tags">
                    <option selected value="">Select Tag</option>
                    @foreach ($tags as $r)
                    <option value="{{$r->id}}">{{$r->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4">
                <label for="filter_status">Status:</label>
                <select class="form-select" id="filter_status" >
                    <option selected value="">Select Status</option>
                    <option value="Available">Available</option>
                    <option value="Out of Stock">Out of Stock</option>
                </select>
            </div>
            <div class="w-10 col-sm-4 pt-2">
                <button  name="filter" id="filter" type="button" class="btn btn-warning ">Filter</button>
                <button name="reset" id="reset" type="button" class="btn btn-warning ">Reset</button>
            </div>
        </div>
        <div class="card-datatable table-responsive p-2">
            <div class="pull-right">
                @can('product-create')
                <a type="button" href="{{ url('api/product/create') }}" class="btn btn-outline-primary mb-2">
                    Create Product
                </a>
                @endcan
            </div>
          <table id="product_table" class="invoice-list-table table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Tags</th>
                    <th>Status</th>
                    <th width="">Action</th>
                </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
        $(document).ready(function(){
           fill_datatable();

           function fill_datatable(filter_name = '', filter_tag ='', filter_status ='')
           {
               var table = $('#product_table').DataTable({
                   responsive: true,
                   searching: true,
                   processing: true,
                   serverSide: true,
                   ajax:{
                       type:"GET",
                       url:"{{ route('product.index') }}",
                       data:{filter_name:filter_name, filter_tag: filter_tag, filter_status:filter_status},
                   },
                   columns: [
                       {data: 'id', name: 'id'},
                       {data: 'name', name: 'name'},
                       {data: 'product_image', name: 'product_image'},
                       {data: 'price', name: 'price'},
                       {data: 'description', name: 'description'},
                       {data: 'tags', name: 'tags'},
                       {data: 'status', name: 'status'},
                       {data: 'action', name: 'action', orderable: false, searchable: false},
                   ],columnDefs: [
                    {
                    // Label
                        targets:[5],
                        render: function (data, type, full, meta) {
                            var status_number = full['tags'];
                            var badges = "";
                            var status = {
                                1: { title: 'Black Coffee', class: 'badge-light-success' },
                                2: { title: 'Expresso', class: 'badge-light-success' },
                                3: { title: 'Steamed', class: 'badge-light-success' },
                                4: { title: 'Milk', class: 'badge-light-success' },
                                5: { title: 'Foam', class: 'badge-light-success' },
                                6: { title: 'Shot', class: 'badge-light-success' },
                                7: { title: 'Microfoam', class: 'badge-light-success' },
                                8: { title: 'Coffee', class: 'badge-light-success' },
                                9: { title: 'Honey', class: 'badge-light-success' },
                                10: { title: 'Vanila', class: 'badge-light-success' },
                                11: { title: 'Chocolate', class: 'badge-light-success' },
                            };
                            for(i = 0; i < status_number.length; i++){
                                console.log('status', status_number[i])
                                var tags = status_number[i]
                                if (typeof status[tags] === 'undefined') {
                                    return data;
                                }
                                badges += '<span class="badge rounded-pill ' + status[tags].class + '">' + status[tags].title + '</span>'
                            }
                            return badges;
                        },
                    }, ]
               });
           }

           $('#filter').click(function(){
               var filter_name = $('#filter_name').val();
               var filter_tag = $('#filter_tag').val();
               var filter_status = $('#filter_status').val();

               if(filter_name != '' || filter_tag != '' || filter_status != '')
               {
                   $('#product_table').DataTable().destroy();
                   fill_datatable(filter_name, filter_tag, filter_status);
               }
               else
               {
                   alert('Empty Data!');
               }
           });

           $('#reset').click(function(){
               $('#filter_name').val('');
               $('#filter_tag').val('');
               $('#filter_status').val();
               $('#product_table').DataTable().destroy();
               fill_datatable();
           });

        $('body').on('click', '.delete', function () {
            var name = $(this).data('name')
            var id = $(this).data('id')
            $("#btn-delete"). attr("data-id", id);

            document.getElementById('delete_product').innerHTML = name;
        });

        $('body').on('click', '#btn-delete', function (event) {
            var id = $(this).data('id')
            var url = "{{ route('product.destroy', ['product' => ":id"]) }}";
            url = url.replace(':id', id);

            $.ajax({
                method:"DELETE",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function(data){
                    setTimeout(() => {
                        toastr.success(data.message, data.title);
                        window.location.reload();
                    },1500)
                    $("#btn-update").html('Submit');
                    $("#btn-update"). attr("disabled", false);
                },
                error: function(errors) {
                    setTimeout(() => {
                        toastr.error(errors.responseJSON.message, errors.responseJSON.title);
                    },500)
                }
            });
        });
    });
</script>
@endsection
@endcan
@section('vendor-script')
  {{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>

@endsection
@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/tables/table-datatables-basic.js')) }}"></script>
@endsection

