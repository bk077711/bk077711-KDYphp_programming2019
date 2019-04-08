<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-04-04
 * Time: 오전 9:39
 */

# TODO: MySQL DB에서, num에 해당하는 레코드 삭제하기!
$connect = mysql_connect("localhost", "kdy", "1234");
mysql_select_db("kdy_db", $connect);

$sql_delete = "delete from tableboard_shop where num = '$_GET[num]'";
$result_insert = mysql_query($sql_delete, $connect);
if(!$result_insert)
# 참고 : 에러 메시지 출력 방법
echo "<script> alert('delete fail ...') </script>"

?>

<script>
    location.replace('../index.php');
</script>
