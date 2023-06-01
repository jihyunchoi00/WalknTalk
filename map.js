/* global kakao */
import React, { useEffect } from 'react';

var { kakao } = window;

function Kakao() {
  useEffect(() => {
    var container = document.getElementById('map');
    var options = {
      center: new kakao.maps.LatLng(37.5821, 127.0106), // 지도의 중심좌표
      level: 3
    };
    var map = new kakao.maps.Map(container, options); // 지도 생성
  }, [])

 // return (
 //   <div id="map" style={{ width: '500px', height: '500px' }}></div>
 // )
}