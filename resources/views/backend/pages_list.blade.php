@extends('backend._partial._master')

@section('main_content')

<div class="container">
    <div align="right">
      <a href="{{route('PagesMgt.index')}}" class="btn btn-primary waves-effect waves-light btn-md" >Add New Page</a>
    </div>
    <br />
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
    $(document).ready(function() {
        $('#pages_table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('Pages_list.getdata') }}",
            "columns":[
                { "data": "title" },
                { "data": "slug" },
                { "data": "heading" },
                { "data": "meta_title" },
                { "data": "meta_keywords" },
                { "data": "meta_description" },
                { "data": "shortDescription" }
            ]
        });
        });


</script>

@endsection
