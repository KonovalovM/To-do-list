<?php 
require_once './configs/pdo_ini.php';
            
if (isset($_POST ["email"]) && isset ($_POST ["password"]) && isset ($_POST ["password3"] ) && $_POST["email"] != "" && $_POST ["password"] != "" && $_POST ["password3"] != ""){
    $sth = $pdo->prepare("INSERT INTO users (`email`, `password`, `name`) VALUES ('" . $_POST["email"] . "', '" . $_POST["password"] . "', '" . $_POST["name"] . "')");
    $sth->setFetchMode(\PDO::FETCH_ASSOC);
    $sth->execute();
}

    