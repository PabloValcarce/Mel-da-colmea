<?php
include "./config.php";
    if(isset($_POST["username"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        if($password==$cpassword){
            $sql ="SELECT * FROM usuarios WHERE 
            email='$email'";
            $result = mysqli_query($conn, $sql);
            if(!$result -> num_rows >0){
                $sql ="INSERT INTO usuarios (username, email, pass)
                VALUE ('$username','$email','$password')";
                $result = mysqli_query($conn,$sql);
                if($result){
                    echo "<script>
                            alert ('Usuario registrado con exito');
                            window.location='../registro.php'
                        </script>";
                    $username="";
                    $email="";
                    $_POST["password"]="";
                    $_POST["cpassword"]="";
                }else{
                    echo"<script>
                        alert('Hay un error');
                        window.location='../registro.php'
                        </script>";
                }
            }else{
                echo ("<script> alert('El correo ya existe');
                        window.location='../registro.php'
                        <script>");
            }
        }else{
            echo "<script>alert('Las contraseñas no coinciden');
                    window.location='../registro.php'</script>";
        }
    }else{
    }
    mysqli_close($conn);
?>