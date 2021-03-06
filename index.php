<?php

require 'bootstrap.php';




$tasks = $query->selectALL('todos');



require 'index.view.php';
