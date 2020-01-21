@extends('backend._partial._master')

@section('main_content')


    <div class="col-xl-15">
        <div class="card m-b-60">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title">update Article</h1>
            </div>

            <div class="card-body">
                <form method="post" action="{{route('article.update', $articles)}}" id="pages_form"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="id" value="{{ $articles->id }}">
                    <span id="form_output"></span>

                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $articles->title }}" placeholder="Enter Title">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea class="content" name="description"  id="description">{{ $articles->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" value="{{ $articles->image }}" name="image">
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


<script>
    $('#description').summernote({
        height: 250,
    });
</script>
@endsection
