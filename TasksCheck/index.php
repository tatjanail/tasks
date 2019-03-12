<?php

require 'database/QueryBuilder.php';

$db = new QueryBuilder;

//$tasks = $db->getAllTasks();

$tasks =$db->all("posts");


?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <a href="/login">Login</a>
        <div class="col-md-12">
            <h1>All posts</h1>
            <a href="create.php" class="btn btn-success">Add post</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Comment</th>
                        <th>date</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                <?php foreach($tasks as $task):?>
                    <tr>
                        <td><?= $task['id'];?></td>
                        <td><?= $task['title'];?></td>
                        <td><?= $task['comment'];?></td>
                        <td><?= $task['date'];?></td>
                        <td>
                            <a href="show.php?id=<?= $task['id'];?>" class="btn btn-info">
                                Show
                            </a>
                            <a href="edit.php?id=<?= $task['id'];?>" class="btn btn-warning">
                                Edit
                            </a>
                            <a onclick="return confirm('are you sure?');" href="delete.php?id=<?= $task['id'];?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>