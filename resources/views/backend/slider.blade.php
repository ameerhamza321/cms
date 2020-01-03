@extends('backend._partial._master')
@section('main_content')

    <div class="row">
        <div class="col-md-12 col-lg-12">
            @if(session('successMsg'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Success Message</strong>
                    <hr class="message-inner-separator">
                    <p>{{session('successMsg')}}</p>
                </div>
            @endif
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="card-title">Slide</div>
                    <button type="button" name="create_record" class="btn btn-dark" id="create_record"
                            data-toggle="modal" style="margin-left:880px;"><i class="fe fe-plus mr-2"></i>Add
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="articleDataTables" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th width="100px">Title</th>
                                <th width="100px">Sub Title</th>
                                <th width="100px">Images</th>
                                <th width="100px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $key=>$slider)
                                <tr>

                                    <td>{{ $slider->title }}</td>
                                    <td>{{ $slider->sub_title }}</td>
                                    <td>{{ $slider->image }}</td>

                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- table-wrapper -->
            </div>
            <!-- section-wrapper -->
        </div>
    </div>

@endsection
