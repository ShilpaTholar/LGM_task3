<?php 

session_start(); 

include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['password']);

    if (empty($email)) {

        header("Location: index.php?error=Email is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM student WHERE email='$email' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];

                $_SESSION['password'] = $row['password'];

                $_SESSION['stud_name'] = $row['stud_name'];

                $_SESSION['stud_roll'] = $row['stud_roll'];

                $_SESSION['DOB'] = $row['DOB'];


                header("Location: home.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect email or password");

                exit();

            }

        }else{
            

            header("Location: index.php?error=Incorect email or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}