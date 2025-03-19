<?php 

require_once "topo.php";

require_once "menu.php";

if (isset($_GET["p"])) {
    $p = $_GET["p"];
    switch ($p) {
        case 1:
            require_once "conteudo.php";
            break;
        case 2:
            require_once "professores.php";
            break;
        case 3:
            require_once "cursos.php";
            break;
        case 4:
            require_once "login.php";
            break;
        case 5:
            require_once "fale.php";
            break;
        default:
            require_once "conteudo.php";
            break;
    }


}
else{
    require_once "conteudo.php";
}

require_once "rodape.php";

?>


