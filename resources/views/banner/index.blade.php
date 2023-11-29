@extends('layout.admin.main')

@section('content')
<div class="container jumbotron border border-success">
    <h2>Quản lí Banner quảng cáo</h2>
    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif
    
    @if(session('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
    @endif
    <table class="table">
        <thead class="bg-info text-white"> 
            <tr>
                <th>Ảnh slide active</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($slide))
                <tr> 
                    <td>
                        <div class=""><img  src="{{ asset('public/upload/' . $slide->slide) }}" alt="Active Slide Image" style="width: 300px;"></div>
                    </td>

                </tr>
            @endif
            <tr class="bg-info text-white">
                <th>Ảnh slide</th>
                <th>Thao tác</th>
            </tr>

            @foreach ($slides as $item)
                <tr>
                    <td>
                        <div class=""><img  src="{{ asset('public/upload/' . $item->slide1) }}"  alt="Product Image" style="width: 300px;"></div>
                    </td>
                    <td>
                        <div class=""><img  src="{{ asset('public/upload/' . $item->ads) }}"  alt="Product Image" style="width: 300px;"></div>
                    </td>
                    <td> 
                        <a class="button btn btn-success" href="{{ route('banner.edit', $item->id) }}"><i class="fas fa-tools"></i>  Sửa</a>
                        <form class="d-inline-block" action="{{ route('banner.destroy', $item->id) }}" method="post">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa banner này?')" class="button btn btn-secondary">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">{{ $slides->links() }}</div>
    <p class="d-flex justify-content-end">
        <a class="btn btn-info btn-sm fa fa-plus" href="{{ route('banner.create') }}">Thêm banner</a>
    </p>
</div>
@endsection
