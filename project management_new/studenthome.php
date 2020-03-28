<?php session_start();
include('connect/db.php');
$S_EMAIL=$_SESSION['S_EMAIL'];
$S_PASSWORD=$_SESSION['S_PASSWORD'];
$sql="select * from student where S_EMAIL='$S_EMAIL'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
 $row['S_F_NAME'];
    $row['ROLL_NO'];
$_SESSION['S_F_NAME'] = $row['S_F_NAME'];
$_SESSION['ROLL_NO'] = $row['ROLL_NO'];
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
				<li class="current_page_item"><a href="studenthome.php">Home</a></li>
                 <li><a href="studentprojects.php">Projects</a></li>
                 <li><a href="studentprojectupdate.php">Selected Projects</a></li>
                 <li><a href="studentprojectsubmit.php">Submit Project</a></li>
                 <li><a href="logout.php">Logout</a></li>
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
							<h2 class="title">Welcome to the portal<b> <?php echo $_SESSION['S_F_NAME']; ?></b></h2>
							<div class="entry">
								<img src="images/student2.jpg" width="580" height="350"  />
							</div>
						</div>
						
						<div class="post">
							<div class="entry">
							
							</div>
						</div>
						<div style="clear: both;">&nbsp;</div>
					</div>
					<!-- end #content -->
					<div id="sidebar">
						<ul>
							<li>
							<center>
								<h3><b>Project detail</b></h3><br>
								   <?php
                                echo $_SESSION['ROLL_NO'];
                                $sql3="SELECT A_PRJ_ID from allocation where A_ROLL_NO='".$_SESSION['ROLL_NO']."'";
                                $run3=mysqli_query($conn,$sql3);
                                    if(mysqli_num_rows($run3)>0)
                                    {
                                        while($row=mysqli_fetch_array($run3)){
                                ?>
								<p><b>Project Id Allocated to you is <?php echo($row['A_PRJ_ID']);?><br>You can start your project now. </b></p>
								<?php
                                    }}
                                else{
                                ?>
                                <marquee><p><b>Project yet to be allocated </b></p></marquee>
                                <?php
                                    }
                                ?> 
								</center>
							</li>
						</ul>
					</div>
					<!-- end #sidebar -->
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Untitled. All rights reserved. Design by Binoy and Jay</p>
</div>
<!-- end #footer -->
</body>
</html>