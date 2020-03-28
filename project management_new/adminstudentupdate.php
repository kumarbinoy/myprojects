<?php 
include ('connect/db.php');
if (isset($_POST['submit']))
{
  $ROLL_NO=$_POST['ROLL_NO'];
	 $sql= "select * from student where ROLL_NO='$ROLL_NO'";
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
								    <form method="post" action="">
								        <table border="0">
								            <tr>
								                <td height="30" style="font-size: 20px;">First Name: </td>
								                <td><input type="text" name="S_F_NAME" value="<?php echo $rows['S_F_NAME']; ?>"required="required" /></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Last Name: </td>
								                <td><input type="text" name="S_L_NAME" required="required" value="<?php echo $rows['S_L_NAME']; ?>" /></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Roll number: </td>
								                <td><input type="text" name="ROLL_NO" required="required" value="<?php echo $rows['ROLL_NO']; ?>"/></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Semester number</td>
								                <td><select name="SEM_NO" required>
								                        <option value="<?php echo $rows['SEM_NO']; ?>"><?php echo $rows['SEM_NO']; ?></option>
								                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
								                    </select></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">CGPA: </td>
								                <td><input type="text" name="CGPA" required="required" value="<?php echo $rows['CGPA']; ?>"/></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Email: </td>
								                <td><input type="email" name="S_EMAIL" required="required" value="<?php echo $rows['S_EMAIL']; ?>"/></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Password: </td>
								                <td><input type="password" name="S_PASSWORD" required="required" value="<?php echo $rows['S_PASSWORD']; ?>"/></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Department ID: </td>
								                <td><input type="text" name="S_D_ID" required="required" value="<?php echo $rows['S_D_ID']; ?>" /></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Program ID: </td>
								                <td><input type="text" name="S_P_ID"  value="<?php echo $rows['S_P_ID']; ?>" /></td>
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
$S_F_NAME=$_POST['S_F_NAME'];
$S_L_NAME=$_POST['S_L_NAME'];
$ROLL_NO=$_POST['ROLL_NO'];
$SEM_NO=$_POST['SEM_NO'];
$CGPA=$_POST['CGPA'];
$S_EMAIL=$_POST['S_EMAIL'];
$S_PASSWORD=$_POST['S_PASSWORD'];
$S_D_ID=$_POST['S_D_ID'];
$S_P_ID=$_POST['S_P_ID'];

$sql = "UPDATE student SET S_F_NAME='$S_F_NAME', S_L_NAME='$S_L_NAME',ROLL_NO='$ROLL_NO',SEM_NO='$SEM_NO' , CGPA='$CGPA', S_EMAIL='$S_EMAIL', S_PASSWORD='$S_PASSWORD', S_D_ID='$S_D_ID', S_P_ID='$S_P_ID' WHERE ROLL_NO='$ROLL_NO'";
$run = mysqli_query($conn,$sql);
if ($run) {
echo '<script type="text/javascript">
    alert("Updation successfull.....!!!! ");
    window.location = "adminstudent.php";
</script>';
}else
{
echo '<script type="text/javascript">
    alert("Updation unsuccessfull.....!!!! Some error occured ");
    window.location = "adminstudent.php";
</script>';
}
}
?>