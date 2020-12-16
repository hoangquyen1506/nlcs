@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Loại món ăn tiêu biểu
					<small>{{ isset($type->name ) ? $type->name  : ''}}</small>
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

				<form action="admin/type/edit/{{$type->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}" />
					{{csrf_field()}} <!-- có dòng này mới được submit -->
					<div class="form-group">
						<label>Tên loại món ăn tiêu biểu</label>
						<input class="form-control" name="name" placeholder="Nhập tên loại món ăn" value="{{old('ten_ty',isset($type->ten_ty) ? $type->ten_ty : '')}}" required/>
					</div>

					<button type="submit" class="btn btn-warning">Sửa</button>
					<button type="reset" class="btn btn-danger">Đặt lại</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection