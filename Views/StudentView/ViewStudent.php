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
    <h1>Chi tiết thông tin sinh viên</h1>
    <table>
        <tr>
            <th>ID sinh viên</th>
            <th>Tên sinh viên</th>
            <th>Tuổi</th>
            <th>Tên trường đại học</th>
        </tr>
        <tr>
            <tr>
            <?php
            echo "<td>".$student->id."</td>";
            echo "<td>".$student->name."</td>";
            echo "<td>".$student->age."</td>";
            echo "<td>".$student->university."</td>";
            ?>
        </tr>
    </table>
</body>

</html>