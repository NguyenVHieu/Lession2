<?php include('../config/db.php'); ?>
<html>
    <title>Food Order Website - Home Page</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />    <body>     
        <div class="container">
            <div class="p-3">
               <a href="manager_user.php"> <button type="button" class="btn btn-primary">Home</button></a>
               <a href="login.php"> <button type="button" class="btn btn-light">Log Out</button>
            </div>
            <nav class="navbar navbar-light bg-light">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </nav>
            <?php
                        if(isset($_SESSION['update_user']))
                        {
                            echo $_SESSION['update_user'];
                            unset($_SESSION['update_user']);
                        }
                        if(isset($_SESSION['delete_user']))
                        {
                            echo $_SESSION['delete_user'];
                            unset($_SESSION['delete_user']);
                        }
            ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Operations</th>
                    </tr>
                    <?php
                            $sql = "select * from user";
                            $query=mysqli_query($conn, $sql);
                            if($query==TRUE)
                            {
                                $count = mysqli_num_rows($query);
                                $sn = 1;
                                if($count>0)
                                {
                                    while($rows = mysqli_fetch_assoc($query))
                                    {
                                        $id = $rows['id'];
                                        $full_name = $rows['fullname'];
                                        $email = $rows['email'];
                                        $role = $rows['role'];

                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $sn++?></th>
                                            <td><?php echo $full_name?></td>
                                            <td><?php echo $email?></td>
                                            <td><?php echo $role?></td>
                                            <td>
                                                <a href="update_user.php?id=<?php echo $id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <a href=""><i class="fa fa-file-o" aria-hidden="true"></i></a>
                                                <a href="profile_user.php?id=<?php echo $id ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a href="delete_user.php?id=<?php echo $id ?>"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                                            </td>
                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "NoDb";
                                }
                            }

                        ?>
                    
                </tbody>
            </table>
            <p>Copy right @ 2021 - All right rersver</p>
        </div>
    </body>
</html>