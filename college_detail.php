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

    <?php 
        include 'const/navbar.php'; 
        include 'connect.php'; 


        $id = $_GET["college_id"];
        $query = "SELECT * FROM college WHERE id = '$id' ";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        
        $name = $row['name'];
        $img = 'static/colleges/'. $row['name']. '.jpg';
        $address = $row['address'];
        $fee = $row['institute_fee'];
        $mode_of_admission = $row['mode_of_admission'];
        $highest = $row['highest_package'];
        $average = $row['average_package'];
        $computer = $row['computer_engineering']; 
        $mechanical = $row['mechanical_engineering']; 
        $electrical = $row['electrical_engineering']; 
        $electronics = $row['electronics_engineering']; 
        $chemical = $row['chemical_engineering']; 
    ?>

    <div class="container mt-5">
        <div class="card mb-3 my-5 mx-5">
        <img class="card-img-top" src="<?php echo $img ?>" style="max-height: 550px;" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><h2 class="mb-3"><?php echo $name ?></h2></h5>
            <i class="fa fa-map-marker" style="font-size:20px;"> <?php echo $address ?></i>

            <div class="my-5">
                <h4 class="mt-3">Mode of Admission</h4>
                <hr>
                <p><?php echo $mode_of_admission ?></p>
                <a href="https://jeeadv.ac.in/">Click here to know more about <?php echo $mode_of_admission ?></a>
            </div>

            <div class="my-5">
                <h4 class="mt-3">Institue Fee</h4>
                <hr>
                <p><b><?php echo $fee ?></b> per year</p>
            </div>
            
            <div class="my-5">
                <h4 class="mt-3">Cutoff</h4>
                <hr>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Branch</th>
                        <th scope="col">Cutoff</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Computer Engineering</td>
                            <td><?php echo $computer ?></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Mechanical Engineering</td>
                            <td><?php echo $mechanical ?></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Electrical Engineering</td>
                            <td><?php echo $electrical ?></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Electronics Engineering</td>
                            <td><?php echo $electronics ?></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Chemical Engineering</td>
                            <td><?php echo $chemical ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="my-5">
                <h4 class="mt-3">Placement</h4>
                <hr>
                <p><b>Highest Package : </b> <?php echo $highest ?></p>
                <p><b>Average Package : </b> <?php echo $average ?></p>
            </div>

            <a class="btn btn-info" href="home.php">Go back to home page</a>

        </div>

    </div>

    <?php include 'const/bootstrap_script.php'; ?>
 
</body>
</html>