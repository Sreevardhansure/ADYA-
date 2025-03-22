<?php
include 'database_connection.php';
$message = '';
if (isset($_POST['submit'])) {
  $formdata = array();
  if(empty($_POST["username"]))
  {
    $message .='<li>username is required</li>';
  }
  else{
    if(!filter_var($_POST["username"]))
    {
     // $message .='<li>Invalid Username</li>';
     echo '<script>
    document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
            icon: "error",
            title: "Error!",
            text: "Invalid Username",
            showCancelButton: false,
            confirmButtonText: "OK"
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to a new page using JavaScript
                window.location.href = "demo1.php";
            }
        });
    });
    </script>';
     //header("Location: demo1.php");
     
    }
    else{
      $formdata['username']=$_POST['username'];
    }
  }
  if(empty($_POST['password']))
  {
   // $message .='<li>password is required</li>';
   echo '<script>
   document.addEventListener("DOMContentLoaded", function() {
       Swal.fire({
           icon: "error",
           title: "Error!",
           text: "Password is Required",
           showCancelButton: false,
           confirmButtonText: "OK"
       }).then((result) => {
           if (result.isConfirmed) {
               // Redirect to a new page using JavaScript
               window.location.href = "demo1.php";
           }
       });
   });
   </script>';//   header("Location: demo1.php");

  }
  else{
    $formdata['password']=$_POST['password'];
  }
  if($message=='')
  {
    $data =array(
      '.username' => $formdata['username']
    );
    $query =" 
    SELECT * FROM user 
    WHERE username=:username
    ";
    $statement = $connect->prepare($query);
    $statement->execute($data);
    if($statement->rowCount() > 0)
    {
      foreach($statement->fetchAll() as $row)
      {
        if($row['password']==$formdata['password'])
        {
          session_start();
          session_regenerate_id();
          $user_session_id=session_id();
          $query = "
                UPDATE user
              SET user_session_id='".$user_session_id."'
              WHERE id ='".$row['id']."'
              ";
              $connect->query($query);
              $_SESSION['id']=$row['id'];
              $_SESSION['user_session_id']=$user_session_id;
              header("location:userhomepage.php");

        }
        else{
         // $message='<li>Wrong password</li> ';
         echo '<script>
         document.addEventListener("DOMContentLoaded", function() {
             Swal.fire({
                 icon: "error",
                 title: "Error!",
                 text: "Invalid Password",
                 showCancelButton: false,
                 confirmButtonText: "OK"
             }).then((result) => {
                 if (result.isConfirmed) {
                     // Redirect to a new page using JavaScript
                     window.location.href = "demo1.php";
                 }
             });
         });
         </script>';        // header("Location: demo1.php");

        }
      }
    }
    else{
     // $message ='<li>Wrong Username</li>';
     echo '<script>
     document.addEventListener("DOMContentLoaded", function() {
         Swal.fire({
             icon: "error",
             title: "Error!",
             text: "Invalid Username",
             showCancelButton: false,
             confirmButtonText: "OK"
         }).then((result) => {
             if (result.isConfirmed) {
                 // Redirect to a new page using JavaScript
                 window.location.href = "demo1.php";
             }
         });
     });
     </script>';    // header("Location: demo1.php");

    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>ADYA</title>
    <link rel="icon" href="cropbg.png" type="image/x-icon"color="#ffff">
    <link rel="stylesheet" href="style4.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

     
  

</head>
   
<body>
 
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
      
        <a href="#" class="logo">ADYA<pre><p>Study Circle</p> </pre></a>
        <nav class="navbar">
            <a href="#" style="--i:1"class="active">Home</a>
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
          <a href="#" class="sub-menu-link">
            <img src="register.png" alt="error"><p> Register now</p><span>﹥</span></a>
            <a href="#" class="sub-menu-link">
              <img src="avatar.png" alt="error"><p> Login</p><span>﹥</span></a>
          <a href="#" class="sub-menu-link">
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
      
    
<section class="home">
    <div class="home-content">
        <h3>Hello,It's Me</h3>
        <h1>Sure Sreenivasulu</h1>
       
        <form action="#" method="POST">
        <div class="position">
         
          <div class="maincontainer">
            <div class="monkeylogin">
              
              <div class="animcon" id="animcon">
                <img id="hands" src="https://raw.githubusercontent.com/naaficodes/Monkey-Login/master/images/hands.png"/>
              </div>
            
              <h2>Login</h2>
                 
              <div class="formcon">
             
                <input type="username" id="mail" name="username" onclick="openeye();" class="tb" placeholder="username" autocomplete="on"/>
                <br/>
                <br/>
                <input type="password" id="pwdbar" onclick="closeye();" name="password" class="tb"placeholder="Password" />
                <br/>
                <br/>
                <input type="submit" name="" class="sbutton" value="L O G I N" />
              </form>
              </div><br>
              <div class="trail"><a href="forgetpassword.php" style="color: white;top: 120px;">Forget Password</a></div>
              <footer class="foot">
                <h4>Don't have account</h4>
                  <a style="color: #fe000092; font-weight: bold;right: 50%;left: 50%;" href="registration.html">register now</a></footer>
         
                
                <?php
  $host="localhost";
  $user="root";
  $password="";
  $db="user";
 session_start();
  $data=mysqli_connect($host,$user,$password,$db);
  if($data===false)
  {
    die("conection error");
  }
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from login where username='".$username."' AND password='".$password." ' ";

    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);
    if($row["usertype"]=="user")
    { 

         $_SESSION["username"]=$username;
        session_start();
        session_regenerate_id();
        $user_session_id=session_id();
        $query = "
        UPDATE login
        SET user_session_id='".$user_session_id."'
        WHERE id ='".$row['id']."'
        ";
        $connect->query($query);
        $_SESSION['id']=$row['id'];
        $_SESSION['user_session_id']=$user_session_id;
        header("location:userhomepage.php");

    }
    elseif($row["usertype"]=="admin")
    {
        $_SESSION["username"]=$username;
        header("location:adminhomepage.php");
    }
    else{
       // echo "username or password incorrect";
       echo '<script>
       document.addEventListener("DOMContentLoaded", function() {
           Swal.fire({
               icon: "error",
               title: "Error!",
               text: "Invalid Username or Password",
               showCancelButton: false,
               confirmButtonText: "OK"
           }).then((result) => {
               if (result.isConfirmed) {
                   // Redirect to a new page using JavaScript
                   window.location.href = "demo1.php";
               }
           });
       });
       </script>';//       header("Location: demo1.php");

    }
  }
  ?>
              </div>
            </div>
          </div>
        <h3><span id="element"></span></h3>
             
            <div class="home-sci">
                <a href=" https://wa.me/919490817066"style="--i:5"><i class='bx bxl-whatsapp'></i></a>
                <a href="#"style="--i:6"><i class='bx bxl-zoom'></i></a>

            </div>
            
          <a href="aboutus trail.html" class="btn-box"><span>More About Us</span></a><br><br> 
          <a href="registration.html" class="wiggle-btn">
            <span>Register now</span>
            <img src="colour.png" class="btn-img" alt="error">
          </a>
          
    </div>
    
  
