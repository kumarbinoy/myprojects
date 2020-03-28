<?php 
  include('connect/db.php');
		   $date=date("d/m/y");
		   if(isset($_POST['download'])){
			$D_ID=$_POST['D_ID'];
            $P_ID=$_POST['P_ID'];
 $sql="SELECT s.S_D_ID,pr.STU_ROLL,pr.STU_PROG,pr.CHOICE1,pr.CHOICE2,pr.CHOICE3,pr.CHOICE4,pr.CHOICE5,pr.CHOICE6,pr.CHOICE7,pr.CHOICE8,pr.CHOICE9,pr.CHOICE10 from project_request as pr,student as s where s.ROLL_NO=pr.STU_ROLL AND s.S_D_ID='$D_ID' AND pr.STU_PROG='$P_ID' ORDER by pr.STU_ROLL ASC";
          
		$run=mysqli_query($conn,$sql);
if(mysqli_num_rows($run)>0)
	{
    $output;
		$output .='
			 <center><h1> Project request detail </h1> </center>
	   
	   <table width="100%" cellpadding="0.5px" border="1">
		<tr>
			<th style="font-size: 20px"><b>DEPT</b></th>            
            <th style="font-size: 20px"><b>PROG</b></th>
            <th style="font-size: 20px"><b>ROLL</b></th>
            <th style="font-size: 20px"><b>CHOICE1</b></th>
            <th style="font-size: 20px"><b>CHOICE2</b></th>
            <th style="font-size: 20px"><b>CHOICE3</b></th>
            <th style="font-size: 20px"><b>CHOICE4</b></th>
            <th style="font-size: 20px"><b>CHOICE5</b></th>
            <th style="font-size: 20px"><b>CHOICE6</b></th>
            <th style="font-size: 20px"><b>CHOICE7</b></th>
            <th style="font-size: 20px"><b>CHOICE8</b></th>
            <th style="font-size: 20px"><b>CHOICE9</b></th>
            <th style="font-size: 20px"><b>CHOICE10</b></th>
		</tr>
		';
	
	while ($rows=mysqli_fetch_array($run)) {
		$output .= '
			<tr>
            <td >'.$rows['S_D_ID'].'</td>
		    <td >'.$rows['STU_PROG'].'</td>
            <td >'.$rows['STU_ROLL'].'</td>
            <td >'.$rows['CHOICE1'].'</td>
            <td >'.$rows['CHOICE2'].'</td>
            <td >'.$rows['CHOICE3'].'</td>
            <td >'.$rows['CHOICE4'].'</td>
            <td >'.$rows['CHOICE5'].'</td>
            <td >'.$rows['CHOICE6'].'</td>
            <td >'.$rows['CHOICE7'].'</td>
            <td >'.$rows['CHOICE8'].'</td>
            <td >'.$rows['CHOICE9'].'</td>
            <td >'.$rows['CHOICE10'].'</td>
       
          </tr>
 ';
}
  
$output .= '</table>';
  header("Content-Type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=project_request_list.xls");
  echo $output;
}
}
elseif(isset($_POST['allocate'])){
    
    $D_ID=$_POST['D_ID'];
    $P_ID=$_POST['P_ID'];
    
    
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
                 <li><a href="adminstudentrequestform.php">back</a></li>
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
	                        <div class="entry">
                            
	                            <h2> Allocate projects to <?php echo $P_ID;?> student Serially</h2><br>
                                <form method="post" action="adminprojectallocate.php">
                                <tr>
                                <td height="30" style="font-size: 20px;">Today's date: </td>
                                <td><input type="text" name="DATE" value="<?php echo $date;?>" readonly/></td>
	                           </tr> 
                               <table width="100%" cellpadding="0.5px" style="margin-top: 20px" border="1" color="black">
	                               <tr>
                    
            <th style="font-size: 20px"><b>Roll Number</b></th>
            <th style="font-size: 20px"><b>Allocated project id </b></th>
            </tr>

            <tr>

                
                <td>
                    <select name="ROLL_NO1">
                 <option value="" disabled selected>--Select Roll--</option>

            <?php
                $sql1="select ROLL_NO from student where S_P_ID='$P_ID' AND S_D_ID='$D_ID'";
                $result1=mysqli_query($conn,$sql1);
                if (mysqli_num_rows($result1)>0) {
                while($row = mysqli_fetch_array($result1)){
             ?>
				     <option value="<?php echo($row['ROLL_NO']);?>"><?php echo($row['ROLL_NO']);?></option>
					                 <?php 
                } }}
             ?>
             </select>        
            </td>
								             
            <td>
                    <select name="PRJ_ID1">
                 <option value="" disabled selected>--Select Project--</option>

            <?php
                $sql1="select O_PRJ_ID from offers_project where O_P_ID='$P_ID'";
                $result1=mysqli_query($conn,$sql1);
                if (mysqli_num_rows($result1)>0) {
                while($row = mysqli_fetch_array($result1)){
             ?>
				     <option value="<?php echo($row['O_PRJ_ID']);?>"><?php echo($row['O_PRJ_ID']);?></option>
					                 <?php 
                } }
             ?>
             </select>        
            </td>
            </tr>
            <tr>
                
                <td>
                    <select name="ROLL_NO2">
                 <option value="" disabled selected>--Select Roll--</option>

            <?php
                $sql1="select ROLL_NO from student where S_P_ID='$P_ID' AND S_D_ID='$D_ID'";
                $result1=mysqli_query($conn,$sql1);
                if (mysqli_num_rows($result1)>0) {
                while($row = mysqli_fetch_array($result1)){
             ?>
				     <option value="<?php echo($row['ROLL_NO']);?>"><?php echo($row['ROLL_NO']);?></option>
					                 <?php 
                } }
             ?>
             </select>        
            </td>
								             
            <td>
                    <select name="PRJ_ID2">
                 <option value="" disabled selected>--Select Project--</option>

            <?php
                $sql1="select O_PRJ_ID from offers_project where O_P_ID='$P_ID'";
                $result1=mysqli_query($conn,$sql1);
                if (mysqli_num_rows($result1)>0) {
                while($row = mysqli_fetch_array($result1)){
             ?>
				     <option value="<?php echo($row['O_PRJ_ID']);?>"><?php echo($row['O_PRJ_ID']);?></option>
					                 <?php 
                } }
             ?>
             </select>        
            </td>
            </tr>
            <tr>
                
                <td>
                    <select name="ROLL_NO3">
                 <option value="" disabled selected>--Select Roll--</option>

            <?php
                $sql1="select ROLL_NO from student where S_P_ID='$P_ID' AND S_D_ID='$D_ID'";
                $result1=mysqli_query($conn,$sql1);
                if (mysqli_num_rows($result1)>0) {
                while($row = mysqli_fetch_array($result1)){
             ?>
				     <option value="<?php echo($row['ROLL_NO']);?>"><?php echo($row['ROLL_NO']);?></option>
					                 <?php 
                } }
             ?>
             </select>        
            </td>
								             
            <td>
                    <select name="PRJ_ID3">
                 <option value="" disabled selected>--Select Project--</option>

            <?php
                $sql1="select O_PRJ_ID from offers_project where O_P_ID='$P_ID'";
                $result1=mysqli_query($conn,$sql1);
                if (mysqli_num_rows($result1)>0) {
                while($row = mysqli_fetch_array($result1)){
             ?>
				     <option value="<?php echo($row['O_PRJ_ID']);?>"><?php echo($row['O_PRJ_ID']);?></option>
					                 <?php 
                } }
             ?>
             </select>        
            </td>
            </tr>
            <tr>
                
                <td>
                    <select name="ROLL_NO4">
                 <option value="" disabled selected>--Select Roll--</option>

            <?php
                $sql1="select ROLL_NO from student where S_P_ID='$P_ID' AND S_D_ID='$D_ID'";
                $result1=mysqli_query($conn,$sql1);
                if (mysqli_num_rows($result1)>0) {
                while($row = mysqli_fetch_array($result1)){
             ?>
				     <option value="<?php echo($row['ROLL_NO']);?>"><?php echo($row['ROLL_NO']);?></option>
					                 <?php 
                } }
             ?>
             </select>        
            </td>
								             
            <td>
                    <select name="PRJ_ID4">
                 <option value="" disabled selected>--Select Project--</option>

            <?php
                $sql1="select O_PRJ_ID from offers_project where O_P_ID='$P_ID'";
                $result1=mysqli_query($conn,$sql1);
                if (mysqli_num_rows($result1)>0) {
                while($row = mysqli_fetch_array($result1)){
             ?>
				     <option value="<?php echo($row['O_PRJ_ID']);?>"><?php echo($row['O_PRJ_ID']);?></option>
					                 <?php 
                } }
             ?>
             </select>        
            </td>
            </tr>
            <tr>
                
                <td>
                    <select name="ROLL_NO5">
                 <option value="" disabled selected>--Select Roll--</option>

            <?php
                $sql1="select ROLL_NO from student where S_P_ID='$P_ID' AND S_D_ID='$D_ID'";
                $result1=mysqli_query($conn,$sql1);
                if (mysqli_num_rows($result1)>0) {
                while($row = mysqli_fetch_array($result1)){
             ?>
				     <option value="<?php echo($row['ROLL_NO']);?>"><?php echo($row['ROLL_NO']);?></option>
					                 <?php 
                } }
             ?>
             </select>        
            </td>
								             
            <td>
                    <select name="PRJ_ID5">
                 <option value="" disabled selected>--Select Project--</option>

            <?php
                $sql1="select O_PRJ_ID from offers_project where O_P_ID='$P_ID'";
                $result1=mysqli_query($conn,$sql1);
                if (mysqli_num_rows($result1)>0) {
                while($row = mysqli_fetch_array($result1)){
             ?>
				     <option value="<?php echo($row['O_PRJ_ID']);?>"><?php echo($row['O_PRJ_ID']);?></option>
					                 <?php 
                } }
             ?>
             </select>        
            </td>
            </tr>
       
                                </table><br>
                                <button type="submit" name="submit" style="border-radius: 150px 50px 150px 50px;">submit</button>
                                </form>   
	                    </div></div>
	                    <div style="clear: both;">&nbsp;</div>
	                </div>
	                <!-- end #content -->
                   
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
