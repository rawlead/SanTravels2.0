<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['name'])) { $name=$_POST['name']; if ($name =='') { unset($name);} }
    if (isset($_POST['last_name'])) { $last_name=$_POST['last_name']; if ($last_name =='') { unset($last_name);} }
    if (isset($_POST['mail'])) { $mail=$_POST['mail']; if ($mail =='') { unset($mail);} }
    if (isset($_POST['birthday'])) { $birthday=$_POST['birthday']; if ($birthday =='') { unset($birthday);} }
    if (isset($_POST['country'])) { $country=$_POST['country']; if ($country =='') { unset($country);} }
    if (isset($_POST['city'])) { $city=$_POST['city']; if ($city =='') { unset($city);} }
    if (isset($_POST['address'])) { $address=$_POST['address']; if ($address =='') { unset($address);} }
    if (isset($_POST['post_code'])) { $post_code=$_POST['post_code']; if ($post_code =='') { unset($name);} }
 
    if (empty($login) or empty($password) or empty($name) or empty($last_name) or empty($mail) or empty($birthday)
    or empty($country) or empty($city) or empty($address) or empty($post_code)) 
    {
    exit ("You did not enter all the information, go back and fill in all the fields!");
    }

    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $last_name = stripslashes($last_name);
    $last_name = htmlspecialchars($last_name);
    $mail = stripslashes($mail);
    $mail = htmlspecialchars($mail);
    $birthday = stripslashes($birthday);
    $birthday = htmlspecialchars($birthday);
    $country = stripslashes($country);
    $country = htmlspecialchars($country);
    $city = stripslashes($city);
    $city = htmlspecialchars($city);
    $address = stripslashes($address);
    $address = htmlspecialchars($address);
    $post_code = stripslashes($post_code);
    $post_code = htmlspecialchars($post_code);

    $login = trim($login);
    $password = trim($password);
    $name = trim($name);
    $last_name = trim($last_name);
    $mail= trim($mail);
    $birthday = trim($birthday);
    $country = trim($country);
    $city = trim($city);
    $address = trim($address);
    $post_code = trim($post_code);

            if    (strlen($login) < 3 or strlen($login) > 15) {
            exit    ("The login must consist of at least 3 characters and no more than 15 characters.");
            }
            if    (strlen($password) < 3 or strlen($password) > 15) {
            exit    ("The password must consist of at least 3 characters and no more than 15 characters.");
            }          

    include ("bd.php");

    $result =  mysqli_query($db,"SELECT id FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Sorry, the login you entered is already registered. Please enter a different login.");
    }

    $result2 = mysqli_query ($db,"INSERT INTO users (login,password,name,last_name,mail,birthday,country,city,address,post_code) 
        VALUES('$login','$password','$name','$last_name','$mail','$birthday','$country','$city','$address','$post_code')");
    
    if ($result2=='TRUE')
    {
    echo "You are successfully registered! Now you can go to the site. <a href='index.php'>Strona główna</a>";
    }
 else {
    echo "Error! You are not registred.";
    }
    ?>