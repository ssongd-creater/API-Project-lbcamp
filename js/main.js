$(function () {
  
  //header menu button active
  $(".btn").click(function () {
    $(this).toggleClass('active');
    $(this).toggleClass('not-active');

    if ($(this).hasClass('active')) {
      $(".menu").slideDown(200);
    } else {
      $(".menu").slideUp(200);
    }
  });

  //search select button  active
  $(".dropdown").click(function () {
    $(this).toggleClass("on");
    if ($(this).hasClass("on")) {
      $(this).find(".dropdown_menu").slideDown(300);
      $(this).find('i').attr("class", "fa fa-chevron-up");
    } else {
      $(this).find(".dropdown_menu").slideUp(300);
      $(this).find('i').attr("class", "fa fa-chevron-down");
    }
  });

  // search position buttom box hide and show
  const h_bt_sl = $(".bt_box span").outerHeight();//padding을 포함한 높이
  const h_bt_box = $(".bt_box").outerHeight();
  $(".bt_box").css("bottom", -(h_bt_box - h_bt_sl));

  $(".bt_box span").click(function () {
    $(this).toggleClass('on');
    if ($(this).hasClass('on')) {
      $(".bt_box i").attr("class", "fa fa-chevron-down");
      $(".bt_box").stop().animate({'bottom':0},300); //반복적으로 누르는 경우가 있는 경우 stop함수를 써주는게 좋다
    } else {
      $(".bt_box i").attr("class", "fa fa-chevron-up");
      $(".bt_box").stop().animate({ 'bottom': -(h_bt_box - h_bt_sl)}, 300);
    }
  });

});