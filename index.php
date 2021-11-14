<?php
session_start();
if(!file_exists('users/' .$_SESSION['username'].'.xml')){

    header('Location : login.php')
    die;
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional // EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> User page </title>

</head>
<body>
    <h1> User page</h1>
    <h2>Welcome echo $_SESSION['Username']; ?></h2>
    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
</tr>
<?php
$files=glob('users/*.xml');
foreach ($filers as$file)  {
    $xml=new SimpleXMLElement($file,0,true)
    echo
    <tr>
    <td>.basename($file,'.xml').'</td>
    <td>' .$xml->email .'</td>
    </tr>';
}
?>
</table>


<hr/>
<a href="logout.php">Logout</a>

</body>
</html>
