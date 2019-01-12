<?php
$_REQUEST;

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
if(isset($_REQUEST['thamso1'])&&isset($_REQUEST['thamso2'])){
echo 'Hieu : '. $hieu = $_REQUEST['thamso1']-$_REQUEST['thamso2'];
echo '<br>';
echo 'Tong : '. $tong = $_REQUEST['thamso1']+$_REQUEST['thamso2'];
echo '<br>';
echo 'Tich : '. $tich = $_REQUEST['thamso1']*$_REQUEST['thamso2'];
echo '<br>';
echo 'Thuong : '. $thuong = $_REQUEST['thamso1']/$_REQUEST['thamso2'];}
else{
    echo 'Khong ton tai';
}