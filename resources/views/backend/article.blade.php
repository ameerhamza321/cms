@extends('backend._partial._master')


@section('main_content')

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <!---Add article Button--->
{{--            <div class="btn-list text-right">--}}
{{--                <button type="button" name="create_record" class="btn btn-info" id="create_record"--}}
{{--                        data-toggle="modal" style="margin-left:880px;"><i class="fe fe-plus mr-2"></i>Add--}}
{{--                </button>--}}
{{--                <a class="icon" href="#"></a>--}}
{{--                <a href="#" style="margin-right: 30px" name="create_record" id="create_record" class="btn btn-info btn-md"><i class="fa fa-plus-square mr-2"></i>ADD </a>--}}
{{--            </div>--}}
        <!---End Button--->

            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="card-title">Article</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="articleDataTables" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th width="100px">Title</th>
                                <th width="100px">Images</th>
                                <th>Description</th>
                                <th width="100px">Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!-- table-wrapper -->
            </div>
            <!-- section-wrapper -->
        </div>
    </div>



    <!-- Message Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="example-Modal3">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="put" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label class="control-label col-md-4">Title : </label>
                            <div class="col-md-8">
                                <input type="text" name="title" id="title" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Enter description </label>
                            <div class="col-md-8">
                                <input type="text" name="description" id="description" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Select Image </label>
                            <div class="col-md-8">
                                <input type="file" name="image" id="image"/>
                                <span id="store_image"></span>
                            </div>
                        </div>
                        <br/>
                        <div class="form-group" align="center">
                            <input type="hidden" name="action" id="action" value="Add"/>
                            <input type="hidden" name="hidden_id" id="hidden_id"/>
                            <input type="submit" name="action_button" id="action_button" class="btn btn-warning"
                                   value="Add"/>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this data?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>




    <script>
        $('#description').summernote({
            height: 250
        });

        var BaseUrl = '{{ url('/') }}';
        $(document).ready(function () {
            var table = $('#articleDataTables').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('articles.list') }}",
                "columns": [
                    {"data": "title", name: 'title'},
                    {
                        "data": "image", name: 'image',
                        render: function (data, type, row) {
                            return `<img src="${BaseUrl}/images/${data}" width='100' height='100'>`;
                        }
                    },
                    {"data": "shortDescription", name: 'description', searchable: false, orderable: false},
                    {
                        "data": "action",
                        name: 'action',
                        searchable: false,
                        orderable: false,
                        render: function (data, type, row) {

                            return data;
                        }
                    }
                ]
            });

            //..... add article event.
            $('#create_record').click(function () {
                $('.modal-title').text("Add New Record");
                $('#action_button').val("Add");
                $('#action').val("Add");
                $('#formModal').modal('show');
            });

            $('#sample_form').on('submit', function (event) {
                event.preventDefault();
                if ($('#action').val() == 'Add') {
                    $.ajax({
                        url: "{{ route('article.store') }}",
                        method: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
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
                                $('#articleDataTables').DataTable().ajax.reload();
                            }
                            $('#form_result').html(html);
                        }
                    })
                }

                {{-- if($('#action').val() == "Edit")--}}
                {{--{--}}
                {{--    $.ajax({--}}
                {{--        url:"{{ route('article.update') }}",--}}
                {{--        method:"POST",--}}
                {{--        data:new FormData(this),--}}
                {{--        contentType: false,--}}
                {{--        cache: false,--}}
                {{--        processData: false,--}}
                {{--        dataType:"json",--}}
                {{--        success:function(data)--}}
                {{--        {--}}
                {{--            var html = '';--}}
                {{--            if(data.errors)--}}
                {{--            {--}}
                {{--                html = '<div class="alert alert-danger">';--}}
                {{--                for(var count = 0; count < data.errors.length; count++)--}}
                {{--                {--}}
                {{--                    html += '<p>' + data.errors[count] + '</p>';--}}
                {{--                }--}}
                {{--                html += '</div>';--}}
                {{--            }--}}
                {{--            if(data.success)--}}
                {{--            {--}}
                {{--                html = '<div class="alert alert-success">' + data.success + '</div>';--}}
                {{--                $('#sample_form')[0].reset();--}}
                {{--                $('#store_image').html('');--}}
                {{--                $('#user_table').DataTable().ajax.reload();--}}
                {{--            }--}}
                {{--            $('#form_result').html(html);--}}
                {{--        }--}}
                {{--    });--}}
                {{--    setTimeout(function(){--}}
                {{--        $('#formModal').modal('hide');--}}
                {{--        $('#articleDataTables').DataTable().ajax.reload();--}}
                {{--    }, 2000);--}}
                {{--}--}}
            });

                {{--$(document).on('click', '.editRecord', function(){--}}
                {{--    var id = $(this).attr('id');--}}
                {{--    $('#form_result').html('');--}}
                {{--    $.ajax({--}}
                {{--        url:"/article/"+id+"/edit",--}}
                {{--        dataType:"json",--}}
                {{--        success:function(html){--}}

                {{--            $('#title').val(html.data.title);--}}
                {{--            $('#description').val(html.data.description);--}}
                {{--            $('#store_image').html("<img src={{ URL::to('/') }}/images/" + html.data.image + " width='100' class='img-thumbnail' />");--}}
                {{--            $('#store_image').append("<input type='hidden' name='hidden_image' value='"+html.data.image+"' />");--}}
                {{--            $('#hidden_id').val(html.data.id);--}}
                {{--            $('.modal-title').text("Edit New Record");--}}
                {{--            $('#action_button').val("Edit");--}}
                {{--            $('#action').val("Edit");--}}
                {{--            $('#formModal').modal('show');--}}

                {{--        }--}}
                {{--    })--}}
                {{--});--}}

            // var user_id;
            //
            // $(document).on('click', '.deleteRecord', function(){
            //     user_id = $(this).attr('id');
            //     $('#confirmModal').modal('show');
            // });
            //
            // $('#ok_button').click(function(){
            //     $.ajax({
            //         url:"article/destroy/"+user_id,
            //         beforeSend:function(){
            //             $('#ok_button').text('Deleting...');
            //         },
            //         success:function(data)
            //         {
            //             setTimeout(function(){
            //                 $('#confirmModal').modal('hide');
            //                 $('#articleDataTables').DataTable().ajax.reload();
            //             }, 1000);
            //         }
            //     })
            // });

        });//.... end ready() .....//

    </script>

@endsection
