<?php

require 'database/QueryBuilder.php';

$db = new QueryBuilder;

$id = $_GET['id'];
$table="posts";

$db->delete($table, $id);

header("Location:./"); exit;