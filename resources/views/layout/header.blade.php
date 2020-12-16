

<nav class="navbar navbar-expand-lg navbar-light hd">
   <a class="navbar-brand text-center nav-type" href="homepage"><div class="hi"></div></a>

   <!-- tim kiem -->

   <form class="form-inline my-2 my-lg-0 mr-4" action="{{route('find.product')}}">
         <!-- <input class="form-control mr-sm-2" name="keyword" style="width: 400px;" type="search" placeholder="Tìm kiếm món ăn" aria-label="Search"> -->
         <input id="custom-search-inp" type="search" name="keyword" placeholder="Tìm kiếm món ăn hoặc nguyên liệu" aria-label="Search">
         <!-- <button class="btn btn-outline-info my-2 my-sm-0"  style="color: white; " type="submit">Tìm kiếm</button> -->
   </form>

   

      @foreach($category as $cat)
      <div class="item-cates">
         <a class="item-cate" href="{{route('get.category.product',[$cat->c_tenkd,$cat->id])}}">
            <img src="image/{{$cat->c_img}}" style="height: 45px;" alt="ansang" >
            <span style="font-size: 15px;">{{$cat->c_ten}}</span>
         </a>
      </div>
      @endforeach
      


   
</nav>

