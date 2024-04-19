@extends('admin.layout')

@section('content')

@if(Session::has('message'))
<h3>{{ Session::get('message') }}</h3>
@endif
<div class="recent-users">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">#</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userList as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>
                    <a class="d-flex justify-content-end" href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection