<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"lat_dbase");
$input = mysqli_query($con,"INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Glen', 'Gandari', '32'),('NOFIAN','AFRIZAL','23')");

//insert satu values data
//$input = mysqli_query($con,"INSERT INTO tbl_mhs (FirstName, LastName, Age)
//VALUES ('Karina', 'Suwandi', '29')");

if($input){
    echo "Input data berhasil dibuat";
}

mysqli_close($con);
?>