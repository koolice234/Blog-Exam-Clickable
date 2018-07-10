<?php 
include('config.php');
    if(isset($_POST['registerBtn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password1 = md5($_POST['password1']);
        $password2 = md5($_POST['password2']);
        if($password1==$password2){
            $statement = $config->prepare("INSERT INTO users(user_name, user_Email, user_password)
            VALUES('$name','$email','$password1')");
            $statement->execute();
            echo "<script>alert('Successfully Registered. Please Log-in!'); location.href='index.php';</script>";
        }else{
            echo "<script>alert('passwords does not match!'); location.href='register.php';</script>";
        }

    }

?>