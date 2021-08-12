const key_val = document.location.href.split('=')[1];
const decord_val = decodeURI(key_val); //key_val 에서 외계어로 나오는걸 잡아줌
const contentsBox = document.querySelector("#contents_box");
console.log(decord_val);

$.ajax({
  url: `/lbcamp/php/key.php?key=${decord_val}`,
  Type: 'GET',
  dataType: 'json',

  success: function (result) {
    const item = result.body.items.item;
    let currentItems = "";
    console.log(Array.isArray(item));//item을 찍으면 10개의 배열이나온다, Array.isArray를 사용해주면 array인지아닌지(1개인지 여러개인지) 판별하여 true(여러개),false(1개)를 보여줌

    function itemDOM() {
      
    }

    if (Array.isArray(item)) {
      item.forEach(function (data) {
        //console.log(data);//반복문으로 10개의 배열을 하나씩 나눠서 확인할 수 있다. 값이 1개인 데이터는 오류가 남(반복되지 않으니까!)
        currentItems = `
          <div class="carousel_item">
            <div class="item_card">
            <a href="/lbcamp/detail_position.php?lon=${data.mapX}&lat=${data.mapY}">
              <div class="sl_img">
                <img src="${data.firstImageUrl}" alt="" onerror="this.src='/lbcamp/img/no_image.png'">
              </div>
            </a>
              <div class="sl_txt">
                <h2>${data.facltNm}</h2>
                <p>${data.addr1}</p>
              </div>
              <div class="sl_icons">
                <img src="img/ico_mart.png" alt="">
                <em>${data.sbrsCl}</em>
              </div>
            </div>
          </div>
        `;
        contentsBox.innerHTML += currentItems; //+=을 안하면 마지막 값만 들어옴
        //google Map Logics here
        // script.js
        var map;
        function initMap() {
          var centerTarget = { lat: Number(item[0].mapY), lng: Number(item[0].mapX) };
          map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: centerTarget //지도를 가져왔을때 중앙을 어디에 맞출것인지 설정값

          });
          //console.log(item); //위치 개수를 담고 있는 것은 item
          for (let i = 0; i < item.length; i++) {
            new google.maps.Marker({
              position: new google.maps.LatLng(Number(item[i].mapY), Number(item[i].mapX)),
              map: map,
              icon: '/lbcamp/img/marker.png'
            });
          }
        }
        initMap();
      });
    } else {
      currentItems = `
          <div class="carousel_item">
            <div class="item_card">
            <a href="/lbcamp/detail_position.php?lon=${item.mapX}&lat=${item.mapY}">
              <div class="sl_img">
                <img src="${item.firstImageUrl}" alt="" onerror="this.src='/lbcamp/img/no_image.png'">
              </div>
            </a>
              <div class="sl_txt">
                <h2>${item.facltNm}</h2>
                <p>${item.addr1}</p>
              </div>
              <div class="sl_icons">
                <img src="img/ico_mart.png" alt="">
                <em>${item.sbrsCl}</em>
              </div>
            </div>
          </div>
        `;
      contentsBox.innerHTML += currentItems;
      //console.log(item); //1개의 값도 보여짐

      function initMap() {
        var centerTarget = { lat: Number(item.mapY), lng: Number(item.mapX) };
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: centerTarget //지도를 가져왔을때 중앙을 어디에 맞출것인지 설정값
        });

        new google.maps.Marker({
          position: centerTarget,
          map: map,
          icon: '/lbcamp/img/marker.png'
        });
      }
      initMap();

    }

    

    
    //google Map Logics here
    // script.js
    var map;

    // function initMap() {
    //   var centerTarget = { lat: numMapx, lng: numMapy };
    //   map = new google.maps.Map(document.getElementById('map'), {
    //     zoom: 12,
    //     center: centerTarget //지도를 가져왔을때 중앙을 어디에 맞출것인지 설정값
    //   });
    //   //console.log(item); //위치 개수를 담고 있는 것은 item

    //   new google.maps.Marker({
    //     position: centerTarget,
    //     map: map,
    //     icon: '/lbcamp/img/marker.png'
    //   });
    // }
    // initMap();
  }
});

//carousel slide
$(document).ajaxComplete(function () { //ajax 데이터가 DOM으로 모두 로드된 이후 실행되는 함수 , 비동기로 컨트롤하는 것
  let slider = $('.owl-carousel');
  slider.each(function () {
    $(this).owlCarousel({
      loop: false,
      margin: 5,
      autoHeight: false,
      responsive: {
        0: {
          items: 1,
          stagePadding: 20,
          margin: 15,
        }
      }
    });
  });
});