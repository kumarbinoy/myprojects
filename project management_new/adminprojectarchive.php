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
				<li class="current_page_item"><a href="adminhome.php">BACK</a></li>
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
						</div>
						
						<div class="post">
							<div class="entry">
								<center>
								<h2>Enter the detail to search for project</h2>
								    <form method="post" action="adminprojectarchiveretrival.php">
								        <table border="0">
								            <tr>
								                <td height="30" style="font-size: 20px;">Project Id or Student Roll no: </td>
								                <td><input type="text" name="key" required="required" /></td>
								            </tr>
								            <tr>
								                <td>
								                    <center>
								                        <button type="submit" name="submit" style="border-radius: 150px 50px 150px 50px;">Search</button>
								                    </center>
								                </td>
								            </tr>
								        </table>
								    </form>
								</center>
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