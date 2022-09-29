<?php

include "conn.php";

if (isset($_POST['submit'])) {
    if ($conn) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $msg = $_POST['msg'];

        $sql = "INSERT INTO enquires(name,email,phone,message) VALUES ('$name','$email','$phone','$msg' )";
        if (mysqli_query($conn, $sql)) {
       echo '<script>
       alert("thanks for contact. we will response as soon as possible");
  
    document.location.href="index.html";
  
   </script>';

        } else {
            echo "data insertion failed";
        }
    }
} else {
    header('Location: index.html');
}

?>
