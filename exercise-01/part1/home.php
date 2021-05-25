<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration/login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

<div class="container">
    <div>
        <form class="form box" action="" method="POST">
            <h1 class="login-title">Registration</h1>
            <input type="text" class="login-input" name="fullName" placeholder="Full Name" required>            
            <input type="text" class="login-input" name="username" placeholder="Username" required />
            <input type="text" class="login-input" name="email" placeholder="Email Adress" required>
            <input type="password" class="login-input" name="password" placeholder="Password" required>
            <input type="password" class="login-input" name=" confirmPassword" placeholder=" Confirm Password" required>
            <input type="tel" class="login-input" name="phone" placeholder="phone" required>
            <input type="date" class="login-input" name=" dateOfBirth" required>
            <input type="text" class="login-input" name="socialSecurityNumber" placeholder="Social Security Number" required>             
            <input type="submit" name="submit" value="Register" class="login-button">
            
        </form>
    </div>
    <div>
        <form class="form box" method="post" name="login">
                <h1 class="login-title">Login</h1>
                <input type="text" class="login-input" name="username" placeholder="Username" />
                <input type="password" class="login-input" name="password" placeholder="Password"/>
                <input type="submit" value="Login" name="submit2" class="login-button"/>
              
        </form>


    </div>
</div>


<?php
  if(isset($POST['submit'])){
    $fullName=$_POST["fullName"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirmPassword=$_POST["confirmPassword"];
    $phone=$_POST["phone"];
    $dateOfBirth=$_POST["dateOfBirth"];
    $socialSecurityNumber=$_POST["socialSecurityNumber"];

    if($password!=$confirmPassword){
        echo "<p>error the password is not mutall!</p>";
    }
    else{
        $info=array($fullName,$username,$email,$password,$phone,$dateOfBirth,$socialSecurityNumber);
        echo "<p>".$fullName."</p>";
    }

  }
?>
</body>
</html>