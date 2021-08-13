<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>Go Camping</title>
  <!-- Favicon Link -->
  <link rel="shortcut icon" href="/lbcamp/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/lbcamp/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/lbcamp/img/favicon.ico">

  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Owl Carousel Style Link -->
  <link rel="stylesheet" href="/lbcamp/css/owl.carousel.css">
  <!-- Main Style Sheet Link -->
  <link rel="stylesheet" href="/lbcamp/css/style.css">
  <!-- Animation Style Sheet Link -->
  <link rel="stylesheet" href="/lbcamp/css/animation.css">

  
</head>
<body>
  
  <div class="wrap">
    <!-- Heaader -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/lbcamp/include/header.php";?>

    <!-- Map box -->
    <div class="map_img" id="map">
      <!-- <img src="img/gocamp_map.jpg" alt=""> -->
    </div>
    <!-- Search and Select Bar -->
    <div class="contents_bar search_position">
      <div class="center">
        
        <div class="drop_bar">
          <div class="dropdown">
            <div class="select">
              <span id="query_val">내 주변 캠핑장 검색</span>
              <i class="fa fa-chevron-down"></i>
            </div>
            <ul class="dropdown_menu">
               <li><a href="/lbcamp/search_position.php?radi=10000">반경 10KM 검색</a></li>
              <li><a href="/lbcamp/search_position.php?radi=20000">반경 20KM 검색</a></li>
              <li><a href="/lbcamp/search_position.php?radi=30000">반경 30KM 검색</a></li>
              <li><a href="/lbcamp/search_position.php?radi=40000">반경 40KM 검색</a></li>
              <li><a href="/lbcamp/search_position.php?radi=50000">반경 50KM 검색</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Contents_bar -->
    <div class="bt_box">
      <span><i class="fa fa-chevron-up"></i></span>
      <div class="bt_sl carousel_section">
        <div class="carousel_container">
          <div class="owl-carousel owl-theme" id="contents_box">

            <!-- <div class="carousel_item">
              <div class="item_card">
                <div class="sl_img">
                  <img src="img/ex.jpg" alt="">
                </div>
                <div class="sl_txt">
                  <h2>청계산 캠핑장</h2>
                  <p>청계산에서 멀지않게 있는 캠핑장입니다 어서...</p>
                </div>
                <div class="sl_icons">
                  <img src="img/ico_mart.png" alt="">
                  <em>운동시설, 샤워장</em>
                </div>
              </div>
            </div> -->
            <!-- End of carousel_item -- Looping item -->

            </div>
          <!-- End of owl-carousel -- wrap all slide items -->
        </div>
        <!-- End of Crousel_container -->
      </div>
    </div>
  </div>

  <!-- Jquery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- 구글맵 띄우는 script -->
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwYsGcvQsEIdtMCUJdOAa7l4lzTt4qg-4&region=kr"></script>

  <script src="/lbcamp/js/main.js"></script>
  <script src="/lbcamp/js/owl.carousel.js"></script>
  <script src="/lbcamp/js/current_position.js"></script>
</body>
</html>