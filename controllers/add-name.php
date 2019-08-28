<?php

$app['database']->insert('todo.users', [
    'name' => $_POST['name'],
]);

var_dump($_POST);
