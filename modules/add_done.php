<?php
require_once '../configs/pdo_ini.php';
if (isset($_GET['doneId'])){
       $sth = $pdo->prepare("UPDATE `todo_lists` SET `done`= 1 WHERE `id`=" . $_GET["doneId"]);
       $sth->setFetchMode(\PDO::FETCH_ASSOC);
       $sth->execute();
       }
include "../modules/list.php";