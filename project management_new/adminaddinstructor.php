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
				<li class="current_page_item"><a href="adminproject.php">Back</a></li>

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
								<center>
                                <h2>Fill the details</h2>
								    <form method="post" action="">
								        <table border="0">
								             <tr>
								                <td height="30" style="font-size: 20px;">Instructor Id: </td>
								                <td><input type="text" name="I_ID" required="required" /></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">First Name: </td>
								                <td><input type="text" name="I_F_NAME" required="required"  /></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Last Name: </td>
								                <td><input type="text" name="I_L_NAME" required="required" /></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Instructor Email: </td>
								                <td><input type="email" name="I_EMAIL" required="required" /></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Instructor department Id: </td>
								                <td><input type="text" name="I_D_ID" required="required"/></td>
								            </tr>
								            <tr>
								                <td>
								                    <center>
								                        <button type="submit" name="submit" style="border-radius: 150px 50px 150px 50px;">Submit</button>
								                    </center>
								                </td>
								            </tr>
								        </table>
								    </form>
								</center>
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
    </div>
<div id="footer">
	<p>Untitled. All rights reserved. Design by Binoy and jay</p>
</div>
<!-- end #footer -->
</body>
</html>
<?php
 include('connect/db.php');
if (isset($_POST['submit'])) {
$I_ID=$_POST['I_ID'];
$I_F_NAME=$_POST['I_F_NAME'];
$I_L_NAME=$_POST['I_L_NAME'];
$I_EMAIL=$_POST['I_EMAIL'];
$I_D_ID=$_POST['I_D_ID'];

    $sql= "SELECT * FROM instructor where I_ID='$I_ID'";
	$rn = mysqli_query($conn,$sql);
	if (mysqli_num_rows($rn)>0) {
		echo '<script type="text/javascript">alert("Error ! Instructor id already exists.....!!!! ");   window.location="adminaddproject.php";</script>';
	}else{
    
$sql1="INSERT into instructor values('$I_ID','$I_F_NAME','$I_L_NAME','$I_EMAIL','$I_D_ID')";
$run=mysqli_query($conn,$sql1);
if($run) {
echo '<script type="text/javascript">
    alert("Insertion successfull.....!!!! ");
    window.location = "admininstructor.php";
</script>';
}else
{
echo '<script type="text/javascript">
    alert("Insertion unsuccessfull.....!!!! Some error occured ");
    window.location = "admininstructor";
</script>';
}
}
}
?>