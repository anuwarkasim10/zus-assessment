@extends('layouts.contentLayoutMaster')
{{-- @section('title', 'Role Management') --}}
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Role Management</h2>
            </div>
            <div class="pull-right">
            {{-- @can('role-create')
                <button type="button" id="addNewRole" class="btn btn-success"> Create New Role</a>

            @endcan --}}

            </div>
        </div>
    </div>
    <div class="modal fade" id="addRoleModal" tabindex="-1" aria-labelledby="addRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addRoleModalLabel">Create New Role</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" id="addRoleForm" name="addRoleForm" class="form-horizontal" method="POST">
                    {{-- {!! Form::open(array('route' => 'roles.store','method'=>'POST' 'id' => "addRoleForm")) !!} --}}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{-- {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!} --}}
                                <input type="text" name="name" id="name" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Permission:</strong>
                                <br/>
                                @foreach($permission as $value)
                                    {{-- <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                    {{ $value->name }}</label> --}}
                                    <label for="permission"></label>
                                    <input type="checkbox" value="{{ $value->id }}" name="permissions[]" id="permissions[]" required> {{ $value->name }}
                                <br/>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    {{-- {!! Form::close() !!} --}}
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="btn-save" data-bs-dismiss="modal">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="editRoleModal" tabindex="-1" aria-labelledby="editRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editRoleModalLabel">Edit New Role</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" id="addRoleForm" name="addRoleForm" class="form-horizontal" method="POST">
                    {{-- {!! Form::open(array('route' => 'roles.store','method'=>'POST' 'id' => "addRoleForm")) !!} --}}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{-- {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!} --}}
                                <input type="text" name="name" id="edit_name" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Permission:</strong>
                                <br/>

                                {{-- {{dd($checked)}} --}}
                                @foreach($permission as $value)
                                    {{-- <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                    {{ $value->name }}</label> --}}
                                    {{-- {{dd(json_decode($checked))}} --}}
                                    <label for="permission"></label>
                                    {{-- {{dd(is_array([$checked]))}} --}}
                                    <input type="checkbox" name="permissions[]" id="permissions[]" value="{{$value->id}}" {{ in_array($value->id ,  $checked) ? 'checked' : '' }} required> {{ $value->name }}
{{--
                                    <input id= type="text"> --}}
                                <br/>
                                @endforeach
                                {{-- <div id="test"></div> --}}
                            </div>
                        </div>

                    </div>
                    {{-- {!! Form::close() !!} --}}
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="btn-update" data-bs-dismiss="modal">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success messages">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card invoice-list-wrapper">

        <div class="card-datatable table-responsive p-2">
            <button type="button" class="btn btn-outline-primary mb-2" data-bs-toggle="modal" data-bs-target="#addRoleModal">
                Create New Role
            </button>
            <table class="table invoice-list-table">
                <thead>
                    <tr>
                        <th width="2%;">No.</th>
                        <th>Name</th>
                        <th width="40%">Action</th>
                    </tr>
                </thead>

                @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $role->name }}</td>
                    <td>

                        {{-- <a class="btn btn-info show" href="">Show</a> --}}
                        @can('role-edit')
                        <a class="btn btn-primary edit" id="btn-edit" data-id="{{$role->id}}" data-name="{{$role->name}}" data-permissionid="{{Spatie\Permission\Models\Role::findByName($role->name)->permissions->pluck('id')}}" data-bs-toggle="modal" data-bs-target="#editRoleModal" value="{{$role->id}}" >Edit</a>

                        @else
                        <p>You do not have permission to do any actions</p>
                        @endcan
                        {{-- @can('role-delete')
                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        @endcan --}}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    {!! $roles->render() !!}
</div>




<!-- end bootstrap modal -->



<script type="text/javascript">

    var err = document.querySelector('#error');

    $(document).ready(function($){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // $('#addNewRole').click(function () {
        //     $('#addRoleForm').trigger("reset");
        //     $('#roleModalTitle').html("Add New Role");
        //     $('#role-modal').modal('show');
        // });

        // TODO UPDATE & DELETE

        $('body').on('click', '.edit', function () {
            var name = $(this).data('name')
            var id = $(this).data('id')
            var permissionID = $(this).data('permissionid')
            var modals = document.getElementById('editRoleModal');
            var a =  $('#edit_name').val(name);

            $.ajax({
                type:"GET",

                data: { id: id, name:name },
                dataType: 'json',
                success: function(res){
                    // $('#ajaxBookModel').html("Edit Book");
                    // $('#ajax-book-model').modal('show');
                    // $('#id').val(res.id);
                    // $('#title').val(res.title);
                    // $('#code').val(res.code);
                    // $('#author').val(res.author);
                }
            });

            // console.log(permissionID);
            // var a =  $('#edit_name').val(name);

            // var getInput = document.getElementById('permissions[]').innerHTML="<?php echo $perm='"+permissionID+"'; ?>";


            // console.log(getInput);
            // $('#test input:checkbox').prop('checked', false);

            // permissionID.forEach(function (id) {

            //     var $checkbox = $('#test input[data-id="' +  id + '"]');

            //     if (!$checkbox.length) {
            //         return;
            //     }

            //     $checkbox.prop('checked', true);

            // })



        });

//          $('body').on('click', '.edit', function () {
//             var id = $(this).data('name');
// console.log(id)
//             // ajax
//             $.ajax({
//                 type:"GET",
//                 url: "{{ url('roles/index') }}",
//                 data: { id: id },
//                 dataType: 'json',
//                 success: function(res){
//                     // $('#ajaxBookModel').html("Edit Book");
//                     // $('#ajax-book-model').modal('show');
//                     // $('#id').val(res.id);
//                     // $('#title').val(res.title);
//                     // $('#code').val(res.code);
//                     // $('#author').val(res.author);
//                 }
//             });
//         });

        // $('body').on('click', '.delete', function () {
        //     if (confirm("Delete Record?") == true) {
        //     var id = $(this).data('id');

        //     // ajax
        //     $.ajax({
        //         type:"POST",
        //         url: "{{ url('delete-book') }}",
        //         data: { id: id },
        //         dataType: 'json',
        //         success: function(res){
        //             window.location.reload();
        //         }
        //     });
        //     }
        // });
        $('body').on('click', '#btn-save', function (event) {
            var name = $("#name").val();
            var permission_arr = [];

            $.each($('input[name="permissions[]"]:checked'), function() {
                var value = $(this).val();

                permission_arr.push(value);
            });
            $("#btn-save").html('Please Wait...');
            $("#btn-save"). attr("disabled", true);


            // TODO - Ajax validation
            if ($('#name').val() == '' ) {
                console.log('here');
            }

            if (name || permission_arr == '') {
                // ajax
                $.ajax({
                    type:"POST",
                    url: "{{ route('roles.index') }}",
                    data: {
                        name:name,
                        permissions:permission_arr,
                    },
                    dataType: 'json',
                    success: function(res){
                        console.log(res);
                        // $('#role-modal').modal('hide');
                        setTimeout(function(){
                            window.location.reload();
                        }, 500);
                        $("#btn-save").html('Submit');
                        $("#btn-save"). attr("disabled", false);
                    },
                    error: function(errors) {
                        console.log(errors);

                        // err.innerHTML = ''
                    }
                });
            }

        });


    });
</script>

<script>
    $(document).ready(function () {
        setTimeout(function() {
          $('.messages').fadeOut('slow');
        }, 1500);
    })
</script>



@endsection
