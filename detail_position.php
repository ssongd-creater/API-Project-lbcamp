<!DOCTYPE html>
<html lang="en" id="detail_html">
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css">

  <!-- Main Style Sheet Link -->
  <link rel="stylesheet" href="/lbcamp/css/style.css">
  <!-- Animation Style Sheet Link -->
  <link rel="stylesheet" href="/lbcamp/css/animation.css">
</head>
<body id="detail_page">
  
  <div class="wrap">
  
    <!-- Heaader -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/lbcamp/include/header.php";?>

    <div class="details">
      <div class="detail_bg">
        <img src="img/ex.jpg" alt="">
        <span class="radi_bar"></span>
      </div>
      <div class="detail_contents">
        <div class="detail_wrap">
          <h2 class="detail_tit">캠핑장 이름</h2>
          <span class="line"></span>
          <div class="detail_info">
            <p>
              <span class="info_ico"><i class="fa fa-map-marker"></i></span>
              <span class="info_txt">서울시 강남구 강남대로 441 5층 506호 앞에서 두번째줄</span>
            </p>
            <p>
              <span class="info_ico"><i class="fa fa-dog"></i></span>
              <span class="info_txt">서울시 강남구 강남대로 441 5층 506호 앞에서 두번째줄</span>
            </p>
            <p>
              <span class="info_ico"><i class="fa fa-cutlery"></i></span>
              <span class="info_txt">서울시 강남구 강남대로 441 5층 506호 앞에서 두번째줄</span>
            </p>
            <p>
              <span class="info_ico"><i class="fa fa-clock"></i></span>
              <span class="info_txt">서울시 강남구 강남대로 441 5층 506호 앞에서 두번째줄</span>
            </p>
          </div>
   
          <span class="line"></span>
          <h2 class="detail_tit">캠핑장 소개</h2>
          <span class="line"></span>
          <div class="info_desc">법률이 헌법에 위반되는 여부가 재판의 전제가 된 경우에는 법원은 헌법재판소에 제청하여 그 심판에 의하여 재판한다.법률안에 이의가 있을 때에는 대통령은 제1항의 기간내에 이의서를 붙여 국회로 환부하고, 그 재의를 요구할 수 있다. 국회의 폐회중에도 또한 같다.

          이 헌법공포 당시의 국회의원의 임기는 제1항에 의한 국회의 최초의 집회일 전일까지로 한다. 공공필요에 의한 재산권의 수용·사용 또는 제한 및 그에 대한 보상은 법률로써 하되, 정당한 보상을 지급하여야 한다.</div>
          <span class="line"></span>
          <h2 class="detail_tit">위치 지도</h2>
          <div class="detail_map"></div>
        </div>
      </div>
    </div>
    <!-- End of details -->
  </div>

  <!-- Jquery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/lbcamp/js/main.js"></script>
  <script src="/lbcamp/js/detail_position.js"></script>
  <script>
    window.addEventListener('scroll',function(){
      const header =  document.querySelector('header');
      if(window.pageYOffset > 0){
        header.classList.add('sticky');
      }else{
        header.classList.remove('sticky');
      }
    });
  </script>
</body>
</html>