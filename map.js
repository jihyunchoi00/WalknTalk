/* global kakao */
import React, { useEffect } from 'react';

var { kakao } = window;

function Kakao() {
  useEffect(() => {
    var container = document.getElementById('map');
    var options = {
      center: new kakao.maps.LatLng(37.5821, 127.0106), // ������ �߽���ǥ
      level: 3
    };
    var map = new kakao.maps.Map(container, options); // ���� ����
  }, [])

 // return (
 //   <div id="map" style={{ width: '500px', height: '500px' }}></div>
 // )
}