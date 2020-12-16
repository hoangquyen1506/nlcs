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
                <h1 class="page-header">Người quản trị
                    <small>Danh sách</small>
                </h1>
            </div>

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="">
                <thead>
                    <tr align="center">
                        <th class="text-center">ID</th>
                        <th class="text-center">Tên</th>
                        <th class="text-center">Email</th>

                        <th class="text-center">Xóa</th>
                        <th class="text-center">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($users as $us)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $us->id }}</td>
                            <td>{{ $us->name }}</td>
                            <td>{{ $us->email }}</td>

                            <td class="center"><img src="{{ asset('./image/del.svg')}}" width="17px"/><a href="admin/User/delete/{{$us->id}}"> Xóa</a></td>
	                        <td class="center"><img src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-coloricon-1/21/31-512.png"  width="20px"/> <a href="admin/User/edit/{{$us->id}}">Sửa</a></td>
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