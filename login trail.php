
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>ADYA</title>
    <link rel="stylesheet" href="style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
   
     
  
</body>
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
            <a href="#"style="--i:2">About</a>
            <a href="#"style="--i:3">Contact</a>
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
          <a href="#" class="sub-menu-link">
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
             
                <input type="username" id="mail" name="username" onclick="openeye();" class="tb" placeholder="username" autocomplete="off"/>
                <br/>
                <br/>
                <input type="password" id="pwdbar" onclick="closeye();" name="password" class="tb"placeholder="Password" />
                <br/>
                <br/>
                <input type="submit" name="" class="sbutton" value="L O G I N" />
              </form>
              </div><br>
              <div class="trail"><a href="#" style="color: white;top: 120px;">Forget Password</a></div>
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
        header("location:userhomepage.php");
    }
    elseif($row["usertype"]=="admin")
    {
        $_SESSION["username"]=$username;
        header("location:adminhomepage.php");
    }
   
      
    }
    
  ?>
              </div>
            </div>
          </div>
        <h3><span id="element"></span></h3>
             
            <div class="home-sci">
                <a href="#"style="--i:5"><i class='bx bxl-whatsapp'></i></a>
                <a href="#"style="--i:6"><i class='bx bxl-zoom'></i></a>

            </div>
            
          <a href="#" class="btn-box"><span>More About Us</span></a><br><br> 
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
 
  <section class="about" id="about">
    
  </section>
  <div class="slide2">
 
 </div>
  
</body>
</html>