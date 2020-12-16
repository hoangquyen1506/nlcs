<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Yummy</title>
   <link rel="stylesheet" href="./css/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="./css/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.min.css">

   <script src="./css/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="./css/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js"></script>

</head>
<body >
<div>
      <!-- slider -->
      <div class=" w3-display-container">
         <img class="mySlides" src="/image/banner1.png" style="width:100%; height:300px;">
         <img class="mySlides" src="/image/banner8.jpg" style="width:100%; height:300px;">
         <img class="mySlides" src="/image/banner2.jpg" style="width:100%; height:300px;">

         <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
         <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
      </div>

      <script>
      var slideIndex = 1;
      showDivs(slideIndex);

      function plusDivs(n) {
      showDivs(slideIndex += n);
      }

      function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";  
      }
      x[slideIndex-1].style.display = "block";  
      }
      </script>
   </div>

   

  
   
   

</body>
</html>
