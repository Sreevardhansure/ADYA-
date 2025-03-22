

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>contactus</title>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <link rel="icon" href="cropbg.png" type="image/x-icon"color="#ffff">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
    
     * {
  font-family: Nunito, sans-serif;

}

.landing_page .responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  justify-content: flex-start;
  
}

.landing_page .text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  line-height: 25px;
}

.landing_page .responsive-cell-block {
  min-height: 75px;
}

.landing_page .responsive-container-block.container {
  max-width: 1320px;
  margin-top: 60px;
  margin-right: auto;
  margin-bottom: 60px;
  margin-left: auto;
  position: relative;
}
.content-box{
  background-color: #04040471;
  background: transparent;
  backdrop-filter: blur(2px);
  padding: 20px;

}
.landing_page .form-box {
  background-color: #151617;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.631);
  color: #fff;
  padding-top: 35px;
  padding-right: 33px;
  padding-bottom: 35px;
  padding-left: 33px;
  max-width: 506px;
  border-radius:20px;
  backdrop-filter: blur(20px);
  border: #040404b8;
}

.landing_page .text-blk.contactus-head {
  font-size: 30px;
  line-height: 40px;
}

.landing_page .text-blk.contactus-subhead {
  color: #d4d4d4;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 18px;
  margin-left: 0px;
}

.landing_page .input {
  color: #d4d4d4;
  width: 100%;
  height: 50px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  font-size: 18px;
  padding-top: 1px;
  padding-right: 125px;
  padding-bottom: 1px;
  padding-left: 22.5px;
  border-top-width: 2px;
  border-right-width: 2px;
  border-bottom-width: 2px;
  border-left-width: 2px;
  border-top-style: none;
  border-right-style: none;
  border-bottom-style: none;
  border-left-style: none;
  border-top-color: #767676;
  border-right-color: #767676;
  border-bottom-color: #767676;
  border-left-color: #767676;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  background-color: #212223;
  padding: 1px 12.5px 1px 22.5px;
}

.landing_page .textinput {
  color: white;
  width: 100%;
  height: 233px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 20px;
  margin-left: 0px;
  font-size: 18px;
  padding-top: 22px;
  padding-right: 22px;
  padding-bottom: 22px;
  padding-left: 22px;
  background-color: #212223;
  border-top-width: 1px;
  border-right-width: 1px;
  border-bottom-width: 1px;
  border-left-width: 1px;
  border-top-style: none;
  border-right-style: none;
  border-bottom-style: none;
  border-left-style: none;
  border-top-color: #767676;
  border-right-color: #767676;
  border-bottom-color: #767676;
  border-left-color: #767676;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
}

.landing_page .submit-btn {
 cursor: pointer;
  width: 100%;
  height: 56px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  background-color: #146132;
  font-size: 18px;
  font-weight: 600;
  color: white;
  border-top-width: 2px;
  border-right-width: 2px;
  border-bottom-width: 2px;
  border-left-width: 2px;
  border-top-style: none;
  border-right-style: none;
  border-bottom-style: none;
  border-left-style: none;
  border-top-color: #146132;
  border-right-color: #146132;
  border-bottom-color: #146132;
  border-left-color: #146132;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
}
.landing_page .submit-btn:hover{
   background: #00fa60;
   color: #151617;
}

