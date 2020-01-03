@extends('backend._partial._master')

@section('main_content')



    <div class="container">
        <div align="right">
            <button type="button" class="btn btn-primary waves-effect waves-light btn-md" data-toggle="modal"
                    data-target="#myModal">Add New Page
            </button>
        </div>
        <br/>
        <table id="pages_table" class="table table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>Heading</th>
                <th>Meta Title</th>
                <th>Meta Keywords</th>
                <th>Meta Decsription</th>
                <th>Decsription</th>
            </tr>
            </thead>
        </table>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <form method="post" action="{{route('PagesMgt.postdata')}}" id="pages_form">
                    @method('POST')
                    @csrf
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">

                        <span id="form_output"></span>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Page Title</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="title" id="title" class="form-control"
                                           placeholder="Enter Page Title">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">SLUG</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="slug" id="slug" class="form-control"
                                           placeholder="Enter Page Title">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Heading</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="heading" id="heading" class="form-control"
                                           placeholder="Enter Page Title">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Meta Title</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="meta_title" id="meta_title" class="form-control"
                                           placeholder="Enter Page Title">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Meta Keywords</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="meta_keywords" id="meta_keywords"
                                           placeholder="meta_keywords">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Meta Description</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="meta_description"
                                           id="meta_description" placeholder="Enter Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Page Description</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="description" id="description"
                                           placeholder="Phone number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 row justify-content-end">
                        <div class="col-md-9 float-right">
                            <div class="modal-footer">
                                <input type="hidden" name="button_action" id="button_action" value="insert"/>
                                <input type="submit" name="submit" id="action" value="Add"
                                       class="btn btn-primary waves-effect waves-light"/>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <script type="text/javascript">
        $(document).ready(function () {
            $('#pages_table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('PagesMgt.getdata') }}",
                "columns": [
                    {"data": "title"},
                    {"data": "slug"},
                    {"data": "heading"},
                    {"data": "meta_title"},
                    {"data": "meta_keywords"},
                    {"data": "meta_description"},
                    {"data": "description"}
                ]
            });


            $('#pages_form')[0].reset();
            $('#form_output').html('');
            $('#button_action').val('insert');
            $('#action').val('Add');
        });

        $('#pages_form').on('submit', function (event) {
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url: "{{ route('PagesMgt.postdata') }}",
                method: "POST",
                data: form_data,
                dataType: "json",
                success: function (data) {
                    if (data.error.length > 0) {
                        var error_html = '';
                        for (var count = 0; count < data.error.length; count++) {
                            error_html += '<div class="alert alert-danger">' + data.error[count] + '</div>';
                        }
                        $('#form_output').html(error_html);
                    } else {
                        $('#form_output').html(data.success);
                        $('#pages_form')[0].reset();
                        $('#action').val('Add');
                        $('.modal-title').text('Add Data');
                        $('#button_action').val('insert');
                        $('#pages_table').DataTable().ajax.reload();
                    }
                }
            })
        });

    </script>








@endsection
