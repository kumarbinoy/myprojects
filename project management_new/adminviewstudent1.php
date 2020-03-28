<html>
   <i class="fa fa-arrow-circle-left" style="font-size:24px"></i><h2><a href="adminstudent.php">Back</a></h2>
   <?php 
    include('connect/db.php');
		   
		   if(isset($_POST['submit'])){
			$choice1=$_POST['choice1'];
            $choice1_1=$_POST['choice1_1'];
            $choice2=$_POST['choice2'];
            $choice2_1=$_POST['choice2_1'];
            $choice3=$_POST['choice3'];
            $choice3_1=$_POST['choice3_1'];
		   ?>

<?php
          if(($choice2 != NULL) && ($choice2_1 != NULL) && ($choice3 != NULL) && ($choice3_1 != NULL))
          $sql="SELECT * from student where $choice1='$choice1_1'and $choice2='$choice2_1' and $choice3='$choice3_1'";
               
          elseif((($choice2==NULL) || ($choice2_1==NULL)) && (($choice3==NULL) || ($choice3_1==NULL)))
          $sql="SELECT * from student where $choice1='$choice1_1'";
               
          elseif(($choice2==NULL) || ($choice2_1==NULL))
          $sql="SELECT * from student where $choice1='$choice1_1'and $choice3='$choice3_1'";
               
          elseif(($choice3==NULL) || ($choice3_1==NULL))
          $sql="SELECT * from student where $choice1='$choice1_1'and $choice2='$choice2_1'";
          
		$run1=mysqli_query($conn,$sql);
		if ($a=mysqli_num_rows($run1)>0) {?>

<body bgcolor="silver">
   <center>
   <h2> STUDENT DETAILS</h2>
    <marquee><h4> Data of the students can also be updated by clicking on the update button against each student</h4></marquee>
</center>
    <table width="100%" cellpadding="10px" style="margin-top: 30px" border="1" color="black">
        <tr>

            <th style="font-size: 20px"><b>Fname</b></th>
            <th style="font-size: 20px"><b>Lname</b></th>
            <th style="font-size: 20px"><b>Rollno</b></th>
            <th style="font-size: 20px"><b>Sem no</b></th>
            <th style="font-size: 20px"><b>CGPA</b></th>
            <th style="font-size: 20px"><b>Email</b></th>
            <th style="font-size: 20px"><b>Password</b></th>
            <th style="font-size: 20px"><b>Dept id</b></th>
            <th style="font-size: 20px"><b>Prog id</b></th>
            <th style="font-size: 20px"><b>Update</b></th>

        </tr>
        <?php
		while ($row=mysqli_fetch_array($run1)) {
			?>
        <tr>

            <td><?php echo $row['S_F_NAME'];?></td>
            <td><?php echo $row['S_L_NAME'];?></td>
            <td><?php echo $row['ROLL_NO'];?></td>
            <td><?php echo $row['SEM_NO'];?></td>
            <td><?php echo $row['CGPA'];?></td>
            <td><?php echo $row['S_EMAIL'];?></td>
            <td><?php echo $row['S_PASSWORD'];?></td>
            <td><?php echo $row['S_D_ID'];?></td>
            <td><?php echo $row['S_P_ID'];?></td>
            <td> <form method="post" action="adminstudentupdate.php">
              <input type="text" name="ROLL_NO" required="required" value="<?php echo $row['ROLL_NO']; ?>" readonly/>
                <button type="submit" name="submit" style="border-radius: 150px 50px 150px 50px;">Update</button>
            </form></td>
        </tr>
        <?php
		}}
               else
			  echo '<script type="text/javascript">alert("Error..!! No data found ");   window.location="adminstudent.php";</script>';
           }
		
		?>
    </table>
</body>
</html>

