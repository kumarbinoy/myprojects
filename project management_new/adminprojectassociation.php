<?php
 include('connect/db.php');
if (isset($_POST['submit'])) {
$O_P_ID=$_POST['O_P_ID'];
$O_PRJ_ID=$_POST['O_PRJ_ID'];
    $sql2="SELECT PRJ_ID from project where PRJ_ID='$O_PRJ_ID'";
    $$rn1 = mysqli_query($conn,$sql2);
    $sql3="SELECT P_ID from programme where P_ID='$O_P_ID'";
    $$rn2 = mysqli_query($conn,$sql3);
    if((mysqli_num_rows($rn1)<=0) && (mysqli_num_rows($rn2)<=0))
    {
        echo '<script type="text/javascript">alert("Invalid project id ..!!!! ");   window.location="adminprojectassociation.php";</script>';
    }
    else
    {

    $sql= "SELECT * FROM offers_project where O_PRJ_ID='$O_PRJ_ID' AND O_P_ID='$O_P_ID'";
	$rn = mysqli_query($conn,$sql);
	if (mysqli_num_rows($rn)>0) {
		echo '<script type="text/javascript">alert("Error ! Data already exists.....!!!! ");   window.location="adminprojectassociation.php";</script>';
	}else{
    
$sql1="INSERT into offers_project (O_PRJ_ID,O_P_ID) values('$O_PRJ_ID','$O_P_ID')";
$run=mysqli_query($conn,$sql1);
if($run) {
echo '<script type="text/javascript">
    alert("Insertion successfull.....!!!! ");
    window.location = "adminproject.php";
</script>';
}else
{
echo '<script type="text/javascript">
    alert("Insertion unsuccessfull.....!!!! Some error occured ");
    window.location = "adminproject.php";
</script>';
}
}
}
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
                                            <td height="30" style="font-size: 20px;">Name of programme:</td>
                                            <td><label>
                                                    <select name="O_P_ID" required>
                                                        <option value="" disabled selected>--Select Programme--</option>

                                                        <?php
                                                $sql = "SELECT P_ID FROM programme";
                                                $result = mysqli_query($conn,$sql);
                                                  while($row = mysqli_fetch_array($result))
                                                  {
                                              ?>
                                                    <option value="<?php echo($row['P_ID']);?>"><?php echo($row['P_ID']);?></option>
                                         <?php 
                                              } 
                                              ?>
                                                    </select>
                                                </label></td>
                                        </tr>                        
								            <tr>
								                <td height="30" style="font-size: 20px;">Project Id: </td>
								                <td><input type="text" name="O_PRJ_ID" required="required" /></td>
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
