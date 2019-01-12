<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form name="convertdungluong" action="index3.php" method="post">
    <P>
        <label>Gigabyte :</label>
        <input type="text" name="capacity" value="<?php echo $_REQUEST['capacity']?>" placeholder="Nhập vào dung lượng cần chuyển từ gigabyte">
    </P>
    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>

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
if(isset($_REQUEST['capacity'])&& is_numeric($_REQUEST['capacity'])) {
    echo '<br>';
    echo 'thành megabyte :' . $val = $_REQUEST['capacity'] * 1024;
    echo '<br>';
    echo 'thành byte :' . $val = $_REQUEST['capacity'] * 1024 * 1024;
    echo '<br>';
    echo 'thành bit :' . $val = $_REQUEST['capacity'] * 1024 * 1024 * 1024;
}
else{
    echo 'Khong Ton Tai';
}
?>

</body>
</html>