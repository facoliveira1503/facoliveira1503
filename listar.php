<?php
    include "classeCavalo.php";
    include "classeLeao.php";
    include "classeElefante.php";
    include "classeRinoceronte.php";
    include "cabecalho.php";

   session_start();

   if(isset($_SESSION["Rinoceronte"])){
      foreach($_SESSION["Rinoceronte"] as $i=>$r){
         $r->exibir();
      }
   }
   if(isset($_SESSION["Cavalo"])){
      foreach($_SESSION["Cavalo"] as $i=>$c){
         $c->exibir();
      }
   }
   if(isset($_SESSION["Leao"])){
      foreach($_SESSION["Leao"] as $i=>$l){
         $l->exibir();
      }
   }
   if(isset($_SESSION["Elefante"])){
      foreach($_SESSION["Elefante"] as $i=>$e){
         $e->exibir();
      }
   }
?>