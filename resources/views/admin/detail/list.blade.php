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
                <h1 class="page-header"> Chi tiết
                    <small>Danh sách</small>
                </h1>
            </div>

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="">
                <thead>
                    <tr align="center">
                        <th class="text-center">ID</th>
                        <th class="text-center">ID Món ăn</th>
                        <th class="text-center">Bước</th>
                        <th class="text-center">Nội dung</th>
                        <th class="text-center">Chú ý</th>
                        <th class="text-center">Nền</th>
                        <th class="text-center">Xóa</th>
                        <th class="text-center">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($detail as $de)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $de->id }}</td>
                            <td>{{ $de->idproduct }}</td>
                            <td>{{ $de->step }}</td>
                            <td>{{ $de->content }}</td>
                            <td>{{ $de->note }}</td>
                            <td>{{ $de->bg }}</td>

                            <td class="center"><img src="{{ asset('./image/del.svg')}}" width="17px"/><a href="admin/detail/delete/{{ $de->id }}"> Xóa</a></td>
                            <td class="center"><img src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-coloricon-1/21/31-512.png"  width="20px"/> <a href="admin/detail/edit/{{ $de->id }}">Sửa</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection