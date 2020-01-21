@extends('backend._partial._master')

@section('main_content')


    <div class="col-xl-15">
        <div class="card m-b-60">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title">Add Article</h1>
            </div>

            <div class="card-body">
                <form method="post" action="{{route('article.store')}}" id="pages_form"
                      enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <span id="form_output"></span>

                    <div class="form-group" >
                        <label class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea class="content" name="description" id="description"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label">Upload Images</label>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <div class="checkbox checkbox-secondary">
                            <input type="hidden" name="button_action" id="button_action" value="insert"/>
                            <input type="submit" name="submit" id="action" value="Save"
                                   class="btn btn-info waves-effect waves-light"/>
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


        {{--$(document).ready(function () {--}}
        {{--    $('#pages_form')[0].reset();--}}
        {{--    $('#form_output').html('');--}}
        {{--    $('#button_action').val('insert');--}}
        {{--    $('#action').val('Save');--}}
        {{--});--}}

        {{--$('#pages_form').on('submit', function (event) {--}}
        {{--    event.preventDefault();--}}
        {{--    $.ajax({--}}
        {{--        url: "{{ route('article.store') }}",--}}
        {{--        method: "POST",--}}
        {{--        data: new FormData($("#pages_form")[0]),--}}
        {{--        dataType: 'JSON',--}}
        {{--        contentType: false,--}}
        {{--        cache: false,--}}
        {{--        processData: false,--}}
        {{--        success: function (data) {--}}
        {{--            if (data.error.length > 0) {--}}
        {{--                var error_html = '';--}}
        {{--                for (var count = 0; count < data.error.length; count++) {--}}
        {{--                    error_html += '<div class="alert alert-danger">' + data.error[count] + '</div>';--}}
        {{--                }--}}
        {{--                $('#form_output').html(error_html);--}}
        {{--            } else {--}}
        {{--                $('#form_output').html(data.success);--}}
        {{--                $('#pages_form')[0].reset();--}}
        {{--                $('#action').val('Save');--}}
        {{--                $('#button_action').val('insert');--}}

        {{--                $('#articleDataTables').DataTable().ajax.reload(true);--}}
        {{--            }--}}

        {{--        }--}}
        {{--    })--}}
        {{--});--}}


    </script>

@endsection
