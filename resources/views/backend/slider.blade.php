
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
                    <div class="card-title">Slider</div>
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
                                    <td><img src="{{asset('uploads/slider/' . $slider->image)}}" width="50px" alt="image"/></td>

                                    <td>
                                        <a class="icon" href="#"></a>
                                        <a href="/edit/{{ $slider->id }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> </a>

                                        <a class="icon" href="#"></a>
                                        <a href="#" class="btn btn-green btn-sm"><i class="fa fa-eye"></i> </a>

                                        <a class="icon deleteRecord" href="#"></a>
                                        <a href="#" class="btn btn-danger btn-sm deleteRecord"><i class="fa fa-trash"></i> </a>

                                    </td>
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
