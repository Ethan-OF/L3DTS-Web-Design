<?php

    $email = $_REQUEST['email'];

    $connection = new mysqli('localhost', 'root', 'usbw', 'news');

    if ($connection->connect_error)
    {
        die("Error encountered, connection failed");
    }

    else
    {
        //$stmt = $connection->prepare("INSERT INTO collection (email) values(?)");

        $sql = "INSERT INTO collection (email) VALUES ('$email')";
    
        // send message back to contact page
        if($connection -> query($sql) === TRUE) {
            header('Location: '.$_SERVER['HTTP_REFERER'] . '?message=msg');
            exit();
        }
        else {
            echo 'Error: Check code';
            exit();
        }

        //CHANGED SECTION
        //header('Location: '.$_SERVER['HTTP_REFERER'] . '?message=msg');
        //CHANGED SECTION
    }
?>