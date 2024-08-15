<?php

include "db_conn.php";
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    $tmpname = $_SESSION['user_name'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Consolidated code for updating different tables
        $tablesToUpdate = ['selected_vehicles', 'selected_tourist_spots', 'selected_topurgide', 'selected_hotels'];

        foreach ($tablesToUpdate as $table) {
            $sql = "UPDATE $table SET pay = 1 WHERE username = ? AND pay = 0";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $tmpname);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo "Table $table updated successfully";
            } else {
                echo "Error updating table $table: " . $stmt->error;
            }

            $stmt->close();
        }

        $conn->close();

        header("Location: home.php");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>
