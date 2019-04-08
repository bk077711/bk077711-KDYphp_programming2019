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
 먼저 주어진 양식을 만들기 위해서
\<ui>에서 처음 만나는 \<li>마다 \<h1>을 통해서 상단의 회색의 제목을 입력했습니다.
그리고 수정을 아예 안했을때 나타나는 마지막 해골 그림은 ppt에 없어서 삭제했습니다.

 그리고 $connect와 $sql을 사용해서 DB에 접속한 후
'select * from ~~ like 검색어' 를 사용하여 검색어와 연관된 타이틀의 정보만 가져오고
그 정보를 $result에 저장하고 검색된 레코드들을 while문과 mysql_fetch_array를 사용해서
 $row에 배열 형태로 저장하였습니다. 그 후 저장된 url, title, contents들을
 sql 양식에 맞게 출력했습니다.