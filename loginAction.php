<?php
    session_start();
    include('config.php');
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $statement = $config->prepare("SELECT * FROM users WHERE user_Email = '$email' AND user_password='$password'");
        $statement->execute();
        $user = $statement->fetchAll();
            if($user !== false){
                echo "<script>alert('Successfully Login!'); location.href='blogs/index.php';</script>";
            }else{
                echo "<script>alert('User Not Found!'); location.href='index.php';</script>";
            }
    }
?>