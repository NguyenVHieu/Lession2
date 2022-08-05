<?php include('../config/db.php'); ?>
<html>
    <title>Food Order Website - Home Page</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <body>     
        <div class="container">
            <div class="p-3">
                <button type="button" class="btn btn-light">Home</button>
                <button type="button" class="btn btn-primary">Login</button>
            </div>
            <?php
                        if(isset($_SESSION['add_user']))
                        {
                            echo $_SESSION['add_user'];
                            unset($_SESSION['add_user']);
                        }
            ?>

            <div class="row justify-content-around">
                <div class="border rounded">
                    <div class="p-5">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1" >Email address</label>
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="<?php if(isset($_COOKIE['email'])){echo $_COOKIE['email'];};?>">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" >Password</label>
                                <input type="password" class="form-control" name="password" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];};?>">
                            </div>
                                <div class="form-check p-1">
                                    <input type="checkbox" class="form-check-input" name="remember_check">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <div class="p-1">
                                <button type="submit" class="btn btn-primary" name="btn_submit">Sign In</button>
                                <a class="nav-link" href="register.php">Đăng kí tại đây</a>
                            </div>
                          
                        </form>   
</div>
                </div>
            </div>
            <p>Copy right @ 2021 - All right rersver</p>
        </div>
    </body>
</html>