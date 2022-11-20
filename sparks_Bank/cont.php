<?php
    include 'config.php';
    $sql = "SELECT * FROM contact";
    $result = mysqli_query($conn,$sql);
    $first = $_POST['fname'];
    $last = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $query = "INSERT INTO `contact` (`First_Name`, `Last_Name`, `Email`, `Message`) VALUES('$first','$last','$email','$message') ";
    mysqli_query($conn,$query);
    if($query){
        echo "<script> alert('Submitted Successful');
                        window.location='contact.php';
              </script>";
   }
?>