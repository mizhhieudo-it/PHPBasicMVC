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
    <h1>Tạo thông sinh viên sinh</h1>
    <form action="/ManagermentStudent/Handler/CreateStudent.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <label for="nameStudent">Tên sinh viên</label>
            <input type="text" name="nameStudent"  class="form-control">
            <label for="Age">Tuổi </label>
            <input type="text" name="dateofbirthStudent"  class="form-control">
            <label for="University">Trường đại học</label>
            <input type="text" name="University"  class="form-control">
            </br>
            <button type="submit" class="btn btn-outline-danger">Đăng kí thông tin sinh viên</button>
            </div>
        </form>

</body>

</html>