<?php

  $host_addres="127.0.0.1";
    $sql_username="root";
    $sql_userpasswd="748748748";
    $access_database_name='johnson';
$link = mysqli_connect($host_addres, $sql_username, $sql_userpasswd, $access_database_name);

                if (!$link) {
                    die(' Database Connect Error (' . mysqli_connect_errno() . ') '
                            . mysqli_connect_error());
                    exit();
                }else{
//                echo"conncet OK";
                }
                

$sql = "INSERT INTO ajax_test_table (x ,y, name)
VALUES (0, 0, '$name')";

if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>