<?php
include 'condb.php';

header('Content-Type: application/json');

try {
    $stmt = $conn->query("SELECT * FROM customers");
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($datas);
    
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>
