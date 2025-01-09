<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  <?php require('inc/links.php'); ?>
  <title>GIỚI THIỆU</title>
  <style>
    .box{
      border-top-color: var(--teal) !important;
    }
  </style>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">GIỚI THIỆU</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
    Khách sạn Trà Vinh cam kết mang đến cho khách hàng những trải nghiệm<br>
    tuyệt vời nhất trong một không gian sang trọng và đẳng cấp.
    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">Khách Sạn Vinh Hotel</h3>
        <p>
        Khách sạn Trà Vinh Hotel là một trong những khách sạn hàng đầu tại Trà Vinh,
         được thiết kế theo phong cách hiện đại và đầy đủ tiện nghi, với hệ thống 
         phòng nghỉ sang trọng, nhà hàng, quầy bar, trung tâm thể dục và spa. Khách sạn
          có hơn 50 tầng với hơn 500 phòng nghỉ rộng rãi, được trang bị đầy đủ tiện nghi 
          hiện đại, đảm bảo sự thoải mái và tiện nghi cho khách hàng
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
        <img src="https://2trip.vn/wp-content/uploads/2021/04/khach-san-5-sao-tai-vung-tau-1.jpg" class="w-100">
      </div>
    </div>
  </div>
  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <?php 
          $about_r = selectAll('team_details');
          $path=ABOUT_IMG_PATH;
          while($row = mysqli_fetch_assoc($about_r)){
            echo<<<data
              <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="$path$row[picture]" class="w-100">
                <h5 class="mt-2">$row[name]</h5>
              </div>
            data;
          }
        
        ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>


  <?php require('inc/footer.php'); ?>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>


</body>
</html>