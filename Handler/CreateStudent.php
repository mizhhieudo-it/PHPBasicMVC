
<?php
include("../Configs/ConnectDb.php");
$nameStudent = $_POST["nameStudent"] ;
$dateofbirthStudent = $_POST["dateofbirthStudent"] ;
$University = $_POST["University"] ;
$insertStudent = "INSERT INTO student(namestudent,age,university) Values ('$nameStudent','$dateofbirthStudent','$University')" ; 
if($connect->query($insertStudent)){
    echo "Student Created";
}
else{
    echo "Student Faild";

}
?>
<!-- bước 1 : hứng các dữ liệu mà forms gửi lên -->
<!-- bước 2:  viết câu query để thêm dữ liệu vào database -->
<!-- bước 3: thực thi câu lệnh query  -->