@extends('layout.index')

@section('content')
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-alt-circle-up fa-2x"></i></button>
    <main>
        <nav class="intro d-flex justify-content-center p-5">
            <div class="intro_container shadow">
                <div class="intro_box">

                @if($productDetails)
                        @foreach($productDetails as $productDetail)
                        <!-- {{print_r($productDetail->idCategory)}} -->
                       <div class="second_content d-flex justify-content-center">
                            <div class="name_d">
                                <h1><b>{{$productDetail->ten_sp}}</b></h1>
                                
                            </div>
                        </div>
						 @endforeach
                        @endif
                        
    
                @if($getDetails)
                    @foreach($getDetails as $getDetail)
                        @if($getDetail->bg != null)
                            <div class="intro_image">
                            <img class="bg-detail" src="image/img_detail/{{$getDetail->bg}}" alt="background" style="width:500px; height:400px; margin-left:10px; ">
                            </div>
                        @endif
                    @endforeach
                @endif

                    <div class="intro_content">
                        <div class="first_content d-flex justify-content-center pt-4"></div>
                        

                        <div class="end_content d-flex justify-content-center pt-2 rounded-pill mt-3">
                            
                            @if($levels)
                                @foreach($levels as $level)
                            <div>
                                <h5 class="text-center" style="color: #fff;">Độ khó</h5>
                                <h4 class="text-center" style="color: #ffa500;"><b>{{ $level->l_ten }}</b></h4>
                            </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
            
        </nav>
        <nav class="ingredients d-flex justify-content-center pl-5 pr-5 pb-3" data-aos="fade-up" data-aos-duration="2000" >
            <div class="ingredients_container shadow" >
                <div class="ingredients_box">
                    <div class="ingredients_name border-bottom pb-1">
                        <!-- <h4><b>{{$productDetail->ten_sp}}</b></h4> -->
                        <h3><b class="text-muted " style="color:brown !important;">Nguyên liệu</b></h3>
                    </div>

                    @if($getMaterials)
                            <div class="ingredients_content pt-3">
                                <ul class="row">
                                @foreach($getMaterials as $getMaterial)
                                    <li class="d-flex  col-6">
                                        <p class="pl-5 sticker">{{$getMaterial->r_ten}}: </p>
                                        <p class="pl-3" style="color: brown;"><b>{{$getMaterial->r_soluong}}</b></p>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                    @endif

                    @if( $getSpices )
                        <div class="con ">
                            <div class="ingredients_content pt-2">
                            <ul class="row ">
                            @foreach( $getSpices as $getSpice )
                                <li class="d-flex  col-6 ">
                                    <p class="pl-5 sticker">{{$getSpice->s_ten}}: </p>
                                    <p class="pl-3" style="color: brown;"><b>{{$getSpice->s_soluong}}</b></p>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                        </div>
                    @endif
                </div>
            </div>
        </nav>
        <nav class="cook d-flex justify-content-center pt-4 pb-5 " data-aos="fade-up" data-aos-duration="2000">
            <div class="cook_container shadow">
                <div class="cook_box">
                    <div class="cook_first d-flex justify-content-between border-bottom">
                        <div>
                            <h3><b class="text-muted" style="color:brown !important; ">Cách thực hiện</b></h3>
                            <!-- <h4>Cách làm</h4> -->
                        </div>

                      
                    </div>

							@if($getDetails)
							@foreach($getDetails as $getDetail)
                    <div>
                        <div class="step pl-5 pr-5 pt-5 d-flex">
                            <div class="step_number pr-4 " >
                                <div class="border rounded step_box">
                                    <p style="font-size: 16px;" class="text-muted pt-2">Bước</p>
                                    <h1 class="text-center" style="color: #ff0000;">
                                    <b>{{$getDetail->step}}</b></h1>
                                </div>
                            </div>
                            
                            <div class="step_content text-justify">
                                <p style="font-size: 18px;">{{$getDetail->content}}</p>

                                @if($getDetail->note != null)
                                    <p class="text-muted" style="font-size: 16px;"><img src="https://img.icons8.com/fluent/48/000000/jingle-bell.png" width="30px" />{{$getDetail->note}}</p>
                                @endif
                            </div>
                            

                        </div>
                                <div class="step_box_img row row-cols-2">
                                    <div class="step_img col p-3">
                                        <img src="image/img_detail/{{$getDetail->img1}}" width="286px" height="286px" alt="1">
                                    </div>

                                    @if($getDetail->img2 != null)
                                    <div class="step_img col p-3">
                                        <img src="image/img_detail/{{$getDetail->img2}}" width="286px" height="286px" alt="2">
                                    </div>
                                    @endif

                                    @if($getDetail->img3 != null)
                                    <div class="step_img col p-3">
                                        <img src="image/img_detail/{{$getDetail->img3}}" width="286px" height="286px" alt="3">
                                    </div>
                                    @endif

                                    @if($getDetail->img4 != null)
                                    <div class="step_img col p-3">
                                        <img src="image/img_detail/{{$getDetail->img4}}" width="286px" height="286px" alt="4">
                                    </div>
                                    @endif

                                    @if($getDetail->img5 != null)
                                    <div class="step_img col p-3">
                                        <img src="image/img_detail/{{$getDetail->img5}}" width="286px" height="286px" alt="4">
                                    </div>
                                    @endif

                                    @if($getDetail->img6 != null)
                                    <div class="step_img col p-3">
                                        <img src="image/img_detail/{{$getDetail->img6}}" width="286px" height="286px" alt="4">
                                    </div>
                                    @endif
                                </div>
                    </div>

					@endforeach
				@endif

                </div>
                <h3 class="text-center m-5" style="color: brown;"><b>Chúc bạn thành công!</b></h3>
            </div>
        </nav>

        <!-- MON AN DI KEM -->
        @foreach($productDetails as $productDetail) 
                @if(($productDetail->idCategory)) 
                    @if($products)
                    <nav class="form pt-5">
                        <div class="box">
                            <!-- <div class="title pl-5 pr-4"><h3> <b>{{isset($category->c_ten) ? $category->c_ten : ''}}</b> </h3></div> -->
                            <!-- <div class="box_empty mb-4"></div> -->
                            <div class="title pl-5 pr-4"><h3> <b>Món ăn gợi ý thêm: </b> </h3></div>
                            <div class="box_box row row-cols-4">
                            @foreach($products as $product)
                            <!-- {{print_r($product->idCategory)}} -->
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
        <!-- END MON AN DI KEM -->

    </main>
@endsection