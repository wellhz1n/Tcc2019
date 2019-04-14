<?php
require '../../../bootstrap.php';


$validate = validate([
     'nome' => 's',
     'asunto' => 's',
     'email' => 'e',
     'message' => 's',


]);

dd($validate->nome);


?>
