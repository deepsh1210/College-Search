<?php 
    
    include 'const/navbar.php'; 
    include 'connect.php';

    $old_password = $new_password1 = $new_password2 = "";
    $error = $success = "";
    if(isset($_POST['change'])) {
        $old_password = $_POST['old'];
        $new_password1 = $_POST['new1'];
        $new_password2 = $_POST['new2'];

        if($new_password1 != $new_password2) {
            $error = "Passwords do not match";
        }
        else {
            if (strlen($new_password1) < 8) {
                $error = "Your Password Must Contain At Least 8 Characters";
            }
            else if(!preg_match("#[0-9]+#", $new_password1)) {
                $error = "Your Password Must Contain At Least 1 Number";
            }
            else if(!preg_match("#[A-Z]+#", $new_password1)) {
                $error = "Your Password Must Contain At Least 1 Capital Letter";
            } else {
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM users WHERE email = '$email'  and password = '$old_password'";
                $result = $db->query($sql);

                if(mysqli_num_rows($result) == 1) {
                    $sql = "UPDATE users SET password = '$new_password1' WHERE email = '$email'";
                    $result = $db->query($sql);
                    $success = "Password has been changed successfully";

                    echo '<script>window.location.href="login.php?change_password=ok";</script>';
                } else {
                    $error = "Password is Incorrect";
                }
            }
        }
    }


?>

<div class="container">
    <div class="card mt-5" style="width:40%; margin: auto;">
        <div class="card-header">
            <b>Change Password</b>
        </div>
        <form action="change_password.php" method="POST">
            <div class="px-5 mb-3 mt-4">
                <label>Old Password</label>
                <input class="form-control" type="password" name="old" value="<?php echo $old_password ?>">
            </div>
            <div class="px-5 my-3">
                <label>New Password</label>
                <input class="form-control" type="password" name="new1" value="<?php echo $new_password1 ?>">
            </div>
            <div class="px-5 my-3">
                <label>Confirm New Password</label>
                <input class="form-control" type="password" name="new2" value="<?php echo $new_password2 ?>">
            </div> 
            <div class="px-5 my-3">
                <span style="color: red;" class="error"><?php echo $error ?></span>
                <span style="color: green;" class="error"><?php echo $success ?></span>
            </div>  
            <input class="btn btn-info mb-4 mt-3 mx-5" name="change" type="submit">
        </form>
        
    </div>
</div>

<?php include "const/bootstrap_script.php" ?>