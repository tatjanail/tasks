<?php

require 'database/QueryBuilder.php';

$db = new QueryBuilder;

$data = [
    "id"    =>  $_GET['id'],
    "title" =>  $_POST['title'],
    "content"   =>  $_POST['content']
];
$table="tasks";

$tasks = $db->update($table, $data);

header("Location:./"); exit;