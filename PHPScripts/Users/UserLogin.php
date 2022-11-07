<?php

if(isset($_POST['login']))
{
    $connect = mysqli_connect("localhost", "root", "7762", "sealtravels");

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $login = "SELECT * from users where Username = '$username' and Password = '$password'";

    $result = mysqli_query($connect, $login);

    $rows = mysqli_num_rows($result);

    if ($rows > 0)
    {
        session_start();
        if ($_POST["captcha"] != $_SESSION["captcha"] or $_SESSION["captcha"] == '')
        {
            echo "<script type='text/javascript'>alert('Incorrect captcha code');</script>";
        }
        else
        {
            header("Location: UserPage.php");
        }
    }
    else
    {
        echo "<script type='text/javascript'>alert('Invalid Username or Password');</script>";
    }
}

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, shrink-to-fit=no" />
    
    <title>User Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Heebo" rel="stylesheet" />
    <link href="../../Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/css/sb-admin-2.min.css" rel="stylesheet" type="text/css" />   
    <link href="../../Assets/img/globe.png" rel="icon" />

</head>

<body style="font-family:Heebo">

<br />

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-gradient-primary">
                    <h1 style="font-weight:700; margin-left:100px; margin-top:100px; color:white">Seal Travels <i class="fa fa-globe-americas"></i></h1>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="">
                            <h5 class="" style="color:#4e73df; font-family:Heebo"><strong>User Login</strong> <i class="fa fa-sign-in-alt"></i></h5><br />
                        </div>
                        <form method="post" class="user">
                            <div class="form-group ">
                                <input name="username" class="form-control" type="text" placeholder="Username" required style="font-size:13px" />
                            </div>
                            <div class="form-group ">
                                <input name="password" class="form-control" type="password" placeholder="Password" required style="font-size:13px" />
                            </div>
                            <div class="form-group">
                                <img src="UserCaptcha.php" >
                            </div>
                            <div class="form-group">
                                <input name="captcha" class="form-control" type="text" placeholder="Enter Captcha Code" required="required" style="font-size:13px" />
                            </div>
                            <div>
                                <input type="submit" name="login" value="LOGIN" class="btn btn-primary btn-block" style="font-size:13px; font-weight:bold" />
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <!-- Footer -->
    <footer class="sticky-footer bg-white" style="margin-top:-50px">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; <!-- <a href="#">yvonnevanita.com</a> --> <script>document.write(new Date().getFullYear());</script></span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
        <script src="../../Assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="../../Assets/vendor/jquery/jquery.min.js"></script>
        <script src="../../Assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="../../Assets/js/sb-admin-2.min.js"></script>
        
</body>

</html>
