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
				<li class="current_page_item"><a href="adminhome.php">Home</a></li>
                 <li><a href="adminaddstudent.php">Add Student</a></li>
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
                                <h2>Fill in to view</h2>
								    <form method="post" action="adminviewstudent1.php">
								        <table border="0">
								            <tr>
								                <td height="30" style="font-size: 20px;">Choose your option to search</td>
								                <td><select name="choice1" required>
								                        <option value=" ">Select anyone</option>
								                        <option value="S_F_NAME">First name</option>
                                                        <option value="S_L_NAME">Last name</option>
                                                        <option value="ROLL_NO">Roll number</option>
                                                        <option value="SEM_NO">Semester number</option>
                                                        <option value="CGPA">Cgpa</option>
                                                        <option value="S_EMAIL">Email</option>
                                                        <option value="S_D_ID">Department</option>
                                                        <option value="S_P_ID">Programme</option>
								                    </select></td>
								            </tr>
								             <tr>
								                <td height="30" style="font-size: 20px;">Enter what you choosed above: </td>
								                <td><input type="text" name="choice1_1" required="required" /></td>
								            </tr>
								           <tr>
								                <td height="30" style="font-size: 20px;">Choose your option to search</td>
								                <td><select name="choice2" >
								                        <option value=" ">Select anyone</option>
								                        <option value="S_F_NAME">First name</option>
                                                        <option value="S_L_NAME">Last name</option>
                                                        <option value="ROLL_NO">Roll number</option>
                                                        <option value="SEM_NO">Semester number</option>
                                                        <option value="CGPA">Cgpa</option>
                                                        <option value="S_EMAIL">Email</option>
                                                        <option value="S_D_ID">Department</option>
                                                        <option value="S_P_ID">Programme</option>
								                    </select></td>
								            </tr>
								             <tr>
								                <td height="30" style="font-size: 20px;">Enter what you choosed above: </td>
								                <td><input type="text" name="choice2_1" /></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Choose your option to search</td>
								                <td><select name="choice3" >
								                        <option value=" ">Select anyone</option>
								                        <option value="S_F_NAME">First name</option>
                                                        <option value="S_L_NAME">Last name</option>
                                                        <option value="ROLL_NO">Roll number</option>
                                                        <option value="SEM_NO">Semester number</option>
                                                        <option value="CGPA">Cgpa</option>
                                                        <option value="S_EMAIL">Email</option>
                                                        <option value="S_D_ID">Department</option>
                                                        <option value="S_P_ID">Programme</option>
								                    </select></td>
								            </tr>
								             <tr>
								                <td height="30" style="font-size: 20px;">Enter what you choosed above: </td>
								                <td><input type="text" name="choice3_1" /></td>
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


