<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-type: application/json; charset=utf-8");

require_once "conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $name = $data['name'];
    $grade = $data['grade'];
    $marks = $data['marks'];

    if ($name != "" && $grade != "" && $marks != "") {
        $sql = "INSERT INTO results (`name`, `class`, `marks`) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssi", $name, $grade, $marks);

        if (mysqli_stmt_execute($stmt)) {
            http_response_code(201); // Created
            echo json_encode(['message' => 'Student created successfully']);
        } else {
            http_response_code(500); // Internal Server Error
            echo json_encode(['error' => 'Error creating student']);
        }
        mysqli_stmt_close($stmt);
    } else {
        http_response_code(400); // Bad Request
        echo json_encode(['error' => 'Null inputs']);
    }
}
?>