<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-type: application/json; charset=utf-8");

require_once "conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM results";
    $result = mysqli_query($conn, $sql);

    $students = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $students[] = $row;
    }

    echo json_encode($students);
}
?>