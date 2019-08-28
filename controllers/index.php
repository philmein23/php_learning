<?php

require 'Task.php';

$todos = $app['database']->selectAll('todo.todos', 'Task');

var_dump($todos);

require 'views/index.view.php';
