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

th{
  background-color:#4287f5;
}

table tr:hover{
  background-color:white;
  font-size: 115%;
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
  echo"Database connected";
 }
?>
  
    
<div class="bg">
  <div id="head"> <h1>Insert Employer Data</h1></div>
    <div class="form">
        <form action=""method="POST">
            
            <label>Name</label>
            <input type="text" name="Name"placeholder="Employer Name" required>

            <label>Birth Day</label>
            <input type="date" name="Age"placeholder="Employer Age" required>

            <label>Email</label>
            <input type="email" name="Email"placeholder="Employer Email" required>

            <label>Phone</label>
            <input type="number" name="Phone"placeholder="Employer Phone Number" required>

            <label>Distric</label>
                <select name="District">
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
            
            <input type="submit"name="submit">
      </form>
      </div>
  </div>

 
<?php
//Data Insert
  $emsName =$_POST['Name'];
  $emsAge =$_POST['Age'];
  $emsEmail =$_POST['Email'];
  $emsPhone =$_POST['Phone'];
  $emsDistrict =$_POST['District'];





  if ($emsName==null) {
    echo "No Data";
  }else{

  $query = "INSERT INTO edatabase(Name,Age,Email,Phone,District)VALUES('$emsName','$emsAge','$emsEmail','$emsPhone','$emsDistrict')";
  
  if (mysqli_query($conn,$query)) {
    echo "Data Inserted";
  }else{
    echo "Data not Inserted".mysqli_error($conn);
  }
  }

  ?>

<!--search-->
<div class="bg">
  <div id="head"> <h1>Edit Employer Data</h1>
    <div class="form">
        <form action="edit.php"method="POST">
            <label>ID</label>
            <input type="text" name="emsID" placeholder="Employer ID" required>
                    <input type="submit" value="Edit"name="submit">
      </form>
      </div>
  </div>

</div>

<!--Table-->
  <?php
  $query_ems="SELECT * FROM edatabase";
  $result_ems=mysqli_query($conn,$query_ems);
?>

  
  <h1>Employer Data</h1>
  <table>
    <tr>
      <th>ID</th>
            <th>Name</th>
                  <th>Birth Day</th>
                        <th>Email</th>
                              <th>Phone</th>
                              <th>District</th>
                              </tr>

<?php 
  while($row=mysqli_fetch_array($result_ems)) {
    $ID =$row['ID'];
    $Name =$row['Name'];
    $Age =$row['Age'];
    $Email =$row['Email'];
    $Phone =$row['Phone'];
    $District =$row['District'];
  

  ?>

<tr>
  <td><?php echo $ID; ?></td>
  <td><?php echo $Name; ?></td>
  <td><?php echo $Age; ?></td>
  <td><?php echo $Email; ?></td>
  <td><?php echo $Phone; ?></td>
  <td><?php echo $District; ?></td>
</tr>
    </tr>
    <?php }?>
  </table>
  
</div>
 

 
</body>
</html>
