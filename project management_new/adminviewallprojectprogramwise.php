<html><?php 
    include('connect/db.php');
    if (isset($_POST['submit'])) {
    $P_ID=$_POST['P_ID'];
    $sql="SELECT p.PRJ_ID,p.PRJ_NAME,p.PRJ_DURATION,p.PRJ_LOCATION,p.PRJ_I_ID from offers_project as op,project as p where op.O_PRJ_ID=p.PRJ_ID AND op.O_P_ID='$P_ID' ";
    $run1 = mysqli_query($conn,$sql);
		if (mysqli_num_rows($run1)>0) {?>
<body bgcolor="silver">
  <i class="fa fa-arrow-circle-left" style="font-size:24px"></i><h2><a href="adminviewallproject.php">Back</a></h2>
   <center>
   <h2> PROJECT DETAILS OF <?php echo"$P_ID"?></h2>
</center>
    <table width="100%" cellpadding="10px" style="margin-top: 30px" border="1" color="black">
        <tr>

             <th style="font-size: 20px"><b>Project id</b></th>
            <th style="font-size: 20px"><b>Project Name</b></th>
            <th style="font-size: 20px"><b>Duration</b></th>
            <th style="font-size: 20px"><b>Location</b></th>
            <th style="font-size: 20px"><b>Instructor Id</b></th>

        </tr>
        <?php
		while ($row=mysqli_fetch_array($run1)) {
			?>
        <tr>

            <td><?php echo $row['PRJ_ID'];?></td>
            <td><?php echo $row['PRJ_NAME'];?></td>
            <td><?php echo $row['PRJ_DURATION'];?></td>
            <td><?php echo $row['PRJ_LOCATION'];?></td>
            <td><?php echo $row['PRJ_I_ID'];?></td>
        </tr>
        <?php
		}}
                else
               {
                  echo '<script type="text/javascript">alert("Error..!! No data found ");   window.location="adminviewallproject.php";</script>';
               }
    }
		?>
    </table>
</body>
</html>

