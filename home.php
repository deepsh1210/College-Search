<!DOCTYPE html>
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

	<title>Home</title>
	<style>
	
	.pagi{
text-align:center;
	}
	
* {box-sizing: border-box;}



.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
 
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>
	<?php include 'const/navbar.php';  
	include 'connect.php'; ?>
	

		<?php if(isset($_SESSION['logged_in'])) : ?>
			<div class="container py-3">
			<div class="mb-4">
				<h1>Explore Top Colleges</h1>
			</div>
			<div class="my-4">
				<form action="searchResult.php" method="post" class="form-inline my-3 my-lg-0">
					<input class="form-control mr-sm-2" type="search" style="width:400px;" name="search" placeholder="Search for colleges" aria-label="Search">
					<button class="btn btn-info my-3 my-sm-0" type="submit">Search</button>
				</form>
			</div>
			
			<div class="row row-cols-1 row-cols-md-2 pt-3">
			<?php
			$results_per_page = 6;
			$sql='SELECT * FROM college';
			$result = mysqli_query($conn, $sql);
			$number_of_results = mysqli_num_rows($result);
			$number_of_pages = ceil($number_of_results/$results_per_page);

			if (!isset($_GET['page'])) {
						$page = 1;
			} else {
						$page = $_GET['page'];
			}


			$this_page_first_result = ($page-1)*$results_per_page;
			$sql='SELECT * FROM college LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
			$result = mysqli_query($conn, $sql);

				while($row = mysqli_fetch_array($result)) {
					$img = 'static/colleges/'.$row['name'].'.jpg';
					$location = $row['address'];
					echo '<form action="GET">';
						echo '<div class="col mb-4">';
							echo '<div class="card shadow p-3 mb-5 bg-white rounded">';
							echo '<img src="'.$img.'" class="card-img-top" height="350px"  alt="...">';
							echo '<div class="card-body">';
								echo '<h5 class="card-title">'.$row["name"].'</h5>';
								echo '<i class="fa fa-map-marker" style="font-size:20px;"> '.$location.'</i>';
								echo '<br>';
								echo '<a class="btn btn-info mt-3" href="college_detail.php?college_id='.$row['id'].'">See More</a>';
							echo '</div>
							</div>
						</div>
					</form>';
				}
	
				$result->free();
				
				
			?>	
		</div>	
		
				<div class="pagi">
				<?php
				for ($page = 1; $page <= $number_of_pages; $page++) {
					if($_GET['page'] != $page) {
						echo '<a class="btn btn-info mb-5" href="home.php?page=' . $page . '">' . $page . '</a> ';
					} else {
						echo '<a type="button" class="btn btn-info mb-5 disabled" href="home.php?page=' . $page . '">' . $page . '</a> ';
					}
				}
				
				?>	
</div>				
		<?php else : ?>

			<div style="background-color:#F0F8FF;">
				<div class="row py-5">
					<div class="col-lg-7" style="margin: auto;">
						<h1 class="display-2 text-center" style="color:#8A2BE2;"><b>Looking for your</b></h1>
						<h1 class="display-2 text-center" style="color:#8A2BE2;"><b>dream college?</b></h1>
						<div class="text-center">
							<p class="text-center" style="font-size: 30px;">CollegeSearch is your one-stop destination.</p>
							<a href="register.php" class="btn btn-info btn-lg" style="margin:auto;">Sign Up</a>
						</div>
						
					</div>
					<div class="col-lg-5">
						<img src="static/home.png" alt="" height="400px">
					</div>
				</div>
				
			</div>

			<div class="container" style="margin-top:60px;margin-bottom:60px;">
				<div class="row">
					<div class="col-sm-6">
						<div class="card bg-warning">
						<div class="card-body">
							<h5 class="card-title">Top Colleges in India</h5>
							<p class="card-text">Get latest information about top colleges from India who take admission based on JEE Main/Advance, CET.</p>
							<a href="#" class="btn btn-primary">Get Started</a>
						</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card bg-success text-light">
						<div class="card-body">
							<h5 class="card-title">See where you stand</h5>
							<p class="card-text">Add your exam score/rank and check which colleges you are eligible for.</p>
							<a href="#" class="btn btn-primary">Learn More</a>
						</div>
						</div>
					</div>
					</div>
			</div>
			

		<?php endif; ?>
		</div>
		
	</div>
	<?php include 'const/bootstrap_script.php'; ?>
</body>
</html>