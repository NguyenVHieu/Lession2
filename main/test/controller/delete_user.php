<?php
    include('../config/db.php'); 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
            include('../model/login.php');
            $delete = delete($id);
            if($delete == TRUE){
                $_SESSION['delete_user'] = "User Delete Sucessfully";
                header("location:".SITEURL.'controller/manager_user.php');
            }
            else{
                $_SESSION['add_user'] = "User Delete Fail";
                header("location:".SITEURL.'controller/manager_user.php');
            }
                
            }   
?>