<?php

include "db_conn.php";
session_start();
$tmpname= $_SESSION['user_name'];
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<?php include_once('head.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>


        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .cart-container {
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        .cart-item img {
            max-width: 80px;
            max-height: 80px;
            margin-right: 10px;
        }

        .checkout-btn {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body style="background-color: #333;">

    <header>
        <h1>Shopping Cart</h1>
    </header>

    
    <div class="home-center">
        <form method="post" action="">

                <div class="home-border">
                  <div class="home-filter">
                    <img
                      alt="image"
                      src="public/Icons/location.svg"
                      class="home-image"
                    />
                    <input
                      type="text"
                      placeholder="Destination"
                      class="home-textinput input"
                    />
                    <input
                      type="date"
                      placeholder="Date"
                      class="home-textinput1 input"
                    />
                    <input
                      type="number"
                      placeholder="Day"
                      class="home-textinput2 input"
                      name="day" 
                      id = "day"
                    />
                
                    </div>
                  </div>
                  </from>
                </div>
    

    <div class="cart-container">
    <div class="row">
			     <div class="col-lg-7 col-md-12">
				   <div class="card" style="min-height:485px">
				       <div class="card-header card-header-text">
					      <h4 class="card-title">Employess Stats</h4>
						  <p class="category">New employees on 15th December, 2016</p>
					   </div>
					   <div class="card-content table-responsive">
					       <table class="table table-hover">
						      <thead class="text-primary">

								 <th>Hotel Name</th>
                                 <th>Location</th>
								 <th>Contact Information</th>
                                 <th>Check-In/Check-Out Times</th>
                                 <th>Price and Booking</th>
								 </tr>
							  </thead>
							  <tbody>
                                <?php

                                    if (isset($_GET['delete_user'])) {
                                        $userId = $_GET['delete_user'];
                                        $deleteSql = "DELETE FROM selected_hotels WHERE id = $userId";
                                        if ($conn->query($deleteSql) === TRUE) {
                                            echo "User with ID $userId has been deleted.";
                                        } else {
                                            echo "Error deleting user: " . $conn->error;
                                        }
                                    }

                                    // Retrieve data from the database
                                    $sql = "SELECT * FROM selected_hotels WHERE username = '$tmpname' AND pay = 0";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";

                                            echo "<td>" . $row['hotel_name'] . "</td>";
                                            echo "<td>" . $row['location'] . "</td>";
                                            echo "<td>" . $row['contact_information'] . "</td>";
                                            echo "<td>" . $row['cct'] . "</td>";
                                            echo "<td>" . $row['pb'] . "</td>";
                                            echo '<td><a href="#" onclick="confirmDelete(' . $row["id"] . ');">Delete</a></td>';
                                            echo "</tr>";
                                            $x=$row['pb'];

                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>No records found.</td></tr>";
                                    }
                                ?>

							  </tbody>
						   </table>
                           
					       <table class="table table-hover">
						      <thead class="text-primary">

								 <th>Full Name</th>
                                 <th>Location</th>
								 <th>Contact Information</th>
                                 <th>tour_offerings</th>
                                 <th>cost_par_hour</th>
								 </tr>
							  </thead>
							  <tbody>
                                <?php

                                    if (isset($_GET['delete_user'])) {
                                        $userId = $_GET['delete_user'];
                                        $deleteSql = "DELETE FROM selected_topurgide WHERE id = $userId";
                                        if ($conn->query($deleteSql) === TRUE) {
                                            echo "User with ID $userId has been deleted.";
                                        } else {
                                            echo "Error deleting user: " . $conn->error;
                                        }
                                    }

                                    // Retrieve data from the database
                                    $sql = "SELECT * FROM selected_topurgide WHERE username = '$tmpname' AND pay = 0" ;
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";

                                            echo "<td>" . $row['full_name'] . "</td>";
                                            echo "<td>" . $row['location'] . "</td>";
                                            echo "<td>" . $row['contact_information'] . "</td>";
                                            echo "<td>" . $row['tour_offerings'] . "</td>";
                                            echo "<td>" . $row['cost_par_hour'] . "</td>";
                                            echo '<td><a href="#" onclick="confirmDelete(' . $row["id"] . ');">Delete</a></td>';
                                            echo "</tr>";
                                            $y=$row['cost_par_hour'];
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>No records found.</td></tr>";
                                    }
                                ?>

							  </tbody>
						   </table>
                           <table>
                           <thead class="text-primary">

                                <th>Driver Name</th>
                                <th>Location</th>
                                <th>Car Name</th>
                                <th>Total Seats</th>
                                <th>Car Number</th>
                                <th>Per Hour Cost (TK)</th>
                                <th>Contact Information</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                if (isset($_GET['delete_user'])) {
                                    $userId = $_GET['delete_user'];
                                    $deleteSql = "DELETE FROM selected_vehicles WHERE id = $userId";
                                    if ($conn->query($deleteSql) === TRUE) {
                                        echo "User with ID $userId has been deleted.";
                                    } else {
                                        echo "Error deleting user: " . $conn->error;
                                    }
                                }

                                // Retrieve data from the database
                                $sql = "SELECT * FROM selected_vehicles WHERE username = '$tmpname' AND pay = 0";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";

                                        echo "<td>" . $row['driver_name'] . "</td>";
                                        echo "<td>" . $row['location'] . "</td>";
                                        echo "<td>" . $row['car_name'] . "</td>";
                                        echo "<td>" . $row['total_seats'] . "</td>";
                                        echo "<td>" . $row['car_number'] . "</td>";
                                        echo "<td>" . $row['per_hour_cost'] . "</td>";
                                        echo "<td>" . $row['contact_information'] . "</td>";
                                        echo '<td><a href="#" onclick="confirmDelete(' . $row["id"] . ');">Delete</a></td>';
                                        echo "</tr>";
                                        $z=$row['per_hour_cost'];
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>No records found.</td></tr>";
                                }
                                ?>




                                </tbody>
                                </table>
                                <?php


                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    // Retrieve form data and store it into variables
                                    
                                    $number = ($x * $_POST['day']) + ($y * $_POST['day']) + ($z * $_POST['day']);

                                    // Update the number in the database
                                    $sql = "UPDATE pay SET amount = '$number' WHERE username = '$tmpname'"; // Assuming id 1 for simplicity, update it based on your table structure
                                    $result = $conn->query($sql);

                                }
                                ?>


					   </div>
				   </div>
				 <div>
			  </div>

              <a href="pay.php" class="checkout-btn">Checkout</a>
    </div>

</body>
</html>
<?php include_once('fotter.php');?>
<?php
}else{
        header("Location: login.php");
        exit();
    }
?>
