<?php
include "database.php";

$query = "SELECT *FROM biodata WHERE id = '$_GET[id]'";
$data = $db -> prepare($query);
$data -> execute();

$biodata = $data -> fetch(PDO :: FETCH_LAZY);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Helloland</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
	<style>
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color:rgba(255, 99, 71, 1);
      padding: 25px;
    }
    
  </style>
</head><br><br>
	
	
<body style="background-color:powderblue;">
	<div class="container text-center">
  <h3>Hello seluruh masyarakat Indonesia !</h3><br>
  <p>Silahkan isi untuk mengubah biodata anda</p>
 <br>
		 
<div class="container text-left">
	<form method = "post" action="update.php">
	<input type="hidden" name="id" value="<?php echo $biodata -> id ?>"/>
    <div class="form-group">
      <label for="Nama">Nama:</label>
		<input type="text" name="Nama" class="form-control" placeholder="Masukkan Nama"  id="Nama" required class="validate" value="<?php echo $biodata -> Nama ?>">
    </div>
    <div class="form-group">
      <label for="Umur">Umur:</label>
		<input type="text" name="Umur" class="form-control" placeholder="Masukkan Umur"  id="Umur" required class="validate" value="<?php echo $biodata -> Umur ?>">
    </div>
	 <div class="form-group">
      <label for="Alamat">Alamat:</label>
		<input type="text" name="Alamat" class="form-control" placeholder="Masukkan Kabupaten/Kota"  id="Alamat" required class="validate" value="<?php echo $biodata -> Alamat ?>">
    <button type="submit" class="btn btn-primary">SIMPAN</button>
</form>
</div><br>

	
<hr/>

<!--<table border = "1">
    <thead>
		<h5>Nama masyarakat yg sudah terdaftar</h5><br>
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
    </thead>
    <tbody>
       <?php
		include "database.php";
       $query = "SELECT*FROM biodata";
       $data = $db->prepare($query); 
       $data->execute();

       $no =1;
       while($biodata = $data->fetch(PDO ::FETCH_LAZY)){
          ?>

        <tr>
            <td> <?php echo $no ?> </td>
            <td> <?php echo $biodata['Nama'] ?> </td>
            <td> <a href="delete.php?id=<?php echo $biodata->id ?>">Hapus</a></td>
       </tr>
       <?php
            $no++;
       }
       ?>
    </tbody>
		</table>-->
	</div><br>
	
	<footer class="container-fluid text-center">
  <p> Helloland ©Copyright 2020 by Yayuk wulandari</p>
</footer>
	</body>
	</html>