.landing_page .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-6.wk-ipadp-6.emial {
  padding-top: 0px;
  padding-right: 10px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.landing_page .responsive-cell-block.wk-ipadp-6.wk-tab-12.wk-mobile-12.wk-desk-6.right-one {
  display: flex;
  justify-content: center;
}

.landing_page .responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12.left-one {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  color: white;
}

.landing_page .text-blk.section-subhead {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 50px;
  margin-left: 0px;
  max-width: 420px;
  font-size: 18px;
  color: #b6b6b6;
}

.landing_page .text-blk.section-head {
  font-size: 40px;
  line-height: 55px;
  font-weight: 800;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 15px;
  margin-left: 0px;
  max-width: 450px;
}

.landing_page .icons-container {
  max-width: 450px;
  display: flex;
  justify-content: space-evenly;
}

.landing_page .img {
  width: 31px;
  height: 31px;
}
.landing_page .img:hover{
    cursor : pointer ;
   
    color: #ffee10;
    box-shadow: 0 0 5px #0397f9;
    text-shadow: 0 0 5px #0397f9;
}
:root{
  --color-primary:#AB6A80;
  --color-secondary:#563191;
  --color-tertiary:#014868;
}
.landing_page .responsive-container-block.big-container {
 background-image: linear-gradient(135deg,var(--color-primary),var(--color-secondary),var(--color-tertiary));
 /* background-color: rgb(255, 9, 9);*/
  padding-top: 0px;
  padding-right: 50px;
  padding-bottom: 0px;
  padding-left: 50px;
  position: relative;
  object-fit: cover;
}

.landing_page .bg-img {
  width: 100%;
  position: absolute;
  left: 0px;
  right: 0px;
  bottom: 0px;
  top: 0px;
  height: 100%;
  opacity: 0.5;
  object-fit: cover;
}

@media (max-width: 768px) {
  .landing_page .responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12.left-one {
    justify-content: center;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 30px;
    margin-left: 0px;
  }

  .landing_page .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-6.wk-ipadp-6.emial {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .landing_page .responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12.left-one {
    margin: 0 0 40px 0;
  }
}

@media (max-width: 500px) {
  .landing_page .text-blk.section-head {
    font-size: 26px;
    line-height: 40px;
  }

  .landing_page .responsive-container-block.big-container {
    padding-top: 0px;
    padding-right: 20px;
    padding-bottom: 0px;
    padding-left: 20px;
  }

  .landing_page .text-blk.section-subhead {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 30px;
    margin-left: 0px;
    font-size: 16px;
  }

  .landing_page .form-box {
    padding-top: 30px;
    padding-right: 15px;
    padding-bottom: 30px;
    padding-left: 15px;
  }

  .landing_page .responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12.left-one {
    margin: 0 0 30px 0;
  }

  .landing_page .input {
    height: 45px;
  }

  .landing_page .text-blk.contactus-head {
    font-size: 24px;
    line-height: 34px;
  }
}
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap');

*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  margin: 0;
}

.wk-desk-1 {
  width: 8.333333%;
}

.wk-desk-2 {
  width: 16.666667%;
}

.wk-desk-3 {
  width: 25%;
}

.wk-desk-4 {
  width: 33.333333%;
}

.wk-desk-5 {
  width: 41.666667%;
}

.wk-desk-6 {
  width: 50%;
}

.wk-desk-7 {
  width: 58.333333%;
}

.wk-desk-8 {
  width: 66.666667%;
}

.wk-desk-9 {
  width: 75%;
}

.wk-desk-10 {
  width: 83.333333%;
}

.wk-desk-11 {
  width: 91.666667%;
}

.wk-desk-12 {
  width: 100%;
}

@media (max-width: 1024px) {
  .wk-ipadp-1 {
    width: 8.333333%;
  }

  .wk-ipadp-2 {
    width: 16.666667%;
  }

  .wk-ipadp-3 {
    width: 25%;
  }

  .wk-ipadp-4 {
    width: 33.333333%;
  }

  .wk-ipadp-5 {
    width: 41.666667%;
  }

  .wk-ipadp-6 {
    width: 50%;
  }

  .wk-ipadp-7 {
    width: 58.333333%;
  }

  .wk-ipadp-8 {
    width: 66.666667%;
  }

  .wk-ipadp-9 {
    width: 75%;
  }

  .wk-ipadp-10 {
    width: 83.333333%;
  }

  .wk-ipadp-11 {
    width: 91.666667%;
  }

  .wk-ipadp-12 {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .wk-tab-1 {
    width: 8.333333%;
  }

  .wk-tab-2 {
    width: 16.666667%;
  }

  .wk-tab-3 {
    width: 25%;
  }

  .wk-tab-4 {
    width: 33.333333%;
  }

  .wk-tab-5 {
    width: 41.666667%;
  }

  .wk-tab-6 {
    width: 50%;
  }

  .wk-tab-7 {
    width: 58.333333%;
  }

  .wk-tab-8 {
    width: 66.666667%;
  }

  .wk-tab-9 {
    width: 75%;
  }

  .wk-tab-10 {
    width: 83.333333%;
  }

  .wk-tab-11 {
    width: 91.666667%;
  }

  .wk-tab-12 {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .wk-mobile-1 {
    width: 8.333333%;
  }

  .wk-mobile-2 {
    width: 16.666667%;
  }

  .wk-mobile-3 {
    width: 25%;
  }

  .wk-mobile-4 {
    width: 33.333333%;
  }

  .wk-mobile-5 {
    width: 41.666667%;
  }

  .wk-mobile-6 {
    width: 50%;
  }

  .wk-mobile-7 {
    width: 58.333333%;
  }

  .wk-mobile-8 {
    width: 66.666667%;
  }

  .wk-mobile-9 {
    width: 75%;
  }

  .wk-mobile-10 {
    width: 83.333333%;
  }

  .wk-mobile-11 {
    width: 91.666667%;
  }

  .wk-mobile-12 {
    width: 100%;
  }
}
.go-to-home {
    position:fixed;
    top:92%;
    right:0;
    width: 10%;
    background: transparent;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
   
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    }
    .go-to-home:hover {
    background-color: #555;
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
    </style>
</head>

<body style="background-size: cover;">
  <nav style="position: fixed;">
    <img src="cropbg.png" class="user-pic" onclick="toggleMenu()">
    <span style=" position: fixed;
       top:10%;
       right: 1.8%;
       display: flex;
       z-index: 100;
       color: black;">ADYA</span>
     <div class="sub-menu-wrap" id="subMenu">
       <div class="sub-menu">
         <div class="user-info">
           <img src="cropbg.png" class="dropnav">
           <h4 style="color: black;">ADYA Studycircle</h4>
         </div>
         <hr>
         <a href="registration.html" class="sub-menu-link">
           <img src="register.png" alt="error" class="dropnav"><p> Register now</p><span>﹥</span></a>
           <a href="demo1.php" class="sub-menu-link">
             <img src="avatar.png" alt="error" class="dropnav"><p> Login</p><span>﹥</span></a>
         <a href="Syllabuspage.html" class="sub-menu-link">
             <img src="book.png" alt="error" class="dropnav"><p> Syllabus</p><span>﹥</span></a>
         <a href="contactus.html" class="sub-menu-link">
               <img src="call.png" alt="error" class="dropnav"><p> contact us</p><span>﹥</span></a>
         </div>
     </div>
   </nav>
 
 <script>
   let subMenu=document.getElementById("subMenu");
   function toggleMenu(){
     subMenu.classList.toggle("open-menu");
   }
 </script>
 <a href="demo1.php" class="go-to-home">Go to Home</a>
    <div class="landing_page">
        <div class="responsive-container-block big-container">
          <div class="gradient"></div>
          <img class="bg-img" id="iq5bf" src="callcenterorgflip1.png">
          <div class="responsive-container-block container">
            <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 left-one">
              <div class="content-box">
                <p class="text-blk section-head">
                  ContactUs
                </p>
                <p class="text-blk section-subhead">
                  Let's start a Conversation<br>
                  Ask how can we help you:<br>
                  Support all me in other platforms
                </p>
                <div class="icons-container">
                  <a class="share-icon">
                    <img class="img" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-twitter.png">
                  </a>
                  <a class="share-icon">
                    <img class="img" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-facebook.png">
                  </a>
                  <a class="share-icon">
                    <img class="img" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-google.png">
                  </a>
                  <a class="share-icon">
                    <img class="img" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-instagram.png">
                  </a>
                 
                </div>
              </div>
            </div>
            <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6 right-one" id="i1zj">
              <form class="form-box" action="https://formspree.io/f/xvojalpl" method="POST" >
                 <div class="container-block form-wrapper">
                  <p class="text-blk contactus-head">
                    <a class="link" href="#">
                    </a>
                    Let's Get in Touch
                  </p>
                  <p class="text-blk contactus-subhead">
                    We will get back to you in 24 hours
                  </p>
                  <div class="responsive-container-block">
                    <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" >
                      <input class="input"  id="name"name="FirstName" placeholder="First Name" required>
                    </div>
                    <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i1ro7">
                      <input class="input" id="lastname"name="Last Name" placeholder="Last Name" required>
                    </div>
                    <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-6 wk-ipadp-6 emial">
                      <input class="input"id="email" name="Email" placeholder="Email" required>
                    </div>
                    <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                      <input class="input"  id="phone" name="PhoneNumber" placeholder="Phone Number" required>
                    </div>
                    <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" >
                      <textarea aria-placeholder="Type message here"  name="message"class="textinput" id="message" placeholder="Type message here" required></textarea>
                    </div>
                  </div>
                  <button class="submit-btn" type="submit" id="btn">
                    Send
                     
                  </button>
              
                  

                </div>
              </form>
             
            </div>
          </div>
        </div>
      </div>
      <script>swal("Oops!", "Something went wrong on the page!Can You please Contact Us", "error");
                  
 // window.location.href = 'contactus.html';


</script>
</body>
</html>