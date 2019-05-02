<?php
#require '../../../bootstrap.php';



if (isset($_SESSION["login"])&& $_SESSION["nivel"] == 0) {
    echo "Autorizado";
}

elseif (isset($_SESSION["login"])&& $_SESSION["nivel"] == 1) {
    
    header("Location: http://localhost:8081/Tcc/public/?page=home");
    die();
}
else{
    header("Location: http://localhost:8081/Tcc/public/?page=home");
    die();

}

?>