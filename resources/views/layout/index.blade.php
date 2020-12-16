<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Yummy</title>
	<base href="{{asset('')}}">
   <!-- <link rel="icon" href="https://img.icons8.com/dusk/64/000000/chef-hat.png"/> -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"> </script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

   <link rel="stylesheet" href="{{asset('css/mainy.css')}}">
   <link rel="stylesheet" href="{{asset('css/detaile.css')}}">

   <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="./css/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="./css/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.min.css">

   <script src="./css/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="./css/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js"></script>
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body >
   <button onclick="topFunction()" id="myBtn" title="Go to top"><img width="30px" src="https://www.iconfinder.com/data/icons/navigation-set-arrows-part-one/32/ChevronUpCircle-512.png "/></button>
   <div class="contact">
      <span class="phone"><i class="fas fa-phone"></i> Liên hệ: </span > 
      <span class="numberphone">0234 456 457</span>
      <a href="admin/login" class="login">Đăng nhập</a>
   </div>


   

   
   
   <!-- header -->
	@include('layout.header')

   <!-- content -->
   @yield('content')

	<!-- footer -->
	@include('layout.footer')


   @yield('script')

   <script src="./scriptt.js"></script>
   <script>
    AOS.init();
  </script>
</body>
</html>
