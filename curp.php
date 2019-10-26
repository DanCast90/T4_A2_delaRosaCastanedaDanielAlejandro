<!DOCTYPE html>
<html>
<head>
	<title>CURP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
		
		<form action="procesamiento_curp.php"method="POST">
<div style="border-style: solid; border-width: 2px;">
	<h1>CURP</h1>
	<hr>
	<h3>Nombre(s):<input type="text" name="nombre" id="nombre" required></h3>
	<h3>Apellido paterno:<input type="text" name="app" id="app" required></h3>
	<h3>Apellido Materno:<input type="text" name="apm"	id="apm" required></h3>
	<h3>Año de nacimiento:<input type="number" name="anio"max="2019" min="1900" required></h3>
	<h3>Mes de nacimiento: <input type="number" name="mes" max="12" min="1" id="mes" required></h3>
	<h3>Dia de nacimiento <input type="number" name="dia" max="31" min="1" id="dia" required></h3>
	<h3>Entidad Federativa donde nació: 
		<select name="estado" id="estado" required>
            <option value="AS">Aguascalientes</option>
            <option value="BC">Baja California</option>
            <option value="BS">Baja California Sur</option>
            <option value="CE">Campeche</option>
            <option value="CS">Chiapas</option>
            <option value="CA">Chihuahua</option>
            <option value="CA">Coahuila</option>
            <option value="CA">Colima</option>
            <option value="DF">Distrito Federal</option>
            <option value="DO">Durango</option>
            <option value="EM">Estado de México</option>
            <option value="GO">Guanajuato</option>
            <option value="GO">Guerrero</option>
            <option value="HO">Hidalgo</option>
            <option value="JO">Jalisco</option>
            <option value="MN">Michoacán</option>
            <option value="MS">Morelos</option>
            <option value="NT">Nayarit</option>
            <option value="NL">Nuevo León</option>
            <option value="OA">Oaxaca</option>
            <option value="PA">Puebla</option>
            <option value="QO">Querétaro</option>
            <option value="QR">Quintana Roo</option>
            <option value="SL">San Luis Potosí</option>
            <option value="SA">Sinaloa</option>
            <option value="SA">Sonora</option>
            <option value="TO">Tabasco</option>
            <option value="TS">Tamaulipas</option>
            <option value="TA">Tlaxcala</option>
            <option value="VZ">Veracruz</option>
            <option value="YN">Yucatán</option>
            <option value="ZS">Zacatecas</option>
    
	</select ></h3>
	<h3>Sexo:<select name="sexo" id="sexo" required>
		<option value="M">Femenino</option>
		<option value="H">Masculino</option>
	</select></h3>
	


	<input type="submit" value="Consulta"  ><br><br><br><br><br>

</body>
</html>

