@extends('backend._partial._master')


@section('main_content')

    <div class="row">
        <div class="col-md-12 col-lg-12">
            @if(session('successMsg'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> {{session('successMsg')}}
                </div>
        @endif
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



    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
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

                    {
                        "data": "title", name: 'title'},
                    {
                        "data": "image", name: 'image',
                        render: function (data, type, row) {
                            return `<img src="${BaseUrl}/images/${data}" width='100' height='100'>`;
                        }
                    },
                    {"data": "shortDescription", name: 'description', searchable: true, orderable: false},
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


            var user_id;

            $(document).on('click', '.deleteRecord', function(){
                user_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function(){
                $.ajax({
                    url:"article/destroy/"+user_id,
                    beforeSend:function(){
                        $('#ok_button').text('Deleting...');
                    },
                    success:function(data)
                    {
                        setTimeout(function(){
                            $('#confirmModal').modal('hide');
                            $('#articleDataTables').DataTable().ajax.reload();
                        }, 1000);
                    }
                })
            });

        });//.... end ready() .....//

    </script>

@endsection
