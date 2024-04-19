@extends('admin.layout')

@section('content')
<main>
    <h1>Dashboard</h1>
    <!-- New Product Entry Section -->
    <p class="fw-bold text-center fs-1">Trang sửa thông tin người dùng.</p>
    <form action="{{ route('admin.users.update', $user) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field()}}
        {{ Method_field('PUT') }}
        <div class="mb-3">
            <label for="name" class="form-label">Tên</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name}}" placeholder="Nhập tên.">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email}}" placeholder="Nhập Email.">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="text" class="form-control" id="password" name="password" value="{{ $user->password}}" placeholder="Nhập password.">
        </div>
        <div class="form-group" id="form-group" style="width: 100%;">
            <label for="role" style="margin-left: 0px;">Role:</label>
            <select class="form-select me-4" style="width: 100%;" id="role" value="{{ $user->role}}">
                <option>Admin</option>
                <option>User</option>
            </select>
        </div>
        <button class="btn btn-primary" name="submit" type="submit" onclick="editUser()" style="margin-top: 20px;"><i data-lucide="chevron-right-square"></i>Edit</button>
    </form>
</main>
@endsection