<?php

    // connect to a database
    $conn = mysqli_connect('localhost','root','','ajaxtest');


    echo "processing...";

    //check for get varaiable
    if(isset($_GET['name'])){
        echo 'GET: Your name is '. $_GET['name'];
    }

    //check for post
    if(isset($_POST['name'])){
        echo 'POST: Your name is '. $_POST['name'];

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $query = "INSERT INTO users(name) VALUES('$name')";

        if(mysqli_query($conn,$query)){
            echo 'User Added...';
        }else{
            echo 'error'. mysqli_error($conn);
        }
    }
?>