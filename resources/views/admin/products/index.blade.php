@extends ('admin.layout')

@section('content')

@if(Session::get('message'))
<h3>{{ Session::get('message') }}</h3>
@endif
<div class="recent-products">
    <h2>Products</h2>
    <a href="../Products/create.html">
        <span class="material-icons-sharp">add_circle_outline</span>
        <h3>Add New Product</h3>
    </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Mô Tả</th>
                <th scope="col">Giá</th>
                <th scope="col">Quantity</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">#</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productList as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->image }}</td>
                <td>
                    <a class="d-flex justify-content-end" href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
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
<!-- End of Recent Orders -->

@endsection