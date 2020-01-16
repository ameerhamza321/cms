@extends('backend._partial._master')

@section('main_content')

    <div class="container">
        <div align="right">
            <a href="{{route('PagesMgt.index')}}" class="btn btn-primary waves-effect waves-light btn-md">Add New
                Page</a>
        </div>
        <br/>
        <table id="pages_table" class="table table-bordered" style="width:100%">
            <thead class="bg-primary text-white">
            <tr>

                <th class="text-white">Title</th>
                <th class="text-white">Slug</th>
                <th class="text-white">Heading</th>
                <th class="text-white">Meta Title</th>
                <th class="text-white">Meta Keywords</th>
                <th class="text-white">Meta Decsription</th>
                <th class="text-white">Decsription</th>
            </tr>
            </thead>
        </table>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#pages_table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('Pages_list.getdata') }}",
                "columns": [
                    {"data": "title"},
                    {"data": "slug"},
                    {"data": "heading"},
                    {"data": "meta_title"},
                    {"data": "meta_keywords"},
                    {"data": "meta_description"},
                    {"data": "shortDescription"}
                ]
            });


            if($('#action').val() == "Edit")
            {
                $.ajax({
                    url:"{{ route('article.update') }}",
                    method:"POST",
                    data:new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType:"json",
                    success:function(data)
                    {
                        var html = '';
                        if(data.errors)
                        {
                            html = '<div class="alert alert-danger">';
                            for(var count = 0; count < data.errors.length; count++)
                            {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if(data.success)
                        {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('#sample_form')[0].reset();
                            $('#store_image').html('');
                            $('#user_table').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
                setTimeout(function(){
                    $('#formModal').modal('hide');
                    $('#articleDataTables').DataTable().ajax.reload();
                }, 2000);
            }
        });

        $(document).on('click', '.editRecord', function(){
            var id = $(this).attr('id');
            $('#form_result').html('');
            $.ajax({
                url:"/article/"+id+"/edit",
                dataType:"json",
                success:function(html){
                    $('#title').val(html.data.title);
                    $('#description').val(html.data.description);
                    $('#store_image').html("<img src={{ URL::to('/') }}/images/" + html.data.image + " width='100' class='img-thumbnail' />");
                    $('#store_image').append("<input type='hidden' name='hidden_image' value='"+html.data.image+"' />");
                    $('#hidden_id').val(html.data.id);
                    $('.modal-title').text("Edit New Record");
                    $('#action_button').val("Edit");
                    $('#action').val("Edit");
                    $('#formModal').modal('show');

                }
            })
        });

        });


    </script>

@endsection
