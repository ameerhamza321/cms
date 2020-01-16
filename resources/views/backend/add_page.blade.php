@extends('backend._partial._master')

@section('main_content')


    <div class="col-xl-15">
        <div class="card m-b-60">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title ">Add New Page</h1>
            </div>


            <div class="card-body">

                <form method="post" action="{{route('Pagesmgt.postdata')}}" id="pages_form">
                    @method('POST')
                    @csrf
                    <span id="form_output"></span>

                    <div class="form-group">
                        <label class="form-label">Page Ttile</label>
                        <input type="text" name="title" id="title" class="form-control"  placeholder="Enter Page Title">

                    </div>

                    <div class="form-group">
                        <label class="form-label">Page Slug</label>

                        <input type="text" name="slug" id="slug" class="form-control"  placeholder="Enter Page Slug">

                    </div>

                    <div class="form-group">
                        <label class="form-label">Page Heading</label>

                        <input type="text" name="heading" id="heading" class="form-control"  placeholder="Enter Page Heading">



                    </div>

                    <div class="form-group">
                        <label class="form-label">Meta Title</label>

                        <input type="text" name="meta_title" id="meta_title" class="form-control"  placeholder="Enter Meta Title">

               ">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Meta Keywords</label>

                        <input type="text" class="form-control" name="meta_keywords" id="meta_keywords" placeholder="Enter Meta Keywords">



                    </div>

                    <div class="form-group">
                        <label class="form-label">Meta Description</label>

                        <input type="text" class="form-control" name="meta_description" id="meta_description" placeholder="Enter Meta Description">



                    </div>


                    <div class="form-group">
                        <label class="form-label">Page Description</label>

                        <textarea class="content" name="description" id="description"></textarea>
                    </div>




                    <div class="form-group mb-0">
                        <div class="checkbox checkbox-secondary">
                            <input type="hidden" name="button_action" id="button_action" value="insert" />
                            <input type="submit" name="submit" id="action" value="Add New Page" class="btn btn-primary waves-effect waves-light" />

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


        $('#description').on('submit', function(files, editor, welEditable){
            sendFile(files[0], editor, welEditable);
            function sendFile(file, editor, welEditable,event) {

                event.preventDefault();
                var form_data = $(this).serialize();
                data.append("file", file);
                var url =
                    $.ajax({
                        data: data,
                        type: "POST",

                        url: "{{ route('Pagesmgt.postdata') }}",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(url) {

                            alert('Success');
                            editor.insertImage(welEditable, url);
                        }
                    });

            }






            $(document).ready(function() {



                $('#pages_form')[0].reset();
                $('#form_output').html('');
                $('#button_action').val('insert');

            });

            $('#pages_form').on('submit', function(event){
                event.preventDefault();
                var form_data = $(this).serialize();
                $.ajax({
                    url:"{{ route('Pagesmgt.postdata') }}",
                    method:"POST",
                    data:form_data,
                    dataType:"json",
                    success:function(data)
                    {
                        if(data.error.length > 0)
                        {
                            var error_html = '';
                            for(var count = 0; count < data.error.length; count++)
                            {
                                error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';


                            }
                        }

                        else
                        {
                            $('#form_output').html(data.success);
                            $('#pages_form').reset();
                            $('#action').val('Add New Page');
                            $('#button_action').val('insert');
                            $('#pages_table').DataTable().ajax.reload();
                        }
                    }
                })
            });

                    })
                });






    </script>



@endsection
