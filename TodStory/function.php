<?php
include 'connect.php';

function getProducts($isHome)
{
    global $conn;
    if ($isHome){
    $query = 'SELECT * FROM products LIMIT 3'; 
    }
    else{$query = 'SELECT * FROM products';}

    $fetch = mysqli_query($conn, $query);
    $res = [];

    while ($row = mysqli_fetch_assoc($fetch)) {
        $res[] = $row;
    }

    return $res;
}

function getProudct($id)
{
    global $conn;

    $query = "SELECT * FROM products WHERE id = $id";
    $fetch = mysqli_query($conn, $query);
    $res = [];

    while ($row = mysqli_fetch_assoc($fetch)) {
        $res[] = $row;
    }

    return $res[0];
}
