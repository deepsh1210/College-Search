<!DOCTYPE html>
<html lang="en">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2YSY7BEV11"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2YSY7BEV11');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=</, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'const/navbar.php'; ?>
    
    <?php 

        if(isset($_POST['save'])) {
            include 'validate.php';
            
        }
    
    ?>

    <div class="container my-4 px-5">
    <?php if(!isset($_SESSION['logged_in'])) : ?>
        <h2> You are not logged in! </h2>
    <?php else : ?>
    <div class="card my-3" style="width: 50rem; margin: auto;">
        <div class="card-header">
        <i class="fa fa-fw fa-cog"></i>
        Profile settings</div>
        <div class="card-body">
                <div class="form-group">
                <div class="form-row">
                    <div class="col-sm-3 col-md-4 px-4">
                        <i class="fa fa-user-circle fa-fw" style="font-size:150px"></i>
                        <br><br>
                        <label for="staticid" class="col-form-label"><b>Name</b></label>
                        <input type="text" readonly required="required" class="form-control-plaintext" id="staticid" value="<?php echo $_SESSION['fname'] . " " . $_SESSION['lname'] ?>">
                        
                        <label for="staticid" class="col-form-label"><b>Email</b> </label>
                        <input type="text" readonly class="form-control-plaintext" id="staticid" value="<?php echo $_SESSION['email'] ?>">   		
                    </div>
                <!-- End of column 1 -->
                    <div class="col-sm-9 col-md-8 mt-3 px-4">
                    <div id = "tab">
                    <form method="post" onsubmit="return validation()" action="profile.php">
                        <div class="row my-2">

                            <div class="col">
                                <div class="form-group">
                                    <div class="form-label-group">
                                     <label><b>Phone</b></label>
                                    <input type="text" readonly id="username" required="required" name = "phone" class="form-control-plaintext" value="<?php echo $_SESSION['phone'] ?>">
                                    <span id="user" class="text-danger font-weight-bold"> </span>
                                </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <div class="form-label-group">
                                     <label for="username"><b>State</b></label>
                                    <input type="text" readonly id="username" required="required" name = "state" class="form-control-plaintext" value="<?php echo $_SESSION['state'] ?>">
                                    <span id="user" class="text-danger font-weight-bold"> </span>
                                </div>
                                </div>
                            </div>

                        
                        </div>

                        <div class="row my-2">

                            <div class="col">
                                <div class="form-group">
                                    <div class="form-label-group">
                                     <label for="username"><b>CET Rank</b></label>
                                    <input type="text" readonly id="username" required="required" name = "cet" class="form-control-plaintext" 
                                    value="<?php 
                                    if($_SESSION['cet'] == 0) echo "NA";
                                    else echo $_SESSION['cet'];     
                                    ?>">
                                    <span id="user" class="text-danger font-weight-bold"> </span>
                                </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <div class="form-label-group">
                                     <label for="username"><b>JEE Main Rank</b></label>
                                    <input type="text" readonly id="username" required="required" name = "jee_main" class="form-control-plaintext" 
                                    value="<?php 
                                    if($_SESSION['jee_main'] == 0) echo "NA";
                                    else echo $_SESSION['jee_main'];     
                                    ?>">
                                    <span id="user" class="text-danger font-weight-bold"> </span>
                                </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <div class="form-label-group">
                                     <label for="username"><b>JEE Advance Rank</b></label>
                                    <input type="text" readonly id="username" required="required" name = "jee_adv" class="form-control-plaintext" 
                                    value="<?php 
                                    if($_SESSION['jee_adv'] == 0) echo "NA";
                                    else echo $_SESSION['jee_adv'];     
                                    ?>">
                                    <span id="user" class="text-danger font-weight-bold"> </span>
                                </div>
                                </div>
                            </div>
                        
                        </div>

                        <div class="row my-2">

                            <div class="col">
                                <div class="form-group">
                                    <div class="form-label-group">
                                     <label for="username"><b>Category</b></label>
                                    <input type="text" readonly id="username" required="required" name = "category" class="form-control-plaintext" value="<?php echo $_SESSION['category'] ?>">
                                    <span id="user" class="text-danger font-weight-bold"> </span>
                                </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <div class="form-label-group">
                                     <label for="username"><b>Gender</b></label>
                                    <input type="text" readonly id="username" required="required" name = "gender" class="form-control-plaintext" 
                                    value="<?php 
                                    if ($_SESSION['gender'] == "M") echo "Male";
                                    else if ($_SESSION['gender'] == "F") echo "Female";
                                    else echo "Other"
                                    ?>">
                                    <span id="user" class="text-danger font-weight-bold"> </span>
                                </div>
                                </div>
                            </div>
                        
                        </div>

                        <div class="row my-2">
                            <a href="change_password.php" class="btn btn-info mx-3" name = "change">Change Password</a>
                        </div>
                        
                            
                    </form>
                
                        </div>
                <!-- End of tab -->
                    </div>
                <!-- End of column 2 -->
                </div>
            </div>
        </div>
    <?php endif; ?>
        <!-- End of card body -->
    </div>
          <!-- End of card -->
    </div>

    <?php include 'const/bootstrap_script.php'; ?>
</body>
</html>