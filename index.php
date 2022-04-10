<?php

require 'functions.php';

class Task {
    public $description;
    public $completion;
}

$pdo = connectToBD();
$tasks = fetchAllTasks($pdo);

require 'index.view.php';