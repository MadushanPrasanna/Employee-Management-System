
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS</title>

    <style>
        .bg{
            background-color:lightgrey;
            width:75%;
            padding:30px 30px;
            margin:auto;
        
        
        }

      #head{
        background-color:;
       
      }
        input[type=text],input[type=number],input[type=email],input[type=date],select{
            width:100%;
            padding:10px,18px;
            margin:8px 0px;
            box-sizing:border-box;
            border:2px solid blue;
            border-radius:5px;

        }
        input[type=submit]{
            padding:10px 30px
            color:while;
            background-color:white;
            font-size:20px;
            
        }
input[type=submit]:hover{
  background-color:green;
  }

table,td,th{
border:2px solid blue;
border-collapse:collapse;

}

body {
  background-image: url('bg1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}


        </style>
</head>
<body>
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

$emsID=$_POST['emsID'];

$query_ems="SELECT * FROM edatabase WHERE ID='$emsID'";
  $result_query_ems=mysqli_query($conn,$query_ems);

 while($row=mysqli_fetch_array($result_query_ems)) {
 
  $Name=$row['Name'];
  $Age=$row['Age'];
  $Email=$row['Email'];
  $Phone=$row['Phone'];
$District =$row['District'];

}
 ?>
 
    
<div class="bg">
  <div id="head"> <h1>Edit Employer Data | Employer ID <?php echo $emsID ?></h1></div>
    <div class="form">
        <form action="update.php"method="POST">
          <input type="text" name="emsID"value="<?php echo $emsID ?>"hidden >
            
            <label>Name</label>
            <input type="text" name="Name"value="<?php echo  $Name ?>" >

            <label>Birth Day</label>
            <input type="date" name="Age"value="<?php echo  $Age ?>" >

            <label>Email</label>
            <input type="email" name="Email"value="<?php echo  $Email ?>" >

            <label>Phone</label>
            <input type="number" name="Phone" value="<?php echo  $Phone ?>">

            <label>Distric</label>
                <select name="District">
                  <option value="<?php echo  $District ?>"><?php echo $District ?></option>
                    <option value="Ampara">Ampara</option>
                    <option value="Anuradapura">Anuradapura</option>
                    <option value="Badulla">Badulla</option>
                    <option value="Batticaloa">Batticaloa</option>
                    <option value="Colombo">Colombo</option>
                    <option value="Galle">Galle</option>
                    <option value="Gampaha">Gampaha</option>
                    <option value="Hambantota">Hambantota</option>
                    <option value="Jaffna">Jaffna</option>
                    <option value="Kalutara">Kalutara</option>
                    <option value="Kandy">Kandy</option>
                    <option value="Kegalle">Kegalle</option>
                    <option value="Kilinochchi">Kilinochchi</option>
                    <option value="Kurunegala">Kurunegala</option>
                    <option value="Mannar">Mannar</option>
                    <option value="Matale">Matale</option>
                    <option value="Matara">Matara</option>
                    <option value="Moneragala">Moneragala</option>
                    <option value="Mullaitivu">Mullaitivu</option>
                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                    <option value="Polonnaruwa">Polonnaruwa</option>
                    <option value="Puttalam">Puttalam</option>
                    <option value="Ratnapura">Ratnapura</option>
                    <option value="Trincomalee">Trincomalee</option>
                    <option value="Vavuniya">Vavuniya</option>

                </select>
            
            <input type="submit" value"Update" name="submit">
      </form>
      </div>
  </div>

   
</body>
</html>

