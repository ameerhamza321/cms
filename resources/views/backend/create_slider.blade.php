@extends('backend._partial._master')

@section('main_content')

    {{--    <div class="content">--}}
    {{--        <div class="container-fluid">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-12">--}}
    {{--                    <div class="card">--}}
    {{--                        <div class="card-header" data-background-color="purple">--}}
    {{--                            <h4 class="title">Add New Slider</h4>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-content">--}}
    {{--                            <form method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">--}}
    {{--                                @csrf--}}
    {{--                                <div class="row">--}}
    {{--                                    <div class="col-md-12">--}}
    {{--                                        <div class="form-group label-floating">--}}
    {{--                                            <label class="control-label">Title</label>--}}
    {{--                                            <input type="text" class="form-control" name="title">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="row">--}}
    {{--                                    <div class="col-md-12">--}}
    {{--                                        <div class="form-group label-floating">--}}
    {{--                                            <label class="control-label">Sub Title</label>--}}
    {{--                                            <input type="text" class="form-control" name="sub_title">--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="row">--}}
    {{--                                    <div class="col-md-12">--}}
    {{--                                        <label class="control-label">Image</label>--}}
    {{--                                        <input type="file" name="image">--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <a href="{{ route('slider.index') }}" class="btn btn-danger">Back</a>--}}
    {{--                                <button type="submit" class="btn btn-primary">Save</button>--}}
    {{--                            </form>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

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
                    <h3 class="card-title">Add Slider</h3>

                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Sub Title</label>
                                    <input type="text" class="form-control" name="sub_title">
                                </div>
                            </div>
                        </div>
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <label class="control-label">Image</label>--}}
{{--                                <input type="file" name="image">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label">Upload Images</label>
                            </div>
                        </div>

                        <a href="#" class="btn btn-danger">Back</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
