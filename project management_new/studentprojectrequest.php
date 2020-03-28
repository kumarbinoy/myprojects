<?php 
    include('connect/db.php');
		   
		   if(isset($_POST['submit'])){
               $ROLL_NO=$_POST['ROLL_NO'];
               $S_P_ID=$_POST['S_P_ID'];
			   $choice1=$_POST['PRJ_ID_1'];
               $choice2=$_POST['PRJ_ID_2'];
               $choice3=$_POST['PRJ_ID_3'];
               $choice4=$_POST['PRJ_ID_4'];
               $choice5=$_POST['PRJ_ID_5'];
               $choice6=$_POST['PRJ_ID_6'];
               $choice7=$_POST['PRJ_ID_7'];
               $choice8=$_POST['PRJ_ID_8'];
               $choice9=$_POST['PRJ_ID_9'];
               $choice10=$_POST['PRJ_ID_10'];
               
               $sql="SELECT * from project_request where STU_ROLL='$ROLL_NO'";
               $run=mysqli_query($conn,$sql);
               if(mysqli_num_rows($run)>0)
                   echo '<script type="text/javascript">alert("Project Choices already submitted");   window.location="studenthome.php";</script>';
               else
               {
                  if($choice1 != NULL)
                  $sql1="INSERT into project_request (STU_ROLL,STU_PROG,CHOICE1)values('$ROLL_NO','$S_P_ID','$choice1')";  
                
                   if(($choice1 != NULL)&& ($choice2 != NULL))
                  $sql1="INSERT into project_request (STU_ROLL,STU_PROG,CHOICE1,CHOICE2)values('$ROLL_NO','$S_P_ID','$choice1','$choice2')";
                   
                   if(($choice1 != NULL)&& ($choice2 != NULL) && ($choice3 != NULL))
                  $sql1="INSERT into project_request (STU_ROLL,STU_PROG,CHOICE1,CHOICE2,CHOICE3)values('$ROLL_NO','$S_P_ID','$choice1','$choice2','$choice3')";
                   
                   if(($choice1 != NULL)&& ($choice2 != NULL) && ($choice3 != NULL) && ($choice4 != NULL))
                  $sql1="INSERT into project_request (STU_ROLL,STU_PROG,CHOICE1,CHOICE2,CHOICE3,CHOICE4)values('$ROLL_NO','$S_P_ID','$choice1','$choice2','$choice3','$choice4')";
                   
                   if(($choice1 != NULL)&& ($choice2 != NULL) && ($choice3 != NULL) && ($choice4 != NULL) && ($choice5 != NULL))
                  $sql1="INSERT into project_request (STU_ROLL,STU_PROG,CHOICE1,CHOICE2,CHOICE3,CHOICE4,CHOICE5)values('$ROLL_NO','$S_P_ID','$choice1','$choice2','$choice3','$choice4','$choice5')";
                   
                   if(($choice1 != NULL)&& ($choice2 != NULL) && ($choice3 != NULL) && ($choice4 != NULL) && ($choice5 != NULL) && ($choice6 != NULL))
                  $sql1="INSERT into project_request (STU_ROLL,STU_PROG,CHOICE1,CHOICE2,CHOICE3,CHOICE4,CHOICE5,CHOICE6)values('$ROLL_NO','$S_P_ID','$choice1','$choice2','$choice3','$choice4','$choice5','$choice6')";
                   
                   if(($choice1 != NULL)&& ($choice2 != NULL) && ($choice3 != NULL) && ($choice4 != NULL) && ($choice5 != NULL) && ($choice6 != NULL) && ($choice7 != NULL))
                  $sql1="INSERT into project_request (STU_ROLL,STU_PROG,CHOICE1,CHOICE2,CHOICE3,CHOICE4,CHOICE5,CHOICE6,CHOICE7)values('$ROLL_NO','$S_P_ID','$choice1','$choice2','$choice3','$choice4','$choice5','$choice6','$choice7')";
                   
                   if(($choice1 != NULL)&& ($choice2 != NULL) && ($choice3 != NULL) && ($choice4 != NULL) && ($choice5 != NULL) && ($choice6 != NULL) && ($choice7 != NULL) && ($choice8 != NULL))
                  $sql1="INSERT into project_request (STU_ROLL,STU_PROG,CHOICE1,CHOICE2,CHOICE3,CHOICE4,CHOICE5,CHOICE6,CHOICE7,CHOICE8)values('$ROLL_NO','$S_P_ID','$choice1','$choice2','$choice3','$choice4','$choice5','$choice6','$choice7','$choice8')";
                   
                   if(($choice1 != NULL)&& ($choice2 != NULL) && ($choice3 != NULL) && ($choice4 != NULL) && ($choice5 != NULL) && ($choice6 != NULL) && ($choice7 != NULL) && ($choice8 != NULL) && ($choice9 != NULL))
                  $sql1="INSERT into project_request (STU_ROLL,STU_PROG,CHOICE1,CHOICE2,CHOICE3,CHOICE4,CHOICE5,CHOICE6,CHOICE7,CHOICE8,CHOICE9)values('$ROLL_NO','$S_P_ID','$choice1','$choice2','$choice3','$choice4','$choice5','$choice6','$choice7','$choice8','$choice9')";
                   
                   if(($choice1 != NULL)&& ($choice2 != NULL) && ($choice3 != NULL) && ($choice4 != NULL) && ($choice5 != NULL) && ($choice6 != NULL) && ($choice7 != NULL) && ($choice8 != NULL) && ($choice9 != NULL) && ($choice10 != NULL))
                  $sql1="INSERT into project_request (STU_ROLL,STU_PROG,CHOICE1,CHOICE2,CHOICE3,CHOICE4,CHOICE5,CHOICE6,CHOICE7,CHOICE8,CHOICE9,CHOICE10)values('$ROLL_NO','$S_P_ID','$choice1','$choice2','$choice3','$choice4','$choice5','$choice6','$choice7','$choice8','$choice9','$choice10')";
                   
                   
           
               $run1=mysqli_query($conn,$sql1);
                if ($run1)
                    echo '<script type="text/javascript">alert("submitted successfully ");   window.location="studenthome.php";</script>';
                else
                    echo '<script type="text/javascript">alert("Some error occured while submitting ");   window.location="studenthome.php";</script>';
               
            }}
		?>

