<?php
include "database.php";

$query = "UPDATE biodata SET Nama = '$_POST[Nama]', Umur = '$_POST[Umur]', Alamat = '$_POST[Alamat]' WHERE id = '$_POST[id]'";
$data = $db -> prepare($query);
$data -> execute();

header("location: form.php");