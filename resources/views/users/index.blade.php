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

@section('title', 'User Management')
@section('content')

<div class="row">

{{-- Add new user modal --}}
    <div class="modal fade" id="addUserModel" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addUserFormLabel">Create User</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" id="addUserForm" name="addUserForm" class="form-horizontal" method="POST">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong> <label for="name" class="form-label">Name:</label></strong>
                                <input class="form-control" type="text" name="name" id="name" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong><label for="email" class="form-label">Email:</label></strong>
                                <input class="form-control" type="email"  name="email"  id="email" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong><label for="phone" class="form-label">Phone No:</label></strong>
                                <input class="form-control" type="tel"  name="phone"  id="phone" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong><label for="role" class="form-label">Select Role:</label></strong>
                                <select class="form-select" id="role" >
                                    <option value="" selected>Open this select menu</option>
                                    @foreach ($roles as $r)
                                    <option value="{{$r->name}}">{{$r->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong><label for="password" class="form-label">Password:</label></strong>
                                <input class="form-control" type="password" name="password" id="password" required>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="btn-save" >Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
   {{-- End add user modal --}}

   {{-- Edit user mnodal --}}
   <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editUserFormLabel">Edit User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="javascript:void(0)" id="editUserForm" name="editUserForm" class="form-horizontal" method="POST">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong> <label for="name" class="form-label">Name:</label></strong>
                            <input class="form-control" type="text" name="name" id="edit_name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><label for="email" class="form-label">Email:</label></strong>
                            <input class="form-control" type="email"  name="email"  id="edit_email">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><label for="email" class="form-label">Phone No:</label></strong>
                            <input class="form-control" type="tel"  name="phone"  id="edit_phone">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><label for="edit_role" class="form-label">Select Role:</label></strong>
                            <input class="form-control" type="text"  name="edit_role"  id="edit_role" disabled>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><label for="password" class="form-label">Password:</label></strong>
                            <input class="form-control" type="password" name="password" id="password" disabled>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="btn-edit" data-bs-dismiss="modal">Save changes</button>
        </div>
      </div>
    </div>
  </div>
{{-- end edit user modal --}}


{{-- show user modal --}}
<div class="modal fade" id="showUserModal" tabindex="-1" aria-labelledby="showUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="showUserFormLabel">Show User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="javascript:void(0)" id="showUserForm" name="showUserForm" class="form-horizontal" method="GET" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong> <label for="show_name" class="form-label">Name:</label></strong>
                            <input class="form-control-plaintext"  type="text" name="name" id="show_name" disabled>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><label for="show_email" class="form-label">Email:</label></strong>
                            <input class="form-control-plaintext" type="email"  name="email"  id="show_email" disabled>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><label for="show_phone" class="form-label">Phone no:</label></strong>
                            <input class="form-control-plaintext" type="tel"  name="phone"  id="show_phone" disabled>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><label for="show_role" class="form-label">Role:</label></strong>
                            <input class="form-control-plaintext" type="text"  name="edit_role"  id="show_role" disabled>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
{{-- end show user modal --}}

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
                           <label class="form-label">Are you sure you want to delete user<strong> <label id="delete_user" class="form-label"></label></strong> ?</label>
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
                <label for="filter_from">From:</label>
                <input type="date" id="filter_from" placeholder="From" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="filter_to">To:</label>
                <input type="date" id="filter_to" placeholder="To" class="form-control">
            </div>
            <div class="w-10 col-sm-4 pt-2">
                <button  name="filter" id="filter" type="button" class="btn btn-warning ">Filter</button>
                <button name="reset" id="reset" type="button" class="btn btn-warning ">Reset</button>
            </div>
        </div>
        <div class="card-datatable table-responsive p-2">
            <div class="pull-right">
                @can('user-create')
                <button type="button" class="btn btn-outline-primary mb-2" data-bs-toggle="modal" data-bs-target="#addUserModel">
                    Create User
                </button>
                @endcan
            </div>
          <table id="user_table" class="invoice-list-table table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Role</th>
                    <th>Registered Date</th>
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

           function fill_datatable(filter_from = '', filter_to ='')
           {
               var table = $('#user_table').DataTable({
                   responsive: true,
                   searching: true,
                   processing: true,
                   serverSide: true,
                   ajax:{
                       type:"GET",
                       url:"{{ route('users.index') }}",
                       data:{filter_from:filter_from, filter_to: filter_to},
                   },
                   columns: [
                       {data: 'id', name: 'id'},
                       {data: 'name', name: 'name'},
                       {data: 'email', name: 'email'},
                       {data: 'phone_no', name: 'phone_no'},
                       {data: 'role', name: 'role'},
                       {data: 'created_at', name: 'created_at'},
                       {data: 'action', name: 'action', orderable: false, searchable: false},
                   ],columnDefs: [
                    {
                    // Label
                        targets:[4],
                        render: function (data, type, full, meta) {
                            var status_number = full['role'];
                            var status = {
                                Admin: { title: 'Admin', class: 'badge-light-success' },
                                Customer: { title: 'Customer', class: 'badge-light-success' },
                                Support: { title: 'Support', class: 'badge-light-success' },
                            };
                            if (typeof status[status_number] === 'undefined') {
                            return data;
                            }
                            return (
                            '<span class="badge rounded-pill ' +
                            status[status_number].class +
                            '">' +
                            status[status_number].title +
                            '</span>'
                            );
                        },
                    }, ]
               });
           }

           $('#filter').click(function(){
               var filter_from = $('#filter_from').val();
               var filter_to = $('#filter_to').val();

               if(filter_from != '' || filter_to != '')
               {
                   $('#user_table').DataTable().destroy();
                   fill_datatable(filter_from, filter_to);
               }
               else
               {
                   alert('Select Both filter option');
               }
           });

           $('#reset').click(function(){
               $('#filter_from').val('');
               $('#filter_to').val('');
               $('#user_table').DataTable().destroy();
               fill_datatable();
           });

           $('body').on('click', '#btn-save', function (event) {
            var name = $("#name").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var role =  $("#role").val();
            var phone =  $("#phone").val();

            // TODO - Ajax validation
            if ($('#name').val() == '' ) {
                toastr.error('Name field is required!', 'Failed!');
                exit;
            }if ($('#email').val() == '' ) {
                toastr.error('Email field is required!', 'Failed!');
                exit;
            }if ($('#phone').val() == '' ) {
                toastr.error('Phone field is required!', 'Failed!');
                exit;
            }if ($('#password').val() == '' ) {
                toastr.error('Passoword field is required!', 'Failed!');
                exit;
            } if ($('#role').val() == '' ) {
                toastr.error('Role field is required!', 'Failed!');
                exit;
            }

            if (name != '' || email != '' || password != '') {
                // ajax
                $.ajax({
                    type:"POST",
                    url: "{{ route('users.store') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        name:name,
                        email:email,
                        password:password,
                        phone_no:phone,
                        "confirm-password":password,
                        roles:role,
                    },
                    dataType: 'json',
                    success: function(data){
                        setTimeout(() => {
                            toastr.success(data.message, data.title);
                            window.location.reload();
                        },2500)

                        // $("#btn-save").html('Submit');
                        $("#btn-save"). attr("disabled", false);
                    },
                    error: function(errors) {
                        console.log(errors);
                        setTimeout(() => {
                            toastr.error(errors.responseJSON.message, errors.responseJSON.title);
                        },500)
                    }
                });
            }
        });

        $('body').on('click', '.edit', function () {
            var name = $(this).data('name')
            var id = $(this).data('id')
            var role = $(this).data('role')
            var email = $(this).data('email')
            var phone = $(this).data('phone')

            $("#btn-edit"). attr("data-id", id);
            $('#edit_name').val(name);
            $('#edit_email').val(email);
            $('#edit_phone').val(phone);
            $('#edit_role').val(role);
            $('#role_name').val(role);

        });

        $('body').on('click', '#show', function () {
            console.log($(this).data());
            var name = $(this).data('name')
            var id = $(this).data('id')
            var role = $(this).data('role')
            var email = $(this).data('email')
            var phone = $(this).data('phone')

            $("#btn-show"). attr("data-id", id);
            $('#show_name').val(name);
            $('#show_email').val(email);
            $('#show_phone').val(phone);
            $('#show_role').val(role);
        });
        @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif

        $('body').on('click', '.delete', function () {
            var name = $(this).data('name')
            var id = $(this).data('id')
            $("#btn-delete"). attr("data-id", id);

            document.getElementById('delete_user').innerHTML = name;
        });

        $('body').on('click', '#btn-edit', function (event) {
            var name =  $('#edit_name').val();
            var email =  $('#edit_email').val();
            var phone =  $('#edit_phone').val();
            var id = $(this).data('id')

            console.log(name, email);

        $("#btn-save").html('Please Wait...');
        $("#btn-save"). attr("disabled", true);

        var url = "{{ route('users.update', ['user' => ":id"]) }}";
        url = url.replace(':id', id);

            $.ajax({
                type:"PUT",
                url: url,
                data: {
                    "_token": "{{ csrf_token() }}",
                    name:name,
                    email: email,
                    phone_no: phone
                },
                dataType: 'json',
                success: function(data){
                    console.log(data, 'adas')
                    setTimeout(() => {
                        toastr.success(data.message, data.title);
                        window.location.reload();
                    },1500)

                    $("#btn-save").html('Submit');
                    $("#btn-save"). attr("disabled", false);
                },
                error: function(errors) {
                    console.log(errors, 'eror')
                    setTimeout(() => {
                        toastr.error(errors.responseJSON.message, errors.responseJSON.title);
                    },500)
                }
            });

        });

        $('body').on('click', '#btn-delete', function (event) {
            var id = $(this).data('id')
            var url = "{{ route('users.destroy', ['user' => ":id"]) }}";
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

