<?php 
    include('../config/db.php'); 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    $sql = "select * from user where id ='$id'";
    $qr = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($qr);
    }   
?>
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
            <div class="row justify-content-around">
                <div class="border rounded">
                    <div class="p-5">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Fullname</label>
                                <input type="text" class="form-control" name="fullname" value="<?php echo $row['fullname']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="<?php echo $row['email'] ?>">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>">
                            </div>
                            <select class="custom-select my-1 mr-sm-2" name="role">
                            <option><?php echo $row['role']?></option>
                            </select>
                            <div class="form-group p-1">
                                <a href="manager_user.php"><button type="submit" class="btn btn-primary" name="btn_update">Quay lại</button></a>
                            </div>
                        </form>   
</div>
                </div>
            </div>
            <p>Copy right @ 2021 - All right rersver</p>
        </div>
    </body>
</html>