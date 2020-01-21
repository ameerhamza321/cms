
@extends ('backend._partial._master')
@section('main_content')

    <div class="container">
    <div class="col-xl-15">
        <div class="card m-b-60">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title ">Update Page</h1>
                <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> {{session('successMsg')}}

            </div>


            <div class="card-body">
                <form method="post" action="{{ route('Pages.list.update',$pages) }}"  id="pages_form">
                    @method('PUT')
                    @csrf
                    <span id="form_output"></span>
                    <input type="hidden" name="id" id="id" value="{{ $pages->id }}">

                    <div class="form-group">
                        <label class="form-label">Page Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $pages->title }}"  placeholder="Enter Page Title">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Page Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control" value="{{ $pages->slug }}" placeholder="Enter Page Slug">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Page Heading</label>
                        <input type="text" name="heading" id="heading" class="form-control" value="{{ $pages->heading }}" placeholder="Enter Page Heading">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Meta Title</label>
                        <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ $pages->meta_title }}" placeholder="Enter Meta Title">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Meta Keywords</label>
                        <input type="text" class="form-control" name="meta_keywords" id="meta_keywords" value="{{ $pages->meta_keywords }}" placeholder="Enter Meta Keywords">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Meta Description</label>
                        <input type="text" class="form-control" name="meta_description" id="meta_description" value="{{ $pages->meta_description }}" placeholder="Enter Meta Description">
                    </div>


                    <div class="form-group">
                        <label class="form-label">Page Description</label>

                        <textarea class="content" name="description" id="description" >{{ $pages->description }}</textarea>
                    </div>



                    <div class="form-group mb-0">

                        <div class="checkbox checkbox-secondary">
                            <input type="hidden" name="button_action" id="button_action" value="insert" />
                            <input type="submit" name="submit" id="action" value="Update Page" class="btn btn-primary waves-effect waves-light" />
                            <a href="{{ route('Pages_list.index') }}" class="btn btn-danger">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- end col -->

<script>
    $('#description').summernote({
        height: 250
    });

    $('#title').on('keyup', function () {
        var theTitle = this.value.toLowerCase().trim();
        slugInput = $('#slug'),
            theSlug = theTitle.replace(/&/g, '-and-')
                .replace(/[^a-z0-9-]+/g, '-')
                .replace(/\-\+/g, '-')
                .replace(/^-+|-+&/g, '-')
        slugInput.val(theSlug);

    });
</script>












@endsection
