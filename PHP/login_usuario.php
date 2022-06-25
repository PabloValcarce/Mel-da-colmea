<?php
include "./config.php";
session_start();

if(isset($_POST["email_ini"])){
    $email=$_POST["email_ini"];
    $password = $_POST["password_ini"];

    $sql = mysqli_query($conn,"SELECT * FROM usuarios WHERE email='$email'AND pass= '$password'");
    
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['username'] = $row['username'];
        $_SESSION['roll'] = $row['roll'];
        echo($_SESSION['roll']);
        header("Location: ../index.php");
    }else{
        echo"<script>alert('La contraseña o el email son incorrectos');
                window.location='../registro.php'</script>";
    }
}
?>
