<?php
include "database.php";

$query = "INSERT INTO biodata VALUES ('','$_POST[Nama]', '$_POST[Umur]', '$_POST[Alamat]')";
$data = $db->prepare($query); //menyiapkan
$data->execute(); //menjalankan

header ("location: form.php");
