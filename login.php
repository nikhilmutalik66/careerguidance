<?php
if(isset($_GET['submit'])){
$user=$_GET['user'];
$pass=$_GET['pass'];

$db_host='fdb22.awardspace.net'; //Should contain the "Database Host" value
$db_name='3161813_career'; //Should contain the "Database Name" value
$db_user='3161813_career'; //Should contain the "Database User" value
$db_pass='Rama1234'; //Should contain the "Database Password" value


$conn = new mysqli($db_host, $db_name, $db_pass, $db_user);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM login WHERE uname='$user' and pass='$pass'";
$result1 = $conn->query($sql);

if ($result1->num_rows > 0) {
//header('Location: http://www.careerguidance.dx.am/admin.php');
//echo "<script>location.href = 'http://careerguidance.dx.am/admin.php';</script>";
//echo "<script> window.location.assign('admin.php'); </script>";
//echo "Success";
header("Location: admin.php"); 
 
} else {
echo "no results1";
}
}
?>


<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Foundation for Sites</title>
		<link rel="stylesheet" href="foundation/css/foundation.css">
		<link rel="stylesheet" href="foundation/css/app.css">
		<link rel="stylesheet" href="foundation/mycss/style.css">
		<link href="fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
		<script defer src="fontawesome/js/all.js"></script> <!--load all styles -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<link rel="stylesheet" href="foundation/css/foundation.css">
		<link rel="stylesheet" href="foundation/css/app.css">
		<link rel="stylesheet" href="foundation/mycss/style.css">
		<link rel="stylesheet" href="foundation/mycss/menu.css">
		<link rel="stylesheet" href="w3/design.css">
		<link rel="stylesheet" href="w3/w3.css">
		<link rel="stylesheet" href="fontawesome/css/fontawesome.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="foundation/js/vendor/jquery.js"></script>
		<script src="foundation/js/vendor/what-input.js"></script>
		<script src="foundation/js/vendor/foundation.js"></script>
		<script src="foundation/js/app.js"></script>
		<script src="w3/my.js"></script>
		<style type="text/css">
		
		@media screen and (max-width: 600px) {
		#oop {
		visibility: hidden;
		clear: both;
		float: left;
		
		display: none;
		}
		}
		</style>
	</head>
	<body>
		<div class="w3-top">
			
			<div class="w3-container w3-border" style="background-color: rgb(132, 136, 138); color: rgb(255, 255, 255); ">
				<center>
				<p style="align-content: flex-start; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;font-stretch: expanded; font-size: 45px">
					🅲🅰🆁🅴🅴🆁 🅶🆄🅸🅳🅰🅽🅲🅴
					
				</p>
				
				</center>
				
			</div>
			
			<style>
			</style>
			<!-- TOP NAVIGATION-BAR START -->
			<div class="container" id="opp">
				<div class="navbar w3-border-bottom w3-gray">
					<div class="dropdown">
						<div  >
							<button class="dropbtn" onclick="location.href='index.php'">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							Home
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</button>
						</div>
					</div>
					<div class="dropdown ">
						<button class="dropbtn">&nbsp;&nbsp;&nbsp;&nbsp; Diploma Courses &nbsp;&nbsp;&nbsp;&nbsp;</button>
						<div class="dropdown-content" style="width: 15%;">
							<a href="DiplomaAquaculture.php">Diploma Aquaculture</a>
							<a href="DiplomainDiary.php"> Diploma in Diary Technology</a>
							<a href="DiplomainChemicalEngineering.php">Diploma in Chemical Engineering </a>
							<a href="DiplomainMechatronics.php">Diploma in Mechatronics </a>
							<a href="DiplomainAeronauticalEngineering.php">Diploma in Aeronautical Engineering </a>
						</div>
					</div>
					<div class="dropdown ">
						<button class="dropbtn">&nbsp;&nbsp; Engineering Courses &nbsp;&nbsp;</button>
						<div class="dropdown-content" style="width: 15%;">
							<a href="BiomedicalEngineering.php">Biomedical Engineering</a>
							<a href="Aeronoticalenginnering.php">Aeronotical enginnering</a>
							<a href="ComputerScienceEngineering.php">Computer Science Engineering</a>
							<a href="ElectronicsandCommunicationEngineering.php">Electronics & Communication Engineering</a>
						</div>
					</div>
					<div class="dropdown ">
						<button class="dropbtn">Post-graduation Courses</button>
						<div class="dropdown-content" style="width: 15%;">
							<a href="Tourism&Travel.php">Turisum and Travel management</a>
							<a href="HumanResources.php">Human Resource</a>
							<a href="Tally.php">Tally</a>
							<a href="AutoCAD.php">Auto CAD </a>
							<a href="WebDesigning.php">Web Designing</a>
							<a href="journalism.php">journalisam</a>
						</div>
					</div>
					<div class="dropdown ">
						<button class="dropbtn"> Other Courses </button>
						<div class="dropdown-content" style="width: 15%;">
							<a href="arts.php" >Arts</a>
							<a href="Commerce.php">Commerce</a>
							<a href="Science.php">Science</a>
						</div>
					</div>
					<div class="dropdown ">
						<button class="dropbtn" type="submit" onclick="location.href='query.php'">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Any Query
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</button>
					</div>
				</div>
			</div>
		</div>
		<div id="log" class="callout" style="margin-top: 10%;">
			<form action="" method="get" data-abide novalidate>
				<div id="ftext">
					<center><b><h1> <span class="title" style="color:grey;">LOGIN </span></h1></b></center>
				</div>
				
				<div class="callout">
					<div data-abide-error class="alert callout" style="display: none;">
						<p><i class="fi-alert close"></i> There are some errors in your form.</p>
					</div>
					<div class="row">
						<div class="columns small-12">
							<label><center><h6><b></b> </h6></center><input type="text" placeholder="Username" aria-describedby="example1Hint1" aria-errormessage="example1Error1" required pattern="[A-za-z]" name="user">
							<span class="form-error" id="example1Error1">
								Enter correct user name
							</span>
						</label>
					</div>
					
					<div class="columns small-12">
						<label><center><h6><b></b> </h6></center>
							<input type="password" id="password" placeholder="Password" aria-errormessage="example1Error2" name="pass" required >
							<span class="form-error" id="example1Error2">
								I'm required!
							</span>
						</label>
					</div>
					
					<div class="columns small-12">
						<button type="submit" class="button primary expanded float-center" name="submit">Login</button>
					</div>
					
				</div>
			</div>
		</div>
	</form>
	
</div>
<script src="foundation/js/vendor/jquery.js"></script>
<script src="foundation/js/vendor/what-input.js"></script>
<script src="foundation/js/vendor/foundation.js"></script>
<script src="foundation/js/app.js"></script>
</body>
</html>