<?php 
    
    require("connection.php");

    $comentarios = $_POST["comentarios"];

    $sql = "INSERT INTO comentarios (comentario) 
                        VALUES ('$comentarios')";

    $insertar_comentario = mysqli_query($connection, $sql);


   if (!$insertar_comentario) {
     echo "Error al guardar";
    } else {
     echo "Guardado con éxito <br> <a href=../pages/comentarios.html> Regresar a comentarios </a>";
    }

    mysqli_close($connection);
?>
