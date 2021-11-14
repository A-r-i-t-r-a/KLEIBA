<?php>
$error=false;
if(isset($_POST['login']) ){

    $username=preg_replace('/[^A-Za-z]/','',$_POST['username'];
    $password= md5($_POST['password']);
    if(file_exists('users/' .$username.'.xml')){
        $xml= new SimpleXMLElement('users/' .$username.'xml',0,true);
        if($password==$xml->password){
            session_start();
            $_SESSION['username']=$username;
            header('location: index.php');
            die;
        }
    }
    $error=true;
}


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional // EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Login </title>

</head>
<body>
    <h1>Login</h>
        <form methord "post" action="">
            <p>Username <input type="text" name ="username" size = "20"/></p>
                <p>password <input type="password" name ="password" size = "20"/></p>

                <?php
                if($error){
                echo'<p>Invalid</p>
                
                <p></p>
                <p><input type ="submit" value="login" name="login"/></p>
        </form>
        <a href="register.php">Register</a>


</body>
</html>
