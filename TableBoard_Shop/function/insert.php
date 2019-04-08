<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-04-04
 * Time: 오전 9:39
 */

# TODO: MySQL DB에서, POST로 받아온 내용 입력하기!
$connect = mysql_connect("localhost", "kdy", "1234");
mysql_select_db("kdy_db", $connect);

$sql_insert = "insert into tableboard_shop (write_date, id, name, price, quantity)";
$sql_insert .= "values('$_POST[date]', $_POST[order_id], '$_POST[name]', $_POST[price], $_POST[quantity])";
$result_insert = mysql_query($sql_insert, $connect);
if (!$result_insert)
    # 참고 : 에러 메시지 출력 방법
    #echo "<script> alert('this is overlaped order_id...') </script>";

?>

<script>
    location.replace('../index.php');
</script>