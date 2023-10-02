# momentum

[Chrome Extension Momentum](https://chrome.google.com/webstore/detail/momentum/laookkfknpbbblfpciffpaejjkokdgca)의 카피 프로젝트로, 실제 서비스에서 기능 구성만 따와 재구성했습니다.

<br>

### skills
HTTP, CSS, Javascript, MySQL, PHP, XAMPP

<br>

### feature

백엔드 개발을 담당했으며 구글 검색 연동, 날짜와 시간, 할 일 등록, 할 일 삭제 기능을 구현했습니다.

- 회원가입, 로그인을 거쳐 메인 화면으로 이동합니다. 메인 화면에서는 해당 회원이 등록한 모든 할 일을 조회해서 리스트 형태로 보여줍니다.
- 메인 화면의 구글 검색창에 검색어를 입력 후 엔터를 누르면 구글 검색창으로 연결됩니다.
- 메인 화면의 우측 상단에서 오늘의 날짜와 현재 시간을 볼 수 있습니다.
- 메인 화면의 입력란에 할 일을 입력 후 엔터(Enter)를 누르면 할 일이 등록되고, 페이지의 하단에 할 일이 생성됩니다.
- 할 일을 완료했거나 지우고 싶을 경우 페이지의 하단에 생성된 할 일을 클릭하면 할 일을 한 개씩 삭제할 수 있습니다.

<br>

### how to run
배포가 되어 있지 않아 로컬로 클론 후 환경을 직접 세팅해야 합니다.

1. XAMPP를 설치 후 실행합니다. Apache와 MySQL이 반드시 설치에 들어가야 합니다.
2. (윈도우 기준) `C:\xampp\htdocs` 경로에 프로젝트 폴더를 클론합니다.
3. XAMPP Control Panel에서 Apache와 MySQL을 start합니다.
4. `http://localhost/phpmyadmin/` 을 크롬 브라우저에 입력해 phpmyadmin에 접속합니다.
5. `momentum_db` 라는 이름으로 데이터베이스를 생성합니다.
![chrome-capture-2023-9-2 (5)](https://github.com/yeonleaf/momentum/assets/91470133/571ea6c7-df15-4b3a-9526-e8eed4196dc3)
6. `프로젝트 폴더/db`로 들어가 member_table.sql, todo_table.sql에 있는 create sql문을 복사해서 붙여넣은 후 실행 버튼을 클릭합니다.
![chrome-capture-2023-9-2 (6)](https://github.com/yeonleaf/momentum/assets/91470133/a06da300-089b-4551-ac8d-41213a0c12fd)
7. `localhost/프로젝트 폴더 이름` 을 크롬 브라우저에 입력하면 로컬에서 프로젝트를 실행할 수 있습니다.


<br>

### screenshots
![chrome-capture-2023-9-2](https://github.com/yeonleaf/momentum/assets/91470133/fadf46db-47d4-48d0-af48-90aac06833af)
![chrome-capture-2023-9-2 (1)](https://github.com/yeonleaf/momentum/assets/91470133/5c32ec08-12af-485b-85fb-21bd748ae45f)
![chrome-capture-2023-9-2 (2)](https://github.com/yeonleaf/momentum/assets/91470133/bc1a3314-2dfc-42d8-be4c-93e21111508c)
![chrome-capture-2023-9-2 (3)](https://github.com/yeonleaf/momentum/assets/91470133/ee04813f-1fe2-40bf-a3d4-b306a43f7621)
![chrome-capture-2023-9-2 (4)](https://github.com/yeonleaf/momentum/assets/91470133/9a82c67d-384b-4718-bd36-efe0df8b993e)
