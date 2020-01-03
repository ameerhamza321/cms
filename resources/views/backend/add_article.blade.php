@extends('backend._partial._master')

@section('main_content')


    <div class="col-xl-15">
        <div class="card m-b-60">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title">Add Article</h1>
            </div>

            <div class="card-body">
                <form method="post" action="{{route('article.add_article')}}" id="pages_form"
                      enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <span id="form_output"></span>

                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea class="content" name="description" id="description"></textarea>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label class="form-label">Select Image </label>--}}
{{--                        <div class="col-md-8">--}}
{{--                            <input type="file" name="image" id="image"/>--}}
{{--                            <span id="store_image"></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label">Upload Images</label>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <div class="checkbox checkbox-secondary">
                            <input type="hidden" name="button_action" id="button_action" value="insert"/>
                            <input type="submit" name="submit" id="action" value="Submit"
                                   class="btn btn-primary waves-effect waves-light"/>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- end col -->


    <script>
        $('#description').summernote({
            height: 250
        });

        $(document).ready(function () {
            $('#articleDataTables').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('article.add_article') }}",
                "columns": [
                    {"data": "title"},
                    {"data": "description"},
                    {"data": "image"}
                ]
            });
            $('#pages_form')[0].reset();
            $('#form_output').html('');
            $('#button_action').val('insert');
            $('#action').val('Submit');
        });

        $('#pages_form').on('submit', function (event) {
            event.preventDefault();
            var form_data = new FormData(document.getElementById('pages_form'));
            console.log(form_data)
            $.ajax({
                url: "{{ route('article.store') }}",
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
                        $('#action').val('Submit');
                        $('#button_action').val('insert');
                        $('#articleDataTables').DataTable().ajax.reload();
                    }
                }
            })
        });


    </script>

@endsection
