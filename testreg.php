<?php
    session_start();
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (empty($login) or empty($password)) 
    {
    exit ("You did not enter all the information, go back and fill in all the fields!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    include("bd.php");
 
$result = mysqli_query($db,"SELECT * FROM customers WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password']))
       {
       exit ("Incorrect username or password");
       }
    else {
    if ($myrow['password']==$password) {
        $_SESSION['login']=$myrow['login'];$_SESSION['id']=$myrow['id'];
        header('Location: index.php');
    echo "You have successfully entered the site! <a href='index.php'>Strona główna</a>";
    }
    else {
         exit ("Incorrect username or password");
         }
    }
    ?>