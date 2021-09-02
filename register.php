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
    <?php include 'validate.php';?>
    <?php include 'insert.php';?>
 
        <div class="row ">
            <div class="col-lg-5 mx-auto">
                <div class="card card-register mx-auto mt-5 mb-5">
                    <div class="card-header bg-info text-light text-center"><h2>Register</h2></div>
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="register-form" method="POST" action='register.php'>
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label>First Name<label style="color: red">*</label></label> 
                                                <input class="form-control mb-2 mr-sm-4" type="text" id="input" name="fname" required="required" value="<?php echo $fname;?>"> 
                                            </div>
                                            <span style="color: red;" class="error"><?php echo $fnameerror;?></span>
                                        </div>
 
                                        <div class="col-md-6">
                                            <div class="form-group"> <label>Last Name<label style="color: red">*</label></label> 
                                                <input class="form-control mb-2 mr-sm-2" type="text" name="lname" required="required" value="<?php echo $lname;?>"> </div>
                                                <span style="color: red;" class="error"><?php echo $lnameerr;?></span>
                                        </div>
                                        <div class="col">
                                            <span  style="color: purple; font-size: 20px" id="result"></span>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label>Email <label style="color: red">*</label></label> 
                                                <input class="form-control mb-2 mr-sm-2" type="email" required="required" name="email" value="<?php echo $email;?>"> 
                                            </div>
                                            <span style="color: red;" class="error"><?php echo $emailerr;?></span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label>Contact Number <label style="color: red">*</label></label> 
                                                <input class="form-control mb-2 mr-sm-2" type="text" required="required" name="phone" value="<?php echo $phone;?>"> 
                                            </div>
                                            <span style="color: red;" class="error"><?php echo $phoneerr;?></span>
                                        </div>
                                        
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label>State<label style="color: red">*</label></label> <select id="state" name="state" class="form-control" required="required" data-error="Please specify your need.">
                                                <option value="">State</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Puducherry">Puducherry</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                                </select> </div>
                                                <span style="color: red;" class="error"><?php echo $stateerr;?></span>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group"> <label class="mb-3">CET Rank </label>
                                                <input class="form-control mb-2 mr-sm-2" id="input1" type="text" name="cet" value="<?php echo $cet;?>">
                                            </div>
                                            <span style="color: red;" class="error"><?php echo $ceterr;?></span>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"> <label class="mb-3">JEE Main Rank </label>
                                                <input class="form-control mb-2 mr-sm-2" type="text" name="jee_main" value="<?php echo $jee_main;?>"> 
                                            </div>
                                            <span style="color: red;" class="error"><?php echo $jee_main_err;?></span>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"> <label class="mb-3">JEE Advance Rank </label> 
                                                <input class="form-control mb-2 mr-sm-2" type="text" name="jee_adv" value="<?php echo $jee_adv;?>"> 
                                            </div>
                                            <span style="color: red;" class="error"><?php echo $jee_adv_err;?></span>
                                        </div>
                                    </div>

                                    
 
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label>Category<label style="color: red">*</label></label> <select id="category" name="category" class="form-control" required="required" data-error="Please specify your need.">
                                                <option value="">Category</option>
                                                    <option value="GEN">General</option>
                                                    <option value="EWS">EWS</option>
                                                    <option value="OBC">OBC (Non-creamy layer)</option>
                                                    <option value="SC">SC</option>
                                                    <option value="ST">ST</option>
                                                    <option value="PwD">PwD</option>
                                                </select> </div>
                                                <span style="color: red;" class="error"><?php echo $categoryerr;?></span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label>Gender<label style="color: red">*</label></label> <select id="gender" name="gender" class="form-control" required="required" data-error="Please specify your need.">
                                                <option value="">Gender</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="O">Other</option>
                                                </select> </div>
                                                <span style="color: red;" class="error"><?php echo $gendererr;?></span>
                                        </div>
                                        
                                    </div>
 
                                    </div>
 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"> <label>Password <label style="color: red">*</label></label> 
                                                <input class="form-control mb-2 mr-sm-2" type="password" required="required" name="password" value="<?php echo $password;?>"> 
                                            </div>
                                            <span style="color: red;" class="error"><?php echo $passworderr;?></span>
                                        </div>
                                        <div class="col-md-12"> <input type="submit" name="register" class="btn btn-success btn-send pt-2 btn-block mt-2" value="Submit"> </div>
                                    </div>

                                    <div>
                                        <div class="form-check form-check-inline ml-3 mt-3">
                                            <small class="text-muted">
                                                Already Registered?
                                                <a class="ml-2" href="login.php">Login Here</a>
                                            </small>
                                        </div>

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
