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

	<title>College Search: Find Best colleges in India</title>
	<meta name="description" content="A one stop destination to get all information about top colleges and universities in India">
	<meta name="keywords" content="College Search, Explore Top universities, Admissions, Find Your College">
	<meta name="robots" content="index, follow">
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
							<p class="text-center" style="font-size: 30px;">Explore Colleges in India.</p>
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
					
					<div class="jsx-3074747040 row"><div class="jsx-3074747040 col-4"><a class="jsx-3074747040 text-decoration-none" href="/india-colleges"><div class="jsx-3074747040 wrap p-4 mb-8"><span class="jsx-3074747040 icon"> <svg width="129" height="121" viewBox="0 0 129 121" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M64.341 2.085h.8v15.448h-.8V2.085z" fill="#8A8879"></path><path d="M65.005 10.094s1.085.617 3.1-.425c.84-.433 1.81-.876 2.7-.984 1.034-.123 2.36-.143 4.086 1.262 1.451 1.18 3.689.147 3.689.147v-7.76s-1.967 1.19-3.69-.149C73.135.82 71.84.8 70.807.925c-.891.106-1.862.55-2.7.983-2.016 1.042-3.101.425-3.101.425V8.27" fill="#FFD500"></path><path d="M64.059 1.554a.683.683 0 111.365-.002.683.683 0 01-1.365.002" fill="#D7D5C0"></path><path d="M66.268 57.547H14.954v63.378h101.8V57.547H66.267" fill="#FFF"></path><path d="M14.954 57.963h8.762v59.116h-8.762V57.963z" fill="#DDD"></path><path d="M24.2 117.079h-9.443c-1.084 0-1.962.97-1.962 2.164v1.683H26.16v-1.683c0-1.194-.877-2.164-1.96-2.164" fill="#FF7800"></path><path d="M14.954 61.394h8.762v.453h-8.762v-.453z" fill="#CC8556"></path><path d="M12.795 57.547v1.683c0 1.194.878 2.164 1.962 2.164h9.442c1.084 0 1.961-.97 1.961-2.164v-1.683H12.795" fill="#FF7800"></path><path d="M23.262 116.626H15.34a.94.94 0 01-.386-.082v-1.709a.94.94 0 01.386-.082h7.922a.93.93 0 01.454.117v1.64a.93.93 0 01-.454.116" fill="#DD8D5A"></path><path d="M24.2 116.142c0 .517-.42.937-.937.937H15.34a.937.937 0 110-1.874h7.923c.517 0 .937.42.937.937" fill="#FF7800"></path><path d="M46.082 57.963h8.76v59.116h-8.76V57.963z" fill="#DDD"></path><path d="M55.327 117.079h-9.444c-1.083 0-1.96.97-1.96 2.164v1.683h13.365v-1.683c0-1.194-.878-2.164-1.961-2.164" fill="#FF7800"></path><path d="M46.082 61.394h8.76v.453h-8.76v-.453z" fill="#CC8556"></path><path d="M43.922 57.547v1.683c0 1.194.878 2.164 1.96 2.164h9.445c1.083 0 1.96-.97 1.96-2.164v-1.683H43.923" fill="#FF7800"></path><path d="M54.39 116.626h-7.924a.92.92 0 01-.384-.082v-1.709a.932.932 0 01.384-.082h7.924c.164 0 .319.042.453.117v1.64a.937.937 0 01-.453.116" fill="#DD8D5A"></path><path d="M55.327 116.142c0 .517-.42.937-.937.937h-7.924a.937.937 0 010-1.874h7.924c.517 0 .937.42.937.937" fill="#FF7800"></path><path d="M77.117 57.963h8.76v59.116h-8.76V57.963z" fill="#DDD"></path><path d="M86.361 117.079h-9.443c-1.083 0-1.962.97-1.962 2.164v1.683h13.367v-1.683c0-1.194-.878-2.164-1.962-2.164" fill="#FF7800"></path><path d="M77.117 61.394h8.76v.453h-8.76v-.453z" fill="#CC8556"></path><path d="M74.957 57.547v1.683c0 1.194.878 2.164 1.96 2.164h9.444c1.084 0 1.962-.97 1.962-2.164v-1.683H74.957" fill="#FF7800"></path><path d="M85.425 116.626H77.5a.931.931 0 01-.384-.081v-1.71a.932.932 0 01.384-.082h7.924a.93.93 0 01.453.117v1.64a.93.93 0 01-.453.116" fill="#DD8D5A"></path><path d="M86.361 116.142c0 .517-.42.937-.936.937h-7.924a.937.937 0 010-1.874h7.924c.517 0 .936.42.936.937" fill="#FF7800"></path><path d="M108.188 57.963h8.761v59.116h-8.76V57.963z" fill="#DDD"></path><path d="M117.29 117.079h-9.444c-1.082 0-1.96.97-1.96 2.164v1.683h13.365v-1.683c0-1.194-.877-2.164-1.961-2.164" fill="#FF7800"></path><path d="M108.188 61.394h8.761v.453h-8.76v-.453z" fill="#CC8556"></path><path d="M105.886 57.547v1.683c0 1.194.878 2.164 1.96 2.164h9.444c1.084 0 1.961-.97 1.961-2.164v-1.683h-13.365" fill="#FF7800"></path><path d="M116.354 116.626h-7.923a.933.933 0 01-.243-.031v-1.81a.933.933 0 01.243-.032h7.923c.226 0 .434.08.595.214v1.445a.93.93 0 01-.595.214" fill="#DD8D5A"></path><path d="M117.29 116.142a.936.936 0 01-.936.937h-7.923a.937.937 0 110-1.874h7.923c.517 0 .936.42.936.937" fill="#FF7800"></path><path d="M11 51.822h108.556v5.32H11v-5.32z" fill="#DDD"></path><path d="M12.795 57.547H26.16v.551H12.795v-.551zM43.922 57.547h13.366v.551H43.922v-.551zM74.957 57.547h13.366v.551H74.957v-.551zM105.886 57.547h13.365v.551h-13.365v-.551z" fill="#FF7800"></path><path d="M59.886 120.926V94.54a5.756 5.756 0 015.757-5.756h.959a5.756 5.756 0 015.757 5.756v26.387" fill="#9FB7BD"></path><path d="M29.997 70.346h8.96v11.519h-8.96v-11.52zM61.643 70.346H70.6v11.519h-8.958v-11.52zM92.678 70.346h8.958v11.519h-8.958v-11.52z" fill="#9FB7BE"></path><path d="M64.769 22.175L9.812 51.503h109.915L64.769 22.175" fill="#FFF"></path><path d="M60.522 36.84a4.247 4.247 0 118.494-.002 4.247 4.247 0 01-8.494.002" fill="#E3E3E3"></path><path d="M7.71 53.374H.68L64.769 17.73 127.3 52.508l-7.745-.585v-.101h-.637l-.597-.319h1.405L64.769 22.175 9.812 51.503h1.404L7.71 53.374" fill="#83A095"></path><path d="M128.858 53.374h-7.03l-2.272-1.212v-.24l7.745.586 1.557.866" fill="#719284"></path><path d="M119.556 52.162l-.637-.34h.637v.34" fill="#BCBAAA"></path><path d="M119.727 51.503h-1.405L64.77 22.923l-53.553 28.58H9.812l54.957-29.328 54.958 29.328" fill="#4E393D"></path><path d="M64.769 17.782L.679 53.426h7.032l57.058-30.45 57.058 30.45h7.03L64.77 17.782" fill="#FF7800"></path></g></svg> </span><h4 class="jsx-3074747040 text-lg mt-3 mb-3 text-secondary">FIND BEST COLLEGE</h4><p class="jsx-3074747040 common-class text-lg text-silver">Learn about the best universities in the <br class="jsx-3074747040"> country.</p></div></a></div><div class="jsx-3074747040 col-4"><a class="jsx-3074747040 text-decoration-none" href="/exams"><div class="jsx-3074747040 wrap p-4 mb-8"><span class="jsx-3074747040 icon"> <svg width="149" height="125" viewBox="0 0 149 125" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M111.389 5.276c-2.276 2.955-3.446 7.37-2.585 10.38l1.718 6.017c.256.894-.23.886.66.63l.218-.062c.89-.255 3.043-.728 2.789-1.622l-1.661-5.816c.694-.346 3.995-1.873 5.825-4.246C121.72 6.189 120.971.01 120.971.01s-6.21.899-9.582 5.266" fill="#52955B"></path><path d="M111.465 16.077s2.422-6.126 8.878-6.126c6.454 0 12.103 5.316 12.103 14.334 0 9.015-6.802 20.095-15.102 20.095-5.879 0-5.879-1.869-5.879-1.869h.232s0 1.87-5.88 1.87c-8.3 0-15.102-11.148-15.102-20.163 0-9.018 5.65-14.301 12.104-14.301 6.456 0 8.878 6.143 8.878 6.143l-.232.017" fill="#B42C2A"></path><path d="M46.282 44.806h102.623v3.873H46.282v-3.873zM46.282 65.277h102.623v3.873H46.282v-3.873z" fill="#59A4A7"></path><path d="M46.282 48.68h102.623v16.597H46.282V48.679z" fill="#FFF"></path><path d="M17.592 97.78h131.314v3.873H17.592V97.78zM17.592 118.25h131.314v3.874H17.592v-3.873z" fill="#ED9660"></path><path d="M17.592 101.653h131.314v16.598H17.592v-16.598z" fill="#FFF"></path><path d="M29.73 69.15h119.033v28.63H29.73V69.15z" fill="#AEC3CD"></path><path d="M6.86 47.562l.004-.752-2.984-9.573-2.94 9.556-.003.753 5.923.016" fill="#EBCEAB"></path><path d="M4.514 39.271l-.634-2.034-.625 2.03 1.26.004" fill="#404341"></path><path d="M6.651 121.35l.007-3.16.002-.003.205-71.869s-.002.791-2.95.782C.942 47.09.943 46.3.943 46.3l-.209 72.66-.003 1.584v.003l-.002.785a2.96 2.96 0 005.923.017" fill="#FACA5F"></path><path d="M6.865 46.319s-.003.792-2.95.782h-.032l-.18 77.203a2.964 2.964 0 002.948-2.954l.01-3.158-.002-.004.206-71.869" fill="#E3B453"></path><path d="M111.581 69.15h24.883v28.63h-24.883V69.15z" fill="#FACA5F"></path><path d="M101.088 69.15h4.602v28.63h-4.602V69.15z" fill="#CEA64D"></path><path d="M118.692 10.093l.115-.17.183.122c-.1.015-.2.03-.298.048" fill="#DB5743"></path><path d="M118.578 10.113l.22-.196.009.006-.115.17-.114.02" fill="#5C8955"></path><path d="M117.344 44.38c-4.292 0-5.45-.997-5.763-1.533-.25.43-1.046 1.157-3.57 1.427L92.637 33.098l25.941-22.985.114-.02c.098-.018.197-.033.298-.048l12.556 8.436c.578 1.709.9 3.65.9 5.804 0 9.015-6.802 20.095-15.102 20.095" fill="#B52D2B"></path><path d="M148.905 48.68H114.07l-5.327-3.874h40.162v3.873M148.905 69.15h-6.674l-5.327-3.873h12.001v3.873" fill="#609798"></path><path d="M148.905 65.277h-12.001L114.07 48.679h34.835v16.598" fill="#E6D3CB"></path><path d="M148.763 73.898l-6.532-4.748h6.532v4.748" fill="#603F42"></path></g></svg> </span><h4 class="jsx-3074747040 text-lg mt-3 mb-3 text-secondary">EXPLORE EXAMS</h4><p class="jsx-3074747040 common-class text-lg text-silver">All information about the exams that will get<br class="jsx-3074747040">you into your dream college.</p></div></a></div><div class="jsx-3074747040 col-4"><a class="jsx-3074747040 text-decoration-none" href="/news"><div class="jsx-3074747040 wrap p-4 mb-8"><span class="jsx-3074747040 icon"> <svg width="116" height="128" viewBox="0 0 116 128" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path fill="#FFF" d="M4.318 3.972h91.897v119.167H4.318z"></path><path d="M109.912 31.778H99.95V5.958C99.95 2.673 97.27 0 93.973 0H6.31C3.015 0 .333 2.673.333 5.958v115.195c0 3.285 2.682 5.958 5.977 5.958h95.633c3.295 0 5.977-2.673 5.977-5.958v-25.82h5.977c1.1 0 1.992-.889 1.992-1.986v-55.61c0-3.286-2.681-5.96-5.977-5.96zM4.318 121.153V5.958c0-1.095.894-1.986 1.992-1.986h87.663c1.099 0 1.993.891 1.993 1.986v115.196c0 .696.121 1.364.342 1.985H6.31a1.992 1.992 0 01-1.992-1.986zm97.625 1.986a1.992 1.992 0 01-1.993-1.986V35.75h4.328a5.913 5.913 0 00-.343 1.986v83.417a1.992 1.992 0 01-1.992 1.986zm5.977-85.403a1.992 1.992 0 013.985 0v53.625h-3.985V37.736z" fill="#AEC3CE"></path><path d="M86.004 11.917H14.28c-1.1 0-1.993.889-1.993 1.986a1.99 1.99 0 001.993 1.986h71.724c1.1 0 1.992-.89 1.992-1.986a1.99 1.99 0 00-1.992-1.986zm-11.954 9.93a1.99 1.99 0 00-1.993-1.986h-43.83c-1.101 0-1.993.89-1.993 1.986a1.99 1.99 0 001.992 1.986h43.831c1.1 0 1.993-.889 1.993-1.986z" fill="#4EDAEC"></path><path d="M86.004 31.778H54.126c-1.1 0-1.992.89-1.992 1.986a1.99 1.99 0 001.992 1.986h31.878c1.1 0 1.992-.89 1.992-1.986a1.99 1.99 0 00-1.992-1.986zm0 7.944h-7.97c-1.1 0-1.992.89-1.992 1.986a1.99 1.99 0 001.992 1.986h7.97c1.1 0 1.992-.889 1.992-1.986a1.99 1.99 0 00-1.992-1.986zm-13.947 1.986a1.99 1.99 0 00-1.992-1.986H54.126c-1.1 0-1.992.89-1.992 1.986a1.99 1.99 0 001.992 1.986h15.94c1.1 0 1.991-.889 1.991-1.986zm13.947 13.903h-7.97c-1.1 0-1.992.89-1.992 1.986a1.99 1.99 0 001.992 1.986h7.97c1.1 0 1.992-.889 1.992-1.986a1.99 1.99 0 00-1.992-1.986zm-33.87 1.986a1.99 1.99 0 001.992 1.986h15.94c1.1 0 1.991-.889 1.991-1.986a1.99 1.99 0 00-1.992-1.986H54.126c-1.1 0-1.992.89-1.992 1.986zm33.87-9.93H66.08c-1.1 0-1.992.889-1.992 1.986a1.99 1.99 0 001.992 1.986h19.924c1.1 0 1.992-.89 1.992-1.986a1.99 1.99 0 00-1.992-1.986zm-27.893 0h-3.985c-1.1 0-1.992.889-1.992 1.986a1.99 1.99 0 001.992 1.986h3.985c1.1 0 1.992-.89 1.992-1.986a1.99 1.99 0 00-1.992-1.986zm27.893 15.889H54.126c-1.1 0-1.992.889-1.992 1.986a1.99 1.99 0 001.992 1.986h31.878c1.1 0 1.992-.89 1.992-1.986a1.99 1.99 0 00-1.992-1.986zM46.157 79.444H14.28c-1.1 0-1.993.89-1.993 1.987a1.99 1.99 0 001.993 1.986h31.877c1.1 0 1.992-.89 1.992-1.986a1.99 1.99 0 00-1.992-1.987zM86.004 71.5H14.28c-1.1 0-1.993.89-1.993 1.986a1.99 1.99 0 001.993 1.986h71.724c1.1 0 1.992-.89 1.992-1.986a1.99 1.99 0 00-1.992-1.986zM46.157 87.389h-7.97c-1.1 0-1.992.89-1.992 1.986a1.99 1.99 0 001.993 1.986h7.97c1.1 0 1.991-.89 1.991-1.986a1.99 1.99 0 00-1.992-1.986zM14.28 91.36h15.938c1.1 0 1.993-.89 1.993-1.986a1.99 1.99 0 00-1.993-1.986H14.28c-1.1 0-1.993.89-1.993 1.986a1.99 1.99 0 001.993 1.986zm31.877 11.917h-7.97c-1.1 0-1.992.89-1.992 1.986a1.99 1.99 0 001.993 1.986h7.97c1.1 0 1.991-.89 1.991-1.986a1.99 1.99 0 00-1.992-1.986zM14.28 107.25h15.938c1.1 0 1.993-.89 1.993-1.986a1.99 1.99 0 00-1.993-1.986H14.28c-1.1 0-1.993.89-1.993 1.986a1.99 1.99 0 001.993 1.986zm31.877-11.917H26.234c-1.1 0-1.993.89-1.993 1.986a1.99 1.99 0 001.993 1.987h19.923c1.1 0 1.992-.89 1.992-1.987a1.99 1.99 0 00-1.992-1.986zM14.28 99.306h3.984c1.1 0 1.993-.89 1.993-1.987a1.99 1.99 0 00-1.993-1.986H14.28c-1.1 0-1.993.89-1.993 1.986a1.99 1.99 0 001.993 1.987zm31.877 11.916H14.28c-1.1 0-1.993.89-1.993 1.986a1.99 1.99 0 001.993 1.986h31.877c1.1 0 1.992-.889 1.992-1.986a1.99 1.99 0 00-1.992-1.986z" fill="#CECECE" opacity="0.345"></path><path d="M14.28 67.528h27.892c1.1 0 1.993-.89 1.993-1.986V33.764a1.99 1.99 0 00-1.993-1.986H14.28c-1.1 0-1.993.89-1.993 1.986v31.778a1.99 1.99 0 001.993 1.986z" fill="#FC0"></path><path d="M86.004 79.444H58.11c-1.1 0-1.992.89-1.992 1.987v31.777a1.99 1.99 0 001.992 1.986h27.893c1.1 0 1.992-.889 1.992-1.986V81.431a1.99 1.99 0 00-1.992-1.987z" fill="#B896CD"></path></g></svg> </span><h4 class="jsx-3074747040 text-lg mt-3 mb-3 text-secondary">GET LATEST UNIVERSITY RANKINGS</h4><p class="jsx-3074747040 common-class text-lg text-silver">Stay informed about the latest happenings<br class="jsx-3074747040">to map your higher studies.</p></div></a></div><div class="jsx-3074747040 col-4"><a class="jsx-3074747040 text-decoration-none" href="/reviews"><div class="jsx-3074747040 wrap p-4 mb-8"><span class="jsx-3074747040 icon"> <svg width="109" height="129" viewBox="0 0 109 129" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M105.667 118.256c.02 3.314-3.445 6.856-6.753 6.878l-87.94.533c-3.312.014-6.815-3.484-6.837-6.799L3.444 3.615 104.972 3l.695 115.256" stroke="#DEDEDE" stroke-width="5.333" fill="#FFF"></path><path fill="#8C99FF" d="M17.666 17.222h74.537v39.467H17.666z"></path><path d="M68.528 26.99a2.036 2.036 0 00-2.143-.777l-25.843 6.549a2.059 2.059 0 00-.552 3.753l5.465 3.301v7.241c0 .274.156.524.4.645.245.12.536.09.75-.079l5.126-4.016 4.21 2.544a2.036 2.036 0 002.787-.685l9.893-16.185a2.065 2.065 0 00-.093-2.291zm-11.66 16.887l-6.408-3.87 6.5-5.64a.25.25 0 00.051-.315.246.246 0 00-.3-.104l-9.902 3.854L42 34.897l24.087-6.104-9.22 15.084z" fill="#FFF"></path><g transform="translate(17.287 70.2)"><ellipse fill="gray" cx="7.986" cy="8" rx="7.986" ry="8"></ellipse><path fill="gray" d="M21.296 2.133h54.306v5.333H21.296z"></path><path fill="#BEBEBE" d="M21.296 11.733h54.306v2.133H21.296z"></path></g><g opacity="0.518" transform="translate(17.287 92.6)"><ellipse fill="gray" cx="7.986" cy="8" rx="7.986" ry="8"></ellipse><path fill="#BEBEBE" d="M21.296 3.2h54.306v2.133H21.296zM21.296 9.6h54.306v2.133H21.296z"></path></g></g></svg> </span><h4 class="jsx-3074747040 text-lg mt-3 mb-3 text-secondary">TOP REVIEWS</h4><p class="jsx-3074747040 common-class text-lg text-silver">Know what others have to say about the<br class="jsx-3074747040">colleges you are searching.</p></div></a></div><div class="jsx-3074747040 col-4"><a class="jsx-3074747040 text-decoration-none" href="/courses"><div class="jsx-3074747040 wrap p-4 mb-8"><span class="jsx-3074747040 icon"> <svg width="110" height="128" viewBox="0 0 110 128" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M16.238 27.385h78.576V.4H16.238v26.986z" fill="#DDD"></path><path d="M16.238.399L.791 28.059 42.43 83.38l28.207-4.048L16.238.4z" fill="#AEC3CD"></path><path d="M94.14.399L39.743 79.33 67.95 83.38l41.637-55.32L94.14.4z" fill="#AEC3CD"></path><path d="M86.417 96.407c0 17.326-13.98 31.37-31.228 31.37-17.247 0-31.229-14.044-31.229-31.37s13.982-31.37 31.23-31.37c17.247 0 31.227 14.044 31.227 31.37" fill="#E7AE3B"></path><path d="M82.052 96.407c0 14.903-12.027 26.986-26.862 26.986-14.838 0-26.863-12.083-26.863-26.986 0-14.904 12.025-26.985 26.863-26.985 14.835 0 26.862 12.081 26.862 26.985" fill="#FFE681"></path><path d="M55.19 79.988l5.31 10.808 11.875 1.735-8.593 8.414 2.03 11.88-10.622-5.61-10.623 5.61 2.03-11.88-8.593-8.414 11.874-1.735 5.312-10.808z" fill="#E7AE3B"></path></g></svg> </span><h4 class="jsx-3074747040 text-lg mt-3 mb-3 text-secondary">TOP COURSES</h4><p class="jsx-3074747040  common-class text-lg text-silver">Learn about various mix of courses offered across the country.</p></div></a></div><div class="jsx-3074747040 col-4"><a class="jsx-3074747040 text-decoration-none" href="/admission"><div class="jsx-3074747040 wrap p-4 mb-8"><span class="jsx-3074747040 icon"> <svg width="130" height="115" viewBox="0 0 130 115" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M48.617 9.545c0 6.965-6.852 10.41-1.615 10.41h82.756V9.458c0-5.221-3.074-8.458-8.313-8.458H47.002c-5.237 0 1.615 1.233 1.615 8.458v.087" fill="#AEC3CD"></path><path d="M108.7 2.686H21.195c-5.086 0-11.703 5.173-11.703 11.8v97.938h97.17c11.484 0 10.518-13.762 10.518-17.958V2.686h-8.48" stroke="#E7E7E7" stroke-width="4.222" fill="#FFF"></path><path d="M82.365 105.95c0 6.967 8.573 8.16 3.332 8.16H11.256c-5.24 0-11.034-2.942-11.034-8.16v-.09c0-5.215 5.794-9.708 11.034-9.708h74.441c5.24 0-3.332 2.489-3.332 9.708v.09" fill="#AEC3CD"></path><path d="M103.338 51.616l-8.036-6.234-8.036 6.234V23.32h16.072v28.296" fill="#BE4D40"></path><path d="M107.935 24.395c0 6.76-5.5 12.237-12.284 12.237-6.784 0-12.284-5.478-12.284-12.237 0-6.753 5.5-12.232 12.284-12.232 6.783 0 12.284 5.479 12.284 12.232" fill="#FACA5F"></path><path d="M101.39 68.896H24.32c-.277 0-.5-.86-.5-1.922 0-1.062.223-1.921.5-1.921h77.071c.277 0 .5.86.5 1.921 0 1.062-.223 1.922-.5 1.922M101.39 82.385H24.32c-.277 0-.5-.864-.5-1.926 0-1.058.223-1.922.5-1.922h77.071c.277 0 .5.864.5 1.922 0 1.062-.223 1.926-.5 1.926" fill="#FE7800"></path></g></svg> </span><h4 class="jsx-3074747040 text-lg mt-3 mb-3 text-secondary">GET ADMISSION</h4><p class="jsx-3074747040  common-class text-lg text-silver">Find information about the final steps<br class="jsx-3074747040">to colleges and courses.</p></div></a></div>		
					</div>
			
			

		<?php endif; ?>
		</div>
		
	</div>
	<?php include 'const/bootstrap_script.php'; ?>
</body>
</html>
