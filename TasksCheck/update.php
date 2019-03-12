<?php

require 'database/QueryBuilder.php';

$db = new QueryBuilder;

$data = [
    "id"    =>  $_GET['id'],
    "title" =>  $_POST['title'],
    "comment"   =>  $_POST['comment'],
    "date"   =>  $_POST['date']
];
$table="posts";

$tasks = $db->update($table, $data);

header("Location:./"); exit;