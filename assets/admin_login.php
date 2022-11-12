<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
    *{
    margin: 0px;
    padding:0px;
    box-sizing: border-box;
}
body{
    position:relative;
    height: 100vh;
    width: 100%;
}

.back-video{
  object-fit: cover;
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
}

.content{
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.content form{
    height: 420px;
    width: 350px;
    background-color: rgba(0, 0, 0, 0.249);
    backdrop-filter: blur(12px);
    border-radius: 20px;
    text-align: center;
    box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.285);
}

.content form .heading p:nth-child(1){
    color: rgba(221, 221, 221, 0.739);
    font-size: 3em;
    font-family: monospace;
    margin-top: 15px;
}
.content form .heading p:nth-child(2){
    color: rgb(255, 217, 0);
    font-size: 1.7em;
    font-family: monospace;
    margin-top: 15px;
    text-transform: capitalize;
    background-color: rgba(0, 0, 0, 0.068);
    padding: 20px;
}
.content form .inputContent{
    width: 100%;
    /* background-color: red; */
    margin-top: 15px;
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: rgba(0, 0, 0, 0.073);
}
.content form .inputContent .username,
.content form .inputContent .password{
    height: 50px;
    width: 80%;
    border-radius: 25px;
    margin-top: 10px;
    margin-bottom: 15px;
    background-color: rgba(0, 0, 0, 0.281);
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.34);
}

.username input,.password input{
    width: 80%;
    height: 100%;
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    border: none;
    outline: none;
    background: transparent;
    margin-right: -20px;
    margin-left: 10px;
    /* background-color: green; */
    padding-left: 10px;
    font-size: 18px;
    color: #eee;
}
.username ion-icon,.password ion-icon{
    color: rgba(255, 255, 255, 0.531);
    font-size:22px; 
}

.content form .submitbtn{
    margin-top: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 7vh;
}
.content form .submitbtn input{
      height: 50px;
      width: 180px;
      border-radius: 25px;
      border:none;
      outline: none;
      color: #fff;
      background-color: rgb(2, 114, 234);
      font-size: 19px;
      font-family: monospace;
      cursor: pointer;
      box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.245);
}

</style>
</head>
<body>
    
    <div class="container">
        <video autoplay muted loop plays-inline class="back-video">
            <source src="./video/v2.mp4" type="video/mp4">
        </video>

        <div class="content">
            
            <form action="../assets/ajax/admin_ajax/login.php" method="POST" autocomplete="off">
                <div class="heading">
                    <p>Login</p>
                    <p>Student Information Management System</p>
                </div>
                <div class="inputContent">
                    <div class="username">
                        <ion-icon name="person"></ion-icon>
                        <input type="text" name="u_name" id="u_name" placeholder="Username">
                    </div>
                    <div class="password">
                        <ion-icon name="lock-closed"></ion-icon>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                </div>
                <div class="submitbtn">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>

    </div>

    <script src="../js/admin_login.js"></script>
</body>
</html>