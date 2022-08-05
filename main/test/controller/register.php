<?php
    include('../view/register.php');
    
    if (isset($_POST["btn_signup"])) {
        include('../config/db.php'); 
        //lấy thông tin từ các form bằng phương thức POST
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
        $role = $_POST['role'];
        //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
        if ($email == "" || $password == "") {
             echo "Bạn vui lòng nhập đầy đủ thông tin";
        }
        else if($password != $confirm){
            echo "Xác nhận lại mật khẩu chưa đúng, vui lòng nhập lại";
        }
        else{
                include('../model/login.php');
                $register = register($fullname, $email, $password, $role);
                if($register == TRUE){
                    $_SESSION['add_user'] = "User Added Sucessfully. Please login again!";
                    header("location:".SITEURL.'controller/login.php');
                }
                else{
                    $_SESSION['add_user'] = "User Added Fail";
                    header("location:".SITEURL.'controller/register.php');
                }
                
            }
        }    
?>