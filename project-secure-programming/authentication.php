<?php

  require_once('connection.php');
  if(isset($_POST['loginButton'])){
    $username = htmlspecialchars(stripslashes($_POST['Username']));
    $password = htmlspecialchars(stripslashes($_POST['Password']));

    $check = "SELECT * FROM user where Username = '$username' AND Password = '$password';";
    $count = mysqli_query($conn,$check);


    
    if($count->num_rows >0){
    $_SESSION['IP'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['Agent'] = $_SERVER['HTTP_USER_AGENT'];
    header('location:content.php');
    exit();
    }
    else{
      echo'
      <script>
          alert("Login Gagal");
          window.location.href="index.php";
      </script>
      ';
    }
  }
  

?>
