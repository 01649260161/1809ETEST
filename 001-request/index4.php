<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form name="convertdungluong" action="" method="post">
    <P>
        <label>Nhập ngày sinh :</label>
        <input type="text" name="day" value="">
    </P>
    <P>
        <label>Nhập tháng sinh :</label>
        <input type="text" name="month" value="">
    </P>
    <P>
        <label>Nhập năm sinh :</label>
        <input type="text" name="year" value="">
    </P>
    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>
<p>Tính xem còn bao nhiêu ngày nữa là đến sinh nhật của người ấy</p>
<?php
/**
 * Chuyển từ gigabyte
 * 1 - thành megabyte
 * 2 - thành byte
 * 3 - thành bit
 */
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

$year = $_REQUEST['year'];
$month =$_REQUEST['month'];
$day =$_REQUEST['day'];
$date = (int)(strtotime(date('Y-'.$month.'-'.$day.'H:i:s'))/(60*60*24));

$date1 = (int)(strtotime(date('Y-m-d H:i:s'))/(60*60*24));

$length = $date -$date1;
if($length<0){
    echo 'qua ngay sinh';
    echo '<br>';
    $date2=date_create(date('Y-m-d H:i:s'));
    $future = date_modify($date2,"+1 years");

    $future1 = (int)(strtotime(date_format($future, "Y-m-d H:i:s"))/(60*60*24));
    echo $future1-$date;
}elseif ($length=0){
    echo'hnay sinh nhat';
}else{
    echo'con so ngay :';
    echo $date -$date1;
}
//echo date_format($date, "Y-m-d");
//echo date_format($date1, "Y-m-d");


?>
</body>
</html>