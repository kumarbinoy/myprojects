<html><?php 
    include('connect/db.php');
          $sql="SELECT * from project";      
		$run1=mysqli_query($conn,$sql);
		if ($a=mysqli_num_rows($run1)>0) {?>
<body bgcolor="silver">
  <i class="fa fa-arrow-circle-left" style="font-size:24px"></i><h2><a href="adminallocatedproj.php">Back</a></h2>
   <center>
   <h2> PROJECT DETAILS</h2>
    <marquee><h4> Project can be viewed program wise by choosing below </h4></marquee>
</center>
 <table><form method="post" action="adminviewallprojectprogramwise.php">
             <tr>
                  <td height="30" style="font-size: 20px;">Select a programme </td>
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
                      </label>
                      </td>
              </tr>
                <tr>
                    <td>
                        <center>
                            <button type="submit" name="submit" style="border-radius: 150px 50px 150px 50px;">Submit</button>
                        </center>
                    </td>
                </tr>
            </form>
 </table>
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
                  echo '<script type="text/javascript">alert("Error..!! No data found ");   window.location="adminproject.php";</script>';
               }
		
		?>
    </table>
</body>
</html>

