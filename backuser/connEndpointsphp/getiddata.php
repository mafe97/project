<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-type: application/json; charset=utf-8");

require_once "conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $sql = "SELECT * FROM results WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result)   
 > 0) {
        $student = mysqli_fetch_assoc($result);
        echo json_encode($student);
    } else {
        http_response_code(404); // Not Found
        echo json_encode(['error' => 'Estudiante no encontrado']);
    }
    mysqli_stmt_close($stmt);
}
?>