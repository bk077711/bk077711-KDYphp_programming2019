# boardz
게시판 검색 기능 완성하기

## 기존 파일
```
 .
├── css
│   └── style.css
├── src
│   └── boardz.css
├── board.html
```

## 추가 및 수정된 파일
```
 .
├── css
│   └── style.css
├── src
│   └── boardz.css
├── board.php (수정)
[만약 추가한 파일이 있으면, 내용 추가! 없으면 이 문구 삭제!]
```

## board.php (수정)
example form의 form 태그에서 action="board.php"변경 및 method='post' 추가하여
검색 아이콘을 누를 경우 board.php로 $_POST[search]값을 가지고 돌아오게 변경

div 클래스 "boardz centered-block beautiful"에서
if문을 사용하여 (검색어 없음 + 초기화면)과 (검색어 있음)으로 구분하고
검색어가 없을 경우는 초기화면을,
검색어가 있을 경우에는
$connect와 $sql을 사용해서 DB에 접속한 후
'select * from ~~ like 검색어' 를 사용하여 검색어와 연관된 타이틀의 정보만 가져오고
그 정보를 $result에 저장하고 검색된 레코드들을 while문과 mysql_fetch_array를 사용해서
 $row에 배열 형태로 저장하였습니다. 그 후 저장된 url, title, contents들을
 sql 양식에 맞게 출력했습니다.
 이렇게 할 경우 주어진 과제에 일치하는 결과가 나옵니다.