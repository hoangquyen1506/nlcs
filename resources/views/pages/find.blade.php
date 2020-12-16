@extends('layout.index')
@section('content')
    @if($productLists)
        <?php
            function changeColor($tr, $keyword) {
                return str_replace($keyword, "<span style='color:yellow; font-style: italic;'>$keyword</span>", $tr);
            }
         ?>
        <nav class="form pt-5" data-aos="fade-up" data-aos-duration="1400">
            <div class="box">
                <div class="title pl-5 pr-4"><h3> <b>Kết quả tìm kiếm: {{$keyword ?? ''}}</b> </h3></div>
                

                <div class="box_box row row-cols-4">
  	                @foreach($productLists as $pro)

                        <div data-aos="zoom-in-up" data-aos-duration="1000"  class="box_container col-sm-12 col-md-2 rounded">
                            <div class="box_item">
                                <a href="{{route('get.detail.product',[$pro->tenkd,$pro->id])}}">
                                    <img src="image/img_product/{{$pro->anh_sp}}" alt="a" alt="Lights" style="width:100%" class="hover-fade-out">
                                    <div class="box_content pt-3 pb-3">
                                        <h5>
                                            <b >{!! changeColor($pro->ten_sp, $keyword) !!}</b>
                                        </h5>
                                        <p style="font-size: 14px; ">
                                            {!! changeColor($pro->content, $keyword) !!}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                <div class="box_end p-4"></div>
                <div></div>
            </div>
        </nav>

        
    @endif
    @foreach($productLists as $pro) 
      @if(($pro->idCategory)) 
        @if($products)
        <nav class="form pt-5">
          <div class="box food">
            <!-- <div class="title pl-5 pr-4"><h3> <b>{{isset($category->c_ten) ? $category->c_ten : ''}}</b> </h3></div> -->
            <!-- <div class="box_empty mb-4"></div> -->
            <div class="title pl-5 pr-4"><h3> <b>Món ăn đi kèm: </b> </h3></div>
            <div class="box_box row row-cols-4">
              @foreach($products as $product)
                <div data-aos="zoom-in-up" data-aos-duration="2000" class="box_container col-sm-12 col-md-2 ">
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
      @endif
      
    @endforeach

    
@endsection
