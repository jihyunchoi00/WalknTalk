# WalknTalk
![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/3f76b6fa-5300-4878-ace7-9a9785e90467)
<br>
<br>
<br>

## 팀 구성
- **팀명: 7890**

  + **최지현(팀장)** : 백엔드, 프론트엔드, 디자인, DB관리

  + **김나영** : 백엔드, 프론트엔드, 디자인, DB관리 

  + **김보현** : 백엔드, 프론트엔드, 디자인, DB관리 

  + **이기찬** : 백엔드, 프론트엔드, 디자인, DB관리<br>
<br>
<br>


## 1. 작품 소개
#### 작품명: WalknTalk
> ‘산책’을 뜻하는 ‘walk’와 ‘커뮤니티’를 뜻하는 ‘talk’를 결합한 이름<br>


#### 작품 개요
> 빅데이터를 활용한 반려견 산책로 및 기타 시설 추천 서비스<br>


#### 작품 내용
> 반려견 양육 가구의 수는 급격한 상승세를 보이고 있고, 그에 따라 반려견 양육 시 필수 요소인 산책과 관련된 편리한 서비스를 제공하고자 한다. 신규 사용자가 설문지를 통해 원하는 답변을 선택하면, 이를 바탕으로 성북구에 거주하고 있는 기존 사용자들이 입력한 정보들을 빅데이터를 활용한 분석을 통해 Map API를 활용한 맞춤형 반려견 산책 코스를 제공한다.<br>
<br>
<br>


## 2. 구조도
![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/e3c7347e-c33f-4bed-9e34-9dcfff1466b2)
<br>
<br>
<br>


## 3. 주요 적용기술

- 개발환경: Window
- 개발 언어: Python, JavaScript, MySQL 
- 개발 도구: PyCharm, VSCode
- 주요 기술: React<br>
<br>
<br>


## 4. 작품 상세설명

### LOGO
![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/4fe2ef26-8dae-4530-92a8-73d54ddb57a8)
> ##### 강아지의 발바닥 모양을 따옴
> ##### 로고를 누르면 'HOME' 페이지로 이동<br>
<br>
<br>



### 1) HOME
#### - Home 화면
> ##### + WALKNTALK가 크게 뜨도록 하고 작품에 맞게 디자인함
> ##### + 스크롤하여 밑에 'About WalknTalk', 'Bom's Memory', 'Contact WalknTalk' 등을 볼 수 있음<br>
<br>

#### - LOGIN / SIGNUP / LOGOUT
> ##### + Home 메뉴 아래로 들어가게 설정함<br>
<br>

#### - About WalknTalk
> ##### ![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/eeb4a266-d108-4128-b63f-0658a2563634)
> ##### + WalknTalk가 어떤 서비스를 제공하는 지에 대한 간략한 설명
> ##### + About WalknTalk 글자 옆 위치 이모티콘을 클릭하면 새 창으로 지도가 열리고, 
> ##### 사용자가 원하는 경로를 마우스 클릭을 통해 직접 표시하여 소요시간을 계산할 수 있음<br>
<br>

#### - Bom's Memory
> ##### + Bom: 팀원 중 한명의 강아지의 이름에서 따옴
> ##### + Bom이라는 강아지가 산책하며 만난 강아지 친구들의 사진모음<br>
<br>

#### - Contact WalknTalk
> ##### + 사이트 이용 시 문의사항이 생기면 관리자와 연락 가능
> ##### + 밑에는 클릭하면 새 창으로 열리는 지도를 첨부함<br>
<br>
<br>



### 2) LET'S FIND!
#### - 맞춤 경로 추천을 위한 설문 페이지
> ##### + 사용자가 5가지 질문에 대한 답변을 하나 고르면 맞춤 경로의 링크로 이동할 수 있도록 설계함
> ##### + [질문] 파트: 사용자가 5가지의 질문들을 읽으며 체크박스에 표시할 수 있도록 함
> ##### + [답변] 파트: [질문] 파트에서 답한 내용들을 바탕으로 최종적으로 1가지의 답변을 선택하도록 함<br>
<br>
<br>

### 3) ROUTE
#### - 맞춤 경로들 모음 페이지
> ##### + 설문페이지에서 사용자가 이동하게 되는 경로들을 모두 모아놓은 페이지
> ##### + 사용자가 본인의 맞춤 경로 이외의 다른 경로들도 확인해 볼 수 있음<br>
<br>
<br>

### 4) MAP
#### - 지도 1
> ##### + ROUTE 페이지에 있는 맞춤 경로들의 대략적인 위치를 1개의 Map에서 한꺼번에 확인할 수 있음
> ##### + 마우스 스크롤을 통해 확대/축소 가능<br>
<br>
<br>

### 5) PLACE
#### - 지도 2
> ##### + 사이트에서 제공하는 정보 이외의 사용자가 원하는 정보를 타 사이트로 이동하지 않고 검색 가능하도록 함 
> #####   (애견동반 카페, 애견용품점, 동물병원 등)
> ##### + 키워드 기본설정: 한성대입구역 애견용품점
> ##### + 중심좌표: 한성대학교<br>
<br>
<br>

