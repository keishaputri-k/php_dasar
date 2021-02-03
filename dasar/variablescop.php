<?php
//Lingkup Variable
    $x = 10;
    function showX(){
        global $x;
        echo $x;
    }
    showX();
?>