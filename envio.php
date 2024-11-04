<html>
<body>

Hola <?php echo $_POST["nombre"]; ?> !<br>

Tu correo es <?php echo $_POST["correo"]; ?>

Has enviado el siguiente mensaje: <p> <?php echo $_POST["mensaje"]; ?> </p>

Tu función es la siguiente: <p> <?php echo $_POST["funcion"]; ?> </p>

Tu respuesta a si deseas recibir respuesta:  <?php echo $_POST["envioEmail"]; ?> 
</body>
</html>