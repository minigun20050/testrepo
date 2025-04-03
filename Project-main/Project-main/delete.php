<?php
// Database
require_once('./database.php');

// Method validation
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    http_response_code(405);
    die('Only POST requests are allowed');
}

// Required fields check
$required_fields = array('id', 'i1', 'i2', 'i3');
foreach ($required_fields as $field) {
    if (!isset($_POST[$field])) {
        http_response_code(400);
        die($field . ' required');
    }
}

$id = $_POST["id"];
$date = $_POST["i1"];
$time = $_POST["i2"];
$data = $_POST["i3"];

// Fields type validation
if (!ctype_digit(strval($id))) {
    http_response_code(400);
    die('ID should be an integer.');
}

$id = intval($id);
$date = strval($date);
$time = strval($time);
$data = strval($data);

$query = "DELETE FROM db WHERE Description = ? and Time = ? and Date = ? and id = ?";
$statement = mysqli_prepare($conn, $query);
if (!$statement) {
    mysqli_close($conn);

    http_response_code(500);
    die('Cannot prepare query: ' . mysqli_error($conn));
}

mysqli_stmt_bind_param($statement, "sssi", $data, $time, $date, $id);

$result = mysqli_stmt_execute($statement);
if (!$result) {
    $error = mysqli_stmt_error($statement);

    mysqli_stmt_close($statement);
    mysqli_close($conn);

    die('Statement execution error: ' . $error);
}

mysqli_stmt_close($statement);
mysqli_close($conn);

header("Location: index.php?success=1");
exit();

?>