</section>



<script>
  var typed = new Typed('#element', {
    strings: ['Welcome to Adya Study circle😊', 'Explore the Power of Learning with ADYA STUDY CIRCLE...'],
   
    typeSpeed:100,
    backSpeed:100,
    backDelay:1000,
    loop:true
  });
  var x=document.getElementById("hands");
  var y=document.getElementById("animcon");
function closeye()
{
  //y.style.backgroundImage="url()";

	y.style.backgroundImage="url(https://raw.githubusercontent.com/naaficodes/Monkey-Login/master/images/monkey_pwd.gif)";
	x.style.marginTop="0%";
}
function openeye()
{
	y.style.backgroundImage="url(https://raw.githubusercontent.com/naaficodes/Monkey-Login/master/images/monkey.gif)";
	x.style.marginTop="110%";
}
    
  </script>
 <div>
  
 </div>
  <!--Start of Conferbot Script-->
  <script type="text/javascript">
        (function (d, s, id) {
          var js,
            el = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) {
            return;
          }
          js = d.createElement(s);
          js.async = true;
          js.src = 'https://s3.ap-south-1.amazonaws.com/conferbot.defaults/dist/v1/widget.min.js';
          js.id = id;
          js.charset = 'UTF-8';
          el.parentNode.insertBefore(js, el);
          // Initializes the widget when the script is ready
          js.onload = function () {
              var w = window.ConferbotWidget("6511b592f016140655d55fcc", "live_chat");
          };
        })(document, 'script', 'conferbot-js');
      </script>
      <!--End of Conferbot Script-->
</body>
</html>