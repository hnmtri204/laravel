@extends ('admin.layout')

@section('content')
<main>
    <!-- New Product Entry Section -->
    <p class="fw-bold text-center fs-1">Trang thêm danh mục sản phẩm.</p>
    <!-- Modify this within your main content section -->
    <form action="{{ route('admin.products.store')}}" id="productFom" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="name" class="form-label">Tên</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Tên sản phẩm">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Giá">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Giá">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="quantity">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Ảnh</label>
            <input type="text" class="form-control" id="img" name="img" placeholder="Ảnh">
        </div>
        <!-- Add other fields as required -->
        <button class="btn btn-primary" value="them" type="submit" onclick="createProduct()">
            Thêm
        </button>
    </form>
</main>
<!-- End of Main Content -->
@endsection