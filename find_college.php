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
    ?>

    <?php if(isset($_SESSION['logged_in'])) : ?>
        <div class="container my-5">
            <h1>Colleges recommended for you</h1>

            <h3 class="mt-5">Based on JEE Advance</h3>
            <div class="row row-cols-1 row-cols-md-2 pt-3">
                <?php 
                    $query = "SELECT * FROM college";
                    $count = 0;
                    if ($result = $conn->query($query)) {
                        
                        while ($row = $result->fetch_assoc()) {
                            if($row['mode_of_admission'] == 'JEE Advance') {
                                $cs = $row['computer_engineering']; 
                                $mech = $row['mechanical_engineering']; 
                                $etc = $row['electrical_engineering']; 
                                $ece = $row['electronics_engineering']; 
                                $che = $row['chemical_engineering'];

                                if(max($cs, $mech, $etc, $ece, $che) >= $_SESSION['jee_adv']) {
                                    $count += 1;
                                    echo '<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Recommended</div>
                                        <div class="card-body">';
                                            echo '<h5 class="card-title">'.$row['name'].'</h5>';
                                            echo '<h6 class="card-title mt-3">Available branches</h6>';
                                            echo '<ul>';
                                                if($cs >= $_SESSION['jee_adv']) {
                                                    echo '<li>Computer Engineering</li>';
                                                }
                                                if($mech >= $_SESSION['jee_adv']) {
                                                    echo '<li>Mechanical Engineering</li>';
                                                }
                                                if($etc >= $_SESSION['jee_adv']) {
                                                    echo '<li>Electrical Engineering</li>';
                                                }
                                                if($ece >= $_SESSION['jee_adv']) {
                                                    echo '<li>Electronics Engineering</li>';
                                                }
                                                if($che >= $_SESSION['jee_adv']) {
                                                    echo '<li>Chemical Engineering</li>';
                                                }
                                            echo '</ul>';
                                            $href = 'college_detail.php?college_id='.$row['id'];
                                            echo '<a href="'. $href .'" class="btn btn-secondary" style="color:white;">View College</a>';
                                        echo '</div>
                                    </div>';
                                }
                            }
                        }

                        /* free result set */
                        $result->free();
                    }

                    if($count == 0) {
                        echo '<p class="card-text text-muted ml-3">Sorry, No colleges found!</p>';
                    }
                ?>
            </div>

            <h3 class="mt-5">Based on JEE Main</h3>
            <div class="row row-cols-1 row-cols-md-2 pt-3">
                <?php 
                    $query = "SELECT * FROM college";
                    $count = 0;
                    if ($result = $conn->query($query)) {

                        while ($row = $result->fetch_assoc()) {
                            if($row['mode_of_admission'] == 'JEE Main') {
                                $cs = $row['computer_engineering']; 
                                $mech = $row['mechanical_engineering']; 
                                $etc = $row['electrical_engineering']; 
                                $ece = $row['electronics_engineering']; 
                                $che = $row['chemical_engineering'];
                                
                                if(max($cs, $mech, $etc, $ece, $che) >= $_SESSION['jee_main']) {
                                    $count += 1;
                                    echo '<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Recommended</div>
                                        <div class="card-body">';
                                            echo '<h5 class="card-title">'.$row['name'].'</h5>';
                                            echo '<h6 class="card-title mt-3">Available branches</h6>';
                                            echo '<ul>';
                                                if($cs >= $_SESSION['jee_main']) {
                                                    echo '<li>Computer Engineering</li>';
                                                }
                                                if($mech >= $_SESSION['jee_main']) {
                                                    echo '<li>Mechanical Engineering</li>';
                                                }
                                                if($etc >= $_SESSION['jee_main']) {
                                                    echo '<li>Electrical Engineering</li>';
                                                }
                                                if($ece >= $_SESSION['jee_main']) {
                                                    echo '<li>Electronics Engineering</li>';
                                                }
                                                if($che >= $_SESSION['jee_main']) {
                                                    echo '<li>Chemical Engineering</li>';
                                                }
                                            echo '</ul>';
                                            $href = 'college_detail.php?college_id='.$row['id'];
                                            echo '<a href="'. $href .'" class="btn btn-secondary" style="color:white;">View College</a>';
                                        echo '</div>
                                    </div>';
                                    
                                }
                                
                            }
                        }

                        /* free result set */
                        $result->free();
                    }

                    if($count == 0) {
                        echo '<p class="card-text text-muted ml-3">Sorry, No colleges found!</p>';
                    }
                ?>
            </div>

            <h3 class="mt-5">Based on MHT-CET</h3>
            <div class="row row-cols-1 row-cols-md-2 pt-3">
                <?php 
                    $query = "SELECT * FROM college";
                    $count = 0;
                    if ($result = $conn->query($query)) {

                        while ($row = $result->fetch_assoc()) {
                            if($row['mode_of_admission'] == 'MHT-CET') {
                                $cs = $row['computer_engineering']; 
                                $mech = $row['mechanical_engineering']; 
                                $etc = $row['electrical_engineering']; 
                                $ece = $row['electronics_engineering']; 
                                $che = $row['chemical_engineering'];

                                if(max($cs, $mech, $etc, $ece, $che) >= $_SESSION['cet']) {
                                    $count += 1;
                                    echo '<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Recommended</div>
                                        <div class="card-body">';
                                            echo '<h5 class="card-title">'.$row['name'].'</h5>';
                                            echo '<h6 class="card-title mt-3">Available branches</h6>';
                                            echo '<ul>';
                                                if($cs >= $_SESSION['cet']) {
                                                    echo '<li>Computer Engineering</li>';
                                                }
                                                if($mech >= $_SESSION['cet']) {
                                                    echo '<li>Mechanical Engineering</li>';
                                                }
                                                if($etc >= $_SESSION['cet']) {
                                                    echo '<li>Electrical Engineering</li>';
                                                }
                                                if($ece >= $_SESSION['cet']) {
                                                    echo '<li>Electronics Engineering</li>';
                                                }
                                                if($che >= $_SESSION['cet']) {
                                                    echo '<li>Chemical Engineering</li>';
                                                }
                                            echo '</ul>';
                                            $href = 'college_detail.php?college_id='.$row['id'];
                                            echo '<a href="'. $href .'" class="btn btn-secondary" style="color:white;">View College</a>';
                                        echo '</div>
                                    </div>';
                                }
                            }
                        }

                        /* free result set */
                        $result->free();
                    }

                    if($count == 0) {
                        echo '<p class="card-text text-muted ml-3">Sorry, No colleges found!</p>';
                    }
                ?>
            </div>

        </div>
    <?php else : ?>
        
        <div class="container my-5 text-center">
            <img src="static/not_logged_in.jpg" height="400px">
            <h3 class="display-4 my-2">Please Log In!</h3>
            <a href="login.php" class="btn btn-info mt-3">Log In</a>
        </div>

    <?php endif; ?>

    <?php include 'const/bootstrap_script.php'; ?>

</body>
</html>
