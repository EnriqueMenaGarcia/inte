<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <title>PI. Aplicación web dinámica en un servicio de la nube</title>
    
</head>
<body>
    <h1>PI. Aplicación web dinámica en un servicio de la nube</h1>

<br>
<form id="login" >
    <h1>Inicia  Sesion</h1><br>
    <label for="fname">Usuario:</label><br><br>
        <input type="text"  name="usuario"  id="usuario" ><br><br>
    <label for="fname">Contraseña:</label><br><br>
        <input type="num"  name="contraseña"  id="contraseña" ><br><br>
        <input type="button"  value="Ingresar"  id="iniciarsesion" class="boton" ><br>
        <h1>Usuario: enrique Contraseña: 4567</h1>
    </form>
<br>   
<div id="buscador" class="caja">
<label for="selecion ">Seleciona y busca </label>
 <input type="radio" name="genero" value="1" id="hombre">Hombre
<input type="radio" name="genero" value="2" id="mujer">Mujer<br><br>
 <button value="buscar" onclick="obtenerusuario()" class="boton" id="boton0">Buscar</button>
 
</div>
<br>  
<div id="cajaprincipal">

<div id="resultados">
</div>

<div id="misamigos">
Mis registros:
</div>
</div>
<diV id="cajavideos">
<iframe width="727" height="409" src="https://www.youtube.com/embed/u-WkRMYhFb0" title="Desplegando un proyecto Spring-Boot en Heroku" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="727" height="409" src="https://www.youtube.com/embed/nm7gWyZvdVU" title="Javascript FullStack #14 (Final), Despliegue con Heroku y Mongodb Atlas" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</diV>
<footer>
    Enrique Mena Garcia
<br> PI. Aplicación web dinámica en un servicio de la nube
<br>
</footer>
</body>
<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
<script src="procesar.js"></script> 
</html>