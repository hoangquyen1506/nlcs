@extends('layout.index')

@section('content')

<style>
	.titlecate {
	color: brown;
	margin: 20px 50px;
	font-size: 30px; 
  
  /* background-color: grey; */
}
</style>

  <p class="titlecate"> Món ăn của bạn: <span>{{isset($ss->ten_mua) ? $ss->ten_mua : ''}}</span></p>
  <hr>
@if($productss)
    <nav class="form pt-5" data-aos="fade-up" data-aos-duration="3000">
      <div class="box">

        <div class="box_box row row-cols-4">
          @foreach($productss as $product)
            <div class="box_container col-sm-12 col-md-2 ">
              <div class="box_item">
                <a href="{{route('get.detail.product',[$product->tenkd,$product->id])}}">
                    <img src="image/img_product/{{$product->anh_sp}}" alt="a" alt="Lights" style="width:100%" class="hover-fade-out">
                  <div class="box_content pt-3 pb-3">
                    <h5>
                      <b>{{$product->ten_sp}}</b>
                    </h5>
                    <p style="font-size: 14px;">
                      {{$product->content}}
                    </p>
                  </div>
                </a>
              </div>
            </div>
          @endforeach
        </div>
        <div class="box_end p-4"></div>
      </div>
    </nav>
  @endif
@endsection