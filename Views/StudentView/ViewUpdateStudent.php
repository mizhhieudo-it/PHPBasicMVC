<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ManagermentStudent</title>
</head>

<body>
    <h1>Cập nhật thông sinh viên sinh</h1>
    <form action="/ManagermentStudent/Student/UpdateStudent" method="post" enctype="multipart/form-data">
        <?php
        while($DataRows = $resultDataStudent->fetch_assoc()){
            echo '<div class="form-group">';
            echo '<label for="nameStudent">ID sinh viên</label>';
            echo '<input type="text" name="idstudent"  class="form-control" value='.$DataRows['id'].' readonly>';
            echo '<label for="nameStudent">Tên sinh viên</label>';
            echo '<input type="text" name="nameStudent"  class="form-control" value ='.$DataRows["namestudent"].' ">';
            echo '<label for="Age">Tuổi </label>';
            echo '<input type="text" name="dateofbirthStudent"  class="form-control" value="'.$DataRows["age"].'">';
            echo '<label for="University">Trường đại học</label>';
            echo '<input type="text" name="University"  class="form-control" value ='.$DataRows["university"].'>';
            echo '</br>';
            echo ' <button type="submit" class="btn btn-outline-danger">Đăng kí thông tin sinh viên</button>';
            echo '</div>';
            echo '</form>';


        }
        ?>    
    
</body>

</html>