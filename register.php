
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Playpen+Sans:wght@100..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">
    <style>
      body{
        background-image: url(./YE6OJA.gif);
        background-size: 99px;
        min-height: 80vh;
      }
          table{
            border: solid #c8c8c842 4px;
            background-color: #c8c8c842;
            color: white;
            
        }

        .heding{
          
        display: flex;
        align-items: center;
        gap: 5px;
        color: white;
        justify-content: center;
        width: 37vw;
        height: 11vh;
        font-family: "Righteous", sans-serif;
        font-weight: 400;
        font-size: 15px;
        font-style: normal;
        letter-spacing: 2px;
        
        }

        th{
          height: 10vh;
          font-family: "Lora", serif;
          font-optical-sizing: auto;
          font-weight: bold;
          font-style: normal;
          color: red;
          
      


        }

        td{
            height: 5vh;
            font-family: "Playpen Sans", cursive;
            font-optical-sizing: auto;
            font-weight:400;
            font-size: 10px;
            padding: 5px;
            
            

        }

        .back-key {
    width: 121px;
    height: 25px;
    border: solid white 1px;
    color: white;
    padding: 10px;
    position: absolute;
    top: 86vh;
    left: 44vw;
    background-color: #67676766;
    font-family: "Protest Guerrilla", sans-serif;
    font-style: normal;
    text-align: center;
    border-radius:28px ;
}

.back-key:active{

    background-color: white;
    color: black;

}

#icon{
    position: absolute;
    top: 9px;
    left: 4px;
    font-size: 25px;
}


h4{
    position: absolute;
    top: -13px;
    right: 6px;
    font-size: 18px;
    letter-spacing: 2px;
    font-weight: 100;
}


    </style>


</head>
<body>
      <center><div class="heding"><img src="./icon.jpeg" alt="" width="50">
            <h1>Contact Register</h1>
        </div>
      </center>  
   
    <table align="center" border="1" cellspacing="0" width="5" >
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Link</th>
            <th>Message</th>
       </tr>
<?php  include("my.php");

  $query2 =  "SELECT * FROM rohandbform";

  $data2 = mysqli_query($conn,$query2);

  $total = mysqli_num_rows($data2);
  
  $result = mysqli_fetch_assoc($data2);

//   echo $result['Name']." ".$result['Email']." ".$result['Phone']." ".$result['Link']." ".$result['Message'];



  if($total != 0){
     
    while($result = mysqli_fetch_assoc($data2)){
         
     echo "

          <tr>
            <td>".$result['Name']."</td>
            <td>".$result['Email']."</td>
            <td>".$result['Phone']."</td>
            <td>".$result['Link']."</td>
            <td>".$result['Message']."</td>
          </tr>
          ";
    }

  }

  else{
     
    echo "No recordes Fond";

  }

  




?>
 </table>
 <a href="https://virtual-assistant-rohan-gj9t.vercel.app/" target="_blank"><div class="back-key"><i class='bx bx-log-out-circle' id="icon" ></i><h4>BACK TO AI</h4></div></a>

