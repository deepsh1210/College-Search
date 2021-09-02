<!DOCTYPE HTML>  
<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2YSY7BEV11"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2YSY7BEV11');
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CollegeSearch</title>

    <!-- Bootstrap CSS -->      
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

     <!-- Custom styles for this template-->
    <link href="static/main.css" rel="stylesheet" type="text/css"/>
    <link href="static/footer.css" rel="stylesheet" type="text/css"/>
</head>
 
<body>  

    <?php include 'const/navbar.php'; ?>

    <?php
        $success = "";
        if(isset($_GET['change_password']) && $_GET['change_password'] == 'ok') {
            $success = "Password was changed successfully. Please Login with new password.";
        } 

        if(isset($_POST["login"])) {
            require 'connect.php';

            $email = mysqli_real_escape_string($db, $_POST['email']);
            $password = mysqli_real_escape_string($db, $_POST['password']);

            $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
            $result = $db->query($sql);

            if(mysqli_num_rows($result) == 1)
            {   
                $_SESSION['logged_in'] = true;
                while($row = $result->fetch_assoc()) {
                    $_SESSION['fname'] = $row['fname'];
                    $_SESSION['lname'] = $row['lname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['phone'] = $row['phone'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['state'] = $row['state'];
                    $_SESSION['cet'] = $row['cet'];
                    $_SESSION['jee_main'] = $row['jee_main'];
                    $_SESSION['jee_adv'] = $row['jee_adv'];
                    $_SESSION['category'] = $row['category'];
                    $_SESSION['gender'] = $row['gender'];
                }
                echo '<script>window.location.href="home.php?page=1";</script>';
            }
            else
            {
                echo "<script>
                alert('Invalid username or password');
                </script>";
            }
        }
    ?>
    
 
        <div class="row ">
            <div class="col-lg-5 mx-auto">
                <div class="card card-register m-5">
                    <div class="card-header bg-info text-light text-center"><h2>Sign In</h2></div>
                    <div class="card-body bg-light">
                        <div class="container">
                            <div>
                                <h5 class="text-success mb-2"><?php echo $success; ?></h5>
                            </div>
                            <form id="login-form" method="POST" action='login.php'>
                                
								<div class="row">
									<div class="form-group col-md-12"> <label>Email<label style="color: red">*</label></label> 
										<input class="form-control mb-2" type="email" id="input" name="email" required="required" value=""> 
									</div>
								</div>

								<div class="row">
									<div class="form-group col-md-12"> <label>Password<label style="color: red">*</label></label> 
										<input class="form-control mb-2" type="password" id="input" name="password" required="required" value=""> 
									</div>
								</div>

								<div class="row">
									<div class="col-md-12 mt-3"> 
                                    <input type="submit" name="login" class="btn btn-success btn-send pt-2 btn-block mt-2" value="Submit"> 
                                </div>
								</div>

								<div>
									<div class="form-check form-check-inline ml-3 mt-3">
										<small class="text-muted">
											Not Registered?
											<a class="ml-2" href="register.php">Register Here</a>
										</small>
									</div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div> <!-- /.8 -->
            </div> <!-- /.row-->
        </div>
    </div>
 
    <br><br>

    <div>
     
 
    <br>

    <?php include 'const/bootstrap_script.php'; ?>
 
</body>
</html>
