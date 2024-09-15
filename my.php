<?php

error_reporting(0);

  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "dbrohan";

  $conn = mysqli_connect($servername,$username,$password,$dbname);
  
  if($conn){
    echo "";
  }
  else{
    echo "Connction error";
  }


  if($_POST['register']){
           
    $fname = $_POST['yname'];
    $femail = $_POST['email'];
    $fphone = $_POST['phone'];
    $flink = $_POST['link'];
    $fmessage = $_POST['message'];


    $query =  "INSERT INTO rohandbform values('$fname','$femail','$fphone','$flink','$fmessage')";
    
    $data = mysqli_query($conn,$query);

    if($data){
      
     echo "";

    }

    else{

     echo "";


    }

}


 
  // $query2 =  "SELECT * FROM rohandbform";

  // $data2 = mysqli_query($conn,$query2);

  // $total = mysqli_num_rows($data2);
  
  // $result = mysqli_fetch_assoc($data2);

  // echo $result['Name']." ".$result['Email']." ".$result['Phone']." ".$result['Link']." ".$result['Message'];



  // if($total != 0){
     
  //   while($result = mysqli_fetch_assoc($data2)){
         
  //    echo $result['Name']." ".$result['Email']." ".$result['Phone']." ".
  //                        $result['Link']." ".$result['Message'];
  //   }

  // }
  // else{
     
  //   echo "No recordes Fond";

  // }





?>


































?>