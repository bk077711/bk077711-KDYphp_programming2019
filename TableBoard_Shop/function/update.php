<?php

# TODO: MySQL DB에서, num에 해당하는 레코드를 POST로 받아온 내용으로 수정하기!
$connect = mysql_connect("localhost", "kdy", "1234");
mysql_select_db("kdy_db", $connect);
$sql_update = "update tableboard_shop set write_date = '$_POST[date]', id = $_POST[order_id] , name = '$_POST[name]', price = $_POST[price], quantity = $_POST[quantity] where num = '$_GET[num]'" ;

$result_update = mysql_query($sql_update, $connect);
if(!$result_update)
    # 참고 : 에러 메시지 출력 방법
    echo "<script> alert('update fail...') </script>";

?>

<script>
    location.replace('../index.php');
</script>