<?php

    //create connection
    $conn = mysqli_connect('localhost','root','','ajaxtest');

    $query = 'SELECT * FROM users';

    //GEt reuslt
    $result = mysqli_query($conn, $query);

    //Fetch data
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($users);

?>