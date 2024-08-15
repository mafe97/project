<?php
require_once "conn.php";

$host = "localhost";
$username = "root";
$password = "";
$db_name = "student";

function connect() {
    global $host, $username, $password, $db_name;
    return new mysqli($host, $username, $password, $db_name);
}

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-type: application/json; charset=utf-8");

$method = $_SERVER['REQUEST_METHOD'];
$conn = connect();

switch ($method) {
    case 'GET':
        $result = $conn->query("SELECT * FROM results");
        $students = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($students);
        break;

    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        //$classes = array('Grade 6','Grade 7','Grade 8','Grade 9','Grade 10');
        $name = $data['name'];
        $class = $data['class'];
        $marks = $data['marks'];
        $conn->query("INSERT INTO results (name, class, marks) VALUES ('$name', '$class', '$marks')");
        echo json_encode(['message' => 'Student created']);

        // if (in_array($class, $classes)) {
        //     $conn->query("INSERT INTO results (name, class, marks) VALUES ('$name', '$class', '$marks')");
        //     echo json_encode(['message' => 'Student created']);
        // } else {
        //     echo json_encode(['message' => 'Invalid class']);
        // }
        break;
        
    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        $id = $data['id'];
        $name = $data['name'];
        $class = $data['class'];
        $marks = $data['marks'];
        $conn->query("UPDATE results SET name='$name', class='$class', marks='$marks' WHERE id=$id");
        echo json_encode(['message' => 'Student updated']);
        break;

    case 'DELETE':
        $id = $_GET['id'];
        $conn->query("DELETE FROM results WHERE id=$id");
        echo json_encode(['message' => 'Student deleted']);
        break;

    default:
        echo json_encode(['message' => 'Invalid request']);
        break;
}

$conn->close();
?>
