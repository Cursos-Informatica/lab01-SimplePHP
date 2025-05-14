<?php
if (isset($_GET['id'])) {
    $todos = file("todo.txt", FILE_IGNORE_NEW_LINES);
    unset($todos[$_GET['id']]);
    file_put_contents("todo.txt", implode(PHP_EOL, $todos) . PHP_EOL);
}
header("Location: index.php");
exit;