<?php 

session_start(); 

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: admin_login.php?error=Username is required");

        exit();

    }else if(empty($pass)){

        header("Location: admin_login.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM admin WHERE Admin_name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Admin_name'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];

                $_SESSION['password'] = $row['password'];

                $_SESSION['uname'] = $row['Admin_name'];

                $_SESSION['Admin_id'] = $row['Admin_id'];

                $_SESSION['subject_id'] = $row['subject_id'];

               


                header("Location: admin_home.php");

                exit();

            }else{

                header("Location: admin_login.php?error=Incorect username or password");

                exit();

            }

        }else{

            header("Location: admin_login.php?error=Incorect username or password");

            exit();

        }

    }

}else{

    header("Location: admin_login.php");

    exit();

}