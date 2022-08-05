<?php
    include('../view/login.php');
    if (isset($_POST["btn_submit"])) {
        include('../config/db.php'); 
        //lấy thông tin từ các form bằng phương thức POST
        $email = $_POST["email"];
        $password = $_POST["password"];
        //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
        if ($email == "" || $password == "") {
             echo "Bạn vui lòng nhập đầy đủ thông tin";
        }else{
                include('../model/login.php');
                $login = login($email, $password);
                    if($login == TRUE)
                    {
                       //check checkbox
                       if(!empty($_POST['remember_check']))
                       {
                           $remember_check = $_POST['remember_check'];
                       //set cookie
                           setcookie('email', $email, time()+3600*6);
                           setcookie('password', $password, time()+3600*6);
                           header("location:".SITEURL.'controller/manager_user.php');
                       }
                       else
                       {
                        header("location:".SITEURL.'controller/manager_user.php');
                       }
                    }        
            }
        }    
?>