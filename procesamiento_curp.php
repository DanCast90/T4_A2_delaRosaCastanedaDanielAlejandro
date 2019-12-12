<?php
	echo "<link rel='stylesheet' href=css/bootstrap.min.css'>
	<script src='js/jquery.js'></script>
	<script src='js/jquery.min.js'></script>
	<script src='js/bootstrap.min.js'></script>";

	$nombre=strtolower($_POST['nombre']);
	$app=strtolower($_POST['app']);
	$apm=strtolower($_POST['apm']);
	$anio=$_POST['anio'];
	$mes=$_POST['mes'];
	$dia=$_POST['dia'];
	$estado=strtolower($_POST['estado']);
	$sexo=strtolower($_POST['sexo']);
	
	$nombre1=str_replace(" ", "", $nombre);
	$app1=str_replace(" ", "", $app);
	$apm1=str_replace(" ", "", $apm);
	if (strlen($nombre1)==0 || strlen($apm)==0 || strlen($app)==0) {
		echo "<h1>SE HA LLENADO DE CAMPOS VACIOS, POR FAVOR VERIFIQUE</h1>";
		echo "<button type='button' class='btn btn-outline-success'>
          <a href='curp.php'>Volver</a></button>";
	}else{

		 $l1=substr($app,0,1);
          $l2="";
       
            for($i=0; $i<=strlen($app); $i++){
                if(substr($app,$i,$i)=="a"||substr($app,$i,$i)=="e"||substr($app,$i,$i)=="i"||substr($app,$i,$i)=="o"||substr($app,$i,$i)=="u"){
                    $l2=substr($app,$i,$i);
                    $i=strlen($app);
                    
                }
            }
             $l3=substr($apm,0,1);
            
          	$array = explode(" ",$nombre);
            $resultado = "";
            for ( $i = 0; $i < count($array); $resultado = $array[$i][0], $i++);
            $l5= substr($anio,2,4);
            $l6= substr($anio,4,6);
            $l7="";
            for($i=1; $i<=strlen($app); $i++){
                if(substr($app,$i,$i)!="a"&&substr($app,$i,$i)!="e"&&substr($app,$i,$i)!="i"&&substr($app,$i,$i)!="o"&&substr($app,$i,$i)!="u"){
                    $l7=substr($app,$i,$i-1);

                    $i=strlen($app);
                }
            }
            $l8="";
            for($i=1; $i<=strlen($apm); $i++){
                if(substr($apm,$i,$i)!="a"&&substr($apm,$i,$i)!="e"&&substr($apm,$i,$i)!="i"&&substr($apm,$i,$i)!="o"&&substr($apm,$i,$i)!="u"){
                    $l8=substr($apm,$i,$i-1);
                    $i=strlen($apm);
                }
            }
            $aux=count($array);
            $aux=$aux-1;
            $nombre=$array[$aux];
            $l9="";
            for ($i = 1; $i <= strlen($nombre); $i++){
                if(substr($nombre,$i,$i)!="a"&&substr($nombre,$i,$i)!="e"&&substr($nombre,$i,$i)!="i"&&substr($nombre,$i,$i)!="o"&&substr($nombre,$i,$i)!="u"){
                    $l9=substr($nombre,$i,$i-1);
                    $i=strlen($nombre);
                }
            }

            $estado=substr($estado,0,2);
            $curp=$l1.$l2.$l3.$resultado.$l5.$l6.$mes.$dia.$sexo.$estado.$l7.$l8.$l9;
            $curp=strtoupper($curp);
            echo $curp;
	}

?>