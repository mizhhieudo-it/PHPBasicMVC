<?php
class Home{
    function index(){
        echo "Welcome to Application Student manager";
        echo "<a href='/ManagermentStudent/Student/ViewStudentList'><button>Xem chi tiết tất cả sinh viên</button></a>";
        echo "<a href='/ManagermentStudent/Student/ViewCreateStudent'><button>Tạo sinh viên</button></a>";
    }
}


?>