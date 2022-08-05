<?php
    include('../view/update_user.php');
    if (isset($_POST["btn_update"])) {
        include('../config/db.php'); 
        //lấy thông tin từ các form bằng phương thức POST
        $id = $_GET['id']; 
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
        $role = $_POST['role'];
        //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
            include('../model/login.php');
            $update = update($id, $fullname, $email, $password, $role);
                if($update == TRUE){
                    $_SESSION['update_user'] = "User Updated Sucessfully";
                    header("location:".SITEURL.'controller/manager_user.php');
                }
                else{
                    $_SESSION['update_user'] = "User Update Fail";
                    header("location:".SITEURL.'controller/update_user.php');
                }
        }    
?>