<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}
?>
<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADYA Admin page</title>
    <link rel="icon" href="cropbg.png" type="image/x-icon"color="#ffff">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body{
  min-height: 100vh;
}

.popup-screen{
  z-index: 999999;
  position: fixed;
  background-color: black;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  visibility: hidden;
  transition: 0.5s ease;
  transition-property: visibility;
}

.popup-screen.active{
  visibility: visible;
}

.popup-box{
  position: relative;
 background: rgba(255, 255, 255, 0.8);
  backdrop-filter: blur(10px);
  max-width: 350px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin: 20px;
  padding: 50px 40px;
  border-radius: 20px;
  box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
  transform: scale(0);
  transition: 0.5s ease;
  transition-property: transform;
}

.popup-screen.active .popup-box{
  transform: scale(1);
}

.popup-box h2{
  color:black;
  font-size: 2.1em;
  font-weight: 800;
  margin-bottom: 20px;
}

.popup-box p{
  color:black;
  font-size: 1em;
  margin-bottom: 30px;
}

.popup-box .btn1{
  color: #fff;
  background: red;
  font-size: 1.1em;
  font-weight: 500;
  text-decoration: none;
  text-transform: uppercase;
  padding: 7px 27px;
  border-radius: 3px;
  background-color: red;
}

.close-btn{
  color: red;
  position: absolute;
  font-size: 1em;
  top: 0;
  right: 0;
  margin: 15px;
  cursor: pointer;
  opacity: 0.5;
  transition: 0.3s ease;
  transition-property: opacity;
}

.close-btn:hover{
  opacity: 1;
}

@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap");

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    background: url(computer);
    height: 100vh;
    display: grid;
   background: linear-gradient(135deg,black);
    background:blur(2px);
    font-family: Montserrat;
    color: #b3afbf;
}


h1{
  color:white;
  letter-spacing: 2px;
  text-shadow: #222;
  margin-top: 2%;
  text-align: center;
}
@import url('https://fonts.googleapis.com/css?family=Anton|Roboto');

.word {
	font-family: 'Anton', sans-serif;
	perspective: 1000px; 
  left: 10px;
}

.word span {
	cursor: pointer;
	display: inline-block;
	font-size: 100px;
	user-select: none;
	line-height: .8;
}

.word span:nth-child(1).active {
	animation: balance 1.5s ease-out;
	transform-origin: bottom left;
}

@keyframes balance {
	0%, 100% {
		transform: rotate(0deg);
	}
	
	30%, 60% {
		transform: rotate(-45deg);
	}
}

.word span:nth-child(2).active {
	animation: shrinkjump 1s ease-in-out;
	transform-origin: bottom center;
}

@keyframes shrinkjump {
	10%, 35% {
		transform: scale(2, .2) translate(0, 0);
	}
	
	45%, 50% {
		transform: scale(1) translate(0, -150px);
	}
	
	80% {
		transform: scale(1) translate(0, 0);
	}
}

.word span:nth-child(3).active {
	animation: falling 2s ease-out;
	transform-origin: bottom center;
}

@keyframes falling {
	12% {
		transform: rotateX(240deg);
	}
	
	24% {
		transform: rotateX(150deg);
	}
	
	36% {
		transform: rotateX(200deg);
	}
	
	48% {
		transform: rotateX(175deg);
	}
	
	60%, 85% {
		transform: rotateX(180deg);
	}
	
	100% {
		transform: rotateX(0deg);
	}
}

.word span:nth-child(4).active {
	animation: rotate 1s ease-out;
}

@keyframes rotate {
	20%, 80% {
		transform: rotateY(180deg);
	}
	
	100% {
		transform: rotateY(360deg);
	}
}

.word span:nth-child(5).active {
	animation: toplong 1.5s linear;
}

@keyframes toplong {
	10%, 40% {
		transform: translateY(-48vh) scaleY(1);
	}
	
	90% {
		transform: translateY(-48vh) scaleY(4);
	}
}

/* Other styles */
body {
	background-color: skyblue;
	color: #fff;
	display: flex;
	font-family: 'Roboto', sans-serif;
	justify-content: center;
	align-items: center;
	flex-direction: row;
	height: 100vh;
	margin: 0;
}

.fixed {
	position: fixed;
	top: 40px;
	left: 50%;
	transform: translateX(-50%);
}

