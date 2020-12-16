@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Người dùng
					<small>{{ isset( $users->name ) ? $users->name  : ''}}</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			<div class="col-lg-7" style="padding-bottom:120px">
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

				<form action="admin/User/edit/{{$users->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}" />
					{{csrf_field()}} <!-- có dòng này mới được submit -->

					<div class="form-group">
						<label>Họ tên</label>
						<input class="form-control" name="name" placeholder="Nhập tên loại món ăn" value="{{old('name',isset($users->name) ? $users->name : '')}}" required/>
					</div>

					<div class="form-group">
						<label><h4>Email</h4></label>
						<input class="form-control" type="email" name="email" placeholder="Nhập email" readonly="" value="{{old('email',isset($users->email) ? $users->email : '')}}" required/>
					</div>

					<div class="form-group">
						<label><h4>Đổi mật khẩu</h4></label>
						<input class="form-control password" type="password" name="pd" placeholder="Nhập mật khẩu" required/>
					</div>

					<div class="form-group">
						<label><h4>Nhập lại mật khẩu</h4></label>
						<input class="form-control password" type="password" name="pdag" placeholder="Nhập lại mật khẩu" required/>
					</div>

					

					<button type="submit" class="btn btn-warning">Sửa</button>
					<button type="reset" class="btn btn-danger">Đặt lại</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
	<!-- <script type="text/javascript">
		$(document).ready(function() {
			$('#changePw').click(function() {
				if ($(this).is(':checked')) {
					$('.password').removeAttr('disabled');
				}
				else {
					$('.password').attr('disabled','');
				}
			});
		});
	</script> -->
	@endsection