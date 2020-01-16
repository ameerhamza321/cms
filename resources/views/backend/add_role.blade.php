@extends('backend._partial._master')

@section('main_content')


    <div class="container">

        <div align="right">
            <button type="button" name="create_record" id="create_record"
                    class="btn btn-primary waves-effect waves-light btn-md">Add Role
            </button>
        </div>
        <br/>
        <div class="table-responsive">
            <table id="user_table" class="table table-bordered" style="width:100%">
                <thead class="bg-primary text-white">
                <tr>
                    <th class="text-white">Title</th>
                    <th class="text-white">Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>


    <div id="formModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h4 class="modal-title" align-text="center">Add New Roll</h4>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <span id="form_result"></span>
                    <form method="post" id="sample_form" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Role Title</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="Enter Role Title">
                                </div>
                            </div>
                        </div>

                        <br/>
                        <div class="form-group" align="center">
                            <input type="hidden" name="action" id="action" value="Add"/>
                            <input type="hidden" name="hidden_id" id="hidden_id"/>
                            <input type="submit" name="action_button" id="action_button"
                                   class="btn btn-primary waves-effect waves-light" value="Add"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="confirmModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h3 class="modal-title" align="center">Confirmation</h3>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" name="ok_button" id="ok_button"
                            class="btn btn-primary waves-effect waves-light">Delete
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {

            $('#user_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('Role.index') }}", "type": "GET", "dataType": "JSON"

                },
                columns: [
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ]
            });

            $('#create_record').click(function () {
                $('.modal-title').text('Add New Record');
                $('#action_button').val('Add');
                $('#action').val('Add');
                $('#form_result').html('');

                $('#formModal').modal('show');
            });

            $('#sample_form').on('submit', function (event) {
                event.preventDefault();
                var action_url = '';

                if ($('#action').val() == 'Add') {
                    action_url = "{{ route('Role.store') }}";
                }

                if ($('#action').val() == 'Edit') {
                    action_url = "{{ route('Role.update') }}";
                }

                $.ajax({
                    url: action_url,
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function (data) {
                        var html = '';
                        if (data.errors) {
                            html = '<div class="alert alert-danger">';
                            for (var count = 0; count < data.errors.length; count++) {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if (data.success) {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('#sample_form')[0].reset();
                            $('#user_table').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
                setTimeout(function () {
                    $('#formModal').modal('hide');
                    $('#user_table').DataTable().ajax.reload();
                }, 1000);
            });

            $(document).on('click', '.edit', function () {
                var id = $(this).attr('id');
                $('#form_result').html('');
                $.ajax({
                    url: "/Role/" + id + "/edit",
                    dataType: "json",
                    success: function (data) {
                        $('#name').val(data.result.name);
                        $('#hidden_id').val(id);
                        $('.modal-title').text('Edit Record');
                        $('#action_button').val('Edit');
                        $('#action').val('Edit');
                        $('#formModal').modal('show');

                    }
                })

            });

            var user_id;

            $(document).on('click', '.delete', function () {
                user_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function () {
                $.ajax({
                    url: "Role/destroy/" + user_id,
                    beforeSend: function () {
                        $('#ok_button');
                    },
                    success: function (data) {
                        setTimeout(function () {
                            $('#confirmModal').modal('hide');
                            $('#user_table').DataTable().ajax.reload();

                        }, 100);
                    }
                })
            });

        });
    </script>


@endsection
