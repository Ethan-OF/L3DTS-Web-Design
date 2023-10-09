<?php

    $email = $_POST['email'];

    $connection = new mysqli('localhost', 'root', '', 'news');

    if ($connection->connect_error)
    {
        die("Error encountered, connection failed");
    }

    else
    {
        $stmt = $connection->prepare("insert into collection(email) values(?)");

        $stmt->bind_param("s", $email);
        
        $stmt->execute();

        echo "Insert Successful";

        $stmt->close();
        $connection->close();
    }
?>