### 6) SHOP
#### - Shop 페이지
> ##### + 반려동물 관련 상품들을 구매할 수 있음
> ##### + 정렬: 기본순, 인기순, 평점순, 최신순, 낮은가격순, 높은가격순<br>
<br>

#### - 상품 상세설명
> ##### + 상품에 대한 자세한 설명 확인 가능
> ##### + 상품평 작성 및 조회 가능<br>
<br>
<br>

### 7) COMMUNITY
#### - Community 페이지
> ##### + 사이트 이용자들이 정보 및 일상 등의 공유가 가능한 공간
> ##### + 정렬: 최신순, 추천순, 조회순, 업데이트
> ##### + 사진, 글 등의 작성이 가능하고 댓글로도 소통이 가능함<br>
<br>
<br>

## 5. 실행화면
### 1) HOME
- **HOME 페이지** <br>
![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/5c92235e-dc3b-4430-9c76-0ece01b60861)
<br>
<br>
<br>

- **LOGIN / SIGNUP / LOGOUT**
  + **LOGIN**
  ![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/13e43605-fb7b-4527-9787-8cb801bd9114) <br><br><br>
  + **SIGNUP** <br><br>
  ![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/84f029fe-8895-4a86-b922-dc4d7fc013eb) <br><br><br>
  + **LOGOUT** <br><br>
  ![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/7221b460-ebbb-4af3-8a3f-7bf26375cfb9) <br><br><br>
<br> 
<br>
<br>

- **About WalknTalk** <br>
![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/3fc1cb79-cf10-489b-be1c-45cc8a39227b)
<br>
<br>
<br>

- **Bom's Memory** <br>
![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/3e20b64d-3efe-4d1d-8b37-67b5be71f3c8)
<br>
<br>
<br>

- **Contact WalknTalk** <br>
![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/ad4d4ba9-ef84-4964-868a-cef5c59799ad)
<br>
<br>
<br>

### 2) LET'S FIND!
- **설문 페이지** <br>
![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/46fb54ca-7671-4b9d-8fe2-ed1a74588754) <br><br><br>
  + **[질문] 파트** <br><br>
  ![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/236cdbc4-df29-4edf-8207-553d1d9b1e2e) <br><br><br>
  + **[답변] 파트 - #성북공원/#낙산공원으로 구성됨 (아래에는 #성북공원 부분만 넣음)** <br><br>
  ![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/afddeef3-965c-431d-8ba2-0858147fa19a) 
<br>
<br>
<br>

### 3) ROUTE
- **Route 페이지** <br><br>
![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/eae00c84-f68d-4c5d-b92c-9118f70ded7a) <br><br><br>
- **Route 상세 페이지** <br><br>
![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/225a3b0b-3b30-42a9-9864-b6d997eb9a69) 
<br>
<br>
<br>

### 4) MAP
![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/6053f418-8b4f-4349-a06e-505b84f5b7e9)
<br>
<br>
<br>

### 5) PLACE
![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/95d871ab-947a-4cb9-869d-341f3dace69c)
<br>
<br>
<br>

### 6) SHOP
- **SHOP 페이지** <br>
![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/504382ce-6822-480e-953f-e522db858c96) <br><br><br>
- **SHOP 상세페이지**<br>
  + **상품** <br><br>
  ![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/1519721e-aa9e-443d-be68-7ddb5fed3c4b) <br><br><br>
  + **상품설명** <br><br>
  ![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/ef0e0b9a-2b12-40df-b881-2143a54a3e31) <br><br><br>
  + **상품평** <br><br>
  ![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/209d7bf9-aa8c-4094-9f69-6d7d04ba9b2d) <br><br><br>
<br>
<br>
<br>

### 7) COMMUNITY
- **Community 페이지** <br>
![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/65d94db5-fdc4-4c55-bf12-9ed98d4d8c2d) <br><br><br>
- **Community 상세페이지** <br>
  + **글** <br><br>
  ![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/30bb7b8a-d343-4d86-b23d-63aa37af67c7) <br><br><br>
  + **댓글** <br><br>
  ![image](https://github.com/jihyunchoi00/WalknTalk/assets/130173123/4dda5f91-bddb-4868-ae91-d913ed220451) <br><br><br>
<br>
<br>
<br>


## 6. 기대효과
> #### 반려견의 산책은 반려견의 건강 관리를 위해 필수 루틴이다. 이 서비스는 산책 코스를 고민해야 하는 수고를 덜어주고, 원하는 산책 시간이나 강도에 따라 맞춤 코스를 선 택할 수 있도록 하여 선택의 폭을 넓혀준다. 산책 중간에 반려견의 미용을 위한 미용샵이나 사료 및 간식 구입, 반려견 동반 입장 가능 카페 등의 정보를 제공 받고 싶은 경우, 일일이 찾아볼 필요 없이 Map API를 통한 서비스를 제공하여 간편하게 한 번에 확인하고 이용할 수 있도록 한다.







