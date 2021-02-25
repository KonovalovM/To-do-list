<?php
require_once '../configs/pdo_ini.php';
$sth = $pdo->prepare("SELECT * FROM `todo_tasks` WHERE `todo_list_id`=(" . $_GET["listId"] . ")");
    $sth->setFetchMode(\PDO::FETCH_ASSOC);
    $sth->execute();
    $todo_tasks = $sth->fetchAll();
?>

<form id="form" action="modules/add_task.php" method="POST">
    <ul>
        <?php
               foreach ($todo_tasks as $task):
                    ?>
                    <h3 id="time">Date created: <?php echo $task["created_at"];?></h3>
                    <input type="hidden" name="todo_list_id" value="<?php echo $_GET["listId"]; ?>">
                    <h3>TODO</h3>
                    <textarea style="resize: none" name="todo"><?php echo $task["todo"];?></textarea>
                    <h3>NOTES</h3>
                    <textarea style="resize: none" name="notes"><?php echo $task["notes"];?></textarea>
                    <p>Date expires: <input type="date" name="date_expires" value="<?php echo $task["date_expires"];?>" style="color:red">
                    <?php
                endforeach;              
            ?>
    </ul>
    <button type="submit" name="sendTasks" class="btn">SAVE</button>
</form>