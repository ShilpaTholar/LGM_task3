<?php
session_start();
include "db_conn.php";
          
        $name = $_POST['name'];
        $email = $_POST['email'];
        $Roll_no = $_POST['rollno'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $dob=$_POST['dob'];
        $subid=$_POST['subject_id'];
        $subname="SELECT subject_name from subject where subject_id=$subid";
        $result = mysqli_query($conn, $subname);
        $row=mysqli_fetch_array($result);
        $x=json_encode($row);
        $y=json_decode($x);
        $marksobtained=$_POST['marksobtained'];

            $sql = "INSERT into student (stud_roll,stud_name,email,password,DOB) values('$Roll_no','$name', '$email' ,'$password','$dob')";
            $sql1="INSERT into subject (subject_id,subject_name,total_marks,marks_obtained,stud_roll) values ('$subid','$y->subject_name',100,' $marksobtained','$Roll_no')";
            if(mysqli_query($conn,$sql)){
                if(mysqli_query($conn,$sql1)){


                // echo "<h3>data stored in a database successfully." 
                //     . " Please browse your localhost php my admin" 
                //     . " to view the updated data</h3>"; 
                header("Location: admin_home.php");
                }
      
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
          
          
?>