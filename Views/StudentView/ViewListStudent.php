<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ManagermentStudent</title>
</head>

<body>
    <h1>Chi tiết thông tin sinh viên</h1>
    <table>
        <tr>
            <th>ID sinh viên</th>
            <th>Tên sinh viên</th>
            <th>Tuổi</th>
            <th>Tên trường đại học</th>
            <th>Thao tác</th>
        </tr>

<?php

        while($DataRows = $resultDataStudent->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$DataRows["id"]."</td>";
            echo "<td>".$DataRows["namestudent"]."</td>";
            echo "<td>".$DataRows["age"]."</td>";
            echo "<td>".$DataRows["university"]."</td>"; 
            echo "<td><a href='/ManagermentStudent/Student/DeleteStudent/".$DataRows["id"]."'><button>xóa</button></a><a href='/ManagermentStudent/Student/ViewUpdateStudent/".$DataRows["id"]."'><button>sửa</button></td></a>";
            echo "</tr>";
        }
?>
    </table>
</body>

</html>