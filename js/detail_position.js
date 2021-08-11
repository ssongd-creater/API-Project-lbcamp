const mapxParam = new URLSearchParams(location.search).get('lon');
const mapyParam = new URLSearchParams(location.search).get('lat');
console.log(mapxParam);
console.log(mapyParam);
//php에서 GET_[]; 해줬던 거랑 똑같음



$.ajax({
  url: `/lbcamp/php/location.php?lat=${lat}&lon=${lon}&radi=${radiVal}`,
  Type: 'GET',
  dataType: 'json',

  success: function (result) {
    //console.log(result);
    const item = result.body.items.item;
    console.log(item);
    let currentItems = "";

    item.forEach(function (data) {
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
      contentsBox.innerHTML += currentItems;
    });


    //google Map Logics here
    // script.js
    var map;

    function initMap() {
      var centerTarget = { lat: Number(lat), lng: Number(lon) };
      map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
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

  }
});

