<?php session_start();
include('connect/db.php');
$S_EMAIL=$_SESSION['S_EMAIL'];
$S_PASSWORD=$_SESSION['S_PASSWORD'];
$sql="select * from student where S_EMAIL='$S_EMAIL'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    $row['ROLL_NO'];
$_SESSION['ROLL_NO'] = $row['ROLL_NO'];
    
    $sql1="select A_PRJ_ID from allocation where A_ROLL_NO='".$_SESSION['ROLL_NO']."'";
    $run1=mysqli_query($conn,$sql1);
    
    if(mysqli_num_rows($run1)>0)
    {
        while($row=mysqli_fetch_array($run1)){
               $proj_id=$row['A_PRJ_ID'];
            }
    }
}
?>

<?php 
include ('connect/db.php');
if(isset($_FILES['fupload'])) {
    $DATE=$_POST['DATE'];
    $roll=$_POST['roll'];
    $PRJ_ID=$_POST['PRJ_ID'];
    $filename = $_FILES['fupload']['name'];
    $source = $_FILES['fupload']['tmp_name'];
    $type = $_FILES['fupload']['type']; 
     
    $name = explode('.', $filename); 
    $target = 'C:/xampp/htdocs/project_management/Files/' . $PRJ_ID . '-' . $roll . '/';  
     
    // Ensures that the correct file was chosen
    $accepted_types = array('application/zip', 
                                'application/x-zip-compressed', 
                                'multipart/x-zip', 
                                'application/s-compressed');
 
    foreach($accepted_types as $mime_type) {
        if($mime_type == $type) {
            $okay = true;
            break;
        } 
    }
       
  //Safari and Chrome don't register zip mime types. Something better could be used here.
    $okay = strtolower($name[1]) == 'zip' ? true: false;
 
    if(!$okay) {
          echo '<script type="text/javascript">alert("Please upload a zip file only");   window.location="studentprojectsubmit.php";</script>';       
    }
    if (!file_exists($target)) {
    mkdir($target);
}
   // mkdir($target);
    $saved_file_location = $target . $filename;
   // echo "$saved_file_location";
     
    if(move_uploaded_file($source, $saved_file_location)) {
        
        $sql1="SELECT * from allocation where  A_PRJ_ID='$PRJ_ID' AND A_ROLL_NO='$roll'";
        $run1=mysqli_query($conn,$run1);
        if(mysqli_num_rows($run1)>0){
            while($row=mysqli_fetch_array($run1)){
               $data1=$row['END_DATE'];
                $data2=$row['FILE'];
            }
            
        }
        if((data1!= NULL) && (data2!=NULL)){
                 echo '<script type="text/javascript">alert("File already submitted");   window.location="studentprojectsubmit.php";</script>';     
            }
        
        else{
        $sql="Update allocation set END_DATE='$DATE',FILE='$target' where A_PRJ_ID='$PRJ_ID' AND A_ROLL_NO='$roll'";
        $run=mysqli_query($conn,$sql);
       echo '<script type="text/javascript">alert("Project successfully submitted");   window.location="studentprojectsubmit.php";</script>';
     } }   
     else {
        echo '<script type="text/javascript">alert("error in submission, may be file size is an issue. Please contact the admin");   window.location="studentprojectsubmit.php";</script>';
    }
        
    
 
   
}
 
?>
 
<?php session_start();
include('connect/db.php');
$S_EMAIL=$_SESSION['S_EMAIL'];
$S_PASSWORD=$_SESSION['S_PASSWORD'];
$sql="select * from student where S_EMAIL='$S_EMAIL'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
 $row['S_P_ID'];
 $row['S_F_NAME'];
    $row['ROLL_NO'];
 $_SESSION['S_P_ID'] = $row['S_P_ID'];
$_SESSION['S_F_NAME'] = $row['S_F_NAME'];
$_SESSION['ROLL_NO'] = $row['ROLL_NO'];
}

$sql4="SELECT * from allocation where A_ROLL_NO='".$_SESSION['ROLL_NO']."'";
$run4=mysqli_query($conn,$sql4);
if(mysqli_num_rows($run4)>0){
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
	                       <center><h2 class="title">You have to submit your project here</h2></center>
	                    </div>

	                    <div class="post">
	                        <div class="entry">
                            <?php
                               $date=date("d/m/y"); 
                                ?>
	                            <h1>Upload A Zip File</h1>
                        <table>
                            <form enctype="multipart/form-data" action="" method="post">
                               <br> <tr><td><input type="file" name="fupload" /><br></td></tr>
                               <tr> <td><input type="text" name="DATE" value="<?php echo $date;?>" readonly><br></td></tr>
                               <tr> <td><input type="text" name="PRJ_ID" value="<?php echo $proj_id;?>" readonly><br></td></tr>
                               <tr> <td><input type="text" name="roll" value="<?php echo $_SESSION['ROLL_NO']; ?>" readonly><br></td></tr>
                                <tr><td><input type="submit" value="Upload Zip File" /> </td></tr>
                            </form>
                        </table>
	                    </div></div>
	                    <div style="clear: both;">&nbsp;</div>
	                </div>
	                <!-- end #content -->
                   
                    <div id="sidebar">
						<ul>
							<li>
							<center>
                                <h4>Instructions for the student</h4>
                                <p>1. You have to submit a zip file of your project.<br>2. Keep all your files in a folder and make a zip file of the folder before uploading.<br>3. Name the zip folder as your project_id. </p>
								</center>
							</li>
						</ul>
					</div>
	                <!-- end #sidebar -->
	            
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
else
    echo '<script type="text/javascript">alert("project is not yet allocated to you ");   window.location="studenthome.php";</script>';
?>