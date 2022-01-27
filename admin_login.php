<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
</head>
<body style="background-color:LightGray">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row justify-content-center mt-5">
          <div class="col-lg-4 col-md-6 col-sm-6 shadow p-3 mb-5 bg-danger rounded">
            <div class="card shadow">
              <div class="card-title text-center border-bottom">
                <h2 class="p-3">Admin Login</h2>
              </div>
              <div class="card-body">
                <form action="admin.php" method="post">
                <?php if (isset($_GET['error'])) { ?>

                <p class="error"><?php echo $_GET['error']; ?></p>

                <?php } ?>
                  <div class="mb-4">
                    <label for="email" class="form-label fw-bold">Username</label>
                    <input type="text" class="form-control border border-dark" name="uname" />
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control border border-dark" name="password" />
                  </div>
                  <div class="d-grid gap-2 col-4 mx-auto">
                    <button type="submit" class="btn btn-info border border-dark">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    
</body>
</html>