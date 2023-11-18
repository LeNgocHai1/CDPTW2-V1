@extends('layout.admin.main')
@section('content')
<div class="container jumbotron border border-success">
    <h2>Danh sách người dùng hệ thống</h2>
           
    <table class="table">
      <thead class="bg-warning"> 
        <tr class="text-white">
          <th>Tên Người dùng</th>
            <th>Email</th>
         <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Quyền Quản Trị</th>
       <th>Thao tác</th>
    
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>ngochai</td>
          <td>lengochai.fit2019@gmail.com</td>
          <td>
               0332369993 
          </td>
          <td>
              TP.HCM
          </td>
          <td>
            user
          </td>
          
          <td> 
            <a class="button btn btn-success" href="{{ route('user.edit') }}"><i class="fas fa-tools"></i>  Sữa</a>
            <form class="d-inline-block " action="{{ route('user.destroy') }}" method="post" >
              {{ csrf_field() }}
              @method('DELETE')
              {{-- HTML không có các method PUT, PATCH, DELETE, nên cần dùng lệnh @method để có thể gán các method này --}}
              {{-- or --}}
              {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
              {{-- <input type="hidden" name="_method" value="delete"> --}}
             
             <button type="submit" class="button btn btn-danger"> <i class="fas fa-trash-alt"></i> Xóa</button>
              </form>
          
          </td>
        </tr>
      </tbody>
    </table>
   

  </div>
    
@endsection