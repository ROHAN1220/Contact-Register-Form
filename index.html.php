<?php  
    include ("my.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">

 <style>
        * {
    margin: 0;
    padding: 0;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-image: url(./YE6OJA.gif);
    background-size: 99px;
}

section {
    display: flex;
    justify-content: center;
    gap: 37px;
    align-items: center;
    background-image: url(./YE6OJA.gif);
    background-size:114px;
    flex-direction: column;
    border: solid 2px black;
    width: 43vw;
    height: 92vh;
    background-color: black;

}


.heding {

    display: flex;
    align-items: center;
    gap: 5px;
    color: white;
    justify-content: center;
    width: 37vw;
    height: 11vh;
    font-family: "Righteous", sans-serif;
    font-weight: 400;
    font-style: normal;
    letter-spacing: 2px;


}


.form {
    width: 37vw;
    height: 81vh;
    display: flex;
    flex-direction: column;
    gap: 23px;
}


input {
    height: 8vh;
    border: none;
    outline: none;
    text-align: center;
    font-family: "SUSE", sans-serif;
    font-optical-sizing: auto;
    font-weight:bolder;
    font-style: normal;
    font-size: 20px;
    border-radius: 7px;
    background-color: #59595961;
    color: #c2c2c2;
    border: solid transparent 2px;

}

textarea {

    height: 15vh;
    outline: none;
    display: flex;
    font-family: "SUSE", sans-serif;
    font-optical-sizing: auto;
    font-weight:bolder;
    font-style: normal;
    font-size: 20px;
    padding: 20px;
    border-radius: 7px;
    background-color: #59595961;
    color: #c2c2c2;
    border: solid transparent 2px;
    

}
textarea:focus{
     border: solid white 2px;
}
input:focus{

    border: solid white 2px;
}

.button{
    background-position: 64px;
    background-image: url(./voice_line.gif);
    background-size: 188px;
    width: 11vw;
    
    border: solid #59595961 2px;
}

.button:active{

    background-color: #59595961;
    

}

.back-key {
    width: 121px;
    height: 25px;
    border: solid white 1px;
    color: white;
    padding: 10px;
    position: absolute;
    top: 82vh;
    left: 58vw;
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
    top: 10px;
    right: 6px;
    font-size: 18px;
    letter-spacing: 2px;
    font-weight: 100;
}

    
    </style>
</head>

<body>
    <section>

        <div class="heding"><img src="./icon.jpeg" alt="" width="50">
            <h1>Contact Form</h1>
        </div>
        <form action="#" method="POST">
            <div class="form">
                <input type="text" name="yname"  placeholder="Your Name" required>

                <input type="text" name="email"  placeholder="Your Email Address" required>

                <input type="text" name="phone"  placeholder="Your Phone Numbar" required>

                <input type="text" name="link"  placeholder="Your Website Link" >
 
                <textarea name="message" placeholder="Type Your Message Here...." ></textarea>

                <input type="submit" name="register"  class="button" value="Register">
            </div>
        </form>
    </section>
 <a href="https://virtual-assistant-rohan-gj9t.vercel.app/" target="_blank"><div class="back-key"><i class='bx bx-log-out-circle' id="icon" ></i><h4>BACK TO AI</h4></div></a>

    
</body>

</html>


