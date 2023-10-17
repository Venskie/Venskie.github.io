
<?php
 
   require 'connection.php';
   error_reporting(0);

    $img = $_POST['image'];
    $folderPath = "./attendanceImage/";
  
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("admin/attendanceImage", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = date("Y-m-d",time()). uniqid(). '.png';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);

    if(file_put_contents($file, $image_base64)){
      echo"<script> alert('Sucessfull'); window.location.replace('attendance.php');</script>";
    } else{
      echo"<script> alert('Error Uploading File'); </script>";
    }

?>