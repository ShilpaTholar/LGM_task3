<?php 

session_start();
include "db_conn.php";


if (isset($_SESSION['password']) && isset($_SESSION['email'])) {
    

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body style="background-color:LightGray">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<h1 class="text-center text-success">Result</h1>
<div class="text-dark fw-bold" style="font-size:x-large">Student details</div>
<dl class="row" style="font-size:x-large">
  <dt class="col-sm-2  fw-bold text-primary">Name</dt>
  <dd class="col-sm-10 "><?php echo $_SESSION['stud_name']?></dd>
  

  <dt class="col-sm-2 fw-bold text-primary">Email-id</dt>
  <dd class="col-sm-10 "><?php echo $_SESSION['email']?></dd>
 

  <dt class="col-sm-2  fw-bold text-primary">Roll no</dt>
  <dd class="col-sm-10"><?php echo $_SESSION['stud_roll']?></dd>
 

  <dt class="col-sm-2 fw-bold text-primary">Date of birth</dt>
  <dd class="col-sm-10"><?php echo $_SESSION['DOB']?></dd>
  <hr class="w-100 border border-dark">


  
</dl>
     <div class="container">
     <div class="row justify-content-center mt-3">
     <div class="col-8">
     <table class="table table-hover table-bordered border-dark">
     <thead class="table-dark">
     <tr>
          <th scope="col">Id</th>
          <th scope="col">Subject</th>
          <th scope="col">Total marks</th>
          <th scope="col">Marks obtained</th>

     </tr>
     </thead>

     <?php 
     $roll_no=$_SESSION['stud_roll'];
     $sql = "SELECT * FROM subject WHERE stud_roll=$roll_no";
     $result = mysqli_query($conn, $sql); 
     $total=0;
     while($row = mysqli_fetch_array($result))
     
       {
          echo "<tr>";

          echo "<td>" . $row['subject_id'] . "</td>";
        
          echo "<td>" . $row['subject_name'] . "</td>";
        
          echo "<td>" . $row['total_marks'] . "</td>";
        
          echo "<td>" . $row['marks_obtained'] . "</td>";

        
          echo "</tr>"; 

          $total=$total+$row['marks_obtained'];
     
       }
     
     echo "</table>";

     echo "<p class='text-end' style='font-size:x-large'> Total marks = {$total}"."</p>";
     
     ?>
     </div>
     </div>
     </div>

     <a href="logout.php" class="btn btn-info d-grid gap-2 col-1 mx-auto border-dark">Logout</a>

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>

