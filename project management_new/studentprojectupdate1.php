<?php
 include('connect/db.php');
if (isset($_POST['update'])) {
$S_P_ID=$_POST['S_P_ID'];
$ROLL_NO=$_POST['ROLL_NO'];
$CHOICE1=$_POST['PRJ_ID_1'];
$CHOICE2=$_POST['PRJ_ID_2'];
$CHOICE3=$_POST['PRJ_ID_3'];
$CHOICE4=$_POST['PRJ_ID_4'];
$CHOICE5=$_POST['PRJ_ID_5'];
$CHOICE6=$_POST['PRJ_ID_6'];
$CHOICE7=$_POST['PRJ_ID_7'];
$CHOICE8=$_POST['PRJ_ID_8'];
$CHOICE9=$_POST['PRJ_ID_9'];
$CHOICE10=$_POST['PRJ_ID_10'];

    $sql1="SELECT A_ROLL_NO from allocation where A_ROLL_NO='$ROLL_NO'";
    $run1=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($run1)>0)
    {
        echo '<script type="text/javascript">alert("Project is already allocated to you.You cannot update your choice now.....!!!! ");window.location = "studenthome.php";</script>';
    }
    else
    {
$sql = "UPDATE project_request SET CHOICE1='$CHOICE1' ,CHOICE2='$CHOICE2',CHOICE3='$CHOICE3',CHOICE4='$CHOICE4',CHOICE5='$CHOICE5',CHOICE6='$CHOICE6',CHOICE7='$CHOICE7',CHOICE8='$CHOICE8',CHOICE9='$CHOICE9',CHOICE10='$CHOICE10' WHERE STU_ROLL='$ROLL_NO'";
$run = mysqli_query($conn,$sql);
if ($run) {
echo '<script type="text/javascript">
    alert("Updation successfull.....!!!! ");
    window.location = "studentprojectupdate.php";
</script>';
}else
{
echo '<script type="text/javascript">
    alert("Updation unsuccessfull.....!!!! Some error occured ");
    window.location = "studentprojectupdate.php";
</script>';
}
}
}
?>