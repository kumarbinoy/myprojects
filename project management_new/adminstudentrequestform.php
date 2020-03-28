<?php
include('connect/db.php');
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
				<li class="current_page_item"><a href="adminallocatedproj.php">BACK</a></li>
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
								    <form method="post" action="adminstudentrequest.php">
								        <table border="0">
                                          
                                          <tr>
                                              <td height="30" style="font-size: 20px;">Name of Department:</td>
                                              <td><label>
                                                      <select name="D_ID" required>
                                                          <option value="" disabled selected>--Select Department--</option>

                                                          <?php
                                                $sql = "SELECT D_ID FROM department";
                                                $result = mysqli_query($conn,$sql);
                                                  while($row = mysqli_fetch_array($result))
                                                  {
                                              ?>
                                                          <option value="<?php echo($row['D_ID']);?>"><?php echo($row['D_ID']);?></option>
                                                          <?php 
                                              } 
                                              ?>
                                                      </select>
                                                  </label></td>
                                          </tr>
                                          <tr>
                                              <td height="30" style="font-size: 20px;">Name of programme:</td>
                                              <td><label>
                                                      <select name="P_ID" required>
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


