<title>7890 반려동물 산책 추천 코스</title>
<div id="map" style="width:100%;height:100%;" align=center ></div>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=47b48f51836304f9f2c9094a3915c85a"></script>
<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div  
    mapOption = { 
        center: new kakao.maps.LatLng(37.5821, 127.0106), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };

var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다
 
// 마커를 표시할 위치와 title 객체 배열입니다 
var positions = [
    {
        title: '낙산공원', 
        latlng: new kakao.maps.LatLng(37.5805, 127.0076)
    },
    {
        title: '탐구관', 
        latlng: new kakao.maps.LatLng(37.5834, 127.0091)
    },
    {
        title: '상상관', 
        latlng: new kakao.maps.LatLng(37.5826, 127.0102)
    },
    {
        title: '창신역 우체국',
        latlng: new kakao.maps.LatLng(37.5787, 127.0155)
    }
];

// 마커 이미지의 이미지 주소입니다
var imageSrc = "https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/markerStar.png"; 
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기 입니다
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
        image : markerImage // 마커 이미지 
    });
}
</script>