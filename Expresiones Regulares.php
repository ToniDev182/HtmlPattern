<?php
if (isset($_POST['Enviar'])) {

    echo "<h3>Datos Recibidos</h3>";

    // Mostrar resultados de los campos
    echo "<br>DNI: " . $_POST['dni'];
    echo "<br>Matrícula: " . $_POST['matricula'];
    echo "<br>Correo: " . $_POST['email'];
    echo "<br>IBAN: " . $_POST['iban'];
    echo "<br>Teléfono: " . $_POST['telefono'];
    echo "<br>Código Postal: " . $_POST['codigo_postal'];
    echo "<br>Fecha: " . $_POST['fecha'];

} else {
    echo "Formulario no enviado correctamente.";
}
?>
