<?php

require 'database/QueryBuilder.php';

$db = new QueryBuilder;

$data = [
    "id"    =>  $_GET['id'],
    "title" =>  $_POST['title'],
    "content"   =>  $_POST['content']
];

$db->updateTask($data);

header("Location: http://localhost/MyNotes0/Tasks3/"); exit;