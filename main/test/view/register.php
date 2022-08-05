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
                        if(isset($_SESSION['add_admin']))
                        {
                            echo $_SESSION['add_admin'];
                            unset($_SESSION['add_admin']);
                        }
                        if(isset($_SESSION['delete_admin']))
                        {
                            echo $_SESSION['delete_admin'];
                            unset($_SESSION['delete_admin']);
                        }
                    ?>

            <div class="row justify-content-around">
                <div class="border rounded">
                    <div class="p-5">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Fullname</label>
                                <input type="text" class="form-control" name="fullname">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm">
                            </div>
                            <select class="custom-select my-1 mr-sm-2" name="role">
                                <option selected>Chọn Role...</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                            <div class="form-group p-1">
                                <button type="submit" class="btn btn-primary" name="btn_signup">Sign Up</button>
                                <a class="nav-link" href="login.php">Quay lại trang đăng nhập</a>
                            </div>
                        </form>   
</div>
                </div>
            </div>
            <p>Copy right @ 2021 - All right rersver</p>
        </div>
    </body>
</html>