@extends('backend._partial._master')

@section('main_content')

    <div class="card">
        <div class="card-header">Assign Roles {{$user->name}}"

        </div>
        <div class="card-body">

            <form action="{{route('User.update',$user)}}" method="post">
                @csrf
                {{ method_field('PUT') }}
                @foreach ($roles as $role)
                    <div class="form-check">
                        <input type="checkbox" name="users[]" value="{{$role->id}}"
                               @if ($user->roles->pluck('id')->contains($role->id)) checked
                            @endif>
                        <label>{{$role->name}}</label>
                    </div>

                @endforeach
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>

    </div>


@endsection