footer {
	position: fixed;
	bottom: 0;
	left: 0;
	right: 0;
	text-align: center;
	letter-spacing: 1px;
}

footer i {
	color: red;
}

footer a {
	color: #3C97BF;
	text-decoration: none;
}
nav{
    position: fixed;
    top:5%;
    right: 2%;
    display: flex;
    z-index: 100;
    }

   .user-pic{
     top:18px;
      width:40px;
      border-radius:50%;
      cursor: pointer;
      margin-left:1300px;
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
      top:99%;
      right: 3%;
      width: 320px;
      max-height:0px;
      overflow:hidden;
      transition: max-height 0.5s;
    }
    .sub-menu-wrap.open-menu{
      max-height: 400px;
    }
    .sub-menu{
      background: #fff;
      padding: 20px;
      margin: 10px;
    }
    .user-info{
      display: flex;
      align-items: center;
    }
    .user-info h4{
        color: black;
      font-weight: 500;
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
    }
    .dropnav img{
      width: 25%;
      height: 25%;
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
    }
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}

body{
    background-color: #fff;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.wiggle-btn{
   
    top:65px;
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    animation: wiggle 2s linear infinite;
    transform-origin: 50% 8em;
    animation-delay: 1s;
    left: 30px;
    
}

.wiggle-btn:hover{
    animation: none;
}



.wiggle-btn:before{
    z-index: 000;
    content: "";
    position: absolute;
    width: 220px;
    height: 50px;
    box-shadow: 0 5px 25px rgba(2, 2, 2, 0.5);
}

.wiggle-btn span{
    z-index: 222;
    position: absolute;
    color: #fff;
    text-transform: uppercase;
    font-size: 1.3em;
    font-weight: 300;
    letter-spacing: 1px;
    text-shadow: 0 5px 25px rgba(2, 2, 2, 1);
}
.wiggle-btn1 span{
    z-index: 222;
    position: absolute;
    color: #fff;
    text-transform: uppercase;
    font-size: 1.2em;
    font-weight: 200;
    padding:2px;
    letter-spacing: 1px;
    text-shadow: 0 5px 25px rgba(2, 2, 2, 1);
}
.wiggle-btn .btn-img{
  z-index: 111;
    width: 220px;
    height: 65px;
}
.wiggle-btn1{
   
   top:65px;
   position: absolute;
   display: flex;
   justify-content: center;
   align-items: center;
   cursor: pointer;
   animation: wiggle 2s linear infinite;
   transform-origin: 50% 8em;
   animation-delay: 1s;
   left: 400px;
   
}
.wiggle-btn1 .btn-img1{
  
  width: 150px;
  height: 60px;
 
  top: 0px;
}
table{
  background-color: black;
   opacity: 0.5;
   height: auto;
   border: solid white 2px;
   border-collapse: collapse;
   width: 100%;
   
}    
th, td {
  width: 100%;
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
thead{
  width: 100%;
  padding: 50px;
}
tr:hover {background-color: whitesmoke;
color: #000;
font-size: medium;}

.btn-btn{
  background-color: blue;
  opacity: none;
  border-color: blue;
  padding: 2px;
}
.text-light{
  color: white;
  padding: 2px;
  text-decoration: none;
}
.btn-danger{
  background-color: red;
  opacity: none;
  border-color: red;
  padding: 2px;
  
}

    </style>
</head>
  <body>

    <div class="popup-screen">
      <div class="popup-box">
        <i class="fas fa-times close-btn"></i>
        <h2>Hi!<?php echo $_SESSION["username"]?></h2>
        <p>ADYA Study Cirle Welcome's You.Now You are part of member.Update your profile now.</p>
        <a href="#" class="btn1">Update Profile</a>
      </div>
    </div>
    <h3 class="fixed"><?php echo $_SESSION["username"]?></h3>
    <nav style="position: fixed;">
        <img src="cropbg.png" class="user-pic" onclick="toggleMenu()">
        <span style=" position: fixed;
           top:11%;
           right: 1.8%;
           display: flex;
           z-index: 100;
           color: White;">ADYA</span>
         <div class="sub-menu-wrap" id="subMenu">
           <div class="sub-menu">
             <div class="user-info">
               <img src="cropbg.png" class="dropnav">
               <h4 style="color: black;">ADYA Studycircle</h4>
             </div>
             <hr>
             <a href="adduser.php" class="sub-menu-link">
                 <img src="avatar.png" alt="error" class="dropnav"><p> Add User</p><span>﹥</span></a>
            
             <a href="#" class="sub-menu-link">
                 <img src="lock.png" alt="error" class="dropnav"><p> Change Password</p><span>﹥</span></a>
             <a href="#" class="sub-menu-link">
                   <img src="call.png" alt="error" class="dropnav"><p> contact us</p><span>﹥</span></a>
            <a href="demo1.php" class="sub-menu-link">
               <img src="signout.jpg" alt="error" class="dropnav"><p>Signout</p><span>﹥</span></a>
              
             </div>
         </div>
       </nav>
     
     <script>
       let subMenu=document.getElementById("subMenu");
       function toggleMenu(){
         subMenu.classList.toggle("open-menu");
       }
     </script>

 
    
    <!--<a href="#" class="wiggle-btn">
    <span>Join class</span>
    <img src="colour.png" class="btn-img" alt="">
  </a>-->
         <script type="text/javascript">
    const popupScreen = document.querySelector(".popup-screen");
    const popupBox = document.querySelector(".popup-box");
    const closeBtn = document.querySelector(".close-btn");

    window.addEventListener("load", () => {
      setTimeout(() => {
        popupScreen.classList.add("active");
      }, 1000); //Popup the screen in 02 seconds after the page is loaded.
    });

    closeBtn.addEventListener("click", () => {
      popupScreen.classList.remove("active"); //Close the popup screen on click the close button.
      //Create a cookie for a day (to expire within a day) on click the close button.
      document.cookie = "WebsiteName=testWebsite; max-age=" + 24 * 60 * 60; //1 day = 24 hours = 24*60*60
    });

    //Use the created cookie to hide or show the popup screen.
    const WebsiteCookie = document.cookie.indexOf("WebsiteName=");

    if(WebsiteCookie != -1){
      popupScreen.style.display = "none"; //Hide the popup screen if the cookie is not expired.
    }
    else{
      popupScreen.style.display = "flex"; //Show the popup screen if the cookie is expired.
    }
    </script>
    <a href="adduser.php" class="wiggle-btn">
            <span>ADD USER</span>
            <img src="colour.png" class="btn-img" alt="error">
          </a>
          <br><br>
          <div>
          <a href="https://docs.google.com/spreadsheets/d/170YySZbwStck_-QJK0dRMjOX5Zs35sQvl5j0Z9P2QgU/edit#gid=0" class="wiggle-btn1">
            <span>Registered USER Details</span>
            <img src="colour.png" class="btn-img1" alt="error">
          </a></div>
          <div><table class="table">
  <thead>
    <h2>Student Details</h2>
    <tr>
      <th scope="col">iD</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">mobile</th>
      <th scope="col">stuemail</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from login";
    $result=mysqli_query($con,$sql);
    if($result){
     
      while($row=mysqli_fetch_assoc($result))
      {
        $id=$row['id'];
        $username=$row['username'];
        $password=$row['password'];
        $mobile=$row['mobile'];
        $stuemail=$row['stuemail'];
        echo'<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$username.'</td>
        <td>'.$password.'</td>
        <td>'.$mobile.'</td>
        <td>'.$stuemail.'</td>
        <td><button class="btn-btn"><a href="update.php?updateid='.$id.'"class="text-light">Update</a></button></td>
        <td><button class="btn-danger"><a href="delete.php? deleteid='.$id.' "class="text-light">Delete</a></button></td>
      </tr>';
      }
    }
    ?>
 
 <br><br><br></div>

</tbody>

</table>
<br><br><br></div>
     <div class="word">

	<span>A</span>
	<span>D</span>
	<span>Y</span>
	<span>A</span>
	<h1>Study Circle</h1>
</div>
  

<footer>
	<p>Created  by <a target="_blank" href="https://florin-pop.com">Sreevardhan</a></p>
	<p>Copyright©️ADYA.<a target="_blank" href="https://florin-pop.com"></a>All rights reserved</p>

</footer>
<script>
  const spans = document.querySelectorAll('.word span');

spans.forEach((span, idx) => {
	span.addEventListener('click', (e) => {
		e.target.classList.add('active');
	});
	span.addEventListener('animationend', (e) => {
		e.target.classList.remove('active');
	});
	
	// Initial animation
	setTimeout(() => {
		span.classList.add('active');
	}, 750 * (idx+1))
});
</script>


  
  </body>
</html>
      