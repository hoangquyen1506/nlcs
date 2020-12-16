@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thời gian
					<small>{{ isset( $timeCook->name ) ? $timeCook->name  : ''}}</small>
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

				<form action="admin/timeCook/edit/{{$timeCook->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}" />
					{{csrf_field()}} <!-- có dòng này mới được submit -->

					<div class="form-group">
						<label><h4>Món ăn</h4></label>
						<select class="form-control" name="idProD" required placeholder="Nhập tên món ăn" value="{{old('idPD',isset($timeCook->idPD) ? $timeCook->idPD : '')}}">
							<option value="">Món ăn</option>
							@if(isset($product))
							@foreach($product as $pro)
							<option value="{{$pro->id}}" {{old('idProD',isset($timeCook->idProD) ? $timeCook->idProD : '') == ($pro->id) ? 'selected' : ''}}>{{$pro->ten_sp}}</option>
							@endforeach
							@endif
						</select>
					</div>

					<div class="form-group">
						<label> <h4>Thời gian nấu</h4></label>
						<input class="form-control" name="name" required placeholder="Nhập thời gian nấu" value="{{old('t_ten',isset($timeCook->t_ten) ? $timeCook->t_ten : '')}}" />
					</div>

					<button type="submit" class="btn btn-warning">Sửa</button>
					<button type="reset" class="btn btn-danger">Đặt lại</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection