<?php
require_once("./Models/Entity_Student.php");

// Khong dc dinh nghia model trong nay
class Student{
    function ViewDetail(){
        $student = new Entity_Student("1234","Nguyen Van A","23","HUMG");
        include_once("./Views/StudentView/ViewStudent.php");
    }
    function ViewStudentList(){
        include_once("./Configs/ConnectDb.php");
        $queryGetAllStudent = "SELECT * FROM `student`" ;
        $resultDataStudent =  $connect->query($queryGetAllStudent) ;
        if($resultDataStudent == null){
            echo "Không có dữ liệu";
        }else{
           include_once("./Views/StudentView/ViewListStudent.php"); 
        } 
    }
    function ViewCreateStudent(){
        include_once("./Views/StudentView/ViewCreateStudent.php");
    }
    function CreateStudent(){ 
        $student = $_POST["name"]; 
        include_once("./Views/StudentView/ViewDetailCreate.php");
    }
    function DeleteStudent($id){
        include_once("./Configs/ConnectDb.php");
        $sql = "DELETE FROM student WHERE id=$id";
        if (mysqli_query($connect, $sql)) {
            echo "Record deleted successfully";
          } else {
            echo "Error deleting record ";
          }
    }
    function ViewUpdateStudent($id){
        include_once("./Configs/ConnectDb.php");
        $sql = "SELECT * FROM student WHERE id=$id";
        $resultDataStudent =  $connect->query($sql) ;
        if($resultDataStudent == null){
            echo "Not Found id Student";
        }else{
            include_once("./Views/StudentView/ViewUpdateStudent.php");
        }
       
    }
    function UpdateStudent(){
        include_once("./Configs/ConnectDb.php");
        $idStudent = $_POST["idstudent"];
        $nameStudent = $_POST["nameStudent"] ;
        $dateofbirthStudent = $_POST["dateofbirthStudent"] ;
        $University = $_POST["University"] ;
        $sql = "UPDATE `student` SET `id`='$idStudent',`namestudent`='$nameStudent',`age`='$dateofbirthStudent',`university`='$University' WHERE 1";
        if ($connect->query($sql) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $connect->error;
          }
    }
}

?>