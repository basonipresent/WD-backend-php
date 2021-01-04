<?php
ini_set('display_error', '1');
error_reporting(E_ALL);

$homeUrl = "http://localhost/dev/practice/simple-crud/";
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$recordPerPage = 5;
$formRecordNumber = ($recordPerPage * $page) - $recordPerPage;
