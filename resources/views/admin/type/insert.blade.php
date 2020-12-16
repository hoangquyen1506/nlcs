@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Loại món ăn tiêu biểu
					<small>Thêm</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			<div class="col-lg-7" style="padding-bottom:120px">
				
				@if(session('thongbao'))
				<div class="alert alert-success">
					{{session('thongbao')}}
				</div>
				@endif 

				<form action="admin/type/insert" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}" />
					{{csrf_field()}} <!-- có dòng này mới được submit -->
					<div class="form-group">
						<label><h4>Tên loại món ăn tiêu biểu</h4></label>
						<input class="form-control" name="name" placeholder="Nhập tên loại món ăn" required/>
						@if($errors->has('name'))
								<span class="error-text" style="color:red!important;">
									{{ $errors->first('name')}}
								</span>
							@endif
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