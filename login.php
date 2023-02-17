<?php
$error;
if(!empty($_POST["nickname"]) && !empty($_POST["password"])){
    $nickname =$_POST["nickname"];
    $password =$_POST["password"];
    if($nickname == "cliente" && $password == 123){
        $error = "OK";
        header("Location: cliente.php");
    }else{if($nickname == "administrador" && $password == "asd"){
        $error = "OK";
        header("Location: administrador.php");
    }else{
        $error = "incorrecto";
        header("Location: index.php?error=$error");
    }
}
}else{
    $error ="campos-vacios";
    header("Location: index.php?error=$error"); //parametro tipo get es el ?
}