<?php
include ('connect.php');
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $sql= "INSERT INTO contact_us (name, email, message) VALUES('$name', ' $email', '$message')";
    if(mysqli_query($conn, $sql))
        {
            echo "Value Inserted";
            header("Location: http://localhost/Edu-Xplorer/Contact.html");
        }
        else
        echo "Value not Inserted";
}

// include ('connect.php');
// echo "hello world!";
// if(isset($_POST['firstName'])&&isset($_POST['lastName'])&&isset($_POST['email'])&&isset($_POST['dob'])&&isset($_POST['cc'])&&isset($_POST['password']))
// {
//     $firstName=$_POST["firstName"];
//     echo $firstName;
//     $lastName=$_POST['lastName'];
//     $email=$_POST['email'];
//     $dob=$_POST['dob'];
//     $gender=$_POST['cc'];
//     $password=$_POST['password'];
//     $sql="INSERT INTO sign_up (firstName, LastName, email, dob, gender, password) VALUES('$firstName', '$lastName', '$email', '$dob', '$gender', '$password')";
//     if(mysqli_query($conn, $sql))
//         {
//             echo $dob;
//             echo "Value Inserted";
//         }
//         else
//         echo "Value not Inserted";
// }
?>