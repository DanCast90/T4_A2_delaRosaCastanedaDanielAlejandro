<?php
if (isset($_POST) && !empty($_POST)) {
	$num1 = htmlspecialchars($_POST['decimal']);
	$num = (int) $num1;
	$b = decbin($num);

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
        <label for="">Numero Binario</label>
        <input type="text" name="nBinario" id="nBinario" value="' . $b . '">
        <br>
        <br>
	</div>


	</body>

        ';
} else {
	echo "Faltan datos";
}
?>