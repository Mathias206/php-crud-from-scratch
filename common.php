<?php 

/**
 * scape html para mostrar mensagem ao usuario
 */



function escape($html) {
    return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

?>