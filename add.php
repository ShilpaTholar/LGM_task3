<?php 

session_start();
include "db_conn.php";

    

 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
</head>
<body style="background-color:Lightgray">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row justify-content-center mt-3">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card shadow  border border-dark">
              <div class="card-title text-center border-bottom">
                <h2 class="p-3">New Student</h2>
              </div>
              <div class="card-body">
                <form action="newrecord.php" method="post">
                <?php if (isset($_GET['error'])) { ?>

                <p class="error"><?php echo $_GET['error']; ?></p>

                <?php } ?>
                <div class="mb-4">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" class="form-control border border-dark" name="name" />
                  </div>
                  <div class="mb-4">
                    <label for="rollno" class="form-label fw-bold">Rollno</label>
                    <input type="number" class="form-control border border-dark" name="rollno" />
                  </div>
                  <div class="mb-4">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="text" class="form-control border border-dark" name="email" />
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control border border-dark" name="password" />
                  </div>
                  <div class="mb-4">
                    <label for="dob" class="form-label fw-bold">Date of birth</label>
                    <input type="date" class="form-control border border-dark" name="dob" />
                  </div>
                  <div class="mb-4">
                    <label for="marksobtained" class="form-label fw-bold">Marks Obtained</label>
                    <input type="number" class="form-control border border-dark" name="marksobtained" />
                  </div>
                  <div class="d-grid gap-2 col-6 mx-auto mb-4">
                    <button type="submit" class="btn btn-info">Submit</button>
                  </div>
                  <input type="hidden" name="subject_id" id="subject_id" value="<?php echo $_SESSION['subject_id']?>">
                </form>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    
</body>
</html>