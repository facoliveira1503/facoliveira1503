<?php
    session_start();

    include "cabecalho.php";
    $especie= $_POST["especie"];

    if($especie == 'c'){
        include "classeCavalo.php";
        $c = new Cavalo($_POST);
        $_SESSION["Cavalo"][]=$c;
    }elseif($especie == 'l'){
        include "classeLeao.php";
        $l = new Leao($_POST);
        $_SESSION["Leao"][]=$l;
    }elseif($especie == 'e'){
        include "classeElefante.php";
        $e = new Elefante($_POST);
        $_SESSION["Elefante"][]=$e;
    }else{
        include "classeRinoceronte.php";
        $r = new Rinoceronte($_POST);
        $_SESSION["Rinoceronte"][]=$r;
    }

?>