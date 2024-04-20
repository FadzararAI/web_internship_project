<!DOCTYPE html>
<html lang="en">
<head>
	<title>Internship website</title>
	<meta name="keywords" content="Internship, Application, Job, Salary, Employment">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<div class="hero">
<nav class="top-nav">
	<ul class="menu-left">
		<li><a href="#">
			<div class="nav-logo">
			a
			</div>
		</a></li>
		<li><a href="index.php">Home</a></li>
		<li><a href="companies.php">Companies</a></li>
		<li><a href="jobsearch.php">Find Jobs</a></li>
	</ul>
	<ul class="menu-right">
		<li><a href="sign-in.php">Employers</a></li>
		<li><a>|</a></li>
		<li><a href="sign-in.php">Sign In</a></li>
	</ul>
</nav>
<h1>Find The Perfect Job For You</h1>
<form method="GET">
	<div class="searchers">
		<input type="text" id="jobsearch" name="jname" placeholder="Search for jobs.." title="Search a job title" required>
		<input type="text" id="locsearch" name="jloc" placeholder="Search for locations.." title="Search a job location">
		<button type="submit">Find Job</button>
	</div>
</form>
</div>

<div class="cate">
<h1>Explore By Category</h1>
</div>
<?php
  if(!isset($_GET["jloc"]) && isset($_GET["jname"])){
    $jobname = $_GET["jname"];
    echo "<script>document.alert('location not set')</script>";
    
  }
?>
<div class="joblists">
	<div class="circle-container">
          <div class="circle">
            <img src="./images/icons/technology_bw.png">
          </div>
          <font>Technology</font>
        </div>
        <div class="circle-container">
          <div class="circle">
            <img src="./images/icons/finance.png">
          </div>
          <font>Finance</font>
        </div>
        <div class="circle-container">
          <div class="circle">
            <img src="./images/icons/administration.png">
          </div>
          <font>Administration</font>
        </div>
        <div class="circle-container">
          <div class="circle">
            <img src="./images/icons/marketing.png">
          </div>
          <font>Marketing</font>
        </div>
        <div class="circle-container">
          <div class="circle">
            <img src="./images/icons/hr.png">
          </div>
          <font>Human Resource</font>
        </div>
</div>
    <!-- footer start -->
    <footer>
      <div class="top-container">
        <p class="titles">Internship <br />Website</p>
        <div class="box-navigation">
          <div class="navigation">
            <p>Internship website</p>
            <p>Contact</p>
            <p>Help</p>
          </div>
          <div class="navigation">
            <p>For Jobseekers</p>
            <p>Salaries</p>
            <p>Recent Jobs</p>
          </div>
          <div class="navigation">
            <p>For Employers</p>
            <p>Post A Job</p>
            <p>Market Insights</p>
          </div>
        </div>
      </div>
      <div class="bottom-container">
        <div class="social-media-icons">
          <a href="">
            <img src="./images/icons/image 8.png" alt="image" />
          </a>
          <a href="">
            <img src="./images/icons/instagram.png" alt="image" />
          </a>
          <a href="">
            <img src="./images/icons/facebook.png" alt="image" />
          </a>
          <a href="">
            <img src="./images/icons/x.png" alt="image" />
          </a>
          <a href="">
            <img
              src="./images/icons/youtube.png"
              alt="image"
              width="34"
              height="34"
            />
          </a>
        </div>
        <p>Copyright © 2024 Internship website. All Rights Reserved.</p>
      </div>
    </footer>
    <!-- footer end -->
</body>
</html>
