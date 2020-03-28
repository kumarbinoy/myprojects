<html><?php 
    include('connect/db.php');
		   
		   if(isset($_POST['submit'])){
			$D_ID=$_POST['D_ID'];
            $P_ID=$_POST['P_ID'];
               
          $sql="SELECT s.S_D_ID,pr.STU_ROLL,pr.STU_PROG,pr.CHOICE1,pr.CHOICE2,pr.CHOICE3,pr.CHOICE4,pr.CHOICE5,pr.CHOICE6,pr.CHOICE7,pr.CHOICE8,pr.CHOICE9,pr.CHOICE10 from project_request as pr,student as s where s.ROLL_NO=pr.STU_ROLL AND s.S_D_ID='$D_ID' AND pr.STU_PROG='$P_ID' ORDER by pr.STU_ROLL ASC";
          
		$run1=mysqli_query($conn,$sql);
		if ($a=mysqli_num_rows($run1)>0) {?>

<body bgcolor="silver">
   <center>
   <h2> STUDENT REQUEST</h2>
    <marquee><h4> Data of the students choices can be downloaded by clicking below</h4></marquee>
</center>
   <table>
       <form method="post" action="studentrequestdownloadexcel.php">
              <tr>
                <td height="30" style="font-size: 20px;">DEPARTMENT ID: </td>                                                                              <td><input type="text" name="D_ID" required="required" value="<?php echo $D_ID; ?>" readonly /></td>
                   
                <td height="30" style="font-size: 20px;">PROGRAMME ID: </td>                                                                           <td><input type="text" name="P_ID" required="required" value="<?php echo $P_ID; ?>" readonly /></td>
                <td><button type="submit" name="download" style="border-radius: 150px 50px 150px 50px;">Download list</button></td>
                <td><button type="submit" name="allocate" style="border-radius: 150px 50px 150px 50px;">Allocate projects</button></td>
            </tr>  
       </form>
   </table>
    <table width="100%" cellpadding="0.5px" style="margin-top: 30px "  border="1" color="black">
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
        <?php
		while ($row=mysqli_fetch_array($run1)) {
			?>
        <tr>

            <td><?php echo $row['S_D_ID'];?></td>
            <td><?php echo $row['STU_PROG'];?></td>
            <td><?php echo $row['STU_ROLL'];?></td>
            <td><?php echo $row['CHOICE1'];?></td>
            <td><?php echo $row['CHOICE2'];?></td>
            <td><?php echo $row['CHOICE3'];?></td>
            <td><?php echo $row['CHOICE4'];?></td>
            <td><?php echo $row['CHOICE5'];?></td>
            <td><?php echo $row['CHOICE6'];?></td>
            <td><?php echo $row['CHOICE7'];?></td>
            <td><?php echo $row['CHOICE8'];?></td>
            <td><?php echo $row['CHOICE9'];?></td>
            <td><?php echo $row['CHOICE10'];?></td>
        </tr>
        <?php
		}}
               else
			  echo '<script type="text/javascript">alert("Error..!! No data found ");   window.location="adminstudentrequestform.php";</script>';
           }
		
		?>
    </table>
</body>
</html>

