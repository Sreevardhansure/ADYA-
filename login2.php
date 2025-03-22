
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>ADYA</title>
    <link rel="stylesheet" href="style3.css">
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
            <a href="aboutus trail.html"style="--i:2">About</a>
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
                  <button onclick="showAlertAndRefresh()">Show Alert and Refresh</button>

                 <?php
  $host="localhost";
  $user="root";
  $password="";
  $db="user";
 session_start();
  $data=mysqli_connect($host,$user,$password,$db);
  if($data===false)
  {
   // die("conection error");

    echo '
 <script>
function showAlertAndRefresh() {
    alert("Alert message!");
    location.reload(); // Refresh the page
}
</script>'
 ;


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
   
    else{
        
        echo '<script>alert("User name or password wrong")
        <button onclick="showAlertAndRefresh()">Show Alert and Refresh</button>
     
        </script>';
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
  
  <h1>ABOUT US</h1>
  <p>Welcome to Adya Study Circle: Your Pathway to Telugu Excellence!
  
  🌟 **Unlock the Beauty of Telugu Literature and Grammar:**  
  Embark on a journey that unravels the enchanting world of Telugu literature, grammar, and methodology with Adya Study Circle. We are dedicated to enriching your understanding and appreciation of the rich Telugu language.
  
  📚 **Discover Telugu's Treasures with Teacher Sure Sreenivasulu:**  
  At Adya Study Circle, we are honored to have the esteemed Teacher Sure Sreenivasulu as your guide. With his profound knowledge and passion for Telugu, Teacher Sure Sreenivasulu will take you on a captivating exploration of Telugu literature, grammar, and methodology.
  
  🖥️ **Online Classes for the Modern Learner:**  
  We understand the demands of your busy lifestyle, which is why we offer convenient and interactive online classes. No matter where you are, you can now access our comprehensive courses at your own pace. Our user-friendly platform ensures that learning Telugu has never been easier.
  
  📝 **Structured Curriculum, Personalized Learning:**  
  Our courses are meticulously designed to cater to learners of all levels. Whether you're a beginner or looking to deepen your understanding, we have the right program for you. Our personalized approach ensures that you receive the guidance you need to excel.
  
  💡 **What We Offer:**  
  - **Telugu Literature:** Dive into the world of Telugu literary masterpieces. Explore classic and contemporary works that have shaped Telugu culture.
  - **Telugu Grammar:** Demystify the complexities of Telugu grammar. Learn the rules and nuances that make this language unique and expressive.
  - **Telugu Methodology:** Discover effective techniques for teaching and communicating in Telugu. Enhance your language skills to share your knowledge with others.
  
  🌐 **Connect with a Community:**  
  Join a vibrant community of Telugu language enthusiasts. Connect with fellow learners, share insights, and engage in discussions that deepen your understanding of the language.
  
  🎓 **Experience the Adya Advantage:**  
  - Engaging and interactive online classes
  - Expert guidance from Teacher Sure Sreenivasulu
  - Comprehensive curriculum for all levels
  - Convenient scheduling to fit your lifestyle
  
  📞 **Contact Us Today:**  
  Ready to embark on your Telugu language journey? Contact us today to learn more about our courses, schedules, and enrollment options. We're here to answer your questions and guide you toward a fulfilling Telugu learning experience.
  
  At Adya Study Circle, we're not just teaching Telugu; we're fostering a connection to the soul of a language. Join us and let the beauty of Telugu language and literature enrich your life.
  
  Enroll now and let the magic of Telugu unfold before you!</p>
  </div>
  
</body>
</html>