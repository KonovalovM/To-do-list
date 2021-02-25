<?php
require_once '../configs/pdo_ini.php';

if ( isset( $_POST["addTask"] ) ) {
    $sth = $pdo->prepare( "INSERT INTO todo_lists (`title`, `user_id`) VALUES ('" . $_POST["addTask"] . "', '" . $_COOKIE["user_id"] . "')" );
    $sth->setFetchMode( \PDO::FETCH_ASSOC );
    $sth->execute();
    $sth = $pdo->prepare( "SELECT `id` FROM todo_lists WHERE id=(SELECT max(id) FROM todo_lists)" );
    $sth->setFetchMode( \PDO::FETCH_ASSOC );
    $sth->execute();
    $list_id = $sth->fetchAll();
    foreach ( $list_id as $id ):
    $sth = $pdo->prepare( "INSERT INTO `todo_tasks` (`todo_list_id`) VALUES (" . $id["id"] . ")" );
    $sth->setFetchMode( \PDO::FETCH_ASSOC );
    $sth->execute();
    endforeach;
}

if ( isset( $_POST["sendTasks"] ) ) {
    $sth = $pdo->prepare( "UPDATE `todo_tasks` SET `todo`=('" . $_POST["todo"] . "'), `notes`=('" . $_POST["notes"] . "'), `date_expires`=('" . $_POST["date_expires"] . "') WHERE `todo_list_id`=(" . $_POST["todo_list_id"] . ")" );
    $sth->setFetchMode( \PDO::FETCH_ASSOC );

    $sth->execute();
    var_dump( $sth );
}

header ( "location: /" );
