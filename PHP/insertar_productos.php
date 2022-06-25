<?php
include "./config.php";
        if(isset($_POST["titulo"])){
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];
            $precio = $_POST["precio"];
            $imagen = $_POST["imagen"];

            $sql ="INSERT INTO productos (produc_nombre, descripcion, produc_precio, imagen)
            VALUE ('$titulo','$descripcion','$precio','$imagen')";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo "<script>
                        alert ('Producto insertado correctamente');
                        window.location='../insertar.php'
                    </script>";
                $titulo="";
                $descripcion="";
                $_POST["titulo"]="";
                $_POST["descripcion"]="";
            }else{
                echo"<script>
                    alert('Hay un error');
                    window.location='../insertar.php'
                    </script>";
            }
        }