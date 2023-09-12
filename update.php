<?php
// database connection
 $server = "localhost";
 $user = "root";
 $password ="";
 $database = "edatabase";

 $conn = mysqli_connect($server,$user,$password,$database);
 if (!$conn) {
 die("Database Not Connected".mysqli_connect_error());
 }else{
  echo"Database Connected";
 }
$ID=$_POST['emsID'];
$Name=$_POST['Name'];
$Age=$_POST['Age'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$District=$_POST['District'];

$query_update="UPDATE edatabase SET Name='$Name',Age='$Age',Email='$Email',Phone='$Phone',District='$District'WHERE ID='$ID'";

if (mysqli_query ($conn,$query_update)) {
    echo "Updated";
    header('Location:index.php');
}else{
    echo "Not Updated";
}

?>