<?php

$lat = $_GET['lat'];
$lon = $_GET['lon'];

$ch = curl_init();
$url = 'http://api.visitkorea.or.kr/openapi/service/rest/GoCamping/locationBasedList'; /*URL*/
$queryParams = '?' . urlencode('ServiceKey') . '=sPk%2Fz7zlagpPxSV7%2BMhaIjaefFLVGiPazhqJITvIyOr8tlDH2Htko0dtX8FMPUcHn%2BD26mkzw1ph873HxSaxLA%3D%3D'; /*Service Key*/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /*페이지넘버 메뉴얼을 보고 알 수 있음*/
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('10'); /*최대 보여주는 숫자*/
$queryParams .= '&' . urlencode('MobileOS') . '=' . urlencode('ETC'); /**/
$queryParams .= '&' . urlencode('MobileApp') . '=' . urlencode('AppTest'); /**/
$queryParams .= '&' . urlencode('mapX') . '=' . urlencode($lon); /*위도*/
$queryParams .= '&' . urlencode('mapY') . '=' . urlencode($lat); /*경도*/
$queryParams .= '&' . urlencode('radius') . '=' . urlencode(10); /*반경 2km*/

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

$xml = simplexml_load_string($response);//파라미터 값도 결과값에 맞춰 수정해준다.
$json = json_encode($xml, JSON_UNESCAPED_UNICODE); // convert the XML string to JSON
//JSON_UNESCAPED_UNICODE 를 쓰면 안나오던 한글 데이터가 json값으로 출력된다.
echo($json);//아래처럼 검색해온 값을 붙혀넣는다


//xml to json php 을 google에 검색하여 xml 파일을 변환시켜줘야함
?>