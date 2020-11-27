<?php

require_once 'db.php';
require_once 'util.php';

$db = new Database();
$util = new Util();

// Handle Add New User Ajax Request
if(isset($_POST["add"])){
    $fname = $util->testInput($_POST["fname"]);
    $lname = $util->testInput($_POST["lname"]);
    $email = $util->testInput($_POST["email"]);
    $phone = $util->testInput($_POST["phone"]);

    if($db->insert($fname, $lname, $email, $phone)){
        echo $util->showMessage('success', 'User Added Succesfully!');
    }else{
        echo $util->showMessage('danger', 'Something is wrong!');
    }
}