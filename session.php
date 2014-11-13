<?
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require 'include/configure.php';
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User

$ses_sql = mysql_query("select name from administrator where name='$user_check'");
$row = mysql_fetch_assoc($ses_sql);

$login_session = $row['name'];
if(!isset($login_session)){
	header('Location: login.php'); // Redirecting To Home Page
}
