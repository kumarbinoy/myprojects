<?php 
include ('connect/db.php');
if (isset($_POST['submit'])){
  $PRJ_ID=$_POST['PRJ_ID'];
	 $sql= "select * from project where PRJ_ID='$PRJ_ID'";
  $rn=mysqli_query($conn,$sql);
 if($rn)
         {
            if(mysqli_num_rows($rn)>0)
            {
				$rows = mysqli_fetch_assoc($rn);
 
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
				<li class="current_page_item"><a href="adminstudent.php">Back</a></li>
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
								    <form method="post" action="adminprojectupdate.php">
								        <table border="0">
								            <tr>
								                <td height="30" style="font-size: 20px;">Project Id: </td>
								                <td><input type="text" name="PRJ_ID" value="<?php echo $rows['PRJ_ID']; ?>"required="required" /></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Project Name: </td>
								                <td><input type="text" name="PRJ_NAME" required="required" value="<?php echo $rows['PRJ_NAME']; ?>" /></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Project Duration: </td>
								                <td><input type="text" name="PRJ_DURATION" required="required" value="<?php echo $rows['PRJ_DURATION']; ?>"/></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Project Location: </td>
								                <td><input type="text" name="PRJ_LOCATION" required="required" value="<?php echo $rows['PRJ_LOCATION']; ?>"/></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Project Guide Id: </td>
								                <td><input type="text" name="PRJ_I_ID" required="required" value="<?php echo $rows['PRJ_I_ID']; ?>"/></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Project Year: </td>
								                <td><input type="text" name="PRJ_YEAR" required="required" value="<?php echo $rows['PRJ_YEAR']; ?>"/></td>
								            </tr>
								            <tr>
								                <td>
								                    <center>
								                        <button type="submit" name="update" style="border-radius: 150px 50px 150px 50px;">Update</button>
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
	<p>Untitled. All rights reserved. Design by Binoy and Jay</p>
</div>
<!-- end #footer -->
</body>
</html>

            
          
<?php
    }}}
 include('connect/db.php');
if (isset($_POST['update'])) {
$PRJ_ID=$_POST['PRJ_ID'];
$PRJ_NAME=$_POST['PRJ_NAME'];
$PRJ_DURATION=$_POST['PRJ_DURATION'];
$PRJ_LOCATION=$_POST['PRJ_LOCATION'];
$PRJ_I_ID=$_POST['PRJ_I_ID'];
$PRJ_YEAR=$_POST['PRJ_YEAR'];
    
$sql = "UPDATE project SET PRJ_ID='$PRJ_ID', PRJ_NAME='$PRJ_NAME',PRJ_DURATION='$PRJ_DURATION',PRJ_LOCATION='$PRJ_LOCATION', PRJ_I_ID='$PRJ_I_ID' PRJ_YEAR='$PRJ_YEAR' WHERE PRJ_ID='$PRJ_ID'";
$run = mysqli_query($conn,$sql);
if ($run) {
echo '<script type="text/javascript">
    alert("Updation successfull.....!!!! ");
    window.location = "adminproject.php";
</script>';
}else
{
echo '<script type="text/javascript">
    alert("Updation unsuccessfull.....!!!! Some error occured ");
    window.location = "adminproject.php";
</script>';
}
}
?>