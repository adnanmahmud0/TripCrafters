<?php 
include "db_conn.php";
session_start();
$tmpname= $_SESSION['user_name'];
$y=0;
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selected_hotels"])) {
            // Create a new table for selected hotels if it doesn't exist
            $sql_create_table = "CREATE TABLE IF NOT EXISTS selected_hotels (
                id INT AUTO_INCREMENT PRIMARY KEY,
                location VARCHAR(255),
                hotel_name VARCHAR(255),
                contact_information VARCHAR(255),
                description TEXT,
                image VARCHAR(255),
                cct VARCHAR(255),
                pb DECIMAL(10,2),
                username VARCHAR(255),
                pay int
            )";
            $conn->query($sql_create_table);

            // Insert selected hotels into the new table
            foreach ($_POST["selected_hotels"] as $hotel_id) {
                $sql_insert = "INSERT INTO selected_hotels (location, hotel_name, contact_information, image, cct, pb, username, pay)
                              SELECT location, hotel_name, contact_information, images, cct, pb, '$tmpname', '$y'
                              FROM hotel_info
                              WHERE id = $hotel_id";
                $conn->query($sql_insert);
            }

            $msg = "Selected hotels have been saved to the new table.";

        }

        $conn->close();

        header("Location: hotel_book.php");
        exit();

    }else{
        header("Location: login.php");
        exit();
    }
    ?>