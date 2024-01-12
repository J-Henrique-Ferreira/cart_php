<?php 

require "../../vendor/autoload.php";

use src\infra\database\Connection;
use src\infra\database\repository\category\Category;

$category = new Category;

$category->name = "Aulas";
$category->id = 123;
$category->description = "Descrição de teste";

var_dump($category);