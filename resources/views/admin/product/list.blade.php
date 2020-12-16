@extends('admin.layout.index')

@section('content');
<!-- Page Content -->
<div id="page-wrapper">
    @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Món ăn
                    <small>Danh sách</small>
                </h1>
            </div>

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="">
                <thead>
                    <tr align="center">
                        <th class="text-center">ID</th>
                        <th class="text-center">ID Loại Món ăn</th>
                        <th class="text-center">ID Loại Món ăn tiêu biểu</th>
                        <th class="text-center">Tên món ăn</th>
                        <th class="text-center">Mùa</th>
                        <th class="text-center">Nội dung</th>
                        <th class="text-center">Xóa</th>
                        <th class="text-center">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $pro)
                        <tr class="odd gradeX" align="center">
                            <td class="center">{{$pro->id}}</td>
                            <td>{{$pro->idCategory}}</td>
                            <td>{{$pro->idType}}</td>
                            <td class="center">{{$pro->ten_sp}}</td>
                            <td>{{$pro->idSeason}}</td>
                            <td>{{$pro->content}}</td>
                            <td class="center"><img src="{{ asset('./image/del.svg')}}" width="17px"/><a href="admin/product/delete/{{$pro->id}}"> Xóa</a></td>
                            <td class="center"><img src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-coloricon-1/21/31-512.png"  width="20px"/>  <a href="admin/product/edit/{{$pro->id}}">Sửa</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection