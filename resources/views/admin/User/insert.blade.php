@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid ">
		<div class="row ">
			<div class="col-lg-12 ">
				<h1 class="page-header">Người quản trị
					<small>Thêm</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			<div class="col-lg-6 " style="padding-bottom:120px">
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $err)
					{{$err}} <br>
					@endforeach
				</div>
				@endif

				@if(session('thongbao'))
				<div class="alert alert-success">
					{{session('thongbao')}}
				</div>
				@endif

				<form action="admin/User/insert" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}" />
					{{csrf_field()}} <!-- có dòng này mới được submit -->

					<div class="form-group">
						<label><h4>Họ tên</h4></label>
						<input class="form-control" name="name" placeholder="Nhập họ tên" required/>
					</div>

					<div class="form-group">
						<label><h4>Email</h4></label>
						<input class="form-control" type="email" name="email" placeholder="Nhập email" required/>
					</div>

					<div class="form-group">
						<label><h4>Mật khẩu</h4></label>
						<input class="form-control" type="password" name="pd" placeholder="Nhập mật khẩu" required/>
					</div>

					<div class="form-group">
						<label><h4>Nhập lại mật khẩu</h4></label>
						<input class="form-control" type="password" name="pdag" placeholder="Nhập lại mật khẩu" required/>
					</div>

				

					<button type="submit" class="btn btn-success">Thêm</button>
					<button type="reset" class="btn btn-danger">Đặt lại</button>
				</form>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection