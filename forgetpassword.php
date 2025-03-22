<?php
    $mode ="enter_email";
    if(isset($_GET['mode'])){
      $mode=$_GET['mode'];
    }          
    //something is posted
    if(count($_POST) > 0)
    {
      switch($mode){
        case 'enter_email':
          //code
          break;
        case 'enter_code':
          //code
          break;
        case 'enter_password':
          //code
          break;
        default:
          //code
          break;
      }
    }
    ?>   
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Forgetpassword</title>
    <link rel="stylesheet" href="style3.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family:'poppins' sans-serif;
}

.box-position{
    bottom: 50px;
    right: 200px;
    color:rgb(225, 236, 235);
    font: size 10px;
   
}
nav{
    position: relative;
   }
  
   .user-pic{
   
     width:40px;
     border-radius:50%;
     cursor: pointer;
     left: 0px;
     background-color: white;
   }
   nav ul{
     width:100%;
     text-align: right;;
   }
   nav ul li{
     display: inline-block;
     list-style:none;
     margin: 10px 20px;
   }
   nav ul li a{
     color: #fff;
     text-decoration: none;
   }
   /* drop down*/
   .sub-menu-wrap{
     position: absolute;
     top:100%;
     right: 10%;
     width: 320px;
     max-height:0px;
     overflow:hidden;
     transition: max-height 0.5s;
   }
   .sub-menu-wrap.open-menu{
     max-height: 400px;
   }
   .sub-menu{
     background: whitesmoke;
     padding: 20px;
     margin: 10px;
     
   }
   .user-info{
     display: flex;
     align-items: center;
   }
   .user-info h3{
     font-weight: 300;
     color: #000000;
     
   }
   .user-info img{
    width: 60px;
    border-radius: 50%;
    margin-right: 15px;

   }
   .sub-menu hr{
     border: 0;
     height: 1px;
     width:100%;
     background: #ccc;
     margin: 15px 0 10px;
   }
   .sub-menu-link{
     display: flex;
     align-items: center;
     text-decoration: none;
     color:#525252;
     margin:12px 0;
   }
   .sub-menu-link p{
     width:100%;
     color: #000000e6;
   }
   
   .sub-menu-link img{
     width:40px;
     background: #e5e5e5;
    border-radius: 50%;
     padding: 8px;
     margin-right: 15px;
   }
   .sub-menu-link span{
     font-size: 22px;
     transition: transform 0.5s;
   }
   .sub-menu-link:hover span{
     transform: translateX(5px);
   }
   .sub-menu-link:hover p{
     font-weight: 600;
     color: solid black;
   }
    .content-box{
        border-radius: 20px;
        top: 22%;
        left:28%;
        position: relative;
        align-items: center;
        width: 500px;
        height: 300px;
        padding:20px;
        box-shadow: 0px 0px 10px 1px black;
       background-color: black;
       background: transparent;
       backdrop-filter: blur(20px);
       padding: 20px;
      }
      
    .bg-img{
 width: 100%;
  position: absolute;
  left: 0px;
  right: 0px;
  bottom: 0px;
  top: 0px;
  height: 100%;
  object-fit: cover;
    }
    h1{
        text-align: center;
    }
    input
        {
            margin-left: 20%;
            height: 40px;
            width: 300px;
            /*background-color: #254E58;*/
            border-radius: 10px;
            border:none;
            color: #000000;
            text-indent: 15px;
            font-size: 100%;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .2);
            outline: none;
        }
        input::placeholder
        {
            color:rgb(5, 5, 5);
            font-size: 100%;
            text-indent: 15px;
        }
        .sbutton
        {
            text-indent: 0px;
            height: 40px;
            width: 300px;
            margin-top: -15px;
            background-color: #0ef;
            transition: "2s";
            border: none;
            color: rgb(0, 0, 0);
            font-weight: bolder;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .2);
            outline: none;
            place-content: center;
            align-items: center;
            margin-left: 20%;
            margin-right: 50%;
            letter-spacing: 2px;
            font-weight:bolder;
            font-size: large;
        
        }
        .sbutton:hover
        {
            color: #000000;
            cursor: pointer;
            box-shadow: 0 0 5px cyan,
             0 0  25px cyan,0 0 50px cyan,
            0 0 100px cyan,0 0 200px cyan;
        }
   </style>
 </head>
