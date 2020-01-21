@extends('backend._partial._master')

@section('main_content')

    <div class="container">
        @if(session('successMsg'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> {{session('successMsg')}}
            </div>
        @endif
        <div align="right">

            <a href="{{route('Pagesmgt.index')}}" class="btn btn-primary waves-effect waves-light btn-md">Add New
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

                <th class="text-white">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>


            <tbody>
            <div class="container">
                @foreach ($pages ?? '' as $page)

                    <tr>
                        <td> {{ $page->title }}</td>
                        <td> {{ $page->slug }}</td>
                        <td> {{ $page->heading }}</td>
                        <td> {{ $page->meta_title }}</td>
                        <td> {{ $page->meta_keywords }}</td>

                        <td> {{ $page->meta_description }}</td>
                        <td>
                            {{ substr($page->description, 0, 10) }} {{ strlen($page->description)> 10 ? '...':"" }}
                        </td>
                        <td>
                            <a class="icon" href="#"></a>
                            <a href="/Pages_list/{{$page->id}}/edit"
                               class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> </a>

                            <a class="icon deleteRecord" href="#"></a>
                            <a href="#"
                               class="delete btn btn-danger btn-sm deleteRecord"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
            </div>
            @endforeach
            </tbody>
        </table>
    </div>


    </tr>
    </thead>
    </table>
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


    <script type="text/javascript">


        $(document).ready(function () {

            $('#user_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('Pages_list.index') }}", "type": "GET", "dataType": "JSON"

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

            var user_id;

            $(document).on('click', '.delete', function () {
                user_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function () {
                $.ajax({
                    url: "Pages_list/destroy/" + user_id,
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


    </script>


@endsection
