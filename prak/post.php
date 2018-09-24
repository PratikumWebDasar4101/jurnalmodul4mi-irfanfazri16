
<?php
$Hobi=$_POST['hobi'];

$file=$_FILES['dokumen'];
$nama_file =$file['name'];
$nama_tmp =$file['tmp_name'];
$upload_dir="upload/";
$upload_target=$upload_dir.$nama_file;
move_uploaded_file($nama_tmp, $upload_target);
echo "<img src=$upload_dir"."nama_file>";
 
 echo "<br>";

 $Hobi = array("main", "nonton","makan");
array_push($Hobi,"main", "nonton","makan");
;



?>