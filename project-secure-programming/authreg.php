<?php
    require_once('connection.php');
    if(isset($_POST['registerButton'])){
        
        $password = htmlspecialchars(stripslashes($_POST['Password']));
        $email = htmlspecialchars(stripslashes($_POST['Email']));
        $confirmPassword = htmlspecialchars(stripslashes($_POST['Confirm-Password']));
        $username = htmlspecialchars(stripslashes($_POST['Username']));
        $insert = mysqli_query($conn,"INSERT INTO user(Username, Email, Password) values('$username', '$email', '$password')");

        if($insert){
            header('location:index.php');
        }
        else{
            echo'
            <script>
                alert("Registrasi Gagal");
                window.location.href="register.php";
            </script>
            ';
        }
    }


?>