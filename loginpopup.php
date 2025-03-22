
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
    else{
        echo '<script>alert("Username or password wrong!");</script>';
       
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
 

  <!--aboutus page-->
 <div>
   <div class="body" style=" background: #ffee57;  margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins' , sans-serif;">
   <h3 style="align-items: center;
          margin-left: 45%;
          margin-right: 45%;
          position:relative;
           top: 50%;
           transform: translate(-50%,-100%);
           margin-top: 100vh;
           color:#0e112e;
           font-size: 4em;"><pre>ABOUT US</pre></h3>
     <h2 class="text"style=" position: fixed;
              top: 50%;
              left: 100%;
              transform: translateY(-50%);
              white-space: nowrap;
              z-index: 1;
              font-size: 10vw;
              color: transparent;
              -webkit-text-stroke: 2px #0e112e;
              text-align: center;
              width: 100%;">ABOUT US</h2>
      <section style=" position:fixed;
              top:100vh;
              left: 0;
              width:100%;
              height: 100vh;
              background: #0e112e;
              display: flex;
              justify-content:center;
              align-items: center;
              clip-path: circle(0px at center center);">
         <h2 class="innerText" style=" position: fixed;
              top: 50%;
              left: 100%;
              transform: translateY(-50%);
              white-space: nowrap;
              z-index: 1;
              font-size: 10vw;
              color: #fff;
              text-align: center;
              width: 100%;">ABOUT US</h2>
      </section>
      
    <div class="container" style=" position: relative;
              margin-top: 200vh;
              background: #0e112e;
              padding: 100px;
              color: #fff;">
        <h2 style="font-size: 2.5em;
              margin-bottom: 20px;">Welcome to Adya Study Circle: Your Pathway to Telugu Excellence!</h2><br><br><br>
        <br><br><br><br><br><br><br>
        <div class="detel" style="margin-left: 50%;
              margin-top: 15;">
            <h1 styel=" font-size: 50px;
              color: #fff;
              margin-bottom: 20px;
              ">Ｉ,m Sure <span style="color: orange;">Sreenivasulu</span></h1>
            <p style=" color: bisque;
              line-height: 22px;">I will guide you to become sucess in your life
              <br>contact us:9866367300
            </p>   
            <a href="#" style=" cursor: pointer;
              background:#ffee57;
              padding: 10px 18px;
              text-decoration: none;
              font-weight: bold;
              color: #000000;
              display: inline-block;
              margin: 30px 0;
              border-radius: 5px;">Join the class</a>
        
        </div>
      
        <div class="images" style=" width: 45%;
              height: 80%;
              position: absolute;
              bottom: 0;
              right: 100px;">
            <img style=" height: 100%;
              position: absolute;
              right: 100%;
              top: 8%;
              bottom: 0;
              transform: translateX(-50%);
              transform: bottom 1s,left 1s;" src="splashbg.png" alt="error" class="shape">
            <img style=" height: 100%;
              position: absolute;
              right: 100%;
              top: 8%;
              bottom: 0;
              transform: translateX(-50%);
              transform: bottom 1s,left 1s;" src="profile.png" alt="error" class="profile">
        </div>
    </div>
  
    <script>
        let section = document.querySelector('section');
        let text=document.querySelector('.text');
        let innerText=document.querySelector('.innerText')
        window.addEventListener('scroll',function(){
            let value = window.scrollY;
            section.style.clipPath = "circle("+ value +"px at center center)";
            text.style.left=100 - value /5+ '%'
            innerText.style.left=100 - value /5+ '%'
        })
    </script>
  
</div> 
 </div>
 <div>
   <!--swiper slides-->
   <div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="ari_pods sections">
                <div class="section_container">
                    <div class="image">
                    <img src="glowing-star_1f31f.gif" alt="error">
                </div>
                <div class="textswap">
                    <p class="title">Unlock the Beauty of Telugu Literature and Grammar</p>
                    <p class="description">
                        Embark on a journey that unravels the enchanting world of Telugu
                     literature, grammar, 
                    and methodology with Adya Study Circle. We are dedicated to enriching
                     your understanding and appreciation of the rich Telugu language.
                    </p>
                </div></div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="beats sections">
                <div class="section_container"><div class="image">
                    <img src="transform class.gif" alt="error">

                </div>
                <div class="textswap">
                    <p class="title">Online Classes for the Modern Learner:</p>
                    <p class="description">We understand the demands of your busy lifestyle, which is why 
                        we offer convenient and interactive online classes.
                         No matter where you are, you can now access our comprehensive courses at your own pace.
                          Our user-friendly platform ensures that learning Telugu has never been easier.</p>
                </div>
                
            </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="apple_watch sections">
                <div class="section_container">
                    <div class="image">
                        <img src="papershand.gif" alt="error">
                    </div>

                        <div class="textswap">
                            <p class="title">Structured Curriculum, Personalized Learning: </p>
                            <p class="description">Our courses are meticulously designed to cater to learners of all levels.
                                Whether you're a beginner or looking to deepen your understanding, we have the right program for you. 
                                Our personalized approach ensures that you receive the guidance you need to excel.</p>
                        </div>
                    
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="galaxy_buds sections">
                <div class="section_container">
                    <div class="image">
                        <img src="tesseract_bulb_animation.gif" alt="error">


                    </div>
                    <div class="textswap">
                        <p class="title">Experience the Adya Advantage:</p>
                        <p class="description">- Engaging and interactive online classes
                            - Expert guidance from Teacher Sure Sreenivasulu 
                            - Comprehensive curriculum for all levels 
                           - Convenient scheduling to fit your lifestyle</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="beats sections">
                <div class="section_container"><div class="image">
                    <img src="advertiser_dribbble.gif" alt="error">


                </div>
                <div class="textswap">

                      <p class="title">Connect with a Community<hr></p><br>
                      <p class="description">
                         Join a vibrant community of Telugu language enthusiasts. 
                          Connect with fellow learners, share insights, and engage in
                          discussions that deepen your understanding of the language
                        </p>
                
               </div>
            </div>
            </div>
        </div>
        
        <div class="swiper-slide">
            <div class="galaxy_buds sections">
                <div class="section_container">
                    <div class="image">
                        <img src="books.gif" alt="error">

                </div>
                <div class="textswap">
                    <div class="textswap">
                        <p class="title" style="font-weight:150; color: white;">Discover Telugu's Treasures with Teacher Sure Sreenivasulu:</p>
                        <p class="description" style="font-weight: 75; color: white;">At Adya Study Circle, we are honored to have the esteemed Teacher Sure Sreenivasulu as your guide.
                            With his profound knowledge and passion for Telugu, Teacher Sure Sreenivasulu will take you 
                            on a captivating exploration of Telugu literature,
                             grammar, and methodology</p>
                    </div>
                </div></div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="beats sections">
                <div class="section_container"><div class="image">
                    <img src="cap.gif" alt="error">
                </div>
                <div class="textswap">
                    <p class="title">What We Offer:<span>Telugu Literature:</p>
                    <p class="description">  Dive into the world of Telugu literary masterpieces. 
                        Explore classic and contemporary works that have shaped Telugu culture.
                         <span>Telugu Grammar:</span> Demystify the complexities of Telugu grammar. 
                         Learn the rules and nuances that make this language unique and expressive.
                          <span>Telugu Methodology: </span>Discover effective techniques for teaching and communicating in Telugu. 
                          Enhance your language skills to share your knowledge with others.</p>
                </div>
            </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="apple_watch sections" >
                <div class="section_container">
                    <div class="image">
                        <img src="contactus.gif" alt="">
                    </div>
                    <div class="textswap">
                        <p class="title">Contact Us Today</p>
                        <p class="description">
                            Ready to embark on your Telugu language journey? Contact us today to 
                            learn more about our courses, schedules, and enrollment options.
                             We're here to answer your questions and guide you toward a fulfilling Telugu learning experience.
                              At Adya Study Circle, we're not just teaching Telugu; we're fostering a connection to the soul of a language.
                               Join us and let the beauty of Telugu language and literature enrich your life. 
                            Enroll now and let the magic of Telugu unfold before you!
                        </p>
                    </div>
                </div>
            </div>
    </div>
    <div class="swiper-pagination">

    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
<script>
var swiper = new Swiper('.swiper-container',{
direction: 'vertical',
sliderPerView: 1,
spaceBetween: 0,
mousewheel: true,
pagination: {
el:'.swiper-pagination',
type: 'progressbar',
}
}) 


</script>
 </div>
  </body>
</html>