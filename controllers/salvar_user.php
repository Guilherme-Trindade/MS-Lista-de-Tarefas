<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("../Models/user.php");
require_once("../Models/user_dao.php");

$user = new User ($_POST["email"],$_POST["password"]);
UserDAO::getInstance()->save($user);




?>