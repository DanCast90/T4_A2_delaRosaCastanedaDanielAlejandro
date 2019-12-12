<?php
$cad = htmlspecialchars($_POST['Cadena']);
$letra = htmlspecialchars($_POST['Caracterer']);
$numeroVocales = preg_match_all('/[aeiouAEIOU]/i', $cad);
$numeroCon = preg_match_all('/[qwrtypsdfghjklñzxcvbnmQWRTYPSDFGHJKLÑZXCVBNM]/i', $cad);
$apa = substr_count($cad, $letra, 0, (strlen($cad)));
$cadL = "";
for ($i = 0; $i < strlen($cad); $i++) {
	if (($i % 2) == 0) {
		$cadL[$i] = strtoupper(substr($cad, $i, ($i + 1)));
	} else {
		$cadL[$i] = strtolower(substr($cad, $i, ($i + 1)));
	}
}
echo '<br>
    <br>
    <head>
    <title>Cadena de Caracteres</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
    <div style="border-style: all;text-align: center; ">
    <label for="">Vocales:</label>
    <input type="text" name="vocales" id="vocales" value="' . $numeroVocales . '">
    <br>
    <br>
    <label for="">Consonantes:</label>
    <input type="text" name="consonantes" id="consonantes" value="' . $numeroCon . '">
    <br>
    <br>
    <label for="">Cantidad de veces del caracter:</label>
    <input type="text" name="nLetra" id="nLetra" value="' . $apa . '">
    <br>
    <br>
    <label for="">Cadena loca:</label>
    <input type="text" name="cLoca" id="cLoca" value="' . $cadL . '">
    </div>
    </body>



    ';
?>