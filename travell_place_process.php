<?php 
include "db_conn.php";
session_start();

$tmpname= $_SESSION['user_name'];
$y=0;
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selected_tourist_spots"])) {


    // Insert selected hotels into the new table
    foreach ($_POST["selected_tourist_spots"] as $id) {
        $sql_insert = "INSERT INTO selected_tourist_spots (image, spot_name, location, description, division, district, avg_cost, username, pay) 
                        SELECT image, spot_name, location, description, division, district, avg_cost, '$tmpname', '$y'
                        FROM tourist_spots 
                        WHERE id = $id";

                        
        $conn->query($sql_insert);

    }

    $msg = "Selected hotels have been saved to the new table.";
}

$conn->close();

header("Location: travell_place.php");
exit();

}else{
    header("Location: login.php");
    exit();
}
?>
