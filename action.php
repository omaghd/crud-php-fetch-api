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

// Handle Fetch All Users Ajax Request
if(isset($_GET["read"])){
    $users = $db->retrieve();
    $output = '';
    if(count($users)>0){
        foreach($users as $user){
            $output .= '
                        <tr>
                            <th>'.$user["id"].'</th>
                            <th>'.$user["first_name"].'</th>
                            <th>'.$user["last_name"].'</th>
                            <th>'.$user["email"].'</th>
                            <th>'.$user["phone"].'</th>
                            <th>
                                <a href="#" id="'.$user["id"].'" data-toggle="modal" data-target="#editUserModal" class="btn btn-warning btn-sm rounded-pill editLink">Update</a>
                                <a href="#" id="'.$user["id"].'" class="btn btn-danger btn-sm rounded-pill deleteLink">Delete</a>
                            </th>
                        </tr>
            ';
        }
        echo $output;
    }else{
        echo    "<tr>
                    <td colspan='6'>No Users found in DB!</td>
                </tr>";
    }
}

// Handle Edit Users Ajax Request
if(isset($_GET["edit"])){
    $id = $_GET["id"];
    $user = $db->fetchOne($id);
    echo json_encode($user);
}

// Handle Update Users Ajax Request
if(isset($_POST['edit'])){
    $id    = $util->testInput($_POST["id"]);
    $fname = $util->testInput($_POST["fname"]);
    $lname = $util->testInput($_POST["lname"]);
    $email = $util->testInput($_POST["email"]);
    $phone = $util->testInput($_POST["phone"]);
    
    if($db->update($id, $fname, $lname, $email, $phone)){
        echo $util->showMessage('success', 'User Updated Succesfully!');
    }else{
        echo $util->showMessage('danger', 'Something is wrong!');
    }
}

// Handle Delete User Ajax Request
if(isset($_GET['delete'])){
    $id = $_GET['id'];
    if($db->delete($id)){
        echo $util->showMessage('danger', 'User Deleted Succesfully!');
    }
}