<body>
<img class="bg-img" id="iq5bf" src="education_png-transformed.png">
    <header class="header">
     
    <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="cropbg.png" alt="Front Image">
          </div>
          <div class="flip-card-back">
            <img src="colour.png" alt="Back Image">
          </div>
        </div>
      </div>
      
        <a href="demo1.php" class="logo">ADYA<pre><p>Study Circle</p> </pre></a>
        <nav class="navbar">
            <a href="demo1.php" style="--i:1"class="active">Home</a>
            <a href="aboutus trail.html"style="--i:2">About</a>
            <a href="contactus.html"style="--i:3">Contact</a>
            <a href="registration.html"style="--i:4">Join now</a>
          </nav>
            <div class="dropdown">
            <nav>
            <img src="cropbg.png" class="user-pic" onclick="toggleMenu()">
      <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
          <div class="user-info">
            <img src="cropbg.png">
            <h3>ADYA Studycircle</h3>
          </div>
          <hr>
          <a href="registration.html" class="sub-menu-link">
            <img src="register.png" alt="error"><p> Register now</p><span>﹥</span></a>
            <a href="demo1.php" class="sub-menu-link">
              <img src="avatar.png" alt="error"><p> Login</p><span>﹥</span></a>
          <a href="Syllabuspage.html" class="sub-menu-link">
              <img src="book.png" alt="error"><p> Syllabus</p><span>﹥</span></a>
          <a href="contactus.html" class="sub-menu-link">
                <img src="call.png" alt="error"><p> contact us</p><span>﹥</span></a>
          </nav>   
          </div>
           <script>
             let subMenu=document.getElementById("subMenu");
           function toggleMenu(){
           subMenu.classList.toggle("open-menu");
               }
         </script>
    </header>
    
    <?php
      switch($mode){
        case 'enter_email':
          //code..
          ?>
          <div class="content-box">
                <h1>Forgot Password</h1>
                <br><br>
                <form method="post" action="forgetpassword.php?mode=enter_email">
                    <label for="stuemail" style="margin-left:20%;">Email</label><br>
                    <input class="tb" type="email" name="stuemail" id="stuemail" placeholder="Enter Your Email" style="align-items: center;" required>
                  <br><br> <button class="sbutton" style="align-items:center"><a href="forgetpassword link.php" style="text-decoration:none;color:black">Send mail</a></button><br>
                   <br> <div class="trail"><a href="demo1.php" style="color: white;margin-bottom:2px;align-items:center;margin-left:50%;margin-right:50%">Login</a></div>

                  </form>    
                  <!--<script>swal("Oops!", "Something went wrong on the page!", "error");</script>-->
          </div>
          <?php
          break;
        case 'enter_code':
          //code
          ?>
          <div class="content-box">
                <h1>Forgot Password</h1>
                <br><br>
                <h3>Enter Your the code sent to your email</h3>
                <form method="post" action="forgetpassword.php?mode=enter_code">
                    <label for="email" style="margin-left:20%;">Enter code:</label><br>
                    <input class="tb" type="text" name="code" id="email" placeholder="Enter code here" style="align-items: center;" required>
                  <br><br><br><!--<button class="sbutton" style="align-items:center">Submit</button>-->
                  <input type="submit"  value="Next" style="float:right;">
                 <a href="forgetpassword.php"> <input type="button" value="Start Over"></a>
                    <div class="trail"><a href="demo.php" style="color: white;margin-bottom:2px;align-items:center;margin-left:50%;margin-right:50%">Login</a></div>

                  </form>    
         
          </div>
          <?php
          break;
        case 'enter_password':
          //code
          ?>
          <div class="content-box">
                <h1>Forgot Password</h1>
                <br><br>
                <h3>Enter Your new password</h3>
                <form method="post" action="forgetpassword.php?mode=enter_password">
                    <label for="email" style="margin-left:20%;">Enter code:</label><br>
                    <input class="tb" type="text" name="password" id="email" placeholder="Password" style="align-items: center;" required>
                    <input class="tb" type="text" name="password2" id="email" placeholder="Retype Password" style="align-items: center;" required>
                    <br><br><br><!--<button class="sbutton" style="align-items:center">Submit</button>-->
                  <input type="submit"  value="Next" style="float:right;">
                 <a href="forgetpassword.php"> <input type="button" value="Start Over"></a>
                    <div class="trail"><a href="demo.php" style="color: white;margin-bottom:2px;align-items:center;margin-left:50%;margin-right:50%">Login</a></div>

                  </form>    
         
          </div>
          <?php
          break;
        default:
          //code
          break;
      }
    ?>
        
   
    </body>
</html>