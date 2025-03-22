
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Screen For a Website With Cookies - HTML, CSS & Javascript</title>
   
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
  font-size: 2.1em;
  font-weight: 800;
  margin-bottom: 20px;
}

.popup-box p{
  font-size: 1em;
  margin-bottom: 30px;
}

.popup-box .btn{
  color: #fff;
  background: red;
  font-size: 1.1em;
  font-weight: 500;
  text-decoration: none;
  text-transform: uppercase;
  padding: 7px 27px;
  border-radius: 3px;
}

.close-btn{
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

section{
  padding: 50px 100px;
}

.home{
  position: relative;
  width: 100%;
  min-height: 100vh;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.image{
  position: relative;
  width: 45%;
  min-height: 450px;
}

.image img{
  position: absolute;
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
}

.info{
  position: relative;
  width: 52%;
}

.info h2{
  font-size: 2em;
  font-weight: 800;
}

.info p{
  font-size: 1em;
  text-align: justify;
  margin-top: 10px;
}

@media (max-width: 990px){
  section{
    padding: 50px 30px;
  }

  .home{
    display: block;
  }

  .image{
    width: 100%;
  }

  .info{
    width: 100%;
    margin-top: 15px;
  }
}
      
    </style>
</head>
  <body>

    <div class="popup-screen">
      <div class="popup-box">
        <i class="fas fa-times close-btn"></i>
        <h2>Popup Box</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#" class="btn">Subscribe</a>
      </div>
    </div>

    <section class="home">
      <div class="image">
        <img src="img.jpg" alt="">
      </div>
      <div class="info">
        <h2>Popup Screen With Cookies</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </section>
    
    <script type="text/javascript">
    const popupScreen = document.querySelector(".popup-screen");
    const popupBox = document.querySelector(".popup-box");
    const closeBtn = document.querySelector(".close-btn");

    window.addEventListener("load", () => {
      setTimeout(() => {
        popupScreen.classList.add("active");
      }, 2000); //Popup the screen in 02 seconds after the page is loaded.
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
      
   
  </body>
</html>
      