<?php

require 'Task.php';
$query = require 'core/bootstrap.php';
$todos = $query->selectAll('todo.todos', 'Task');

require 'views/index.view.php';
