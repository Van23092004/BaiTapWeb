<?php
include 'functions.php';

$index = $_GET['id'];

unset($flowers[$index]);

header('Location: index.php');
exit;
?>
