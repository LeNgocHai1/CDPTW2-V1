@extends('layout.admin.main')
@section('content')
    <div class="container jumbotron   border border-success">
        <h2>Danh mục quản lý</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <table class="table">
            <thead class="bg-info text-white">
                <tr>
                    <th>Các danh mục sản phẩm</th>

                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->categoryName }}</td>

                        <td> <a class="button btn btn-danger " href="{{ route('product.show', $category->categoryID) }}"><i
                                    class="fas fa-info-circle"></i> Chi tiết</a>
                            <a class="button btn btn-success" href="{{ route('category.edit', $category->categoryID) }}"><i
                                    class="fas fa-tools"></i> Sửa</a>
                            <form class="d-inline-block" action="{{ route('category.destroy', $category->categoryID) }}"
                                method="post">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')"
                                    class="button btn btn-secondary">Xóa</button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <div class="d-flex justify-content-center">{{ $categories->links() }}</div>
        <p class="d-flex justify-content-end">
            <a class="btn btn-info btn-sm fa fa-plus" href="{{ route('category.create') }}">Thêm danh mục</a>
        </p>

    </div>
@endsection
