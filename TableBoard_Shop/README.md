# TableBoard_Shop
게시판-Shop 의 TODO 완성하기!

## 기존 파일
```
 .
├── css - board_form.php와 index.php 에서 사용하는 stylesheet
│   └── ...
├── fonts - 폰트
│   └── ...
├── images - 아이콘 이미지
│   └── ...
├── vender - 외부 라이브러리
│   └── ...
├── js - board_form.php와 index.php 에서 사용하는 javascript
│   └── ...
├── function
│   └── insert.php - 게시글 작성 기능 구현
│   └── update.php - 게시글 수정 기능 구현
│   └── delete.php - 게시글 삭제 기능 구현
├── board_form.php - 게시글 작성/수정 시 사용하는 form이 포함된 php 파일
├── index.php - 게시글 조회 기능 구현
```

## MySQL 테이블 생성!

[여기에 테이블 생성 시, 사용한 Query 를 작성하세요.]
Note: 
- table 이름은 tableboard_shop 으로 생성
- 기본키는 num 으로, 그 외의 속성은 board_form.php 의 input 태그 name 에 표시된 속성 이름으로 생성
- 각 속성의 type 은 자유롭게 설정 (단, 입력되는 값의 타입과 일치해야 함)
    - ex) price -> int
    - ex) name -> char or varchar
    
## index.php 수정
[여기에 index.php 를 어떻게 수정했는지, 설명을 작성하세요.]
$connect를 이용해서 tableboard 테이블에 연동하고
$sql = "select * from tableboard"를 해서 
tableboard에 있는 모든 레코드를 검색하고 그 결과를 $result에 저장했습니다.
그 후 while ( $row = mysql_fetch_array($result))를 해서
레코드가 존재하면 계속해서 \<tr>와 \<td>를 사용해서 행을 만들었습니다.
그리고 존재하는 행을 클릭할 경우 order id 정보를 board_form.php로
넘겨서 해당 폼이 동작할 수 있도록 했습니다.

## board_form.php 수정
[여기에 board_form.php 를 어떻게 수정했는지, 설명을 작성하세요.]
우선 if(isset($_GET[num]))값이 참일 경우
$sql 와 $connect를 사용해서 레코드를 불러옵니다.
그리고 불러온 레코드를 $find = mysql_fetch_array()를 사용해서
배열 형태로 $find에 저장해둡니다. 그리고 사용자가 행을 눌러서
update 모드로 들어왔을 경우 이전 값들을 표기해주기 위해서
$find에 저장된 레코드 정보들을 input에서
value="<? echo "$find[write_date]" 식으로 수정해서
이전 값들을 수정 가능하게 표기해줍니다.

## function
### insert.php 수정
[여기에 insert.php 를 어떻게 수정했는지, 설명을 작성하세요.]
insert에서는 보드폼에서 $_POST로 넘어온 데이터들을
$sql을 이용해서 insert into 문을 사용해서 DB에 작성합니다.
여기에서 if(!$result)를 사용해서 DB에 작성되지 않았을 경우에는
오더 아이디가 겹친다는 에러 문구를 띄웁니다.
그리고 DB에 작성 여부와 상관 없이 index.php로 돌아갑니다.

### update.php 수정
[여기에 update.php 를 어떻게 수정했는지, 설명을 작성하세요.]

### delete.php 수정
[여기에 delete.php 를 어떻게 수정했는지, 설명을 작성하세요.]
