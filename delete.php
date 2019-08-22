<?php
include 'db.php';
$id = $_GET['id'];


$sql =" delete from task where id = '$id' ";
$db->query($sql);

$val=$db->query($sql);

if ($val) {

	#echo "<h1> inserted </h1>"
	header('location:index.php');
	# code...
};








?>