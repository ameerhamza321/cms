@extends('backend._partial._master')

@section('main_content')

    <div class="row">
        <div class="col-md-12">
{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}
            <div class="card m-b-20">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Add Slider</h3>

                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                                           placeholder="Enter Title">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Sub Title</label>
                            <input type="text" class="form-control @error('sub_title') is-invalid @enderror" name="sub_title" placeholder="Sub Title" id="slug"
                                   value="Sub Title " readonly>
                            @error('sub_title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image">
                                <label class="custom-file-label ">Upload Images</label>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <a href="{{ route('slider.index') }}" class="btn btn-danger">Back</a>
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
