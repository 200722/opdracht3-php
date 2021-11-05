<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


// database connection will be here
// include database and object files

include_once '../config/database.php';
include_once '../objects/category.php';
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// initialize object 
$category = new Category($db);

// Filling data
// welcome data from form
$category->set_sort($_POST['sort']);
$category->set_naam($_POST['naam']);
$category->set_beschrijving($_POST['beschrijving']);

// Run query
echo $category->create($category);
