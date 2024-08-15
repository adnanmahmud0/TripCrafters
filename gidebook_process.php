<?php 
include "db_conn.php";
session_start();
$tmpname= $_SESSION['user_name'];
$y=0;
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selected_topurgide"])) {
            // Create a new table for selected hotels if it doesn't exist
            $sql_create_table = "CREATE TABLE IF NOT EXISTS selected_topurgide (
                id INT AUTO_INCREMENT PRIMARY KEY,
                full_name VARCHAR(255) NOT NULL,
                contact_information VARCHAR(255) NOT NULL,
                location VARCHAR(255) NOT NULL,
                image VARCHAR(255) NOT NULL,
                tour_offerings VARCHAR(255) NOT NULL,
                cost_par_hour VARCHAR(255) NOT NULL,
                username VARCHAR(255) NOT NULL,
                pay int
            )";
            $conn->query($sql_create_table);

            // Insert selected hotels into the new table
            foreach ($_POST["selected_topurgide"] as $id) {
                $sql_insert = "INSERT INTO selected_topurgide (full_name, location, contact_information, tour_offerings, image, cost_par_hour, username, pay)
                              SELECT full_name, location, contact_information, tour_offerings, photo, cost_par_hour, '$tmpname', '$y'
                              FROM tour_gide_info
                              WHERE id = $id";
                $conn->query($sql_insert);
            }

            $msg = "Selected hotels have been saved to the new table.";

        }

        $conn->close();

        header("Location: gidebook.php");
        exit();

    }else{
        header("Location: login.php");
        exit();
    }
    ?>