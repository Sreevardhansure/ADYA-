
<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from login  where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$username=$row['username'];
$password=$row['password'];
$mobile=$row['mobile'];
$stuemail=$row['stuemail'];
$usertype=$row['usertype'];

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];
    $stuemail=$_POST['email'];
    $usertype=$_POST['usertype'];
    $sql = "update login set id=$id,username='$username',password='$password',mobile='$mobile',stuemail='$stuemail',usertype='$usertype'
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    { ?>
     <script>  
           echo(alert("Updated Sucessfully"));</script>
      <?php
       header('location:adminhomepage.php');
      
      
 
  }
    else{
        die(mysqli_error($con));
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Deatils</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .wiggle-btn{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    animation: wiggle 2s linear infinite;
    transform-origin: 50% 8em;
    animation-delay: 1s;
   


    
}

.wiggle-btn:hover{
    color:#fff000;
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

.wiggle-btn .btn-img{
  z-index: 111;
    width: 220px;
    height: 65px;
}
      
     .swal-modal {
            font-family: sans-serif;
            }

     .swal-text {
            text-align: center;
            }


        .container {
            bottom: 0;
            max-width: 500px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            align-items: center;
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        input[type="tel"], 
        input[type="email"] {

            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
       
        input[type="submit"] {
            width: 100%;
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        

    </style>
</head>
<body>
    <div class="container">
        <h2>Update User Details</h2>
        <form method="POST">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" placeholder="Enter Your ID" required value=<?php
                echo $id;
                ?>>
                
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter Username" required value=<?php
                echo $username;
                ?>>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required value=<?php
                echo $password;
                ?>>
                
            </div>

            <div class="form-group">
                <label for="mobile">Phone Number:</label>
                <input type="text" id="mobile" name="mobile" placeholder="Enter Your Mobile Number" required value=<?php
                echo $mobile;
                ?>>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter Your Email" required value=<?php
                echo $stuemail;
                ?>>
            </div>
            <div class="form-group"> 
                <select name="usertype" id="usertype">
                    <option value="---">---</option>
                    <option value="user">user</option>
                    <option value="exam">exam</option>
    
                </select>
            </div>
            <input type="submit" id="submit" name="submit"value="Update">
        </form>
    </div>
    <br><br>
        <a href="adminhomepage.php" class="wiggle-btn">
            <span>Back to Home</span>
            <img src="colour.png" class="btn-img" alt="error">
          </a>
</body>
</html>
