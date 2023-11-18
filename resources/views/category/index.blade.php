@extends('layout.admin.main')
@section('content')
<div class="container jumbotron   border border-success">
    <h2>Danh mục quản lý</h2>
           
    <table class="table">
      <thead class="bg-info text-white"> 
        <tr>
          <th>Các danh mục sản phẩm</th>
          
          <th>Thao tác</th>
        </tr>
      </thead>
      <tbody>
           <tr>
            <td>Mainboard</td>
            
            <td> <a class="button btn btn-danger " href="{{ route('product.show') }}"><i class="fas fa-info-circle"></i>  Chi tiết</a>
              <a class="button btn btn-success" href="{{ route('category.edit') }}"><i class="fas fa-tools"></i>  Sửa</a>
              <form class="d-inline-block " action="{{ route('category.destroy') }}" method="post" >
                {{ csrf_field() }}
                @method('DELETE')
                {{-- HTML không có các method PUT, PATCH, DELETE, nên cần dùng lệnh @method để có thể gán các method này --}}
                {{-- or --}}
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                {{-- <input type="hidden" name="_method" value="delete"> --}}
                
                <input type="submit" value="Xóa" class="button btn btn-secondary">
                </form>
            
            </td>
          </tr>
          <tr>
            <td>Cpu</td>
            
            <td> <a class="button btn btn-danger " href="{{ route('product.show') }}"><i class="fas fa-info-circle"></i>  Chi tiết</a>
              <a class="button btn btn-success" href="{{ route('category.edit') }}"><i class="fas fa-tools"></i>  Sửa</a>
              <form class="d-inline-block " action="{{ route('category.destroy') }}" method="post" >
                {{ csrf_field() }}
                @method('DELETE')
                {{-- HTML không có các method PUT, PATCH, DELETE, nên cần dùng lệnh @method để có thể gán các method này --}}
                {{-- or --}}
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                {{-- <input type="hidden" name="_method" value="delete"> --}}
                
                <input type="submit" value="Xóa" class="button btn btn-secondary">
                </form>
            
            </td>
          </tr>
          <tr>
            <td>RAM</td>
            
            <td> <a class="button btn btn-danger " href="{{ route('product.show') }}"><i class="fas fa-info-circle"></i>  Chi tiết</a>
              <a class="button btn btn-success" href="{{ route('category.edit') }}"><i class="fas fa-tools"></i>  Sửa</a>
              <form class="d-inline-block " action="{{ route('category.destroy') }}" method="post" >
                {{ csrf_field() }}
                @method('DELETE')
                {{-- HTML không có các method PUT, PATCH, DELETE, nên cần dùng lệnh @method để có thể gán các method này --}}
                {{-- or --}}
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                {{-- <input type="hidden" name="_method" value="delete"> --}}
                
                <input type="submit" value="Xóa" class="button btn btn-secondary">
                </form>
            
            </td>
          </tr>
 

      </tbody>
    </table>
    <div class="d-flex justify-content-center">{{ $categories->links() }}</div>
                <p class="d-flex justify-content-end">
                    <a class="btn btn-info btn-sm fa fa-plus" href="{{ route('category.create') }}">Thêm danh mục</a>
                </p>

  </div>
@endsection