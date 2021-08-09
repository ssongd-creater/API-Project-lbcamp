navigator.geolocation.getCurrentPosition((position) => {

  const lat = position.coords.latitude;
  const lon = position.coords.longitude;
  const radiVal = 20000;
  //javascript 현재위치 검색해서 mdn에서 가져옴
  //console.log(lat, lon);

  $.ajax({
    url: `/lbcamp/php/location.php?lat=${lat}&lon=${lon}&radi=${radiVal}`,
    Type: 'GET',
    dataType: 'json',
     
    success: function (result) {
      //console.log(result);
      const item = result.body.items.item;
      console.log(item);

    }
  });
});

