@extends('layout.index')


@section('content')
<!-- Mua dropdown -->
<div class="dropdown">
      <button class="dropbtn">Món ăn theo mùa<i class="fas fa-chevron-down arrow" ></i></button>
      <ul>
         @foreach($season as $ss)
            <li class="dropdown-content" style="color:black;">
               <a class="" style="color:black;" href="{{route('get.ss.product',[$ss->tenmuakd,$ss->id])}}">
                  <span style="font-size: 15px;">{{$ss->ten_mua}}</span>
               </a>
            </li> 
         @endforeach
      </ul>
   </div>
	
<main class="pt-5" >
@foreach($type as $ty => $val)
		<!-- <nav class="form pt-5" > -->

	<div class="box"  >
		<div class="d-flex justify-content-between viewdetail">
			<div class="title pl-5 pr-4" style="color: black; font-weigth:bold; background-color: grey;"><h3> <b>{{$val->ten_ty}}</b></h3></div> 	
			
		</div>
		<!-- <p style="margin-left:40px;">Các bạn ơi, hãy để Yummy chăm sóc từng thành viên trong gia đình bạn bằng những món ăn hợp khẩu vị của mỗi cá nhân</p> -->
		@if(isset($val->getType) != null)
			<div  class="box_box row row-cols-4">
				@foreach($val->getType as $key => $value )
					<div data-aos="zoom-in-up" data-aos-duration="2000" class="box_container col-sm-12 col-md-2">
						<div class="box_item ">
							<a href="{{route('get.detail.product',[$value->tenkd,$value->id])}}">
								<img src="image/img_product/{{$value->anh_sp}}" alt="a" alt="Lights" style="width:100%" class="hover-fade-out">
								<div class="box_content p-3">
									<h5>
										<b>{{isset($value->ten_sp) ? $value->ten_sp : ''}}</b>
									</h5>
									<p>
										{{isset($value->content) ? $value->content : ''}}
									</p>
								</div>
							</a>
						</div>
					</div>
				@endforeach
				
			</div>
		@endif
		<div class="box_end p-4"></div>
	</div>
		</nav>
	@endforeach
</main>
@endsection

