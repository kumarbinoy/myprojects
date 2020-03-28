
   <?php
include('connect/db.php');
   if (isset($_POST['submit'])) {
    $key=$_POST['key'];
    
    $sql1="SELECT * from allocation where A_PRJ_ID='$key' OR A_ROLL_NO='$key'";
    $run=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($run)>0){
        $rows = mysqli_fetch_assoc($run);
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
				<li class="current_page_item"><a href="adminprojectarchive.php">Back</a></li>
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
                                <h2>Project Details</h2>
								    <form method="post" action="">
								        <table border="0">
								            <tr>
								                <td height="30" style="font-size: 20px;">Project Id: </td>
								                <td><input type="text" name="" value="<?php echo $rows['A_PRJ_ID']; ?>" readonly /></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Student Rollno: </td>
								                <td><input type="text" name="" required="required" value="<?php echo $rows['A_ROLL_NO']; ?>"readonly /></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Start Date: </td>
								                <td><input type="text" name="" required="required" value="<?php echo $rows['START_DATE']; ?>"readonly/></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">End Date: </td>
								                <td><input type="text" name="" required="required" value="<?php echo $rows['END_DATE']; ?>"readonly/></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Location of file: </td>
								                <td><input type="text"  size="60" name="" required="required" value="<?php echo $rows['FILE']; ?>"readonly/></td>
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
	<p>Untitled. All rights reserved. Design by Binoy and Jay</p>
</div>
<!-- end #footer -->
</body>
</html>


<?php
    }
}
?>