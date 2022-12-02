<?php

    require 'config.php';

    $id = $_GET['ID_FEEDBACK'];

    $result = mysqli_query($conn, "DELETE FROM feedback WHERE ID_FEEDBACK = $id");

    if($result){
        echo"
        <script>
            alert('- Account have been deleted -');
            document.location.href = 'admin.php';
        </script>";
    } else{
        echo"
        <script>
            alert('- Account cannot be deleted, Try again -');
            document.location.href = 'admin.php';
        </script>";
    }

?>