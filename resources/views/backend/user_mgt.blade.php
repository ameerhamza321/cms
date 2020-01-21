@extends('backend._partial._master')

@section('main_content')

    <div class="container">

        <br/>
        <table id="pages_table" class="table table-bordered" style="width:100%">
            <thead class="bg-primary text-white">

            <tr>
                <th class="text-white">Name</th>
                <th class="text-white">Email</th>
                <th class="text-white">Role</th>
                <th class="text-white">Action</th>
            </tr>
            </thead>

            <tbody>
            <div class="container">
                @foreach ($users as $user)

                    <tr>
                        <td> {{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{implode(',', $user-> roles()->get()->pluck('name')->toArray()) }}</td>
                        <td>
                            <a href="{{route('User.edit',$user->id)}}">
                                <button type="button" class="btn btn-primary waves-effect waves-light btn-md">Edit
                                </button>
                            </a>
                            <a href="{{route('User.destroy',$user->id)}}">
                                <button type="button" class="btn btn-danger waves-effect waves-light btn-md">delet
                                </button>
                            </a>
                        </td>

                    </tr>
            @endforeach
            </tbody>

        </table>


@endsection
