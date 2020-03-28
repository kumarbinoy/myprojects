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
				<li class="current_page_item"><a href="index.php">Homepage</a></li>
				<li><a href="contact.php">Contact</a></li>
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
							<h2 class="title"><a href="#">Welcome to the portal </a></h2>
							<div class="entry">
								<img src="images/students.jpg" width="565" height="250" alt="" />
							</div>
						</div>
						
						<div class="post">
							<h2 class="title"><a href="#">Brief description of your project </a></h2>
							<div class="entry">
								<p><b>1. It is a platform where request, allocation and submission of projects will be done.<br>2. The admin here will be inserting and updating the students, projects and instructors into the system.<br>3. Also the admin will be associating projects to a particular program.<br>4. The students can view the projects available for them and they can give their choices of preference.<br>5. The student can also update their preferences untill the project allocation is not done.<br>6. Once project is allocated the student can submit their project in zip file whenever they complate their project. </b></p>
							</div>
						</div>
						<div style="clear: both;">&nbsp;</div>
					</div>
					<!-- end #content -->
					<div id="sidebar">
						<ul>
							<li>
							<center>
								<h2>Sign In</h2>
								
								    <form method="post" action="">
								        <table border="0">
								            <tr>
								                <td height="30" style="font-size: 20px;">E-mail: </td>
								                <td><input type="email" name="email" required="required" /></td>
								            </tr>
								            <tr>
								                <td height="30" style="font-size: 20px;">Password: </td>
								                <td><input type="password" name="password" required="required" /></td>
								            </tr>
								            <tr>
								                <td>
								                    <center>
								                        <button type="submit" name="submit" style="border-radius: 150px 50px 150px 50px;">LOGIN</button>
								                    </center>
								                </td>
								            </tr>
								        </table>
								    </form>
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


<?php
    
    include ('connect/db.php');
    if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql= "SELECT * from admin where adm_email='$email' AND adm_password='$password'";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0) {
        session_start();
    $_SESSION['adm_email']=$email;
    $_SESSION['adm_password']=$password;
    header("Location: adminhome.php");
    }
    else{
    $sql= "SELECT * from student where S_EMAIL='$email' AND S_PASSWORD='$password'";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0) {
        session_start();
    $_SESSION['S_EMAIL']=$email;
    $_SESSION['S_PASSWORD']=$password;
    header("Location: studenthome.php");
    }
    }
     echo '<script type="text/javascript">
        alert("Error ! Invalid Email or password ");
        window.location = "index.php";
    </script>';
    }
    ?>