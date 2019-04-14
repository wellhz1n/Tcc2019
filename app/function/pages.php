<?php

function load(){

$page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING);
$home =filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING) ;
$page = (!$page)?'pages/home.php':"pages/{$page}.php";
if(!file_exists($page)){
echo "
<div id='error'>
<h1 class='text-danger' id='t-error' onload='aleta()'><label class='font-weigth-bolder'>Deu Ruim!!!!</label> a pagina <label class='text-info'>{$home}</label> Não existe</h1>



<a href='' id='link' onclick='window.history.go(-1); return false;'>Voltar</a>
</div>
";


error_reporting(0);
ini_set(“display_errors”, 0 );

}
else{

    return $page;
}
}




?>
