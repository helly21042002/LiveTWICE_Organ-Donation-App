<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'dbconnect.php';

$sql = "SELECT * FROM request WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  //  $sql = "INSERT INTO donor (name,guardiansname,gender,dob,weight,bloodgroup,organ,email,address,contact,username,password) values ('$name','$guardiansname','$gender','$dob','$weight','$bloodgroup','$organ','$email','$address','$contact', '$username', '$password') SELECT * FROM request ";

    $sql2 = "INSERT INTO blood (name,gender,dob,weight,bloodgroup,organ,address,contact,bloodqty,collection) SELECT name,gender,dob,weight,bloodgroup,organ,address,contact,bloodqty,collection FROM request WHERE id = $id";
    
   

    $final= mysqli_query($conn, $sql2);
    // Delete the row from the old table
    $sql3 = "DELETE FROM request WHERE id = $id";
    mysqli_query($conn, $sql3);
}


if($final){
    echo"Declined";
    header('Location:viewblood.php');
}else{
    echo"ERROR!!";
}
}
?>