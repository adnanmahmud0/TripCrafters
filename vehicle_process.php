<?php 
include "db_conn.php";
session_start();
$tmpname= $_SESSION['user_name'];
$y=0;
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selected_vehicles"])) {
    // Create a new table for selected hotels if it doesn't exist
    $sql_create_table = "CREATE TABLE IF NOT EXISTS selected_vehicles (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        driver_name VARCHAR(255) NOT NULL,
        car_name VARCHAR(255) NOT NULL,
        contact_information VARCHAR(255) NOT NULL,
        location VARCHAR(255) NOT NULL,
        photo VARCHAR(255) NOT NULL,
        car_number VARCHAR(255) NOT NULL,
        total_seats VARCHAR(255) NOT NULL,
        per_hour_cost VARCHAR(255) NOT NULL,
        pay int
    )";
    $conn->query($sql_create_table);

    // Insert selected hotels into the new table
    foreach ($_POST["selected_vehicles"] as $id) {
        $sql_insert = "INSERT INTO selected_vehicles (driver_name, car_name, contact_information, location, photo, car_number, total_seats, per_hour_cost, username, pay) 
                        SELECT driver_name, car_name, contact_information, location, photo, car_number, total_seats, per_hour_cost, '$tmpname', '$y'
                        FROM car_info 
                        WHERE id = $id";
        $conn->query($sql_insert);
    }

    $msg = "Selected hotels have been saved to the new table.";
}

$conn->close();

header("Location: vehicle.php");
exit();

}else{
    header("Location: login.php");
    exit();
}
?>
