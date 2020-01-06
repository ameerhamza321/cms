@extends('backend._partial._master')

@section('main_content')


    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card m-b-20">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Update Slider</h3>

                </div>
                <div class="card-body">

                    <form method="POST" action="/update/{{ $sliders->id }}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <input type="hidden" name="id" id="id" value="{{ $sliders->id }}">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                           value="{{ $sliders->title }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Sub Title</label>
                            <input type="text" class="form-control" name="sub_title" placeholder="Sub Title" id="slug"
                                   value=" {{ $sliders->sub_title }} " readonly>
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" value="{{ $sliders->image }}">
                                <label class="custom-file-label">Upload Images</label>
                            </div>
                        </div>

                        <a href="#" class="btn btn-danger">Back</a>
                        <button type="submit" class="btn btn-info">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
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
