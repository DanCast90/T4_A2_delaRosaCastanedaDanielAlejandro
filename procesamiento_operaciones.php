<?php
if (isset($_POST) && !empty($_POST)) {
	$op = htmlspecialchars($_POST['operacion']);
	$n1 = "";
	$n2 = "";
	$o;
	$ref;
	for ($i = 0; $i < strlen($op); $i++) {
		if ($op[$i] == "+" || $op[$i] == "-" || $op[$i] == "*" || $op[$i] == "/") {
			$o = $op[$i];
			$ref = $i;
		}
	}

	for ($i = 0; $i < $ref; $i++) {
		$n1[$i] = $op[$i];
	}

	for ($i = $ref + 1; $i < strlen($op); $i++) {
		$n2[$i] = $op[$i];
	}
	$num1 = (int) $n1;
	$num2 = (int) $n2;
	$r = 0;
	if ($o == "+") {
		$r = $num1 + $num2;
	}
	if ($o == "-") {
		$r = $num1 - $num2;
	}
	if ($o == "*") {
		$r = $num1 * $num2;
	}
	if ($o == "/") {
		$r = $num1 / $num2;
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
        <label for="">Resultado de</label>
        <input type="text" name="nBinario" id="nBinario" value="' . $op . '=' . $r . '">
        <br>
        <br>
 </div>
    </body>
        ';
} else {
	echo "Faltan datos";
}
?>