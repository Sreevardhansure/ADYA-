<!DOCTYPE html> 
<html> <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Auto Popup Div</title> <link rel="stylesheet" type="text/css" href="mobile popup.css"> 
    </head> 
    <body> 
        <div class="popup"> 
            <div class="contentBox">
                <div class="close"></div> 
              <div class="imgBx">
                <img src="gift.png" alt="error">
              </div> 
              <div class="content">
               <div> <h3>Special Offer</h3>
                <h2>80<sup>%</sup><span>Off</span></h2>
                <p>Adya Study Circle Best offers ever.</p>
                <a href="#">Register Now</a></div>
              </div> 
            </div> </div> 
            <!--Automatic popup after 2 seconds-->
            <script>
              const popup =document.querySelector('.popup');
             const close=document.querySelector('.close');
              window.onload=function(){
                setTimeout(function(){
                  popup.style.display="block"

                },2000)

                }
                close.addEventListener('click',()=>{popup.style.display="none";
                })
                
            </script>
          </body> 
        </html>