<?php
require_once 'models/UserModel.php';
include_once('security.php');
$userModel = new UserModel();
session_start();

$user = NULL; //Add new user
$id = NULL;



$_id_session = isset($_SESSION['id']);


if (!empty($_GET['id'])) {
    $_id_de = decryptId($_GET['id'], KEY_SECURITY);
    $_id = decryptId($_GET['id'], KEY_SECURITY);
    // $userModel->deleteUserById($_id); //Delete existing user
    try {
        $userModel->deleteUserById($_id); 
        $_SESSION['id'] = '';
    } catch (Exception $e) {
    }
}
header('location: list_users.php');
// header('location: list_users.php');
// if (!empty($_GET['id'])) {
//     $id = $_GET['id'];
//     $userModel->deleteUserById($id);//Delete existing user
// }
