<?php
 include('connect/db.php');
if (isset($_POST['submit'])) {
$PRJ_ID1=$_POST['PRJ_ID1'];
$ROLL_NO1=$_POST['ROLL_NO1'];
$PRJ_ID2=$_POST['PRJ_ID2'];
$ROLL_NO2=$_POST['ROLL_NO2'];
$PRJ_ID3=$_POST['PRJ_ID3'];
$ROLL_NO3=$_POST['ROLL_NO3'];
$PRJ_ID4=$_POST['PRJ_ID4'];
$ROLL_NO4=$_POST['ROLL_NO4'];
$PRJ_ID5=$_POST['PRJ_ID5'];
$ROLL_NO5=$_POST['ROLL_NO5'];
$DATE=$_POST['DATE'];
    
    
    if(($PRJ_ID1!=NULL && $ROLL_NO1!=NULL) && ($PRJ_ID2!=NULL && $ROLL_NO2!=NULL) && ($PRJ_ID3!=NULL && $ROLL_NO3!=NULL) && ($PRJ_ID4!=NULL && $ROLL_NO4!=NULL) && ($PRJ_ID5!=NULL && $ROLL_NO5!=NULL))
    {
        $sql1="INSERT into allocation (A_PRJ_ID,A_ROLL_NO,START_DATE)values('$PRJ_ID1','$ROLL_NO1','$DATE')";
        $run1=mysqli_query($conn,$sql1);
        $sql2="INSERT into allocation (A_PRJ_ID,A_ROLL_NO,START_DATE)values('$PRJ_ID2','$ROLL_NO2','$DATE')";
        $run2=mysqli_query($conn,$sql2);
        $sql3="INSERT into allocation (A_PRJ_ID,A_ROLL_NO,START_DATE)values('$PRJ_ID3','$ROLL_NO3','$DATE')";
        $run3=mysqli_query($conn,$sql3);
        $sql4="INSERT into allocation (A_PRJ_ID,A_ROLL_NO,START_DATE)values('$PRJ_ID4','$ROLL_NO4','$DATE')";
        $run4=mysqli_query($conn,$sql4);
        $sql5="INSERT into allocation (A_PRJ_ID,A_ROLL_NO,START_DATE)values('$PRJ_ID5','$ROLL_NO5','$DATE')";
        $run5=mysqli_query($conn,$sql5);
    }
    else if(($PRJ_ID1!=NULL && $ROLL_NO1!=NULL) && ($PRJ_ID2!=NULL && $ROLL_NO2!=NULL) && ($PRJ_ID3!=NULL && $ROLL_NO3!=NULL) && ($PRJ_ID4!=NULL && $ROLL_NO4!=NULL))
    {
        $sql1="INSERT into allocation (A_PRJ_ID,A_ROLL_NO,START_DATE)values('$PRJ_ID1','$ROLL_NO1','$DATE')";
        $run1=mysqli_query($conn,$sql1);
        $sql2="INSERT into allocation (A_PRJ_ID,A_ROLL_NO,START_DATE)values('$PRJ_ID2','$ROLL_NO2','$DATE')";
        $run2=mysqli_query($conn,$sql2);
        $sql3="INSERT into allocation (A_PRJ_ID,A_ROLL_NO,START_DATE)values('$PRJ_ID3','$ROLL_NO3','$DATE')";
        $run3=mysqli_query($conn,$sql3);
        $sql4="INSERT into allocation (A_PRJ_ID,A_ROLL_NO,START_DATE)values('$PRJ_ID4','$ROLL_NO4','$DATE')";
        $run4=mysqli_query($conn,$sql4);
    }
    else if(($PRJ_ID1!=NULL && $ROLL_NO1!=NULL) && ($PRJ_ID2!=NULL && $ROLL_NO2!=NULL) && ($PRJ_ID3!=NULL && $ROLL_NO3!=NULL))
    {
        $sql1="INSERT into allocation (A_PRJ_ID,A_ROLL_NO,START_DATE)values('$PRJ_ID1','$ROLL_NO1','$DATE')";
        $run1=mysqli_query($conn,$sql1);
        $sql2="INSERT into allocation (A_PRJ_ID,A_ROLL_NO,START_DATE)values('$PRJ_ID2','$ROLL_NO2','$DATE')";
        $run2=mysqli_query($conn,$sql2);
        $sql3="INSERT into allocation (A_PRJ_ID,A_ROLL_NO,START_DATE)values('$PRJ_ID3','$ROLL_NO3','$DATE')";
        $run3=mysqli_query($conn,$sql3);
    }
    else if(($PRJ_ID1!=NULL && $ROLL_NO1!=NULL) && ($PRJ_ID2!=NULL && $ROLL_NO2!=NULL))
    {
        $sql1="INSERT into allocation (A_PRJ_ID,A_ROLL_NO,START_DATE)values('$PRJ_ID1','$ROLL_NO1','$DATE')";
        $run1=mysqli_query($conn,$sql1);
        $sql2="INSERT into allocation (A_PRJ_ID,A_ROLL_NO,START_DATE)values('$PRJ_ID2','$ROLL_NO2','$DATE')";
        $run2=mysqli_query($conn,$sql2);
    }
    if($PRJ_ID1!=NULL && $ROLL_NO1!=NULL)
    {
        $sql1="INSERT into allocation (A_PRJ_ID,A_ROLL_NO,START_DATE)values('$PRJ_ID1','$ROLL_NO1','$DATE')";
        $run=mysqli_query($conn,$sql1);
    }
    
    
    
    
    
if($run) {
echo '<script type="text/javascript">
    alert("Allocation successfull.....!!!! ");
    window.location = "adminstudentrequestform.php";
</script>';
}
else if($run1 && $run2){
    echo '<script type="text/javascript">
    alert("Allocation successfull.....!!!! ");
    window.location = "adminstudentrequestform.php";
</script>';
}
    else if($run1 && $run2 && $run3){
    echo '<script type="text/javascript">
    alert("Allocation successfull.....!!!! ");
    window.location = "adminstudentrequestform.php";
</script>';
}
    else if($run1 && $run2 && $run3 && $run4){
    echo '<script type="text/javascript">
    alert("Allocation successfull.....!!!! ");
    window.location = "adminstudentrequestform.php";
</script>';
}
    else if($run1 && $run2 && $run3 && $run4 && $run5){
    echo '<script type="text/javascript">
    alert("Allocation successfull.....!!!! ");
    window.location = "adminstudentrequestform.php";
</script>';
}
else
{
echo '<script type="text/javascript">
    alert("Allocation unsuccessfull.....!!!! Some error occured ");
    window.location = "adminstudentrequestform.php";
</script>';
}
}
?>