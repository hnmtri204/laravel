@extends ('admin.layout')

@section('content')
<main>
    <!-- New Product Entry Section -->
    <p class="fw-bold text-center fs-1">Trang chỉnh sửa danh mục sản phẩm.</p>
    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field()}}
        {{ Method_field('PUT') }}
        <div class="mb-3">
            <input type="hidden" class="form-control" id="id" name="id" placeholder="Nhập id danh mục sản phẩm">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Tên</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name}}" placeholder="Nhập tên danh mục sản phẩm">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description" value="" placeholder="Nhập mô tả danh mục sản phẩm">{{ $product->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá</label>
            <textarea class="form-control" id="price" name="price" value="" placeholder="Nhập mô tả giá sản phẩm">{{ $product->price}}</textarea>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <textarea class="form-control" id="quantity" name="quantity" value="" placeholder="Nhập số lượng sản phẩm">{{ $product->quantity}}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Ảnh</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ $product->img}}" placeholder="Nhập ảnh danh mục sản phẩm">
        </div>
        <button class="btn btn-primary" name="submit" type="submit" onclick="editProduct()"><i data-lucide="chevron-right-square"></i>Edit</button>
    </form>
</main>
<!-- End of Main Content -->
@endsection