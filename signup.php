<?php
    include "connection.php";
    $name=mysqli_real_escape_string($con, $_POST['name']);
    $mail=mysqli_real_escape_string($con, $_POST['mail']);
    $mob=mysqli_real_escape_string($con, $_POST['mobile']);
    $pass=mysqli_real_escape_string($con,$_POST['pass']);
    $sql="SELECT mail FROM user WHERE mail='$mail'";
    $res=mysqli_query($con,$sql) or die("query failed");
     if(mysqli_num_rows($res)>0){
        $resp['error']="002";
        $resp['message']="Already exit";
     }
     else{
        $insert="INSERT INTO user(name,mail,mobile,pass) VALUES('$name','$mail',$mob,'$pass')";
         $ires=mysqli_query($con,$insert);
         if($ires){
             $resp['error']="000";
             $resp['message']="Successfuly Registered";
         }
         else{
            $resp['error']="001";
            $resp['message']="Registration failed";
         }
     }echo json_encode($resp);
     
?>