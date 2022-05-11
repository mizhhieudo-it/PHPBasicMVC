<?php
$dbhost = "localhost" ; // 293.234.2.2 
$dbuser = "root" ; // Host_HRT
$dbpassword ="" ; // 123ewrxfsdfs
$dbname ="managermentstudent";
// connectObject quản lý chuỗi kết nối tới my sql
$connect = new mysqli($dbhost,$dbuser,$dbpassword,$dbname) ; 
if($connect->connect_error){
    die("Connection die".$connect->connect_error) ;
}
echo "Connect Successful !";

//mysqli_close($connectObject);

?>