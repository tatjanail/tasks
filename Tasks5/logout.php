<?php

reguire ('connect.php');
unset($_SESSION['logged_user_id']);
header('location:index.php' );
