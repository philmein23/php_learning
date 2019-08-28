<?php

require 'Task.php';

$todos = $app['database']->selectAll('todo.todos', 'Task');

require 'views/index.view.php';
