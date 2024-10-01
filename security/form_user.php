<?php
// Start the session
session_start();


require_once 'models/UserModel.php';
include_once('security.php');

$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;



$_id = isset($_GET['id']) ? $_GET['id'] : null; // Nếu id tồn tại, gán giá trị của nó, nếu không gán null

if ($_id != null) {
    echo "id nguoi dung chua ma hoa la: " . $_id;
    echo "<br>";
    echo "id nguoi dung giai ma hoa la: " . decryptId($_id, KEY_SECURITY);
    echo '<br>';
}


if (!empty($_GET['id'])) {
    $_id_de = decryptId($_GET['id'], KEY_SECURITY);
    $_id = decryptId($_GET['id'], KEY_SECURITY);
    $user = $userModel->findUserById($_id);
}

if (!empty($_POST['submit'])) {

    $check_value_name = validateName($_POST['name']);
    $check_value_password = validateName($_POST['password']);

    if ($check_value_name === true && $check_value_password === true) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
    }
    if ($check_value_name !== true) {
        echo $check_value_name;
    }
    if ($check_value_password !== true) {
        echo $check_value_password;
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>

</html>