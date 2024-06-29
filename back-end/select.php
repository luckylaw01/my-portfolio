<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myPortfolio"; // Change to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(['error' => $conn->connect_error]));
}

// Function to create a record in a table
function createRecord($table, $data) {
    global $conn;
    $columns = implode(", ", array_keys($data));
    $values = implode("', '", array_values($data));
    $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
    if ($conn->query($sql) === TRUE) {
        return json_encode(['success' => true, 'id' => $conn->insert_id]);
    } else {
        return json_encode(['error' => $conn->error]);
    }
}

// Function to read records from a table
function readRecords($table) {
    global $conn;
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    $data = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return json_encode($data);
}

// Function to update a record in a table based on one field
function updateRecordSingle($table, $field, $value, $data) {
    global $conn;
    $updates = [];
    foreach ($data as $key => $val) {
        $updates[] = "$key = '$val'";
    }
    $sql = "UPDATE $table SET " . implode(", ", $updates) . " WHERE $field = '$value'";
    if ($conn->query($sql) === TRUE) {
        return json_encode(['success' => true]);
    } else {
        return json_encode(['error' => $conn->error]);
    }
}

// Function to update a record in a table based on two fields
function updateRecordDouble($table, $field1, $value1, $field2, $value2, $data) {
    global $conn;
    $updates = [];
    foreach ($data as $key => $val) {
        $updates[] = "$key = '$val'";
    }
    $sql = "UPDATE $table SET " . implode(", ", $updates) . " WHERE $field1 = '$value1' AND $field2 = '$value2'";
    if ($conn->query($sql) === TRUE) {
        return json_encode(['success' => true]);
    } else {
        return json_encode(['error' => $conn->error]);
    }
}

// Function to delete a record in a table based on one field
function deleteRecordSingle($table, $field, $value) {
    global $conn;
    $sql = "DELETE FROM $table WHERE $field = '$value'";
    if ($conn->query($sql) === TRUE) {
        return json_encode(['success' => true]);
    } else {
        return json_encode(['error' => $conn->error]);
    }
}

// Function to delete a record in a table based on two fields
function deleteRecordDouble($table, $field1, $value1, $field2, $value2) {
    global $conn;
    $sql = "DELETE FROM $table WHERE $field1 = '$value1' AND $field2 = '$value2'";
    if ($conn->query($sql) === TRUE) {
        return json_encode(['success' => true]);
    } else {
        return json_encode(['error' => $conn->error]);
    }
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $table = $_POST['table'];
    $data = $_POST['data'];
    $field = $_POST['field'] ?? null;
    $value = $_POST['value'] ?? null;
    $field1 = $_POST['field1'] ?? null;
    $value1 = $_POST['value1'] ?? null;
    $field2 = $_POST['field2'] ?? null;
    $value2 = $_POST['value2'] ?? null;

    switch ($action) {
        case 'create':
            echo createRecord($table, $data);
            break;
        case 'read':
            echo readRecords($table);
            break;
        case 'updateSingle':
            echo updateRecordSingle($table, $field, $value, $data);
            break;
        case 'updateDouble':
            echo updateRecordDouble($table, $field1, $value1, $field2, $value2, $data);
            break;
        case 'deleteSingle':
            echo deleteRecordSingle($table, $field, $value);
            break;
        case 'deleteDouble':
            echo deleteRecordDouble($table, $field1, $value1, $field2, $value2);
            break;
        default:
            echo json_encode(['error' => 'Invalid action']);
    }
} else {
    echo json_encode(['error' => 'Invalid request method']);
}

$conn->close();
?>
