<?php
if ( isset ( $_COOKIE["user_id"] ) ) {
    ?>
    <a href = "modules/exit.php">Exit</a>
    <?php
} else {
    ?>
    <a href = "#" id = "open-enter">Enter</a>
    <?php
}
