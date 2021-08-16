<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
</head>
<body>
	<?php include 'const/navbar.php';  ?>
	<?php include 'connect.php';  ?>
	
	<div class="container my-5">
		<h1>Search Results</h1>
		<div class="row row-cols-1 row-cols-md-2 pt-3">
		<?php
		if(isset($_POST['search'])){
			$searchq=$_POST['search'];
			
			$query=mysqli_query($conn,"SELECT * FROM college WHERE name LIKE '%$searchq%' OR address LIKE '%$searchq%'") or die('could not search');
			$count=mysqli_num_rows($query);
			if($count == 0){
				echo '<p class="card-text text-muted ml-3">Sorry, No colleges found!</p>';
			}else{
				
				while($row=mysqli_fetch_array($query)){
					
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
			}
			
		}

		?>
		</div>
		<a href="home.php?page=1" class="btn btn-info">Go back to Home page</a>
	</div>
	

	<?php include 'const/bootstrap_script.php'; ?>
</body>
</html>