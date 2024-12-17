<?php
include 'db.php';

function fetchDocuments($conn) {
    $sql = "SELECT * FROM documents";
    $result = mysqli_query($conn, $sql);
    $documents = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $documents[] = $row;
    }

    return $documents;
}
