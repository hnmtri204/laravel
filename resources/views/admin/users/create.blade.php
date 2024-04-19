@extends('admin.layout')

@section('content')
<main>
    <h1>Dashboard</h1>
    <!-- New Product Entry Section -->
    <p class="fw-bold text-center fs-1">Trang thêm thông tin người dùng.</p>
    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="name" class="form-label">Tên</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên.">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Nhập Email.">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Nhập password.">
        </div>
        <div class="form-group" id="form-group" style="width: 100%;">
            <label for="role" style="margin-left: 0px;" id="role">Role:</label>
            <select name="role" class="form-select me-4" style="width: 100%;">
                <option value="admin">Admin</option>
                <option value="user" selected>User</option>
            </select>
        </div>

        <button class="btn btn-primary " name="submit" type="submit" onclick="createUser()" style="margin-top: 20px;"><i data-lucide="chevron-right-square"></i>Thêm</button>
    </form>
</main>
<!-- End of Main Content -->
@endsection