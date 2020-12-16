@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Mùa
					<small>{{ isset( $season->name ) ? $season>name  : ''}}</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			<div class="col-lg-7" style="padding-bottom:120px">
				

				@if(session('thongbao'))
				<div class="alert alert-success">
					{{session('thongbao')}}
				</div>
				@endif

				<form action="admin/season/edit/{{$season->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}" />
					{{csrf_field()}} <!-- có dòng này mới được submit -->
					

					

					<div class="form-group">
						<label> <h4>Tên mùa</h4></label>
						<input class="form-control" name="name" required placeholder="Nhập tên mùa" value="{{old('t_ten',isset($season->ten_mua) ? $season->ten_mua : '')}}" />
					</div>

					<button type="submit" class="btn btn-warning">Sửa</button>
					<button type="reset" class="btn btn-danger">Đặt lại</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection