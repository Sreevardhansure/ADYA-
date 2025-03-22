<?php
session_start();
if(!isset($_SESSION["user_session_id"]))
{
    header("location:ADYA.php");
}
?>


 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADYA User</title>
    <link rel="icon" href="cropbg.png" type="image/x-icon"color="#ffff">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="userhomepage.css">
</head>
  <body>

    <div class="popup-screen">
      <div class="popup-box">
        <i class="fas fa-times close-btn"></i>
        <h2>Hi! <?php echo $_SESSION["username"]?></h2>
       <p>ADYA Study Cirle Welcome's You.
        Now You are part of member.
        Update your profile now.</p>
        <!--<a href="demo1.php" class="btn1">Update Profile</a>-->
        <?php
  include 'connect.php';
     $username=$_SESSION["username"];
  //  $sql="select * from login where username=$username";
    // echo "$sql";
     $temp= $_SESSION["id"];
    // echo"$temp";
   //  echo "$username";
   $t=1;
   $sql="Select * from login";
   $result=mysqli_query($con,$sql);
   if($result){
    
     while($row=mysqli_fetch_assoc($result))
     {
      if($t<=1)
      {
       $id=$row['id'];
       $username=$row['username'];
       $password=$row['password'];
       $mobile=$row['mobile'];
       $stuemail=$row['stuemail'];
       echo'
       
       <button class="btn1"><a href="userupdate.php?updateid='.$temp.'"class="text-light">Update Profile</a></button>
     ';
        $t=2;
      }
     }
   }
   

    ?>
      </div>
    </div>
    <h3 class="fixed"><?php echo $_SESSION["username"]?></h3>
    <nav style="position: fixed;">
        <img src="cropbg.png" class="user-pic" onclick="toggleMenu()">
        <span style=" position: fixed;
           top:10%;
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
             <a href="#profile" class="sub-menu-link">
                 <img src="avatar.png" alt="error" class="dropnav"><p> MyProfile</p><span>﹥</span></a>
            
             <a href="#profile" class="sub-menu-link">
                 <img src="lock.png" alt="error" class="dropnav"><p> Change Password</p><span>﹥</span></a>
             <a href="contactus.html" class="sub-menu-link">
                   <img src="call.png" alt="error" class="dropnav"><p> contact us</p><span>﹥</span></a>
            <a href="logout.php" class="sub-menu-link">
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
     <div class="word">
	<span>A</span>
	<span>D</span>
	<span>Y</span>
	<span>A</span>
	<h1>Study Circle</h1>
</div>
     
<a href="https://shorturl.at/FHTW3"  target="_blank" class="wiggle-btn"
    onclick="window.open('https://shorturl.at/FHTW3', 
                         'newwindow', 
                         'width=5,height=5');
                         
              return false;"
            
 ><span>Write test here</span> <img src="colour.png" class="btn-img" alt="error"></a>
<br><br><br>
    <div class="card ">
        <div class="cover-photo">
            <img src="https://i.imgur.com/KykRUCV.jpeg" class="profile">
        </div>
        
        <h6  id="profile"class="profile-name"><?php $name=$_SESSION["username"];echo"$name";?></h6>
       <p class="about">UserID:  <?php $temp= $_SESSION["id"];
      echo"$temp"; ?></p>
    
     <?php
    include 'connect.php';
     $username=$_SESSION["username"];
  //  $sql="select * from login where username=$username";
    // echo "$sql";
     $temp= $_SESSION["id"];
   // echo"$temp";
   //  echo "$username";
   $t=1;
   $sql="Select * from login";
   $result=mysqli_query($con,$sql);
   if($result){
    
     while($row=mysqli_fetch_assoc($result))
     {
      if($t<=1)
      {
       $id=$row['id'];
       $username=$row['username'];
       $password=$row['password'];
       $mobile=$row['mobile'];
       $stuemail=$row['stuemail'];
       echo'
       
       <button class="btn-btn"><a href="userupdate.php?updateid='.$temp.'"class="text-light">Update Profile</a></button>
     ';
        $t=2;
      }
     }
   }
   

    ?><br><br><br><br><br><br></div>
     <!--   <button class="btn1">contactus</button>
        <button class="btn1">UpdatProfile</button>-->

     <!--   
    </div>
    <a href="https://shorturl.at/FHTW3" target="_self" class="wiggle-btn">

    <span>Join class</span>
    <img src="colour.png" class="btn-img" alt="error">
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
     

<?php 
  /* <?php
  include 'connect.php';
     $username=$_SESSION["username"];
  //  $sql="select * from login where username=$username";
    // echo "$sql";
     $temp= $_SESSION["id"];
    echo"$temp";
   //  echo "$username";
   $t=1;
   $sql="Select * from login";
   $result=mysqli_query($con,$sql);
   if($result){
    
     while($row=mysqli_fetch_assoc($result))
     {
      if($t<=1)
      {
       $id=$row['id'];
       $username=$row['username'];
       $password=$row['password'];
       $mobile=$row['mobile'];
       $stuemail=$row['stuemail'];
       echo'
       
       <button class="btn-btn"><a href="userupdate.php?updateid='.$temp.'"class="text-light">Update</a></button>
     ';
        $t=2;
      }
     }
   }
   

    ?>
<?php
echo'<pre>';
print_r($_SESSION);
echo'<pre>';
?>*/
?>
<br><br><br><br><br><br>
<footer>
	<p>Created  by <a target="_blank" href="https://florin-pop.com"><a href="https://www.youtube.com/@sreeparnika1312">Sreevardhan</a></a></p>
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

<script>
  function check_session_id()
  {
      var session_id="<?php echo $_SESSION['user_session_id'];?>";
      fetch('check_login.php').then(function(response){
        return response.json();
      }).then(function(responseData){
        if(responseData.output == 'logout')
        {
          window.location.href='logout.php';
        }
      });
  }
  setInterval(function(){
    check_session_id();
  },10000 );
</script>
  
  </body>
</html>
      