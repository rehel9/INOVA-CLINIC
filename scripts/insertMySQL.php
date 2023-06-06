<?php 
    
    require("connection.php");

    $nombres = $_POST["nombres"];
    $apellido_paterno = $_POST["apellido-paterno"];
    $apellido_materno = $_POST["apellido-materno"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $tipo_de_sangre = $_POST["tipo-de-sangre"];
    $alergias = $_POST["alergias"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];

//    $paises = $_POST["paises"];
//    $estados = $_POST["estados"];
//
//    $pais_actual = $_POST["pais-actual"];
//    $estado_actual = $_POST["estado-actual"];
//    $ciudad = $_POST["ciudad"];
//    $colonia = $_POST["colonia"];
//    $calle = $_POST["calle"];
//    $numero = $_POST["numero"];
//    $municipio = $_POST["municipio"];
//    $codigo_postal = $_POST["codigo-postal"];
//
//    $responsable_nombre = $_POST["responsable-nombre"];
//    $responsable_ap = $_POST["responsable-ap"];
//    $responsable_am = $_POST["responsable-am"];
//    $relacion = $_POST["relacion"];
//    $responsable_email = $_POST["responsable-correo-electronico"];
//    $responsable_telefono = $_POST["responsable-telefono"];

    $sql = "INSERT INTO cliente (nombres, apellido_paterno, apellido_materno, edad, sexo, peso, altura, tipo_de_sangre, alergia, email, telefono) 
                        VALUES ('$nombres','$apellido_paterno','$apellido_materno','$edad','$sexo','$peso','$altura','$tipo_de_sangre','$alergias','$email','$telefono')";
	
    $insertar_cliente = mysqli_query($connection, $sql);


   if (!$insertar_cliente) {
        echo'
            <script type="text/javascript">
            alert("Error");
            window.location.href="preadmisionhospitalaria.html";
            </script>';
    } else {
        echo'
            <script type="text/javascript">
            alert("Informacion guardada con exito");
            window.location.href="preadmisionhospitalaria.html";
            </script>';
    }

    mysqli_close($connection);
?>
