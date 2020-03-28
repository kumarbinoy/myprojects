<?php session_start();
include('connect/db.php');
$adm_email=$_SESSION['adm_email'];
$adm_password=$_SESSION['adm_password'];
$sql="select * from admin where adm_email='$adm_email'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
 $row['adm_name'];
$_SESSION['adm_name'] = $row['adm_name'];
}
?>
<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Project Management System</title>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css' />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">Project Management System</a></h1>
				<p>Come and get projects</p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="adminhome.php">HOME</a></li>
                 <li><a href="adminproject.php">Projects</a></li>
				<li><a href="adminstudent.php">Student</a></li>
				<li><a href="admininstructor.php">Instructor</a></li>
				<li><a href="adminallocatedproj.php">Project Allocation</a></li>
				<li><a href="adminprojectarchive.php">Archives</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>     
	</div>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="page-content">
					<div id="content">
						<div class="post">
							<h2 class="title">Welcome to the portal<b> <?php echo $_SESSION['adm_name']; ?></b></h2>
							<div class="entry">
								<img src="images/admin.jpg" width="565" height="250"  />
							</div>
						</div>
						
						<div class="post">
							<div class="entry">
								<p><b>YOU ARE AUTHORISED TO INSERT, UPDATE and ALLOCATE projects.<br>You can add STUDENTS and INSTRUCTORS to the portal. </b></p>
							</div>
						</div>
						<div style="clear: both;">&nbsp;</div>
					</div>
					<!-- end #content -->
					
					<!-- end #sidebar -->
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Untitled. All rights reserved. Design by Binoy and jay</p>
</div>
<!-- end #footer -->
</body>
</html>