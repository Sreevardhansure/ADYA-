<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>login </title>

    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #090711;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color:  rgba(197, 182, 182, 0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 40px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #eadada;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #1c1616;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}


    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="" method="post">
        <h3>LOGIN</h3>

        <label for="username">Name:</label>
        <input type="text" placeholder="enter name"  name="Name" required>

        <label for="password">Password:</label>
        <input type="password" placeholder="enter password"  name="Password" required>

        <button type="submit"><strong href="http://localhost/ADYA/userhomepage.php">Login</strong></button>
        
    </form>
</body>
</html>

<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => admin
		$conn = new mysqli("localhost", "root", "", "user");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		// Performing insert query execution
		// here our table name is college
		echo $sql = "SELECT * FROM login WHERE username='".$username."' and password='".$password."'";
		$query_run =mysqli_query($conn, $sql);
		
			if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {

                                                echo $items['username'];
                                                echo $items['password'];
                                                
                                               if($items['password'] && $items['username']==$username){
                                                    
                                                $url ="dileep.php";
                                                header("Location:".$url);
                                                    
                                               }
                                               
                                            }
                                        }else{

                                            $url ="";
                                            header("Location:".$url);
                                        }

		

		
		// Close connection
		mysqli_close($conn);
		?>
</body>
</html>