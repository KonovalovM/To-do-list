<?php
require_once '../configs/pdo_ini.php';
   if (isset($_GET['listId'])){
       $sth = $pdo->prepare("DELETE FROM `todo_lists` WHERE `id`=" . $_GET["listId"]);
       $sth->setFetchMode(\PDO::FETCH_ASSOC);
       $sth->execute();
       }

include "../modules/list.php";