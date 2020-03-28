<html>
   <i class="fa fa-arrow-circle-left" style="font-size:24px"></i><h2><a href="admininstructor.php">Back</a></h2>
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
          $sql="SELECT * from instructor where $choice1='$choice1_1'and $choice2='$choice2_1' and $choice3='$choice3_1'";
               
          elseif((($choice2==NULL) || ($choice2_1==NULL)) && (($choice3==NULL) || ($choice3_1==NULL)))
          $sql="SELECT * from instructor where $choice1='$choice1_1'";
               
          elseif(($choice2==NULL) || ($choice2_1==NULL))
          $sql="SELECT * from instructor where $choice1='$choice1_1'and $choice3='$choice3_1'";
               
          elseif(($choice3==NULL) || ($choice3_1==NULL))
          $sql="SELECT * from instructor where $choice1='$choice1_1'and $choice2='$choice2_1'";
          
		$run1=mysqli_query($conn,$sql);
		if ($a=mysqli_num_rows($run1)>0) {?>

<body bgcolor="silver">
   <center>
   <h2> INSTRUCTOR DETAILS</h2>
    <marquee><h4> Data of the instructors can also be updated by clicking on the update button against each instructor</h4></marquee>
</center>
    <table width="100%" cellpadding="10px" style="margin-top: 30px" border="1" color="black">
        <tr>

            <th style="font-size: 20px"><b>Instructor Id</b></th>
            <th style="font-size: 20px"><b>First Name</b></th>
            <th style="font-size: 20px"><b>Last Name</b></th>
            <th style="font-size: 20px"><b>Email</b></th>
            <th style="font-size: 20px"><b>Instructor Department Id</b></th>
            <th style="font-size: 20px"><b>Update</b></th>

        </tr>
        <?php
		while ($row=mysqli_fetch_array($run1)) {
			?>
        <tr>

            <td><?php echo $row['I_ID'];?></td>
            <td><?php echo $row['I_F_NAME'];?></td>
            <td><?php echo $row['I_L_NAME'];?></td>
            <td><?php echo $row['I_EMAIL'];?></td>
            <td><?php echo $row['I_D_ID'];?></td>
            <td> <form method="post" action="admininstructorupdate.php">
              <input type="text" name="I_ID" required="required" value="<?php echo $row['I_ID']; ?> "readonly/>
                <button type="submit" name="submit" style="border-radius: 150px 50px 150px 50px;">Update</button>
            </form></td>
        </tr>
        <?php
		}}
                else
               {
                  echo '<script type="text/javascript">alert("Error..!! No data found ");   window.location="adminproject.php";</script>';
               }
           }
		
		?>
    </table>
</body>
</html>

