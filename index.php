<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel Form</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    <img src="bvn_img.jpg" class= "bg" alt="" srcset="">
    <div class="container">
        <h3>Welcome to Bhavnagar</h3>
        <p>Enter  your details to confirm your information</p>
        <form action="insert.php" method="POST">
            <input type="text" name="uname" id="uname" placeholder="Enter your name"><br>
            <input type="number" name="age" id="age" placeholder="Enter your age" maxlength="99">
            <br>
            <input type="gender" name="gender" id="gender" placeholder="Enter your gender">
            <br>
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <br>
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <br>
            <button class="btn">Submit</button>
            <button class="btn">reset </button>



        </form>
    </div>
   <?php
   //INSERT INTO `trip` (`uname`, `age`, `gender`, `email`, `phone`) VALUES ('abc', '19', 'male', 'kevalpandya760@gmail.com', '7383382222')
   ?> 
</body>
</html>