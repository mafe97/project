<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-type: application/json; charset=utf-8");

require_once "conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'];
    $name = $data['name'];
    $grade = $data['grade'];
    $marks = $data['marks'];

    $sql = "UPDATE results SET name = ?, class = ?, marks = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssii", $name, $grade, $marks, $id);

    if (mysqli_stmt_execute($stmt)) {
        http_response_code(200); // OK
        echo json_encode(['message' => 'Student updated successfully']);
    } else {
        http_response_code(500); // Internal Server Error
        echo json_encode(['error' => 'Error updating student']);
    }
    mysqli_stmt_close($stmt);
}
?>