<?php
require 'include/class/database.php';
// hide deprecate error
error_reporting(E_ALL ^ E_DEPRECATED);
$db = new Database("localhost", "root", "root", "sms");