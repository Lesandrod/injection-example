<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.ico" type="image/x-icon">
    <title>Login</title>
    <link rel="stylesheet" href="css/logan.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
   <form action="procesardatos.php"  method="post">
       <tr>
       <td colspan="2" align="center"
               <?PHP if ($_GET["errorusuario"]=="si"){?>
                bgcolor=#FF0000><span  style="color:red; "><b style="font-size:24px;">Datos incorrectos</b></span>
                <?PHP }else{}?></td>
       </tr>

   <h1 class="">Servicio Tecsup</h1>
   <br>
   <p>Usuario  <input placeholder="ingrese su usuario" type="text" id="usuario" name="usuario"></p>
   <br>
   <p>Contraseña <input placeholder="ingrese su contraseña" type="password" id="contrasena" name="contrasena"></p>
   <br>
   <input type="submit" value="Iniciar sesión">
   
   
   </form> 
</body>
</html>
