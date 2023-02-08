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

@section('title', 'Show Product')
@section('content')

<div class="row">
    <div class="col-12">
      <div class="card invoice-list-wrapper">
        <div class="card-datatable table-responsive p-2">
            <form action="javascript:void(0)" id="addUserForm" name="addUserForm" class="form-horizontal" method="POST">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong> <label for="name" class="form-label">Name:</label></strong>
                            <input class="form-control" type="text" name="name" id="name" value="{{ $product->name ?? '' }}" disabled>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><label for="image" class="form-label">Image:</label></strong>
                            <input class="form-control" type="text" id="filename" value="{{ $product->image }}" hidden>

                            <input class="form-control" type="file" id="image" onchange="editpreview()" disabled>
                        </div><br>
                        <img id="edit_frame" src="/product/{{ $product->image ?? 'no_image.jpg' }}" class="rounded mx-auto d-block" width="200" />
                        {{-- <div class="col-auto">
                            <button onclick="editclearImage()" class="btn btn-primary mt-3">Clear Image</button>
                        </div> --}}
                    </div><br>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><label for="price" class="form-label">Price:</label></strong>
                            <input class="form-control" type="text"  name="price"  id="price" value="{{ $product->price ?? '' }}" disabled>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><label for="description" class="form-label">Description:</label></strong>
                            <input class="form-control" type="text"  name="description"  id="description" value="{{ $product->description ?? '' }}" disabled>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><label for="tags" class="form-label" >Select Tags:</label></strong>
                                <div style="border: 1px solid #dddbe2; padding: 5px; border-radius:5px">
                                    <?php foreach($tag_decode as $key => $row) : ($key > count($tags)) ? $row2 = $tags[$key] : '';?>
                                        <span class="badge rounded-pill badge-light-success">{{ $tags[$key]->name }} </span>'
                                    <?php endforeach;?>

                                </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><label for="status" class="form-label">Select Status:</label></strong>
                            <select class="form-select" id="status" disabled>
                                <option value="Available">Available</option>
                                <option value="Out of Stock">Out of Stock</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form><br>
            <div class="modal-footer">
                <a type="button" href="{{ url('api/product') }}"  class="btn btn-secondary">Back</a>
            </div>
        </div>
      </div>
    </div>
</div>

<script type="text/javascript">
        $(document).ready(function(){

            var image =  $('#filename').val()
            var fieldImage = document.getElementById('image');
            var urlImage = "/product/" + image
            const dataTransfer = new DataTransfer()
            const file =  new File([urlImage], `${image}`, { type: 'image/*' })

            dataTransfer.items.add(file);
            console.log( image)
            fieldImage.files = dataTransfer.files;

           $('body').on('click', '#btn-save', function (event) {
            var id = <?php echo $product->id; ?>;
            var url = "{{ route('product.update', ":id") }}";
            url = url.replace(':id', id);
            var name = $("#name").val();
            var price= $("#price").val();
            var image = $("#image")[0].files;
            var description =  $("#description").val();
            var tags =  $("#tags").val();
            var status =  $("#status").val();
            var product_image = image[0];
            var token = "{{ csrf_token() }}";
            var formData = new FormData();

            if ($('#name').val() == '' ) {
                toastr.error('Name field is required!', 'Failed!');
                exit;
            }if ($('#price').val() == '' ) {
                toastr.error('Price field is required!', 'Failed!');
                exit;
            }if ($('#status').val() == '' ) {
                toastr.error('Status field is required!', 'Failed!');
                exit;
            }

            formData.append('_token', token)
            formData.append('name', name)
            formData.append('price', price)
            formData.append('image', product_image)
            formData.append('description', description)
            formData.append('tags', tags)
            formData.append('status', status)
            formData.append('_method', 'PUT')

            if (name != '' || price != '' || status != '') {
                // ajax
                $.ajax({
                    type:"POST",
                    url: url,
                    data: formData,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function(data){
                        // console.log(data)
                        var redirect = window.location.origin +'/api/product'
                        setTimeout(() => {
                            toastr.success(data.message, data.title)
                            window.location.href = redirect;
                        },2500)
                        $("#btn-save"). attr("disabled", false);
                    },
                    error: function(errors) {
                        // console.log(errors);
                        setTimeout(() => {
                            toastr.error(errors.responseJSON.message, errors.responseJSON.title);
                        },500)
                    }
                });
            }
        });
    });
</script>
<script>
     function editpreview() {
            edit_frame.src = URL.createObjectURL(event.target.files[0]);
        }
        function editclearImage() {
            document.getElementById('edit_image').value = null;
            edit_frame.src = "";
        }
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

