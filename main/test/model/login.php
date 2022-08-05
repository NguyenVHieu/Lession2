<?php
    function login ($email, $password)
    {
        include('../config/db.php'); 
        $sql="select * from user where email ='$email' and password='$password'";
        $query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
        if($num_rows == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    function register ($fullname, $email, $password, $role)
    {
        include('../config/db.php'); 
        $sql="insert into user (fullname, email, password, role) values ('$fullname','$email','$password','$role')";
        $query = mysqli_query($conn, $sql) or die (mysqli_error());
        if($query == TRUE)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function update ($id, $fullname, $email, $password, $role)
    {
        include('../config/db.php'); 
        $sql="update user set fullname= '$fullname', email= '$email', password= '$password', role= '$role' WHERE id='$id'";
        $query = mysqli_query($conn, $sql) or die (mysqli_error());
        if($query == TRUE)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function delete ($id)
    {
        include('../config/db.php'); 
        $sql="delete from user  where id='$id'";
        $query = mysqli_query($conn, $sql) or die (mysqli_error());
        if($query == TRUE)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
?>