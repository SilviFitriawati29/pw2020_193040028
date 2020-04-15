<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","pw_193040028" );


function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows ;
}



?>