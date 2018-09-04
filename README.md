## Beacon_dataCollect
>@ I-Beacon 을 사용한 실내위치 데이터를 서버로 보내는 프로그램이다.<br>
비콘과의 연결을 주기적으로 Check 한다음, 가장 가까이 있는 비콘의 id를 통해 사용자의 실내 위치를 알수있다<br>
여러사용자의 위치 데이터가 중복되지 않도록 Android Device ID 를 서버에 같이 전송한다.<br>
Device ID가 노출되면 부적절한 상황을 야기할 수 있기 때문에 이를 방지하기 위해 Noise 를 추가하는 함수를 이용한다. ( noBid, sencondnoise)<br>
Estimote Beacon을 사용했다.


## Bus_4me
>@ 서울 버스api를 이용하여 등,하교때 주로 사용하는 정류장의 버스정보들을 가져와 각각의 탭에 표현하는 어플이다.<br>
xml형태로 나타내는 버스 api의 정보를 크롤링하여 배열에 정리한뒤 ListView로 출력한다.<br>
총 4개의 정류장을 표현했다.<br><br>
![kakaotalk_20180904_184214730](https://user-images.githubusercontent.com/30405844/45024791-c4d83a00-b074-11e8-8375-48aff8d83a8b.jpg)
우측 아래 info 버튼을 누르면 각 탭이 어느 정류장을 나타내는지 알수있다.
문제점: 서울 버스api 에서 제공하는 현재 탑승인원을 나타내고 싶었지만, 이를 나타내는 변수인 reride_num1이 왜인지 모르게 0 or 3 or 4만 표현 하고 있다.


## NaverMAP
1. NaverMapBasic
> Fragment를 사용해 네이버 지도를 그리고, GPS를 통해 자신의 위치를 표시한다.
![kakaotalk_20180904_184213914](https://user-images.githubusercontent.com/30405844/45024792-c4d83a00-b074-11e8-8641-c7783beeb747.jpg)
2. NaverMap+
> php 서버에 접근해서 가져온 위치들을 네이버 지도 위에 OverlayItem으로 표시한다.

## php_sql
>@ seat.php 는 mysql에 저장되어있는 db의 정보를 읽어와 html상에 뛰운다.<br>
![image](https://user-images.githubusercontent.com/30405844/45025017-4e880780-b075-11e8-80c8-fae654e278f0.png)
php_connect 는 db의 정보들을 JSON 형식으로 출력하여 다른 사용자가 서버상의 정보를 필요로 할때에 제공해줄수 있다.

