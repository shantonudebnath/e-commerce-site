<?php
$conn = new mysqli("localhost","id18359592_echobook","Echo1@@@@@@@","id18359592_bookorder");
$sql = "SELECT * FROM book";
if ($stmt = $conn->prepare($sql)) {
    $stmt->execute();
    $stmt->store_result();
    printf("Total Order: %d.\n", $stmt->num_rows);
}
?>
