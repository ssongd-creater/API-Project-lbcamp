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

  <!-- Main Style Sheet Link -->
  <link rel="stylesheet" href="/lbcamp/css/style.css">
  <!-- Animation Style Sheet Link -->
  <link rel="stylesheet" href="/lbcamp/css/animation.css">

  
</head>
<body>
  
  <div class="wrap">
    <!-- Main Background Image -->
    <img src="/lbcamp/img/gocamp_bg.png" alt="" class="bg">
    <!-- Heaader -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/lbcamp/include/header.php";?>

    <!-- Search and Select Bar -->
    <div class="contents_bar">
      <div class="center">
        <div class="search_bar">
          <input type="text" placeholder="검색할 키워드를 입력해 주세요">
          <button><img src="/lbcamp/img/gocamp_icon.png" alt=""></button>
        </div>
        <div class="drop_bar">
          <div class="dropdown">
            <div class="select">
              <span>내 주변 캠핑장 검색</span>
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
  </div>
  <?php
    $cookie_name = "start";
    $cookie_value = "started";

    setcookie($cookie_name,$cookie_value,time() + 600,"/") //(쿠키네임, 쿠키값,시간(타임스탬프),경로) 30초동안은 start라는 쿠키가 실행됨 600은 10분
  ?>
  <div id="landing" class="<?php if(!isset($_COOKIE[$cookie_name])){echo "start";}else{echo "started";} ?>">
    <div class="landing_logo">
      <img src="/lbcamp/img/gocamp_logo.png" alt="">
    </div>
    <h2>Go camp Be Free</h2>
  </div>
  <!-- Jquery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/lbcamp/js/main.js"></script>
  <!-- <script src="/lbcamp/js/current_position.js"></script> -->
  <script>
    const key_btn = document.querySelector('.search_bar button');
    key_btn.addEventListener('click',function(){
      const key_val = document.querySelector('.search_bar input').value;
      location.href=`/lbcamp/key_position.php?key_val=${key_val}`;
    });


  
    //쿠키값을 생성하는 기능 - safari에서는 실행이 되지 않음
    // function setCookie(value,min){
    //   const exdate = new Date(); //만료가됐을 때 제어하려함, 현재 날짜 객체 호출하는 함수
    //   exdate.setMinutes(exdate.getMinutes() + 3) //날짜 정보 중 몇분인지 정보만 호출 +3 은 3분동안 지속이 됨
    //   const cookie_value = escape(value) + ((min == null) ? '':'; expires=' + exdate.toUTCString()); //a?b:c a가 ture면 b가 실행되고 false면 c가 실행됨 = 삼항연산자 / expires 만료시간 , toUTCString 지역
    //   document.cookie = cookie_value;
    // }

    // const isStart = document.cookie;
    // window.onload = function(){
    //   if(isStart == ""){
        
    //   }else{

    //   }
    //   setCookie('start',1);
    // } 
    
  </script>
</body>
</html>